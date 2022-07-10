@extends('admin.share.master')
@section('title')
    Quản Lý Cấu Hình
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Thêm mới Cấu Hình
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Danh Sách Slide</label>
                        <div class="input-group">
                            <input id="slide" class="form-control" type="text" name="filepath">
                            <span class="input-group-prepend">
                                <a id="lfm" data-input="slide" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" id="createConfig"> Cập Nhật</button>
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
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
    <script>
        $(document).ready(function() {
            loadData();
            $('#createConfig').click(function() {
                const payLoad = {
                    'slides' : $("#slide").val(),
                }
                $.ajax({
                    url		: '/admin/cau-hinh',
                    type	:'post',
                    data	: payLoad,
                    success	: function(res) {
                        if(res.status) {
                            toastr.success("Đã Thêm Mới thành công!!!");
                        }
                    },
                    error	: function(res) {
                        var errors = res.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    },
                	});
            });

            function loadData() {
                $.ajax({
                    url		: '/admin/cau-hinh/data',
                    type	:'get',
                    success	: function(res) {
                        $("#slide").val(res.data.slides);
                        var html ="";
                        var hinh_anh = res.data.slides.split(',');
                        console.log(hinh_anh)
                        for(i = 0; i < hinh_anh.length ; i++) {
                            html+= `<img src="`+hinh_anh[i]+`" style="height: 5rem; margin: 0 5px;">`;
                        }
                        $("#holder").html(html);
                    },
                });
            }
        });
    </script>
@endsection
