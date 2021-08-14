<?php
$insert = false;
if (isset($_POST['fname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection not sucesss" . mysqli_connect_error());
    }
    // echo "sucessful connection";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $house = $_POST['house'];
    $landmark = $_POST['landmark'];
    $city = $_POST['inputcity'];
    $pincode = $_POST['inputzip'];



    $sql = "INSERT INTO `agro`.`buynow` ( `fname`, `lname`, `inputadress`, `inputcity`, `landmark`, `inputzip`, `current_time`) VALUES ('$fname', '$lname', '$house', '$landmark', '$city', '$pincode', current_timestamp());";

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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="about.html">
    <title>Hello, world!</title>

</head>

<body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>


    <h1 id="dipu">ADHALESHWAR AGRO TECH. SANGAMNER</h1>


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

    <div class="bynow">

        <div class="order-detail">

            <script>
                $(document).ready(function () {

                    var quantitiy = 0;
                    $('.quantity-right-plus').click(function (e) {

                        // Stop acting like a button
                        e.preventDefault();
                        // Get the field name
                        var quantity = parseInt($('#quantity').val());

                        // If is not undefined

                        $('#quantity').val(quantity + 1);


                        // Increment

                    });

                    $('.quantity-left-minus').click(function (e) {
                        // Stop acting like a button
                        e.preventDefault();
                        // Get the field name
                        var quantity = parseInt($('#quantity').val());

                        // If is not undefined

                        // Increment
                        if (quantity > 0) {
                            $('#quantity').val(quantity - 1);
                        }
                    });

                });
            </script>
        </div>


        <br>
        <div class="delivery-details">
            <h3 id="deli">Delivery </h3>
            <h3 id="det"> Details</h3>
            <br><br>
            <h3 id="deli">Shipping </h3>
            <h3 id="det"> Details</h3>
            <form action="pe_buynow.php" method="post">
                <div class="drop_item">
                    <select name="product" id="product">
                        <option value="matrix">Matrix</option>
                        <option value="matrix">INDOFIL M-45</option>
                        <option value="matrix">TILT</option>
                        <option value="matrix">SEQUAL</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">House No.</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Landmark,Street Name</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Tal</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Akole</option>
                            <option>Sangamner</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Pin Code</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Deliver Here</button>
            </form>

        </div>

        <div class="payment">

            <div class="cash">
                <label for="Cash">Cash On Delivery
                    <input type="radio" id="cash" name="cash" value="cash">
                </label>
            </div>
            <div class="or">
                <h3>OR</h3>
            </div>
            <div class="online_">
                <a href="online.html"> Phonepe or Google pay</a>
            </div>
        </div>
    
    <div class="buy">
        <button type="button" class="btn btn-success btn-lg">Buy</button>
    </div>

    </div>
    </div>




    <!-- footer -->

    <section id="footer">

        <div class="container">
            <strong>
                <h2 class="p-3 text-center letter"> GET IN <span class="hcolor">TOUCH</span> </h2>
            </strong>
            <div class="row pt-3">

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <center>
                        <div class="footer-logo mb-3">
                            <center><a href="index.php"><img src="logo.jpg" alt="logo"></a></center>
                        </div>

                        <center>
                            <h3>Follow <span class="hcolor"> Us </span></h3>
                        </center>
                        <div class="followus topcontact">
                            <center>
                                <ul class="social-network social-circle">
                                    <li><a href="https://www.facebook.com/adhaleshwar.agrotech.1" class="icoFacebook"
                                            title="Facebook"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/adhaleshwar" class="icoTwitter" title="Twitter"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i
                                                class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/adhaleshwar_agrotech/" class="icoLinstagram"
                                            title="Instragram"><i class="fab fa-instagram"></i></a></li>
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

    <script>
        document.querySelector('.btn-primary').onclick = function () {
            var house = document.querySelector('.form-control').vaule;
            Landmark = document.querySelector('.form-control').vaule;
            tal = document.querySelector('.form-control').vaule;
            check = document.querySelector('.form-check-label').vaule;

            if (house = "") {
                alert("password not entered")
                return false;
            }
            else if (Landmark = "") {
                alert("Landmark not entered")
                return false;
            }
            else if (tal = "") {
                alert("tal not choosen")
                return false;
            }
            else if (check = "") {
                alert("plese check out")
                return false;
            }

            return true;
        }

    </script>

</body>

</html>