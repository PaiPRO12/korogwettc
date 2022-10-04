<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$POST['email'];
        $phone=$POST['phone'];
        $msg=$POST['msg'];

        $to='paiprotechnology@gmail.com';
        $subject='Form Submission';
        $message="Name: ".$name."\n"."Phone: "."\n". "Wrote the following: "."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong";
        }
    }
?>