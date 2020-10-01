<!-- File: Insert.php
Owner: Rashmi B Revanasiddaiah
Date: 30/09/2020
-->

<!-- In Insert.php when the customer registers, the entered details get inserted in the Customer table
of the eventsdb database-->

<?php
include "db.php";

//When the submit button is clicked
if(isset($_POST["submit"])) {
    $sql = "INSERT INTO customer (fullname,Phone,Email,Password)
            VALUES('".$_POST["fullname"]."', '"
            .$_POST["Phone"]."', '"
            .$_POST["Email"]."', '"
            .$_POST["Password"]."')";

    echo "<br><br>" .$sql. "</br></br>";

    if(mysqli_query($conn, $sql)){
        //echo "Data Inserted";
        header("Location:../Read.php?created");
    }else{
        echo "<br><br>Error: inserting " .$sql. "".mysqli_error($conn);
    }
}
    mysqli_close($conn);
?>
