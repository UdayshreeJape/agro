<?php
$insert = false;
if (isset($_POST['cname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection not sucesss" . mysqli_connect_error());
    }
    // echo "sucessful connection";

    $fname = $_POST['cname'];
    $email = $_POST['uemail'];
    $phn = $_POST['ucontact'];
    $message = $_POST['umsg'];



    $sql = "INSERT INTO `agro`.`contact` ( `fname`, `email`, `phone`, `messaege`, `cdate_and_time`) VALUES ( '$fname', '$email', '$phn', '$message', current_timestamp());";

    if ($con->query($sql) == true) {
        //echo "Sucessful";
        $insert = true;
    } else {
        "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?> 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="about.html">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>

</head>

<body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <h1 id="logo">ADHALESHWAR AGROTECH</h1>


    <nav class="navbar navbar-expand-lg navbar-success fixed-logo bg-light">
        <a class="navbar-brand" href="#"><img src="mini/logo.jpg" class="bg-dark" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Shop.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.html">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Help
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="help.html">Product</a>
                        <a class="dropdown-item" href="help2.html">Shop</a>
                    </div>
                </li>



            </ul>
    </nav>
    <!-- contact us -->

    <div class="container">
        <div class="row pt-5">
            <div class="col-sm-12 col-md-6">
                <div class="contact-details">
                    <h3 class="hcolor">Contact Us</h3>
                    <div class="col-sm-12">
                        <form action="contact_us.php" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="form-group col-sm-12">
                                    <label for="fname">Name</label>
                                    <input type="text" name="cname" class="form-control" placeholder="" id="fname" required="">
                                </div>

                                <div class="form-group col-sm-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="uemail" class="form-control" placeholder="" id="email" required="">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="phn">Phone</label>
                                    <input type="text" name="ucontact" class="form-control" maxlength="10" placeholder="" id="phn" required="">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="msg">Message</label>
                                    <textarea class="form-control" name="umsg" id="message" rows="3" placeholder="" required=""></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" id="myBtn" name="btnSubmit" class="btn btn-primary p-2">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                if($insert == true){

               echo '<div class="msgh">';
               echo '  <h2>
                Message delivered!!!
            </h2>';
               echo ' </div>';
                
                  
               
            }
            ?>
            </div>
       

            <div class="col-sm-12 col-md-6">
                <div class="contact-info pt-5">
                    <h6 class="bcolor">Market Yard Sangamner</h6>
                    <hr>
                    <i class="fas fa-map-marker-alt hcolor"></i>
                    <span class="addr">
                        <p> Office No.2, Main building,
                            Market Yard,
                            Sangamner,Tal- Sangamner, Maharashtra State, India - 422605</p>
                    </span>
                    <h6 class="bcolor">Shop Adress Jawale Kadlak</h6>

                    <hr>
                    <i class="fas fa-map-marker-alt hcolor"></i>
                    <span class="addr">
                        <p>Shop no 1,Jawale Kadlak,Tal-Sangamner, Maharashtra State, India - 422605 </p>
                    </span>
                    <h6 class="bcolor">Phone</h6>
                    <hr>
                    <i class="fa fa-phone fa-flip-horizontal hcolor"></i>
                    <span class="addr">
                        <p>+91 9767084322</p>
                    </span>

                    <h6 class="bcolor">Email</h6>
                    <hr>
                    <i class="fas fa-envelope pr-2 hcolor "></i>
                    <span class="addr">
                        <p>adhaleshwaragrotech@gmail.com</p>
                    </span>

                    <i class="fas fa-envelope pr-2 hcolor "></i>
                    <span class="addr">
                        <p>adhaleshwaragrotech@gmail.com</p>
                    </span>

                    <h6 class="bcolor">Working Hours</h6>
                    <hr>
                    <i class="fas fa-business-time hcolor"></i>
                    <span class="addr">
                        <p>10.00 AM to 6.00 PM (IST)</p>
                    </span>
                </div>
            </div>

        </div>
    </div>
 

    <div class="map pt-5 pb-5">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15049.875598128108!2d73.95713607642654!3d19.435340190122563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd0e3e7e6474e9%3A0x65ef55b247a62645!2sKotul%2C%20Maharashtra%20422610!5e0!3m2!1sen!2sin!4v1600507486351!5m2!1sen!2sin" width="1100" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>


    <!-- footer -->

    <section id="footer">

<div class="container">
    <strong>
        <h2 class="p-3 text-center letter1"> GET IN <span class="hcolor">TOUCH</span> </h2>
    </strong>
    <div class="row pt-3">

        <div class="col-xs-12 col-sm-12 col-md-4">
            <center>
                <div class="footer-logo mb-3">
                    <center><a href="index.php"><img src="mini/logo.jpg" alt="logo"></a></center>
                </div>

                <center>
                    <h3>Follow <span class="hcolor"> Us </span></h3>
                </center>
                <div class="followus topcontact">
                    <center>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/adhaleshwar.agrotech.1"
                                    class="icoFacebook" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/adhaleshwar" class="icoTwitter"
                                    title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i
                                        class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/adhaleshwar_agrotech/"
                                    class="icoLinstagram" title="Instragram"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </center>

                </div>
            </center>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <center>
                <h3>Contact <span class="hcolor"> Us </span></h3>
            </center>
            <div class="row">
                <div class="footercontact">
                    <div class="setm">
                        <div class="p-2">
                            <i class="fa fa-home fa-lg"></i>
                            <span class="d-block pl-5">
                                Adhaleshwar Agrotech Private , Market Yard,Sangamner,Dist-Ahmednagar
                                422605</span>
                        </div>

                        <div class="p-2">
                            <i class="fa fa-envelope fa-lg"></i>
                            <span class="d-block pl-5">adhaleshwaragrotech@gmail.com</span>
                        </div>
                        <div class="p-2">
                            <i class="fa fa-phone fa-lg"></i>
                            <span class="d-block pl-5">+91 8830670719 | +91 9767084322 | 7038147576
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 text-center">
            <center>
                <h3>Quick <span class="hcolor"> Links </span></h3>
            </center>

            <ul>
                <a href="index.html" class="text-decoration-none">
                    <li> Home </li>
                </a>
                <a href="about.html" class="text-decoration-none">
                    <li> About US </li>
                </a>
                <a href="products.html" class="text-decoration-none">
                    <li> Products </li>
                </a>

                <!-- <a href="#" class="text-decoration-none">
                <li> Insecticides </li>

            </a>
            <a href="#" class="text-decoration-none">
                <li> Pesticides </li>
            </a>
            <a href="#" class="text-decoration-none">
                <li> Fertilizer </li>
            </a>
            <a href="#" class="text-decoration-none">
                <li> Seeds </li>
            </a> -->
                <!--	<a href="#" class="text-decoration-none"><li> private policies </li></a>
<a href="#" class="text-decoration-none"><li> Terms And Conditions </li></a>
<a href="gallary.php" class="text-decoration-none"><li> Gallary</li></a> -->
                <a href="contact_us.html" class="text-decoration-none">
                    <li> Contact Us </li>
                </a>
            </ul>


        </div>
    </div>

    <hr>
    <div class="copyright p-1 border-top border-light">

        <p> © Copyright 2020|<span class="hcolor"> Adhaleshwaar AgroTech PVT.</span> </p>

    </div>
</div>

</div>
</section>

</body>

</html>