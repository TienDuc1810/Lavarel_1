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
                <td>Fullname</td>
                <td><input type="text" name="fullname" /></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="1" checked>Male
                    <input type="radio" name="gender" value="2">Female
                </td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="radio" name="status" value="1" checked>Active
                    <input type="radio" name="status" value="2">Unactive
                </td>
            </tr>
            <tr>
                <td>Avatar</td>
                <td><input type="file" name="avatar"></td>
            </tr>
            <tr>
                <td>Information</td>
                <td><textarea type="information"></textarea></td>
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