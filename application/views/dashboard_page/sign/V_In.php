<?php
$this->load->view('dashboard_page/parts/V_Header');
?>
<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="<?php echo base_url()?>assets/dashboard_page/images/logo.svg" alt="logo">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3" method="post" action="<?php echo base_url('login/auth')?>">
                            <?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Warning</strong>
                                    <?php echo validation_errors(); ?>
                                    <?php echo $this->session->flashdata('failed'); ?>
                                </div>
                                <script>
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'Something went wrong!'
                                    })
                                </script>
                            <?php }?>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                            <div class="mt-3">
                                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="Log In">
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
<!--                                <div class="form-check">-->
<!--                                    <label class="form-check-label text-muted">-->
<!--                                        <input type="checkbox" class="form-check-input">-->
<!--                                        Keep me signed in-->
<!--                                    </label>-->
<!--                                </div>-->
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
<!--                            <div class="mb-2">-->
<!--                                <button type="button" class="btn btn-block btn-facebook auth-form-btn">-->
<!--                                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook-->
<!--                                </button>-->
<!--                            </div>-->
                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="<?php echo base_url('signup')?>" class="text-primary">Create</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url()?>assets/dashboard_page/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?php echo base_url()?>assets/dashboard_page/js/off-canvas.js"></script>
<script src="<?php echo base_url()?>assets/dashboard_page/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url()?>assets/dashboard_page/js/template.js"></script>
<!-- endinject -->
</body>
</html>