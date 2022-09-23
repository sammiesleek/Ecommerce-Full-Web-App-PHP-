<?php
include("../../config/session.php");


$output = "";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM sub_categories WHERE cat_title = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $id);
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        while ($data = $result->fetch_assoc()) {
            $title = $data['cat_title'];
            $parent_cat = $data['parent_cat'];
            if(isset($_POST['elementId'])){

                $output .='
                
                            <li>
                                 <a href="shop.php">'.$parent_cat.'</a>
                              </li>
                
                ';
            }else{

                $output .= '
                          <span class="ec-sub-cat-tag">'.$parent_cat.'</span>
                
                ';
            }
        }
    }
    echo $output;
}



?>