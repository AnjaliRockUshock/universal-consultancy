<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Detail | BRAINZ.</title>
    <style>
        /* --- Root & Reset (Shared with Home Page) --- */
        :root {
            --bg-dark: #030a10;
            --card-bg: #0a1622;
            --text-muted: #94a3b8;
            --accent-white: #ffffff;
            --primary-red: #5c1a26;
            /* Brand color for the detail section */
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: white;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #333;
        }

        /* --- NAVIGATION (Identical to Home Page) --- */
        .navbar {
            position: absolute;
            /* Sits on top of the red header */
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 50px;
            z-index: 100;
        }

        .menu-icon {
            width: 30px;
            height: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            cursor: pointer;
        }

        .menu-icon span {
            display: block;
            height: 3px;
            width: 100%;
            background-color: var(--accent-white);
            border-radius: 2px;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: 900;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: white;
        }

        .navbar nav {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        /* --- SIDEBAR MENU (Identical to Home Page) --- */
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background-color: var(--card-bg);
            z-index: 1000;
            transition: 0.4s ease-in-out;
            padding: 50px 30px;
            box-shadow: 10px 0 30px rgba(0, 0, 0, 0.5);
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            cursor: pointer;
            color: var(--text-muted);
        }

        .sidebar-links {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 50px;
        }

        .sidebar-links a {
            color: rgb(216, 26, 13);
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .overlay {
            position: fixed;
            display: none;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }

        .overlay.active {
            display: block;
        }

        /* --- DETAIL PAGE SPECIFIC STYLES --- */
        .profile-header {
            background-color: var(--primary-red);
            color: white;
            padding: 120px 10% 60px;
            /* Top padding increased to clear navbar */
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .profile-image {
            width: 280px;
            height: 350px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .header-text h1 {
            font-size: 36px;
            margin: 0;
            font-weight: 700;
        }

        .header-text p {
            font-size: 18px;
            margin: 10px 0;
            opacity: 0.9;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .content-section {
            margin-bottom: 45px;
        }

        .section-title {
            border-left: 5px solid var(--primary-red);
            background: #fdf2f4;
            padding: 12px 20px;
            margin-bottom: 20px;
        }

        .section-title h2 {
            font-size: 22px;
            margin: 0;
            color: var(--primary-red);
        }

        .content-text {
            font-size: 17px;
            color: #444;
            line-height: 1.8;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 20px;
            }

            .profile-header {
                flex-direction: column;
                text-align: center;
                padding-top: 100px;
            }

            .profile-image {
                width: 220px;
                height: 280px;
            }
        }
    </style>
</head>

<body>

    <div class="overlay" id="overlay"></div>
    <div class="sidebar" id="sidebar">
        <div class="close-btn" id="closeBtn">&times;</div>
        <div class="sidebar-links">
            <a href="/">Home</a>
            <a href="/honorary-doctorate">Honorary Doctorate</a>
            <a href="/service">Services</a>
            <a href="/about-us">About Us</a>
            <a href="/contact-us">Contact Us</a>
        </div>
    </div>

    <header class="navbar">
        <div class="menu-icon" id="menuBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo">BRAINZ.</div>
        <nav>
            <a href="#">Subscribe</a>
            <span style="cursor: pointer; font-size: 18px; color: white;">🔍</span>
        </nav>
    </header>

    <section class="profile-header">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500" alt="Profile"
            class="profile-image">
        <div class="header-text">
            <h1>Amb. Prof. Olufolake Abdulrazaq</h1>
            <p>Founder - Ajike People Support Centre</p>
            <p style="font-style: italic; font-size: 14px; max-width: 500px; color: #ffccd5;">
                "Her Excellency Ambassador Olufolake Abdulrazaq: Leading with Benevolence, Diligence and Service."
            </p>
        </div>
    </section>

    <main class="container">
        <div class="content-section">
            <div class="section-title">
                <h2>About Amb. Prof. Olufolake Abdulrazaq</h2>
            </div>
            <p class="content-text">
                Leading with grace and grit, Her Excellency Ambassador Olufolake Abdulrazaq is a diplomat, humanitarian,
                and advocate for social change. As the Founder of Ajike People Support Centre, she has focused her
                career
                on empowering women, youth, and the less privileged through various socio-economic initiatives.
            </p>
        </div>

        <div class="content-section">
            <div class="section-title">
                <h2>Style of Communication</h2>
            </div>
            <p class="content-text">
                Her style of communication is noted for being <strong>transparent, empathetic, and inclusive</strong>.
                Whether speaking at global summits or engaging with local communities, she ensures that her message
                is clear and impactful.
            </p>
        </div>
    </main>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const closeBtn = document.getElementById('closeBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        // Toggle Menu
        menuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            overlay.classList.add('active');
        });

        const closeMenu = () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        };

        closeBtn.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);
    </script>
</body>

</html>