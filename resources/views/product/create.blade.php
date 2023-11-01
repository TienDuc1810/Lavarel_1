<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('store')}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Giá tiền</td>
                <td><input type="number" name="price" /></td>
            </tr>
            <tr>
                <td>Giới thiệu sản phẩm</td>
                <td><input type="text" name="intro" /></td>
            </tr>
            <tr>
                <td>Nội dung sản phẩm</td>
                <td><input type="text" name="content" /></td>
            </tr>
            <tr>
                <td>Trạng thái</td>
                <td>
                    <input type="radio" name="status" value="1" checked>Show
                    <input type="radio" name="status" value="2">Hide
                </td>
            </tr>
            <tr>
                <td>Xếp hạng</td>
                <td>
                    <input type="radio" name="featured" value="1" checked>Outstanding
                    <input type="radio" name="featured" value="2">Unoutstanding
                </td>
            </tr>
            <tr>
                <td>Ảnh sản phẩm</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button>Create</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>