<?php

include("../config/session.php");


if(!empty($_POST['code']) && !empty($_POST['userId']) && !empty($_POST['password'])){

    $password =mysqli_real_escape_string($conn, $_POST['password']);
    $code =mysqli_real_escape_string($conn, $_POST['code']);
    $userId =mysqli_real_escape_string($conn, $_POST['userId']);
    $hashpass=password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE  user_accounts SET password=?  WHERE verification_code =? AND userId =?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param('sss',$hashpass,$code,$userId);
    if($stmt->execute()){
        echo 'success';
    }else{
        echo ' error updating password';
    }


}else{
    echo 'error, invalid user';
}


?>