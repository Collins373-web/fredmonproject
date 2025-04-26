<!doctype html>
<html>
    <head>
    <title>FREDMON</title>
    
    <style>
        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  width:10px;
  position: relative;
  margin: 200px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
        
        
    .navbar {  
            background-color: lime;  
            overflow: hidden;
                
        }  
        .navbar a {  
            float: left;  
            display: block;  
            color: white;  
            text-align: center;  
            padding: 20px 10px;  
            text-decoration: none;  
        }  
        .navbar a:hover {  
            background-color: white;  
            color: black; 
            padding-top:25px;
        
        }  
        .navbar a.active {  
            background-color: lime;  
            color: white;
            font-size: 25px;
        }  
        @media screen and (max-width: 600px) {  
            .navbar a {  
                float: none;  
                display: block;  
                text-align: left;  
            }  
        }  
/* Create three equal columns that floats next to each other */
.fourth_section {
  float: left;
  width: 20%
  
  
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .fourth_section {
    width: 100%;
  }
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding:10px;
  
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}

        
* {
	box-sizing: border-box;
}

        
 @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
        faq.{
 background-color: white;
 font-family: 'Open Sans', sans-serif;
 
            
        }

.container h1{
  color: black;
  text-align: center;
}

details{
  background-color: #303030;
  color: #fff;
  font-size: 1.5rem;
}

summary {
  padding: .5em 1.3rem;
  list-style: none;
  display: flex;
  justify-content: space-between;  
  transition: height 1s ease;
}

summary::-webkit-details-marker {
  display: none;
}

summary:after{
  content: "\002B";
}

details[open] summary {
    border-bottom: 1px solid #aaa;
    margin-bottom: .5em;
}

details[open] summary:after{
  content: "\00D7";
}

details[open] div{
  padding: .5em 1em;
}       

body {
	font-family: 'Roboto Slab', serif;
	font-size: 1.2rem;
	margin: 0;
	padding: 1rem;
	display: grid;
	place-items: left;
	min-height: 100vh;
}


    </style>
</head>
<body>
    
<div class="navbar">  
    <a href="#fredmon" class="active"><b>FREDMON</b> <b style="color: blue;">TECHNOGIES</b></a>  
    <a href="C:\xampp\htdocs\project.php/#Home">Home</a>  
    <a href="C:\xampp\htdocs\logins.php/#Login">Login</a> 
    <a href="C:\xampp\htdocs\register.php/#Sign up">Sign up</a>
    <a href="#About">About</a>  
    <a href="#Services">Services</a>  
    <a href="#Contact">Contact</a>  
    <input type="text" placeholder="Search..." name="search" style="padding-top:5px; padding-left: 10px;margin-left: 25px; margin-top: 15px;height:40px;width: 300px;">  
        <button type="submit" style="height: 40px;">🔍</button>
</div> 
      <br>   

<!-- Slideshow container -->
<div class="slideshow-container" style="margin-top: -70px;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/WhatsApp.jpg" style="width:100%;height:40%;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/WhatsApp%20Image%202025-03-10%20at%2022.47.42_6ba38467.jpg" style="width:100%;height:50%;">
    <div class="text"></div>
  </div>

  
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
    
    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
    
</div>
   

    
    <h1 style="text-align: center;">Skill up now to stay relavant in Digital age</h1>
    
  <div class="row" style="margin-left:50px;border: 1px solid #ccc;  
            border-radius: 4px;">
  <div class="column">
    
    <h2 style="font-size: 20px;">MACHINE LEARNING</h2>
    <img src="img/f1.png" style="width:250px;height:190px;">
  </div>
  
  <div class="column">
    <h2 style="font-size: 20px;">INTERNET OF THING</h2>
    <img src="img/f2.jpg" style="width: 250px;height: 190px;">
  </div>
  
  <div class="column">
    <h2 style="font-size: 20px;">ARTIFICIAL INTELIGIENCE</h2>
    <img src="img/f3.png" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">BUSINESS INTELIGENCE</h2>
    <img src="img/f4.png" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">DIGNXT-BIG DATA</h2>
    <img src="img/f5.jpg" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">JAVA ENTERPRISE APPS</h2>
    <img src="img/f6.jpg" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
        <h2 style="font-size: 20px;">DATA ANALYTICS</h2>
    <img src="img/f7.jpg" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size:20px;">PYTHON</h2>
    <img src="img/f8.jpg" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">SOFTWARE ENGINEERING</h2>
    <img src="img/f9.jpg" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">DIGITAL MARKETING</h2>
    <img src="img/f10.jpg" style="width: 250px;height: 200px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">MARKETING</h2>
    <img src="img/f11.jpg" style="width: 250px;height: 190px;">
  </div>
    
    <div class="column">
    <h2 style="font-size: 20px;">WEB DEVELOPMENT</h2>
    <img src="img/f12.jpg" style="width: 250px;height: 190px;">
  </div>
    
