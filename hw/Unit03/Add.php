<?php
require ("add_process.php");

$data = array();

$is_update_action = false;

if (!empty($_GET['id']))
{
	$data = getStudent($_GET['id']);
	$is_update_action  = true;
}


if (!empty($_POST['add_student']))
{

	$data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
	$data['student_name'] = isset($_POST['StName']) ? $_POST['StName'] : '';
	$data['student_phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
	$data['student_email'] = isset($_POST['mail']) ? $_POST['mail'] : '';
	$data['student_gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
	$data['student_address'] = isset($_POST['address']) ? $_POST['address'] : '';

	updateStudent($data['student_id'], $data['student_name'],$data['student_phone'], $data['student_email'], $data['student_gender'], $data['student_address']);
	header("Location:list.php");
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <style>
    	.error {
			color: red;
		}
    	legend{
    		font-weight: bold;
    	}
    	label{
    		font-weight: bold;
    		font-size: 14px;
    	}
    	.form-group div{
    		width: 10%;
    		display: block;
    		float: left;
    		margin-top: 2%;
    	}
    	table td{
    		width: 100px;
    		height: 10px;
    		padding-top: 10%;
    	}
    </style>

</head>
<body>
    <div class="container">
        <form action="add_process.php" method="POST" role="form" id="formSV">
            <legend>ZENT GROUP - PHP</legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="id" required value="<?php echo !empty($data['student_id']) ? $data['student_id'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="StName" required value="<?php echo !empty($data['student_name']) ? $data['student_name'] : ''; ?>">
            </div>  
            
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone" required value="<?php echo !empty($data['student_phone']) ? $data['student_phone'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="mail" required value="<?php echo !empty($data['student_email']) ? $data['student_email'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="" style="float: left;">Giới tính</label>
                <table>
                	<tr>
	                	<td><input style="float: left;width: 20%;font-size: 16px;" type="radio" class="form-control" name="gender" value="Male" required <?php if($is_update_action){echo !empty($data['student_gender'] == 'Male') ? 'checked=\'checked\'' : '';} ?>>Nam</td>
	                	<td><input style="float: left;width: 20%;font-size: 16px;" type="radio" class="form-control" name="gender" value="Female" required <?php if($is_update_action){echo !empty($data['student_gender'] == 'Female') ? 'checked=\'checked\'' : '';} ?>>Nữ</td>
	                	<td><input style="float: left;width: 20%;font-size: 16px;" type="radio" class="form-control" name="gender" value="Other" required <?php if($is_update_action){echo !empty($data['student_gender'] == 'Other') ? 'checked=\'checked\'' : '';} ?>>Khác</td>
	                	<label for="gender" class="error" style="font-weight: bold;"></label>
	                </tr>	
                </table>
            </div>

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address" required value="<?php echo !empty($data['student_address']) ? $data['student_address'] : ''; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="add_student"  value="<?php echo ($is_update_action) ? "Cập nhật" : "Thêm mới"; ?>">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>