<p?php

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
    <title>complete responsive hospital website create by Sowri</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="css/style.css">
    <style>
        .btn{
    display: inline-block;
    margin-top: 4rem;
    padding: .9rem;
    padding-left: 2rem;
     border:var(--border); 
    border-radius: .5rem;
    box-shadow: var(--box-shadow); 
    color:green;
    cursor: pointer;
    font-size: 1.7rem;
    background:white;
}

.btn span{
    padding:.7rem 1rem;
    border-radius: .5rem;
    background: var(--red);
    color:greenyellow;
    margin-left: .5rem;s
}

.btn:hover{
    background: green;
    color:red;
}

.btn:hover span{
    color: var(--green);
    background:red;
    margin-left: 1rem;
}
.icons-container .icons p{
    font-size: 1.8rem;
    color:yellowgreen);
}
    </style>

</head>
<body>
    


<header class="header">

    <a  class="logo"> <i class="fas fa">SR</i> Hospital </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>



<section class="home" id="home">

    <div class="image">
        <img src="image\images.jpeg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn" > appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>



<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>200+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>5000+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>



<section class="about" id="about">

   
    
    <div class="row">

        <div class="image">
            <img src="image\sr.png" alt="">
        </div>
        
        <div class="content">
            <h3>The Best Medical Hospital in India</h3>
            <p>Welcome to SR Hospital, a beacon of advanced medical care and compassionate service. For over a decade, we have been dedicated to providing exceptional healthcare services to the residents of India. Our unwavering commitment to excellence and patient-centered care has established us as a trusted and respected name in the healthcare industry.</p>


            

            
        </div>

    </div>

</section>



<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            
        </div>

    </div>

</section>



<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Kalyani</h3>
            <span>expert in Allergists</span>
            <p>She  treat immune system disorders such as asthma, eczema, food allergies, insect sting allergies, and some autoimmune diseases.</p>
            
            
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Sree Ram</h3>
            <span>Cardiologists expert</span>
            <p>He experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.</p>
            
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Ramya Sree</h3>
            <span>Dermatologists experts</span>
            <p>Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? She can help.</p>
            
            
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Sumathi</h3>
            <span>Emergency Medicine Specialist</span>
            <p> She make life-or-death decisions for sick and injured people, usually in an emergency room. Their job is to save lives and to avoid or lower the chances of disability.</p>
           
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Hareesh</h3>
            <span>Gastroenterologists</span>
            <p>He specialists in digestive organs, including the stomach, bowels, pancreas, liver, and gallbladder. You might see them for abdominal pain, ulcers, diarrhea, jaundice, or cancers in your digestive organs. They also do a colonoscopy and other tests for colon cancer.</p>
            
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Rakesh</h3>
            <span>Infectious Disease Specialists</span>
            <p>He diagnose and treat infections in any part of your body, like fevers, Lyme disease, pneumonia, tuberculosis, and HIV and AIDS. Some of them specialize in preventive medicine or travel medicine.</p>
            
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>Maina</h3>
            <span>Medical Geneticists</span>
            <p>They diagnose and treat hereditary disorders passed down from parents to children. These doctors may also offer genetic counseling and screening tests.</p>
            
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Mahendra</h3>
            <span>Plastic Surgeons</span>
            <p>You might call them cosmetic surgeons. They rebuild or repair your skin, face, hands, breasts, or body. That can happen after an injury or disease or for cosmetic reasons.</p>
            
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Hima Siva Sankar</h3>
            <span>Neurologists</span>
            <p>These are specialists in the nervous system, which includes the brain, spinal cord, and nerves. They treat strokes, brain and spinal tumors, epilepsy, Parkinson's disease, and Alzheimer's disease.</p>
            
        </div>

    </div>

</section>



<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
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


<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Prudvi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">My friend Shivam 24 year old was suffering from with CVA with hypertension finally he is better and our happiness are back thanks DR Mahendra sir and SR Hospital team. the life savior best hospital best care best treatment thanks a alot</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>jayanth</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">Excellent Medical facilities and services.The staff is very polite and make the patient comfortable.A team of dedicated Doctors, Nurses and other staff make this hospital special.very detailed and good explanation about the treatment, open communication and sophisticated infrastructure with all speciality treatment available cost effectively. </p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Kishore</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Excellent and Supportive staff with concession to Poor and needy people's Truly 24*7 accident and trauma care I the witness of the above and salute to all the concerned members</p>
        </div>

    </div>

</section>



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a> <i class="fas fa-chevron-right"></i> dental care </a>
            <a > <i class="fas fa-chevron-right"></i> message therapy </a>
            <a > <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a > <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a > <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a > <i class="fas fa-phone"></i> +8801688238801 </a>
            <a > <i class="fas fa-phone"></i> +8801782546978 </a>
            <a> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
            <a > <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
            <a > <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a > <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a > <i class="fab fa-twitter"></i> twitter </a>
            <a > <i class="fab fa-twitter"></i> twitter </a>
            <a > <i class="fab fa-instagram"></i> instagram </a>
            <a > <i class="fab fa-linkedin"></i> linkedin </a>
            <a > <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Sowri </span> | all rights reserved </div>

</section>


<script src="js/script.js"></script>

</body>
</html>

