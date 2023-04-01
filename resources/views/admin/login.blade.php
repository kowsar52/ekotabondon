<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/Ekotabondhon/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 16:41:50 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Login | Ekotabondhon - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('/')}}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        {{-- jquery   --}}
        <script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>

    </head>
    <body class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="index.html" class="mb-5 d-block auth-logo">
                                <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                                <img src="{{asset('/')}}admin/assets/images/logo-light.png" alt="" height="22" class="logo logo-light">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Ekotabondhon.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ url('admin/post-login')}}" method="POST" id="loginForm">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter email">
                                            <span class="error email-error"></span>
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="{{ url('admin/forget-password')}}" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                            <span class="error password-error"></span>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check" name="remember">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>© <script>document.write(new Date().getFullYear())</script> Ekotabondhon. </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->

        <script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="/admin/assets/js/app.js"></script>

        <script>
            $(document).ready(function(){
                $('#loginForm').submit(function(event){
                    event.preventDefault();
                    var form = $(this);
                    var url = form.attr('action');
                    $('.error').text('')
                    $.ajax({
                        type : "POST",
                        url : url,
                        data : form.serialize(),
                        success : function(res){
                            if(res.status == true){
                                //success message show
                                //redirect
                                window.location = res.redirect;
                            }else{
                                //validation error show
                                for(var key in res.errors){
                                    console.log('key',key)
                                    $('.'+key+'-error').text(res.errors[key][0])
                                }
                            }
                        }
                    })
                })
            })
        </script>
    </body>
</html>
