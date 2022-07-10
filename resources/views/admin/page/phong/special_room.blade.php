@extends('admin.share.master')
@section('title')
    Quản Lý Giá Phòng Theo Ngày
@endsection
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Thêm mới giá phòng
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label>Mã Phòng</label>
                            <select id="id_phong" class="form-control">
                                @foreach ($phong as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->ma_phong }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá Phòng</label>
                            <input id="gia_phong" type="text" class="form-control" placeholder="Nhập vào giá phòng">
                        </div>
                        <div class="form-group">
                            <label>Từ Ngày</label>
                            <input id="day_begin" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Đến Ngày</label>
                            <input id="day_end" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <select id="is_open" class="form-control">
                                <option value="1">Mở</option>
                                <option value="0">Đóng</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" id="createGiaPhong">Thêm mới</button>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Danh sách phòng
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Mã Phòng</th>
                                <th>Giá Phòng</th>
                                <th>Từ Ngày</th>
                                <th>Đến Ngày</th>
                                <th>Tình Trạng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center align-middle">1</th>
                                <td class="text-center align-middle">A001</td>
                                <td class="text-center align-middle">1000000</td>
                                <td class="text-center align-middle">20/06/2022</td>
                                <td class="text-center align-middle">25/06/2022</td>
                                <td class="text-center align-middle text-nowrap">
                                    <button class="btn btn-success">Đang mở</button>
                                </td>
                                <td class="text-center align-middle text-nowrap">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#xoaModal">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-danger">
                              <h5 class="modal-title" id="exampleModalLabel">Xóa Phòng</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa phòng hay không?
                                <input type="text" id="idDelete" class="form-control">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button id="sureDelete" type="button" class="btn btn-danger" data-dismiss="modal">Chắc Chắn!</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Phòng</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" id="edit_id" class="form-control">
                                <div class="form-group">
                                    <label>Mã Phòng</label>
                                    <select id="edit_id_phong" class="form-control">
                                        @foreach ($phong as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->ma_phong }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá Phòng</label>
                                    <input id="edit_gia_phong" type="text" class="form-control" placeholder="Nhập vào giá phòng">
                                </div>
                                <div class="form-group">
                                    <label>Từ Ngày</label>
                                    <input id="edit_day_begin" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Đến Ngày</label>
                                    <input id="edit_day_end" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tình trạng</label>
                                    <select id="edit_is_open" class="form-control">
                                        <option value="1">Mở</option>
                                        <option value="0">Đóng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button id="sureUpdate" type="button" class="btn btn-danger" data-dismiss="modal">Chắc Chắn!</button>
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
<script>
    $(document).ready(function(){
        $("#createGiaPhong").click(function() {
            var payload = {
                'id_phong'  :   $("#id_phong").val(),
                'gia_phong' :   $("#gia_phong").val(),
                'day_begin' :   $("#day_begin").val(),
                'day_end'   :   $("#day_end").val(),
                'is_open'   :   $("#is_open").val(),
            };
            $.ajax({
                url     :   '/admin/gia-phong/create',
                type    :   'post',
                data    :   payload,
                success :   function(res) {
                    if(res.status) {
                        toastr.success("Đã thêm mới giá phòng thành công!");
                        loadTable();
                    } else {
                        toastr.error("Ngày bạn chọn đã có giá trước đó!");
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
        loadTable();
        function loadTable() {
            $.ajax({
                url     :   '/admin/gia-phong/data',
                type    :   'get',
                success :   function(res) {
                    var content = '';
                    $.each(res.data, function(k, v) {
                        content += '<tr>';
                        content += '<th class="text-center align-middle">'+ (k + 1) +'</th>';
                        content += '<td class="text-center align-middle">'+ v.ma_phong +'</td>';
                        content += '<td class="text-center align-middle">'+ v.gia_phong +'</td>';
                        content += '<td class="text-center align-middle">'+ moment(v.day_begin).format('DD/MM/YYYY') +'</td>';
                        content += '<td class="text-center align-middle">'+ moment(v.day_end).format('DD/MM/YYYY') +'</td>';
                        content += '<td class="text-center align-middle text-nowrap">';
                        if(v.is_open) {
                            content += '<button class="btn btn-success changeStatus" data-id="'+ v.id +'">Đang mở</button>';
                        } else {
                            content += '<button class="btn btn-danger changeStatus" data-id="'+ v.id +'">Tạm Tắt</button>';
                        }
                        content += '</td>';
                        content += '<td class="text-center align-middle text-nowrap">';
                        content += '<button class="btn btn-primary mr-1 edit" data-id="'+ v.id +'" data-toggle="modal" data-target="#editModal">Edit</button>';
                        content += '<button class="btn btn-danger delete" data-id="'+ v.id +'" data-toggle="modal" data-target="#deleteModal">Delete</button>';
                        content += '</td>';
                        content += '</tr>';
                    });
                    $("#table tbody").html(content);
                },
            });
        }

        $("body").on('click', '.changeStatus', function() {
            var payload = {
                'id'    : $(this).data('id'),
            };

            $.ajax({
                url     :   '/admin/gia-phong/changeStatus',
                type    :   'post',
                data    :   payload,
                success :   function(res) {
                    if(res.status) {
                        toastr.success("Đã đổi trạng thái thành công!");
                        loadTable();
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

        $("body").on('click', '.delete', function() {
            $("#idDelete").val($(this).data('id'));
        });

        $("body").on('click', '#sureDelete', function() {
            var payload = {
                'id'    :   $("#idDelete").val(),
            };

            $.ajax({
                url     :   '/admin/gia-phong/delete',
                type    :   'post',
                data    :   payload,
                success :   function(res) {
                    if(res.status) {
                        toastr.success("Đã xóa đơn giá phòng thành công!");
                        loadTable();
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

        $("body").on('click', '.edit', function() {
            var payload = {
                'id'    :   $(this).data('id'),
            };

            $.ajax({
                url     :   '/admin/gia-phong/edit',
                type    :   'post',
                data    :   payload,
                success :   function(res) {
                    $("#edit_id").val(res.data.id);
                    $("#edit_id_phong").val(res.data.id_phong);
                    $("#edit_gia_phong").val(res.data.gia_phong);
                    $("#edit_day_begin").val(moment(res.data.day_begin).format('YYYY-MM-DD'));
                    $("#edit_day_end").val(moment(res.data.day_end).format('YYYY-MM-DD'));
                    $("#edit_is_open").val(res.data.is_open);
                },
                error   :   function(res) {
                    var errors = res.responseJSON.errors;
                    $.each(errors, function(k, v) {
                        toastr.error(v[0]);
                    });
                },
            });
        });

        $("body").on('click', '#sureUpdate', function() {
            var payload = {
                'id'        :   $("#edit_id").val(),
                'id_phong'  :   $("#edit_id_phong").val(),
                'gia_phong' :   $("#edit_gia_phong").val(),
                'day_begin' :   $("#edit_day_begin").val(),
                'day_end'   :   $("#edit_day_end").val(),
                'is_open'   :   $("#edit_is_open").val(),
            };

            $.ajax({
                url     :   '/admin/gia-phong/update',
                type    :   'post',
                data    :   payload,
                success :   function(res) {
                    if(res.status) {
                        toastr.success("Đã cập nhật giá phòng thành công!");
                        loadTable();
                    } else {
                        toastr.error("Ngày bạn chọn đã có giá trước đó!");
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

        // $("#table").DataTable();
    });
</script>
@endsection
