<?php

include("../../config/session.php");

$dataresult= "";

$query = "SELECT * FROM sub_categories";
$stmt=$conn->prepare($query);
if($stmt->execute()){
    $result= $stmt->get_result();


            while($data = $result->fetch_assoc()){
     
                    $cat_name = $data['cat_title'];
                    $cat_id = $data['cat_id'];



                $dataresult .= '
                
        <tr id="'.$cat_name.'" class="sub_container">
            <td><img class="cat-thumb" src="assets/img/category/clothes.png"
                    alt="Product Image" /></td>
            <td>'.$cat_name.'</td>
            <input id="cat_name_val" value="'.$cat_name.'"  hidden>
            <td>
                <span  class="ec-sub-cat-list '.$cat_name.'">
                    
                </span>
            </td>
            <td>28</td>
            <td>2161</td>
                <td> 
                <a onclick=delete_catt("'.$cat_id.'") href="javascript:void(0)">
                    <i class="mdi mdi-delete"></i>
                </a> 
            </td>
            
        </tr>
                
                
                
                ';

                }

                echo $dataresult;

}


    




?>