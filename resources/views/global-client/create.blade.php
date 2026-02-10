<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Client Details | Universal Consulting</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Color Palette from your website: 
   Primary Dark: #0b1111 | Card Dark: #121818 | Accent Red: #e31e24 
*/

        body {
            background-color: #0b1111;
            /* Matches your site background */
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }

        .profile-card {
            background: #121818;
            /* Matches your footer/card areas */
            padding: 40px;
            border-radius: 12px;
            max-width: 900px;
            width: 100%;
            border: 1px solid #1f2929;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        h2 {
            color: #ffffff;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #888;
            font-size: 14px;
            margin-bottom: 30px;
            border-bottom: 1px solid #333;
            padding-bottom: 15px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .full-width {
            grid-column: span 2;
        }

        .input-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #bbb;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 12px 15px;
            background: #0b1111;
            /* Deep inset look */
            border: 1px solid #333;
            border-radius: 6px;
            color: #fff;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: #e31e24;
            /* Website brand red */
            outline: none;
            box-shadow: 0 0 8px rgba(227, 30, 36, 0.2);
        }

        .save-btn {
            background-color: #e31e24;
            /* Matches "Get Started" button */
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: 0.3s;
            margin-top: 20px;
        }

        .save-btn:hover {
            background-color: #b3171b;
            transform: translateY(-2px);
        }

        /* Custom file upload styling */
        input[type="file"] {
            padding: 8px;
            border: 1px dashed #444;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            text-align: left;
        }

        .full-width {
            grid-column: span 2;
        }

        .profile-card {
            background: #121818;
            padding: 40px;
            border-radius: 12px;
            max-width: 800px;
            margin: 40px auto;
            border: 1px solid #1f2929;
        }

        textarea {
            width: 100%;
            background: #0b1111;
            border: 1px solid #333;
            color: white;
            padding: 12px;
            border-radius: 5px;
            resize: vertical;
        }

        input[type="file"] {
            color: #888;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="profile-card">
        <h2>Expert Profile Creator</h2>
        <p class="subtitle">Enter comprehensive professional details to match the board of experts layout.</p>

        <form action="{{ route('global-clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="e.g. Jelena Sokic" required>
                </div>
                <div class="input-group">
                    <label>Professional Designation</label>
                    <input type="text" name="designation" placeholder="e.g. Founder & CEO, JSMasterMind" required>
                </div>

                <div class="input-group">
                    <label>Tagline</label>
                    <input type="text" name="tagline" placeholder="e.g. Executive Strategist, Coach & Mediator">
                </div>
                <div class="input-group">
                    <label>Subline (Mission Statement)</label>
                    <input type="text" name="subline" placeholder="e.g. Unleashing Vision. Aligning Leadership.">
                </div>

                <div class="input-group">
                    <label>Expert Image</label>
                    <input type="file" name="img" accept="image/*" required>
                </div>
                <div class="input-group">
                    <label>LinkedIn URL</label>
                    <input type="url" name="linkedin" placeholder="https://linkedin.com/in/...">
                </div>

                <div class="input-group full-width">
                    <label>Professional Biography</label>
                    <textarea name="bio" rows="8"
                        placeholder="Enter the full career history and achievements..."></textarea>
                </div>

                <div class="input-group full-width">
                    <label>Core Expertise & Domains (Use ● for bullets)</label>
                    <textarea name="expertise" rows="6"
                        placeholder="● Integrated Business Strategy&#10;● Executive Leadership..."></textarea>
                </div>

                <div class="input-group full-width">
                    <label>Signature Quote</label>
                    <input type="text" name="quote"
                        placeholder="&quot;Leadership isn't about having all the answers...&quot;">
                </div>

            </div>

            <div style="text-align: right; margin-top: 30px;">
                <button type="submit" class="save-btn">Publish Expert Profile</button>
            </div>
        </form>
    </div>

</body>

</html>