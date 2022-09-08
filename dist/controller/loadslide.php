<?php
    include("../config/session.php");

    $output = "";


    $query ="SELECT * from home_main_slide";
    $stmt=$conn->prepare($query);
    if($stmt->execute()){
       
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){

                $title =$row['title'];
                $sub_title =$row['sub_title'];
                $action =$row['action'];
                $img =$row['image'];
                $info =$row['text_add'];
                $id =$row['id'];


            $output .= '
                 <div style="background-image:url(admin/slider_images/'.$img.'); background-size:cover, background-position:ceneter" class="ec-slide-item swiper-slide d-flex ec-slide">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">'.$title.'</h1>
                                    <h2 class="ec-slide-stitle">'.$sub_title.'</h2>
                                    <p>'.$info.'</p>
                                    <a href="#" class="btn btn-lg btn-secondary">'.$action.'</a>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>

            ';
        }


    }else{
        echo 'error';
    }

    echo $output;


?>