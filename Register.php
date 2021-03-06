
<!-- File: Register.html
Owner: Rashmi B Revanasiddaiah
Date: 6/09/2020
-->

<?php
?>


<!DOCTYPE html>

<html>
<head>
    <title>Register Login Form</title>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link href="CSS/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS/CSSMain.css" type="text/css" media="all">
    <link rel="stylesheet" href="CSS/CSSForm.css" type="text/css" media="all">
    <link rel="stylesheet" href="CSS/style-menus.css" type="text/css" media="all">
    <link rel="stylesheet" href="CSS/style-card.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- <script>
          function formValidation(){
              var fname = document.getElementById('fname');

              if (fname.value.length == 0) {
                  document.getElementById('head').innerText = "* All fields are mandatory *"; // This segment displays the validation rule for all fields
                  fname.focus();
                  return false;
              }

              var lname = document.getElementById('lname');
              if (lname.value.length == 0) {
                  document.getElementById('head').innerText = "* All fields are mandatory *"; // This segment displays the validation rule for all fields
                  lname.focus();
                  return false;
              }

              /*var addr = document.getElementById('addr');*/
          }
      </script>

     <script type = "text/javascript">-->
    <script>

        function validateform() {

            var fname=document.myform.fname.value;
            var lname=document.myform.lname.value;
            if(fname==null || fname==""){
                alert("First Name cannot be blank");
                return false;
            }

            if(lname==null || lname==""){
                alert("Last Name cannot be blank");
                return false;
            }

            else if( document.myform.Events.value == "-1" ) {
                alert( "Please Select an Event" );
                return false;
            }

        }

        function myFunction() {
            var x = document.getElementById("mySelect").selectedIndex;
            var y = document.getElementById("mySelect").options;
            alert("Index: " + y[x].index + " is " + y[x].text);
        }

    </script>

</head>



<body>
<div class = "container">
    <header class="header">

        <a href = "index.html"><img class = "h q" src = "Images/DownTheAisle.png" style="width:180px; height:150px;" align = "left"></a>

        <form>
            Search <input type="search" name = "search">
        </form>
        <section class="navigation">
            <nav id="social-menu" class="social-menu menu" role="navigation">
                <ul>
                    <li><a href="http://twitter.com"></a></li>
                    <li><a href="http://facebook.com"></a></li>
                    <li><a href="http://youtube.com"></a></li>
                    <li><a href="http://instagram.com"></a></li>
                    <li><a href="http://pinterest.com"></a></li>
                </ul>
            </nav>
        </section>
    </header>

    <section class="navigation">

        <nav id="single-nav" class="single-nav menu" role="navigation">

            <ul>

                <li>
                    <a  href="index.html">Events and Celebrations</a>
                </li>
                <li>
                    <a href="About Us.html">About Us</a>
                </li>

                <li>
                    <a href="Booking.html" >Booking</a>
                </li>

                <li>
                    <a href="Login.html" >Login</a>
                </li>

            </ul>
        </nav>



    </section><!-- .menu-section -->


    <div class="content">

        <main class="main-area">
            <div class="about-image" style="background-image: url(Images/BridalBouquet.jpg );">
                <div class="about-text">
                    <h1 style="font-family: Rakkas; font-size:60px; color: black;" >REGISTRATION</h1>
                </div>
            </div>

            <div class="FormContainer">
                <!--<form name = "myForm" action="/action_page.php"  onsubmit = "return validate();">-->
                <form name="myRegform" method="post" action="PHP/Insert.php">
                    <!--<div class="login_container">-->
                    <!--                        <div class="inner1">-->
                    <div class="FormRow">
                        <div class="FormCol-15">
                            <label for="fname">Full Name</label>
                        </div>
                        <div class="FormCol-50">

                            <input style="left: 300px;" type="text" id="fname" name="fname" placeholder="Your full name.." required>
                        </div>
                    </div>

                    <div class="FormRow">
                        <div class="FormCol-15">
                            <label for="tel">Phone</label>
                        </div>
                        <div class="FormCol-25">
                            <!--<input type="text" id="tel" name="Phone" placeholder=" +99(99)9999-9999" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' required>-->
                            <input type='tel' id="tel" name="Phone"  placeholder=" +99(99)9999 9999" required>
                        </div>
                    </div>

                    <div class="FormRow">
                        <div class="FormCol-15">
                            <label for="Email">Email</label>
                        </div>
                        <div class="FormCol-50">
                            <input type="text" id="email" name="Email" placeholder="email@domain.host" required>
                        </div>
                    </div>

                    <div class="FormRow">
                        <div class="FormCol-15">
                            <label for="Password">Password</label>
                        </div>
                        <div class="FormCol-25">
                            <input type="password" id="password" name="Password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="FormRow">
                        <div class="FormCol-15">
                            <label for="ConfirmPassword">Confirm Password</label>
                        </div>
                        <div class="FormCol-25">
                            <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Password" required>
                        </div>
                    </div>

                    <br>
                    <br>
                    <a href="Login.html" style="font-size: small" >Already a Member? Login here</a>


                    <br>
                    <br>
                    <div class="FormRow" >
                        <p align = "left">
                            <!--<input type="submit" value="SUBMIT"  >-->
                            <input type="submit" name="register" value="REGISTER"><br/>
                        </p>
                    </div>
                    <!--                        </div>-->

                    <!--                    </div>-->
                </form>
            </div>


        </main>



    </div>


    <footer class="footer">
        <section class="footer-align">
            <p> <h3 style="color: #E8E8E8;">CONTACT US</h3>
            <br>
            <i class='fas fa-map-marker-alt' style="color: #E8E8E8;"> &nbsp 10 Weka Street, Nelson 7010, New Zealand </i>
            <br>
            <i class='fas fa-phone-volume'style="color: #E8E8E8;"> &nbsp 0800123456</i>
            <br>
            <i class='far fa-envelope'style="color: #E8E8E8;"> &nbsp info@downtheaisle.co.nz</i>
            </p>

        </section>

        <section class="navigation">
            <nav id="social-menu" class="social-menu menu" role="navigation">
                <ul>
                    <li><a href="http://twitter.com"></a></li>
                    <li><a href="http://facebook.com"></a></li>
                    <li><a href="http://youtube.com"></a></li>
                    <li><a href="http://instagram.com"></a></li>
                    <li><a href="http://pinterest.com"></a></li>
                </ul>
            </nav>
        </section>
        <p style="color: #E8E8E8;">Copyright &#169; Down The Aisle. All Rights Reserved
            <br>

        </p>
    </footer>

</div>




</body>
</html>



