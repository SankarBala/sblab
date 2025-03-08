@extends('layouts.app')
@section('content')
    <x-breadcrumb title="About Us" />

    <div class="about-section style-two mb-5">
        <div class="container">
            <div class="row about-bg">
                <div class="col-lg-6">
                    <div class="about-thumbs">
                        <img class="img-fluid" src="{{ asset('assets/images/sbl/slogo.jpeg') }}" alt=""
                            style="width: 60%" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="dentist-section-title">
                            <h1>We Care for Your Health.</h1>
                            <p class="text-justify">At {{ config('app.name') }}, we are dedicated to providing high-quality
                                Ayurvedic and
                                Pharmaceutical
                                solutions for your well-being. With a commitment to innovation, research, and excellence, we
                                strive to deliver safe, effective, and trusted medicines to improve lives.</p>
                        </div>
                        <div class="single-about-right">
                            <div class="content-title">
                                <h3>Why Choose us ?</h3>
                            </div>
                            <div class="about-icon-box">
                                <div class="icon-box-icon">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="icon-box-content">
                                    <div class="title">
                                        <h2>Wide Range of Ayurvedic & Pharmaceutical Products.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="about-icon-box">
                                <div class="icon-box-icon">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="icon-box-content">
                                    <div class="title">
                                        <h2>Scientifically Researched & Clinically Tested Formulations.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="about-icon-box">
                                <div class="icon-box-icon">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="icon-box-content">
                                    <div class="title">
                                        <h2>State-of-the-Art Manufacturing & Quality Control.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="about-icon-box">
                                <div class="icon-box-icon">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="icon-box-content">
                                    <div class="title">
                                        <h2>Experienced Team of Experts & Healthcare Professionals.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="about-icon-box">
                                <div class="icon-box-icon">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="icon-box-content">
                                    <div class="title">
                                        <h2>Commitment to Purity, Safety, and Effectiveness.</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="section-button"><a href="{{ route('products') }}">See Products</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dentist-section-title">
                        <h1>Committed to Excellence in Healthcare</h1>
                        <p class="text-justifys w-50 lead text-dark">{{ config('app.name') }} is a trusted name in Ayurvedic
                            and Pharmaceutical medicine, dedicated to improving lives through high-quality, effective, and
                            innovative healthcare solutions. With a strong foundation in research and a commitment to
                            purity, we manufacture a wide range of products that blend the ancient wisdom of Ayurveda with
                            modern scientific advancements.</p>
                    </div>
                </div>
                {{-- <div class="portfolio_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="dreamit-single-case-study">
                            <div class="case-study-thumb ">
                                <a href="about.html#"><img src="assets/images/resource/pf-1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-single-case-study ">
                            <div class="case-study-thumb ">
                                <a href="about.html#"><img src="assets/images/resource/pf-2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-single-case-study ">
                            <div class="case-study-thumb ">
                                <a href="about.html#"><img src="assets/images/resource/pf-3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-single-case-study ">
                            <div class="case-study-thumb ">
                                <a href="about.html#"><img src="assets/images/resource/pf-4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-single-case-study ">
                            <div class="case-study-thumb ">
                                <a href="about.html#"><img src="assets/images/resource/pf-5.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-single-case-study">
                            <div class="case-study-thumb ">
                                <a href="about.html#"><img src="assets/images/resource/pf-1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold text-primary">Our Mission</h2>
                    <p class="lead text-success">
                        At <strong>{{ config('app.name') }}</strong>, our mission is to enhance health and well-being by
                        providing
                        high-quality, safe, and effective Ayurvedic and Pharmaceutical products. We blend ancient wisdom
                        with modern science to create innovative healthcare solutions that improve lives.
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-success">Quality & Purity</h4>
                            <p class="text-muted">We adhere to the highest quality standards, ensuring safe, effective,
                                and
                                pure healthcare products with rigorous testing and Good Manufacturing Practices (GMP).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-primary">Innovation & Research</h4>
                            <p class="text-muted">Our expert researchers continuously develop new formulations that
                                integrate
                                Ayurvedic principles with advanced pharmaceutical techniques for better healthcare
                                solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-danger">Safety & Efficacy</h4>
                            <p class="text-muted">Every product undergoes extensive clinical evaluations to ensure its
                                effectiveness and safety, meeting global healthcare standards.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-warning">Sustainability</h4>
                            <p class="text-muted">We practice responsible sourcing and eco-friendly production to
                                contribute
                                to a greener and healthier world.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-info">Accessibility & Affordability</h4>
                            <p class="text-muted">We strive to make our high-quality healthcare solutions accessible and
                                affordable to all, ensuring that essential medicines reach those in need.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-secondary">Patient-Centric Approach</h4>
                            <p class="text-muted">We focus on customer needs, delivering trusted healthcare solutions
                                that
                                improve overall well-being and treatment outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold text-primary">Our Vision</h2>
                    <p class="lead text-muted">
                        At <strong>{{ config('app.name') }}</strong>, our vision is to become a global leader in **Ayurvedic
                        and
                        Pharmaceutical** medicine,
                        providing innovative, safe, and effective healthcare solutions that improve lives worldwide.
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-success">Global Healthcare Excellence</h4>
                            <p class="text-muted">We aim to be at the forefront of **Ayurvedic and Pharmaceutical**
                                advancements,
                                delivering healthcare solutions that meet global standards.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-primary">Innovation & Continuous Improvement</h4>
                            <p class="text-muted">Through **cutting-edge research and technological advancements**, we
                                continuously evolve to provide
                                improved healthcare solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-danger">Expanding Global Reach</h4>
                            <p class="text-muted">We envision making our **safe, effective, and affordable** healthcare
                                products available to people across the globe.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-warning">Sustainable & Ethical Growth</h4>
                            <p class="text-muted">Our commitment to **sustainability and ethical business practices**
                                ensures a positive impact on society and the environment.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-info">Building Trust & Reliability</h4>
                            <p class="text-muted">We strive to be a **trusted name in healthcare**, ensuring
                                **transparency, safety, and effectiveness** in everything we do.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-secondary">Empowering Healthcare Professionals</h4>
                            <p class="text-muted">We work closely with **doctors, researchers, and medical professionals**
                                to create healthcare solutions that make a real difference.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="counter-section">
        <div class="container">
            <div class="row counter-bg">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-single-box">
                        <div class="icon">
                            <h1>
                                <i class="fw-bold fas fa-calendar"></i></h1>
                        </div>
                        <div class="counter-content">
                            <span class="counter">30</span><span>+</span>
                            <h6>Years of Excellence</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-single-box">
                        <div class="icon">
                            <h1>
                                <i class="fw-bold fas fa-pills"></i>
                            </h1>
                        </div>
                        <div class="counter-content">
                            <span class="counter">50</span><span>+</span>
                            <h6>Products Developed </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-single-box">
                        <div class="icon">
                         
                            <h1><i class="fw-bold fas fa-hospital-user"></i></h1>
                        </div>
                        <div class="counter-content">
                            <span class="counter">50,000</span><span>+</span>
                            <h6>Happy Patients</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-single-box">
                        <div class="icon"> 
                           <h1><i class="fw-bold fas fa-award"></i></h1>
                        </div>
                        <div class="counter-content">
                            <span class="counter">10</span><span>+</span>
                            <h6>Awards</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
