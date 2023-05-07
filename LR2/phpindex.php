<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ORDER BY</title>
    <style>
        body{font-family: sans-serif;}
        label{display: inline-block;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
        th{background: #0d6efd; color: white; }
        form{
            margin-bottom: 5px; 
            display: flex;
            align-items:center;
            justify-content: center;
            gap: 12px;
        }
        .input-btn{
            width: 120px!important;
        }
        tr:nth-of-type(odd){background: #eeeeee;}
        .form-select{
            width: 250px;
        }
    </style>
</head>
<body>
<!-- Форма выбора вида сортировки -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <label for="sortValue">Сортировать по: </label>
    <select name="sort_value" id="sortValue" class="form-select form-select-lg mb-1" aria-label=".form-select-lg example">
        <option value="id" selected>id</option>
        <option value="cost">Цена low</option>
        <option value="cost DESC">Цена high</option>
        <option value="name">name</option>
        <option value="id_brand">id_brand</option>
    </select>
    <input type="submit" value="Применить" class="btn btn-primary input-btn">
</form>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "zozn"; 
try {
    /// Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	// Проверяем поле формы на пустое значение. 
    if(empty($_POST['sort_value'])){
        $sort_value = "id"; // Сортировка по умолчанию
    } else {
        $sort_value=$_POST['sort_value'];
    }
 
    // Запрос на вывод отсортированных записей из таблицы
    $sql = "SELECT id, img, name, id_brand, description, cost FROM `TOVARY` ORDER BY $sort_value";
    // Подготовка запроса
    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
 
    // Создаем таблицу вывода
    echo "<table><tr><th>ID</th><th>img</th><th>id_brand</th><th>name</th><th>cost</th><th>description</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"] . "</td>";
        echo "<td>" . $result_row["img"] . "</td>";
        echo "<td>" . $result_row["id_brand"] . "</td>";
        echo "<td>" . $result_row["name"] . "</td>";
        echo "<td>" . $result_row["cost"] . "</td>";
        echo "<td>" . $result_row["description"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
 
catch(PDOException $e) {
    echo "Ошибка при выводе записей из базы данных: " . $e->getMessage();
}
 
// Закрываем соединение с БД
$db = null;
?>
 
</body>
</html>