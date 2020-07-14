<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
<h2> May tinh bo tui </h2>
 </head>

<body>
<?php
$RadioGroup1 = 1;
if (isset($_REQUEST['btntinh']))
	{
	$so_thu_nhat = $_REQUEST['so_thu_nhat'];
	$so_thu_hai = $_REQUEST['so_thu_hai'];
	$RadioGroup1 = $_REQUEST['RadioGroup1'];
	if ($RadioGroup1 == 1)
	{
		$ketqua = $so_thu_nhat + $so_thu_hai;
	}else if ($RadioGroup1 == 2)
	{
		$ketqua = $so_thu_nhat - $so_thu_hai;
	}else if ($RadioGroup1 == 3)
	{
		$ketqua = $so_thu_nhat * $so_thu_hai;
	}else if ($RadioGroup1 == 4)
		{
		$ketqua = $so_thu_nhat / $so_thu_hai;
		}
	}
?>


<form method="POST" action="calculator.php">
  <p>
    <label>Số thứ nhất:</label>
      <input name="so_thu_nhat" type="text" id="so_thu_nhat" value="<?php if(isset($so_thu_nhat)) echo $so_thu_nhat; ?>" /> <!-- Kiểm tra nếu đã nhập số thứ nhất thì vẫn lưu lại sau khi xử lý -->
  </p>
  <p>
    <label>
      <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" <?php if($RadioGroup1==1) echo "checked";?> />      Cộng <!-- Kiểm tra nếu chọn phép tính nào sau khi tính toán nó sẽ lưu phần check lại-->
    </label>
    <label>
      <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1"  <?php if($RadioGroup1==2) echo "checked";?> />      Trừ
    </label>
    <label>
      <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_2" <?php if($RadioGroup1==3) echo "checked";?> />      Nhân
    </label>
    <label>
      <input type="radio" name="RadioGroup1" value="4" id="RadioGroup1_3" <?php if($RadioGroup1==4) echo "checked";?> />      Chia
    </label>
  </p>
  <p>
    <label>Số thứ hai:</label>
       <input name="so_thu_hai" type="text" value="<?php if(isset($ketqua)) echo $so_thu_hai; ?>" id="so_thu_hai" />  <!-- Kiểm tra nếu bạn đã nhập số b thì nó vẫn lưu lại sau khi xử lý -->
  </p>
  <p>
    <input type="submit" name="btntinh" id="btntinh" value="Tính" />
  </p>
  <p>Kết quả:
    <input type="text" name="ketqua" id="ketqua" value="<?php if(isset($ketqua)) echo $ketqua; ?>" />
  </p>
</form>

  </body>
</html>
