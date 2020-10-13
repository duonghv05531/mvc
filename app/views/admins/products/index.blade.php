@extends('admins.layouts.main')
@section('title', 'Quản trị sản phẩm')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Danh mục</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Tiêu đề</th>
            <th>Chi tiết</th>
            <th>Số sao</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Người tạo</th>
            <th>Lượt xem</th>
            <th>Hành động
                <br>
                <a class="btn btn-sm btn-outline-success" href="{{ bsUrl . 'admin-products-add' }}">Thêm</a>
            </th>
        </thead>
        <tbody>
            @foreach ($pro as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->getCateName() }}</td>
                    <td>{{ $p->name }}</td>
                    <td><img src="{{ $p->image }}" alt="" width="100px"></td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->short_desc }}</td>
                    <td>{{ $p->detail }}</td>
                    <td>{{ $p->star }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->updated_at }}</td>
                    <td>{{ $p->updated_by }}</td>
                    <td>{{ $p->views }}</td>
                    <td>
                        <a class="btn btn-sm btn-danger"
                            onclick="confirmRemove('{{ bsUrl . 'admin-products-delete?id=' . $p->id }}')"
                            href="javascript:;">Xóa</a>
                        <br> <br>
                        <a class="btn btn-sm btn-success" href="{{ bsUrl . 'admin-products-edit?id=' . $p->id }}">Sửa</a>
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
