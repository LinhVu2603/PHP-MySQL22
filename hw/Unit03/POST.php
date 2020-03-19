<?php 
echo "<legend>ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</legend>";
echo "THÔNG TIN SINH VIÊN"."<br>";
echo "Mã sinh viên:".$_POST['user']."<br>";
echo "Họ và tên: ".$_POST['StName']."<br>";
echo "Số điện thoại: ".$_POST['phone']."<br>";
echo "Email: ".$_POST['mail']."<br>";
echo "Giới tính: ".$_POST['gender']."<br>";
echo "Địa chỉ: ".$_POST['address']."<br>";
 ?>