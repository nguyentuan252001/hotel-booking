@extends('admin.share.master')
@section('title')
    Vue JS
@endsection
@section('content')
    <div id="app" class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Khu Vực
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Mã Khu Vực</label>
                            <input v-model="add.ma_khu" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tên Khu Vực</label>
                            <input v-model="add.ten_khu" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Khu Vực</label>
                            <textarea v-model="add.mo_ta" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select v-model="add.tinh_trang" class="form-control">
                                <option value="1">Đang Mở</option>
                                <option value="0">Đang Đóng</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button v-on:click="themMoi()" type="button" class="btn btn-primary">Thêm Mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Test Dữ Liệu
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="listData">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Mã Khu</th>
                                <th class="text-center">Tên Khu</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in listPhong">
                                <th class="align-middle">@{{ key + 1 }}</th>
                                <td class="align-middle">@{{ value.ma_khu }}</td>
                                <td class="align-middle">@{{ value.ten_khu }}</td>
                                <td class="align-middle text-center">
                                    <button v-on:click="change = value, changeStatus()" v-if="value.tinh_trang == 0"
                                        class="btn btn-danger">Tạm
                                        Tắt</button>
                                    <button v-on:click="change = value, changeStatus()" v-else class="btn btn-warning">Hiển
                                        Thị</button>
                                </td>
                                <td class="align-middle text-center">
                                    <button v-on:click="edit = value" class="btn btn-info" data-toggle="modal"
                                        data-target="#editModal">Cập
                                        Nhật</button>
                                    <button v-on:click="remove = value" class="btn btn-danger" data-toggle="modal"
                                        data-target="#xoaModal">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- edit modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Cập Nhật</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Mã Khu Vực</label>
                            <input v-model="edit.ma_khu" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tên Khu Vực</label>
                            <input v-model="edit.ten_khu" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Khu Vực</label>
                            <textarea v-model="edit.mo_ta" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select v-model="edit.tinh_trang" class="form-control">
                                <option value="1">Đang Mở</option>
                                <option value="0">Đang Đóng</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="capNhat()" type="button" data-dismiss="modal" class="btn btn-primary">Cập
                            nhật</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- delete modal --}}
        <div class="modal fade" id="xoaModal" tabindex="-1" role="dialog" aria-labelledby="xoaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="xoaModalLabel">Xóa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn Có Muốn Xóa Khu Vực Này Không
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="xoa()" type="button" data-dismiss="modal"
                            class="btn btn-primary">Xóa</button>
                    </div>
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
                listPhong: [],
                add: {},
                edit: {},
                remove: {},
                change: {},
            },
            created() {
                this.loadData();
            },
            methods: {
                loadData() {
                    axios
                        .get('/admin/khu-vuc/data')
                        .then((res) => {
                            this.listPhong = res.data.data;
                        });
                },
                themMoi() {
                    axios
                        .post('/admin/khu-vuc/index', this.add)
                        .then((res) => {
                            toastr.success("Đã thêm mới thành công!!!")
                            this.loadData();
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                capNhat() {
                    axios
                        .post('/admin/khu-vuc/update', this.edit)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Update thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            console.log(res)
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });

                },
                changeStatus() {
                    axios
                        .post('/admin/khu-vuc/changeStatus', this.change)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Thay đổi thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            console.log(res)
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                xoa() {
                    axios
                        .post('/admin/khu-vuc/delete', this.remove)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Xóa thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                }

            }
        });
    </script>
@endsection
