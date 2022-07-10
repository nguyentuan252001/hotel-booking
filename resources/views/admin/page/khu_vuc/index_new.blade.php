@extends('admin.share.master')
@section('title')
    Quản Lý Khu Vực Khách Sạn
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Thêm Mới Khu Vực
            </div>
            <div class="card-body">
                @if($errors->any())
                    @foreach ($errors->all() as $key => $value)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error {{ $key + 1 }}:</strong> {{ $value }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
                <form>
                    <div class="form-group">
                        <label>Mã Khu Vực</label>
                        <input type="text" id="ma_khu" class="form-control">
                        <small id="mesage_ma_khu"></small>
                        {{-- <small class="text-danger">Mã danh mục này đã tồn tại!</small>
                        <small class="text-primary">Mã danh mục này có thể sử dụng!</small> --}}
                    </div>
                    <div class="form-group">
                        <label>Tên Khu Vực</label>
                        <input type="text" id="ten_khu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả Khu Vực</label>
                        <textarea id="mo_ta" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select id="tinh_trang" class="form-control">
                            <option value="1">Đang Mở</option>
                            <option value="0">Đang Đóng</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <button id="addKhuVuc" type="button" class="btn btn-primary" disabled>Thêm Mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Danh Sách Các Khu Vực
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="listDanhMuc">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Mã Khu</th>
                            <th class="text-center">Tên Khu</th>
                            <th class="text-center">Mô Tả</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Xóa Khu Vực</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc muốn xóa khu vực <b class="text-danger" id="ten_khu_delete">XXX</b> này không?
                            <input type="hidden" id="id_khu_delete" class="form-control">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button id="deleteKhuVuc" type="button" class="btn btn-danger" data-dismiss="modal">Xóa</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Khu Vực</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="edit_id" class="form-control">
                                <div class="form-group">
                                    <label>Mã Khu Vực</label>
                                    <input type="text" id="edit_ma_khu" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tên Khu Vực</label>
                                    <input type="text" id="edit_ten_khu" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mô Tả Khu Vực</label>
                                    <textarea id="edit_mo_ta" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tình Trạng</label>
                                    <select id="edit_tinh_trang" class="form-control">
                                        <option value="1">Đang Mở</option>
                                        <option value="0">Đang Đóng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button id="updateKhuVuc" type="button" class="btn btn-primary" data-dismiss="modal">Cập Nhật</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </table>
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
    <script>
        $(document).ready(function(){
            $("#ma_khu").blur(function(){
                // $("#mesage_ma_khu").html("<span class='text-danger'>Mã khu vực này đã tồn tại!</span>");
                // $('#addKhuVuc').prop("disabled", false);
                // Khi bấm blur thầy sẽ post nội dung mã khu lên trên server
                const payload = {
                    'ma_khu'    :   $("#ma_khu").val(),
                };
                $.ajax({
                    url     :   '/admin/khu-vuc/check-ma-khu',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        if(res.status) {
                            $("#mesage_ma_khu").html("<span class='text-primary'>Mã khu vực này được sử dụng!</span>");
                            $('#addKhuVuc').prop("disabled", false);
                        } else {
                            $("#mesage_ma_khu").html("<span class='text-danger'>Mã khu vực này đã tồn tại!</span>");
                            $('#addKhuVuc').prop("disabled", true);
                        }
                    },
                    error   :   function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });

            getData();
            function getData() {
                $.ajax({
                    url     :   '/admin/khu-vuc/data',
                    type    :   'get',
                    success :   function(res) {
                        var a = res.data;
                        var content = '';
                        $.each(a, function(k, v) {
                            content += '<tr>';
                            content += '<th class="text-center align-middle">'+ (k + 1) +'</th>';
                            content += '<td class="align-middle">' + v.ma_khu +'</td>';
                            content += ' <td class="align-middle">' + v.ten_khu +'</td>';
                            content += ' <td class="align-middle">' + v.mo_ta +'</td>';
                            content += ' <td class="text-center align-middle">';
                            if(v.tinh_trang == 1) {
                                content += '<button class="btn btn-primary doi-trang-thai" data-id="'+ v.id +'">Đang Mở</button>';
                            } else {
                                content += '<button class="btn btn-danger doi-trang-thai" data-id="'+ v.id +'">Đang Đóng</button>';
                            }
                            content += '</td>';
                            content += '<td class="text-center align-middle">';
                            content += '<button class="btn btn-info mr-1 edit" data-id="'+ v.id +'" data-toggle="modal" data-target="#editModal">Edit</button>';
                            content += '<button class="btn btn-danger delete" data-id="'+ v.id +'" data-tenkhu="'+ v.ten_khu +'" data-toggle="modal" data-target="#deleteModal">Delete</button>';
                            content += '</td>';
                            content += '</tr>';
                        });
                        $("#listDanhMuc tbody").html(content);
                    },
                });
            }

            $("#addKhuVuc").click(function() {
                var ma_khu_get      = $("#ma_khu").val();
                var ten_khu_get     = $("#ten_khu").val();
                var mo_ta_get       = $("#mo_ta").val();
                var tinh_trang_get  = $("#tinh_trang").val();

                var payload    =  {
                    'ma_khu'        : ma_khu_get,
                    'ten_khu'       : ten_khu_get,
                    'mo_ta'         : mo_ta_get,
                    'tinh_trang'    : tinh_trang_get,
                };

                $.ajax({
                    url     :   '/admin/khu-vuc/index',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        if(res.status == true) {
                            toastr.success("Đã thêm mới khu vực thành công!");
                            getData();
                        }
                    },
                    error   :   function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });

            $('body').on('click', '.doi-trang-thai', function() {
                var id_khu = $(this).data('id');
                var payload    =  {
                    'id'        : id_khu,
                };
                $.ajax({
                    url     :   '/admin/khu-vuc/changeStatus',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        toastr.success('Đã đổi trạng thái thành công!');
                        getData();
                    },
                    error   :   function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });

            $('body').on('click', '.delete', function() {
                var id_khu  = $(this).data('id');
                var ten_khu = $(this).data('tenkhu');
                console.log("Cần xóa id: " + id_khu + " và tên: " + ten_khu);
                $("#ten_khu_delete").text(ten_khu);
                $("#id_khu_delete").val(id_khu);
            });

            $('body').on('click', '.edit', function() {
                var id_khu_vuc  = $(this).data('id');
                console.log("Cần edit khu vực có id là: " + id_khu_vuc);
                var payload = {
                    'id'    : id_khu_vuc,
                };
                $.ajax({
                    url     :   '/admin/khu-vuc/edit',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        console.log(res.data);
                        $("#edit_id").val(res.data.id);
                        $("#edit_ma_khu").val(res.data.ma_khu);
                        $("#edit_ten_khu").val(res.data.ten_khu);
                        $("#edit_tinh_trang").val(res.data.tinh_trang);
                        $("#edit_mo_ta").val(res.data.mo_ta);
                    },
                    error   :   function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });

            });

            $("#deleteKhuVuc").click(function() {
                var id_can_xoa = $("#id_khu_delete").val();
                var payload = {
                    'id'    :   id_can_xoa,
                };
                $.ajax({
                    url     :   '/admin/khu-vuc/delete',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        getData();
                    },
                    error   :   function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    },
                });
            });

            $("#updateKhuVuc").click(function() {
                var id_get          = $("#edit_id").val();
                var ma_khu_get      = $("#edit_ma_khu").val();
                var ten_khu_get     = $("#edit_ten_khu").val();
                var mo_ta_get       = $("#edit_mo_ta").val();
                var tinh_trang_get  = $("#edit_tinh_trang").val();

                var payload    =  {
                    'id'            : id_get,
                    'ma_khu'        : ma_khu_get,
                    'ten_khu'       : ten_khu_get,
                    'mo_ta'         : mo_ta_get,
                    'tinh_trang'    : tinh_trang_get,
                };

                $.ajax({
                    url     :   '/admin/khu-vuc/update',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        if(res.status == true) {
                            toastr.success("Đã cập nhật khu vực thành công!");
                            getData();
                        }
                    },
                    error   :   function(res) {
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
