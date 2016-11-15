<?php
error_reporting(0);
session_start();
include'head.php';
include'taikhoan.php';
$domain = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);

$adminuser = "vucms";
$adminpass = "vudz";

if (isset($_GET['action'])) {
	if ($_GET['action'] == "logout") {
		unset($_SESSION['admin']);
		unset($_SESSION['adminpass']);
	}
}
if (isset($_POST['login'])) {
	$uadm = $_POST['uadm'];
	$upass = $_POST['upass'];
	if ($uadm == $adminuser && $upass == $adminpass) {
		$_SESSION['admin'] = $uadm;
		$_SESSION['adminpass'] = $upass;
	}
}

if(isset($_POST['submit'])){

$data =  urldecode('%3C').'?php
$uid  = \''.$_POST['id'].'\';
$email = \''.$_POST['mail'].'\';
$pass = \''.$_POST['pass'].'\';
$email2 = \''.$_POST['mail2'].'\';
$pass2 = \''.$_POST['pass2'].'\';
$email3 = \''.$_POST['mail3'].'\';
$pass3 = \''.$_POST['pass3'].'\';
$email4 = \''.$_POST['mail4'].'\';
$pass4 = \''.$_POST['pass4'].'\';
$email5 = \''.$_POST['mail5'].'\';
$pass5 = \''.$_POST['pass5'].'\';
$email6 = \''.$_POST['mail6'].'\';
$pass6 = \''.$_POST['pass6'].'\';
$email7 = \''.$_POST['mail7'].'\';
$pass7 = \''.$_POST['pass7'].'\';
$email8 = \''.$_POST['mail8'].'\';
$pass8 = \''.$_POST['pass8'].'\';
$email9 = \''.$_POST['mail9'].'\';
$pass9 = \''.$_POST['pass9'].'\';
$email10 = \''.$_POST['mail10'].'\';
$pass10 = \''.$_POST['pass10'].'\';
?'.urldecode('%3E');

$fx=fopen('taikhoan.php','w');
fwrite($fx,$data);
fclose($fx);
echo'<3 Thành công <3<br><a href="lammoi.php" class="btn btn-success btn-md">Click Vào Để Refresh Token</a>';
 }else{
	 echo '';
 }

$a=explode(',',$user);

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
 <body style="font-family: sans-serif;
