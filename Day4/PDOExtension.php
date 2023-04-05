<?php
$db_host = 'localhost';
$db_name = 'test';
$username = 'root';
$password = '';
$conn = new PDO("mysql:host=$db_host;dbname=izlearn", $username, $password);
//Khởi tạo Prepared Statement từ biến $conn ở phần trước
$stmt = $conn->prepare('INSERT INTO users (name, address, status) values (?, ?, ?)');
$data = array('Duy', 'Ha Noi', 3);
$stmt->execute();
//Unnamed Placeholder
//Gán các biến (lúc này chưa mang giá trị) vào các placeholder theo thứ tự tương ứng
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $address);
$stmt->bindParam(3, $status);

//Gán giá trị và thực thi
$name = "Tung";
$address = "ha Noi";
$status = 1;
$stmt->execute();

//Gán những giá trị khác và tiếp tục thực thi
$name = "Hung";
$address = "Noi Nao Do";
$status = 2;
$stmt->execute();
//Sử dụng mảng
$data = array('Duy', 'Ha Noi', 3);
$stmt->execute($data);

//Named Placeholder
//Khởi tạo Prepared Statement từ biến $conn ở phần trước
$stmt = $conn->prepare('INSERT INTO users (name, address, status) values (:name, :address, :status)');

//Gán các biến (lúc này chưa mang giá trị) vào các placeholder theo tên của chúng
$stmt->bindParam(':name', $name);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':status', $status);

//Gán giá trị và thực thi
$name = "Luc";
$address = "HY";
$status = 2;
$stmt->execute();


//Su dung mang de insert
$data = array('name' => 'Nguyen Van Nam', 'address' => 'Ha Noi', 'status' => 1);
$stmt->execute($data);
//Su dung object de insert
class user
{
    public $name;
    public $address;
    public $status;
}

$person = new user();
$person->name = 'Vu Hoang Lam';
$person->address = 'HN';
$person->status = 1;

$stmt = $conn->prepare('INSERT INTO users (name, address, status) values (:name, :address, :status)');
$stmt->execute((array)$person);
//Select data
//Tạo Prepared Statement
$stmt = $conn->prepare("SELECT * from users WHERE name = :name");
//C1 Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
//Gán giá trị và thực thi
$stmt->execute(array('name' => 'Quynh'));
$row = $stmt->fetch();
echo '\n';
var_dump($row);
//C2 Đưa kiểu dữ liệu trả về vào trong fetch
$stmt->execute(array('name' => 'Luc'));
$row = $stmt->fetch(PDO::FETCH_OBJ);
echo '\n';
var_dump($row);
