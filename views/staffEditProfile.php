<?php ob_start(); ?>

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
							<form class="form-horizontal" method="post" action="doctorEditProfile/editDoctorProfile">
								<div class="row">
									<div class="col-md-1"> </div>
									<div class="col-md-5"> <!--Left Side-->
										<div class="form-group" style="margin-top:15px">
											<label class="col-md-5 control-label">ชื่อ</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('name'); ?>" name="fname">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-5 control-label">วัน เดือนปี เกิด</label>
											<div class="col-md-7">
												<input type="date" class="form-control" value="<?php echo Session::get('birthdate'); ?>" name="birthdate" disabled>
											</div>
										</div>
										<!--div class="form-group">
											<label class="col-md-5 control-label">เลขประจำตัวประชาชน</label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="<?php echo Session::get('national_id'); ?>" name="nat_id" disabled>
											</div>
										</div-->
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
												<input type="text" class="form-control" value="<?php echo Session::get('surname'); ?>" name="lname">
											</div>
										</div>
										<!--div class="form-group">
											<label class="col-md-5 control-label">สัญชาติ</label>
											<div class="col-md-7">
												<select name="nationality">
													  <option value="">-- select one --</option>
													  <option value="afghan">Afghan</option>
													  <option value="albanian">Albanian</option>
													  <option value="algerian">Algerian</option>
													  <option value="american">American</option>
													  <option value="andorran">Andorran</option>
													  <option value="angolan">Angolan</option>
													  <option value="antiguans">Antiguans</option>
													  <option value="argentinean">Argentinean</option>
													  <option value="armenian">Armenian</option>
													  <option value="australian">Australian</option>
													  <option value="austrian">Austrian</option>
													  <option value="azerbaijani">Azerbaijani</option>
													  <option value="bahamian">Bahamian</option>
													  <option value="bahraini">Bahraini</option>
													  <option value="bangladeshi">Bangladeshi</option>
													  <option value="barbadian">Barbadian</option>
													  <option value="barbudans">Barbudans</option>
													  <option value="batswana">Batswana</option>
													  <option value="belarusian">Belarusian</option>
													  <option value="belgian">Belgian</option>
													  <option value="belizean">Belizean</option>
													  <option value="beninese">Beninese</option>
													  <option value="bhutanese">Bhutanese</option>
													  <option value="bolivian">Bolivian</option>
													  <option value="bosnian">Bosnian</option>
													  <option value="brazilian">Brazilian</option>
													  <option value="british">British</option>
													  <option value="bruneian">Bruneian</option>
													  <option value="bulgarian">Bulgarian</option>
													  <option value="burkinabe">Burkinabe</option>
													  <option value="burmese">Burmese</option>
													  <option value="burundian">Burundian</option>
													  <option value="cambodian">Cambodian</option>
													  <option value="cameroonian">Cameroonian</option>
													  <option value="canadian">Canadian</option>
													  <option value="cape verdean">Cape Verdean</option>
													  <option value="central african">Central African</option>
													  <option value="chadian">Chadian</option>
													  <option value="chilean">Chilean</option>
													  <option value="chinese">Chinese</option>
													  <option value="colombian">Colombian</option>
													  <option value="comoran">Comoran</option>
													  <option value="congolese">Congolese</option>
													  <option value="costa rican">Costa Rican</option>
													  <option value="croatian">Croatian</option>
													  <option value="cuban">Cuban</option>
													  <option value="cypriot">Cypriot</option>
													  <option value="czech">Czech</option>
													  <option value="danish">Danish</option>
													  <option value="djibouti">Djibouti</option>
													  <option value="dominican">Dominican</option>
													  <option value="dutch">Dutch</option>
													  <option value="east timorese">East Timorese</option>
													  <option value="ecuadorean">Ecuadorean</option>
													  <option value="egyptian">Egyptian</option>
													  <option value="emirian">Emirian</option>
													  <option value="equatorial guinean">Equatorial Guinean</option>
													  <option value="eritrean">Eritrean</option>
													  <option value="estonian">Estonian</option>
													  <option value="ethiopian">Ethiopian</option>
													  <option value="fijian">Fijian</option>
													  <option value="filipino">Filipino</option>
													  <option value="finnish">Finnish</option>
													  <option value="french">French</option>
													  <option value="gabonese">Gabonese</option>
													  <option value="gambian">Gambian</option>
													  <option value="georgian">Georgian</option>
													  <option value="german">German</option>
													  <option value="ghanaian">Ghanaian</option>
													  <option value="greek">Greek</option>
													  <option value="grenadian">Grenadian</option>
													  <option value="guatemalan">Guatemalan</option>
													  <option value="guinea-bissauan">Guinea-Bissauan</option>
													  <option value="guinean">Guinean</option>
													  <option value="guyanese">Guyanese</option>
													  <option value="haitian">Haitian</option>
													  <option value="herzegovinian">Herzegovinian</option>
													  <option value="honduran">Honduran</option>
													  <option value="hungarian">Hungarian</option>
													  <option value="icelander">Icelander</option>
													  <option value="indian">Indian</option>
													  <option value="indonesian">Indonesian</option>
													  <option value="iranian">Iranian</option>
													  <option value="iraqi">Iraqi</option>
													  <option value="irish">Irish</option>
													  <option value="israeli">Israeli</option>
													  <option value="italian">Italian</option>
													  <option value="ivorian">Ivorian</option>
													  <option value="jamaican">Jamaican</option>
													  <option value="japanese">Japanese</option>
													  <option value="jordanian">Jordanian</option>
													  <option value="kazakhstani">Kazakhstani</option>
													  <option value="kenyan">Kenyan</option>
													  <option value="kittian and nevisian">Kittian and Nevisian</option>
													  <option value="kuwaiti">Kuwaiti</option>
													  <option value="kyrgyz">Kyrgyz</option>
													  <option value="laotian">Laotian</option>
													  <option value="latvian">Latvian</option>
													  <option value="lebanese">Lebanese</option>
													  <option value="liberian">Liberian</option>
													  <option value="libyan">Libyan</option>
													  <option value="liechtensteiner">Liechtensteiner</option>
													  <option value="lithuanian">Lithuanian</option>
													  <option value="luxembourger">Luxembourger</option>
													  <option value="macedonian">Macedonian</option>
													  <option value="malagasy">Malagasy</option>
													  <option value="malawian">Malawian</option>
													  <option value="malaysian">Malaysian</option>
													  <option value="maldivan">Maldivan</option>
													  <option value="malian">Malian</option>
													  <option value="maltese">Maltese</option>
													  <option value="marshallese">Marshallese</option>
													  <option value="mauritanian">Mauritanian</option>
													  <option value="mauritian">Mauritian</option>
													  <option value="mexican">Mexican</option>
													  <option value="micronesian">Micronesian</option>
													  <option value="moldovan">Moldovan</option>
													  <option value="monacan">Monacan</option>
													  <option value="mongolian">Mongolian</option>
													  <option value="moroccan">Moroccan</option>
													  <option value="mosotho">Mosotho</option>
													  <option value="motswana">Motswana</option>
													  <option value="mozambican">Mozambican</option>
													  <option value="namibian">Namibian</option>
													  <option value="nauruan">Nauruan</option>
													  <option value="nepalese">Nepalese</option>
													  <option value="new zealander">New Zealander</option>
													  <option value="ni-vanuatu">Ni-Vanuatu</option>
													  <option value="nicaraguan">Nicaraguan</option>
													  <option value="nigerien">Nigerien</option>
													  <option value="north korean">North Korean</option>
													  <option value="northern irish">Northern Irish</option>
													  <option value="norwegian">Norwegian</option>
													  <option value="omani">Omani</option>
													  <option value="pakistani">Pakistani</option>
													  <option value="palauan">Palauan</option>
													  <option value="panamanian">Panamanian</option>
													  <option value="papua new guinean">Papua New Guinean</option>
													  <option value="paraguayan">Paraguayan</option>
													  <option value="peruvian">Peruvian</option>
													  <option value="polish">Polish</option>
													  <option value="portuguese">Portuguese</option>
													  <option value="qatari">Qatari</option>
													  <option value="romanian">Romanian</option>
													  <option value="russian">Russian</option>
													  <option value="rwandan">Rwandan</option>
													  <option value="saint lucian">Saint Lucian</option>
													  <option value="salvadoran">Salvadoran</option>
													  <option value="samoan">Samoan</option>
													  <option value="san marinese">San Marinese</option>
													  <option value="sao tomean">Sao Tomean</option>
													  <option value="saudi">Saudi</option>
													  <option value="scottish">Scottish</option>
													  <option value="senegalese">Senegalese</option>
													  <option value="serbian">Serbian</option>
													  <option value="seychellois">Seychellois</option>
													  <option value="sierra leonean">Sierra Leonean</option>
													  <option value="singaporean">Singaporean</option>
													  <option value="slovakian">Slovakian</option>
													  <option value="slovenian">Slovenian</option>
													  <option value="solomon islander">Solomon Islander</option>
													  <option value="somali">Somali</option>
													  <option value="south african">South African</option>
													  <option value="south korean">South Korean</option>
													  <option value="spanish">Spanish</option>
													  <option value="sri lankan">Sri Lankan</option>
													  <option value="sudanese">Sudanese</option>
													  <option value="surinamer">Surinamer</option>
													  <option value="swazi">Swazi</option>
													  <option value="swedish">Swedish</option>
													  <option value="swiss">Swiss</option>
													  <option value="syrian">Syrian</option>
													  <option value="taiwanese">Taiwanese</option>
													  <option value="tajik">Tajik</option>
													  <option value="tanzanian">Tanzanian</option>
													  <option value="thai">Thai</option>
													  <option value="togolese">Togolese</option>
													  <option value="tongan">Tongan</option>
													  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
													  <option value="tunisian">Tunisian</option>
													  <option value="turkish">Turkish</option>
													  <option value="tuvaluan">Tuvaluan</option>
													  <option value="ugandan">Ugandan</option>
													  <option value="ukrainian">Ukrainian</option>
													  <option value="uruguayan">Uruguayan</option>
													  <option value="uzbekistani">Uzbekistani</option>
													  <option value="venezuelan">Venezuelan</option>
													  <option value="vietnamese">Vietnamese</option>
													  <option value="welsh">Welsh</option>
													  <option value="yemenite">Yemenite</option>
													  <option value="zambian">Zambian</option>
													  <option value="zimbabwean">Zimbabwean</option>
													</select>
											</div>
										</div-->
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
											<label class="col-md-5 control-label">ยืนยันเปลี่ยนรหัสผ่าน</label>
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
								<a href="<?php echo URL; ?>doctorAppointment" class="btn btn-danger">ยกเลิก</a>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>