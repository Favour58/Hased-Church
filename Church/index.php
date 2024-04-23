<?php
include"../php/process.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>HASED CHRISTAIN CENTER</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="images/log3.png" alt="Homepage">  
            </a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a href="index.php" title="Home">Home</a></li>
                <li><a href="about.php" title="About">About</a></li>
                <li><a href="events.php" title="Services">Events</a></li>
                <li><a href="contact.php" title="Contact us">Contact</a></li>
                <li><a href="DAAT BIBLE SCHOOL.php" title="DAAT BIBLE SCH">DAAT BIBLE SCHOOL</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- hero
    ================================================== -->
    <?php
    $arg0 = "SELECT * FROM `homeimage`";
    $query0 = mysqli_query($connect, $arg0);
    while ($row = mysqli_fetch_assoc($query0)) {
        ?>
    <section class="s-hero" data-parallax="scroll" data-image-src="../admin/photos/<?php echo $row ['homeimage']?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
    <?php
        }   
        ?>

        <div class="hero-left-bar"></div>

        <div class="row hero-content">

            <div class="column large-full hero-content__text">
                <h1>
                    We Exist To <br>
                    Honor God And <br>
                    Make Disciples
                </h1>

                <div class="hero-content__buttons">
                    <a href="events.php" class="btn btn--stroke">Upcoming Events</a>
                    <a href="about.php" class="btn btn--stroke">About Us</a>
                </div>
            </div> <!-- end hero-content__text -->

        </div> <!-- end hero-content -->

        <ul class="hero-social">
            <li class="hero-social__title">Follow Us</li>
            <li>
                <a href="#0" title="">Facebook</a>
            </li>
            <li>
                <a href="#0" title="">YouTube</a>
            </li>
            <li>
                <a href="#0" title="">Instagram</a>
            </li>
        </ul> <!-- end hero-social -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                Scroll For More
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about">

        <div class="row row-y-center about-content">

            <div class="column large-half medium-full">
                <h3 class="subhead">FINE YOUR PLACE AT HASED CHRISTAIN CENTER</h3>
                <p class="lead">
                our desire is that everybody in Hased christain center feels seen and can fine
                lasting community
                </p>
                <a href="about.html" class="btn btn--primary btn--about">Start Now</a>
            </div>

            <div class="column large-half medium-full">
                <ul class="about-sched">
                    <li>
                        <h4>Main Church Service</h4>
                        <p>
                        Sunday - 9:00 AM | 1:00 PM | 4:30 PM <br>
                        1600 Amphitheatre Parkway, Mt. View, CA, 94043
                        </p>
                    </li>
                    <li>
                        <h4>Kids Church</h4>
                        <p>
                        Sunday - 9:00 AM | 1:00 PM | 4:30 PM <br>
                        1600 Amphitheatre Parkway, Mt. View, CA, 94043
                        </p>
                    </li>
                    <li>
                        <h4>Prayer Meeting</h4>
                        <p>
                        Saturday - 7:00 PM <br>
                        1600 Amphitheatre Parkway, Mt. View, CA, 94043
                        </p>
                    </li>
                </ul> <!-- end about-sched-->
            </div>

        </div> <!-- end about-content -->

    </section> <!-- end s-about -->


    <!-- connect
    ================================================== -->
    <section class="s-connect">

        <div class="row connect-content">
            <div class="column large-half tab-full">
                <P>BE IN THE KNOW</P>
                <h3 class="display-1">CONNECT WITH US.</h3>
                <p>
                    Join our email list to get update from HASED CHRISTAIN CENTER.
                </p>

                <a href="volunteer.html" class="btn btn--primary h-full-width">SIGN UP</a>
            </div>
                <br>
                <br>
                <br>
        
            <div class="column large-half tab-full">
                <p>WHO WE ARE AT HASED CHRISTAIN CENTER</p>
                <h3 class="display-1">US.</h3>
                <p>
                Get to know more about who we are and what we believe her at HASED CHRISTAIN CENTER
                </p>

                <a href="connect-group.html" class="btn btn--primary h-full-width">Learn More</a>
            </div>
            <div class="column large-half tab-full">
                <p>THAT WE MAY</p>
                <h3 class="display-1">GIVE.</h3>
                <p>
                Your Generosity is Making a Difference
                </p>

                <a href="volunteer.html" class="btn btn--primary h-full-width">GIVE</a>
            </div>
            <div class="column large-half tab-full">
                <p>SERVE</p>
                <h3 class="display-1">DOOR HOLDERS.</h3>
                <p>
                Door Holders are people who've been on the inside and experienced Jesus and are willing to open the door for others 
                to be welcomed in.
                </p>

                <a href="volunteer.html" class="btn btn--primary h-full-width">LEARN MORE</a>
            </div>
            <div class="column large-half tab-full">
                <p>SUNDAY GATHERINGS</p>
                <h3 class="display-1">JOIN US ONLINE.</h3>
                <p>
                We gather online each Sunday at 9:30a + 11:45a EST. join us this Sunday
                </p>

                <a href="volunteer.html" class="btn btn--primary h-full-width">JOIN US</a>
            </div>
        </div> <!-- end connect-content  -->

    </section> <!-- end s-connect -->


    <!-- events
    ================================================== -->
    <section class="s-events">

        <div class="row events-header">
            <div class="column">
                <h2 class="subhead">Upcoming Events.</h2>
            </div>
        </div>
         <!-- end event-header -->

        <div class="row block-large-1-2 block-900-full events-list">
        <?php
        $arg0 = "SELECT * FROM `events`";
        $query0 = mysqli_query($connect, $arg0);
        while ($row = mysqli_fetch_assoc($query0)) {

            ?>
            <div class="column events-list__item">
                <h3 class="display-1 events-list__item-title">
                    <a href="#0" title=""><?php echo $row['eventTitle']?></a>
                </h3>
                <p>
                <?php echo $row['msg']?>
                </p>
                <ul class="events-list__meta">
                    <li class="events-list__meta-date"><?php echo $row['date']?></li>
                    <li class="events-list__meta-time"><?php echo $row['time']?></li>
                    <li class="events-list__meta-location"><?php echo $row['location']?></li>
                </ul>
            </div> 
            <?php
        }   
        ?>
        
            <!-- end events-list__item -->

        </div> <!-- end events-list -->

    </section> <!-- end s-events -->


    <!-- series
    ================================================== -->
    <section class="s-series">

        <div class="series-img" style="background-image: url('images/series-2000.jpg');"></div>

        <div class="row row-y-center series-content">

            <div class="column large-half medium-full">
                <h3 class="subhead">Current Series</h3>
                <h2>Shape Your Life with the Words of Life.</h2>
                <p>
                   LASTEST MESSAGES FROM HASED CHRISTAIN CENTER NIGERIA
                </p>
            </div> <!-- end column -->

            <div class="column large-half medium-full">
                <div class="series-content__buttons">
                    <a href="" class="btn btn--large h-full-width">Watch the Video</a>
                    <a href="" class="btn btn--large h-full-width">Listen To the Message</a>
                </div>

                <div class="series-content__subscribe">
                    <p>
                    Never missed a message. Subscribe to our YouTube and Podcast channels.
                    </p>
                    
                    <ul class="series-content__subscribe-links">
                        <li class="ss-apple-podcast"><a href="#0">Apple Podcast</a></li>
                        <li class="ss-spotify"><a href="#0">Spotify</a></li>
                        <li class="ss-soundcloud"><a href="#0">SoundCloud</a></li>
                        <li class="ss-youtube"><a href="#0">Youtube</a></li>
                    </ul>
                </div>
            </div> <!-- end column -->
            
        </div> <!-- series-content -->

    </section> <!-- end s-series -->


    <!-- Social
    ================================================== -->
    <section class="s-social">
            
        <div class="row social-content">
            <div class="column">
                <ul class="social-list">
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--facebook"></span>
                            <span class="social-list__text">Facebook</span>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--twitter"></span>
                            <span class="social-list__text">Twitter</span>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--instagram"></span>
                            <span class="social-list__text">Instagram</span>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--email"></span>
                            <span class="social-list__text">Email</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> <!-- end social-content -->

    </section> <!-- end s-social -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">

        <div class="row footer-top">
            <div class="column large-4 medium-5 tab-full">
                <div class="footer-logo">
                    <a class="site-footer-logo" href="index.html">
                        <img src="images/log3.png" alt="Homepage">
                    </a>
                </div>  <!-- footer-logo -->
                <p>
                   @2023 HASED CHRISTAIN CENTER <br> <p>
                    Privacy Policy Terms + Conditions SmS Terms + Conditions G-tech technology
                </p>
                </p>

            </div>
            <div class="column large-half tab-full">
                <div class="row">
                    <div class="column large-7 medium-full">
                        <h4 class="h6">Our Location</h4>
                        <p>
                        1600 Amphitheatre Parkway <br>
                        Mountain View, California <br>
                        94043 US
                        </p>
        
                        <p>
                        <a href="https://goo.gl/maps/bc7C7eYtSmnNs6216" target="_blank" class="btn btn--footer">Get Direction</a>
                        </p>
                    </div>
                    <div class="column large-5 medium-full">
                        <h4 class="h6">HASED CITY</h4>
                        <ul class="footer-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="volunteer.html">Volunteer</a></li>
                            <li><a href="connect-group.html">Connect Groups</a></li>
                            <li><a href="events.html">Upcoming Events</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="column large-5 medium-full">
                        <h4 class="h6">THE MOVEMENT</h4>
                        <ul class="footer-list">
                            <li><a href="index.html">Us</a></li>
                            <li><a href="about.html">Join Our Team</a></li>
                            <li><a href="volunteer.html">Our Leadership</a></li>
                            <li><a href="connect-group.html">Give</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end footer-top -->

        <div class="row footer-bottom">
            <div class="column ss-copyright">
                <span>Design by <a href="https://www.styleshout.com/">G-tech</a></span>
            </div>
        </div> <!-- footer-bottom -->

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
            </a>
        </div> <!-- ss-go-top -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>