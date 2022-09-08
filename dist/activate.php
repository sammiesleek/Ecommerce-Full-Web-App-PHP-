<?php


require('config/session.php');



if(isset($_GET['code']) && isset($_GET['user'])){
    $code =$_GET['code'];
    $customerId=$_GET['user'];
    

    $query = "SELECT * FROM user_accounts WHERE userId =? AND verification_code =? LIMIT 1";
    $stmt=$conn->prepare($query);
    $stmt->bind_param('ss', $customerId,$code);
    if($stmt->execute()){
        $result = $stmt->get_result();
        // print_r($result) ;
        $data= $result->fetch_assoc();
        $currentStatus =$data['verified'];
        $count = $result->num_rows;
        $verified =1;

        if($count === 1){

            if($currentStatus === 0){
                $query = "UPDATE user_accounts SET verified = ?  WHERE userId =? AND verification_code =?  ";
                $stmt=$conn->prepare($query);
                $stmt->bind_param('iss',$verified,$customerId,$code );
                if($stmt->execute()){
                    echo "Email verified succesfully";
                }
            }else{
                echo "Email already verified";
            }

          

            
        }
        else{
            echo 'error activating your email';
        }
    }




}




?>