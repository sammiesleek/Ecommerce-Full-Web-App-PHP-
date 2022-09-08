<?php
    require("../config/session.php");

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        
        $errors ="";
        $email =mysqli_real_escape_string($conn,$_POST['email']);
        $password =mysqli_real_escape_string($conn,$_POST['password']);

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){

            $query="SELECT * FROM user_accounts WHERE email =? LIMIT 1 ";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('s',$email);
            if($stmt->execute()){
                $result= $stmt->get_result();
                $count = $result->num_rows;
                $data = $result->fetch_assoc();
    
                if($count === 1){
                        if(password_verify($password,$data['password'])){
                             if($data['verified'] === 1){

                                
                                echo'success';

                                

                                    $_SESSION['email'] = $data['email'] ;
                                    $_SESSION['firstname'] = $data['firstname'] ;
                                    $_SESSION['lastname'] = $data['lastname'] ;
                                    $_SESSION['phone'] = $data['phone'];
                                    $_SESSION['timejoined'] = $data['timejoined'];
                                
                                        
                               
                                
                          

                                //  exit();

                             }else{

                                echo 'Account has not been activated';
                             }
                            
                        }else{
                            echo "Wrong Password";
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