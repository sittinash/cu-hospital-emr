<!doctype html>
<html>
	<head>
		<title>CH EMR :: หน้าหลัก</title>
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
							<h3 class="panel-title">บันทึกการวินิจฉัย</h3>
						</div>
						<div class="panel-body" style="text-align:left">
							<div>
								<form class="form-horizontal">
									<div class="row">
										<div class="col-md-1"> </div>
										<div class="col-md-5"> <!--Left Side-->
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-5 control-label">ชื่อ</label>
												<div class="col-md-7">
													<input type="text" class="form-control" value="แสงพรหมพินิจ" disabled>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-5 control-label">วันที่ให้การวินิจฉัย</label>
												<div class="col-md-7">
													<input type="date" class="form-control" value="2015-12-05" disabled>
												</div>
											</div>
										</div>
										<div class="col-md-5"> <!--Right side-->
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-5 control-label">นามสกุล</label>
												<div class="col-md-7">
													<input type="text" class="form-control" value="สงวนชาติ" disabled>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-5 control-label">เวลา</label>
												<div class="col-md-7">
													<input type="time" class="form-control" value="13:00" disabled>
												</div>
											</div>
										</div>
										<div class="col-md-1"> </div>
									</div>
									<div class="row">
										<div class="col-md-1"> </div>
										<div class="col-md-10">
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">รหัสโรค</label>
												<div class="col-md-10">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">อาการผู้ป่วย</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" maxlength=255></textarea>
												</div>
											</div>
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">แนวทางแก้ไข</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" maxlength=255></textarea>
												</div>
											</div>
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">ผลการวินิจฉัย</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" maxlength=255></textarea>
												</div>
											</div>
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">หมายเหตุ</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" maxlength=255></textarea>
												</div>
											</div>
										</div>
										<div class="col-md-1"> </div>
									</div>
								</form>
								<center>
									<a href="#" class="btn btn-info">ดูประวัติการรักษา</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="<?php echo URL; ?>doctorAddAllergicRecord" class="btn btn-warning">เพิ่มประวัติการแพ้ยา</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="<?php echo URL; ?>doctorWritePrescription" class="btn btn-warning">เขียนใบสั่งยา</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="#" class="btn btn-primary">เสร็จสิ้น</a>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>