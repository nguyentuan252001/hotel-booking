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
                            <th class="text-center">Thời gian</th>
                            <th class="text-center">Số Phòng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(value,key) in listHoaDon">
                            <th class="align-middle text-center">@{{ key + 1 }}</th>
                            <td class="align-middle text-center">@{{ (value.ngay_bat_dau) + " - " + (value.ngay_ket_thuc) }}</td>
                            <td class="align-middle text-center">@{{ value.so_phong_dat }}</td>
                            <td class="align-middle text-center">
                                <template v-if="value.xep_phong == 0">
                                    <button class="btn btn-success" v-on:click="getListPhong(value)">Chưa
                                        Xếp</button>
                                </template>
                                <template v-else>
                                    <button class="btn btn-primary">Đã Xếp</button>
                                </template>
                                <button v-on:click="edit = value" class="btn btn-info" data-toggle="modal"
                                    data-target="#editModal">Cập
                                    Nhật</button>
                                <button v-on:click="dele = value" class="btn btn-warning" data-toggle="modal"
                                    data-target="#xoaModal">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <table class="table table-bordered" id="listHoaDon">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên Phòng</th>
                            <template v-for="(value,key) in listDate">
                                <th class="text-center">
                                    @{{ value }}
                                </th>
                            </template>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(value,key) in listPhong">
                            <td class="align-middle text-center">
                                @{{ key + 1 }}
                            </td>
                            <td class="align-middle text-center">@{{ value.ten_phong }}</td>
                            <template v-for="(v, k) in value.y.split(',')">
                                <td v-if="v == 1" class="text-center">
                                    <input type="checkbox" v-on:click="process(value.id,k,$event)">
                                    @{{ value.id }} - @{{ k }}
                                </td>
                                <td v-else class="bg-danger">

                                </td>
                            </template>
                        </tr>
                        <tr>
                            <th class="text-center" colspan="2">
                                Tổng
                            </th>
                            <th class="text-center" v-for="(v2,k2) in footList">
                                @{{ v2.sl }} - @{{ v2.phong }}
                            </th>
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
                listHoaDon: [],
                listPhong: [],
                listDate: [],
                footList: [],
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
                },
                getListPhong(playLoad) {
                    axios
                        .post('/admin/chi-tiet-phong/getListPhong', playLoad)
                        .then((res) => {
                            this.listPhong = res.data.data;
                            this.listDate = res.data.listDate.split(',');
                            this.footList = res.data.footList;
                        });
                },
                process(id, k, $event) {
                    const checked = $event.target.checked;
                    if (checked) {
                        this.footList[k].sl++;
                        this.footList[k].phong.push(id);

                    } else {
                        this.footList[k].sl--;
                        for (var i in this.footList[k].phong) {
                            if (this.footList[k].phong[i] == id) {
                                this.footList[k].phong.splice(i, 1);
                                break;
                            }
                        }
                    }
                    console.log(this.footList);
                }
            }
        });
    </script>
@endsection
