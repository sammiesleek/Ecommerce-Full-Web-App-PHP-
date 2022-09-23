<?php

include("../../config/session.php");


if (isset($_POST['ids'])) {
    $id = $_POST['ids'];
    

    echo $id;
    $query = "DELETE FROM sub_categories WHERE cat_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
}






?>