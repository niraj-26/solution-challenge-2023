<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }


?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>RiseUp Women</title>

       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <link rel="stylesheet" href="css/style_o.css">
  <link rel="stylesheet" href="./css/main.css">
 
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_element');
        }
    </script>

</head>

<body>
    


<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>Rise</span>Up Women</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#book">Vision</a>
        <a href="#packages">Objectives</a>
        <a href="#facilities">Facilities</a>
        <a href="#services">About Us</a>
        <a href="#gallery">Inspiration</a>
        <a href="#review">Blogs</a>
        <a href="#contact">Contact Us</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>
    <div class="icons">

   
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
    <div id="google_element"></div>
</header>


<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <div class="container">
    <div class="alert alert-success my-5">
      Welcome ! You are now signed in to your account.
    </div>
   
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        <img src="./images/blank-avatar.jpg" class="img-fluid rounded" alt="User avatar" width="180">
        <h4 class="my-4">Hello, <?= htmlspecialchars($_SESSION["username"]); ?></h4>
        <a href="./logout.php" class="btn btn-primary">Log Out</a>
      </div>
    </div>
  </div>

</div>



<section class="home" id="home">

    <div class="content">
        <h3>RiseUp Women</h3>
        <p>To educate, inspire, and empower rural women.</p>
        <a href="#" class="btn">Discover More- Chat with our AI-Powered Assistant</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/v-3.mp4"></span>
        <span class="vid-btn" data-src="images/v-5.mp4"></span>
        <span class="vid-btn" data-src="images/v-4.mp4"></span>
        <span class="vid-btn" data-src="images/v-2.mp4"></span>
        <span class="vid-btn" data-src="images/v-1.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/v-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>



<section class="book" id="book">

    <h1 class="heading">
        <span>V</span>
        <span>i</span>
        <span>s</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
       
    </h1>
      <div class="row1-container">
        <div class="box box-down cyan">
          <h2>To Inform</h2>
          <p>RiseUp Women "Strong Women.</p>
          <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
        </div>
    
        <div class="box red">
          <h2>To Educate</h2>
          <p>Our Mission is to educate, inspire, and empower rural women.</p>
          <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>
    
        <div class="box box-down blue">
          <h2>To Inspire</h2>
          <p>Our goal is to reach out to women in ever-more creative ways through technology</p>
          <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
      </div>
      <div class="row2-container">
        <div class="box orange">
          <h2>To Empower Women</h2>
          <p>to make them Strong in their own ways!</p>
          <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
      </div>


</section>



<section class="packages" id="packages">

    <h1 class="heading">
        <span>o</span>
        <span>b</span>
        <span>j</span>
        <span>e</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/e-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-user-graduate"></i> Education </h3>
                <p>Sit Idle no more. Go get education!</p>
               
                <a href="https://www.giveindia.org/nonprofit/community-action-for-rural-development-card?utm_source=Blog&utm_campaign=5NGOsForGirlsEducation&utm_medium=5NGOsForGirlsEducation&utm_term=GiveIndia&utm_content=Blog" class="btn">Know More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/s-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-heartbeat"></i> Health </h3>
                <p>A women's health is her Capital!</p>
                <a href="https://www.chetnaindia.org/" class="btn">Know More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/saf-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-eye"></i> Safety </h3>
                <p>The best protection any women can have is courage!</p>
                <a href="https://docs.google.com/document/d/1RiSNnutlkSz8FcLSXEaZ1kiu9Bq50AbUZzdmFb0k_O0/edit?usp=sharing
                " class="btn">Know More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/s-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-female"></i> Empowerment </h3>
                <p>She overcame that was meant to destroy her!</p>
                <a href="https://docs.google.com/document/d/1BdakVyPgB145mmfdt4OMRjFkaxbzLvwlgy5rFMPu28c/edit?usp=sharing
                " class="btn">Know More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/ec-1.jpg" alt="">
            <div class="content">
                <h3> <i class="	fas fa-hand-holding-usd"></i> Economic Freedom </h3>
                <p>Explore the ways for financial Freedom!</p>
                <a href="https://drive.google.com/file/d/1ldegTkSM1NSVRn4myVnK8aHOxhyfBKy1/view?usp=sharing" class="btn">Know More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/s-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-laptop"></i> Women in Tech </h3>
                <p>Discover the opportunities for women in tech.</p>
                <a href="https://docs.google.com/document/d/1FlJFWCpYv2tTGfuS-qRsVL4yliF3dCX8pw08EPxTjDg/edit" class="btn">Know More</a>
            </div>
        </div>

    </div>

