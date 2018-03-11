<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 login-top-bottom">
        <div class="row">
          <div class="col-lg-5 col-md-8 col-sm-12 mx-auto">
            <div class="login-logo login-border-radius1">
              <h3 class="text-center">
                <span class="text-white"> RRHH <br>
                  Acceso al sistema
                </span>
              </h3>
            </div>
            <div class="bg-white login-content login-border-radius">
              <form action="index.html" id="login_validator" method="post" class="login_validator bv-form" novalidate="novalidate">
                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                  <div class="form-group">
                    <label for="email" class="col-form-label"> E-mail</label>
                    <div class="input-group">
                      <span class="input-group-prepend input_email">
                        <div class="input-group-text">
                          <i class="fa fa-envelope text-info"></i>
                        </div>
                      </span>
                      <input type="text" class="form-control  form-control-md" id="email" name="username" placeholder="E-mail" data-bv-field="username">
                    </div>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="username" data-bv-result="NOT_VALIDATED" style="display: none;">
                      The email address is required
                    </small>
                    <small class="help-block" data-bv-validator="regexp" data-bv-for="username" data-bv-result="NOT_VALIDATED" style="display: none;">
                      The input is not a valid email address
                    </small>
                  </div>
                  
                  <div class="form-group">
                    <label for="password" class="col-form-label">Password</label>
                    <div class="input-group">
                      <span class="input-group-prepend addon_password">
                        <div class="input-group-text">
                          <i class="fa fa-lock text-info"></i>
                        </div>
                      </span>
                      <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password" data-bv-field="password">
                    </div>
                  <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Please provide a password</small></div>
                  <div class="form-group">
                      <div class="row">
                          <div class="col-lg-12">
                              <input type="submit" value="Log In" class="btn btn-info btn-block login_button">
                          </div>
                      </div>
                  </div>
              </form>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input form-control">
                      <span class="custom-control-indicator"></span>
                      <a class="custom-control-description">Mantenme conectado</a>
                    </label>
                  </div>
                  <div class="col-6 text-right forgot_pwd">
                    <a href="forgot_password1.html" class="custom-control-description forgottxt_clr">Olvidó su clave?</a>
                  </div>
                </div>
              </div>              
              <div class="form-group">
                <label class="col-form-label">No tienes una cuenta? </label>
                <a href="register1.html" class="text-primary"><b>Regístrate</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
</body>
</html>