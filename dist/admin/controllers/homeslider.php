<?php
include("../../config/session.php");

// delete slider 

if(isset($_POST['id'])){
    $id =$_POST['id'];

    $query = "DELETE from home_main_Slide WHERE id =?";
    $stmt =$conn->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
}


if(!empty($_POST['title']) && !empty($_POST['sub-title']) && !empty($_POST['description']) && !empty($_POST['link']) && !empty($_POST['action']) ){


    $title =mysqli_real_escape_string($conn, $_POST['title']);
    $subtitle =mysqli_real_escape_string($conn, $_POST['sub-title']);
    $description =mysqli_real_escape_string($conn, $_POST['description']);
    $link =mysqli_real_escape_string($conn, $_POST['link']);
    $action =mysqli_real_escape_string($conn, $_POST['action']);

    if(isset($_FILES['file'])){
        $image_name = $_FILES['file']['name'];
        $img_type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $img_explode = explode('.', $image_name);
        $img_extension = end($img_explode);
        $allowed_extensiond =['jpg','png','jpeg'];
        if(in_array($img_extension,$allowed_extensiond)){
            $time= time();
            $image_new_name = $time.$image_name;

            $query = "INSERT INTO home_main_slide (title,sub_title,text_add,action,image,link ) VALUES (?,?,?,?,?,?) ";
            $stmt=$conn->prepare($query);
            $stmt->bind_param('ssssss',$title,$subtitle, $description, $action, $image_new_name,$link );
            if($stmt->execute()){
               
                move_uploaded_file($tmp_name, "../slider_images/".$image_new_name);
            }else{
                echo "error uploading file.";
            }



        }







    }else{
        echo 'img not found';
    }
   



}else{
    echo 'empty';
}














?>