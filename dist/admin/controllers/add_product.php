<?php
    include("../../config/session.php");


    // // print_r($_POST);
    // print_r($_FILES);
    // print_r(count($_FILES));
$time=time();

    $proname = mysqli_real_escape_string($conn, $_POST['proname']);
    $procategory = mysqli_real_escape_string($conn, $_POST['procategory']);
    $prosubcategory = mysqli_real_escape_string($conn, $_POST['prosubcategory']);
    $proslug = mysqli_real_escape_string($conn, $_POST['proslug']);
    $prodescription = mysqli_real_escape_string($conn, $_POST['prodescription']);
    $proprice = mysqli_real_escape_string($conn, $_POST['proprice']);
    $prodetails = mysqli_real_escape_string($conn, $_POST['prodetails']);
    $proquantity = mysqli_real_escape_string($conn, $_POST['proquantity']);
    $pro_id =  preg_replace('/\s+/', '',  $proname.$time.rand(1000,20000).rand(200,$time));
    $sizes = '';
    

    // getting the sizes 
    foreach ($_POST as $i => $file){
        $file_explode = explode('.',$file);
        $size_val = end($file_explode);
        if($size_val == 'prosize'){
            // array_push($sizes, explode('.',$file, 2)[0]);
            $sizes .= explode('.',$file, 2)[0].',';
            rtrim($sizes,",");
        }   
    }

    echo($sizes);

    // getting colors 
    $colors='';
    
    foreach ($_POST as $i => $file) {
        $file_explode = explode('.',$file);
        $size_val = end($file_explode);
        if($size_val == 'procolor'){
            // array_push($sizes, explode('.',$file, 2)[0]);
            $colors .= explode('.',$file, 2)[0].',';
            
        }   
    }
    echo($colors);
    
   




    if($proname != ''){
        if(isset($_FILES['mainimg']) && isset($_FILES['mainalt'])){

            $mainimg = $_FILES['mainimg'];
            $mainimg_name = $mainimg['name'];
            $mainimg_tmp = $mainimg['tmp_name'];
            $mainimg_newname = rand(1000,20000) . $time.$mainimg_name ;

            $mainalt = $_FILES['mainalt'];            
            $mainalt_name = $mainalt['name'];
            $mainalt_tmp = $mainalt['tmp_name'];
            $mainalt_newname = rand(1000,20000) . $time.$mainalt_name ;
        }
        if(isset($_FILES['thumb0'])){

            $thumb0 = $_FILES['thumb0'];
            $thumb0_name = $thumb0['name'];
            $thumb0_tmp = $thumb0['tmp_name'];
            $thumb0img_newname = rand(1000,20000) . $time.$thumb0_name ;
        }else{
            $thumb0img_newname ='';

        }
        if(isset($_FILES['thumb1'])){

            $thumb1 = $_FILES['thumb1'];
            $thumb1_name = $thumb1['name'];
            $thumb1_tmp = $thumb1['tmp_name'];
            $thumb1img_newname  =rand(1000,20000)  . $time. $thumb1_name;
        }else{
            $thumb1img_newname="";
        }
        if(isset($_FILES['thumb2'])){

            $thumb2 = $_FILES['thumb2'];
            $thumb2_name = $thumb2['name'];
            $thumb2_tmp = $thumb2['tmp_name'];
            $thumb2img_newname  =rand(1000,20000) . $time. $thumb2_name ;
        }else{
            $thumb2img_newname ='';
        }
        if(isset($_FILES['thumb3'])){

            $thumb3 = $_FILES['thumb3'];
            $thumb3_name = $thumb3['name'];
            $thumb3_tmp = $thumb3['tmp_name'];
            $thumb3img_newname  =rand(1000,20000) . $time. $thumb3_name ;
        }else{
            $thumb3img_newname="";
        }
        if(isset($_FILES['thumb4'])){

            $thumb4 = $_FILES['thumb4'];
            $thumb4_name = $thumb4['name'];
            $thumb4_tmp = $thumb4['tmp_name'];
            $thumb4img_newname  =rand(1000,20000). $time. $thumb4_name ;
        }else{
            $thumb4img_newname = "";
        }
        if(isset($_FILES['thumb5'])){

            $thumb5 = $_FILES['thumb5'];
            $thumb5_name = $thumb5['name'];
            $thumb5_tmp = $thumb5['tmp_name'];
            $thumb5img_newname  = rand(1000,20000). $time.$thumb5_name ;
        }else{
            $thumb5img_newname ="";
        }
       



        rtrim($sizes,",");
        

        $query = "INSERT INTO products (product_id,product_name,main_img,altimg,thumb1,thumb2,thumb3,thumb4,thumb5,thumb6,current_price,product_desc,product_quantity,product_features,prosizes,parent_category,product_category) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssssssisissss", $pro_id,$proname,$mainimg_newname, $mainalt_newname,$thumb0img_newname,$thumb1img_newname,$thumb2img_newname,$thumb3img_newname,$thumb4img_newname,$thumb5img_newname,$proprice,$prodescription,$proquantity,$prodetails,$sizes,$procategory,$prosubcategory);
        if($stmt->execute()){
                          move_uploaded_file($mainimg_tmp, "../product_images/".$mainimg_newname);
                          move_uploaded_file($mainalt_tmp, "../product_images/".$mainalt_newname);

                if(isset($_FILES['thumb0'])){
                      move_uploaded_file($thumb0_tmp, "../product_images/".$thumb0img_newname);
                }
                if(isset($_FILES['thumb1'])){
                    move_uploaded_file($thumb1_tmp, "../product_images/".$thumb1img_newname);

                }
                if(isset($_FILES['thumb2'])){
                    move_uploaded_file($thumb2_tmp, "../product_images/".$thumb2img_newname);
                }
                if(isset($_FILES['thumb3'])){
                     move_uploaded_file($thumb3_tmp, "../product_images/".$thumb3img_newname);

                }
                if(isset($_FILES['thumb4'])){
                    
                move_uploaded_file($thumb4_tmp, "../product_images/".$thumb4img_newname);

                }
                if(isset($_FILES['thumb5'])){
                    
                move_uploaded_file($thumb5_tmp, "../product_images/".$thumb5img_newname);
                }
              
                
                // echo("product added successfully");
               

        }else{
            echo("error adding product");
        }








 


    }






?>