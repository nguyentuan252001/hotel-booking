<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    @toastr_css
</head>

<body class="hold-transition login-page">
    <div class="login-box" id="app">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/admin/index2.html" class="h1"><b>Customer</b>Register</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register to start your session</p>
                <div class="input-group mb-3">
                    <input v-model="customer.email" type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input v-model="customer.phone" type="tel" class="form-control" placeholder="Phone Number">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input v-model="customer.password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input v-model="customer.re_password" type="password" class="form-control"
                        placeholder="Re-Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button v-on:click="register()" type="button" class="btn btn-primary btn-block">Sign
                            Up</button>
                    </div>
                    <!-- /.col -->
                </div>

                <p class="mb-1">
                    <a href="/forgot-password">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="/login" class="text-center">Login your Account</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    @jquery
    @toastr_js
    @toastr_render
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/dist/js/adminlte.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                customer: {},
            },
            methods: {
                register() {
                    axios
                        .post('/register', this.customer)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
            },
        });
    </script>
</body>

</html>
