@extends('admins.layouts.main')
@section('title', 'Quản trị danh muc')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Tên</th>
            <th>Slug</th>
            <th>Mô tả</th>
            <th>Hiển thị</th>
            <th>Tổng sản phẩm</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Người tạo</th>
            <th>Hành động
                <br>
                <a class="btn btn-outline-success" href="{{ bsUrl . 'admin-categories-add' }}">Thêm</a>
            </th>
        </thead>
        <tbody>
            @foreach ($cate as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->cate_name }}</td>
                    <td>{{ $c->slug }}</td>
                    <td>{{ $c->desc }}</td>
                    <td>{{ $c->show_menu == 1 ? 'yes' : 'no' }}</td>
                    <td>{{ count($c->products) }}</td>
                    <td>{{ $c->created_at }}</td>
                    <td>{{ $c->updated_at }}</td>
                    <td>{{ $c->created_by }}</td>
                    <td>

                        <a class="btn btn-sm btn-danger"
                            onclick="confirmRemove('{{ bsUrl . 'admin-categories-delete?id=' . $c->id }}')"
                            href="javascript:;">Xóa</a>
                        <br> <br>
                        <a class="btn btn-sm btn-success" href="{{ bsUrl . 'admin-categories-edit?id=' . $c->id }}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        function confirmRemove(removeurl) {
            alertify.confirm(
                'Thông báo',
                'Bạn chắc chắn muốn xóa sản phẩm này ?',
                function() {
                    window.location.href = removeurl;
                },
                function() {
                    alertify.confirm().close();
                }
            );
        }

    </script>
@endsection
