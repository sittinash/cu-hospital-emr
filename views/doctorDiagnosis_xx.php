<!doctype html>
<html>
	<head>
		<title>CH EMR :: ประวัติการรักษา</title>
		<?php include("configure.php"); ?>
	</head>
	<?php include("style2.php"); ?>
	<body>	
		<script>
			function showVitalPanel() 
			{ 
				document.getElementById('vitalPanel').style.display='block'; 
				document.getElementById('diagnosisPanel').style.display='none'; 
				document.getElementById('prescriptionPanel').style.display='none'; 
				return false;
			} 
			function showDiagnosisPanel() 
			{ 
				document.getElementById('vitalPanel').style.display='none'; 
				document.getElementById('diagnosisPanel').style.display='block'; 
				document.getElementById('prescriptionPanel').style.display='none'; 
				return false;
			}
			function showPrescriptionPanel() 
			{ 
				document.getElementById('vitalPanel').style.display='none'; 
				document.getElementById('diagnosisPanel').style.display='none'; 
				document.getElementById('prescriptionPanel').style.display='block'; 
				return false;
			}
			
		</script>
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
							<h3 class="panel-title">ประวัติการรักษา</h3>
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
													<input type="text" class="form-control" value="<?php echo Session::get('medicalRecordInfoArr')['name']; ?>" disabled>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-5 control-label">วันที่</label>
												<div class="col-md-7">
													<input type="date" class="form-control" value="<?php echo Session::get('medicalRecordInfoArr')['appoint_date']; ?>" disabled>
												</div>
											</div>
										</div>
										<div class="col-md-5"> <!--Right side-->
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-5 control-label">นามสกุล</label>
												<div class="col-md-7">
													<input type="text" class="form-control" value="<?php echo Session::get('medicalRecordInfoArr')['surname']; ?>" disabled>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-5 control-label">เวลา</label>
												<div class="col-md-7">
													<input type="text" class="form-control" value="<?php 
														if(Session::get('medicalRecordInfoArr')['appoint_time'] == 0)
															echo '9:30';
														else 
															echo '13:00';
													?>" disabled>
												</div>
											</div>
										</div>
										<div class="col-md-1"> </div>
									</div>
									<div class="row" id="diagnosisPanel">
									<form method="post" action="specialDiagnosis">
										<div class="col-md-1"> </div>
										<div class="col-md-10">
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">โรค</label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="disease" value="<?php echo Session::get('medicalRecordInfoArr')['disease']; ?>"ำ>
												</div>
											</div>
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">อาการผู้ป่วย</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" name="patientCondition" maxlength=255><?php echo Session::get('medicalRecordInfoArr')['patient_condition']; ?></textarea>
												</div>
											</div>
											<!--div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">แนวทางแก้ไข</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" maxlength=255 disabled></textarea>
												</div>
											</div-->
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">ผลการวินิจฉัย</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" name="diagnosis" maxlength=255><?php echo Session::get('medicalRecordInfoArr')['diagnosis']; ?></textarea>
												</div>
											</div>
											<div class="form-group" style="margin-top:15px">
												<label class="col-md-2 control-label">หมายเหตุ</label>
												<div class="col-md-10">
													<textarea class="form-control" style="resize: none;" rows="2" name="remark" maxlength=255><?php echo Session::get('medicalRecordInfoArr')['remark']; ?></textarea>
												</div>
											</div>
										</div>
										<div class="col-md-1"> </div>
									</form>
									</div>
									<div class="row" id="vitalPanel" style="display:none">
										<form class="form-horizontal">
											<div class="row">
												<div class="col-md-1"> </div>
												<div class="col-md-5"> <!--Left Side-->
													<div class="form-group">
														<label class="col-md-5 control-label">น้ำหนัก</label>
														<div class="col-md-7">
															<input type="text" class="form-control" value="<?php echo Session::get('vitalSignReportInfoArr')['rpt_weight']; ?>" disabled>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control-label">ความดันโลหิต</label>
														<div class="col-md-7">
															<input type="text" class="form-control" value="<?php echo Session::get('vitalSignReportInfoArr')['rpt_min_pressure']; ?>/<?php echo Session::get('vitalSignReportInfoArr')['rpt_max_pressure']; ?> มม.ปรอท" disabled>
														</div>
													</div>
												</div>
												<div class="col-md-5"> <!--Right side-->
													<div class="form-group">
														<label class="col-md-5 control-label">ส่วนสูง</label>
														<div class="col-md-7">
															<input type="text" class="form-control" value="<?php echo Session::get('vitalSignReportInfoArr')['rpt_height']; ?> ซม." disabled>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control-label">อุณหภูมิร่างกาย</label>
														<div class="col-md-7">
															<input type="text" class="form-control" value="<?php echo Session::get('vitalSignReportInfoArr')['rpt_termo']; ?> องศาเซลเซียส" disabled>
														</div>
													</div>
												</div>
												<div class="col-md-1"> </div>
											</div>
											<div class="row">
												<div class="col-md-1"> </div>
												<div class="col-md-10">
													<div class="form-group">
														<label class="col-md-3 control-label">อัตราการเต้นหัวใจ</label>
														<div class="col-md-9">
															<input type="text" class="form-control" value="HR <?php echo Session::get('vitalSignReportInfoArr')['rpt_pulse']; ?> bpm" disabled>
														</div>
													</div>
													<div class="form-group" style="margin-top:15px">
														<label class="col-md-3 control-label">อาการนำ</label>
														<div class="col-md-9">
															<textarea class="form-control" style="resize: none;" rows="2" maxlength=255 disabled><?php echo Session::get('vitalSignReportInfoArr')['rpt_precondition']; ?></textarea>
														</div>
													</div>
													<div class="form-group" style="margin-top:15px">
														<label class="col-md-3 control-label">หมายเหตุ</label>
														<div class="col-md-9">
															<textarea class="form-control" style="resize: none;" rows="2" maxlength=255 disabled><?php echo Session::get('vitalSignReportInfoArr')['rpt_remark']; ?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-1"> </div>
											</div>
										</form>
									</div>
									<div class="table-responsive" id="prescriptionPanel" style="display:none">
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
													<?php
														$i = 0;
														if(empty(Session::get('prescriptionInfoArr')))
															$c = 0;
														else
															$c = count(Session::get('prescriptionInfoArr'));

														#Verify::alert($_POST['medicalRecordToBeViewed'].' '.$c);
														#print_r(Session::get('prescriptionInfoArr'));
														
														while($i < $c) { 
													?>
													<tr style="text-align:center">
														<td>
															<div class="form-group">
																<input type="text" class="form-control" value="<?php echo Session::get('prescriptionInfoArr')[$i]['drug_name']; ?>" disabled>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text" class="form-control" value="<?php 
																if(Session::get('prescriptionInfoArr')[$i]['drug_type'] == 0)
																	echo 'ยาใช้ภายใน';
																else 
																	echo 'ยาใช้ภายนอก'; 
																?>" disabled>
															</div>
														</td>
														<td style="vertical-align: middle">
															<div class="checkbox">
																<input type="checkbox" name="morning" <?php 
																if(Session::get('prescriptionInfoArr')[$i]['druglist_morn'] == 1)
																	echo 'checked';
																?> disabled>
															</div>
														</td>
														<td style="vertical-align: middle">
															<div class="checkbox">
																<input type="checkbox" name="noon" <?php 
																if(Session::get('prescriptionInfoArr')[$i]['druglist_noon'] == 1)
																	echo 'checked';
																?> disabled>
															</div>
														</td>
														<td style="vertical-align: middle">
															<div class="checkbox">
																<input type="checkbox" name="evening" <?php 
																if(Session::get('prescriptionInfoArr')[$i]['druglist_even'] == 1)
																	echo 'checked';
																?> disabled>
															</div>
														</td>
														<td style="vertical-align: middle">
															<div class="checkbox">
																<input type="checkbox" name="night" <?php 
																if(Session::get('prescriptionInfoArr')[$i]['druglist_nigh'] == 1)
																	echo 'checked';
																?> disabled>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number" class="form-control" style="width:60px" value="<?php echo Session::get('prescriptionInfoArr')[$i]['drug_quantity']; ?>" disabled>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text" class="form-control" style="width:60px" value="<?php echo Session::get('prescriptionInfoArr')[$i]['drug_unit']; ?>" disabled>
															</div>
														</td>
													</tr>
													<?php 
														$i++;
													}?>	
												</tbody>
											</table>
										</form>
									</div>
								</form>
								<center>
									<a onclick="return showVitalPanel();" class="btn btn-info">ผลการตรวจร่างกาย</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a onclick="return showDiagnosisPanel();" class="btn btn-warning">ผลการวินิจฉัย</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a onclick="return showPrescriptionPanel();" class="btn btn-success">รายการยาที่จ่าย</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="./doctorAppointment" class="btn btn-danger">ยืนยัน</a>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>