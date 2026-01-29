@extends('master')
@section('title', 'TUCG')

<link rel="stylesheet" href="assets/css/home-1.css">

@section('banner')
    <div class="banner-section" style="padding-bottom: 3%;">
        <h1 class="heading split-collab">
            Empowering Global Leaders <br> and Organizations to Achieve <br> Excellence
        </h1>
        <p class="description">
            At Universal Consulting Group, we help individuals and organizations elevate their growth, credibility, and
            recognition through strategic consulting, leadership development, and global partnerships.
        </p>
        <a href="/contact-us" class="button primary-link-btn">Contact Us
            <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                    <path
                        d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                        fill="white" />
                </svg> </span></a>
    </div>
@endsection

@section('content')
    <!-- about section -->
    <section class="about" style="background-color: #0e1916;padding-top: 4%;padding-bottom:inherit;">
        <div class="animated-circle left"></div>
        <div class="container position-relative z-3">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="content">
                        <h2 class="subtitle">About Universal Consulting Group</h2>
                        <h1 class="title skew-up">
                            Your Partner in Growth, Recognition & <br>Global Excellence
                        </h1>
                    </div>
                    <p>
                        Universal Consulting Group is a premier consulting firm dedicated to empowering professionals and
                        organizations to reach new heights of success.
                        Our expertise spans across business consulting, executive coaching, branding, and international
                        recognition advisory.
                        We collaborate with globally respected institutions and leaders to deliver outcomes that enhance
                        reputation, leadership, and visibility.
                    </p>
                    <h2 style="color: #d90a2c;">Highlights:</h2>
                    <div class="company">
                    </div>
                    <div class="company" style="margin-bottom: 2%;">
                        <li style="color: #faf5f6ff;">
                            Trusted by business leaders, executives, and innovators across industries
                        </li>
                    </div>
                    <div class="company" style="margin-bottom: 2%;">
                        <li style="color: #faf5f6ff;">
                            Partnerships with internationally recognized universities and global networks
                        </li>
                    </div>
                    <div class="company">
                        <li style="color: #faf5f6ff;">
                            Personalized approach focused on results, impact, and recognition
                        </li>
                    </div>
                    <a href="#" class="button primary-link-btn">Read More
                        <span><svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                xmlns="../../../www.w3.org/2000/svg.html">
                                <path
                                    d="M6.84375 5.78125L2.28125 10.4062C2.125 10.5625 1.875 10.5625 1.75 10.4062L1.125 9.78125C0.96875 9.625 0.96875 9.40625 1.125 9.25L4.8125 5.5L1.125 1.78125C0.96875 1.625 0.96875 1.375 1.125 1.25L1.75 0.625C1.875 0.46875 2.125 0.46875 2.28125 0.625L6.84375 5.25C7 5.40625 7 5.625 6.84375 5.78125Z"
                                    fill="white" />
                            </svg> </span></a>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="position-relative">
                        <div class="img">
                            <div class="img-1 wow overlay-anim zoom-effect">
                                <img class="img-fluid w-100 " src="assets/images/home-1/about-2.png" alt="">
                            </div>
                            <div class="img-2 wow overlay-anim zoom-effect">
                                <img class="img-fluid w-100 " src="assets/images/home-1/about-1.png" alt="">
                            </div>
                        </div>

                        <section class="video-area">
                            <div class="video-play-btn ripple">
                                <a class="play-btn popup-video" href="../../../https://www.youtube.com/watch?v=6sgg23AfF6Q">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <g clip-path="url(#clip0_351_722)">
                                            <path
                                                d="M15.7911 8.8584L15.7924 8.85933C15.8655 8.90943 15.9328 8.97599 15.9978 9.06315C16.2379 9.4193 16.1469 9.90109 15.7955 10.1428L15.7949 10.1433L4.08695 18.2257C4.08691 18.2257 4.08688 18.2257 4.08684 18.2257C3.56895 18.5829 2.86328 18.2122 2.86328 17.5833V1.41844C2.86328 0.789571 3.5689 0.418834 4.08678 0.775971C4.08684 0.776009 4.08689 0.776047 4.08695 0.776085L15.7911 8.8584Z"
                                                stroke="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_351_722">
                                                <rect width="19" height="19" fill="white"
                                                    transform="translate(-0.00390625 0.000976562)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    play video
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section -->

    <!-- business partner start -->
    <section class="business-partner" style="padding-top: 3%;padding-bottom: inherit;">
        <div class="animated-circle right"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-12 section-title">
                    <h2 class="subtitle">Our Services</h2>
                    <h1 class="title split-collab">
                        All You Need to Keep Your <br> Business Booming
                    </h1>
                    <p style="color:#fff; padding-bottom: 5%;">
                        We deliver a wide range of strategic consulting services designed <br> to help individuals and
                        organizations grow, lead, and be recognized globally.
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="grid-card">
                        <div class="animatedLine">
                            <div class="animatedLine-1"></div>
                            <div class="animatedLine-2"></div>
                        </div>
                        <div class="img">
                            <img class="" src="assets/images/home-1/web-browser.png" alt="">
                        </div>
                        <h3 class="title">Business Consulting</h3>
                        <p>
                            Develop tailored growth strategies, market insights, and operational excellence frameworks that
                            ensure measurable success.
                        </p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="grid-card">
                        <div class="animatedLine">
                            <div class="animatedLine-1"></div>
                            <div class="animatedLine-2"></div>
                        </div>
                        <div class="img">
                            <img src="assets/images/home-1/web-content.png" alt="">
                        </div>
                        <h3 class="title">Leadership & Executive Coaching</h3>
                        <p>
                            Empowering leaders through personalized coaching programs focused on mindset, communication, and
                            decision-making.
                        </p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="grid-card">
                        <div class="animatedLine">
                            <div class="animatedLine-1"></div>
                            <div class="animatedLine-2"></div>
                        </div>
                        <div class="img">
                            <img src="assets/images/home-1/optimization.png" alt="">
                        </div>
                        <h3 class="title">Branding & Public Relations</h3>
                        <p>
                            Creating impactfull personal and corporate brand identities with effective visibility and media
                            positioning.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="grid-card">
                            <div class="animatedLine">
                                <div class="animatedLine-1"></div>
                                <div class="animatedLine-2"></div>
                            </div>
                            <div class="img">
                                <img src="assets/images/home-1/optimization.png" alt="">
                            </div>
                            <h3 class="title">Academic & Honorary Recognition Consulting</h3>
                            <p>
                                Guiding accomplished professionals in achieving honorary doctorates and other prestigious
                                recognistions from internationally recognized institutions.
                            </p>
                            <!-- <ul>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>One Click Demo Import
                                </li>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>Easy Customizable for Web &amp; Mobile
                                </li>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>Fast Loading Website Builder
                                </li>
                            </ul> -->

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="grid-card">
                            <div class="animatedLine">
                                <div class="animatedLine-1"></div>
                                <div class="animatedLine-2"></div>
                            </div>
                            <div class="img">
                                <img src="assets/images/home-1/optimization.png" alt="">
                            </div>
                            <h3 class="title">Networking & Global Partnerships</h3>
                            <p>
                                Connecting you with high-level industry leaders, academic bodies, and influential
                                organizations to enhance your global footprint.
                            </p>
                            <!-- <ul>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>One Click Demo Import
                                </li>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>Easy Customizable for Web &amp; Mobile
                                </li>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>Fast Loading Website Builder
                                </li>
                            </ul> -->

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="grid-card">
                            <div class="animatedLine">
                                <div class="animatedLine-1"></div>
                                <div class="animatedLine-2"></div>
                            </div>
                            <div class="img">
                                <img src="assets/images/home-1/optimization.png" alt="">
                            </div>
                            <h3 class="title">Awards & Accolades Advisory</h3>
                            <p>
                                Strategic assistance in preparing, applying, and promoting achievements for top industry
                                awards and honors.
                            </p>
                            <!-- <ul>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>One Click Demo Import
                                </li>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>Easy Customizable for Web &amp; Mobile
                                </li>
                                <li>
                                    <span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M13.5938 0.625C13.75 0.46875 14 0.46875 14.125 0.625L15.0312 1.5C15.1562 1.65625 15.1562 1.90625 15.0312 2.03125L5.65625 11.4062C5.5 11.5625 5.28125 11.5625 5.125 11.4062L0.9375 7.25C0.8125 7.09375 0.8125 6.84375 0.9375 6.71875L1.84375 5.8125C1.96875 5.6875 2.21875 5.6875 2.375 5.8125L5.375 8.84375L13.5938 0.625Z"
                                                fill="#D90A2C" />
                                        </svg> </span>Fast Loading Website Builder
                                </li>
                            </ul> -->

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="img">
                        <img class="business-img" src="assets/images/home-1/business-partner.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="website-builder">
                        <div class="content">
                            <p>Ready to Take Your Career or Business to the Next Level?</p>
                            <h1> Partner with Universal Consulting Group to position yourself or your brand for global
                                recognition, leadership excellence, and lasting impact.</h1>
                        </div>
                        <div class="action">
                            <a href="https://www.linkedin.com/company/the-universal-consulting-group/"
                                class="button outline-link-btn">Get Started
                                <span>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path
                                            d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="ripling-animation">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animated-circle left"></div>
    </section>
    <!-- business partner ends -->

    <!-- upcoming events start -->
    <section class="upcoming-events">
        <div class="overlay"></div>
        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content">
                        <h2 class="subtitle">Upcoming Event</h2>
                        <h1 class="title skew-up"> Launching “Universal Foundation” — A Global NGO Initiative for Children’s
                            Education & Women’s Empowerment</h1>
                        <ul>
                            <li>
                                <span><svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <g clip-path="url(#clip0_381_20)">
                                            <path
                                                d="M5.42857 0.857143C5.42857 0.382143 5.04643 0 4.57143 0C4.09643 0 3.71429 0.382143 3.71429 0.857143V2.28571H2.28571C1.025 2.28571 0 3.31071 0 4.57143V5.14286V6.85714V16C0 17.2607 1.025 18.2857 2.28571 18.2857H13.7143C14.975 18.2857 16 17.2607 16 16V6.85714V5.14286V4.57143C16 3.31071 14.975 2.28571 13.7143 2.28571H12.2857V0.857143C12.2857 0.382143 11.9036 0 11.4286 0C10.9536 0 10.5714 0.382143 10.5714 0.857143V2.28571H5.42857V0.857143ZM1.71429 6.85714H14.2857V16C14.2857 16.3143 14.0286 16.5714 13.7143 16.5714H2.28571C1.97143 16.5714 1.71429 16.3143 1.71429 16V6.85714Z"
                                                fill="#D90A2C" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_381_20">
                                                <rect width="16" height="18.2857" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> </span>Date - To Be Announced
                                <!-- 06 December, 2025 -->
                            </li>
                        </ul>
                        <a class="button primary-link-btn"
                            href="https://www.linkedin.com/company/the-universal-consulting-group/">Become a Volunteer
                            <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="../../../www.w3.org/2000/svg.html">
                                    <path
                                        d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                        fill="white" />
                                </svg> </span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="../../../www.youtube.com/watchb143.html?v=pGbIOC83-So" class="popup-video">
                        <svg viewBox='0 0 200 200' width='200' height='200' xmlns='http://www.w3.org/2000/svg'
                            class="link__svg" aria-labelledby="link1-title link1-desc">

                            <path id="link-circle" class="link__path" d="M 20, 100 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0"
                                stroke="none" fill="none" />

                            <text class="link__text">
                                <textPath href="#link-circle" stroke="none">
                                    Universal Foundation - NGO 2025
                                </textPath>
                            </text>
                        </svg>
                        <span class="play-btn">
                            Join
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming events ends -->

    <!-- latest project -->
    <section class="latest-project" style="padding-top: 5%;padding-bottom: inherit;">
        <div class="animated-circle right"></div>
        <div class="animated-circle left"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="subtitle">Latest Projects</h2>
                    <h1 class="title split-collab">
                        See How We’re <br> Transforming Professionals and Businesses Globally
                    </h1>
                    <div class="grid-project">
                        <div class="grid-project-item mt-0 zoom-effect card-box">
                            <div class="img">
                                <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                    <img src="assets/images/home-1/latest-project-item-1.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div>
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <h3>Business Consulting</h3>
                                    </a>
                                </div>
                                <div class="arrows">
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M2.00076 15.7281L18.4737 4.58581M4.84375 1L19.5719 3.84299L16.7289 18.5711"
                                                stroke="white" stroke-width="1.5" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-project-item zoom-effect card-box">
                            <div class="img">
                                <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                    <img src="assets/images/home-1/latest-project-item-2.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div>
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <h3>Leadership &amp; Executive Coaching</h3>
                                    </a>
                                </div>
                                <div class="arrows">
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M2.00076 15.7281L18.4737 4.58581M4.84375 1L19.5719 3.84299L16.7289 18.5711"
                                                stroke="white" stroke-width="1.5" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="grid-project">
                        <div class="grid-project-item zoom-effect card-box">
                            <div class="img">
                                <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                    <img src="assets/images/home-1/project1.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div>
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <h3>Honorary Award Recipients</h3>
                                    </a>
                                </div>
                                <div class="arrows">
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M2.00076 15.7281L18.4737 4.58581M4.84375 1L19.5719 3.84299L16.7289 18.5711"
                                                stroke="white" stroke-width="1.5" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-project-item zoom-effect card-box">
                            <div class="img">
                                <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                    <img src="assets/images/home-1/latest-project-item-4.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div>
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <h3>Corporate Consulting Meetings</h3>
                                    </a>
                                </div>
                                <div class="arrows">
                                    <a href="https://www.linkedin.com/company/the-universal-consulting-group/">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="../../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M2.00076 15.7281L18.4737 4.58581M4.84375 1L19.5719 3.84299L16.7289 18.5711"
                                                stroke="white" stroke-width="1.5" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-project">
                        <a href="https://www.linkedin.com/company/the-universal-consulting-group/"><span>
                                <svg width="65" height="65" viewBox="0 0 65 65" fill="none"
                                    xmlns="../../../www.w3.org/2000/svg.html">
                                    <circle cx="32.5" cy="32.5" r="32" fill="#D90A2C" stroke="#D90A2C" />
                                    <path d="M24.0008 37.7281L40.4737 26.5858M26.8438 23L41.5719 25.843L38.7289 40.5711"
                                        stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </span>
                            More Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest project -->

    <!-- simple package -->
    <section class="simple-package" style="padding-top: 5%;padding-bottom: 3%;">
        <div class="animated-circle right"></div>
        <div class="animated-circle left"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="subtitle">Our Packages</h2>
                        <h1 class="title skew-up-2">
                            Choose the Plan That <br>
                            Fits Your Growth Goals
                        </h1>
                        <p style="color:#fff; padding-top: 2%;">
                            We provide flexible consulting packages customized to your needs — whether you’re an <br>
                            executive seeking recognition, a company pursuing growth, or a brand aiming for international
                            visibility.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="grid-package-item card-box zoom-effect">
                        <div class="img">
                            <a href="#">
                                <img src="assets/images/home-1/package-1.png" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <ul style="margin-bottom: 18%;">
                                <li>
                                    Standard Consulting Package
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Business & Branding Consultation
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Leadership Guidance
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Profile Evaluation
                                </li>
                            </ul>
                            <div class="price-link">
                                <a href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="grid-package-item card-box zoom-effect">
                        <div class="img">
                            <a href="#">
                                <img src="assets/images/home-1/package-2.png" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    Recognition Consulting Package
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Profile Review for Honorary Awards
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Documentation & Advisory Support
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Press & Media Visibility
                                </li>
                            </ul>
                            <div class="price-link">
                                <a href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="grid-package-item card-box zoom-effect">
                        <div class="img">
                            <a href="#">
                                <img src="assets/images/home-1/package-3.png" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <ul style="margin-bottom: 9%;">
                                <li>
                                    Global Partnership Package
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Business Expansion Strategy
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    International Networking
                                </li>
                                <li>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                                            fill="#D90A2C" />
                                    </svg>
                                    Branding & Global Recognition
                                </li>
                            </ul>
                            <div class="price-link">
                                <a href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- simple package -->

    <section class="partner-credibility-section">
        <div class="partner-card-container">
            <div class="partner-text-content-row">
                <div class="partner-heading-col">
                    <h3 class="partner-title-heading skew-up">From Visibility To
                        Credibility.
                    </h3>
                </div>
                <div class="partner-paragraph-col">
                    <p>
                        We help
                        your brand stand out and earn trust in
                        the digital world. It's not just about
                        being seen—it's about being remembered,
                        respected, and chosen. With the right
                        mix of strategy,
                    </p>
                </div>
            </div>

            <div class="partner-video-banner">
                <video class="partner-video" autoplay loop muted playsinline>
                    <source src="assets/images/home-1/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <div class="partner-cta-footer">
            <p class="cta-text" style="color: #fff;">Your achievements deserve the
                global stage. <a href="/contact-us" class="cta-link">Start today</a></p>
        </div>
    </section>

    <section class="subscribe" style="padding-top: 5%;padding-bottom: 5%;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="content">
                        <h1 class="title split-collab">Subscribe To Stay Connected</h1>
                        <form action="#" class="row g-3">
                            <div class="col-auto">
                                <input type="email" class="form-control" placeholder="Enter Your Email...">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="button primary-link-btn">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-clients" style="padding-top: 4%;padding-bottom: 1%;">
        <div class="animated-circle right"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="subtitle">Our Clients</h2>
                        <h1 class="title skew-up">
                            Trusted by Leaders Across the <br>
                            Globe
                        </h1>
                        <p style="color:#fff; padding-top: 2%;">
                            Hear from professionals and organizations <br>
                            who’ve partnered with Universal Consulting <br>
                            Group to achieve recognition, growth & success.
                        </p>
                    </div>

                    <div class="swiper client-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c8.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a
                                                    href="https://www.linkedin.com/in/dr-john-j-machado-md-mba-4925424/?originalSubdomain=ca">
                                                    <h2> Dr John J Machado MD, MBA</h2>
                                                </a>
                                                <p>DPS - Chief Medical Officer</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            “Shivam was very professional, personable and true to his word.
                                            Greatly appreciated his excellent customer centric services!”
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c9.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a
                                                    href="https://www.linkedin.com/in/michele-m-bolton-my911-inc/?originalSubdomain=ca">
                                                    <h2>Michele M. Bolton, FEA</h2>
                                                </a>
                                                <p>Founder & CEO - MY911 Inc.</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            “Working with Shivam was such a pleasure! He was extremely professional, patient
                                            and thorough in all communications, and paid great attention to detail to ensure
                                            my story and the message for MY911 Inc. in Canada was relayed with compassion
                                            and accuracy, and in a timely fashion. Thank you Shivam and to your team for
                                            such a wonderful experience. You are all greatly appreciated!”
                                        </h4>
                                        <!-- <p>
                                                Et nec tantas accusamus salutatus, sit commodo veritus
                                                te, erat fabulas has ut. Rebum cum laudem cum ea,
                                                accusamus salutatus, sit commodo veritus te,erat
                                                legere fabulas has cum laudem .
                                                <img src="assets/images/home-2/cotation.png" alt="">
                                            </p> -->
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c10.jpeg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="https://www.linkedin.com/in/aditipawar5657/">
                                                    <h2>Aditi Pawar</h2>
                                                </a>
                                                <p>International Legal Strategist- Solicitor </p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            "Vinitha is in the truest sense an asset. Her behaviour and absolute involvement
                                            in her work without losing her cool at any time even when things get tough is
                                            worth a mention. Work with her and you will agree to every word I say.”
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c1.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="https://www.linkedin.com/in/hernan-de-ponti-0434b73a/">
                                                    <h2>Hernan De Ponti</h2>
                                                </a>
                                                <p>Socio & CEO DMayo Real Estate</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            "It was a pleasure doing the interview with Vinitha, very professional,
                                            proactive and above all detail-oriented about the content to be published. Thank
                                            you for that great management.”
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="https://www.linkedin.com/in/sumeeshamchandran/">
                                                    <h2>Sumeesha M. Chandran</h2>
                                                </a>
                                                <p>Business & Technology Leader</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            "Vinitha redefines branding with purpose and precision. Her strategic approach
                                            and creative execution elevate businesses into powerful brands.
                                            Working with Vinitha is a breeze in branding excellence. Highly recommended for
                                            leaders seeking influence and relevance.”
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c3.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="https://www.linkedin.com/in/mehdi-othmani/">
                                                    <h2>Mehdi Othmani</h2>
                                                </a>
                                                <p>Cluster General Manager </p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            "Vinitha doesn't just manage international business development, she curates
                                            meaningful professional journeys. Collaborating with her on my feature article
                                            for Insight Success wasn't a transactional experience; it felt like a thoughtful
                                            partnership. She asked the right questions, listened beyond the surface, and
                                            turned complexity into clarity, always with grace and precision. In a world of
                                            hurried interactions, Vinitha stands out by showing up with intention and
                                            genuine care.”
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c4.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="https://www.linkedin.com/in/torie-smith-a33307235/">
                                                    <h2>Torie Smith</h2>
                                                </a>
                                                <p>Guiding & Supporting Humanity</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            The experience I had working with Vinitha was such a pleasure. I participate in
                                            many editorial experiences and this one was by far the smoothest and most fun,
                                            to date! The process was the most organized and efficient, I've experienced.”
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c5.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a
                                                    href="https://www.linkedin.com/in/dr-mohamed-rdali-b42699192/?originalSubdomain=ma">
                                                    <h2>Dr. Mohamed Rdali</h2>
                                                </a>
                                                <p>Deputy CEO - Support Functions</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            I had the pleasure of collaborating with Himanshu during the publication of one
                                            of my articles in Insight Success magazine. He demonstrated great
                                            professionalism throughout the process. I highly recommend Himanshu to anyone
                                            looking to work with a professional in the field of publishing.
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c6.jpeg" alt="">
                                            </div>
                                            <div class="content">
                                                <a
                                                    href="https://www.linkedin.com/in/ann-bayly-bruneel-rp-sep-rcat-she-her-1b559764/">
                                                    <h2>Ann Bayly-Bruneel</h2>
                                                </a>
                                                <p>Psychotherapist at Heartsight</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            I had the pleasure of collaborating with Himanshu for an article for Insight
                                            Success. Himanshu was delightful to work with and very efficient and
                                            informative. His creativity, kindness and care was really appreciated. I would
                                            highly recommend Himanshu!
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slider-item">
                                <div class="slider-item-style">
                                    <div class="client-title-rating">
                                        <div class="client-title">
                                            <div class="img">
                                                <img src="assets/images/home-2/c7.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="https://www.linkedin.com/in/maristela-oliveira-esq-72983447/">
                                                    <h2>Maristela Oliveira Esq.</h2>
                                                </a>
                                                <p>Attorney at Maristela Oliveira</p>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <h4>
                                            I thank Himanshu Pandey for the excellent work in my edition: "Top Attorney Make
                                            a Difference in 2024".
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="social-feed-container" style="padding-top: 3%;">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <script src="https://elfsightcdn.com/platform.js" async></script>
                <div class="elfsight-app-23fd2dff-9d2a-4b00-a71d-960018a12d4a" data-elfsight-app-lazy></div>
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
                <script src="https://elfsightcdn.com/platform.js" async></script>
                <div class="elfsight-app-8c5a473c-e1bc-44c6-a372-c12d69dde16d" data-elfsight-app-lazy></div>
            </div>
        </div>
    </section>
