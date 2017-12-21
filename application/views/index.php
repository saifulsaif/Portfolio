<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from themegrids.com/themes/devin/theme/particles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 05:12:05 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come after these tags -->

    <!-- Fill in the following meta tags -->
    <meta name="keywords" content="keyword1, keyword2, keyword3"/>
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- Change the site title -->
    <title>SAIFUL|SAIF</title>

    <!-- You can regenerate the favicons as you wish using http://realfavicongenerator.net/, see the theme documentation -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url();?>assets/favicon/manifest.json">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Pretty Photo -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/prettyPhoto.css"/>

    <!-- Flickity -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flickity.css"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css"/>

    <!-- Skills bar -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skills-bar.css"/>

    <!-- custom.css - the styling for this theme -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

    <!-- Modernizr -->
    <script src="<?php echo base_url();?>assets/js/modernizr-custom.js"></script>

</head>

<body>

<!-- status spinner showing while loading the page -->
<div id="preloader"></div>

<!-- HEADER -->
<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top navbar-inverse">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><?php foreach ($all_header as $w_member) { ?>
            <?php echo $w_member->logo ?>
             <?php }?></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- HEADER END -->

<div id="content-wrap">

    <!-- HERO AREA -->
    <div class="jumbotron" id="#hero" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
        <div id="particles-js"></div>
        <div class="container">
              <?php foreach ($all_header as $w_member) { ?>
            <h1><?php echo $w_member->title ?></h1>
             <?php }?>
            <span class="typed"></span>
            <div class="typed-wrap"></div>
			<a href="#portfolio" class="btn btn-primary portfolio-link scroll-link">See my portfolio</a>
        </div>
    </div>
    <!-- HERO AREA END -->

    <!-- bouncing arrow -->
    <div class="arrow-wrap">
        <a href="#about" class="arrow down-bounce scroll-link"></a>
    </div>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 nopadding">
                    <?php foreach ($all_about as $w_member) { ?>
                    <div class="photo-wrap">
                        <img src="<?php echo $w_member->photo;?>" class="photo" alt=""/>
                        
                        <div class="photo-overlay">
                            <div class="photo-text social">
                                <a href="https://www.facebook.com/Saifulislam42"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                          </div>
                     
                </div>
                <div id="aboutRight" class="col-lg-6 col-12 nopadding">
                    <div>
                        <h4><?php echo $w_member->title;?></h4>
                        <h2>ABOUT ME</h2>
                    </div>
                    <div>
                        <p>
                            <?php echo $w_member->description;?>
                        </p>
                    </div>
                     <?php }?>
                    <div id="skillbar-wrap">
                        <div class="skillbar" data-percent="95">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title">HTML</span>
                        </div>
                        <div class="skillbar" data-percent="80">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title">CSS</span>
                        </div>
                        <div class="skillbar" data-percent="65">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title">Javascript</span>
                        </div>
                        <div class="skillbar" data-percent="70">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title">PHP</span>
                        </div>
                        <div class="skillbar" data-percent="60">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title">Laravel Framework</span>
                        </div>
                        <div class="skillbar" data-percent="75">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title">MySql</span>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END -->

    <!-- SERVICES -->
    <section id="services">
        <div class="section-header">
            <div>
                <h2>Services I offer</h2>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 nopadding">
                        <div class="box">
                             <?php foreach ($frist_service as $member) { ?>
                            <div class="circle"><i class="fa fa-desktop"></i></div>
                            <h3> <?php echo $member->title;?></h3>
                            <p> <?php echo $member->description;?></p>
                             <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 nopadding">
                        <div class="box">
                           <?php foreach ($second_service as $member) { ?>
                            <div class="circle"><i class="fa fa-desktop"></i></div>
                            <h3> <?php echo $member->title;?></h3>
                            <p> <?php echo $member->description;?></p>
                             <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 nopadding">
                        <div class="box">
                           <?php foreach ($third_service as $member) { ?>
                            <div class="circle"><i class="fa fa-desktop"></i></div>
                            <h3> <?php echo $member->title;?></h3>
                            <p> <?php echo $member->description;?></p>
                             <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 nopadding">
                        <div class="box">
                           <?php foreach ($fourth_service as $member) { ?>
                            <div class="circle"><i class="fa fa-desktop"></i></div>
                            <h3> <?php echo $member->title;?></h3>
                            <p> <?php echo $member->description;?></p>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES END -->

    <!-- HIRE ME -->
    <section id="hireme" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
        <div class="section-header container">
            <div class="col-12 nopadding">
                <h2 class="animation" data-animation="fadeInLeft">Do you have an interesting project?</h2>
                <a data-animation="fadeInRight" class="btn btn-primary scroll-link animation" href="#contact">Hire
                    me!</a>
                         
            </div>
        </div>
    </section>
    <!-- HIRE ME END -->

    <!-- PORTFOLIO -->
    <section id="portfolio">
        <div class="section-header">
            <div>
                <h2>My Works</h2>
            </div>
        </div>
        <div class="container">
             <div id="filters-group">
                <a class="filter" data-filter="*">show all</a>
                <a class="filter" data-filter=".plugins">plugins</a>
                <a class="filter" data-filter=".design">design</a>
                <a class="filter" data-filter=".photography">photography</a>
            </div>
            <div id="portfolio-items" class="row">
                <div class="item nopadding col-md-6 col-lg-4 photography" data-category="photography">
                    <?php foreach ($frist_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 plugins design" data-category="plugins, design">
                    <?php foreach ($second_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 plugins photography" data-category="plugins, photography">
                    <?php foreach ($third_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 plugins" data-category="plugins">
                    <?php foreach ($fourth_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 design" data-category="design">
                    <?php foreach ($fifth_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 plugins design" data-category="plugins, design">
                    <?php foreach ($sixth_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                 <div class="item nopadding col-md-6 col-lg-4 col-12 plugins" data-category="plugins">
                    <?php foreach ($seventh_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 design" data-category="design">
                    <?php foreach ($eight_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 plugins design" data-category="plugins, design">
                    <?php foreach ($nine_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                 <div class="item nopadding col-md-6 col-lg-4 col-12 plugins" data-category="plugins">
                    <?php foreach ($ten_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 design" data-category="design">
                    <?php foreach ($eleven_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 plugins design" data-category="plugins, design">
                    <?php foreach ($twelve_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                 <div class="item nopadding col-md-6 col-lg-4 col-12 plugins" data-category="plugins">
                    <?php foreach ($thirteen_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 design" data-category="design">
                    <?php foreach ($fourteen_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 plugins design" data-category="plugins, design">
                    <?php foreach ($fifteen_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                 <div class="item nopadding col-md-6 col-lg-4 col-12 plugins" data-category="plugins">
                    <?php foreach ($sixteen_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 design" data-category="design">
                    <?php foreach ($seventeen_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
                <div class="item nopadding col-md-6 col-lg-4 col-12 plugins design" data-category="plugins, design">
                    <?php foreach ($eighteen_main_portfolio as $member) { ?>
                    <a title="Custom description with a <a href='#'>URL</a>."
                       data-rel="prettyPhoto"
                       href="<?php echo $member->main_portfolio_photo;?>">
                        <div class="item-wrap">
                            <img class="img-fluid" src="<?php echo $member->main_portfolio_photo;?>" alt="Photography">
                        </div>
                        <span class="magnifier"></span>
                    </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO END -->

    <!-- TESTIMONIALS -->
    <section id="testimonials" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="100">
        <div class="section-header">
            <div>
                <h2>What my clients say</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="testimonials-content" class="col-12 nopadding">
                    <div class="gallery-cell">
                        <div class="testimonial">
                            <img class="testimonial-avatar"
                                 src="assets/img/client1.jpg" alt="">
                            <q class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                mauris
                                ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla.</q>
                            <span class="testimonial-author">Joe Smith, CEO</span>
                        </div>
                    </div>
                    <div class="gallery-cell">
                        <div class="testimonial">
                            <img class="testimonial-avatar"
                                 src="assets/img/client2.jpg" alt="">
                            <q class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                mauris
                                ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla.</q>
                            <span class="testimonial-author">Lisa Jones, Designer</span>
                        </div>
                    </div>
                    <div class="gallery-cell">
                        <div class="testimonial">
                            <img class="testimonial-avatar"
                                 src="assets/img/client3.jpg" alt="">
                            <q class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                mauris
                                ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla.</q>
                            <span class="testimonial-author">Ryan Waltz, Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS END -->

    <!-- CONTACT FORM  -->
    <section id="contact">
        <div class="section-header">
            <div>
                <h2>Contact Me</h2>
                <p>Please fill the form below. I will contact you as soon as possible.</p>
            </div>
        </div>
        <div class="container">
            
           <h4 style="color:red;">
          <?php 
                $exception=$this->session->userdata('exception');
                if(isset($exception))
                {
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
          ?>
          
      </h4>
            <div class="form-wrap">
                <form id="contact-form" action="<?php echo base_url(); ?>welcome/save" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <input class="form-control" type="text" placeholder="Your Name" name="full_name" id="name"
                                   required/>
                            <input class="form-control" type="text" placeholder="E-mail" name="email_address" id="email"
                                   required/>
                            <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject"
                                   required/>
                        </div>
                        <div class="col-12 col-sm-6">
                            <textarea class="form-control" placeholder="Your Message" rows="7" name="message"
                                      id="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
                <div id="ajaxLoad"></div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM  END -->
</div>

<div id="footer-wrap">

    <!-- CONTACT INFO  -->
    <div id="contact2">
        <div class="container">
            <div class="row withMap">
                <div class="col-md-6">
                   
                    <?php foreach ($all_footer as $footer){?>
                    <p><?php echo $footer->description;?></p>
                    <div>
                        <i class="fa fa-map-marker"> </i><?php echo $footer->address;?>
                    </div>
                    <div>
                        <i class="fa fa-phone"> </i><?php echo $footer->number;?>
                    </div>
                    <div>
                        <i class="fa fa-envelope"> </i><?php echo $footer->email;?>
                    </div>
                       <?php }?>
                </div>
                <div class="col-md-6">
                   </div>
        </div>
    </div>
    <!-- CONTACT INFO END -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Copyright &copy; 2017 SAIFUL</p>
                </div>
                <div class="col-12 col-sm-6 social">
                    <p class="pull-right">
                        <a href="https://www.facebook.com/Saifulislam42"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/tether.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url();?>assets/js/flickity.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.debouncedresize.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/js/typed.min.js"></script>
<script src="<?php echo base_url();?>assets/js/skill.bars.jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/particles.min.js"></script>
<script src="<?php echo base_url();?>assets/js/config.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMYUCUdT1WkZJFkrpI4IzEObG8_YNcZPg&amp;callback=myMap"></script>

</body>

<!-- Mirrored from themegrids.com/themes/devin/theme/particles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 05:13:18 GMT -->
</html>