<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Global Experts Board</title>
    <style>
        /* --- Root & Reset --- */
        :root {
            --bg-dark: #030a10;
            --card-bg: #0a1622;
            --text-muted: #94a3b8;
            --accent-white: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--bg-dark);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: var(--accent-white);
            overflow-x: hidden;
        }

        /* --- Navigation --- */
        .navbar {
            position: absolute;
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

        /* --- SIDEBAR MENU --- */
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            /* Hidden by default */
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
            /* Slide in */
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
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- Overlay when menu is open --- */
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

        /* --- Hero Section --- */
        .hero {
            position: relative;
            width: 100%;
            height: 90vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(3, 10, 16, 0.6), rgba(3, 10, 16, 0.9)),
                url('assets/images/expert/b.avif');
            background-size: cover;
            background-position: center;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: clamp(40px, 10vw, 90px);
            line-height: 0.9;
            margin: 0;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -2px;
        }

        .hero p {
            max-width: 800px;
            margin: 30px auto;
            font-size: clamp(14px, 2vw, 18px);
            line-height: 1.6;
            color: #d1d5db;
        }

        /* --- Content Panel --- */
        .main-content {
            position: relative;
            margin-top: -100px;
            z-index: 10;
            padding: 0 40px 100px;
        }

        .awards-panel {
            background-color: var(--card-bg);
            border-radius: 40px;
            padding: 60px 40px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .flex-centered-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .honoree-card {
            width: 220px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .honoree-card:hover {
            transform: translateY(-12px);
        }

        .portrait-container {
            width: 100%;
            aspect-ratio: 3 / 4;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 15px;
            background-color: #111;
        }

        .portrait-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .honoree-info h3 {
            font-size: 18px;
            font-weight: 800;
            margin: 0 0 5px 0;
        }

        .honoree-info p {
            font-size: 12px;
            color: var(--text-muted);
            margin: 0;
            line-height: 1.4;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 20px;
            }

            .honoree-card {
                width: 160px;
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

        <div class="logo">The Universal Consultancy</div>

        <nav>
            <a href="#">Subscribe</a>
            <span style="cursor: pointer; font-size: 18px;">🔍</span>
        </nav>
    </header>

    <section class="hero">
        <h1>The Global Experts Board</h1>
        <p>
            The Universal Consulting Group Experts Board brings together distinguished leaders, strategists, and
            innovators from across the globe. Each member is carefully selected for their expertise, impact, and
            commitment to guiding businesses toward sustainable growth and transformation.
        </p>
    </section>

    <main class="main-content">
        <div class="awards-panel">
            <div class="flex-centered-grid">

                <a href="{{ url('/expert-details/jelena') }}" style="text-decoration: none; color: inherit;">
                    <div class="honoree-card">
                        <div class="portrait-container">
                            <img src="assets/images/expert/expert1.jpeg" alt="Jelena Sokic">
                        </div>
                        <div class="honoree-info">
                            <h3>Jelena Sokic</h3>
                            <p>Founder & CEO, JSMasterMind | Executive Strategist</p>
                        </div>
                    </div>
                </a>

               <a href="{{ url('/expert-details/gemma') }}" style="text-decoration: none; color: inherit;">
                    <div class="honoree-card">
                        <div class="portrait-container">
                            <img src="assets/images/expert/expert2.jpeg" alt="Gemma Rubio Rodrigo">
                        </div>
                        <div class="honoree-info">
                            <h3>Gemma Rubio Rodrigo</h3>
                            <p>Founder, Define The Fine | Strategic Communication & Behavioural Insights Expert</p>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/expert-details/david') }}" style="text-decoration: none; color: inherit;">
                    <div class="honoree-card">
                        <div class="portrait-container">
                            <img src="assets/images/expert/expert3.jpeg" alt="David Lyons">
                        </div>
                        <div class="honoree-info">
                            <h3>David Lyons</h3>
                            <p> Founder & Director, OptimalBody Fitness | Founder, MS Fitness Challenge Charity</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const closeBtn = document.getElementById('closeBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        // Open Menu
        menuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            overlay.classList.add('active');
        });

        // Close Menu
        const closeMenu = () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        };

        closeBtn.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);
    </script>

</body>

</html>