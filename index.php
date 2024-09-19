<?php
#DB name
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Errazi Clinic</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <!-- header section starts  -->
    
    <header class="header">
    
        <a href="#" class="logo"> <i class="fas fa-eye"></i> <strong>Errazi</strong>Clinic </a>
    
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#doctors">Doctors</a> 
            <a href="#appointment">Appointment</a>
            <a href="#footer">Contact</a>
        </nav>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
    </header>
    <!-- header section ends -->
     <!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/elrazzi.jpg" width="100" height="300">
    </div>

    <div class="content">
        <h3>See the World Clearly</h3>
        <p>Welcome to Errazi Clinic, Your Partner in Eye Health.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->
 <!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>Errazi's Doctors</h3>
        <p>Our expert surgeons provide exceptional care using advanced techniques.</p>
    </div>

    <div class="icons">
    <i class="fas fa-clock"></i>
        <h3>Working Hours</h3>
        <p>from Saturday to Thursday, 8 AM to 4 PM</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>bed facility</h3>
        <p>We offer comfortable hospital beds equipped for optimal patient care.</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>Emergency Services</h3>
        <p>We provide prompt care for urgent vision issues and injuries.</p>
    </div>

</section>

<!-- icons section ends -->
<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/logo.jpg" alt="">
        </div>

        <div class="content">
            <h3>Your eyes deserve the best; trust our experienced Doctors.</h3>
            <p>Erazzi Clinic specializes in comprehensive eye care, including all types of surgeries like cataract and LASIK. </p>
            <p>Our experienced team is dedicated to providing personalized care with the latest technology to ensure optimal vision for every patient.</p>
            <p>We prioritize personalized care, focusing on each patient's unique needs to enhance their vision and overall eye health. With a commitment to compassion and expertise, we strive to deliver the highest quality of care for all our patients.</p>
           <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>-->
        </div>

    </div>

</section>

<!-- about section ends -->
<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
        <img src="image/ser1.jpg" width="250" height="100">
            
            <h2>Eye examinations for adults and children.</h2>
            
            <a href="https://pubmed.ncbi.nlm.nih.gov/12671132/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <img src="image/ser2.jpg" width="250" height="100">
            <h2>Laser cataract surgery and smart lens placement.</h2>
            
            <a href="https://mehmettetikoglu.com/en/what-is-smart-lens-surgery/#:~:text=Using%20a%20femtolasik%20or%20laser,that%20can%20correct%20eyeglass%20prescription." class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <img src="image/sec3.png" width="250" height="100">
            <h2>Vision correction (far + near + corneal curvature).</h2>
           
            <a href="https://courses.lumenlearning.com/suny-physics/chapter/26-2-vision-correction/#:~:text=So%20to%20correct%20the%20eye,spectacle%20lens%20used%20for%20farsightedness." class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <img src="image/ser4.jpg" width="250" height="100">
            <h2>Lens implantation.</h2>
            <a href="https://www.heartoftexaseye.com/blog/iol-implants/#:~:text=An%20intraocular%20lens%20(IOL)%20implant,any%20other%20vision%20correction%20surgery." class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <img src="image/serr5.jpg" width="250" height="100">
            <h2>Tear duct surgery.</h2>
           
            <a href="https://www.hopkinsmedicine.org/health/conditions-and-diseases/dacryocystorhinostomy#:~:text=What%20is%20a%20dacryocystorhinostomy%3F,your%20eyes%20and%20your%20nose." class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        

    </div>

</section>

<!-- services section ends -->
<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/imed.jpg" alt="">
            <h3>Saada Imed Eddine</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/mohcen.jpg" alt="">
            <h3>Benali Mohcen</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

       

    </div>

</section>

<!-- doctors section ends -->
<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/app.jpg" class="circular-image" alt="" width="150" height="150">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>



<!-- footer section starts  -->

<section class="footer"  id="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Eye examinations for adults and children.</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Laser cataract surgery and smart lens placement.</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Vision correction (far + near + corneal curvature). </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Lens implantation.  </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Tear duct surgery. </a>
        </div>
        
        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +0335484215 </a>
            <a href="#"> <i class="fas fa-phone"></i> +0365556 </a>
            <a href="#"> <i class="fas fa-envelope"></i> errazi@gmail.com </a>
            
            <a href="https://maps.app.goo.gl/gTGACFuam4bA3R9i6"><i class="fas fa-map-marker-alt"></i>Biskra,Algeria. </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-facebook"></i>Facebook </a>
        </div>

    </div>

    <div class="credit"> created by <span>Heriz Oumaima</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>
