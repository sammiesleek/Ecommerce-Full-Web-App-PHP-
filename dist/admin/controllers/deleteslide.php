<?php



include("../../config/session.php");

// delete slider 

if(isset($_POST['idsent'])){
    $id =$_POST['idsent'];

    $query = "DELETE from home_main_Slide WHERE id =?";
    $stmt =$conn->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
}


?>