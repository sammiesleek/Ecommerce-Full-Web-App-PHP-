<?php

include("../../config/session.php");


if (isset($_POST['itdata'])) {
    $id = $_POST['itdata'];
    

    echo $id;
    $query = "DELETE FROM categories WHERE cat_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
}






?>