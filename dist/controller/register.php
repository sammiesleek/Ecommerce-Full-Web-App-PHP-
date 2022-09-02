<?php

        require("../config/session.php");

       


       
$error="";
        


   extract($_POST);


   if(isset($_POST['Firstname']) &&isset($_POST['Lastname']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['City']) && isset($_POST['Postalcode']) && isset($_POST['Country']) && isset($_POST['State']) && isset($_POST['Address']) ){


        $Firstname = mysqli_real_escape_string($conn,$_POST['Firstname']);
        $Lastname = mysqli_real_escape_string($conn,$_POST['Lastname']);
        $Email = mysqli_real_escape_string($conn,$_POST['Email']);
        $Phone = mysqli_real_escape_string($conn,$_POST['Phone']);
        $City = mysqli_real_escape_string($conn,$_POST['City']);
        $Postalcode = mysqli_real_escape_string($conn,$_POST['Postalcode']);
        $Country = mysqli_real_escape_string($conn,$_POST['Country']);
        $State = mysqli_real_escape_string($conn,$_POST['State']);
        $Address = mysqli_real_escape_string($conn,$_POST['Address']);
        $Confpass = mysqli_real_escape_string($conn,$_POST['Confpass']);



        if(filter_var($Email,FILTER_VALIDATE_EMAIL) ){

                $query = "SELECT * FROM customers WHERE Email =? ";
                $stmt=$conn->prepare($query);
                $stmt->bind_param("s",$Email);
                if($stmt->execute()){
                    $result = $stmt->get_result();
                    $count = $result->num_rows;


                    if($count < 1){
                        

                        $query = "SELECT * FROM customers WHERE Phone =? ";
                        $stmt=$conn->prepare($query);
                        $stmt->bind_param("s",$Phone);

                        if($stmt->execute()){
                                $result = $stmt->get_result();
                                $count = $result->num_rows;
                                if($count < 1){

                                        $CustomerId= $Email. bin2hex(random_bytes(20));
                                        $password= password_hash($Confpass, PASSWORD_DEFAULT);

                                        $query ="INSERT INTO customers (Firstname,Lastname,Email,Phone,State,City,Country, Postalcode,Address,customer_id,password)  VALUE(?,?,?,?,?,?,?,?,?,?,?)";
                                        $stmt= $conn->prepare($query);
                                        $stmt->bind_param("sssssssssss",$Firstname,$Lastname,$Email,$Phone,$State,$City,$Country,$Postalcode,$Address,$CustomerId,$password);
                                        if($stmt->execute()){
                                                echo "Registration successful";


                                                // header('location: index.php');



                                        }else{
                                                echo "User can not be registered , try again";
                                        }



                                }else{
                                        echo "Phone Number Already used.";
                                }
                        }else{
                                echo "Problems Validating your phone number.";
                        }



                    }else{
                        echo "Email already Used";
                    }
                }else{
                        echo "Problems validating Email";
                }

        }else{
                $error .= "Invalid Email Address";
        }


        

        



   }



//    echo `<script> alert ('i am working') </script>`;
        




?>