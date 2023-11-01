<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($hocvien as $item)
    <ul>
        <li>Họ tên: {{ $item->fullname }}</li>
        <li>Giới tính: {{$item->gender}}</li>
        <li>Ngày sinh: {{$item->birthday}}</li>
        <li>Avatar: {{$item->avatar}}</li>
        <li>Status: {{$item->status}}</li>
        <li>Thông tin: {{$item->information}}</li>
        <li>Thời gian tạo: {{$item->created_at}}</li>
    </ul>
    @endforeach
</body>
</html>