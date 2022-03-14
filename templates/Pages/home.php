<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->fetch('webroot'); ?>
    <?= $this->fetch('lib'); ?>

    <style>
        .portfolio .portfolio-img img {
            position: relative;
            width: 100%;
            height: 215px;
            object-fit: cover;
            transform: scale(1.1);
            transition: .5s;
            padding-left: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">
<header class="margin-top-0">

    <!-- Hero Start -->
    <div class="hero" id="home" style="margin-bottom: 4.5%">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Champion Mindset & Executive Coach</h1>
                            <div class="typed-text"> Internationally Certified Speaker,Professional Development
                                Expert,Mindset Mentor
                            </div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="#contact">Book an appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="webroot/img/Claudia-1.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <!--                        <img src="webroot/img/brazos cruzados.jpg" width="30" height="30" alt="Image">-->
                        <img src="webroot/img/claudia_about.png" width="30" height="30" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>About Me</p>
                            <h2>Hi, I am Claudia</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                International Certification Speaker, Trainer and Coach. I help business owners,
                                managers, directors to build success in business, also to work with a team and become a
                                leader and achieve their goals.
                            </p>
                        </div>
                        <a class="btn" href="About">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- My Services Start -->
    <div class="service" id="service" style="background-color: #ebebeb; padding-bottom: 4%">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <h2>My Services</h2>
            </div>
            <div class="row">

                <!--                **Programs**-->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.0s" style="color: white">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop" style="padding: 10%"></i>
                        </div>
                        <div class="service-text" style="padding-left: 5%">
                            <h3>Programs</h3>
                        </div>
                    </div>
                    <p style="color: dimgrey">Create the Best Version of Yourself
                    </p>
                </div>

                <!--                **Coaching**-->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-diagnoses" style="padding: 10%"></i>
                        </div>
                        <div class="service-text" style="padding-left: 5%">
                            <h3>Coaching</h3>
                        </div>
                    </div>
                    <p style="color: dimgrey">
                        Close the Gap between where you are and what you want to achieve
                    </p>
                </div>

                <!--                **Blog**-->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-business-time" style="padding: 10%"></i>
                        </div>
                        <div class="service-text" style="padding-left: 5%">
                            <h3>Blog</h3>
                        </div>
                    </div>
                    <p style="color: dimgrey">
                        Reinvent your life and take it to the next level
                    </p>
                </div>


                <!--                **Books**-->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-book-open " style="padding: 10%"></i>
                        </div>
                        <div class="service-text" style="padding-left: 5%">
                            <h3>Books</h3>
                        </div>
                    </div>
                    <p style="color: dimgrey">
                        Share stories and experiences to learn from them
                    </p>
                </div>


            </div>
        </div>
    </div>
    <!-- My Service End -->


    <!-- Banner Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s" style="margin-top: 0;padding:50px 0;">
        <div>
            <div class="container wow fadeInUp" data-wow-delay="0.2s" style="margin-left: 200px">
                <img src="webroot/img/ebook/book4.png" align="left" style="height: 200px;width: 20%">
            </div>
            <br>
            <div class="section-header text-center" style="margin-left: 400px" align="right">
                <h2 style="font-size: 28px;"><span style="font-size: 28px;">17 Key </span> success habits that all
                    successful people in business, sports,
                    personal improvement or health use to achieve their goals and create a champion level mindset</h2>
            </div>
            <div class="container banner-text">
                <a href="BookPurchase" class="nav-item btn">Get it now</a>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Business Programs Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <!--            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">-->
            <!--                <p></p>-->
            <!--                <h2>My Services</h2>-->
            <!--            </div>-->
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                            <h2>Business Programs</h2>
                        </div>
                    </ul>
                </div>
            </div>

            <!--            **Tiles Start**-->
            <div class="row portfolio-container">

                <!--            **Tile 1**-->
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="webroot/img/service/service3.jpg" alt="Image" height=50%; width=50%>
                        </div>
                        <div class="portfolio-text">
                            <h3>Goal setting Program</h3>
                            <a class="btn" href="Service/#p1">+</a>
                        </div>
                    </div>
                </div>

                <!--                **Tile 2**-->
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="webroot/img/image-1.jpg" alt="Image" height=50%; width=50%>
                        </div>
                        <div class="portfolio-text">
                            <h3>Little Voice Mentoring <br> Program</h3>
                            <a class="btn" href="Service/#p2">+</a>
                        </div>
                    </div>
                </div>

                <!--                **Tile 3**-->
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="webroot/img/code-3.jpg" alt="Image" height=50%; width=50%>
                        </div>
                        <div class="portfolio-text">
                            <h3>SMART plan</h3>
                            <a class="btn" href="Service/#p3">+</a>
                        </div>
                    </div>
                </div>


                <!--                **Tile 4**-->
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="webroot/img/success-1.jpg" height=50%; width=50% alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Success Formula for <br> business</h3>
                            <a class="btn" href="Service/#p4">+</a>
                        </div>
                    </div>
                </div>

                <!--                **Tile 5**-->
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="webroot/img/service/Service2.jpg" height=50%; width=50% alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Code of Honor</h3>
                            <a class="btn" href="Service/#p5">+</a>
                        </div>
                    </div>
                </div>

                <!--                **Tile 6**-->
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="webroot/img/service/Service4.jpg" alt="Image" height=50%; width=50%>
                        </div>
                        <div class="portfolio-text">
                            <h3>Corporate and Personal <br> Branding</h3>
                            <a class="btn" href="Service/#p6">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Business Programs End -->

    <!-- Banner Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <h2>Book your free <span>30min</span> Consultation</h2>
            </div>
            <div class="container banner-text">
                <a href="https://forms.gle/vyXBYQ6a1zeK5siQ7" class="nav-item btn">Contact Me</a>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Team Start -->
    <div class="team" id="team" style="background-color: #ebebeb;">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <!--<p>My clients</p>-->
                <h2>Success Stories</h2>
            </div>
            <!----Tile1---->
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/testimonial/Janka.jpg" alt="image"
                                 onclick=window.open("https://youtu.be/1P8EGlke6XQ") style="cursor: pointer">
                        </div>
                        <div class="team-text">
                            <h2>Janka Siniecko</h2>
                            <h4>Healing Teacher</h4>
                            <div class="container banner-text">
                                <a href="SuccessStories" class="nav-item btn" style="background-color: white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!----Tile2---->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/testimonial/Bimal.jpg" onclick=window.open("https://youtu.be/ftJS6T1XUwo")
                                 style="cursor: pointer" height="260" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2>Bimal Raj</h2>
                            <h4>Internationally Trainer and Executive Coach</h4>
                            <div class="container banner-text">
                                <a href="SuccessStories" class="nav-item btn" style="background-color: white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!----Tile3---->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/testimonial/Marco1.jpg" onclick=window.open("https://youtu.be/1Cr1Ywb2ysc")
                                 style="cursor: pointer" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2>Marco Iam</h2>
                            <h4>International Speaker and Coach</h4>
                            <div class="container banner-text">
                                <a href="SuccessStories" class="nav-item btn" style="background-color: white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!----Tile4---->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/testimonial/Alonso.jpg" onclick=window.open("https://youtu.be/BPujNBiafl4")
                                 style="cursor: pointer" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2>Alonso Martínez</h2>
                            <h4>Sub-Director Finanzas</h4>
                            <div class="container banner-text">
                                <a href="SuccessStories" class="nav-item btn" style="background-color: white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Start contact Area -->
    <div id="contact" class="contact-area" style="background-color: #EF233C">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="cold-md-12 col-sm-12 col-xs-12 section-header text-center wow zoomIn"
                         style="margin-top: 5%" data-wow-delay="0.1s">
                        <h2 style="color: whitesmoke">Connect with me</h2>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="row">

                        <!-- Start Google Map -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Start Map -->
                            <img src="img/cont.jpg" width="100%" height="380">
                            <!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.3382024800876!2d138.5995697152383!3d-34.923054080377995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0ced6839c0001%3A0x645df06bb2de4029!2sLevel%204%2F57%20Rundle%20Mall%2C%20Adelaide%20SA%205000!5e0!3m2!1sen!2sau!4v1629014565218!5m2!1sen!2sau" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form contact-form">
                                <div id="sendmessage" style="color: whitesmoke">Fill out the form below to contact me
                                </div>
                                <?= $this->Form->create(null, ['url' => ['controller' => 'Pages', 'action' => 'sendemail']]); ?>
                                <!--                            <form name="email_form" action="send_email.php" method="post" role="form" class="contactForm">-->
                                <div class="form-group">
                                    <input minlength="4" type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" required
                                           data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input minlength="7" type="email" class="form-control" name="email" id="email"
                                           required
                                           placeholder="Your Email" data-rule="email"
                                           data-msg="Please enter a valid email"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input minlength="4" type="text" class="form-control" name="subject" id="subject"
                                           required
                                           placeholder="Subject" data-rule="minlen:4"
                                           data-msg="Please enter at least 8 chars of subject"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                <textarea minlength="4" class="form-control" name="message" rows="5"
                                          data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"
                                          required></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center">
                                    <input class="nav-item btn" value="Send Message" type="submit" name="submit"
                                           style="background-color: white; margin-bottom: 20%;"></div>
                            </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
    </div>
    <!-- End Contact Area -->
</header>
</body>
