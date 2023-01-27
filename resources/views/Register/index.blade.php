<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('Resource/Login/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('Resource/Login/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('Resource/Login/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('Resource/Login/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('Resource/Login/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('Resource/Login/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('Resource/Login/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('Resource/Login/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('Resource/Login/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{Route('welcome')}}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">                    
                    <img  width="35" src="{{asset('logo.svg')}}" alt="">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Stream</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">La aventura comienza aquí 🚀</h4>
              <p class="mb-4">¡Haga que adqurir cuentas de streamer sea fácil y divertida!</p>

              <form id="formAuthentication" class="mb-3" action="{{Route('registrar')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">NOMBRE</label>
                  <input
                  required
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter your username"
                    value = "{{old('name')}}"
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">APELLIDO</label>
                  <input required type="text" class="form-control"  name="last_name" placeholder="Enter your last name" value = "{{old('last_name')}}" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Celular</label>
                  <input required type="text" class="form-control"  name="phone" placeholder="Enter your phone" value = "{{old('phone')}}" />
                </div>
                <div class="mb-3">
                  <label  class="form-label">CORREO ELECTRÓNICO</label>
                  <input required type="text" class="form-control"  name="email" placeholder="Enter your email" value = "{{old('email')}}"/>
                  @error('email')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label required class="form-label" for="password">CONTRASEÑA</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      value = "{{old('password')}}"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <button class="btn btn-primary d-grid w-100">Regístrate</button>
              </form>

              <p class="text-center">
                <span>¿Ya tienes una cuenta? </span>
                <a href="{{Route('login')}}">
                  <span>Iniciar sesión en su lugar</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('Resource/Login/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('Resource/Login/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('Resource/Login/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('Resource/Login/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('Resource/Login/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{asset('Resource/Login/assets/js/main.js')}}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>