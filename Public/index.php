
<?php
include "header.php";
?>
<div class="content_section" style="scroll-behavior: smooth;">
    <section id="home">
        <div class="image-banner">
            <div class="home_content">
                <div class="home_text">
                    <h1>HELLO !!</h1>
                    <h1>My name is <span>FRANCIS.</span></h1>
                    <div class="text">
                        <h1 class="static_text">i'm a</h1>
                        <a href="#services" style = "cursor: pointer; text-decoration: none;"><h1 class="dynamic_text"></h1></a>
                    </div>
                </div>
                <div class="profile-image">

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
                    <p>I am a Backend Web developer with vivid knowledge in <abbr title="Database Management Systems">DBMS</abbr>, software developer and a networking enthusiast.</p>
                    <!-- <h5>career objective</h5> -->
                    <p>My mission is to build a career in an organization where I would get an opportunity to improve my abilities by accepting challenges, fullfiling the organizational goal(s) though continious learning and commitment.</p>
                <br>
                <span class="current_progress">
                    <!-- <p>Currently, I am taking a course in <span style="color: #ff7200;">penetration Testing</span> so that i can build you more secure websites and softwares.</p> -->
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
                <h2 style="color: aliceblue;">How satisfying are our services?</h2>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="image-banner">
            <div class="contact_content">
                <h2>Contact Us</h2>
                <div class="contact_description">
                    <h4>Let's talk about your next Project.</h4>
                </div>
                <div class="contact_form_and_links">
                    <div class="contact-form">
                        <form action="database.inc.php" method="POST">
                            <h5 style="color: #031c4b;">Send me a message and let's be in touch.</h5>
                            <div class="names">
                                <label for="first_name"> <strong>First Name</strong>
                                    <input type="text" name="First_Name" required placeholder="Enter your First Name">
                                </label>
                                    <label for="last_name"> <strong>Last Name</strong>
                                    <input type="text" name="Last_Name" required placeholder="Enter your Last Name">
                                </label>
                            </div>
                            
                            <label for="email"> <strong>Email</strong> <br>
                                <input type="email" class="email" name="Email" required placeholder="Enter your Email">
                            </label>
                                
                            <label for="message"><strong>Message</strong> <br>
                                <textarea name="message" id="client_message" cols="50" rows="4" placeholder="Write to us ..."></textarea>
                            </label>
                                
                            <label for="Message-btn"></label>
                                <button id = "message_button" type = "submit"> Send Message</button>
                            
                        </form>
                    </div>
                    <h2>or</h2>
                    <div class="contact-links">
                        <div class="contact-link-title">
                            <h5>Get in touch through my social media platforms</h5>
                        </div>
                        <div class="links">
                            <ul class="social-networks square spin-icon"> <!--remove square for circular spin-->
                                <li><a href="https://www.linkedin.com/in/francis-king-ori-1464641b2/" target="_blank" class="icon-linkedin">LinkedIn</a></li>
                                <li><a href="https://twitter.com/_i_am_francis_" target="_blank" class="icon-twitter">Twitter</a></li>
                                <li><a href="https://www.facebook.com/" target="_blank" class="icon-facebook">Facebook</a></li>
                                <li><a href="https://pinterest.com/i_am_francis_" target="_blank" class="icon-pinterest">Pinterest</a></li>
                                <li><a href="https://www.instagram.com/_i_am_francis_/" target="_blank" class="icon-instagram">Instagram</a></li>
                                <li><a href="https://github.com/i-am-francis" target="_blank" class="icon-github">GitHub</a></li>
                                
                            </ul>
                            <a href="whatsapp://send?phone=+254784116116"><svg viewBox="0 0 32 32" class="whatsapp-ico"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg></a>                      
                            
                        </div>
                </div>                
            </div>
        </div>
    </section>
    
</div>

<?php
include "footer.php";
?>


