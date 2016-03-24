	<?php if($_SESSION["role"] == "patient") { ?>
		<div class="panel panel-info">
			<div class="panel-heading" style="text-align:center">
				<h3 class="panel-title">Menu</h3>
			</div>
			<?php $css="padding-bottom: 9px; margin: 5px 10px 9px; border-bottom: 1px solid #eeeeee;" ?>
			<div class="panel-body" style="text-align:left">
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>patientAppointment"><i class="glyphicon glyphicon-time"> รายการนัดพบแพทย์ </i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>patientMedicalRecord"><i class="glyphicon glyphicon-list-alt"> ประวัติการรักษา</i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>patientEditProfile"><i class="glyphicon glyphicon-edit"> แก้ไขข้อมูลส่วนตัว</i></a>
				</div>
				<?php $css="padding-bottom: 0px; margin: 5px 10px 9px; border-bottom: 0px solid #eeeeee;" ?>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>login/doLogout"><i class="glyphicon glyphicon-off"> ออกจากระบบ</i></a>
				</div>
			</div>
		</div>
	<?php } else if($_SESSION["role"] == "doctor") { ?>
		<div class="panel panel-info">
			<div class="panel-heading" style="text-align:center">
				<h3 class="panel-title">Menu</h3>
			</div>
			<?php $css="padding-bottom: 9px; margin: 5px 10px 9px; border-bottom: 1px solid #eeeeee;" ?>
			<div class="panel-body" style="text-align:left">
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>doctorAppointment"><i class="glyphicon glyphicon-time"> รายการนัดพบแพทย์ </i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffMedicalRecord"><i class="glyphicon glyphicon-list-alt"> ค้นหาประวัติการรักษา</i></a>
				</div>
				<!--div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>doctorCancelPatrol"><i class="glyphicon glyphicon-list-alt"> ยกเลิกการออกตรวจ</i></a>
				</div-->
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffEditProfile"><i class="glyphicon glyphicon-edit"> แก้ไขข้อมูลส่วนตัว</i></a>
				</div>
				<?php $css="padding-bottom: 0px; margin: 5px 10px 9px; border-bottom: 0px solid #eeeeee;" ?>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>login/doLogout"><i class="glyphicon glyphicon-off"> ออกจากระบบ</i></a>
				</div>
			</div>
		</div>
	<?php } else if($_SESSION["role"] == "pharmacist") { ?>
		<div class="panel panel-info">
			<div class="panel-heading" style="text-align:center">
				<h3 class="panel-title">Menu</h3>
			</div>
			<?php $css="padding-bottom: 9px; margin: 5px 10px 9px; border-bottom: 1px solid #eeeeee;" ?>
			<div class="panel-body" style="text-align:left">
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>pharmaPrescription"><i class="glyphicon glyphicon-time"> รายการใบสั่งยา </i></a>
				</div>
				<!--div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>pharmaSearchAllergy"><i class="glyphicon glyphicon-list-alt"> ค้นหาประวัติการแพ้ยา</i></a>
				</div-->
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffEditProfile"><i class="glyphicon glyphicon-edit"> แก้ไขข้อมูลส่วนตัว</i></a>
				</div>
				<?php $css="padding-bottom: 0px; margin: 5px 10px 9px; border-bottom: 0px solid #eeeeee;" ?>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>login/doLogout"><i class="glyphicon glyphicon-off"> ออกจากระบบ</i></a>
				</div>
			</div>
		</div>
	<?php } else if($_SESSION["role"] == "nurse") { ?>
		<div class="panel panel-info">
			<div class="panel-heading" style="text-align:center">
				<h3 class="panel-title">Menu</h3>
			</div>
			<?php $css="padding-bottom: 9px; margin: 5px 10px 9px; border-bottom: 1px solid #eeeeee;" ?>
			<div class="panel-body" style="text-align:left">
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>officerAppointment"><i class="glyphicon glyphicon-time"> รายการนัดพบแพทย์ </i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>nurseVitalSignReport"><i class="glyphicon glyphicon-time"> บันทึกผลการตรวจร่างกาย </i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffMedicalRecord"><i class="glyphicon glyphicon-list-alt"> ประวัติการรักษา</i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffEditProfile"><i class="glyphicon glyphicon-edit"> แก้ไขข้อมูลส่วนตัว</i></a>
				</div>
				<?php $css="padding-bottom: 0px; margin: 5px 10px 9px; border-bottom: 0px solid #eeeeee;" ?>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>login/doLogout"><i class="glyphicon glyphicon-off"> ออกจากระบบ</i></a>
				</div>
			</div>
		</div>
	<?php } else if($_SESSION["role"] == "officer") { ?>
		<div class="panel panel-info">
			<div class="panel-heading" style="text-align:center">
				<h3 class="panel-title">Menu</h3>
			</div>
			<?php $css="padding-bottom: 9px; margin: 5px 10px 9px; border-bottom: 1px solid #eeeeee;" ?>
			<div class="panel-body" style="text-align:left">
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>officerAppointment"><i class="glyphicon glyphicon-time"> รายการนัดพบแพทย์ </i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffMedicalRecord"><i class="glyphicon glyphicon-list-alt"> ประวัติการรักษา</i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>staffEditProfile"><i class="glyphicon glyphicon-edit"> แก้ไขข้อมูลส่วนตัว</i></a>
				</div>
				<?php $css="padding-bottom: 0px; margin: 5px 10px 9px; border-bottom: 0px solid #eeeeee;" ?>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>login/doLogout"><i class="glyphicon glyphicon-off"> ออกจากระบบ</i></a>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="panel panel-info">
			<div class="panel-heading" style="text-align:center">
				<h3 class="panel-title">Menu</h3>
			</div>
			<?php $css="padding-bottom: 9px; margin: 5px 10px 9px; border-bottom: 1px solid #eeeeee;" ?>
			<div class="panel-body" style="text-align:left">
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>patientAppointment"><i class="glyphicon glyphicon-time"> รายการนัดพบแพทย์ </i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>patientMedicalRecord"><i class="glyphicon glyphicon-list-alt"> ประวัติการรักษา</i></a>
				</div>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>patientEditProfile"><i class="glyphicon glyphicon-edit"> แก้ไขข้อมูลส่วนตัว</i></a>
				</div>
				<?php $css="padding-bottom: 0px; margin: 5px 10px 9px; border-bottom: 0px solid #eeeeee;" ?>
				<div style="<?php echo $css; ?>">
					<a href="<?php echo URL; ?>login/doLogout"><i class="glyphicon glyphicon-off"> ออกจากระบบ</i></a>
				</div>
			</div>
		</div>
	<?php } ?>
	