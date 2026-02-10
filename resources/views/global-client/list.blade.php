<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Client Details | Universal Consulting</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #0b1111;
            color: #ffffff;
        }

        .admin-container {
            padding: 40px;
            max-width: 1200px;
            margin: auto;
        }

        /* Header Section */
        .list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #1f2929;
            padding-bottom: 20px;
        }

        .add-btn {
            background-color: #e31e24;
            /* Branding Red from Website */
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            transition: 0.3s;
        }

        .add-btn:hover {
            background-color: #b3171b;
            transform: translateY(-2px);
        }

        /* Table Styling */
        .expert-table {
            width: 100%;
            border-collapse: collapse;
            background: #121818;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #1f2929;
        }

        .expert-table th {
            background: #1a2222;
            color: #e31e24;
            text-align: left;
            padding: 15px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .expert-table td {
            padding: 15px;
            border-bottom: 1px solid #1f2929;
            vertical-align: middle;
        }

        .expert-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .expert-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e31e24;
        }

        .expert-name {
            font-weight: bold;
            color: #fff;
            display: block;
        }

        .expert-designation {
            font-size: 12px;
            color: #888;
        }

        .action-links a {
            color: #bbb;
            text-decoration: none;
            margin-right: 15px;
            font-size: 13px;
        }

        .action-links a:hover {
            color: #e31e24;
        }
    </style>

</head>

<body>

    <div class="admin-container">
        <div class="list-header">
            <div>
                <h2>Experts Board</h2>
                <p style="color: #888; font-size: 14px;">Manage the professional profiles displayed on the platform.</p>
            </div>
            <a href="{{ route('global-clients.create') }}" class="add-btn">+ Add New Expert</a>
        </div>

        <table class="expert-table">
            <thead>
                <tr>
                    <th>Expert Details</th>
                    <th>Tagline</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experts as $expert)
                    <tr>
                        <td>
                            <div class="expert-info">
                                <img src="{{ asset( $expert->img) }}" class="expert-img"
                                    alt="{{ $expert->name }}">
                                <div>
                                    <span class="expert-name">{{ $expert->name }}</span>
                                    <span class="expert-designation">{{ $expert->designation }}</span>
                                </div>
                            </div>
                        </td>
                        <td style="font-size: 13px; color: #ccc; max-width: 300px;">
                            {{ Str::limit($expert->tagline, 60) }}
                        </td>

                        <td class="action-links">
                            <form action="" method="POST"
                                style="display:inline;">
                                @csrf @method('DELETE')
                                <a href="#" onclick="this.closest('form').submit();" style="color: #ff4444;">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>