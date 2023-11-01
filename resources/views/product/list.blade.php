<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .add {
            margin-left: 40px;
        }
    </style>
</head>

<body>
    @foreach($sanpham as $item)
    <ul>
        <li>Tên sản phẩm: {{ $item->name }}</li>
        <li>Giá tiền: {{$item->price}}</li>
        <li>Giới thiệu sản phẩm: {{$item->intro}}</li>
        <li>Nội dung sản phẩm: {{$item->content}}</li>
        <li>Trạng thái: {{$item->status}}</li>
        <li>Xếp hạng: {{$item->featured}}</li>
        <li>Ảnh: {{$item->image}}</li>
        <li>Thời gian bán: {{$item->created_at}}</li>
        <form action="{{ route('delete', ['id' => $item->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Xóa</button>
        </form>
    </ul>
    @endforeach

    <form action="{{ route('create') }}">
        <button class="add" type="submit">Thêm mới</button>
    </form>
</body>

</html>