</section>




<section class="services" id="facilities">

    <h1 class="heading">
        <span>F</span>
        <span>a</span>
        <span>c</span>
        <span>i</span>
        <span>l</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>
    
    <div class="wrapper-grid">
        <div class="container">
          <div class='banner-img-4'></div>
          <img src="images/ladyD.jpg" alt='profile image' class="profile-img">
          <h1 class="name">Doctor Consultation</h1>
          <p class="description">Online doctor consultations are virtual consultations that you can have with a doctor through chat /audio/video/in order to address your health issues. It is convenient and time-saving especially for the times when you cannot visit a doctor physically at the clinic or hospital. An online doctor consultation is similar to a physical consultation, where you get a prescription after the consultation is complete.</p>
          <a href="doctor.php" class="btn">Connect</a>
        </div>
    
        <div class="container">
          <div class='banner-img-5'></div>
          <img src="images/mp.jpg" alt='profile image' class="profile-img">
          <p class="name">Mentor</p>
          <p class="description">A mentor may share with a mentee information about his or her own career path, as well as provide guidance, motivation, emotional support, and role modeling. A mentor may help with exploring careers, setting goals, developing contacts, and identifying resources.</p>
          <a href="mentor.php" class="btn">Connect</a>
        </div>
    
       
      </div>
</section>





<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>I</span>
        <span>n</span>
        <span>s</span>
        <span>p</span>
        <span>i</span>
        <span>r</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
        <span class="space"></span>
        <span>W</span>
        <span>o</span>
        <span>m</span>
        <span>e</span>
        <span>n</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Ins-1.jpg" alt="">
            <div class="content">
                <h3>Mother Teresa</h3>
                <p>As a Catholic nun, she devoted her life to living in chastity, poverty, and charity.</p>
                <a href="https://myhero.com/mother-teresa#:~:text=As%20a%20Catholic%20nun%2C%20she,making%20it%20a%20better%20place." class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins-2.jpeg" alt="">
            <div class="content">
                <h3>Sushmita Sen</h3>
                <p>a strong, independent, and intelligent woman who believes in living life on her own terms and conditions.</p>
                <a href="https://www.vogue.in/culture-and-living/content/6-times-sushmita-sen-proved-she-is-a-woman-of-substance
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins--1.jpg" alt="">
            <div class="content">
                <h3>Muniba Mazari</h3>
                <p>Learn to be Grateful after Difficulties: Muniba Mazari Story.</p>
                <a href="https://thedigitalyug.com/stories/learn-to-be-grateful-after-difficulties-muniba-mazari-story
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins-4.jpg" alt="">
            <div class="content">
                <h3>Sudha Murthy</h3>
                <p>From becoming the first female Engineer of India to heading a company like Infosys.</p>
                <a href=" https://leverageedu.com/blog/sudha-murthy/
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins--2.jpg" alt="">
            <div class="content">
                <h3>Seema Kushwaha</h3>
                <p>She is known for being legal counsel of victim in 2012 Delhi gang rape and murder case.</p>
                <a href="https://en.wikipedia.org/wiki/Seema_Samridhi
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins-6.jpeg" alt="">
            <div class="content">
                <h3>Krithi Karanth</h3>
                <p>First Indian and Asian woman to win the 2021 WILD Innovator Award, a leading conservation scientist in India.</p>
                <a href=" https://www.conservationindia.org/author/krithi
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins-8.jpeg" alt="">
            <div class="content">
                <h3>Kalpana Saroj
                </h3>
                <p>Described as the original 'Slumdog Millionaire' , this amazing lady was honoured with the Padma Shri in 2013.</p>
                <a href="https://www.bizencyclopedia.com/article/the-life-story-of-kalpana-saroj-a-phoenix-risen-from-the-ashes
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins-9.jpg" alt="">
            <div class="content">
                <h3>Dr. Ritu Karidhal
                </h3>
                <p>She is a Senior Scientist in Indian Space Research Organization with a key role in realizing the Mars Orbiter Mission.</p>
                <a href="https://www.newindianexpress.com/nation/2019/jul/13/from-lucknow-to-the-moon-how-ritu-karidhal-took-on-the-chandrayaan-2-challenge-2003457.html
                " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Ins-7.jpg" alt="">
            <div class="content">
                <h3>Mary Kom</h3>
                <p>Mary Kom is the most celebrated boxer in India, an inspiration to thousands of Indians, especially many Indian women.</p>
                <a href="https://www.storyofsouls.com/truly-inspiring-story-mary-kom/
                " class="btn">see more</a>
            </div>
        </div>

    </div>

