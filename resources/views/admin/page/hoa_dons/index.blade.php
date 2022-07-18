@extends('admin.share.master')
@section('title')
    Quản Lý Hóa Đơn
@endsection
@section('content')
    <div class="row" id="app">
        <div class="col-md-6">
            <div class="card-body">
                <table class="table table-bordered" id="listHoaDon">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Ngày Tạo</th>
                            <th class="text-center">Số Phòng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(value,key) in listHoaDon">
                            <th class="align-middle text-center">@{{ key + 1 }}</th>
                            <td class="align-middle text-center">@{{ formatDate(value.created_at) }}</td>
                            <td class="align-middle text-center">@{{ value.so_phong_dat }}</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-success">Phòng</button>
                                <button v-on:click="edit = value" class="btn btn-info" data-toggle="modal"
                                    data-target="#editModal">Cập
                                    Nhật</button>
                                <button v-on:click="dele = value" class="btn btn-danger" data-toggle="modal"
                                    data-target="#xoaModal">Xóa</button>
                                <button class="btn btn-warning">Xem</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
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
                            <label>Name</label>
                            <input v-model="edit.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input v-model="edit.email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ngày Đến</label>
                            <input v-model="edit.ngay_bat_dau" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ngày Đi</label>
                            <input v-model="edit.ngay_ket_thuc" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Loại Phòng</label>
                            <select v-model="edit.loai_phong_dat" class="form-control">
                                @foreach ($loaiPhong as $value)
                                    <option value="{{ $value->id }}"> {{ $value->ma_phong }}</option>
                                @endforeach
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
                        Bạn Có Muốn Xóa Hóa Đơn Này Không
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="xoa()" type="button" data-dismiss="modal" class="btn btn-primary">Xóa</button>
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
                listHoaDon: [],
                add: {},
                edit: {},
                dele: {},
            },
            created() {
                this.loadHoaDon();
            },
            methods: {
                loadHoaDon() {
                    axios
                        .get('/admin/hoa-don/data')
                        .then((res) => {
                            this.listHoaDon = res.data.data;
                            console.log(res.data.data);
                        });
                },
                formatDate(date) {
                    return moment(date).format('MM/DD/YYYY');
                },
                capNhat() {
                    axios
                        .post('/admin/hoa-don/update', this.edit)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Update thành công");
                                this.loadHoaDon();
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
                        .post('/admin/hoa-don/delete', this.dele)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Xóa thành công");
                                this.loadHoaDon();
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
