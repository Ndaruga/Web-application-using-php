
<?php
include "header.php";
?>
<div class="content_section" style="scroll-behavior: smooth;">
    <section id="home">
        <div class="image-banner">
            <div class="home_content">
                <h1>HELLO !!</h1>
                <h1>My name is <span>FRANCIS.</span></h1>
                <div class="text">
                    <h1 class="static_text">i'm a</h1>
                    <a href="#services" style = "cursor: pointer; text-decoration: none;"><h1 class="dynamic_text"></h1></a>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="image-banner">
            <div class="about_content">
                <h2>About Me</h2>
                <div class="my_profile">
                    <h6><strong>Hello? 🙌</strong> <br> My name is <span>Francis.</span></h6>
                    <br>
                    <p>I am a Backend Web developer, software developer and a networking entusiast.</p>
                    <!-- <h5>career objective</h5> -->
                    <p>My mission is to build a career in an organization where I would get an opportunity to improve my abilities by accepting challenges, fullfiling the organizational goal(s) though continious learning and commitment</p>
                <br>
                <span class="current_progress">
                    <p>Currently, I am taking a course in <span style="color: #ff7200;">penetration Testing</span> so that i can build you more secure websites and softwares.</p>
                </span>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="image-banner">
            <div class="services_content">
                <h2 class="service_title">What can i do for you?</h2>
                <div class="service_offered">
                    <div class="flip-card" id="web-dev">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card-front-banner">
                                    <h3 class="card-title"> Web Developement</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4>I create <strong><span style="color: #ff7200;">responsive websites</span></strong> to ensure all your customers feel the quality from any device</h4>
                                <div class="contact_link"><a href="#contact">Contact Me</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card" id="software_dev">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card-front-banner">
                                    <h3 class="card-title"> Software Developement</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4>I have a team dedicated for your software requirements.</h4>
                                <div class="contact_link"><a href="#contact">Contact Me</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card" id="networking">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card-front-banner">
                                    <h3 class="card-title"> Networking Design</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4>Want to install internet for your personal, business or organizational needs? <br><br> I am here to take care of that</h4>
                                <div class="contact_link"><a href="#contact">Contact Me</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card" id="freelance">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card-front-banner">
                                    <h3 class="card-title"> Freelancing</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4>I am an affordable freelancer who is flexible to suit your budget</h4>
                                <div class="contact_link"><a href="#contact">Contact Me</a></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="feedback">
        <div class="image-banner">
            <div class="feedback_content">
                <h2>what my clients say</h2>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="image-banner">
            <div class="contact_content">
                <h2>contact</h2>
            </div>
        </div>
    </section>
    
</div>

<?php
include "footer.php";
?>


