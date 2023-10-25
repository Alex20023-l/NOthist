<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="register.php" method="post">
    <input type="text" placeholder='login' name='login'> 
    <input type="text" placeholder='Password' name='password'>
    <input type="text" placeholder='reapet password' name='repeat password'>
    <input type="text" placeholder='email' name='email'>
    <button type="submit">Зарегистрироватся</button>
</form>

<form action="login.php" method="post">
    <input type="text" placeholder='login' name='login'> 
    <input type="text" placeholder='Password' name='password'>
    <button type="submit">Войти</button>
</form>
</body>
</html>