<?php 
if(isset($_POST['submit'])){
    if($_POST['username'] == 'admin' && $_POST ['password'] == 'admin'){
        header("location: backend/index.php");
        exit;
    }else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>
    table {margin-left: 550px;
            border : 1px solid black;}
    h3  {
        text-align: center;}
    button {margin: auto;}
    p {text-align: center;}
</style>
<body>
    <h3>Halaman Login</h3>
    <?php if(isset($error)): ?>
    <p style="color:red;">Maaf, Username dan Password salah!</p>
    <?php endif ?>
    <table>
        <form action="" method="post">
        <tr>
        <td>
            <label>Username</label>
        </td>
        <td>
        <input type="text" name="username">
        </td>
        </tr>
        <tr>
        <td>
            <label>Password</label>
        </td>
        <td>
            <input type="password" name="password">
        </td>
        </tr>
        <tr>
        <td>
            <button type="submit" name="submit">Login</button>
        </td>
        </tr>
        </form>



    </table>
</body>
</html>