</div>
    
    <h2 style="text-align: center;">ABOUT US</h2>
    <div class="row">
  <div class="column">

    <img src="img/fred.jpg" style="width: 550px;height: 550px;">
  </div>
  
  <div class="column" style="width:900px;padding-left:300px;">
    
     <p>Our Journey
Founded on a passion for technology and problem-solving, Fredmon
Technologies Ltd began with a mission to simplify
technology for businesses and individuals. Over the years, we have
grown into a reputable IT firm, known for delivering
results-oriented services and comprehensive training programs.</p>
<h3>Our Vision</h3>
To be a global leader in technology training and solutions,
empowering communities through knowledge and innovation.
<h3>Our Mission</h3>
- To equip individuals with relevant and job-ready technology skills.<br>
- To help businesses harness the power of technology for growth and
efficiency.<br>
- To promote sustainable development through IT innovation and
education.
<h3>Our Core Values</h3>
- Excellence: Striving for the highest standards in everything we do.<br>
- Integrity: Building trust through honesty and transparency.<br>
- Innovation: Delivering creative and future-forward solutions.<br>
- Empowerment: Enabling success through knowledge and skills.<br>
 </div>
  </div>
    
    <div class="faq">
  <h1 style="text-align: center;">Frequently Asked Questions</h1>
  <details>
  <summary>Why Fredmon Technologies</summary>
  <ul>
	<li>Highly experienced and certified Instructor.</li>
	<li>Project based learning methodology.</li>
	<li>Learning resources like Physical Courseware for each students, Videos, reference sites, online assessments etc.</li>
	<li>Face-face learning with educator</li>
    <li>To equip individuals with relevant and job-ready technology skills</li>
    <li>To help businesses harness the power of technology for growth and
efficiency.</li>
    <li>To promote sustainable development through IT innovation and
education.</li>
</ul>
  
</details>
  <details>
        <summary>Where is Fredmon Technolgies Located</summary>
         <p>66, igbe road, Auchi,Benin City 312101, Edo</p>
        </details>  
    <details> 
        <summary>What Are Our Services</summary>
        <p> We offer courses like:</p>
        <ul>
        <li>Wed Design</li>
        <li>Wed Development</li>
        <li>UI/UX Design</li>
        <li>Data Analysis</li>
        <li>Didital Marketing</li>
        <li>Programming</li>
        </ul>
        
        </details>
        </div>
    <div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
<footer style="background-color: black; color: white; padding: 20px;">  
    <div style="display: flex; justify-content: space-between;">  
        <div style="font-size: 25px;">  
            <h2> Fredmon<b style="color: lime;">Tech</b> </h2>
<p style="font-size: 20px;"> Fredmon Technologies Ltd is a <br>leading IT solutions provider <br> dedicated to delivering <br>innovative and reliable <br>technology services. With a <br> commitment to excellence. </p><br>
    <p style="margin-top: -30px;"><a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook" style="font-size: 30px;"></i></a> <a href="https://www.twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter" style="font-size: 30px;"></i></a>  
    <a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram" style="font-size: 30px;"></i></a>
        </p>
        </div>  
        <div style="font-size: 25px;">  
            <h2 style="color: lime;">Quick Links</h2>  
            <ul style="list-style-type: none; padding: 0;font-size: 20px;">  
                <li><a href="#" style="color: white; text-decoration: none;">About us</a></li>  
                <li><a href="#" style="color: white; text-decoration: none;">Our Services</a></li>  
                <li><a href="#" style="color: white; text-decoration: none;"></a>Latest Blog</li>  
                <li><a href="#" style="color: white; text-decoration: none;">Contact</a></li> 
                <li><a href="#" style="color: white; text-decoration: none;">Our Project</a></li>  
            </ul>  
        </div>  
        <div style="font-size: 25px;">  
            <h2 style="color: lime;">Help Links</h2>  
            <ul style="list-style-type: none; padding: 0;font-size: 20px;">  
                <li><a href="#" style="color: white; text-decoration: none;">Term of Use</a></li>  
                <li><a href="#" style="color: white; text-decoration: none;">Privacy Policy</a></li>  
                <li><a href="#" style="color: white; text-decoration: none;"></a>Helps</li>  
                <li><a href="#" style="color: white; text-decoration: none;">FQAs</a></li> 
                <li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>  
            </ul>  
        </div>  
        <div style="font-size: 25px;font-size: 20px;">  
          <h2 style="color: lime;"> Contact Us </h2>  
            <p>66, igbe road, Auchi, Benin City 312101,<br> Edo
                08102056439<br>
 fredmontechnologies@gmail.com </p> 
        </div>   
    </div> 
    <div style="text-align: center; margin-top: 20px;">
        <hr>
        <p>&copy; FredmonTechnologies.com, All rights reserved.</p>  
    </div>  
</footer>
</div>

    </body>


</html>