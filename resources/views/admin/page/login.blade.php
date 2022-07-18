<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="/admin/login-form/image/png" href="/admin/login-form/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/admin/login-form/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/css/util.css">
    <link rel="stylesheet" type="text/css" href="/admin/login-form/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    @toastr_css
</head>

<body>

    <div class="limiter" id="app">
        <div class="container-login100" style="background-image: url('/admin/login-form/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form action="/admin/login/" method="post" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>

                    <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="#" class="btn-google m-b-20">
                        <img src="/admin/login-form/images/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Email phải được nhập">
                        <input v-model="acc.email" class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                        <small id="message"></small>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                        <a href="#" class="txt2 bo1 m-l-5">
                            Forgot?
                        </a>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password phải được nhập">
                        <input v-model="acc.password" class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            Not a member?
                        </span>
                        <a href="#" class="txt2 bo1">
                            Sign up now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @jquery
    @toastr_js
    @toastr_render

    <script src="/admin/login-form/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/admin/login-form/vendor/animsition/js/animsition.min.js"></script>
    <script src="/admin/login-form/vendor/bootstrap/js/popper.js"></script>
    <script src="/admin/login-form/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/login-form/vendor/select2/select2.min.js"></script>
    <script src="/admin/login-form/vendor/daterangepicker/moment.min.js"></script>
    <script src="/admin/login-form/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="/admin/login-form/vendor/countdowntime/countdowntime.js"></script>
    <script src="/admin/login-form/js/main.js"></script>
    {{-- <script>
        new Vue({
            el: "#app",
            data: {
                acc: {},
            },
            methods: {
                login() {
                    axios
                        .post('/admin/login', this.acc)
                        .then((res) => {
                            if ((res.data.data).length > 0) {
                                toastr.success("Đăng Nhập thành công!!!");
                            } else {
                                toastr.error("Tên Đăng Nhập hoặc Mật Khẩu Không đúng!!!");
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
            }
        });

        $(document).ready(function() {
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }

            $("#email").blur(function() {
                if (!validateEmail($("#email").val())) {
                    $("#message").html(
                        "<span class='text-danger'>Vui lòng nhập đúng định dạng email</span>")
                } else {
                    $("#message").html("");
                }
            })
        })
    </script> --}}
</body>

</html>
