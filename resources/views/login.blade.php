<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../asset/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../asset/css/register.css">
    <title>Beranda | RS Harapan Ceria</title>
</head>

<body>
    <div class="container">
        <img src="../asset/img/logo.png" alt="">
        <form action="/signin" method="post" enctype="multipart/form-data">
            @csrf
            <ul>
                <li>
                    <label for="">Email</label>
                    <input type="email" name="email" id="">
                </li>
                <li>
                    <label for="">password</label>
                    <input type="text" name="password" id="">
                </li>
                <li><button type="submit">login</button></li>
            </ul>
        </form>
        <p>Belum punya akun ? <a href="/register">Yuk daftar</a></p>
    </div>

</body>

</html>
