<?php

$conn = mysqli_connect('localhost','root','','user_info') or die('connection failed');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $msg = mysqli_real_escape_string($conn,$_POST['message']);

    $select_message = mysqli_query($conn,"SELECT * FROM `users` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'")or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already';
    }else{
        mysqli_query($conn, "INSERT INTO `users`(name, email, number, message) VALUES ('$name','$email','$number','$msg')")or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
   <!-- font awesome link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="CSS/style.css">


</head>
<body>
     

<?php

 if(isset($message)){
    foreach($message as $message){
        echo '
         <div class="message" data-aos="zoom-out">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
          </div>
        ';
    }
 }

?>
<!--header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portfolio</a>
     
    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">services</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a onclick="myfunction()" href="#" class="fab fa-facebook-f"></a>
        <a onclick="myfunction1()" href="#" class="fab fa-twitter"></a>
        <a href="https://instagram.com/hritikdubey2003?igshid=MzRlODBiNWFlZA==" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/hritik-dubey-601443238" class="fab fa-linkedin"></a>
        <a onclick="myfunction2()" href="#" class="fab fa-github"></a>
    </div>
</header>  
<!-- header section ends --->

<!--  Home section starts -->

<section class="home" id="home">
    <div class="image" data-aos="fade-right">
       <img src="images/linkedin.jpeg" alt="">
    </div>

    <div class="content">
      <h3 class="new" data-aos="fade-up">Hi, I am Hritik Dubey!</h3>
      <span data-aos="fade-up">Full Stack Developer!</span>
      <p data-aos="fade-up">I am pursuing B.Tech from
         Indian Institute of Information 
         Technology, Kalyani! For more information 
         about me kindly surf through link given below!
      </p>
      <a href="#about" class="btn">About Me!</a>
    </div>
</section>

<!--  Home section ends -->

<!--about section starts-->

<section class="about" id="about">

    <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>
 
    <div class="biography" data-aos="fade-up">
 
       <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>
 
       <div class="bio">
          <h3 data-aos="zoom-in"> <span>name : </span> Hritik Dubey</h3>
          <h3 data-aos="zoom-in"> <span>email : </span> hritikdubey2003@gmail.com </h3>
          <h3 data-aos="zoom-in"> <span>address : </span> Mariahu, Jaunpur, 222161</h3>
          <h3 data-aos="zoom-in"> <span>phone : </span> +91 9569922931</h3>
          <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
          <h3 data-aos="zoom-in"> <span>experience : </span> Fresher </h3>
       </div>
 
       <a href="#" class="btn" data-aos="fade-up" >download CV</a>
 
    </div>
    
    <div class="skills" data-aos="fade-up">
 
       <h1 class="heading"> <span>Skillset</span> </h1>
 
       <div class="progress">
          <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>85%</span></h3> </div>
          <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
          <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
          <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>75%</span></h3> </div>
          <div class="bar" data-aos="fade-left"> <h3><span>Bootstrap</span> <span>85%</span></h3> </div>
          <div class="bar" data-aos="fade-right"> <h3><span>DBMS</span> <span>60+%</span></h3> </div>
          <div class="bar" data-aos="fade-left"> <h3><span>C & C++</span> <span>80%</span></h3> </div>
          <div class="bar" data-aos="fade-right"> <h3><span>DSA</span> <span>65%</span></h3> </div>
       </div>
 
    </div>
 
    <div class="edu-exp">
 
       <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>
 
       <div class="row">
 
          <div class="box-container">
 
             <h3 class="title" data-aos="fade-right">education</h3>
 
             <div class="box" data-aos="fade-right">
                <span>( 2017 - 2018 )</span>
                <h3>High School Examination</h3>
                <p>I have completed my High School from Central Board of Secondary Education from St. Xaviers Inter College!</p>
             </div>
 
             <div class="box" data-aos="fade-right">
                <span>( 2019 - 2020 )</span>
                <h3>Intermediate Examination</h3>
                <p>I have completed my Intermediate examination from Central Board of Secondary Education from St. Xaviers Inter College!</p>
             </div>
 
             <div class="box" data-aos="fade-right">
                <span>( 2021 - 2025 )</span>
                <h3>B. Tech</h3>
                <p> I am curently pusrsuing my B. Tech from Indian Institute of Information Technology Kalyani.</p>
             </div>
 
          </div>
 
          <div class="box-container">
 
             <h3 class="title" data-aos="fade-left">experience</h3>
 
             <div class="box" data-aos="fade-left">
                <span>( 2021 - 2022 )</span>
                <h3>Data-Structures and Algorithm</h3>
                <p>I have learned DSA from the 2nd semester of my Engineering.</p>
             </div>
 
             <div class="box" data-aos="fade-left">
                <span>( 2021 - 2022 )</span>
                <h3>C and C++ Programmer</h3>
                <p>I have completed my C and C++ programming from my courses in IIIT. Kalyani.</p>
             </div>
 
             <div class="box" data-aos="fade-left">
                <span>( 2022 - 2023 )</span>
                <h3>full-stack developer</h3>
                <p>I have choosen HTML5, CSS, Bootstrap4, Javascript, PHP, DBMS as my skillset in the journey of being a fullstack Developer. I will get more grip over all this as the hand on practice will increase further. I would be learning new things also.</p>
             </div>
 
          </div>
 
       </div>
 
    </div>
 
 </section>

<!-- about section ends-->

<!--Services section starts-->
<section class="services" id="services">

     <h1 class="heading" data-aos="fade-up"> <span>services</span></h1>

     <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fa fa-bullhorn fa-3x"></i>
            <h3>Web Development</h3>
            <p>I have learned Web Dev using HTML, CSS, JavaScript, PHP and DBMS.</p>
             
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn fa-3x"></i>
            <h3>C and C++</h3>
            <p> I use C and C++ as my priority in programming Language.</p>
             
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3> Data Structures and Algorithm</h3>
            <p>Data Structures and Algorithm is in well practice and improving right now.</p>
             
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn fa-3x"></i>
            <h3>Git and Github</h3>
            <p>Lorem ipsum dolor sit amet.</p>
             
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn fa-3x"></i>
            <h3>Python</h3>
            <p>I am about to complete it!</p>
             
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn fa-3x"></i>
            <h3>Machine Learning</h3>
            <p>Lorem ipsum dolor sit amet. </p>
             
        </div>
     </div>

</section>

<!--services section ends-->

<!-- portfolio section starts-->
<section class="portfolio" id="portfolio">
    <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <img src="images/webd.webp" alt="">
            <h3>Web Development</h3>
            <span>( 2022 - 2023 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="images/data-structure-7390522_640.png" alt="">
            <h3>Data-Structures</h3>
            <span>( 2021 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="images/c-1015531_640.jpg" alt="">
            <h3>C and C++ Programming</h3>
            <span>( 2021 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="images/github-394322_1280.webp" alt="">
            <h3>Git & Git-Hub</h3>
            <span>( 2022 - 2023 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="images/code-g7a2684622_1280.png" alt="">
            <h3>Python</h3>
            <span>( Ongoing )</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="images/artificial-intelligence-8026766_640.webp" alt="">
            <h3>Machine Learning</h3>
            <span>( Ongoing )</span>
        </div>

        
    </div>
</section>

<!--Contact section starts-->

<section class="contact" id="contact">
    <h1 class="heading" data-aos="fade-up"> <span>Get-In-Touch</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name!" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email!" class="box" required>
        </div>
        <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number!" class="box" required>
        <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message!" cols="30" rows="10"></textarea>
        <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+91 9569922931</p>   
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>hritikdubey2003@gmail.com</p>   
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marked-alt"></i>
            <h3>address</h3>
            <p>Mariahu Jaunpur U.P. (222161)</p>   
        </div>
    </div>
</section>

<!--Contact section ends-->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mr. Hritik Dubey</span></div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">

</script>

<script>

//For popping a alert message that I don't have facebook account//
function myfunction(){
   alert("I don't have facebook account! I will surely sign up when requires!");
}

function myfunction1(){
   alert("I have twitter account! It will be connected shortly!");
}

function myfunction2(){
   alert("I have github account! It will be connected shortly!");
}
    </script>


<script>
AOS.init({
    duration: 800,
    delay: 300
});
</script>
</body>
</html>