<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    public $fillable = [
        'name',
        'designation',
        'tagline',
        'subline',
        'img',
        'linkedin',
        'bio',
        'expertise',
        'quote'
    ];

    public function createExperts(array $data)
    {
        $expert = $this->create([
            'name'        => $data['name'],
            'designation' => $data['designation'],
            'tagline'     => $data['tagline'],
            'subline'     => $data['subline'],
            'img'         => $data['img'],
            'linkedin'    => $data['linkedin'],
            'bio'         => $data['bio'],
            'expertise'   => $data['expertise'],
            'quote'       => $data['quote']
        ]);

        return $expert;
    }
}
