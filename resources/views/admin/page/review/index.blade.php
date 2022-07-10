@extends('admin.share.master')
@section('title')
    Quản Lý Review
@endsection
@section('content')
    <div id="app" class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Review
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Họ Và Tên</label>
                            <input v-model="add.name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Thành Phố</label>
                            <input v-model="add.city" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Đánh Giá</label>
                            <input v-model="add.rate" type="number" min="0" max="5" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea v-model="add.content" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <div class="input-group">
                                <input id="avatar" class="form-control" type="text" name="filepath">
                                <span class="input-group-prepend">
                                    <a id="lfm" data-input="avatar" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                            </div>
                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-right">
                    <button v-on:click="createReview()" class="btn btn-primary">Thêm Mới Review</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Review
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">Họ và Tên</th>
                                <th class="align-middle text-center">Thành Phố</th>
                                <th class="align-middle text-center">Đánh Giá</th>
                                <th class="align-middle text-center">Nội Dung</th>
                                <th class="align-middle text-center">Avatar</th>
                                <th class="align-middle text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in listData">
                                <th class="align-middle text-center">@{{ key + 1 }}</th>
                                <td class="align-middle text-center">@{{ value.name }}</td>
                                <td class="align-middle text-center">@{{ value.city }}</td>
                                <td class="align-middle text-center">@{{ value.rate }}</td>
                                <td class="align-middle text-center">@{{ value.content }}</td>
                                <td class="align-middle text-center">
                                    <img v-bind:src="value.avatar" class="img-thumbnail" alt="ảnh"
                                        style="height: 100px; width: 150px;">
                                </td>
                                <td class="align-middle text-center">
                                    <button @click="clickEdit(value)" class="btn btn-primary" data-toggle="modal"
                                        data-target="#editModal">Cập
                                        Nhật</button>
                                    <button @click="dele = value" class="btn btn-danger" data-toggle="modal"
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
                        <form>
                            <div class="form-group">
                                <label>Họ Và Tên</label>
                                <input v-model="edit.name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Thành Phố</label>
                                <input v-model="edit.city" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Đánh Giá</label>
                                <input v-model="edit.rate" type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea v-model="edit.content" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <div class="input-group">
                                    <input id="edit_avatar" class="form-control" type="text" name="filepath">
                                    <span class="input-group-prepend">
                                        <a id="edit_lfm" data-input="edit_avatar" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                </div>
                                <div id="edit_holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="updateReview()" type="button" data-dismiss="modal"
                            class="btn btn-primary">Cập
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
                        Bạn Có Muốn Xóa Review Này Không
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="deleteReview()" type="button" data-dismiss="modal"
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
                listData: [],
                add: {},
                edit: {},
                dele: {},
            },
            created() {
                this.loadData();
            },
            methods: {
                loadData() {
                    axios
                        .get('/admin/review/data')
                        .then((res) => {
                            this.listData = res.data.data;
                        });
                },
                createReview() {
                    this.add.avatar = $('#avatar').val();
                    axios
                        .post('/admin/review/create', this.add)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Thêm Mới Thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                deleteReview() {
                    axios
                        .post('/admin/review/delete', this.dele)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Xóa Thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                clickEdit(value) {
                    this.edit = value;
                    $('#edit_avatar').val(value.avatar);
                    $('#edit_holder').html('<img src="' + value.avatar + '" style="height: 100px;"/>');

                },
                updateReview() {
                    this.edit.avatar = $('#edit_avatar').val();
                    axios
                        .post('/admin/review/update', this.edit)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Update Thành công");
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
@endsection
