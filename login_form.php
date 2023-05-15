<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        *{
            border-radius: 20px;
            font-family: "標楷體";
            color: blueviolet;
        }
    </style>
</head>
<body>
    <h1>會員登入</h1>
    <form action="login.php" method="post">
<p>
    <label for="acc">帳號</label>
    <input type="text" name="acc" id="acc">
</p>
<p>
    <label for="password">密碼</label>
    <input type="text" name="password" id="password">
</p>
<p><input type="submit" value="登入"></p>




    </form>
    
</body>
</html>