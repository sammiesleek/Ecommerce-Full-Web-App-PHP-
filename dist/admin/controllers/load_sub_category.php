<?php
include("../../config/session.php");


$output = "";

$type = $_POST['type'];

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM sub_categories WHERE  parent_cat = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $id);
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        while ($data = $result->fetch_assoc()) {
            $title = $data['cat_title'];
            if($type == "loadsubcat"){

                $output .='
                
                  <span class="ec-sub-cat-tag">' . $title . '</span>
                
                ';
            };
             if($type == "loadsubcatm") {
                    $output .= '
                <li>
                     <a href="shop.php">'.$title.'</a>
                  </li>k
                
                 ';
            }


            if($type == 'addproduct'){

                $output .= '
                        <option value="'.$title.'">'.$title.'</option>
                
                ';
            }
        }
    }
    echo $output;
}



?>