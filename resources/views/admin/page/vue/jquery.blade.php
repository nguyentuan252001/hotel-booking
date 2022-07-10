@extends('admin.share.master')
@section('title')
    Ôn lại Jquery
@endsection
@section('content')
    <div id="app" class="row">
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
                                <th class="text-center">Mã Phòng</th>
                                <th class="text-center">Đơn Giá</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="align-middle">1</th>
                                <td class="align-middle">AAA</td>
                                <td class="align-middle">AAA</td>
                                <td class="align-middle text-center">
                                    <button class="btn btn-danger">Tạm Tắt</button>
                                    <button class="btn btn-warning">Hiển Thị</button>
                                </td>
                                <td class="align-middle text-center">
                                    <button class="btn btn-info">Cập Nhật</button>
                                    <button class="btn btn-danger">Hủy Bỏ</button>
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
        $(document).ready(function() {
            loadData();

            function loadData() {
                axios
                    .get('/data')
                    .then((res) => {
                        var content = ''
                        $.each(res.data.data, function(key, value) {
                            console.log(res.data.data)
                            var status = value.tinh_trang ?
                                ` <button class="btn btn-warning">Hiển Thị</button>` :
                                `<button class="btn btn-danger">Tạm Tắt</button>`;
                            content += `
                                <tr>
                                    <th class="align-middle">` + (key + 1) + `</th>
                                    <td class="align-middle">` + value.ma_phong + `</td>
                                    <td class="align-middle">` + value.gia_mac_dinh + `</td>
                                    <td class="align-middle text-center">
                                        ` + status + `
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-info">Cập Nhật</button>
                                        <button class="btn btn-danger">Hủy Bỏ</button>
                                    </td>
                                </tr>`;
                        });
                        $("#listData tbody").html(content);
                    });
            }
        });
    </script>
@endsection