</section>



<section class="services" id="services">

    <h1 class="heading">
        <span>A</span>
        <span>b</span>
        <span>0</span>
        <span>u</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>
    
    <div class="wrapper-grid">
        <div class="container">
          <div class='banner-img-1'></div>
          <img src="images/vg.jpg" alt='profile image' class="profile-img">
          <h1 class="name">Vaishnavi Gupta</h1>
          <p class="description">Hi there! My name is Vaishnavi, passionate about learning new technologies, a travel enthusiast and multi-tasker. Follow me to stay connected!</p>
          <a href="https://www.linkedin.com/in/vaishnavi2445/" class="btn">Connect</a>
        </div>
    
        <div class="container">
          <div class='banner-img-2'></div>
          <img src="images/ss.jpg" alt='profile image' class="profile-img">
          <p class="name">Shrashti Bhumarkar</p>
          <p class="description">Hi there! My name is Shrashti, a 3rd year undergraduate, passionate about solving problems, learning about computers and various technologies. Follow me to stay connected!</p>
          <a href="https://www.linkedin.com/in/shrashti-bhumarkar-34278a227/" class="btn">Connect</a>
        </div>
    
       
      </div>
</section>



<section class="review" id="review">

    <h1 class="heading">
        <span>b</span>
        <span>l</span>
        <span>o</span>
        <span>g</span>
        <span>s</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/b-1.jpg" alt="">
                    <h3>RURAL WOMEN: KEY TO NEW INDIA'S AGRARIAN REVOLUTION</h3>
                    <p>Rural women are torchbearers for social, economic and environment transformation for the New India. In India, Agriculture employs about 80 percent of rural women. </p>
                    <a href="https://www.niti.gov.in/rural-women-key-new-indias-agrarian-revolution" class="btn">see more</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/b-2.jpg" alt="">
                    <h3>Women in India: Unheard Stories</h3>
                    <p>From pioneers of the past to innovators of the present, meet the women who have changed Indian culture forever!</p>
                    <a href="https://artsandculture.google.com/project/indias-women-in-culture" class="btn">see more</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/b-3.jpg" alt="">
                    <h3>Celebrating India's Rural Women: 3 Inspiring Stories of Women Farmers Bringing About Change</h3>
                    <p>Empowering and investing in rural women is also pre-requisite to fulfilling the vision of the Sustainable Development Goals that aims to end poverty and hunger, protect the environment, improve health parameters and empower all women. </p>
                    <a href="https://www.thebetterindia.com/71745/india-women-farmers-international-day-of-rural-women/" class="btn">see more</a>
                </div>
            </div>

        </div>

    </div>

</section>



<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/C-1.jpg" alt="">
        </div>

        <form action="" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="Name" name="username" required>
                <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number" name="phone" required>
                <input type="text" placeholder="Subject" name="text" required>
            </div>
            <textarea placeholder="Message" id="" cols="30" rows="10" name="message" required></textarea>
            <input type="submit" class="btn" value="Submit" name="submit">
        </form>

    </div>
    
</section>


<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>


<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Our Socials</h3>
            <a href="https://www.linkedin.com/in/vaishnavi2445/">Vaishnavi</a>
           
            <a href="https://www.linkedin.com/in/shrashti-bhumarkar-34278a227/">Shrashti</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#">Vision</a>
            <a href="#">Objectives</a>
            <a href="#">About Us</a>
            <a href="#">Inspiring Stories</a>
            <a href="#">Blogs</a>
            <a href="#">Contact Us</a>
        </div>

    </div>

    <h1 class="credit"> Created by <span> The Achievers Team </span> | All rights reserved! </h1>

</section>




</body>
</html>


<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/cc8558b7-9f82-435a-ae94-bd6b552e913f/webchat/config.js" defer></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script.js"></script>





</body> 
</html>

