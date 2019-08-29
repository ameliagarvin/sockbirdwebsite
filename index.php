<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SockBird</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Barlow:100,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

  <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.5/flickity.min.css">
<script src="https://use.fontawesome.com/42eeaa005a.js"></script>
<!-- JavaScript -->

</head>
<body>
  <nav>
<div class="top-container">
<img class="logo" width="50px" src="assets/sockbirdlogo.png" alt="">
  <h1>Sockbird Entertainment</h1>
</div>

<div class="header" id="myHeader">
  <div class="nav-ctn">
  <a href="#About" class="tablink" onclick="openPage('About', this, '#fff')" id="defaultOpen">About</button>
<a href="#News" class="tablink" onclick="openPage('News', this, '#fff')">News</a>
<a href="#Games" class="tablink" onclick="openPage('Games', this, '#fff')">Games</a>
<a href="#Jobs" class="tablink" onclick="openPage('Jobs', this, '#fff')">Jobs</a>
<a href="#Contact" class="tablink" onclick="openPage('Contact', this, '#fff')">Contact</a>
  </div>
</div>
</nav>
 <!-- <nav class="navbar-fixed">
 
  <div class="navigation-container">
  <span class="" id="close" onclick="closeNav()">X</span>
  <a class="navbar-brand" href="#"><img src="assets/sockbirdlogo.png" alt=""></a>
<span>Sockbird <br>Entertainment</span>
  <a class="navigation__menu-toggle"  id="toggle"  href="#" onclick="openNav()"> Menu toggle 
    <span class="navigation__menu-toggle__bar bar" ></span> 
    <span class="navigation__menu-toggle__bar bar" ></span> 
    <span class="navigation__menu-toggle__bar bar" ></span> 
  
</a>

</div> -->
  <!-- Contents of menu -->
  <!-- <div class="collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Awards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav> -->
<div class="main-carousel" data-carousel>
  <div class="carousel-cell" style="background-image:url(assets/background.png);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">2D platformer</h3>
      <h2 class="title">Vampire Girl</h2>
      <a href="#" target="_blank" class="btn">Learn more</a>
    </div>
  </div>
<div class="carousel-cell" style="background-image:url(assets/character-sketch-practice.gif);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">3D shooter</h3>
      <h2 class="title">Vortex sun</h2>
      <a href="#" target="_blank" class="btn">Learn more</a>
    </div>
  </div>
<div class="carousel-cell" style="background-image:url(assets/login-desktop.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">2D explorer</h3>
      <h2 class="title">Vee</h2>
      <a href="#" target="_blank" class="btn">Tell me more</a>
    </div>
  </div>
</div>
<main id="main" class="content">
  <!-- social media links -->
  <div class="social-media">
    <a href=""><i class="fa fa-twitter"></i></a>
    <a href=""><i class="fa fa-facebook-f"></i></a>
    <!-- <a href=""><i class="fab fa-discord"></i></a>
    <a href=""><i class="fa fa-linkedin-in"></i></a> -->
    <a href=""><i class="fa fa-envelope"></i></a>
  </div>
  <!-- social media links -->
<section id="tabs">
<!-- <button class="tablink" onclick="openPage('Home', this, '#fff')" id="defaultOpen">About</button>
<button class="tablink" onclick="openPage('News', this, '#fff')">Awards</button>
<button class="tablink" onclick="openPage('Contact', this, '#fff')">Games</button>
<button class="tablink" onclick="openPage('About', this, '#fff')">Jobs</button> -->

<div id="About" class="tabcontent">
  <div class="tab-inside">
  <h3>About</h3>
 <span class="line"></span>
  <p>Home is where the heart is..</p>
  <div class="scrollmenu">
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
  <a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a><a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a><a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a><a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a><a href="#home">
    <div class="card">
<div class="card-image" background-image:url("//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cj/CJ2FNEKKW5RH1551898330814.jpg")>
<div class="info-topimg">
<span class="new">new</span>
</div>
</div>
<div class="card-content">
  <h4>Card Category</h4>
  <h5>Card content Title Two Lines</h5>
  <span class="publish-date">Aug 08 2019 </span><span class="read-time">4 min read</span>
</div>
    </div>
  </a>
</div>
<h3>Founders</h3>
  <span class="line"></span>
  <h3>Recognition</h3>
  <span class="line"></span>
  <h3>Partners</h3>
  <span class="line"></span>
  </div>
  
 </div>

<div id="News" class="tabcontent">
  <div class="tab-inside">
  <h3>News</h3>
  <span class="line"></span>
  <p>Some news this fine day!</p> 
  </div>
</div>

<div id="Games" class="tabcontent">
  <div class="tab-inside">
  <h3>Games</h3>
  <span class="line"></span>
  <p>Get in touch, or swing by for a cup of coffee.</p>
  </div>
</div>

<div id="Jobs" class="tabcontent">
  <div class="tab-inside">
  <section class="values">
     <h3>Our Values</h3>
  <span class="line"></span>
  <p>Who we are and what we do.</p>
  <ul class="value-list">
    <li>OWNERSHIP</li>
    <li>PASSION</li>
    <li>CREATIVITY</li>
    <li>TRANSPARENCY</li>
  </ul>
