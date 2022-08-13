@extends('admin.share.master')
@section('title')
    Quản Lý Liên Hệ Của Khách Hàng
@endsection
@section('content')
    <div class="row" id="app">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Danh Sách Liên Hệ
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Khách</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Ip</th>
                                <th class="text-center">Device</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in listLienHe">
                                <th class="text-center">
                                    <input type="checkbox" v-model="value.check">
                                </th>
                                <td>@{{ value.name }}</td>
                                <td>@{{ value.email }}</td>
                                <td>@{{ value.ip }}</td>
                                <td>@{{ value.browser }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Gửi Email Cho Khách Hàng
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tiêu Đề Email</label>
                        <input v-model="tieu_de" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nội Dung Email</label>
                        <textarea v-model="noi_dung" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" v-on:click="sendMail()">Gửi Email</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: "#app",
            data: {
                listLienHe: [],
                tieu_de: '',
                noi_dung: '',
            },
            created() {
                this.loadTable();
            },
            methods: {
                loadTable() {
                    axios
                        .get('/admin/lien-he/data')
                        .then((res) => {
                            this.listLienHe = res.data.data;
                        });
                },
                sendMail() {
                    var payload = {
                        'list': this.listLienHe,
                        'tieu_de': this.tieu_de,
                        'noi_dung': this.noi_dung,
                    };
                    axios
                        .post('/admin/lien-he/send-mail', payload)
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
@endsection