margin: 0 auto;
padding: 7px;
font-size: 12px;
text-align: center;
color: #333;">
<?php 
if (!isset($_SESSION['admin']) && !isset($_SESSION['adminpass'])) { ?>
		<div class="container">
			<div class="row" id="addclone">
							<h3>Đăng Nhập Panel</h3>
						</div>
					<p>
						<div class="panel-body">
						<form class="form-inline" role="form" action="index.php" method="POST">
								<div class="form-group">
								<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản Admin</label>
								<p><input type="text" class="form-control" name="uadm" placeholder="Nhập Tài Khoản Admin" required></input></p>
								<label for="upass"><i class="fa fa-key" ></i> Mật Khẩu Admin</label>
								<p><input type="password" class="form-control" name="upass" placeholder="Nhập Mật Khẩu Admin" required></input></p>
								<button type="submit" name="login" value="login" class="btn btn-primary"><i class="fa fa-sign-in" ></i> Đăng Nhập</button>
							</div>
						</form>
					</p>
				</div>
			</div>			
<?php }else{
	echo'Đăng Nhập Thành Công';

?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
                    <div class="panel-heading bg-light-blue">
                        <h4>CHÚ Ý</h4>
                    </div>

                    <div class="panel-body">
<li class="list-group-item"><font color="red">1. Hệ thống sẽ LOGIN và tự lấy token full quyền.</font></li>
<li class="list-group-item"><font color="red">2. Nick của bạn có thể bị check point.</font></li>
<li class="list-group-item"><font color="red">3. Bạn không nên nhập nik chính.</font></li>
<li class="list-group-item"><font color="red">4. Lưu lại chỉ dành cho thành viên VIP để auto token nhé.</font></li>
<li class="list-group-item"><font color="red">5. Hoàn toàn yên tâm vì đây là system của Ku Bon Ahii.</font></li>
    
           </div>
           </div>

     </div>
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"> THÔNG TIN CURL</h3></div>

	<div id="bodyupcmt" class="panel-body">
<li class="list-group-item">Nick Clone: <font color="red"><b><?php echo $email;?></b></font>.</li>
<li class="list-group-item">Pass: <font color="red"><b><?php echo $pass;?></b></font>.</li>
<li class="list-group-item">Tổng số Clone: <font color="red"><b>10</b></font>.</li>
<li class="list-group-item"> ID : <font color="red"><b><?php echo $uid;?></b></font>.</li>
<li class="list-group-item"><a href="cron.php">Chạy Thử</a></li>
<li class="list-group-item"><a href="delcookie.php">Xóa Cookie </a></li>
<li class="list-group-item"><font color="red">Cpanel Curl By:</font> <font color="#00FF00">VUCMS -__</font></li>
</div></div></div>
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"> CẬP NHẬT THÔNG TIN</h3></div>
<div class="panel-body">	
<form name="tdt_form_2" action="?" method="POST">
<font color="red"></font>
<label for="uadm"><i class="fa fa-star" ></i>ID</label> <p><input type="text" class="form-control" name="id" value="<?php echo $uid?>" placeholder="Nhập ID" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản1</label> <p><input type="text" class="form-control" name="mail" value="<?php echo $email;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu1</label> <p><input type="password" class="form-control" name="pass" value="<?php echo $pass;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản2</label> <p><input type="text" class="form-control" name="mail2" value="<?php echo $email2;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu2</label> <p><input type="password" class="form-control" name="pass2" value="<?php echo $pass2;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản3</label> <p><input type="text" class="form-control" name="mail3" value="<?php echo $email3;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu3</label> <p><input type="password" class="form-control" name="pass3" value="<?php echo $pass3;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản4</label> <p><input type="text" class="form-control" name="mail4" value="<?php echo $email4;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu4</label> <p><input type="password" class="form-control" name="pass4" value="<?php echo $pass4;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản5</label> <p><input type="text" class="form-control" name="mail5" value="<?php echo $email5;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu5</label> <p><input type="password" class="form-control" name="pass5" value="<?php echo $pass5;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản6</label> <p><input type="text" class="form-control" name="mail6" value="<?php echo $email6;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu6</label> <p><input type="password" class="form-control" name="pass6" value="<?php echo $pass6;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản7</label> <p><input type="text" class="form-control" name="mail7" value="<?php echo $email7;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu7</label> <p><input type="password" class="form-control" name="pass7" value="<?php echo $pass7;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản8</label> <p><input type="text" class="form-control" name="mail8" value="<?php echo $email8;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu8</label> <p><input type="password" class="form-control" name="pass8" value="<?php echo $pass8;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản9</label> <p><input type="text" class="form-control" name="mail9" value="<?php echo $email9;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu9</label> <p><input type="password" class="form-control" name="pass9" value="<?php echo $pass9;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-user" ></i> Tài Khoản10</label> <p><input type="text" class="form-control" name="mail10" value="<?php echo $email10;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-key" ></i> Mật Khẩu10</label> <p><input type="password" class="form-control" name="pass10" value="<?php echo $pass10;?>" placeholder="Nhập Tài Khoản Clone" required></input></p>
<label for="uadm"><i class="fa fa-thumbs-o-up" ></i> Thể Loại Like</label>
  <p><button type="submit" class="btn btn-primary" name="submit" value="Lưu"><i class="fa fa-save" ></i> Lưu Thông Tin</button></p>
<p>
 </div></div></div></div>
 </p>
 					<p style="padding-bottom: 30px;">
						<a href="index.php?action=logout" class="btn btn-danger btn-md"><i class="fa fa-sign-out" ></i>Thoát Panel</a>
					</p>
 </body>
 <footer>
	<label color="red" for="uadm"><a href="https://facebook.com/kubon9x"><h4> Desginer By Bon </h4></a></label><p></p>
</footer>
</html>
<?php }?>