@endsection

<style>
    /* --- Base Section & Follow Button (from previous response) --- */
    .social-feed-container {
        padding: 20px;
        background-color: #f6f6f6;
    }

    .feed-header-wrapper {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .follow-link-wrapper {
        text-align: center;
        margin-bottom: 20px;
    }

    .social-icon-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: inline-block;
    }

    .social-list-item {
        display: block;
    }

    .follow-link {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        background-color: #0077B5;
        /* LinkedIn Blue */
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1em;
        font-weight: 600;
        transition: background-color 0.3s;
    }

    .follow-link:hover {
        background-color: #005691;
    }

    .icon-text::before {
        content: 'in';
        font-style: italic;
        font-weight: 900;
        margin-right: 8px;
        font-size: 1.2em;
    }

    /* --- New CSS for the Mock Feed Content --- */

    .embedded-linkedin-feed {
        /* Max width inherited from the original structure */
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .feed-carousel {
        /* Enables horizontal scrolling/carousel effect */
        display: flex;
        overflow-x: auto;
        /* Allows scrolling if cards overflow */
        gap: 15px;
        /* Space between cards */
        padding-bottom: 10px;
        /* Space for a scroll bar on desktop */
        -webkit-overflow-scrolling: touch;
        /* Improved scrolling on iOS */
        scrollbar-width: none;
        /* Hide scrollbar for Firefox */
    }

    /* Hide scrollbar for Webkit browsers (Chrome, Safari) */
    .feed-carousel::-webkit-scrollbar {
        display: none;
    }

    .feed-card {
        min-width: 250px;
        /* Minimum width of a post card */
        max-width: 300px;
        /* Maximum width of a post card */
        flex-shrink: 0;
        /* Important: prevents cards from shrinking to fit */
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
        border: 1px solid #ddd;
        /* Light border */
    }

    .card-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }

    .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        background-color: #ccc;
        /* Placeholder color */
    }

    .user-info {
        display: flex;
        flex-direction: column;
    }

    .user-name {
        font-weight: 600;
        color: #333;
    }

    .post-time {
        font-size: 0.85em;
        color: #666;
    }

    .post-text {
        font-size: 0.9em;
        color: #444;
        margin-bottom: 10px;
    }

    .read-more {
        color: #0077B5;
        text-decoration: none;
        font-weight: 500;
    }

    .post-image-container {
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
    }

    .post-image {
        width: 100%;
        height: auto;
        display: block;
        min-height: 150px;
        background-color: #eee;
        /* Placeholder background */
    }

    .card-footer {
        padding-top: 10px;
        border-top: 1px solid #eee;
        font-size: 0.85em;
        color: #666;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .likes,
    .comments,
    .share {
        cursor: pointer;
    }
</style>

<style>
    /* Base Section Styling */
    .partner-credibility-section {
        padding: 0px;
        /* Adjust as needed for spacing around the entire section */
        max-width: 1350px;
        /* Limit max width for readability, adjust or remove */
        margin: 0 auto;
        /* Center the section */
    }

    /* Card Container Styling - Mimics the 'card card-partner' look */
    .partner-card-container {
        background-color: #050505ff;
        /* Example background color, use your brand color */
        border-radius: 10px;
        /* Soft rounded corners */
        /* Subtle shadow for depth */
        overflow: hidden;
        /* Ensures video respects border-radius */
        padding: 30px 40px;
        /* Internal padding for text content */
    }

    /* Text Content Row - Uses Flexbox for two-column layout */
    .partner-text-content-row {
        display: flex;
        flex-wrap: wrap;
        /* Allows columns to stack on smaller screens */
        align-items: center;
        margin-bottom: 20px;
        /* Space between text and video */
        z-index: 2;
        /* Ensures text is above any potential video overlay */
        position: relative;
    }

    /* Column Styling for Text and Heading */
    .partner-heading-col,
    .partner-paragraph-col {
        width: 100%;
        /* Default to full width on small screens */
        padding: 10px 0;
        /* Vertical padding */
    }

    /* Styling the Heading */
    .partner-title-heading {
        font-size: 2.5em;
        /* Large, prominent heading */
        color: #fff;
        /* Dark text color */
        line-height: 1.2;
        margin: 0;
    }

    /* Styling the Paragraph */
    .partner-paragraph-col p {
        font-size: 1.1em;
        color: #666;
        /* Slightly lighter text color */
        margin: 0;
    }

    /* Video Banner Styling */
    .partner-video-banner {
        width: 100%;
        margin-top: 20px;
        /* Space above the video */
        border-radius: 8px;
        /* Slightly less rounded corners than the card */
        overflow: hidden;
    }

    .partner-video {
        width: 100%;
        height: auto;
        display: block;
        /* Removes extra space under the video element */
    }

    /* Call-to-Action Footer */
    .partner-cta-footer {
        text-align: center;
        padding: 20px 0;
        font-size: 1.1em;
        color: #333;
    }

    .cta-link {
        color: #007bff;
        /* Example link color, use your brand color */
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s;
    }

    .cta-link:hover {
        color: #0056b3;
        /* Darker on hover */
        text-decoration: underline;
    }


    /* --- Responsive Adjustments (for larger screens) --- */
    @media (min-width: 992px) {

        /* Two-column layout on large screens (similar to row-cols-xl-2) */
        .partner-heading-col,
        .partner-paragraph-col {
            width: 50%;
            /* Each column takes up half the width */
        }

        /* Padding adjustments for desktop spacing */
        .partner-heading-col {
            padding-right: 20px;
        }

        .partner-paragraph-col {
            padding-left: 20px;
        }
    }
</style>