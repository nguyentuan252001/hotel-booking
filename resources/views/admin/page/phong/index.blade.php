@extends('admin.share.master')
@section('title')
    Quản Lý Phòng Khách Sạn
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Phòng Khách Sạn
                </div>
                <div class="card-body">
                    <form id="form_create">
                        <div class="form-group">
                            <label>Mã Phòng</label>
                            <input type="text" id="ma_phong" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Giá Mặc Định</label>
                            <input type="number" id="gia_mac_dinh" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Phòng</label>
                            <textarea id="mo_ta_phong" name="mo_ta_phong" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Số Khách</label>
                            <input type="number" id="so_khach" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh</label>
                            <div class="input-group">
                                <input id="hinh_anh" class="form-control" type="text" name="filepath">
                                <span class="input-group-prepend">
                                    <a id="lfm" data-input="hinh_anh" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                            </div>
                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select id="tinh_trang" class="form-control">
                                <option value="1">Đang Mở</option>
                                <option value="0">Đang Đóng</option>
                                <option value="2">Đang Sửa Chữa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Khu Vực</label>
                            <select id="khu_vuc_id" class="form-control">
                                @foreach ($khuVuc as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->ten_khu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button id="addPhong" type="button" class="btn btn-primary">Thêm Mới Phòng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Danh Sách Phòng Khách Sạn
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="listPhong">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Mã Phòng</th>
                                <th class="text-center">Đơn Giá</th>
                                <th class="text-center">Khu Vực</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center align-middle">1</th>
                                <td class="align-middle">AAAA</td>
                                <td class="align-middle">AAAA</td>
                                <td class="align-middle">AAAA</td>
                                <td class="align-middle">AAAA</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-info mr-1 edit">Cập Nhật</button>
                                    <button class="btn btn-danger delete">Xóa Phòng</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal fade" id="xoaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Xóa Phòng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc chắn muốn xóa phòng hay không?
                                    <input type="hidden" id="idDelete" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button id="sureDelete" type="button" class="btn btn-danger" data-dismiss="modal">Chắc
                                        Chắn!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Phòng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="edit_id" class="form-control">
                                    <div class="form-group">
                                        <label>Mã Phòng</label>
                                        <input type="text" id="edit_ma_phong" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Mặc Định</label>
                                        <input type="number" id="edit_gia_mac_dinh" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Số Lượng</label>
                                        <input type="number" id="edit_so_khach" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô Tả Phòng</label>
                                        <textarea id="edit_mo_ta_phong" name="edit_mo_ta_phong" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình Ảnh</label>
                                        <div class="input-group">
                                            <input id="edit_hinh_anh" class="form-control" type="text"
                                                name="filepath">
                                            <span class="input-group-prepend">
                                                <a id="edit_lfm" data-input="edit_hinh_anh" data-preview="holder"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                        </div>
                                        <div id="edit_holder" style="margin-top:15px;max-height:100px;">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tình Trạng</label>
                                        <select id="edit_tinh_trang" class="form-control">
                                            <option value="1">Đang Mở</option>
                                            <option value="0">Đang Đóng</option>
                                            <option value="2">Đang Sửa Chữa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Khu Vực</label>
                                        <select id="edit_khu_vuc_id" class="form-control">
                                            @foreach ($khuVuc as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->ten_khu }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button id="sureUpdate" type="button" class="btn btn-danger"
                                        data-dismiss="modal">Chắc Chắn!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <input type="hidden" id="id_mo_ta" class="form-control">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Mô Tả</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card text-justify" id="view_mo_ta">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
        $('#edit_lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
    <script>
        CKEDITOR.replace('mo_ta_phong');
        CKEDITOR.replace('edit_mo_ta_phong');
    </script>
    <script>
        $(document).ready(function() {
            loadTable();

            $("#addPhong").click(function() {
                var payload = {
                    'ma_phong': $("#ma_phong").val(),
                    'gia_mac_dinh': $("#gia_mac_dinh").val(),
                    'mo_ta_phong': CKEDITOR.instances['mo_ta_phong'].getData(),
                    'tinh_trang': $("#tinh_trang").val(),
                    'hinh_anh': $("#hinh_anh").val(),
                    'khu_vuc_id': $("#khu_vuc_id").val(),
                    'so_khach': $("#so_khach").val(),
                };
                $.ajax({
                    url: '/admin/phong/create',
                    type: 'post',
                    data: payload,
                    success: function(res) {
                        if (res.status) {
                            toastr.success("Đã thêm mới phòng thành công!");
                            loadTable();
                            $('#form_create').trigger("reset");
                        }
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });

            });

            function loadTable() {
                $.ajax({
                    url: '/admin/phong/data',
                    type: 'get',
                    success: function(res) {
                        var content = '';
                        $.each(res.data, function(key, value) {
                            content += '<tr>';
                            content += '<th class="text-center align-middle">' + (key + 1) +
                                '</th>';
                            content += '<td class="align-middle text-center">' + value
                                .ma_phong + '</td>';
                            content += '<td class="align-middle text-center">' + value
                                .gia_mac_dinh + '</td>';
                            content += '<td class="align-middle text-center">' + value.ten_khu +
                                '</td>';
                            content += '<td class="align-middle text-center">' + value
                                .so_khach +
                                '</td>';
                            content += '<td class="text-center align-middle">';
                            content += '<button class="btn btn-info mx-2 edit" data-id="' +
                                value.id +
                                '" data-toggle="modal" data-target="#editModal">Cập Nhật</button>';
                            content += '<button class="btn btn-danger xoaPhong" data-xxx="' +
                                value.id +
                                '" data-toggle="modal" data-target="#xoaModal">Xóa Phòng</button>';
                            content += '<button class="btn btn-success mx-2 view" data-id="' +
                                value
                                .id +
                                '" data-toggle="modal" data-target="#viewModal"><i class="fa-solid fa-info"></i></button>';
                            content += '</td>';
                            content += '</tr>';
                        });
                        $("#listPhong tbody").html(content);
                    },
                });
            };

            $("body").on('click', '.xoaPhong', function() {
                var id = $(this).data('xxx');
                $("#idDelete").val(id);
            });

            $("#sureDelete").click(function() {
                var payload = {
                    'id': $("#idDelete").val(),
                };
                $.ajax({
                    url: '/admin/phong/destroy',
                    type: 'post',
                    data: payload,
                    success: function(res) {
                        if (res.status) {
                            toastr.success('Đã xóa phòng thành công!');
                            loadTable();
                        }
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });

            $("body").on('click', '.edit', function() {
                var id = $(this).data('id');
                var payload = {
                    'id': id,
                };
                $.ajax({
                    url: '/admin/phong/edit',
                    type: 'post',
                    data: payload,
                    success: function(res) {
                        $("#edit_id").val(res.data.id);
                        $("#edit_ma_phong").val(res.data.ma_phong);
                        $("#edit_gia_mac_dinh").val(res.data.gia_mac_dinh);
                        $("#edit_tinh_trang").val(res.data.tinh_trang);
                        $("#edit_hinh_anh").val(res.data.hinh_anh);
                        $("#edit_khu_vuc_id").val(res.data.khu_vuc_id);
                        $("#edit_so_khach").val(res.data.so_khach);
                        CKEDITOR.instances['edit_mo_ta_phong'].setData(res.data.mo_ta_phong);
                        var a = res.data.hinh_anh.split(',');
                        var html_hinh_anh = '';
                        for (i = 0; i < a.length; i++) {
                            html_hinh_anh += '<img src="' + a[i] + '" style="height: 5rem;">';
                        }
                        $("#edit_holder").html(html_hinh_anh);
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });


            $("#sureUpdate").click(function() {
                var payload = {
                    'id': $("#edit_id").val(),
                    'ma_phong': $("#edit_ma_phong").val(),
                    'gia_mac_dinh': $("#edit_gia_mac_dinh").val(),
                    'tinh_trang': $("#edit_tinh_trang").val(),
                    'mo_ta_phong': CKEDITOR.instances['edit_mo_ta_phong'].getData(),
                    'hinh_anh': $("#edit_hinh_anh").val(),
                    'khu_vuc_id': $("#edit_khu_vuc_id").val(),
                    'so_khach': $("#edit_so_khach").val(),
                };

                $.ajax({
                    url: '/admin/phong/update',
                    type: 'post',
                    data: payload,
                    success: function(res) {
                        if (res.status) {
                            toastr.success("Đã cập nhật thành công!");
                            loadTable();
                        }
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });

            $("body").on('click', '.view', function() {
                var id = $(this).data('id');
                var payload = {
                    'id': id,
                };

                $.ajax({
                    url: '/admin/phong/view-mota',
                    type: 'post',
                    data: payload,
                    success: function(res) {
                        $("#id_mo_ta").val(id);
                        $("#view_mo_ta").html(res.data.mo_ta_phong);
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });
        });
    </script>
@endsection
