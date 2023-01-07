<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=".././Controller/AdminController.php?action=login" method="post">
        <table>
            <caption>Login</caption>
                <th>Tài khoản</th>
                <td>
                    <input type="text" name="Username">
                </td>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <td>
                    <input type="password" name="Password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form> 
</body>
</html>