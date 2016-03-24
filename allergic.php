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
							<h3 class="panel-title">ประวัติการแพ้ยา</h3>
						</div>
						<div class="panel-body" style="text-align:left">
							<form class="form-inline" style="text-align: center">
								<div class="row">
									<div class="col-md-1"> </div>
									<div class="col-md-5"> <!--Left Side-->
										<div class="form-group">
											<label>ชื่อผู้ป่วย&nbsp;&nbsp;&nbsp;</label>
											<input type="text" class="form-control" value="xxxxx" disabled>
										</div>
									</div>
									<div class="col-md-5"> <!--Right Side-->
										<div class="form-group">
											<label>นามสกุล&nbsp;&nbsp;&nbsp;</label>
											<input type="text" class="form-control" value="xxxxx" disabled>
										</div>
									</div>
									<div class="col-md-1"> </div>
								</div>
								<br>
								<div class="table-responsive">
									<table class="table table-bordered"> <!-- Change class here -->
										<thead>
											<tr class="warning">
												<th style="text-align:center">ยาที่แพ้</th>
												<th style="text-align:center">บันทึกเมื่อ</th>
											</tr>
										</thead>
										<tbody>
											<tr style="text-align:center">
												<td>Aspirin</td>
												<td>23 สิงหาคม 2558</td>
											</tr>
											<tr style="text-align:center">
												<td>Paracetamol</td>
												<td>31 พฤศจิกายน 2558</td>											
											</tr>	
										</tbody>
									</table>
								</div>
								<?php //if($_SESSION["role"] == "doctor") { ?>
									<div class="row">
										<div class="form-group">
											<label>เพิ่มยาที่แพ้</label>
											<input type="text" class="form-control">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</div>
										<div class="form-group">
											<label>บันทึกเมื่อ</label>
											<input type="date" class="form-control" value="" disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary" value="เพิ่ม">
										</div>
									</div>
								<?php //} ?>
								<br>
								<div class="row" style="text-align:center">
									<a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>