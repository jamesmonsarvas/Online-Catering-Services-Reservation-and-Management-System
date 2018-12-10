
<div id="admin-login">

<a id="login-logo" href="<?php echo site_url('/'); ?>">
  <img src="<?php echo site_url('assets/admin/img/LOGO.png') ?>" alt="">
</a>

<div class="container">

  <div class="row">
    <div class="offset-3"></div>
    <div class="col-md-6">
      <div id="login-form">
        <h3>Login</h3>
        <?php echo $this->session->flashdata('message');?>
        <?php echo form_open('',array('class'=>'form-horizontal'));?>
          <div class="form-group">
            <?php echo form_label('Username','identity');?>
            <?php echo form_error('identity');?>
            <?php echo form_input('identity','','class="form-control"');?>
          </div>
          <div class="form-group">
            <?php echo form_label('Password','password');?>
            <?php echo form_error('password');?>
            <?php echo form_password('password','','class="form-control"');?>
          </div>
          <div class="form-group">
            <label>
              <?php echo form_checkbox('remember','1',FALSE);?> Remember me
            </label>
          </div>
          <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
        <?php echo form_close();?>
      </div>
    </div>
    <div class="offset-3"></div>
  </div>

</div>

</div><!-- #admin-login -->