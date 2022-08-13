@extends('admin.share.master')
@section('title')
    Quản Lý Tài Khoản Admin
@endsection
@section('content')
    <div class="row" id="app">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Tạo mới Admin
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Họ Và Tên</label>
                            <input v-model="add.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input v-model="add.email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Mật Khẩu</label>
                            <input v-model="add.password" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nhập Lại Mật Khẩu</label>
                            <input v-model="add.re_password" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Số Điện Thoại</label>
                            <input v-model="add.so_dien_thoai" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Loại Admin</label>
                            <select v-model="add.is_master" class="form-control">
                                <option value="1">Admin Master</option>
                                <option value="0">Admin Normal</option>
                            </select>
                        </div>
                    </form>
                    <div class="form-group text-right">
                        <button v-on:click="createAdmin()" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Tài Khoản
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="listAdmin">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Họ Và Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Số Điện Thoại</th>
                                <th class="text-center">Loại Tài Khoản</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value,key) in listAdmin">
                                <th class="text-center align-middle">@{{ key + 1 }}</th>
                                <td class="align-middle">@{{ value.ho_va_ten }}</td>
                                <td class="align-middle">@{{ value.email }}</td>
                                <td class="align-middle">@{{ value.so_dien_thoai }}</td>
                                <td class="align-middle">
                                    <button v-if="value.is_master == 1" class="btn btn-primary">Admin Master</button>
                                    <button v-else class="btn btn-warning">Admin Normal</button>
                                </td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-info edit">Cập Nhật</button>
                                    <button class="btn btn-danger delete">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                listAdmin: [],
                add: {},
                edit: {},
                remove: {},
            },
            created() {
                this.loadData();
            },
            methods: {
                loadData() {
                    axios
                        .get('/admin/tai-khoan/data')
                        .then((res) => {
                            this.listAdmin = res.data.data;
                            console.log(this.listAdmin)
                        })
                },
                createAdmin() {
                    axios
                        .post('/admin/tai-khoan/create', this.add)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Thêm Mới thành công!!!");
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
    </script>
@endsection
