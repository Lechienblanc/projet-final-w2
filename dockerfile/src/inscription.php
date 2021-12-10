<?php
    
// a mettre dans une fonction
$db_username = 'root';
$db_password = 'example';
$db_name     = 'utilisateur';
$db_host     = 'db';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
        or die('could not connect to database');

    session_start();
 
                    if(isset($_POST['submit'])){
                    
                    $fullname=$_POST['fullname'];
                    $password=$_POST['password'];
                    $cpassword=$_POST['cpassword'];
                    $mail=$_POST['mail'];
                    
                    

                    //Now we can confirm if the two password fields have the same value.


                    
                    if($password!= $cpassword){

                        echo "passwords are not the same";
                        
                        }
                       
                       
                    else{ $insert=mysqli_query($db,"INSERT INTO utilisateur(nom_utilisateur,mot_de_passe,mail)VALUES('$fullname','$password','$mail')");


                    //Redirect to restricted page(index.php)

                    If($insert){

                    header("location:index.php");

                    }
                    }
                    }

                    ?>