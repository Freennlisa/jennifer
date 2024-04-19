<?php

include "conn.php";
session_start();

if(isset($_POST['reg_button'])){
    
    $nm=$_POST["nm"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $pn=$_POST["pn"];


$insertusers=mysqli_query($conn, "INSERT INTO users VALUES ('0','$nm','$email','$pass','$pn')");

if($insertusers==true){
    ?>
        <script>
            alert("Your Registration was Succesful");
            window.location.href="index.php";
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Error Registration\nTry again!");
            window.location.href="reg.php";
        </script>
    <?php
 }

} 

if(isset($_POST['login'])){

    $Email=$_POST["email"];
    $pass=$_POST["pass"];

    $check=mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND pass='$pass'");


    $num=mysqli_num_rows($check);
    
    if($num >=1 ) {
        $_SESSION['email']=$email;
        ?>
        <script>
            alert("Account accepted! You are now login Users!");
            window.location.href="userhome.php";
        </script>
        <?php
    
    }
    else{
        ?>
        <script>
            alert("Email or Password not Found! \n try again!");
            window.location.href="index.php";
        </script>
        <?php
    }
    

}

if (isset($_POST['update_account'])) {
    
    $id = $_GET['id'];

    $upname = $_POST['up_name'];
    $upemail = $_POST['up_email'];
    $uppass = $_POST['up_pass'];
    $uppn = $_POST['up_pn'];

    $updateaccount=mysqli_query($conn, "UPDATE user SET name='$upname', Email='$upemail', password='$uppass', pn='$uppn' 
    WHERE id='$id' ");

    if ($updateaccount==true) {
        ?>
        <script>
            alert("Data was changed!");
            window.location.href="userhome.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data was changed!");
            window.location.href="update_prof.php";
        </script>
        <?php
    }
    
}


if(isset($_POST['create_post'])){

    $title = $_POST['title'];
    $date = $_POST['mydate'];
    $desc = $_POST['desc'];
    $posted_by = $_POST['posted_by'];

    $insertpost = mysqli_query($conn, "INSERT INTO post 
    VALUES('0','$title','$date','$desc','$posted_by') ");

    if($insertpost==true){

        ?>
        <script>
            alert("Post was inserted in the DB")
            window.location.href="userhome.php"
        </script>
        <?php
    }else{

        ?>
        <script>
            alert("Post was inserted in the DB")
            window.location.href="createpost.php"
        </script>
        <?php
    }
}





?>