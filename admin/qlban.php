<script type="text/javascript" src="js/qlban.js">


</script>
<script src="js/jquery.cookie.js"></script>

<div class="infomation  hidden" id="exchange">
	<p><button type="button" id="setcookie" name="button"  ><i class="fas fa-exchange-alt" ></i> Về lại quản lý bàn</button></p>
</div>

<div class="table-responsive" id="mytable"> </div>
<div id="ordertable">
	<div class="col-lg-6 col-md-6 col-sm-12-col-xs-12 table-bordered order-table">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center"  <?php
					if(isset($_COOKIE['ban1'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="1">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 1
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center"  <?php
					if(isset($_COOKIE['ban2'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="2">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 2
			</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center"  <?php
					if(isset($_COOKIE['ban3'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="3">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 3
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center" <?php
					if(isset($_COOKIE['ban4'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="4">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 4
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
			<a href="javascript:void(0)" class="text-center" <?php
					if(isset($_COOKIE['ban5'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="5">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 5
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center" <?php
					if(isset($_COOKIE['ban6'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="6">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 6
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
			<a href="javascript:void(0)" class="text-center" <?php
					if(isset($_COOKIE['ban7'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="7">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 7
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
			<a href="javascript:void(0)" class="text-center"  <?php
					if(isset($_COOKIE['ban8'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="8">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 8
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center" <?php
					if(isset($_COOKIE['ban9'])) echo 'style="color: #2ecc71;"';


				 ?> onclick="startup(id);" id="9">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 9
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
			<a href="javascript:void(0)" class="text-center"  <?php
					if(isset($_COOKIE['ban10'])) echo 'style="color: #2ecc71; "';


				 ?> onclick="startup(id);" id="10">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 10
			</a>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >
			<a href="javascript:void(0)" class="text-center"  <?php
					if(isset($_COOKIE['ban11'])) echo 'style="color: #2ecc71; "';


				 ?>  onclick="startup(id);" id="11">
				<h3 class="glyphicon glyphicon-glass" ></h3><br/>Bàn 11
			</a>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				Do con cax !!

	</div>
</div>


<div class="detailtable hidden" id="detailtable">
			<div class="" id="result">

			</div>
			<div class="row">

				<div class="col-md-6 col-xs-12">
					<div class="em-profile">
						 <img align="left" class="em-image-lg" src="https://www.iotforall.com/wp-content/uploads/2017/08/background-Newsletter-Signup.png" alt="Profile image example"/>
						 <img align="left" class="em-image-profile thumbnail" src="https://cdn.iconscout.com/icon/free/png-256/avatar-369-456321.png" alt="Profile image example"/>
						 <div class="em-profile-text">
								 <h3>Admin</h3>
						 </div>
				 </div>
				<div class="infomation">
						<p>Bàn : <span id="ban"></span> </p>
						<p>Giờ vào : <span id="joindate"></span> </p>
						<p>Giờ ra  : <span id="leftdate"></span> </p>
				</div>
				<div class="infomation">
					<ul class="nav nav-tabs">
						<li>	<p><button type="button" onclick="startorder();" id="start" name="button"><i class="fas fa-play-circle"></i> Bắt đầu</button></p></li>
						<li>	<p>	<button type="button" onclick="endup();" id="end"  name="button" 	><i class="fas fa-stop" ></i> kết thúc</button></p></li>
						<li><p >	<button type="button" onclick="removedt();" name="button" ><i class="fas fa-ban"></i> Hủy bàn</button></p></li>
						<li class="dropdown">
							 <button class="dropdown-toggle" data-toggle="dropdown">Thêm
							 <span class="caret"></span></button>
							 <ul class="dropdown-menu">
								 <li><p>	<button type="button" name="button" id="chuyenban" data-toggle="modal" data-target="#myModal"><i class="fas fa-exchange-alt"></i>Chuyển bàn</button></p></li>
								 <li><p>	<button type="button" name="button" id="ghepban" data-toggle="modal" data-target="#myModal"><i class="fab fa-connectdevelop"></i>Ghép bàn</button></p></li>
							 </ul>
						 </li>
					</ul>
				</div>
				<div class="table-responsive">
					<table class="table table-sm" id="ordertab">
					  <thead>
					    <tr>
					      <th scope="col">ST</th>
					      <th scope="col">Tên hàng</th>
					      <th scope="col">Giá</th>
					      <th scope="col">Số lượng</th>
					      <th scope="col">Thành tiền</th>
					    </tr>
					  </thead>
					  <tbody id="databody">

					  </tbody>
			</table>
				</div>
				<div class="infomation ">
					 <ul class="nav nav-tabs text-center">
						 	<li >Tên hàng :	<input type="text" id="editqty" style=" text-align:center;" name="" value="" disabled="true"> | <button type="button" id="huymon" name="button">Hủy món</button></li>
					 	<li>
								<div class="input-group number-spinner">
								<span class="input-group-btn">
									<button id="sub" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="text-center" id="qtyvalue" value="1">
								<span class="input-group-btn">
									<button  data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</li>


					 </ul>
				</div>
				<div class="infomation mt-15">
			 		<p>	Thành tiền :<span id="totalbill">0</span></p>
					<p>	 Ghi chú: <span id="note"></span></p>
			 		<p>	Tổng giờ :	<span id="timesum">0</span></p>
			 		<p>	Khách đưa : <input type="text" name="" value=""> </p>
			 		<p>	Tiền thừa :&emsp;<input type="text" name="" value=""> </p>
			 		<p>	<button type="button" name="button"><i class="fas fa-file-export"></i>Xuất bill</button> </p>

				</div>

				</div>
				<div class="col-md-6 col-xs-12">
					<section class="forth-block mt-8p ">

						<div class="block-heading mt-15">
							<h1>Menu</h1>
						</div>

						<div class="row">
							<div class="menu-block">
								<div class="col-md-3 col-sm-3 col-xs-1 ">
									<ul class="nav nav-pills nav-stacked">
										<li class="active"><a data-toggle="tab" href="#All">All</a></li>
										<li><a data-toggle="tab" href="#Appetizers">Cafe</a></li>
										<li><a data-toggle="tab" href="#Soups">Sửa</a></li>
										<li><a data-toggle="tab" href="#Salads">Bánh mì</a></li>
										<li><a data-toggle="tab" href="#starters">Trà</a></li>
									</ul>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9 ">
									<div class="tab-content">
										<div id="All" class="tab-pane fade in active">
											<div class="row">
												<div class="col-md-12 ">
													<table class="table">
														<thead>
															<tr>
																<th scope="col">ID</th>
																<th scope="col">Đồ ăn</th>
																<th scope="col">Giá</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row">1</th>
																<td>
																	<label class="task">
																		<input type="checkbox" class="mainlist" name="checkbox" data-ref="1" value="Phin sửa nóng|20000">
																		<i class="fas fa-check"></i>
																		<span class="text">Phin sửa nóng</span>
																	</label></td>
																<td>20000</td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td>
																	<label class="task">
																		<input type="checkbox"  class="mainlist" name="checkbox" data-ref="2" value="Freeze trà xanh|23000">
																		<i class="fas fa-check"></i>
																		<span class="text">Freeze trà xanh</span>
																	</label></td>
																<td>23000</td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td>
																	<label class="task">
																		<input type="checkbox" class="mainlist" name="checkbox" data-ref="3" value="Caramel phin cafe|29000">
																		<i class="fas fa-check"></i>
																		<span class="text">Caramel phin cafe</span>
																	</label></td>
																<td>29000</td>
															</tr>

														</tbody>
													</table>
												</div>

											</div>
										</div>
										<div id="Appetizers" class="tab-pane fade">
											<div class="row">

											</div>
										</div>
										<div id="Salads" class="tab-pane fade">
											<div class="row">

											</div>
										</div>
										<div id="starters" class="tab-pane fade">
											<div class="row">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				</section>
		</div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="titlemd"></h4>
        </div>
        <div class="modal-body">
					<select id="optional">
						<?php
							for($i=1;$i<12;$i++){
								echo' <option value="ban'.$i.'">Bàn '.$i.'</option>';
							}
						 ?>

				</select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal" id="confirm">Xác nhận</button>
        </div>
      </div>
    </div>
  </div>
</div>
