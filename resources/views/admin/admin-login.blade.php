<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Karciz : Ticketing Admin Dashboard Bootstrap 5 Template">
	<meta property="og:title" content="Karciz : Ticketing Admin Dashboard Bootstrap 5 Template">
	<meta property="og:description" content="Karciz : Ticketing Admin Dashboard Bootstrap 5 Template">
	<meta property="og:image" content="https://Karciz.dexignzone.com/xhtml/social-image.png">
    <title>KARCIZ - Ticketing Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('')}}admin/images/favicon.png">
	<link href="{{asset('')}}admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{asset('')}}admin/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html">
											<img src="{{asset('')}}admin/images/logo.png" alt="">
											<img src="{{asset('')}}admin/images/logo-text-white.png" alt="">
										</a>
									</div>
                                    <h4 class="text-center mb-4">Admin</h4>
                                    <form  method="POST" action="{{ route('admin.LoginAction') }}">
                                      {{ csrf_field() }}

                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type=""  name="username" class="form-control" value="" placeholder=" Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div> -->
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('')}}admin/vendor/global/global.min.js"></script>
	<script src="{{asset('')}}admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('')}}admin/js/custom.min.js"></script>
    <script src="{{asset('')}}admin/js/deznav-init.js"></script>
	<script src="{{asset('')}}admin/js/demo.js"></script>
    <script src="{{asset('')}}admin/js/styleSwitcher.js"></script>

</body>

</html>