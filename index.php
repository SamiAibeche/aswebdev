<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Aibeche Sami Web Developer AsWebDev Presentation and Portfolio of my work">
    <meta name="keywords" content="Web developer,Aibeche Sami,Brussels,developer,portfolio,Aibeche,Sami,aswebdev,website,Sami Aibeche,As Web Dev">
    <meta name="author" content="Aibeche Sami">
    <meta name="copyright" content="Aibeche Sami">
    <title>Aibeche Sami -  Web developer</title>
    <!-- BOOSTRAP -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="me.min.css" media="screen">
    <link rel="SHORTCUT ICON" href="img/logo.ico">
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66871259-1', 'auto');
      ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- Menu -->
    <header class="headerstandard">
    <div class="headerstandard-inner">
        <nav class="menu menustandard">
            <a class="target-section1 current scrollTo" href="#section1">Home</a>
            <a class="target-section2 scrollTo" href="#section2">About</a>
            <a class="target-section3 scrollTo" href="#section3">Portfolio</a>
            <a class="target-section4 scrollTo" href="#section4">Contact</a>
        </nav>
    </div>
    </header>
    <!-- Section 1 -->
    <div class="main" id="main">
        <section id="section1" class="home">
            <div class="slide_inside">
                <div id="logo"></div> 
            <div>

        </section>
    <!-- Section 2 -->
        <section id="section2" class="about">
            <div class="slide_inside">
                <div id="me"></div>
                <div id="secondTitle"><p class="Font"><i>Web Developer</i></p></div>
                <!-- Mettre le #sign en <h1> -->
                <div><p id="presentation">Hi, my name is Sami. I am a Web Developer and I tend to develop mobile apps. I'm a part of the "Generation Y" and passionate about new technologies, I will translate everything you wants or I will try it, in my own language as HTML, CSS, Javascript, Jquery, Angular JS and PHP. Young, Ambitious and with a logical spirit, it will be a pleasure to collaborate with you.<br /><br /><h1 id="sign">Aibeche Sami.</h1></p></div>
            </div>
        </section>
    <!-- Section 3 -->
        <section id="section3" class="portfolio">
            <div class="slide_inside">
                <div id="thirdTitle"><p>PROJECTS</p></div>
                <div id="BlocProjects">
                    <div id="IloveBxl" class="view view-tenth">
                        <img src="img/ilovebrussels.jpg" alt="I Love Brussels"/>
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>i love brussels</h2>
                            <p>I Love Brussels helps you to discover the place to be in Brussels.<br/><br/><strong>Developed with Wordpress</strong></p>
                            <a href="http://www.ilovebrussels.eu" title="I Love Brussles" target="_blank" target="_blank" class="info">Read More</a>
                        </div>
                    </div>
                    <div id="theCerealBar" class="view view-tenth">
                        <img src="img/thecerealbar.png" alt="The Cereal Bar"/>
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>the cereal bar</h2>
                            <p>The Cereal Bar it's a new concept that offers a new way to eat cereals.<br/><br/><strong>SOON</strong></p>
                            <a href="http://www.thecereal.bar" title="The Cereal Bar" target="_blank" target="_blank" class="info">Read More</a>
                        </div>
                    </div>
                    <div id="other2" class="view view-tenth">
                       <!--  <img src="" alt=""/> -->
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>Future Project</h2>
                            <p></p>
                           <!-- <a href="#" title="" target="_blank" target="_blank" class="info">Read More</a>Read More</a> -->
                        </div>
                    </div>
                    <div id="other3" class="view view-tenth">
                       <!--  <img src="" alt=""/> -->
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>Future Project</h2>
                            <p></p>
                           <!-- <a href="#" title="" target="_blank" target="_blank" class="info">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Section 4 -->
        <section id="section4" class="contact">
            <div class="slide_inside">
                <div id="lastTitle"><p class="Font">GET IN TOUCH</p>
                    <div id="mail">
                        <i class="fa fa-envelope-o fa-1x test"></i>
                    </div>
                </div>
                <!-- Form-->
                <form name="frmMail" action="index.php#section4" method="post">
                    <label for="firstName">First Name<span>*</span></label>
                    <label id="last" for="Lastname">Last Name<span>*</span></label><br />

                    <input id="firstName" name="name" type="text" class="inputBorder" onmouseout="validValue(this)" onkeyup="validValue(this)" onblur="checkValue(this);" autocomplete="off"/>
                    <input id="Lastname" name="lastname" type="text" class="inputBorder" onmouseout="validValue(this)" onkeyup="validValue(this)" onblur="checkValue(this);" autocomplete="off"/><br />

                    <label for="email">Email Adress<span>*</span></label>
                    <label id="comp" for="company">Company Website</label><br />


                    <input id="email" name="email" type="text" class="inputBorder" onkeyup="validMail(this)" onmouseover="validMail(this)" onblur="checkValue(this);" autocomplete="off"/>
                    <input id="company" name="company" type="text" class="inputBorder" onmouseout="validComp(this)" onkeyup="validComp(this)" onblur="checkValue(this);" autocomplete="off"/><br />

                    <br />
                    <label for="content">Message<span>*</span><span id="nbChar"></span></label><br />
                    <textarea id="content" name="message" maxlength="500" onmouseout="validContent(this)" onkeyup="counterChar(this); validContent(this)" onblur="checkValue(this); checkChar(this)" class="inputBorder" autocomplete="off"></textarea><br />
                    <button id="btSend" name="btSend" type="submit" class="btn btn-info">SEND</button> 
                    <?php include 'submit.php'; if($notif!==""){ ?>
                        <div id="message"><?php echo $notif; ?></div>
                    <?php } ?>
                </form>
                <!-- Social Network -->
                <div id="socialNetwork">
                    <div id="wordsNetwork"><p class="littleFont"><span class="moreLittle">+32 (0) 489 54 61 00</span> | <a href="mailto:contact@aswebdev.com">contact@aswebdev.com</a></p></div>
                    <div id="blocNetwork">
                        <a href="https://www.facebook.com/aibechesami" target="_blank"><i id="facebook" class="network fa fa-facebook fa-3x"></i></a>
                        <a href="https://twitter.com/AsWebDev"><i id="twitter" class="network fa fa-twitter fa-3x"></i></a>
                        <a href="https://www.linkedin.com/pub/sami-aibeche/101/ab7/418" target="_blank"><i id="linkedin" class="network fa fa-linkedin fa-3x"></i></a>
                        <a href="http://instagram.com/aswebdev" target="_blank"><i id="instagram" class="network fa fa-instagram fa-3x"></i></a>
                    </div>
                </div>
                <p id="copyright"> &copy; AsWeb 2015</p>
            </div>
        </section>
    </div>
      <!-- JAVASCRIPT -->
    <script async type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script async type="text/javascript" src="lib/jquery-1.11.3.min.js"></script>
    <script async type="text/javascript" src="lib/func.min.js"></script>
</body>
</html>