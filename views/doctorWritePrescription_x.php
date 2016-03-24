<!doctype html>
<html>
	<head>
		<title>CU EMR :: เขียนใบสั่งยา</title>
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
							<h3 class="panel-title">เขียนใบสั่งยา</h3>
						</div>
						<div class="panel-body" style="text-align:left">
							<form class="form-inline" style="text-align: center">
								<div class="row">
									<div class="col-md-1"> </div>
									<div class="col-md-5"> <!--Left Side-->
										<div class="form-group">
											<label>ชื่อผู้ป่วย&nbsp;&nbsp;&nbsp;</label>
											<input type="text" class="form-control" value="แสงพรหมพินิจ" disabled>
										</div>
									</div>
									<div class="col-md-5"> <!--Right Side-->
										<div class="form-group">
											<label>นามสกุล&nbsp;&nbsp;&nbsp;</label>
											<input type="text" class="form-control" value="สงวนชาติ" disabled>
										</div>
									</div>
									<div class="col-md-1"> </div>
								</div>
								<br>
								<div class="table-responsive">
									<form class="form">
										<table class="table"> <!-- Change class here -->
											<thead>
												<tr>
													<th rowspan="2" style="text-align:center; vertical-align: middle">ชื่อยา</th>
													<th rowspan="2" style="text-align:center; vertical-align: middle">ประเภท</th>
													<th colspan="4" style="text-align:center; vertical-align: middle">ช่วงเวลาที่ใช้</th>
													<th rowspan="2" style="text-align:center; vertical-align: middle">จำนวน</th>
													<th rowspan="2" style="text-align:center; vertical-align: middle">หน่วย</th>
												</tr>
												<tr>
													<th style="text-align:center">เช้า</th>
													<th style="text-align:center">กลางวัน</th>
													<th style="text-align:center">เย็น</th>
													<th style="text-align:center">ก่อนนอน</th>
												</tr>
											</thead>
											<tbody>
												<tr style="text-align:center">
													<td>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ยาภายใน">ยาภายใน</option>
																<option value="ยาภายนอก">ยาภายนอก</option>
															</select>
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="morning">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="noon">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="evening">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="night">
														</div>
													</td>
													<td>
														<div class="form-group">
															<input type="number" class="form-control" style="width:60px">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ขวด">ขวด</option>
																<option value="แผง">แผง</option>
																<option value="เม็ด">เม็ด</option>
															</select>
														</div>
													</td>
												</tr>
												<tr style="text-align:center">
													<td>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ยาภายใน">ยาภายใน</option>
																<option value="ยาภายนอก">ยาภายนอก</option>
															</select>
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="morning">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="noon">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="evening">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="night">
														</div>
													</td>
													<td>
														<div class="form-group">
															<input type="number" class="form-control" style="width:60px">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ขวด">ขวด</option>
																<option value="แผง">แผง</option>
																<option value="เม็ด">เม็ด</option>
															</select>
														</div>
													</td>
												</tr>
												<tr style="text-align:center">
													<td>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ยาภายใน">ยาภายใน</option>
																<option value="ยาภายนอก">ยาภายนอก</option>
															</select>
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="morning">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="noon">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="evening">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="night">
														</div>
													</td>
													<td>
														<div class="form-group">
															<input type="number" class="form-control" style="width:60px">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ขวด">ขวด</option>
																<option value="แผง">แผง</option>
																<option value="เม็ด">เม็ด</option>
															</select>
														</div>
													</td>
												</tr>
												<tr style="text-align:center">
													<td>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ยาภายใน">ยาภายใน</option>
																<option value="ยาภายนอก">ยาภายนอก</option>
															</select>
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="morning">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="noon">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="evening">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="night">
														</div>
													</td>
													<td>
														<div class="form-group">
															<input type="number" class="form-control" style="width:60px">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ขวด">ขวด</option>
																<option value="แผง">แผง</option>
																<option value="เม็ด">เม็ด</option>
															</select>
														</div>
													</td>
												</tr>
												<tr style="text-align:center">
													<td>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ยาภายใน">ยาภายใน</option>
																<option value="ยาภายนอก">ยาภายนอก</option>
															</select>
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="morning">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="noon">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="evening">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="night">
														</div>
													</td>
													<td>
														<div class="form-group">
															<input type="number" class="form-control" style="width:60px">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ขวด">ขวด</option>
																<option value="แผง">แผง</option>
																<option value="เม็ด">เม็ด</option>
															</select>
														</div>
													</td>
												</tr>
												<tr style="text-align:center">
													<td>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ยาภายใน">ยาภายใน</option>
																<option value="ยาภายนอก">ยาภายนอก</option>
															</select>
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="morning">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="noon">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="evening">
														</div>
													</td>
													<td style="vertical-align: middle">
														<div class="checkbox">
															<input type="checkbox" name="night">
														</div>
													</td>
													<td>
														<div class="form-group">
															<input type="number" class="form-control" style="width:60px">
														</div>
													</td>
													<td>
														<div class="form-group">
															<select class="form-control">
																<option value="NULL"></option>
																<option value="ขวด">ขวด</option>
																<option value="แผง">แผง</option>
																<option value="เม็ด">เม็ด</option>
															</select>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</form>
								</div>
								<div class="row" style="text-align:center">
									<a href="#" class="btn btn-primary">เสร็จสิ้น</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="<?php echo URL; ?>doctorDiagnosis" class="btn btn-danger">ยกเลิก</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>