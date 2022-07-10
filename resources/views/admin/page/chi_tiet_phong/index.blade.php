@extends('admin.share.master')
@section('title')
    Quản Lý Chi Tiết Phòng
@endsection
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Chi Tiết Phòng
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Mã Phòng</label>
                            <select id="id_phong" class="form-control">
                                @foreach ($phong as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->ma_phong }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên Phòng</label>
                            <input id="ten_phong" type="text" class="form-control" placeholder="Nhập vào giá phòng">
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Phòng</label>
                            <textarea id="noi_that" cols="30" rows="10" class="form-control">
                                <table style="width:304px; margin: 0 auto;" border="1"; >
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                </tbody>
                                </table>
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" id="create">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Danh Sách Các Phòng Trong Khách Sạn
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Loại Phòng</th>
                                <th>Tên Phòng</th>
                                <th>Nội Thất</th>
                                <th>Tình Trạng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Delete --}}
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button id="sureDelete" type="button" class="btn btn-danger"
                                                data-dismiss="modal">Chắc Chắn!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Edit --}}
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
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
                                                <select id="edit_id_phong" class="form-control">
                                                    @foreach ($phong as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->ma_phong }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tên Phòng</label>
                                                <input id="edit_ten_phong" type="text" class="form-control"
                                                    placeholder="Nhập vào giá phòng">
                                            </div>
                                            <div class="form-group">
                                                <label>Mô Tả Phòng</label>
                                                <textarea id="edit_noi_that" cols="30" rows="10" class="form-control">
                                                    <table style="width:304px; margin: 0 auto;" border="1"; >
                                                    <tbody>
                                                    <tr>
                                                    <td style="width: 59.8281px;"><strong>STT</strong></td>
                                                    <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                                    <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">1</td>
                                                    <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                                    <td style="width: 106.25px;">1</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">2</td>
                                                    <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                                    <td style="width: 106.25px;">2</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">3</td>
                                                    <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                                    <td style="width: 106.25px;">1</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">4</td>
                                                    <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                                    <td style="width: 106.25px;">1</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">5</td>
                                                    <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                                    <td style="width: 106.25px;">2</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">6</td>
                                                    <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                                    <td style="width: 106.25px;">2</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="width: 59.8281px;">7</td>
                                                    <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                                    <td style="width: 106.25px;">4</td>
                                                    </tr>
                                                    </tbody>
                                                    </table>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button id="sureUpdate" type="button" class="btn btn-danger"
                                                data-dismiss="modal">Chắc Chắn!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
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
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('noi_that');
        CKEDITOR.replace('edit_noi_that');
    </script>
    <script>
        $(document).ready(function() {
            loadData();

            $('#create').click(function() {
                const payLoad = {
                    'id_phong': $('#id_phong').val(),
                    'ten_phong': $('#ten_phong').val(),
                    'noi_that':  CKEDITOR.instances['noi_that'].getData(),
                    'is_open': 1,
                };
                console.log(payLoad);
                $.ajax({
                    url: '/admin/chi-tiet-phong/create',
                    type: 'post',
                    data: payLoad,
                    success: function(res) {
                        if (res.status) {
                            toastr.success("Đã thêm mới thành công");
                            loadData();
                        }
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    },
                });
            });

            function loadData() {
                $.ajax({
                    url: '/admin/chi-tiet-phong/loadData',
                    type: 'get',
                    success: function(res) {
                        var content = '';
                        $.each(res.data, function(key, value) {
                            status = (value.is_open) ?
                                `<button class="btn btn-primary changeStatus" data-id="`+value.id+`">Đang mở</button>`
                                :
                                `<button class="btn btn-danger changeStatus" data-id="`+value.id+`">Đang tắt</button>`;
                            content += `
                             <tr>
                                <td class="text-center align-middle">` + key + 1 + `</td>
                                <td class="text-center align-middle">` + value.ma_phong + `</td>
                                <td class="text-center align-middle">` + value.ten_phong + `</td>
                                <td class="text-center align-middle">` + value.noi_that + `</td>
                                <td class="text-center align-middle">
                                    ` + status + `
                                </td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-primary edit" data-id="` + value.id + `" data-toggle="modal" data-target="#editModal">Edit</button>
                                    <button class="btn btn-danger delete" data-id="` + value.id + `" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                </td>
                            </tr>`;
                        });

                        $('#table tbody').html(content);
                    },
                    error: function(res) {

                    },
                });
            }

            $('body').on('click', '.delete', function() {
                $('#edit_id').val($(this).data('id'));
            })

            $('body').on('click', '#sureDelete', function() {
                const payLoad = {
                    'id': $('#edit_id').val(),
                }

                $.ajax({
                    url: '/admin/chi-tiet-phong/delete',
                    type: 'post',
                    data: payLoad,
                    success: function(res) {
                        if (res.status) {
                            toastr.success("Đã xóa thành công");
                            loadData();
                        }
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    },
                });
            })

            $('body').on('click', '.edit', function() {
                $('#edit_id').val($(this).data('id'));

                $.ajax({
                    url		: '/admin/chi-tiet-phong/edit/'+ $('#edit_id').val(),
                    type	:'get',
                    success	: function(res) {
                        $('#edit_id_phong').val(res.data.id_phong);
                        $('#edit_ten_phong').val(res.data.ten_phong);
                        CKEDITOR.instances['edit_noi_that'].setData(res.data.noi_that);

                    }
                });
            })

            $('body').on('click', '#sureUpdate', function() {
                const payLoad = {
                    'id': $('#edit_id').val(),
                    'id_phong': $('#edit_id_phong').val(),
                    'ten_phong': $('#edit_ten_phong').val(),
                    'is_open': 1,
                    'noi_that':  CKEDITOR.instances['edit_noi_that'].getData(),
                }
                console.log(payLoad)
                $.ajax({
                    url: '/admin/chi-tiet-phong/update',
                    type: 'post',
                    data: payLoad,
                    success: function(res) {
                        if (res.status) {
                            toastr.success("Đã Update thành công");
                            loadData();
                        }
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    },
                });
            })

            $("body").on('click', '.changeStatus', function() {
                var payload = {
                    'id'    : $(this).data('id'),
                };

                $.ajax({
                    url     :   '/admin/chi-tiet-phong/changeStatus',
                    type    :   'post',
                    data    :   payload,
                    success :   function(res) {
                        if(res.status) {
                            toastr.success("Đã đổi trạng thái thành công!");
                            loadData();
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
