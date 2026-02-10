<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;
use Log;

class GlobalClientController extends Controller
{
    protected $experts;

    public function __construct(Expert $experts)
    {
        $this->experts = $experts;
    }

    public function index()
    {
        $experts = $this->experts->all();

        return view('global-client.list', compact('experts'));
    }

    public function createExpertView()
    {
        return view('global-client.create');
    }

    public function createExpert(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'designation' => 'required|string',
                'tagline' => 'required|string',
                'subline' => 'required|string',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'linkedin' => 'required|url',
                'bio' => 'required|string',
                'expertise' => 'required|string',
                'quote' => 'required|string'
            ]);

            $data = $request->except('img');

            // ✅ Handle Image Upload
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('expert_images'), $imageName);

                $data['img'] = 'expert_images/' . $imageName;
            }

            $expert = $this->experts->createExperts($data);

            return redirect()->route('global-clients.index')->with('success', 'Expert created successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed while creating expert: ' . $e->getMessage(), ['errors' => $e->errors()]);
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Error occurred while creating expert: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.')->withInput();
        }
    }

    public function show($id)
    {
        $expert = $this->experts->find($id);

        if (!$expert) {
            return redirect()->route('expert-detailed')->with('error', 'Expert not found.');
        }

        return view('expert-detailed', compact('expert'));
    }

    public function expertList()
    {
        $experts = $this->experts->all();

        return view('leadership-executive-coaching', compact('experts'));
    }
}
