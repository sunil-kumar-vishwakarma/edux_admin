@extends('frontent.layouts.app')
@section('title', 'EduX | Home ')
@section('content')

    <div class="content">
        <h1>Our Mission is to <br />Educate the World</h1>

        <button class="btn2"> <a href="/student" class="anchr">I am a student who wants to study abroad</a></button>
        <div class="btn4">
            <button class="btn3"><a href="/partner" class="anchr">I am a recruitment partner</a></button>
            <button class="btn3"><a href="/institutions" class="anchr">I work at an academic institution</a></button>

        </div>
    </div>




    <div class="box2">
        <div class="content2">
            <h2 class="elementor-heading-title elementor-size-default">A Platform That Assists You Through Every Step of the
                Journey</h2>
        </div>


        <div class="box3">


            <main class="hero">
                <div class="tab-nav">
                    <button class="tab-btn active" data-target="students">STUDENTS</button>
                    <button class="tab-btn" data-target="recruitment-partners">RECRUITMENT PARTNERS</button>
                    <button class="tab-btn" data-target="partner-institutions">PARTNER INSTITUTIONS</button>
                </div>



                <div class="hero-content">
                    <div class="text-and-images">

                        <div class="tab-content active" id="students">
                            <div id="img1"><img src="{{ asset('images/student.jpg') }}"></div>
                            <h1>Students</h1>
                            <p style="margin-top:10px;">We believe in your dreams and work hard to make them a reality. Get
                                matched with and apply to programs and institutions that align with your background, skills,
                                and interests.</p>
                            <a href="/student"><button class="btn btn-primary" style="margin-top:15px;">Learn
                                    More</button></a>
                        </div>
                        <div class="tab-content" id="recruitment-partners" style="display: none;">
                            <div id="img2"><img src="{{ asset('images/partner_img.webp') }}"></div>
                            <h1>Recruitment Partners</h1>
                            <p style="margin-top:10px;">edux is more than a platform. We're your trusted partner, here to
                                help you guide students around the world to fulfill their international education dreams.
                            </p>
                            <a href="/partner"><button class="btn btn-primary" style="margin-top:15px;">Learn
                                    More</button></a>
                        </div>
                        <div class="tab-content" id="partner-institutions" style="display: none;">
                            <div id="img3"><img src="{{ asset('images/institutions.jpg') }}"></div>
                            <h1>Partner Institutions</h1>
                            <p style="margin-top:10px;">Increase your global presence and the number of qualified student
                                applicants from a single, easy-to-use platform trusted by more than 1,500 institutions
                                worldwide.</p>
                            <a href="/institutions"><button class="btn btn-primary" style="margin-top:15px;">Learn
                                    More</button></a>
                        </div>


                        <div class="hero-images">
                            <div class="image-stack">
                                <div class="image-card">
                                    <img src="{{ asset('images/student.jpg') }}" alt="Image1">
                                </div>
                                <div class="image-card">
                                    <img src="{{ asset('images/partner_img.webp') }}" alt="Image 2" id="Image2">
                                </div>
                                <div class="image-card">
                                    <img src="{{ asset('images/institutions.jpg') }}" alt="Image 3" id="Image3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <center>
        <div class="content4">
            <h2>Our Method of Offering Solutions</h2>
        </div>


        <div class="video1" style="margin-top:10px;">
            <video controls>
                <source src="{{ asset('images/how we help.mp4') }}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>


        <div class="btn1">
            <a href="/partner"><button type="button" class="btn btn-primary">Partner With Us</button></a>
        </div>

        <div class="content5">
            <h2>We Help Students Get Admitted Into the Best International Educational Institutions
                An Easy-to-Use Platform Built to Deliver Quality Applications and More</h2>
        </div>

        <main class="hero2">
            <div class="tab-navigation2">
                <button class="tab-button2 active2" data-target="students-video">STUDENTS</button>
                <button class="tab-button2" data-target="recruitment-partners-video">RECRUITMENT PARTNERS</button>
            </div>

            <div class="video-display2">
                <video id="video-player2" controls>
                    <source id="video-source2"
                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </main>


        <div class="info-section">

            <!--if you want do set text-size give  style="font-size: 17px;" in this div service -->


            <div class="services">
                <!--  <div class="first">-->
                <!--     <img src="images/Platform.webp" alt="Find Programs Faster" />-->
                <!--    <p>Find Programs Faster</p>-->
                <!--  </div>-->
                <!--  <div class="second">-->
                <!--   <img src="images/Support.webp" alt="Dedicated Support Team" />-->
                <!--    <p>Helpful and Dedicated Support Team</p>-->
                <!--  </div>-->

                <!--   <div class="second">-->
                <!--   <img src="images/Studen-Loan.webp" alt="Exclusive Scholarships" />-->
                <!--    <p>Access to Exclusive Scholarships</p>-->
                <!--  </div>-->


                <!--  <div class="second">-->

                <!--  <div class="two" id="left">-->
                <!--    <img src="images/Platform-check.webp" alt="Exclusive Scholarships" />-->
                <!--    <p>One Easy Application Platform</p>-->
                <!--  </div>-->


                <!--  <div class="two" id="left">-->
                <!--    <img src="images/Support.webp" alt="Exclusive Scholarships" />-->
                <!--    <p>Knowledgeable Support Team</p>-->
                <!--  </div>-->


                <!--  <div class="two" id="left">-->
                <!--    <img src="images/Chart-3.webp" alt="Exclusive Scholarships" />-->
                <!--    <p>Data Driven Insights</p>-->
                <!--</div>-->

                <!--</div>-->
                <br><br>


                <div id="webcrumbs">
                    <div class="w-[1000px] bg-white rounded-lg ">
                        <div class="grid grid-cols-3 gap-10">
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Platform.webp') }}" alt="Find Programs Faster" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Find Programs Faster
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/helpfull-team.png') }}" alt="Dedicated Support Team" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Helpful and Dedicated Support Team
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Studen-Loan.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Access to Exclusive Scholarships
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Platform-check.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    One Easy Application Platform
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Support.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Knowledgeable Support Team
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Chart-3.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Data Driven Insights
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>



                <div class="leff">
                    <div class="d-grid gap-2">
                        <a href="/student-register"><button class="btn btn-primary" type="button">Try It
                                Today</button></a>
                    </div><br><br>

                    <div class="video2">
                        <video controls>
                            <source src="{{ asset('images/how we help.mp4') }}" type="video/mp4">

                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="box2">

                        <h2 id="feedb">Feedback from Our Trusted Partners</h2>

                        <main class="hero1">
                            <div class="tab-navigation1">
                                <button class="tab-button active1" data-target="students-video">STUDENTS</button>
                                <button class="tab-button" data-target="recruitment-partners-video">RECRUITMENT
                                    PARTNERS</button>
                                <button class="tab-button" data-target="partner-institutions-video">PARTNER
                                    INSTITUTIONS</button>
                            </div>

                            <div class="video-display">
                                <video id="video-player" controls>
                                    <source id="video-source"
                                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </main>

                        <div class="tag">
                            <h2 class="elementor-heading-title elementor-size-default">We’re Passionate About Making
                                Education <br>Accessible for Everyone</h2>
                        </div>

                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="colum">
                            <div class="card">

                                <div class="card-bdy">
                                    <div class="video1">
                                        <div class="card mb-3">

                                            <div class="card-body">
                                                <video controls>
                                                    <source src="{{ asset('images/how we help.mp4') }}" type="video/mp4">

                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <p class="card-txt" style="text-align: justify;">
                                                edux believes that education should be accessible to all. We delivered 1,000
                                                backpacks and school supplies to empower children in India to dream big and
                                                work hard to achieve their dreams.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="colum" id="vid2">
                            <div class="card">
                                <div class="card-bdy">
                                    <div class="video1">
                                        <div class="card mb-3">

                                            <div class="card-body">
                                                <video controls>
                                                    <source src="{{ asset('images/how we help.mp4') }}" type="video/mp4">

                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <p class="card-txt" style="text-align: justify;">
                                                edux believes that education should be accessible to all. We delivered 1,000
                                                backpacks and school supplies to empower children in India to dream big and
                                                work hard to achieve their dreams.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <a href="/events" id="story"><button type="button" id="btnn" class="btn btn-primary">Our
                            Story</button></a>
                    <div class="content2">
                        <div class="headin">
                            <h2>We Support the Entire Sector with Student Guidance and Thought Leadership</h2>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br><br><br><br><br>
                    <div class="card1">
                        <div class="row row-cols-1 row-cols-md-3 g-4" id=card1>
                            <div class="col">
                                <div class="card">
                                    <img src="images/Canada-Study-Permit-Processing-Times-Falling-q8awoecm53hn8hwocxuqxnf3deq9nnh2p9klnrj2dc.png"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <br><br>
                                        <p class="card-text"><a href="#">Why Choose Canada as an International
                                                Student</a></p><br>
                                        <h6>October 17, 2024</h6>
                                    </div>
                                    <button><a href="/webinar/readmore">Read More</a></button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="c2">
                                    <img src="{{ asset('images/AI035-Banner-1-qvnbbiv0vl6ajzw0bx7l4mbvn2lpuygoy0l63akqm8.png') }}"
                                        class="card-img-top" alt="..." id="colimg">
                                    <img src="{{ asset('images/AI035-Banner-1-qvnbbiv0vl6ajzw0bx7l4mbvn2lpuygoy0l63akqm8.png') }}"
                                        id="colimg1">
                                    <div class="card-body">
                                        <br><br>
                                        <p class="card-text"><a href="#">The Early Impacts of Canada’s International
                                                Student Cap on Postgraduate Studies</a></p><br>
                                        <h6>October 17, 2024</h6>
                                    </div>
                                    <button id="colbutton"><a href="/webinar/readmore">Read More</a></button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="c3">
                                    <img src="{{ asset('images/Ireland-Banner-2-–-St-Patricks-Day-q3lqzy1kxy9jp5gtjqh6qoqdglvbd0pn962rudqpq8.png') }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <br><br>
                                        <p class="card-text"><a href="#">Cost of Living in Ireland</a></p><br>
                                        <h6>October 17, 2024</h6>
                                    </div>
                                    <button><a href="/webinar/readmore">Read More</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="content2">
                <h2>Begin Your Journey with Edu-X</h2>
            </div>
            <br><br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4" id="card2">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/student_section.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Students</h5>
                            <p class="card-text">Are you a student looking to study abroad in Canada, the United States,
                                the United Kingdom, Australia, or Ireland? Let our team of experts guide you through your
                                journey.</p>
                            <a href="/student-register"><button type="button" class="btn btn-primary">Student
                                    Registration</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/partner.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Partner Institutions</h5>
                            <p class="card-text">Become an edux partner institution to diversify your campus by attracting
                                qualified students from around the world. Connect with our Partner Relations team here.</p>
                            <a href="/institutions"><button type="button" class="btn btn-primary"
                                    style="margin-top:60px; margin-bottom:-2px;">Partner Inquiry</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/recruiter_partner.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recruitment Partners</h5>
                            <p class="card-text">Do you recruit prospective students who want to study in Canada, the
                                United States, the United Kingdom, Australia, or Ireland? Become an edux recruitment
                                partner.</p>
                            <a href="/student-register"><button type="button" class="btn btn-primary">Recruiter
                                    Registration</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
