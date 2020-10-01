<!-- File: Booking.php
Owner: Rashmi B Revanasiddaiah
Date: 4/09/2020
-->


<?php

?>



<!DOCTYPE html>

<html>
<head>
    <title>Event Booking Form</title>
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
                    <a href="Booking.html" class="active">Booking</a>
                </li>

                <li>
                    <a href="Login.html">Login</a>
                </li>

            </ul>
        </nav>



    </section><!-- .menu-section -->


    <div class="content">

        <main class="main-area">

            <div class="about-image" style="background-image: url(Images/BridalBouquet.jpg );">
                <div class="about-text">
                    <h1 style="font-family: Rakkas; font-size:60px; color: black;" >EVENTS BOOKING</h1>
                </div>
            </div>
            <!-- <h1 align="center">EVENT BOOKINGS</h1>-->
            <div class="FormContainer">
                <!--<form name = "myForm" action="/action_page.php"  onsubmit = "return validate();">-->
                <form name="mybookform" method="post" action="Text.html" onclick="myFunction()" onsubmit="return validateform();">
                    <h2>Booking Information</h2>
                    <br />
                    <h4>Hello ... Please continue with your booking...</h4>
                    <div class="FormRow">
                        <div class="FormRow">
                            <div class="FormCol-15">
                                <label for="Events">Events</label>
                            </div>
                            <div class="FormCol-25">
                                <td>
                                    <select name="Events">
                                        <option value = "-1" selected>Select</option>
                                        <option value = "1">DownTheAisle Weddings</option>
                                        <option value = "2">Destination Weddings</option>
                                        <option value = "3">Milestone Celebrations</option>
                                    </select>
                                </td>
                                <!--<button type="radio" onclick="myFunction();"></button>-->
                            </div>
                        </div>

                        <div class="FormRow">
                            <div class="FormCol-15">
                                <label for="Guests">No of Guests</label>
                            </div>
                            <div class="FormCol-15">
                                <input type="number" name="Guests" min="0" max="500" step="1" value="0" style="margin-top: 10px;" required>
                            </div>
                        </div>
                        <div class="FormRow">
                            <div class="FormCol-15">
                                <label for="Event Date"> Date</label>
                            </div>

                            <div class="FormCol-15">
                                <input type="date" name="EventDate" style="margin-top: 10px;" required>
                            </div>
                        </div>

                        <div class="FormRow">
                            <div class="FormCol-15">
                                <label for="Budget">Estimated Budget</label>
                            </div>
                            <div class="FormCol-15">
                                <input type="number" name = "Budget"  style="margin-top: 10px;" required>
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="FormRow">
                        <div class="FormCol-15">
                            <label for="subject">Additional Information</label>
                        </div>
                        <div class="FormCol-75">
                            <textarea id="subject" name="subject" placeholder="...." style="height:100px"></textarea>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="FormRow" >
                        <p align = "center">
                            <!--<input type="submit" value="SUBMIT"  >-->
                            <input type="submit" name="book" value = "SUBMIT" ><br/>
                        </p>
                    </div>
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



