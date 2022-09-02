<?php require("includes/htmlheader.php")  ?>

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
                    <div class="breadcrumb-wrapper breadcrumb-contacts">
                        <div>
                            <h1>User List</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>User
                            </p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addUser"> Add Slider
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="ec-vendor-list card card-default">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="responsive-data-table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Profile</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Total Buy</th>
                                                    <th>Status</th>
                                                    <th>Join On</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
                                                            alt="user profile" /></td>
                                                    <td>Bhavlo Malvia</td>
                                                    <td>bhavlomalvia@gmail.com</td>
                                                    <td>+91-989-325-8652</td>
                                                    <td>3061</td>
                                                    <td>ACTIVE</td>
                                                    <td>2021-10-05</td>
                                                    <td>
                                                        <div class="btn-group mb-1">
                                                            <button type="button"
                                                                class="btn btn-outline-success">Info</button>
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Info</span>
                                                            </button>

                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
                                                            alt="user profile" /></td>
                                                    <td>Jeni Dusuja</td>
                                                    <td>jenidusuja@gmail.com</td>
                                                    <td>+1-967-325-1122</td>
                                                    <td>6061</td>
                                                    <td>ACTIVE</td>
                                                    <td>2021-10-01</td>
                                                    <td>
                                                        <div class="btn-group mb-1">
                                                            <button type="button"
                                                                class="btn btn-outline-success">Info</button>
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Info</span>
                                                            </button>

                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>





                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add User Modal  -->
                    <div class="modal fade modal-add-contact" id="addUser" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header px-4">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                                    </div>

                                    <div class="modal-body px-4">
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                                Image</label>

                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" class="custom-file-input" id="coverImage"
                                                        required>
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">First name</label>
                                                    <input type="text" class="form-control" id="firstName" value="John">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Last name</label>
                                                    <input type="text" class="form-control" id="lastName" value="Deo">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label for="userName">User name</label>
                                                    <input type="text" class="form-control" id="userName"
                                                        value="johndoe">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="johnexample@gmail.com">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label for="Birthday">Birthday</label>
                                                    <input type="text" class="form-control" id="Birthday"
                                                        value="10-12-1991">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label for="event">Address</label>
                                                    <input type="text" class="form-control" id="event"
                                                        value="Address here">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer px-4">
                                        <button type="button" class="btn btn-secondary btn-pill"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            <!-- Footer -->
            <?php  require("includes/footer.php")   ?>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <?php require("includes/htmlfooter.php") ?>