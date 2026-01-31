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
            font-family: 'Inter', sans-serif;
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


        .navbar .logo {
            font-size: 20px;
            font-weight: 900;
            letter-spacing: 2px;
            text-transform: uppercase;
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
        }

        /* --- Sidebar & Overlay --- */
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background-color: var(--card-bg);
            z-index: 1000;
            transition: 0.4s ease;
            padding: 50px 30px;
        }

         .sidebar .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            cursor: pointer;
            color: var(--text-muted);
        }

        .sidebar.active {
            left: 0;
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
            height: 60vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(3, 10, 16, 0.8), rgba(3, 10, 16, 1)), url('assets/images/expert/b.avif');
            background-size: cover;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 50px;
            text-transform: uppercase;
            margin: 0;
        }

        .hero p {
            max-width: 700px;
            color: #cbd5e1;
            margin-top: 20px;
        }

        /* --- THE FIX: FORCING 4 PER ROW WITH ANCHOR TAGS --- */
        .main-content {
            margin-top: -120px;
            padding: 0 20px 100px;
        }

        .awards-panel {
            background-color: var(--card-bg);
            border-radius: 40px;
            padding: 60px 30px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .flex-centered-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* This centers 3 items or the leftover 2 items */
            gap: 20px;
            width: 100%;
        }

        /* We target the <a> tag because it is the direct child of the flex container */
        .flex-centered-grid>a {
            flex: 0 0 calc(25% - 20px);
            /* Forces exactly 4 per row */
            text-decoration: none;
            color: inherit;
            display: block;
            /* Makes the anchor behave like a box */
        }

        .honoree-card {
            width: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
        }

        .honoree-card:hover {
            transform: translateY(-10px);
        }

        .portrait-container {
            width: 100%;
            aspect-ratio: 3 / 4;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 15px;
            background-color: #000;
        }

        .portrait-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .honoree-info h3 {
            font-size: 18px;
            margin: 0 0 5px 0;
        }

        .honoree-info p {
            font-size: 13px;
            color: var(--text-muted);
            margin: 0;
        }

        /* --- Responsive Breaks --- */
        @media (max-width: 1024px) {
            .flex-centered-grid>a {
                flex: 0 0 calc(50% - 20px);
            }

            /* 2 per row on tablets */
        }

        @media (max-width: 600px) {
            .flex-centered-grid>a {
                flex: 0 0 100%;
            }

            /* 1 per row on mobile */
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

        <div class="logo"><a href="/">The Universal Consulting Group</a></div>

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