</section>
<section class="offer">
<h3>What We Offer</h3>
  <span class="line"></span>
  <p>Who we are and what we do.</p>
  <div class="offer-list">
    <div class="offer-ctn">
    <img src="assets/sockbirdlogo.png" />
    <div>
    <h4>Competitive Salary</h4>
    <p>We offer industry standard salaries as well as bonuses to look forward to. Our team can look forward to mentorship and regular check ins to ensure we are both getting as much as we can from each other!</p>
    </div>
  </div>
    <div class="offer-ctn">
      <img src="assets/sockbirdlogo.png" alt="">
      <div>
      <h4>Benefits</h4>
      <p>We offer great Benefits and resources to our employees because the more they grow, the more we grow!</p>
      <button class="apply" id="show" onclick="toggleShow('show-benefits')" href="">see all benefits</button>
      <ul id="show-benefits">
        <li>3 weeks of vacation</li>
        <li>Extended health benefits</li>
        <li>Health and Lifestyle spending account 1000$</li>
        <li>Maternity & Paternity Leavve</li>
      </ul>
      </div>
    </div>
    <div class="offer-ctn">
    <img src="assets/sockbirdlogo.png" alt="">
    <div>
    <h4>Career Growth</h4>
      <p>On top of a competitive salary and benefits plan for our team we offer studio resources and activites to help sockbirder's achieve their career goals.</p>
    </div>
    </div>
  </div>
</section>
  <section id="job-list">
  <h3>Jobs</h3>
  <span class="line"></span>
  <p>Who we are and what we do.</p>
  <div class="container">
  <div class="accordion">
    <div class="accordion-item">
      <a><i class="fa fa-pencil" title="Edit"></i> UI Designer</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        <button href="#" class="apply">
Apply</button>
      </div>
    </div>
    <div class="accordion-item">
      <a><i class="fa fa-code"></i>UI Programmer</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        <button href="#" class="apply">
Apply</button>
      </div>
    </div>
    <div class="accordion-item">
      <a><i class="fa fa-user"></i>HR Generalist</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        <button href="#" class="apply">
Apply</button>
      </div>
    </div>
    <div class="accordion-item">
      <a><i class="fa fa-user"></i>Jr. Producer</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        <button href="#" class="apply">
Apply</button>
      </div>
    </div>
    <div class="accordion-item">
      <a id="general-application">General Application</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        <button href="#" class="apply">
Apply</button>
      </div>
    </div>
  </div>
</div>
<h2>Pro Tips</h2>
<span class="line"></span>
<p>WHAT SEPARATES GOOD WORK FROM GREAT?
TAKE A PEEK AT WHAT WE LOOK FOR IN APPLICANTS.</p>
<ul class="career-ul">
<li><p class="career-p">Include a title card with your name and contact info at the beginning and end of your demo reel.<br>
</p></li>
                                                    <li><p class="career-p">Avoid spelling or grammatical errors on your resume. It sounds basic but small errors can imply a lack of attention to detail. </p></li>
                                                    <li><p class="career-p">Don’t forget formatting. If one title is bold, the other titles should be bold. If one bullet point has a period at the end, the other bullet points should appear the same.</p></li>
                                                    <li><p class="career-p">When you list your experience on your resume, be sure to include context. What city, state (or country) did this job take place in? Did you travel and operate in multiple cities? What dates? Was it for five months or five years? Context matters!</p></li>
                                                    <li><p class="career-p">Think about what makes you different. Don’t hesitate to show who you really are, your likes and interests, your personality, and what makes you unique!</p></li>
                                                    <li><p class="career-p">Ensure your demo reel link works. A broken URL stalls our ability to see your awesomeness, so make sure all the links on the page work. If it is password protected, be sure to give us the right password.</p></li>
                                            </ul>
  </section>
  </div>
</div>
<div id="Contact" class="tabcontent">
  <div class="tab-inside">
  <h3>Contact</h3>
  <span class="line"></span>
  <p>Who we are and what we do.</p>
  </div>
</div>
</section>
</main>
<footer>
  <section class="footer-ctn">
  <div class="footer-info">
  <h3>Address</h3>
  <span class="line"></span>
<p>#123 Amazing St.
The Moon, Milky Way Galaxy.
V12 8H0</p>
  <h3>Contact</h3>
  <span class="line"></span>
  <p>We would love to hear from you! Email us and someone will respond to your inquiry as soon as humanly possible.</p>
  <h3>Game Support</h3>
  <span class="line"></span>
  <p>Please let us know if we can make your game experience more enjoyable!</p>
  <h3>Media Contact</h3>
  <span class="line"></span>
  <p>Please use our media and press email press@sockbirdent.com</p>
  <h3>Employment Opportunities</h3>
  <span class="line"></span>
  <p>Think you would be a great fit at Sockbird? Make sure to check out the available opportunites on our job board!</p>
  </div>
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.0329594953823!2d-123.1280729844292!3d49.27577267933057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673d6aa45d5e9%3A0xedf1fab5fa8c3963!2s1238%20Seymour%20St%2C%20Vancouver%2C%20BC%20V6B%206J3!5e0!3m2!1sen!2sca!4v1566792231347!5m2!1sen!2sca" width="100%" max-width="600" height="100%" max-height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
  <div class="copyright">
    Copyright@SockBirdEntertainment. All rights reserved.
  </div>
  </section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.5/flickity.pkgd.min.js"></script>
  <script src="main.js"></script>
  <script src="slider.js"></script>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="accordion.js">
  
</script>

</body>
</html>