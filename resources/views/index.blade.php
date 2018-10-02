<!doctype html>
<html lang="sv-se">
<head>
    <title>Mia Adam</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ben Kraal Trifinity">
    <meta property="fb:admins" content="610071563" />
    
    {{-- <!-- Favicons --> --}}
    {{-- <link rel="shortcut icon" href="assets/images/favicon.png"> --}}   {{-- orginal --}}
    <link rel="shortcut icon" href="favicon.ico">
    {{-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png"> --}}
    {{-- <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png"> --}}
    {{-- <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> --}}
    
    @include('css')
</head>
<body>
        

    {{-- <!-- PRELOADER --> --}}
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    {{-- <!-- /PRELOADER --> --}}

    {{-- <!-- WRAPPER --> --}}
    <div class="wrapper">

        <!-- NAVIGATION -->
        <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top">

            <div class="container">
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            
                    {{-- <!-- YOU LOGO HERE --> --}}
                    <a class="navbar-brand" href="/">
                        {{-- <!-- IMAGE OR SIMPLE TEXT --> --}}
                        {{-- <!-- <img class="dark-logo" src="assets/images/site-logo.png" width="95" alt=""> --}}
                        {{-- <img class="light-logo" src="assets/images/site-logo-light.png" width="95" alt=""> --> --}}
                    </a>
                </div>
            
                <div class="collapse navbar-collapse" id="custom-collapse">
            
                    <ul class="nav navbar-nav navbar-right">
            
                        <li><a href="#hero" class="section-scroll">Home</a></li>
                        <li><a href="#about" class="section-scroll">About</a></li>
                        {{-- <li><a href="#services" class="section-scroll">Weddings</a></li> --}}
                        {{-- <li><a href="#videos" class="section-scroll">Videos</a></li> --}}
                        <li><a href="#portfolio" class="section-scroll">Portfolio</a></li>
                        <li><a href="#features" class="section-scroll">DJ</a></li>
                        {{-- <li><a href="#shop" class="section-scroll">Shop</a></li> --}}
                        {{-- <li><a href="#news" class="section-scroll">Blog</a></li> --}}
                        <li><a href="#clients" class="section-scroll">Clients</a></li>
                        <li><a href="#contact" class="section-scroll">Contact</a></li>
            
                        <li><a href="#" class="toggle-menu menu-top push-body"><i class="fa fa-search"></i></a></li>
            
                    </ul>
                </div>
            
            </div>

        </nav>
        <!-- /NAVIGATION -->

        {{-- backgrundsbilden på mia frontsidan --}}
        <section id="hero" class="module-hero module-parallax module-full-height bg-light-60" data-background="assets/images/section-1.jpg">
        </section>

        <!-- ABOUT -->
        <section id="about" class="module">

            <div class="container">

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        {{-- <h2 class="module-title font-alt">About</h2> --}}
                        <div class="module-subtitle font-serif">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                        <img  src="assets/images/promo_mirror.png">
                        <br><h6>photo: Elin Åhlander</h6>
                        </p>
                    </div>

                    <div class="col-sm-4">
                        @include('text_about')
                    </div>
                    
                </div>

            </div>

        </section >
        <!-- /ABOUT -->


        <hr class="divider"><!-- DIVIDER -->

        {{-- @include('section_videos') --}}
        {{-- @include('section_videos2') --}}
        
        <!-- PORTFOLIO -->
        @include('section_portfolio')



        {{-- DJ texten --}}
        <section id="features" class="module">

            <div class="container">

                <!-- MODULE TITLE -->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        {{-- <h2 class="module-title font-alt">DJ</h2> --}}
                        <div class="module-subtitle font-serif">

                        </div>
                    </div>
                </div>
                <!-- /MODULE TITLE -->

                <div class="row">

                    <!-- ABOUT STUDIO  -->
                    <div class="col-sm-6">

                        {{--  <h5 class="font-alt m-t-0 m-b-20">DJ</h5> --}}
                        <br/><br/>
                        
                        @include('text_dj')


                        
<iframe 
width="100%" 
height="300" 
scrolling="no" 
frameborder="no" 
src="https://w.soundcloud.com/player/
?url=https%3A//api.soundcloud.com/tracks/185566084&amp;
auto_play=false&amp;
hide_related=false&amp;
show_comments=true&amp;
show_user=true&amp;
show_reposts=false&amp;
visual=true">
</iframe>

<iframe 
width="100%" 
height="300" 
scrolling="no" 
frameborder="no" 
src="https://w.soundcloud.com/player/
?url=https%3A//api.soundcloud.com/tracks/163969319&amp;
auto_play=false&amp;
hide_related=false&amp;
show_comments=true&amp;
show_user=true&amp;
show_reposts=false&amp;
visual=true">
</iframe>
                        
{{-- <iframe 
width="100%" 
height="75" 
scrolling="no" 
frameborder="no" 
src="https://w.soundcloud.com/player
?url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F185566084&amp;
visual=true&amp;
auto_play=false&amp;
hide_related=false&amp;
show_comments=true&amp;
show_user=true&amp;
show_reposts=false">

</iframe>

                        
<iframe 
width="100%" 
height="75" 
scrolling="no" 
frameborder="no" 
src="https://w.soundcloud.com/player
?url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F163969319&amp;
visual=true&amp;
auto_play=false&amp;
hide_related=false&amp;
show_comments=true&amp;
show_user=true&amp;
show_reposts=false">

</iframe> --}}
                        {{-- <iframe width="100%" height="75" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player?url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F185566084&amp;visual=true&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe> --}}

                        {{-- <iframe width="100%" height="75" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player?url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F163969319&amp;visual=true&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe> --}}


                    </div>
                    <!-- /ABOUT STUDIO  -->

                    <!-- SKILLS -->
                    <div class="col-sm-6" > {{--  style="border:1px solid black"| height="555" style="height:555px" --}}

                        <img  src="assets/images/promo.png">
                        {{-- <img src="assets/images/djmia.jpg"> --}}

                        <!-- <h6 class="progress-title font-alt">Development</h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-alt"></span>
                            </div>
                        </div>

                        <h6 class="progress-title font-alt">Branding</h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-alt"></span>
                            </div>
                        </div>

                        <h6 class="progress-title font-alt">Marketing</h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-alt"></span>
                            </div>
                        </div>

                        <h6 class="progress-title font-alt">Photography</h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-alt"></span>
                            </div>
                        </div> -->

                    </div>

                

            </div>
            {{-- <img src="gfx/miaadam_loggor.png"> --}}
        </section>

        <hr class="divider"><!-- DIVIDER -->
        
        {{-- Reklam loggorna --}}
        <section id="clients" class="module">
            <div class="container">

                {{-- <div class="row">
                    <div class="col-sm-6 col-sm-offset-3"> --}}
                        <img src="gfx/miaadam_loggor.png">
                    {{-- </div>
                </div> --}}
            </div>
        </section>


        {{-- CLIENTS --}}

        <!-- LATEST PRODUCTS -->
            {{-- include shop part /Ben --}}
        <!-- /LATEST PRODUCTS -->

        {{-- <hr class="divider"><!-- DIVIDER --> --}}



        <hr class="divider"><!-- DIVIDER -->

        {{-- <!-- GOOGLE MAP -->
        <section id="module-maps">

            <div id="map"></div>

        </section>
        <!-- /GOOGLE MAP --> --}}

        <hr class="divider"><!-- DIVIDER -->

        {{-- CONTACT --}}
        <section id="contact" class="module">

            <div class="container">

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        {{-- <h2 class="module-title font-alt">Get In Touch</h2> --}}
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-sm-4 " >
                        <img style="margin-left:30px;" src="assets/images/site-logo2.png" alt=""> {{-- style="height: 210px; width: 210px; margin-left: 120px;"  --}}
                    </div>

                    <div class="col-sm-4 " >
                        <form id="contact-form" role="form" novalidate="">

                            <div class="form-group">
                                <label class="sr-only" for="cname">Name</label>
                                <input type="text" id="cname" class="form-control" name="cname" placeholder="Name*" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="cemail">Your Email</label>
                                <input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail*" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message*" required="" data-validation-required-message="Please enter your message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-block btn-round btn-d">Submit</button>
                            </div>

                        </form>

                        <!-- Ajax response -->
                        <div id="contact-response" class="ajax-response font-alt"></div>

                    </div>

                    <div class="col-sm-4 ">

                        <!-- ALT CONTENT BOX -->
                        <div class="alt-content-box m-t-0 m-t-sm-30">
                            <div class="alt-content-box-icon">
                            {{--    <span class="icon-envelope"></span> --}}
                            </div>
                            <h5 class="alt-content-box-title font-alt">
                                Say Hello
                            </h5>
                            Email: info@miaadam.com<br>
                            Phone: +46 72 3012 077<br>
                            Stockholm / Sweden<br>
                        </div>
                        <!-- /ALT CONTENT BOX -->

                        <!-- ALT CONTENT BOX -->
                        <div class="alt-content-box">
                            <div class="alt-content-box-icon">
                                {{-- <span class="icon-map"></span> --}}
                            </div>
                            <h5 class="alt-content-box-title font-alt">
                                {{-- Where to meet --}}
                            </h5>
                            

                            <a alt="facebook" target="_blank" href="https://www.facebook.com/pages/Styling-and-Pics-by-Mia/157542820978849"><i class="fa fa-facebook fa-2x"> </i> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="https://instagram.com/miaadam_lifestyle/"><i class="fa fa-instagram fa-2x"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="https://se.pinterest.com/miaadam80"><i class="fa fa-pinterest fa-2x"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="https://soundcloud.com/dj-mi-a"><i class="fa fa-soundcloud fa-2x"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                            {{-- <i class="fa fa-facebook-square fa-2x"> </i></a> --}}
                            {{-- <i class="fa fa-linkedin-square fa-2x"> </i> --}}
                            
                            
                            
                            
                            
                            {{-- <a href="#module-maps" class="section-scroll">Find us on map →</a> --}}
                        </div>
                        <!-- /ALT CONTENT BOX -->

                    </div>

                </div>

            </div>
        </section>
        <!-- /CONTACT -->

    

    </div>
    <!-- /WRAPPER -->

    <!-- SCROLLTOP -->
    <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
                            {{-- <i class="fa fa-fw"></i>
                            fa-youtube<span class="muted">[&amp;#xf167;]</span> --}}
    </div>

    <!-- Javascript files -->
    @include('js')

</body>
</html>