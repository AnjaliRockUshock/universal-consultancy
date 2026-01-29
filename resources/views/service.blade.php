@php
$bannerImage = 'assets/images/honory-doctrate/banner.png';
@endphp
@extends('master')
@section('title', 'Services')

<link rel="stylesheet" href="assets/css/about-us.css">

@section('banner')
<div class="banner-section" style="padding-bottom: 3%;">
    <h1 class="heading skew-up">Services</h1>
    <p class="description">
        <a href="/">Home</a> <i class="fa-solid fa-chevron-right"></i> Services
    </p>
</div>
@endsection

@section('content')

<section class="question-ans" style="padding-top: 3%;padding-bottom:3%;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="split-collab" style="color: #d90a2c;">Business Consulting</h1>
                <div class="accordion" id="accordionExample" style="padding-top: 100px;">
                    <div class="accordion-item">
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Empowering organizations to achieve operational excellence and strategic growth through
                                tailored consulting solutions. We help enterprises optimize performance, manage change,
                                and sustain measurable impact in dynamic global markets.
                            </div>
                            <h2 class="subtitle">Key Focus:</h2>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Strategic planning & transformation
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Leadership advisory & restructuring
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● International business expansion
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/images/service/s1.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-area" style="background-color: #050505ff;padding-top: 3%;padding-bottom:3%;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="img overlay-anim">
                    <div class="line">
                    </div>
                    <img src="assets/images/service/s2.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <h1 class="split-collab" style="color: #d90a2c;">Branding & Thought Leadership</h1>
                <p>
                    Craft a strong, globally resonant personal or organizational brand. From positioning and
                    storytelling to visibility and influence, we help you become a recognized authority in
                    your domain.
                </p>
                <h1 class="split-collab" style="color: #d90a2c;margin-bottom:-4%">Key Focus:</h1>
                <div class="about-timing">
                    <div class="about-timing-item">
                        <p>● Adds international prestige to your professional identity</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● Validates your lifelong achievements and leadership</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● Enhances your credibility in global markets and communities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="question-ans" style="padding-top: 2%;padding-bottom:3%;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="split-collab" style="color: #d90a2c;">PR & Global Media<br> Recognition</h1>
                <div class="accordion" id="accordionExample" style="padding-top: 100px;">
                    <div class="accordion-item">
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We connect influential voices to the world’s most respected media outlets. Our
                                PR programs ensure your story gets the visibility it deserves — in platforms
                                like Forbes, Bloomberg, Yahoo Finance, and Entrepreneur.
                            </div>
                            <h2 class="subtitle">Key Focus:</h2>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Press features & interviews
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Global editorial coverage
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Thought leadership campaigns
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/images/service/s3.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-area" style="background-color: #050505ff;padding-top: 3%;padding-bottom:3%;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="img overlay-anim">
                    <div class="line">
                    </div>
                    <img src="assets/images/service/s4.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <h1 class="split-collab" style="color: #d90a2c;"> Honorary Doctorate Recognition</h1>
                <p>
                    Helping leaders, innovators, and professionals gain global recognition from
                    internationally accredited universities for their lifelong contributions and achievements.
                </p>
                <h1 class="split-collab" style="color: #d90a2c;margin-bottom:-4%">Key Focus:</h1>
                <div class="about-timing">
                    <div class="about-timing-item">
                        <p>● Global honorary doctorate nominations</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● Academic evaluation & verification</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● International recognition ceremonies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="section-title" style="padding-top: 5%;">
            <h5 class="title skew-up-2" style="color: #d90a2c;">
                “Transform your achievements into the title of <br> honor — ‘Dr.’”
            </h5>
        </div>
    </div>
</section>

<section class="question-ans" style="padding-top: 3%;padding-bottom:3%;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="split-collab" style="color: #d90a2c;">Global Awards & Distinctions</h1>
                <div class="accordion" id="accordionExample" style="padding-top: 100px;">
                    <div class="accordion-item">
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    We identify and nominate outstanding professionals and organizations for top
                                    international awards that celebrate innovation, leadership, and global excellence.
                                </p>
                            </div>
                            <h2 class="subtitle">Key Focus:</h2>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Industry-specific award nominations
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Global recognition strategy
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Media visibility post-achievement
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/images/service/s5.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-area" style="background-color: #050505ff;padding-top: 3%;padding-bottom:3%;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="img overlay-anim">
                    <div class="line">
                    </div>
                    <img src="assets/images/service/s6.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <h1 class="split-collab" style="color: #d90a2c;">Magazine Covers & Broadcasts</h1>
                <p>
                    Appear on the world’s leading magazines and digital media platforms. Our partnerships
                    enable features, interviews, and cover stories that strengthen credibility and reach.
                </p>
                <h1 class="split-collab" style="color: #d90a2c;margin-bottom:-4%">Key Focus:</h1>
                <div class="about-timing">
                    <div class="about-timing-item">
                        <p>● Magazine & TV interviews</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● Cover story campaigns</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● Editorial photography curation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="question-ans" style="padding-top: 3%;padding-bottom:3%;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="split-collab" style="color: #d90a2c;">Social Media Growth & <br> Influence Management</h1>
                <div class="accordion" id="accordionExample" style="padding-top: 100px;">
                    <div class="accordion-item">
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    We manage and grow your professional social presence through strategy, engagement, and
                                    credibility-driven content — helping you become an industry influencer.
                                </p>
                            </div>
                            <h2 class="subtitle">Key Focus:</h2>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● LinkedIn, Instagram & Twitter growth
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Verified profile assistance
                                </p>
                            </div>
                            <div class="company" style="margin-bottom: 2%;">
                                <p style="color: #faf5f6ff;">
                                    ● Audience engagement optimization
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/images/service/s7.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-area" style="background-color: #050505ff;padding-top: 3%;padding-bottom:3%;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="img overlay-anim">
                    <div class="line">
                    </div>
                    <img src="assets/images/service/s8.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <h1 class="split-collab" style="color: #d90a2c;">Educational Consulting</h1>
                <p>
                    Supporting universities, training institutions, and educators with academic branding,
                    program development, and student engagement strategies.
                </p>
                <h1 class="split-collab" style="color: #d90a2c;margin-bottom:-4%">Key Focus:</h1>
                <div class="about-timing">
                    <div class="about-timing-item">
                        <p>● Curriculum design & accreditation</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● Institution reputation management</p>
                    </div>
                    <div class="about-timing-item">
                        <p>● EdTech integration & outreach</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="banner" style="background-color: #050505ff;padding-top: 3%;padding-bottom:1%;">
    <div class="banner-img" style="background-image: url('assets/images/service/s9.png');">
        <div class="overlay">
            <div class="banner-section">
                <h1 class="heading skew-up">Partner with Us for Global Success</h1>
                <p class="description">
                    Whether you are an entrepreneur, educator, or corporate visionary — The Universal
                    Consulting Group is your gateway to global credibility, influence, and recognition.
                </p>
                <a href="#" class="button primary-link-btn">Get Started 
                    <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                            <path
                                d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                fill="white" />
                        </svg> </span></a>
                <a href="#" class="button primary-link-btn">Schedule Consultation
                    <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                            <path
                                d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                fill="white" />
                        </svg> </span></a>
            </div>
        </div>
    </div>
</div>

@endsection