
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
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form class="pt-3" method="post" action="<?php echo base_url('signup/confirm')?>" >
                            <?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Warning</strong>
                                    <?php echo validation_errors(); ?>
                                    <?php echo $this->session->flashdata('failed'); ?>
                                </div>
                            <?php }?>
                            <?php if ($this->session->flashdata('success')) {
                                ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success</strong>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="re-password" name="re-password" placeholder="Confirm Password">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" id="agreeTNC" value="TRUE">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN UP" >
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="<?php echo base_url('login')?>" class="text-primary">Login</a>
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