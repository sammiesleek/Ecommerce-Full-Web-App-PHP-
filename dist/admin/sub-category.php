<?php require("includes/htmlheader.php");




$query = "SELECT * FROM sub_categories";
$stmt=$conn->prepare($query);
if($stmt->execute()){
    $result= $stmt->get_result();

}

    $query ="SELECT * FROM categories  ";
    $stmt =$conn->prepare($query);
    if($stmt->execute()){
        $categories=$stmt->get_result();

    }
    




?>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        <?php  require("includes/sidebar.php")  ?>

        <!-- PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            <?php require("includes/header.php")  ?>

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                        <h1>Sub Category</h1>
                        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>Sub Category
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-12">
                            <div class="ec-cat-list card card-default mb-24px">
                                <div class="card-body">
                                    <div class="ec-cat-form">
                                        <h4>Add New Sub Category</h4>

                                        <form id="add_category_form">
                                            <span id="error"
                                                style="background: #ffd6d6;margin-bottom: 40px;display:block; color:black;padding:10px 0px; width:100%"
                                                class="text-center ec-register-wrap ec-register-half">

                                            </span>

                                            <div class="form-group row">
                                                <label for="text" class="col-12 col-form-label">Name</label>
                                                <div class="col-12">
                                                    <input id="text" name="cat_title"
                                                        class="form-control here slug-title" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="parent-category" class="col-12 col-form-label">Parent
                                                    Category</label>
                                                <div class="col-12">
                                                    <select id="parent-category" name="parent-category"
                                                        class="custom-select">
                                                        <?php 
                                                        
                                                        while($data = $categories->fetch_assoc() ){

                                                            
                                                            echo '
                                                            <option value="'.$data['cat_title'].'">'.$data['cat_title'].'</option>
                                                            ';

                                                        }
                                                        
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="form-group row">
                                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                                <div class="col-12">
                                                    <input id="slug" name="cat_slug" class="form-control here set-slug"
                                                        type="text">
                                                    <small>The “slug” is the URL-friendly version of the name. It is
                                                        usually all lowercase and contains only letters, numbers, and
                                                        hyphens.</small>
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group row">
                                                <label class="col-12 col-form-label">Sort Description</label>
                                                <div class="col-12">
                                                    <textarea id="sortdescription" name="cat_description" cols="40"
                                                        rows="2" class="form-control"></textarea>
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group row">
                                                <label class="col-12 col-form-label">Full Description</label>
                                                <div class="col-12">
                                                    <textarea id="fulldescription" name="fulldescription" cols="40"
                                                        rows="4" class="form-control"></textarea>
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group row">
                                                <label class="col-12 col-form-label">Product Tags <span>( Type and
                                                        make comma to separate tags )</span></label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="group_tag"
                                                        name="group_tag" value="" placeholder="" data-role="tagsinput">
                                                </div>
                                            </div> -->

                                            <div class="row">
                                                <div class="col-12">
                                                    <button id="sub_new_cat" name="submit" type="submit"
                                                        class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="ec-cat-list card card-default">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="responsive-data-table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Thumb</th>
                                                    <th>Name</th>
                                                    <th>Parent Category</th>
                                                    <th>Product</th>
                                                    <th>Total Sell</th>
                                                    <th>Delete</th>
                                                    <!-- <th>Trending</th> -->
                                                </tr>
                                            </thead>

                                            <tbody id="subcat_body">




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            <!-- Footer -->
            <?php  require("includes/footer.php")   ?>
        </div> <!-- End Page Wrapper -->

    </div> <!-- End Wrapper -->

    <!-- Common Javascript --> <?php require("includes/htmlfooter.php") ?>
    <script src="../controller/js/add_sub_category.js"></script>


    <script>
    // load sub categories
    const load_subCategories = (() => {

        var targertelement = $("#subcat_body")

        $.ajax({
            type: 'post',
            url: 'controllers/subcat_loader.php',
            success: function(data, status) {

                console.log(data)
                targertelement.html(data)



            }


        })



    })

    load_subCategories();



    // load parent categories 

    const load_parent = (() => {

        setTimeout(


            () => {

                const target = document.querySelectorAll(".sub_container")

                // console.log(target)
                target.forEach((element) => {
                    var elementId = element.id
                    var elementtarget = element.id
                    var desti = $("." + elementtarget)

                    $.ajax({
                        type: 'post',
                        data: {
                            id: elementId
                        },
                        url: 'controllers/load_parent_cat.php',
                        success: function(data, status) {
                            desti.html(data)
                        }

                    })


                });



            }

            , 1000);
    })

    load_parent();




    // delete sub categories

    const delete_catt = ((dataId) => {


        $.ajax({
            type: "post",
            url: 'controllers/delete_parent_cat.php',
            data: {
                ids: dataId
            },
            success: function(data, status) {
                load_subCategories();
                load_parent();
            }



        })


    })



    $("#sub_new_cat").click(() => {

        setTimeout(() => {
            load_subCategories();

            setTimeout(() => {

                load_parent();

            }, 500);

        }, 500);



    })
    </script>

</body>

</html>