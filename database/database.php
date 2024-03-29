<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>База данных</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/navigation.css">
    <style>
  body { background: url(/photo/grad1.jpg); }
</style>
</head>
<body>
    <nav class="top-menu">
    <ul class="menu-main">
    <li><a href="database.php" class="current">Обновить базу данных</a></li>
    <li><a href="deleteDB.php">Удалить пост</a></li>
    <li><a href="/reg.php">Зарегистрироваться</a></li>
    <li><a href="/index.php">Войти</a></li>
    </ul>
    </nav>

 <?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "register-bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, login, pass, name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '<table border="3" align="center" width="50%" cellpadding
="5" bgcolor="GreenYellow" bordercolor="Black">';
    echo '<td>id</td><td>Name</td><td>Login</td><td>Password</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo "<td> " . $row["id"]. "</td> <td>" . $row["name"]. "</td> <td> " . $row["login"]. "</td> <td> " . $row["pass"]. "</td><tr><br>";
    }
    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?> 

</body>
</html>