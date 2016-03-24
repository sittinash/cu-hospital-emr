<!doctype html>
<html>
	<head>
		<title>CH EMR :: จองเวลา</title>
		<?php include("configure.php"); ?>
	</head>
	<?php include("style3.php"); ?>
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
							<h3 class="panel-title">จองเวลาพบแพทย์</h3>
						</div>
						<div class="panel-body" style="text-align:left">
							<div class="row">
								<div class="col-md-1"> </div>
								<form class="form-inline">
									<div class="col-md-10">
										<div class="form-group">
											<label>ชื่อแพทย์ที่ต้องการพบ</label>
											<input type="text" class="form-control" >
										</div>
										<div class="form-group">
											<label>แผนกที่ต้องการพบ</label>
											<select class="form-control">
												<option>แผนกศัลยกรรม</option>
												<option>แผนกอายุรกรรม</option>
											</select>
										</div>
										<div class="form-group">
											<button class="btn btn-success" type="button">ค้นหา</button>
										</div>
									</div>
								</form>
								<div class="col-md-1"> </div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-10">
									<div class="table-responsive">
										<table class="table table-hover table-bordered"> <!-- Change class here -->
											<thead>
												<tr class="warning">
													<th colspan=7 style="text-align:center">เดือน พฤศจิกายน 2558</th>
												</tr>
											</thead>
											<tbody>
												<tr style="text-align:center">
													<td>อา.</td>
													<td>จ.</td>
													<td>อ.</td>
													<td>พ.</td>
													<td>พฤ.</td>
													<td>ศ.</td>
													<td>ส.</td>
												</tr>
												<tr style="text-align:center">
													<td>1</td>
													<td>2</td>
													<td class="success">3<br>
														<div class="checkbox">
															<input type="checkbox" name="checkbox"> เช้า
														</div>
														<div class="checkbox">
															<input type="checkbox" name="checkbox"> บ่าย
														</div>
													</td>
													<td>4</td>
													<td>5</td>
													<td class="success">6<br>
														<div class="checkbox">
															<input type="checkbox" name="checkbox"> เช้า
														</div>
														<div class="checkbox">
															<input type="checkbox" name="checkbox"> บ่าย
														</div>
													</td>
													<td>7</td>
												</tr>
												<tr style="text-align:center">
													<td>8</td>
													<td>9</td>
													<td class="success">10<br>
														<div class="checkbox">
															<input type="checkbox" name="checkbox"> เช้า
														</div>
														<div class="checkbox">
															<input type="checkbox" name="checkbox"> บ่าย
														</div>
													</td>
													<td>11</td>
													<td>12</td>
													<td class="danger">13</td>
													<td>14</td>
												</tr>
												<tr style="text-align:center">
													<td>15</td>
													<td>16</td>
													<td class="danger">17</td>
													<td>18</td>
													<td>19</td>
													<td class="danger">20</td>
													<td>21</td>
												</tr>
												<tr style="text-align:center">
													<td>22</td>
													<td>23</td>
													<td class="danger">24</td>
													<td>25</td>
													<td>26</td>
													<td class="danger">27</td>
													<td>28</td>
												</tr>
												<tr style="text-align:center">
													<td>29</td>
													<td>30</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-1"> </div>
							</div>
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-10">
									<h6>คำแนะนำ : ระบุชื่อแพทย์หรือแผนกที่ต้องการพบอย่างน้อยหนึ่งช่อง</h6>
									<center><a href="#" class="btn btn-info"> ยืนยัน </a></center>
								</div>
								<div class="col-md-1"> </div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>