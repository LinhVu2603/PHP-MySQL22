<?php
echo "<h1><b>Giải phương trình bậc nhất</b></h1>";
echo "<br>";
// khai báo các hệ số
$heso_a = "";
$heso_b = "";
// đọc các hệ số từ FORM
if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}
function giaiPTB1($a, $b) {
    // kiểm tra biến đầu vào
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x + " . $b . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
        if ($b == 0) {
            echo "Phương trình vô số nghiệm!";
        } else {
            echo "Phương trình vô nghiệm!";
        }
        return;
    }else{
      $x1 = (- $b/$a);
      echo "Phương trình có nghiệm là: "."x = ".$x1 ;
    }
}
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Hệ số a</td>
   <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
  </tr>
  <tr>
   <td>Hệ số tự do b</td>
   <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
  </tr>
  <tr>  
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>
<?php
// Sử dụng từ khoá $GLOBALS để đọc các biến và truyền vào hàm
if (is_numeric ( $GLOBALS ['heso_a'] ) && is_numeric ( $GLOBALS ['heso_b'] )) {
    giaiPTB1 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b']);
} else {  
    echo ("Giá trị input không hợp lệ!");
}
?>
?>
