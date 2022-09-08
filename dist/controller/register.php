<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
        // require ('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
        // require ('../vendor/phpmailer/phpmailer/src/Exception.php');
        require("../config/session.php");

       


       
$error="";
  $feedb='';
        


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
                

                $query = "SELECT * FROM user_accounts WHERE Email =? LIMIT 1 ";
                $stmt=$conn->prepare($query);
                $stmt->bind_param("s",$Email);
                if($stmt->execute()){
                    $result = $stmt->get_result();
                    $count = $result->num_rows;
                    $accountrole= 'customer';


                    if($count < 1){
                        

                        $query = "SELECT * FROM user_accounts WHERE Phone =? LIMIT 1 ";
                        $stmt=$conn->prepare($query);
                        $stmt->bind_param("s",$Phone);

                        if($stmt->execute()){
                                $status = 0;
                                $result = $stmt->get_result();
                                $count = $result->num_rows;
                                if($count < 1){
                                        $rnumb = '123456789abcdefghijklmnopqrstuvwxyzAB2345678CDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $code =md5( substr(str_shuffle($rnumb), 0, 16)) ;
                                        $CustomerId= $Email. bin2hex(random_bytes(20));
                                        $password= password_hash($Confpass, PASSWORD_DEFAULT);

                                        $query ="INSERT INTO user_accounts (firstname,lastname,email,phone,state,city,country, postalcode,address,userId,password,verification_code,verified,account_role)  VALUE(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                                        $stmt= $conn->prepare($query);
                                        $stmt->bind_param("ssssssssssssis",$Firstname,$Lastname,$Email,$Phone,$State,$City,$Country,$Postalcode,$Address,$CustomerId,$password,$code,$status,$accountrole);
                                        if($stmt->execute()){
                                                
                                                $feedb .='success';


                                             
                                                
                                                
                                               

                                                $message = '
                                                 <div class="grt"
                                                        style=" width: 100%; padding: 50px 20px;font-family:  Gill Sans MT; ">
                                                        <h1 style="color: rgb(239, 167, 0); text-align:center">MainMart</h1>
                                                        <p style="text-align:center;font-size: 17px; color:black;margin-top:30px;margin-bottom: 40px">Before your
                                                                account can be
                                                                fully functional, you need to confirm your email address by clicking the box below</p>


                                                        <a href="http://localhost/works/EMS%20(full%20app)/dist/activate.php?code='.$code.'&user='.$CustomerId.'" style="margin:0px auto;text-align:center;background: rgb(239, 167, 0);padding:10px 60px ; border-radius:5px; color:white; font-size:20px;text-decoration: none; display:block; width:fit-content"
                                                                href="">Confirm
                                                                Mail
                                                        </a>

                                                        
                                                        <p style="text-align:center;margin:30px 0px ;color:black">
                                                                If you have any questions, please visit our <a href=""><b>FAQ page</b></a> <a href="">or <b>contact
                                                                        us</b> </a>
                                                        </p>
                                                         <p style="color:black">Best Regards</p>
                                                          <p style="color:black"><b>Mainmart Team !</b></p>
                                                </div>
                                                
                                                
                                                ';
                                            




                                                require('../vendor/autoload.php');

                                               $mail = new PHPMailer(true);

                                                try {
                                                //Server settings
                                                $mail->SMTPDebug   =0;                  //Enable verbose debug output
                                                $mail->isSMTP();                                            //Send using SMTP
                                                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                                $mail->Username   = 'sleekz2020@gmail.com';                     //SMTP username
                                                $mail->Password   = 'lbjbwmhryterdnsn';                               //SMTP password
                                                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                                                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                                                //Recipients
                                                $mail->setFrom('sleekz2020@gmail.com', 'Sammy AJayi');
                                                $mail->addAddress($Email, $Firstname .  $Lastname);     //Add a recipient
                                                // $mail->addAddress('ellen@example.com');               //Name is optional
                                                // $mail->addReplyTo('info@example.com', 'Information');
                                                // $mail->addCC('cc@example.com');
                                                // $mail->addBCC('bcc@example.com');

                                                //Attachments
                                                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                                                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                                                //Content
                                                $mail->isHTML(true);                                  //Set email format to HTML
                                                $mail->Subject = 'Here is the subject';
                                                $mail->Body    = $message;
                                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                                $mail->send();
                                                } catch (Exception $e) {
                                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                                                
                                                }
                                                
                                               


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


        

        
      

                echo   $feedb;
        

   }



        




?>