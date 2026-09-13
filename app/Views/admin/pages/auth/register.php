<?php echo $this->extend('admin/layout/main') ?>

<?php echo $this->section('content'); ?>
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('admin/img/stisla-fill.svg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4><?php echo lang('Register.view.title') ?></h4></div>

              <div class="card-body">
                <?php echo $this->include('admin/layout/partials/errors') ?>
                <form method="POST" action="<?php echo base_url(route_to('admin_register')) ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name"><?php echo lang('Register.view.first_name') ?></label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="surname"><?php echo lang('Register.view.last_name') ?></label>
                      <input id="surname" type="text" class="form-control" name="surname">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email"><?php echo lang('Register.view.email') ?></label>
                    <input id="email" type="email" class="form-control" name="email">
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block"><?php echo lang('Register.view.password') ?></label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                    </div>
                    <div class="form-group col-6">
                      <label for="password_confirm" class="d-block"><?php echo lang('Register.view.password_confirmation') ?></label>
                      <input id="password_confirm" type="password" class="form-control" name="password_confirm">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree"><?php echo lang('Register.view.contract') ?></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      <?php echo lang('Register.view.register_btn') ?>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; <?php echo date('Y') ?> Beytullah Toprak
            </div>
          </div>
        </div>
      </div>
    </section>
<?php echo $this->endSection(); ?>