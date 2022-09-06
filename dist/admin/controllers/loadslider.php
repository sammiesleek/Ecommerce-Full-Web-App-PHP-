<?php
    include("../../config/session.php");

    $output = "";


    $query ="SELECT * from home_main_slide";
    $stmt=$conn->prepare($query);
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc() ){

                $title =$row['title'];
                $sub_title =$row['sub_title'];
                $action =$row['action'];
                $img =$row['image'];
                $title =$row['title'];
                $id =$row['id'];


            $output .= '
            <tr>
                <td><img class="vendor-thumb" src="slider_images/'.$img.'"
                        alt="user profile" /></td>
                <td></td>

                <td>'.$title.'</td>
                <td>'.$sub_title.'</td>
                <td>3061</td>
                <td>
                    <div class="btn-group mb-1">
                        <button type="button" class="btn  pt-0">Change</button>
                        <button type="button"
                            class="btn  dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static">
                            <!-- <span class="sr-only">Info</span> -->
                        </button>

            
                        <div class="dropdown-menu">
                            <button onclick="deleteslide('.$id.')" id="action" class="dropdown-item">Delete</button>
                        </div>
                    </div>
                </td>
            </tr>

            ';
        }
        echo $output;


    }



?>