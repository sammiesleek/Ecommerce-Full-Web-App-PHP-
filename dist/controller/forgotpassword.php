<?php
     use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
       
    require("../config/session.php");

    if(!empty($_POST['email'])){
        
        $email =mysqli_real_escape_string($conn,$_POST['email']);

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){

            $query="SELECT * FROM user_accounts WHERE email =? LIMIT 1 ";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('s',$email);
            if($stmt->execute()){
                
                $result= $stmt->get_result();
                $count = $result->num_rows;
                if($count === 1){
                    $data = $result->fetch_assoc();
                    
                    $Firstname=$data['firstname'];
                    $Lastname=$data['lastname'];
                    $userId=$data['userId'];
                     $rnumb = '123456789abcdefghijklmnopqrstuvwxyz'.$email.'AB2345678CDEFGHIJKLMNOPQRSTUVWXYZ';
                    $code =md5( substr(str_shuffle($rnumb), 0, 50)) ;

                    $query = "UPDATE user_accounts SET verification_code =? WHERE email =?";
                    $stmt=$conn->prepare($query);
                    $stmt->bind_param('ss',$code,$email);

                    if($stmt->execute()){

                        $message='
                        
                            <div class="grt"
                                                        style=" width: 100%; padding: 50px 20px;font-family:  Gill Sans MT; ">
                                                        <h1 style="color: rgb(239, 167, 0); text-align:center">MainMart</h1>
                                                        <p style="text-align:center;font-size: 17px; color:black;margin-top:30px;margin-bottom: 40px">We
																																		received
																																		a
																																		request
																																		to
																																		reset
																																		your
																																		password. click the box below to reset your password</p>


                                                        <a href="http://localhost/works/EMS%20(full%20app)/dist/reset_password.php?code='.$code.'&user='.$userId.'" style="margin:0px auto;text-align:center;background: rgb(239, 167, 0);padding:10px 60px ; border-radius:5px; color:white; font-size:20px;text-decoration: none; display:block; width:fit-content"
                                                                href="">Reset Password
                                                        </a>

                                                        
                                                        <p style="text-align:center;margin:30px 0px ;color:black">
                                                                If you have any questions, please visit our <a href=""><b>FAQ page</b></a> <a href="">or <b>contact
                                                                        us</b> </a>
                                                        </p>
                                                         <p style="color:black">Best Regards</p>
                                                          <p style="color:black"><b>Mainmart Team !</b></p>
                                                </div>
                        
                        
                        
                       ' ;

                        
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
                              $mail->setFrom('sleekz2020@gmail.com', 'Sammy Ajayi');
                              $mail->addAddress($email, $Firstname .  $Lastname);     //Add a recipient
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
                            //   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
                              $mail->send();
                              echo 'success';
                              } catch (Exception $e) {
                              echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
                              
                              }
    
    
    

                    }    
                    






                            

                            
                        
                }else{
                    echo $email. "is not registered";
                }
            }else{
                echo "error valiadting user's data";
            }
        }else{
            echo  $email.'is not a valid email address';
        }





    }else{
        echo 'not working';
    }



?>