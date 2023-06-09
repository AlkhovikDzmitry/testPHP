

<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Получение данных из формы
$ins = $_POST['ins'];
$sort = $_POST['sort'];
$del = $_POST['del'];


// Вставка данных в базу данных
$sql = "INSERT INTO list_cities ( id, city_name)
VALUES ( '$ins', '$sort', $del)";

if ($conn->query($sql) === TRUE) {
    echo "Данные отправлены";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
