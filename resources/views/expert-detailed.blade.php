<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Profile | The Universal Consulting Group</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* ... your existing CSS ... */

        .linkedin-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
            color: #0a1622;
            /* LinkedIn Blue */
            text-decoration: none;
            background: white;
            padding: 10px 13px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .linkedin-link:hover {
            transform: scale(1.05);
            background: #f0f7ff;
        }

        .linkedin-link i {
            font-size: 18px;
        }
    </style>
    <style>
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

        /* --- Root & Reset --- */
        :root {
            --bg-dark: #030a10;
            --card-bg: #0a1622;
            --text-muted: #94a3b8;
            --accent-white: #ffffff;
            --primary-red: #5c1a26;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: white;
            color: #333;
        }

        /* --- Navbar (Minimal Version) --- */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 25px 50px;
            z-index: 100;
            box-sizing: border-box;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: 900;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        /* --- Profile Header --- */
        .profile-header {
            background: linear-gradient(rgba(3, 10, 16, 0.6), rgba(3, 10, 16, 0.9)),
                url('../assets/images/expert/b.avif');
            color: white;
            padding: 120px 10% 60px;
            display: flex;
            align-items: center;
            gap: 40px;

        }

        .profile-image {
            width: 280px;
            height: 380px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .header-text h1 {
            font-size: clamp(28px, 5vw, 42px);
            margin: 0;
        }

        .header-text p {
            font-size: 18px;
            margin: 10px 0;
            opacity: 0.9;
        }

        /* --- Content --- */
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .section-title {
            border-left: 5px solid var(--primary-red);
            background: #fdf2f4;
            padding: 12px 20px;
            margin: 30px 0 20px;
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
            white-space: pre-line;
        }

        .quote-box {
            font-style: italic;
            color: var(--primary-red);
            font-size: 20px;
            border-top: 1px solid #eee;
            margin-top: 40px;
            padding-top: 20px;
        }

        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
                padding-top: 100px;
            }

            .navbar {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <div class="logo"><a href="/">The Universal Consulting Group</a></div>
        <nav><a href="javascript:history.back()">← Back to Board</a></nav>
    </header>

    <section class="profile-header">
        <img id="expertImg" src="" alt="Expert" class="profile-image">
        <div class="header-text">
            <h1 id="expertName">Expert Name</h1>
            <p id="expertTagline">Designation</p>
            <p id="expertSubline" style="font-style: italic; font-size: 14px; max-width: 500px; color: #ffccd5;"></p>
            <a id="expertLinkedin" href="#" target="_blank" class="linkedin-link">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </section>

    <main class="container">
        <div class="section-title">
            <h2>About</h2>
        </div>
        <div id="expertBio" class="content-text"></div>

        <!-- <div class="section-title">
            <h2>Key Expertise</h2>
        </div> -->
        <div id="expertExpertise" class="content-text"></div>

        <div class="section-title">
            <h2>Quotes</h2>
        </div>

        <div id="expertQuote" class="quote-box"></div>
    </main>

    <script>
        // 1. Data Object (Store details for all experts here)
        const expertData = {
            "jelena": {
                name: "Jelena Sokic",
                tagline: "Founder & CEO, JSMasterMind | Executive Strategist, Coach & Mediator",
                subline: "Unleashing Vision. Aligning Leadership. Accelerating Growth.",
                img: "assets/images/expert/expert1.jpeg",
                bio: `Jelena Sokic is a global strategist and transformational leader with over 25 years of experience in entrepreneurship, executive development, and international business. Having represented more than 300 world-leading brands across global markets, Jelena’s career has been a masterclass in translating vision into tangible success. Her journey—from earning an MBA to becoming an executive coach, negotiator, and internationally licensed mediator—reflects a rare evolution from mastering business strategy to mastering human potential. 

                    Recognized as one of the “Top 10 Influential Women to Look Out For in 2025,” Jelena brings to the Universal Consulting Group Experts Board a powerful blend of hard-earned business acumen and transformative leadership insight. The highs of global success and the lessons from adversity have shaped her resilient, adaptive, and deeply human-centered approach to growth
                    
                    As the Founder and CEO of JSMasterMind, Jelena built her consultancy to address a gap she repeatedly observed in visionary leaders and organizations: not a lack of ideas, but a disconnect between strategy, mindset, and execution. JSMasterMind was created as a master consultancy that bridges this divide—empowering leaders as much as structuring their businesses. Her work helps clients establish strong foundations, set empowered goals, and become role models in their fields.
                    
                    Jelena’s expertise lies in creating actionable alignment between strategic vision and leadership capability across three critical domains:
                    
                    `,
                expertise: `     ● 	Integrated Business Strategy – Designing scalable growth, market expansion, and operational frameworks grounded in analytics and firsthand global experience.

                     ● 	Executive Leadership Transformation – Coaching founders and C-suite leaders to step into purpose, enhance influence, and build resilient, high-performing teams.

                ● 	High-Stakes Negotiation & Mediation – Facilitating critical dialogue and resolving complex business conflicts, removing barriers to progress
                
                This unique triad ensures organizations don’t just have a plan—they have the empowered leadership and negotiation capability to execute it.
                
                Through JSMasterMind, Jelena delivers strategic business consulting, executive and entrepreneurial coaching, leadership and negotiation workshops, conflict resolution and mediation, and keynote engagements on strategic leadership, global entrepreneurship, and women in business. Her signature value is what she calls “Blended Mastery”—the rare combination of a veteran CEO’s results-driven mindset with the depth of an executive coach and mediator.
                
                A defining aspect of Jelena’s work is her ability to make leaders and teams “coachable,” creating the openness required for real transformation. One notable example includes guiding a European tech founder through strategic positioning, leadership communication, and stakeholder engagement—resulting in a Series B raise at 150% of target and a 30% increase in operational efficiency.
                
                Jelena’s vision aligns seamlessly with the mission of the Universal Consulting Group: to democratize access to integrated, world-class expertise. She envisions a future where leadership is defined by strategic empathy, ethical grounding, and continuous learning. Through the Experts Board, she is committed to empowering the next generation of leaders—especially women—to build businesses and dialogues that are as globally competitive as they are purpose-driven.
                
                Her work transforms individual potential into collective progress.`,
                quote: `"Leadership isn't about having all the answers; it's about creating shared understanding."`,

                linkedin: "https://www.linkedin.com/in/jelena-sokic-8-jsmastermind/?originalSubdomain=ch"
           
            },

            "gemma": {
                name: "Gemma Rubio Rodrigo",
                tagline: "Founder, Define The Fine | Strategic Communication & Behavioural Insights Expert",
                subline: "Connecting the Dots. Shaping Perception. Elevating Leadership Impact.",
                img: "assets/images/expert/expert2.jpeg",
                bio: `Gemma Rubio is an award-winning strategist, mentor, and communication architect who works at the intersection of neuroscience, consumer behaviour, and executive leadership. With a career spanning entrepreneurship, education, and global advisory roles, Gemma helps senior leaders, entrepreneurs, and influential public figures increase their impact through cognitive clarity, contextual awareness, and strategic discretion.
                
                Her philosophy is simple yet powerful: communication is fuel, and behaviour is the compass. By blending applied neuroscience with executive communication, Gemma enables leaders to make confident decisions while preserving trust, authority, and authenticity—especially in complex, high-stakes environments where every word, gesture, and choice carries weight.
                
                As the Founder of Define The Fine, Gemma built a consultancy where she applies her proprietary methodology, Invisible dynamics: high-level protocols for cognitive leadership, dedicated to bridging the gap between what organizations want to say and how people actually perceive, feel, and decide. Her work focuses on designing leadership communication and customer-centered strategies that strengthen emotional connection with brands, products, and institutions. Each engagement is tailored to cultural, behavioural, and market-specific nuances, ensuring that organizations communicate in ways their audiences naturally understand and trust.
                
                Gemma’s expertise centers on three core pillars:
                
                `,
                expertise: `●	Strategic Communication & Brand Identity – Crafting leadership narratives, positioning, and messaging that build authority and emotional resonance.

                ●	Neuroscience & Consumer Behaviour – Applying behavioural science and neuromarketing to shape perception, influence decision-making, and design meaningful experiences.

                ●	Executive Training & Mentorship – Implementing Invisible Dynamics protocols to prepare leaders to operate with clarity, discretion, and confidence in high-impact environments.

                Her approach is distinguished by one defining principle: discretion is strategic intelligence. Respecting cognitive and emotional boundaries is not etiquette—it is leadership mastery. This philosophy has made her a trusted advisor to founders, executives, institutions, and startups across Europe, the Middle East, Africa, and beyond.

                Gemma is also deeply committed to education and ecosystem building. She lectures in MBA programs and universities on communication strategy, neuromarketing, and entrepreneurship, and serves as mentor, board member, and advisor across multiple international initiatives. Her work has earned global recognition, including honors such as Best Startup Mentor – Impact Leadership Global Award 2024, Woman Leader in Corporate Communications 2024, and Global Woman Power Leader 2024

                Through Define The Fine, Gemma delivers:

                ●	Invisible dynamics high-level protocols for cognitive leadership.
                ●	Leadership communication strategy and brand positioning
                ●	Executive and founder mentorship
                ●	Neuromarketing and behavioural insight programs
                ●	Workshops on strategic communication, influence, and innovation
                ●	Advisory for startups, scale-ups, and institutions navigating transformation

                What sets Gemma apart is her ability to translate complexity into clarity. She does not simply teach leaders what to say—she equips them with the awareness to understand when, why, and how to communicate for maximum impact. Her work ensures that strategy is not only intelligent, but also human.

                Aligned with the mission of the Universal Consulting Group Experts Board, Gemma envisions a future where leadership is guided by insight, empathy, and behavioural intelligence. By contributing her expertise to this global ecosystem, she aims to empower leaders—especially women—to operate with precision, confidence, and ethical influence, transforming communication into a catalyst for sustainable growth and meaningful connection.`,
                quote: `"I treat balance as a leadership responsibility, not a personal luxury. Recovery isn't a reward for hard work; it's the infrastructure that sustains performance."`,

                linkedin: "https://www.linkedin.com/in/gemmarubio/?originalSubdomain=es"
            },

            "david": {
                name: "David Lyons",
                tagline: " Founder & Director, OptimalBody Fitness | Founder, MS Fitness Challenge Charity",
                subline: "Rewriting Limits. Restoring Strength. Transforming Lives.",
                img: "assets/images/expert/expert3.jpeg",
                bio: `David Lyons is a transformational leader, fitness innovator, and global advocate for those living with chronic illness. A former U.S. Marine, martial artist, boxer, and competitive bodybuilder, David’s life embodies the belief that adversity is not a stop sign—it is a call to rise.
                
                Born and raised in the Bronx and Queens, New York, David’s foundation was forged in grit and discipline. After serving in the U.S. Marine Corps and studying film and television production, he discovered his true calling in fitness. Early in his career, he faced his first major setback: banks refused to fund his dream of owning a gym. Rather than retreat, he strengthened his credentials, earning a B.S. in Nutrition while working on gym floors. Through persistence, he rose from salesperson to General Manager—and eventually owner of multiple successful gym locations across the United States.
                
                In 2006, David’s journey took a dramatic turn when he was diagnosed with Multiple Sclerosis at the age of 47. What could have ended his career became the defining moment of his life’s mission. He recognized a critical void in the fitness industry for people living with chronic conditions—individuals often told to “take it easy” or accept decline. David refused that narrative.
                
                From this moment was born OptimalBody Fitness and the MS Fitness Challenge Charity—a global platform designed to bridge the gap between medical diagnosis and physical empowerment. David created not just workouts, but a comprehensive lifestyle system integrating fitness, nutrition, mindset, and faith. His mission is clear: to prove that physical limitations do not define the human spirit.
                
                Today, David leads a worldwide movement that has reached over 25 countries and impacted tens of thousands of lives. What began as in-person events across the United States evolved during COVID-19 into a fully digital global ecosystem—democratizing specialized fitness for those who need it most.
                
                David’s work is driven by the transformation of the “underdog.” His greatest reward is watching individuals once defeated by diagnosis rediscover strength, voice, and purpose. A calculated risk-taker, he is fueled by the word impossible. Where others see limits, David sees legacy.
                
                His leadership philosophy is anchored in one core principle: Integrity.
                “People may follow your talent for a while,” he says, “but they stay for your character. Your word must be your bond—whether you’re in a boardroom or on a gym floor.”

                Living with MS himself, David practices what he teaches. He manages his condition through strict adherence to the OptimalBody–OptimalMind system—combining anti-inflammatory nutrition, disciplined training, and faith-driven mindset. His life is a living blueprint of balance, resilience, and purpose.

                From the streets of New York to induction into the National Fitness Hall of Fame, David Lyons’ story proves that what is meant to break us can become the foundation of our greatest impact. Through the Universal Consulting Group Experts Board, he brings a rare fusion of leadership, lived experience, and transformational methodology—empowering individuals and communities worldwide to rise beyond circumstance and reclaim their strength.`,
                expertise: ``,
                quote: `"I treat balance as a leadership responsibility, not a personal luxury. Recovery isn't a reward for hard work; it's the infrastructure that sustains performance"`,

                linkedin: "https://www.linkedin.com/in/david-lyons-61989b16/"
            }
        };

        // 2. Logic to fill the page
        // 2. Logic to fill the page
        function loadExpert() {
            // This splits the URL path into an array: ["", "expert-details", "jelena"]
            const pathSegments = window.location.pathname.split('/');

            // This grabs the last segment (the ID)
            const id = pathSegments[pathSegments.length - 1];

            const data = expertData[id];

            if (data) {
                document.getElementById('expertName').innerText = data.name;
                document.getElementById('expertTagline').innerText = data.tagline;
                document.getElementById('expertSubline').innerText = data.subline;

                const linkBtn = document.getElementById('expertLinkedin');
                if (data.linkedin) {
                    linkBtn.href = data.linkedin;
                    linkBtn.style.display = "inline-flex"; // Show if exists
                } else {
                    linkBtn.style.display = "none"; // Hide if empty
                }

                // Use Laravel's base path for images to prevent broken links
                document.getElementById('expertImg').src = window.location.origin + '/' + data.img;

                document.getElementById('expertBio').innerText = data.bio;
                document.getElementById('expertExpertise').innerText = data.expertise;
                document.getElementById('expertQuote').innerText = data.quote;
                document.title = data.name + " | Profile";
            } else {
                // This runs if the 'id' from the URL doesn't match 'jelena', 'sadhguru', or 'bozoma'
                document.querySelector('main').innerHTML = "<h1 style='text-align:center; padding:50px;'>Expert profile '" + id + "' not found.</h1>";
            }
        }

        window.onload = loadExpert;
    </script>
</body>

</html>