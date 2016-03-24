<?php ob_start(); ?>

<!doctype html>
<html>
	<head>
		<title>CU EMR :: เข้าสู่ระบบ</title>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="<?php echo URL; ?>/public/img/favicon.ico" rel="short icon">
	</head>
	<style>
		body {
			background-image: url("<?php echo URL; ?>/public/img/bg2.jpg");
			background-repeat: no-repeat;
			background-position: center top;
			<!--margin-right: 200px;-->
		}
	</style>
	<script> 

		var nationalIdLength = 13;
		var minPasswordLength = 4;
		var maxPasswordLength = 12;

	    function showPatientPanel() 
	    { 
	        document.getElementById('patientPanel').style.display='block'; 
	        document.getElementById('officerPanel').style.display='none'; 
	        return false;
	    } 

	    function showOfficerPanel() 
	    { 
	        document.getElementById('officerPanel').style.display='block'; 
	        document.getElementById('patientPanel').style.display='none'; 
	        return false;
	    }

	    function validatePatientLogin()
	    {
	    	var usernameType = document.forms["login_pt"]["id_type"].value;
	    	var username = document.forms["login_pt"]["username"].value;
	    	var password = document.forms["login_pt"]["password"].value;
	    	username = username.length();
	    	password = password.length();

	    	if(usernameType == "nt_id" && username.length != NationalIdLength) {
	    		alert("เลขประจำตัวประชาชน มี ".concat(NationalIdLength, " หลัก"));
	    		return false;
	    	} else if(password < minPasswordLength || password > maxPasswordLength) {
	    		alert("รหัสผ่าน มี ".concat(minPasswordLength, "~", maxPasswordLength, " หลัก"));
	    		return false;
	    	}

	    }

	    function validateStaffLogin()
	    {

	    	//var username = document.forms["login_st"]["username"].value;
	    	var password = document.forms["login_st"]["password"].value;
	    	password = password.length();

	    	//alert(password);

	    	if(password < minPasswordLength || password > maxPasswordLength) {
	    		alert("รหัสผ่าน มี ".concat(minPasswordLength, "~", maxPasswordLength, " หลัก"));
	    		return false;
	    	}

	    }

	</script> 
	<body>	
		<div class="container">
			<div class="row" style="text-align:center; margin-top:8%">
				<img src="<?php echo URL; ?>/public/img/logo.png" height=20% width=20%>
			</div>
			<div class="row" style="margin-top:3%">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">OPD System</h3>
						</div>
						<div class="panel-body">
							<div class="row nav nav-tabs" style="text-align:center; ">
								<div class="col-md-2"></div>
								<div class="col-md-3">
									<a onclick="return showPatientPanel();" class="btn btn-block">ผู้ป่วย</a>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-3">
									<a onclick="return showOfficerPanel();" class="btn btn-block">เจ้าหน้าที่</a>
								</div>
								<div class="col-md-2"></div>
							</div>
							
							<!--PATIENT PANEL-->
							<div id="patientPanel">
								<form class="form-horizontal" name="login_pt" method="post" action="login/doLogin" onsubmit="return validatePatientLogin()">
<!---->								<input type="hidden" name="status" value="patient">
									<div class="form-group" style="margin-top:15px">
										<div class="col-md-5">
<!---->										<select class="form-control" name="id_type">
												<option value="nt_id">เลขประจำตัวประชาชน</option>
												<option value="hp_id">เลขบัตรโรงพยาบาล</option>
											</select>
										</div>
										<div class="col-md-7">
<!---->										<input type="text" class="form-control" name="username">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label">รหัสผ่าน</label>
										<div class="col-md-7">
<!---->										<input type="password" class="form-control" name="password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12" style="text-align:center">
											<input type="submit" value="เข้าสู่ระบบ"class="btn btn-primary">
										</div>
									</div>
								</form>
								<div class="row" style="text-align:center"><a href="#">ลืมรหัสผ่าน</a></div>
								<div class="row" style="text-align:center">สำหรับผู้ป่วยใหม่ <a href="<?php echo URL; ?>register">คลิกที่นี่</a> เพื่อลงทะเบียน</div>
							</div>

							<!--OFFICER PANEL-->
							<div id="officerPanel" style="display:none">
								<form class="form-horizontal" name="login_st" method="post" action="login/doLogin" onsubmit="return validateStaffLogin()">
<!---->								<input type="hidden" name="status" value="staff">								
									<div class="form-group" style="margin-top:15px">
										<label class="col-md-5 control-label">เลขบัตรพนักงาน</label>
										<div class="col-md-7">
<!---->										<input type="text" class="form-control" name="username">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label">รหัสผ่าน</label>
										<div class="col-md-7">
<!---->										<input type="password" class="form-control" name="password">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label">ตำแหน่ง</label>
										<div class="col-md-7">
<!---->										<select class="form-control" name="position">
												<option value="doctor">แพทย์</option>
												<option value="nurse">พยาบาล</option>
												<option value="pharmacist">เภสัชกร</option>
												<option value="officer">เจ้าหน้าที่</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12" style="text-align:center">
											<input type="submit" value="เข้าสู่ระบบ" class="btn btn-primary">
										</div>
									</div>
								</form>
								<div class="row" style="text-align:center"><a href="#">ลืมรหัสผ่าน</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</body>
</html>