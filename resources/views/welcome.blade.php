<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Visitor Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!--[if IE]> <script src="js/html5.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/ie.css" /><![endif]-->
    <!--[if lte IE 7]> <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
    <!--[if lt IE 7]> <script src="js/IE7.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css" />
    <style> ul, li, a, img, div, span, dd, dl, dt {behavior: url("assets/iepngfix.htc")} </style> <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/menu.min.js"></script>
    <link type="text/css" href="css/jquery.bxslider.css" rel="stylesheet" />
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
        //for image gallery
        $(function() {
            $('.bxslider').bxSlider({
                auto: true,
                infiniteLoop: true,
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</head>

<body>

<header>
    <div class="wrap">
        <a href="/" class="logo"><img src="images/eventimg/logo.png"></a>
        <aside class="rgt">
            <nav id="cssmenu">
                <ul class="nav">
                    <li><a href="#WhyChooseUs">Why Choose Us</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#OurAchievements">Our Achievements</a></li>
                    <li><a href="#Testimonials">Testimonials</a></li>
                    <li><a href="/visitor">Visitor</a></li>

                    <li> @if (Route::has('login'))
            @auth

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <hi> <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    </hi>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}">Login</a>

                <li>@if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
    @endif
</li>

                </ul></nav>
        </aside></div></header>

<section class="bnr" id="contct">
    <div class="wrap">
        <aside class="lft bnrtext">
            <h1>Looking<br>For The Perfect</h1>
            <h2>Visitor Management  System </h2>
            <h3> For Data Entry </h3>

        </aside>

        <aside class="rgt formPnl">
            <h1>Get In Touch</h1>

            <form action="{{route('welcome')}}" method="post">

                    {{csrf_field()}}

                <fieldset>
                    <div class="fldWrp form-group">
                        <input id="name" name="name" class="form-control" type="text" value="" placeholder="Enter Name" required />
                    </div>
                    <div class="fldWrp form-group">
                        <input id="email" name="email" class="form-control" type="email" value="" placeholder="Enter Email ID" required />
                    </div>
                    <div class="fldWrp form-group">
                        <input type="text" id="contactno" class="form-control" name="contactno" maxlength="15" value="" placeholder="Enter Contact No." required />
                    </div>

                    <div class="fldWrp form-group">
                        <textarea id="message" name="message" class="form-control" type="text" value="" placeholder="Event Details" required></textarea>
                    </div>

                            @if(session('Status'))
                                <p>{{session('Status')}}</p>
                            @endif

                    <div class="fldWrp SbmitBtn form-btn">
                        <input type="submit" value="Submit" id="submit-contact">

                    </div>


                </fieldset>
            </form>
        </aside>

        <div class="clear"></div>
    </div>
</section>

<section class="Choose" id="WhyChooseUs">
    <div class="wrap">
        <h1 class="shape">Why Choose Us</h1>
        <ul>
            <li><img src="images/eventimg/1st_icon.png" width="144" height="143">Delightful Experience<br>
                For our Clients</li>
            <li><img src="images/eventimg/2nd_icon.png" width="144" height="143">Offers the Best<br>
                Quality</li>
            <li><img src="images/eventimg/3rd-icon.png" width="144" height="143">100% customer<br>
                satisfaction</li>
            <li><img src="images/eventimg/4th_icon.png" width="144" height="143">Customized Dashboard <br>
                </li>
        </ul>
        <div class="clear"></div>
    </div>
</section>

<section class="about">
    <div class="wrap">
        <aside class="lft cntnt">

            <h1 class="shape">Wedding Planning</h1>
            <h2>Weddings and Celebrations Service</h2>
            <p>At event experts we make you live your dream wedding like a piece of cake. The wedding is a once lifetime event everyone wants as they dreamt of by putting their best known techniques for crafting the whole wedding.
            </p>
            <P>Our wedding designers simply assist you while putting their best-known techniques for crafting the whole wedding event as you have dreamt. With full planning, our experts look at invitation card design selection up to the last guest departs while making sure the smooth execution of wedding event management tasks throughout.</p>
        </aside>
        <aside class="rgt img">
            <img src="images/eventimg/aboutus.jpg" /></aside>
        <div class="clear"></div>
    </div></section>






<section class="whychooseus">
    <div class="wrap">
        <aside class="lft img">
            <img src="images/eventimg/aboutus2.jpg" /></aside>
        <aside class="rgt cntnt">
            <h1 class="shape">Who We Are</h1>
            <h2>Merrymaking to Milestones, Every Event is Special!</h2>

            <p>Being a well-reputed wedding planner, we hire the trustworthy and result-oriented team of vendors. As experienced wedding event planner, we suggest you innovative ideas and coordinate all the logistical details. We assist you smoothly through wedding etiquette, design concepts, themes, traditions, budget planning and much more.</p>

            <P>We ensure that deadline is met and all the tasks are completed in an orderly way. The entire setup is customized by paying attention to the tiniest inputs from the clients. Our wedding agency also offers superior quality assistance in many other tasks that may not be directly related with the wedding but since we are boosted and dedicated to help our clients in any way possible. We assist our clients in everything from to do to I do.</p>
        </aside>
        <div class="clear"></div>
    </div></section>




<section class="Services" id="Services">
    <h1 class="shape">Our Services</h1>

    <div class="poster-main" id="carousel" data-setting='{
							"width":950,
							"height":500,
							"posterWidth":600,
							"posterHeight":500,
							"scale":0.8,
							"speed":1000,
							"autoPlay":true,
							"delay":3000,
							"verticalAlign":"middle"
							}'>
        <div class="poster-btn poster-prev-btn"></div>
        <ul class="poster-list">

            <li class="poster-item"><a href="#"><img src="images/eventimg/services/games-service.jpg" alt="" width="100%" /></a><h4>Family Engagement games</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/sangeet-service.jpg" alt="" width="100%" /></a><h4>Ladies Sangeet</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/mehndi-service.jpg" alt="" width="100%" /></a><h4>Mehndi Ceremony</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/destination-service.jpg" alt="" width="100%" /></a><h4>Destination Wedding</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/baraat-service.jpg" alt="" width="100%" /></a><h4>Baraat Band</h4></li>

        </ul>
        <div class="poster-btn poster-next-btn"></div>
    </div>


    <div class="poster-main mob" id="carousel2" data-setting='{
							"width":550,
							"height":300,
							"posterWidth":400,
							"posterHeight":300,
							"scale":0.8,
							"speed":1000,
							"autoPlay":true,
							"delay":3000,
							"verticalAlign":"middle"
							}'>
        <div class="poster-btn poster-prev-btn"></div>
        <ul class="poster-list">

            <li class="poster-item"><a href="#"><img src="images/eventimg/services/games-service.jpg" alt="" width="100%" /></a><h4>Family Engagement games</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/sangeet-service.jpg" alt="" width="100%" /></a><h4>Ladies Sangeet</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/mehndi-service.jpg" alt="" width="100%" /></a><h4>Mehndi Ceremony</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/destination-service.jpg" alt="" width="100%" /></a><h4>Destination Wedding</h4></li>
            <li class="poster-item"><a href="#"><img src="images/eventimg/services/baraat-service.jpg" alt="" width="100%" /></a><h4>Baraat Band</h4></li>

        </ul>
        <div class="poster-btn poster-next-btn"></div>
    </div>

    <div class="clear"></div>
</section>
<div class="clear"></div>
<!--Who We are Start -->
<div class="parallax achvmnt" id="OurAchievements">
    <div class="txt"><h1>Our Achievements</h1>
        <ul id="counter">
            <li><span class="counter-value" data-count="107">9000</span>Corporate<br>
                Events Done</li>
            <li><span class="counter-value" data-count="89">0</span>Corporate Event<br>
                Consultations Offered</li>
            <li><span class="counter-value" data-count="90">0</span>Happy<br>
                Clients</li>
            <li><span class="counter-value" data-count="65">0</span>Happy<br>
                Employees</li>
        </ul>
        <div class="clear"></div>
    </div></div>
<!--Who We are End -->



<section class="testimonial" id="Testimonials">
    <div class="wrap">
        <h1 class="shape">Testimonials</h1>

        <ul class="bxslider">
            <li>
                <div class="prflImg"><img src="images/eventimg/avatar.jpg" /></div>
                <h6>Women Entrepreneurship Development Program</h6>
                <p>We had a wonderful experience working with event expert. They organised the closing ceremony for our Walmart Project. Women Entrepreneurship Development Program. The team is highly dedicated, motivated and solution oriented. Look forward working on other corporate events.</p>
                <p class="name">NAGENDRA</p>

            </li>

            <li>
                <div class="prflImg"><img src="images/eventimg/avatar2.jpg" /></div>
                <h6>Team event experts is very innovative with fresh ideology</h6>
                <p>Team event experts is very innovative with fresh ideology for any kind of event like Weddings, Corporate and Social also Maintains a personal touch with his respective clients which is the best thing I believe. All the best Guys, Sky is the limit for you.</p>
                <p class="name">SURENDRA </p>

            </li>

        </ul>
    </div>
</section>


</div>

<section class="get_in_touch">
    <div class="wrap">
        <aside class="lft">

            <h2>We take the Event Planning and Executions to the Highest Level of Fineness</h2>
        </aside>
        <aside class="rgt">
            <a class="btn" href="#contct">Conatct Us</a>
        </aside>
        <div class="clear"></div>
    </div>
</section>


<section class="copyright">
    <div class="wrap">
        <aside class="lft">
            <p>© 2019 All Rights Reserved</p>
        </aside>
        <aside class="rgt">
            <a href="#" class="icn"> <img src="images/eventimg/fb.png" /></a>
            <a href="#" class="icn"><img src="images/eventimg/tw.png" /></a>
            <a href="#" class="icn"><img src="images/eventimg/in.png" /></a>
        </aside>
        <div class="clear"></div>
    </div>
</section>
<a href="#0" class="aplyFrm aplyFrm-fade-out">Contact Us</a>
<a href="#0" class="cd-top cd-fade-out">Top</a>


<script>

    $(document).ready(function() {

        //select all the a tag with name equal to modal
        $('a[name=modal]').click(function(e) {
            //Cancel the link behavior
            e.preventDefault();

            //Get the A tag
            var id = $(this).attr('href');

            //Get the screen height and width
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();

            //Set heigth and width to mask to fill up the whole screen
            $('#mask').css({'width':maskWidth,'height':maskHeight});

            //transition effect
            $('#mask').fadeIn(1000);
            $('#mask').fadeTo("slow",0.8);

            //Get the window height and width
            var winH = $(window).height();
            var winW = $(window).width();

            //Set the popup window to center
            $(id).css('top',  winH/2-$(id).height()/2);
            $(id).css('left', winW/2-$(id).width()/2);

            //transition effect
            $(id).fadeIn(2000);

        });

        //if close button is clicked
        $('.window .close').click(function (e) {
            //Cancel the link behavior
            e.preventDefault();

            $('#mask').hide();
            $('.window').hide();
        });

        //if mask is clicked
        $('#mask').click(function () {
            $(this).hide();
            $('.window').hide();
        });

    });

</script>

<script src="js/Carousel.js"></script>
<script>
    $(function(){
        Carousel.init($("#carousel"));
        $("#carousel").init();
    });
</script>

<script>
    $(function(){
        Carousel.init($("#carousel2"));
        $("#carousel2").init();
    });
</script>
</body>

</html>
