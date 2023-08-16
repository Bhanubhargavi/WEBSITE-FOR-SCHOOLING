<html>
  <head>
    
    <style>
      body{
        font-family:'Roboto';
      }
      .logo2{
        height:60px; 
        width:80px;
      }
      .carousel {
        width: 100%;
        height: 90vh;
        position: relative;
        overflow: hidden;
      }

      .carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
      }

      .carousel-slide.active {
        opacity: 1;
      }

      .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .logo {
        margin-left: 20px;
        height: 400px;
        width: 70%;
        background-size: cover;
        margin-right: 0px;
        margin-top: 0;
      }
      .carousel-button-container {
        /* position: absolute;
        top: 80%;
        left: 50%; */
        order: 1;
        justify-self: center;
        align-self: end;
        padding-bottom: 100px;
      }
      .carousel-button {
        border: 2px solid #ddd;
        background-color: #ddd;
        width: 70px;
        height: 8px;
        margin-right: 20px;
        border-radius: 3px;
      }
      .carousel-button.active {
        background-color: #ff7f50;
        border: 2px solid #ff7f50;
      }

      .carousel-button:visited ,
      .carousel-button:hover,
      .carousel-button:active {
        height: 15px;
      }
      .caurosel-description {
        /* position: absolute;
        top: 10%;
        left: 5%; */
        width: 50%;
        color: #fff;
        font-size: 18px;
      }
      .caurosel-description-heading {
        margin-left: 20px;
      }
      .nav-items {
        order: 2;

        display: flex;
        flex-direction: column;
        justify-content: end;
      }

      .main-nav-items ul {
        list-style: none;
      }
      .main-nav-items ul li {
        width: 210px;
        height: 50px;
        border-radius: 12px;
        background-color:#ff7f50;
        color: white;
        margin-bottom: 5px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .main-nav-items ul li i {
        margin-right: 10px;
      }
      .normal-nav-items ul {
        list-style: none;
        
      }

      .normal-nav-items ul li {
        width: 210px;
        height: 50px;
        border-radius: 12px;
        background-color: rgba(237, 86, 31, 0.762);
        color: white;
        margin-bottom: 5px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
      }
      .normal-nav-items ul li a {
        color:white; 
        text-decoration: none;
      }

      .normal-nav-items ul li i {
        margin-right: 10px;
      }
      .caurosel-1 {
        display: flex;
        position: absolute;
        top: 5%;
        justify-content: space-between;
      }
      .news-section-item-1-img {
        height: 100px;
        width: 100px;
        background-size: cover;
      }
      .news-section{
        background-color:#eee;
        padding:20px;
        width:50%; 
      }
      .new-section-content {
        margin-top:40px;
        margin-left:40px;
        margin-bottom:20px;
        background-color: white;
        display: flex;
        gap:30px;
        box-shadow: 2px 2px rgba(0,0,0,0.025);
      }
      .news_and_events_container{
        display: flex;
        
      }
       .date{
        height:70px; 
        width:70px;
        background-color:#ff7f50; 
        border:2px solid #ff7f50; 
        color:white;
        padding: 0 5px;
        margin-top: 0;
        margin-bottom: 0;
        
      }
      .events-section-date{
        font-size: 28px;
        margin-top:0;
        margin-bottom: 0;
      }
      .read-more-btn {
      background-color: #ff7f50;
      color: white;
      border: none;
      height:60px; 
      width:160px;
      font-size: 18px;
      margin-left:40px;
      }
      /* ############ JAHNAVI SECTION ################# */
      .c1 {
        text-align: center;
        width: 250px;
        height: 200px;
        color: #fff;
        padding: 40px 60px;
        
      }
      .c2 {
        background-image: url("Images/1.jpeg");
        background-size: 400px 300px;
        background-repeat: no repeat;
        display: inline-block;
      }
      .c3 {
        background-image: url("Images/5.jpg");
        background-size: 400px 300px;
        background-repeat: no repeat;
        display: inline-block;
      }
      .c4 {
        background-image: url("Images/6.jpg");
        background-size: 400px 300px;
        background-repeat: no repeat;
        display: inline-block;
      }
      .e1 {
        margin-bottom: 30px;
        line-height: 1.5;
      }
      .e2 {
        padding:20px;
        color:black;
        text-decoration: none;
        background-color:#ff7f50;
        border-style: none;
      }
      .main {
        display: flex;
        margin: 100px 20px;
        justify-content: space-around;
      }


      /* FOOTER SECTION */
      .logo1{
        height:200px; 
        padding-top:50px;
      }
      
      a{
        color:#ff7f50;
        font-weight: 600;
      }
      .footer-section-sec-2 ul li p{
        display: inline;
        margin-left:15px;
      }
      .footer-section-sec-2 ul li{
         margin-bottom:15px;
      }
      .footer-section-sec-4 ul li p{
        display: inline;
        margin-left:15px;
      }
      .footer-section-sec-4 ul li{
         margin-bottom:15px;
      }
      .footer-section-sec-2  ul,.footer-section-sec-4 ul{
        margin-left:0;
        list-style: none;
      }
      .footer-section-sec-1{
        width:23%;
        padding:0 50px; 
        
      }
     .footer-section{
      display: flex;
      justify-content: space-between;
      background-color: #eee;
      margin-top:50px;
     }
     button:active {
      background-color:#dc653a;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
      transform: translateY(1px);
      border: 1px solid #ff7f50;
    }
     a:active,a:visited {
      color:#dc653a;
      text-decoration: none;
    }
    .navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:#dc653a;
  color: #fff;
  padding: 10px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1; /* Set a high z-index to ensure the navbar is above other elements */
}

