<?php #ob_start(); ?>

<!doctype html>
<html>
	<head>
		<title>CU EMR :: แก้ไขข้อมูลส่วนตัว</title>
		<?php include("configure.php"); ?>
	</head>
	<?php include("style2.php"); ?>
	<body>	
		<div class="container" style="background-color: white; border-left: 3px solid #5d5d5d; border-right: 3px solid #5d5d5d; height: 100%">
			<div class="row">
				<?php include("header.php"); ?>
			</div>
			<div class="row">
				<div class="col-md-3" style="text-align:center; margin-top:4%">
					<?php include("sidebar.php"); ?>
				</div>
				<div class="col-md-9" style="text-align:right; margin-top:4%">
					<div class="panel panel-success">
						<div class="panel-heading" style="text-align:center">
							<h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
						</div>
						<div class="panel-body" style="text-align:left">
							<form class="form-horizontal" method="post" action="declareEditPatientProfileSucceeds">
								<div class="row">
									<div class="col-md-1"> </div>
									<div class="col-md-5"> <!--Left Side-->
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">ชื่อ</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('name'); ?>" name="fname" disabled>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-5 control-label">วัน เดือนปี เกิด</label>
											<div class="col-md-7">
												<input type="date" class="form-control" value="<?php echo Session::get('birthdate'); ?>" name="birthdate" disabled>
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">บ้านเลขที่</label>
											<div class="col-md-7">
												<input type="text" class="form-control"  value="<?php echo Session::get('addrNo'); ?>" name="addr1">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">แขวง/ตำบล</label>
											<div class="col-md-7">
												<input type="text" class="form-control"  value="<?php echo Session::get('addrSubdistrict'); ?>" name="addr3">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">จังหวัด</label>
											<div class="col-md-7">
												<input type="text" class="form-control"  value="<?php echo Session::get('addrProvince'); ?>" name="addr5">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">เบอร์โทรศัพท์</label>
											<div class="col-md-7">
												<input type="text" class="form-control"  value="<?php echo Session::get('phoneNo'); ?>" name="tel">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">เปลี่ยนรหัสผ่าน</label>
											<div class="col-md-7">
												<input type="password" class="form-control" name="pass1">
											</div>
										</div>
									</div>
									<div class="col-md-5"> <!--Right side-->
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">นามสกุล</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('surname'); ?>" name="lname" disabled>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-5 control-label">ศาสนา</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('religion'); ?>" name="religion">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">ถนน</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('addrRoad'); ?>" name="addr2">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">เขต/อำเภอ</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('addrDistrict'); ?>" name="addr4">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">รหัสไปรษณีย์</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('addrPost'); ?>" name="addr6">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">อีเมลล์</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('email'); ?>" name="email">
											</div>
										</div>
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">ยืนยันรหัสผ่าน</label>
											<div class="col-md-7">
												<input type="password" class="form-control" name="pass2">
											</div>
										</div>
									</div>
									<div class="col-md-1"> </div>
								</div>
								<div class="row" style="text-align:center">
								<input type="submit" class="btn btn-info" value="บันทึก">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="<?php echo URL; ?>patientAppointment" class="btn btn-danger">ยกเลิก</a>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>