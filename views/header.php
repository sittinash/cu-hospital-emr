	<div class="col-md-3" style="text-align:center; margin-top:2%">
		<img src="<?php echo URL; ?>public/img/logo.png" height=13% width=60%>
	</div>
	<div class="col-md-6"></div>
	<div class="col-md-3" style="text-align:right; margin-top:4%">
		<div class="panel panel-default">
			<div class="panel-body" style="text-align:right">
			ยินดีต้อนรับ คุณ 
			<?php 

				print(Session::get('name')." ".Session::get('surname')); 
				print("</br>");

				$role = Session::get('role');
				if($role=="doctor"){
					print("สถานะ :  แพทย์"); 
				} else if($role=="officer") {
					print("สถานะ :  เจ้าหน้าที่"); 
				} else if($role=="nurse") {
					print("สถานะ :  พยาบาล"); 
				} else if($role=="pharmacist") {
					print("สถานะ :  เภสัชกร"); 
				}else if($role=="admin") {
					print("สถานะ :  ผู้ดูแลระบบ"); 
				}else if($role=="patient") {
					print("สถานะ :  ผู้ป่วย"); 
				}
				
			?>
			</div>
		</div>
	</div>