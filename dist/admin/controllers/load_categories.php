<?php

include("../../config/session.php");

$type =$_POST['type'];

$query = "SELECT * FROM categories";
$stmt = $conn->prepare($query);
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $output = "";
    while ($data = $result->fetch_assoc()) {

        $cat_name = $data['cat_title'];
        $cat_id = $data['cat_id'];

            if($type == 'addproduct'){

                 $output .= '
            
              <optgroup class="option_body" id="'.$cat_name.'" label="'.$cat_name.'">
                </optgroup>           
            ';

            }

            if($type == 'categories'){

                $output .= '
                    
                    <tr class="cat_body" id="'.$cat_name.'">
                            <input id="bodycont'.$cat_name.'" class="cat_name_val" value="'.$cat_name.'"  hidden >
                            <td><img class="cat-thumb" src="assets/img/category/clothes.png"
                                    alt="Product Image" /></td>
                            <td>' . $cat_name . '</td>
                            <td>
                                <span class="ec-sub-cat-list bodycont ' . $cat_name. '" >
                                
                                </span>
                            </td>
                            <td>28</td>
                            <td>2161</td>
                            <td> <a onclick=delete_cat("'.$cat_id.'") href="javascript:void(0)"  class="deletecat" id="' . $cat_id . '"> <i  class="mdi mdi-delete"></i> </a> </td>
        
                        </tr>
                    
                    
                    
                    ';
            }

    }
    echo $output;
}