/* Add some padding to the body to avoid overlapping content with the fixed navbar */


/* The rest of the CSS code remains the same */
.navbar-brand {
  font-size: 24px;
  font-weight: bold;
  color: #fff;
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-item {
  margin-left: 10px;
}

.nav-link {
  color: #fff;
  text-decoration: none;
  padding: 10px;
  border-radius: 5px;
}

.nav-link:hover {
  background-color: #fff;
  color: #333;
}



    </style>
  </head>
    
    
    
  <body data-new-gr-c-s-check-loaded="14.1119.0" data-gr-ext-installed=""><div class="carousel">
    <div class="caurosel-slides">
      <div class="carousel-slide active">
        <img src="Images/1.jpeg">
      </div>
      <div class="carousel-slide">
        <img src="Images/5.jpg">
      </div>
      <div class="carousel-slide">
        <img src="Images/6.jpeg">
      </div>
    </div>
  </div>
  <div class="caurosel-1">
    <div class="carousel-button-container">
      <button onclick="showSlide(0); increaseButtonHeight(this)" class="carousel-button active" style="height: 15px;"></button>
      <button onclick="showSlide(1); increaseButtonHeight(this)" class="carousel-button"></button>
      <button onclick="showSlide(2); increaseButtonHeight(this)" class="carousel-button"></button>
    </div>

    <div class="caurosel-description">
      <img src="Images/logo.jpg" class="logo">
      <h1 class="caurosel-description-heading">
        Study in India, Andhra Pradesh, Kadapa
      </h1>
    </div>

    <div class="nav-items">
      <div class="main-nav-items">
        <ul>
          <li><i class="fas fa-bars" aria-hidden="true"></i>MENU</li>
        </ul>
      </div>

      <div class="normal-nav-items">
        <ul>
          <li><a href="login.php">Student Portal</a></li>
          <li>Pre Schooling</li>
          <li><a href="classes.html">High schooling</a></li>
          <li>Intermediate</li>
          <li>EDUCATION</li>
        </ul>
      </div>
    </div>
  </div>

    <!-- ###################### JAHNAVI SECTION ####################### -->
    <div class="main">
      <div class="c2">
          <div class="c1">
              <h2>Our Teachers</h2>
              <p class="e1">
                  Meet our dedicated teachers who inspire and guide our students to excel academically.
              </p>
              <a href="teachers.html" class="e2">Meet Our Teachers ❯</a>
          </div>
      </div>
      <div class="c3">
          <div class="c1">
              <h2>About Our School</h2>
              <p>
                  Learn about our school's mission to provide quality education and foster holistic development.
              </p>
              <a href="discover.html" class="e2">Discover More❯</a>
          </div>
      </div>
      <div class="c2">
          <div class="c1">
              <h2>School Events</h2>
              <p>
                  Explore our exciting school events, from sports days to cultural celebrations.
              </p>
              <a href="viewevents.html" class="e2">View Events❯</a>
          </div>
      </div>
  </div>
  

  <!-- ##################### NEWS SECTION ####################### -->
  <div class="news_and_events_container">
      <div class="news-section">
          <h1>School News</h1>
          <hr>
          <div class="new-section-content">
              <div>
                  <img src="Images/4.jpeg" class="news-section-item-1-img">
              </div>
              <div class="news-section-item-1-description">
                  <p>New Science Lab Inaugurated at Ushoda High School</p>
                  <p>Students and teachers at Ushoda High School celebrated the grand opening of a state-of-the-art science lab, enhancing practical learning opportunities.</p>
                  <p>Published on: AUG-15, 2023</p>
              </div>
          </div>
      
          <div class="new-section-content">
              <div>
                  <img src="Images/3.jpeg" class="news-section-item-1-img">
              </div>
              <div class="news-section-item-1-description">
                  <p>Ushoda High School's Debate Team Excels at Regional Competition</p>
                  <p>The debate team from Ushoda High School displayed exceptional prowess and secured top positions in the recent regional debate competition.</p>
                  <p>Published on: AUG-15, 2023</p>
              </div>
          </div>
      
          <div class="new-section-content">
              <div>
                  <img src="Images/2.jpeg" class="news-section-item-1-img">
              </div>
              <div class="news-section-item-1-description">
                  <p>Community Service Day at Ushoda High School</p>
                  <p>Students and staff from Ushoda High School dedicated a day to various community service projects, fostering a spirit of social responsibility.</p>
                  <p>Published on: AUG-15, 2023</p>
              </div>
          </div>

      <button class="read-more-btn">Read More</button>

    </div>
    
 
  


  <!-- ################################ EVENTS-SECTION ####################################  -->
  <div class="news-section">
    <h1>Ushoda High School Events</h1>
    <hr>
    <div class="new-section-content">
      <div class="date">
        <p class="events-section-date">09</p>
        <p>Mar</p>
      </div>
      <div class="news-section-item-1-description">
          <p>Annual Science Fair at Ushoda High School</p>
          
      </div>
    </div>
   
    <div class="new-section-content">
      <div class="date">
        <p class="events-section-date">15</p>
        <p>Apr</p>
      </div>
      <div class="news-section-item-1-description">
          <p>Ushoda High School Soccer Tournament</p>
          
      </div>
    </div>
    
    <div class="new-section-content">
      <div class="date">
        <p class="events-section-date">22</p>
        <p>May</p>
      </div>
      <div class="news-section-item-1-description">
          <p>Art and Craft Exhibition at Ushoda High School</p>
          
      </div>
    </div>
    <div class="new-section-content">
        <div class="date">
            <p class="events-section-date">09</p>
            <p>Mar</p>
        </div>
        <div class="news-section-item-1-description">
            <p>New Schooling Approach Introduced at Ushoda High School</p>
            <p>Ushoda High School has implemented an innovative schooling approach that focuses on personalized learning and interactive teaching methods.</p>
        </div>
    </div>
    

     

    <button class="read-more-btn">Read More</button>


  </div>
</div>


  <!-- ######### FOOTER SECTION ################################ -->
  <div class="footer-section">
    <div class="footer-section-sec-1">
      <img src="Images/logo.jpg" class="logo1">
      <p>Ushodaya High School was founded in 2002. Ever simce,w e have focused on creating a sustianble future 
        by shaping, educating and moving people to become responsible leaders.
      </p>
      <a href="#">MORE ABOUT US</a>
    </div>

    <div class="footer-section-sec-2">
      <h2>Courses</h2>
      <ul>
        <li>
          <button class="e2">❯</button>
          <p>Pre Schooling</p>
        </li>
        <li>
          <button class="e2">❯</button>
          <p>High School</p>
        </li>
        <li>
          <button class="e2">❯</button>
          <p>Intermediate</p>
        </li>
        
      </ul>

      <a href="#">VIEW ALL</a>
    </div>

    <div class="footer-section-sec-3">
      <h2>Contact</h2>
      <p>Ushodaya High School,PDTR, AP </p>
      <br>
      <bold>AP:</bold>
      <p>kadapa district</p>

      <a href="#">ROUTE</a>
    </div>


    <div class="footer-section-sec-4">
      <h2>Links</h2>
      <ul>
        <li>
          <button class="e2" onclick="window.location.href='exam.html';">❯</button>
          <p>Examination</p>
        </li>
        <li>
          <button class="e2" onclick="window.location.href='faculty_info.php';">❯</button>
          <p>Faculty</p>
        </li>
        <li>
          <button class="e2" onclick="window.location.href='login.php';">❯</button>
          <p>Login</p>
        </li>
        <li>
          <button class="e2" >❯</button>
          <p>Library</p>
        </li>
        
        
      </ul> 
    </div>
  </div>


    <script>
      const carousel = document.querySelector(".carousel");
      const slides = carousel.querySelectorAll(".carousel-slide");

      const numberOfSlides = slides.length;
      let currentSlide = 0;

      function showSlide(slide) {
        slides[currentSlide].classList.remove("active");
        slides[slide].classList.add("active");

        currentSlide = slide;
      }

      function nextSlide() {
        let slide = currentSlide + 1;
        if (slide >= numberOfSlides) {
          slide = 0;
        }
        showSlide(slide);
      }

      const buttons = document.querySelectorAll(".carousel-button");
      let previousButton = null;

      function increaseButtonHeight(button) {
        if (previousButton !== null) {
          previousButton.classList.remove("active");
          previousButton.style.height = "8px";
        }

        button.classList.add("active");
        button.style.height = "15px ";

        previousButton = button;
      }
    
    
      // ################################ NAVBAR #####################################
      const navSlide = () => {
      const burger = document.querySelector('.burger');
      const nav = document.querySelector('.navbar-nav');
      const navLinks = document.querySelectorAll('.nav-link');

      burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
          if (link.style.animation) {
            link.style.animation = '';
          } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
          }
        });

        burger.classList.toggle('toggle');
      });
}

navSlide();

    </script>
  
  ></html>