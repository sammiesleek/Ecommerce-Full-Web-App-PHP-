<?php 
    include("../config/session.php");


if(!empty($_POST['cat_title']) && !empty($_POST['parent-category'])){
    $cat_name= mysqli_real_escape_string($conn, $_POST['cat_title']);
    $cat_parent= mysqli_real_escape_string($conn, $_POST['parent-category']);
    if(strlen($_POST['cat_title'])< 3){
        echo 'Category name can not be less than 5';
    }else{
        
        if (!preg_match('~[0-9]+~',  $cat_name)) {


            $query="SELECT * FROM sub_categories WHERE cat_title = ? LIMIT 1";
            $stmt=$conn->prepare($query);
            $stmt->bind_param("s",$cat_name);

            if($stmt->execute()){
                $result = $stmt->get_result();
                $count = $result->num_rows;

                if($count < 1 ){    
                    $cat_id = $cat_name .  time();
                    $query="INSERT INTO sub_categories (cat_title,cat_id,parent_cat) VALUE (?,?,?)";
                    $stmt=$conn->prepare($query);
                    $stmt->bind_param('sss',$cat_name,$cat_id,$cat_parent);
                    if($stmt->execute()){
                        echo 'success';
                    }


                    

                }else{
                    echo "Category already exist";
                }
            }


           
        }else{
             echo 'Name cannot contain numbers';
        }
        
    }
}else{
    echo 'Name can not be empty';
}




?>