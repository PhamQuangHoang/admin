<script type="text/javascript">
$(document).on('click', '.number-spinner button', function () {
var btn = $(this),
	oldValue = btn.closest('.number-spinner').find('input').val().trim(),
	newVal = 0;

if (btn.attr('data-dir') == 'up') {
	newVal = parseInt(oldValue) + 1;
} else {
	if (oldValue > 1) {
		newVal = parseInt(oldValue) - 1;
	} else {
		newVal = 1;
	}
}
btn.closest('.number-spinner').find('input').val(newVal);
});
</script>
<div class="detailtable" id="detailtable">
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
				<p>Bàn : <span id="">1123</span> </p>
				<p>Giờ vào : <span id="">1123</span> </p>
				<p>Giờ ra  : <span id="">1123</span> </p>
		</div>
		<div class="infomation">
			<ul class="nav nav-tabs">
				<li>	<p><button type="button" name="button"><i class="fas fa-play-circle"></i> Bắt đầu</button></p></li>
				<li>	<p>	<button type="button" name="button"><i class="fas fa-stop"></i> kết thúc</button></p></li>
				<li><p>	<button type="button" name="button"><i class="fas fa-ban"></i> Hủy bàn</button></p></li>
				<li class="dropdown">
					 <button class="dropdown-toggle" data-toggle="dropdown">Thêm
					 <span class="caret"></span></button>
					 <ul class="dropdown-menu">
						 <li><p>	<button type="button" name="button"><i class="fas fa-exchange-alt"></i>Chuyển bàn</button></p></li>
						 <li><p>	<button type="button" name="button"><i class="fab fa-connectdevelop"></i>Ghép bàn</button></p></li>
						 <li><p>	<button type="button" name="button"><i class="fas fa-minus-square"></i>Tách bàn</button></p></li>
					 </ul>
				 </li>
			</ul>
		</div>
		<div class="table-responsive">
			<table class="table table-sm ">
			  <thead>
			    <tr>
			      <th scope="col">ST</th>
			      <th scope="col">Tên hàng</th>
			      <th scope="col">Giá</th>
			      <th scope="col">Số lượng</th>
			      <th scope="col">Thành tiền</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr style="cursor:pointer;">
			      <th scope="row">1</th>
			      <td>Trà sửa</td>
			      <td>299999</td>
			      <td>1</td>
			      <td>200000</td>
			    </tr>

			  </tbody>
	</table>
		</div>
		<div class="infomation ">




			 <ul class="nav nav-tabs text-center">
				 	<li >Tên hàng :	<input type="text"  style=" text-align:center;" name="" value="Trà sửa" disabled="true"></li>
			 	<li>
						<div class="input-group number-spinner">
						<span class="input-group-btn">
							<button  data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
						</span>
						<input type="text" class="text-center" value="1">
						<span class="input-group-btn">
							<button  data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
						</span>
					</div>
				</li>


			 </ul>
		</div>
		<div class="infomation mt-15">
	 		<p>	Thành tiền :	<span>123123123</span></p>
	 		<p>	Tổng giờ :	<span>123123123</span></p>
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
																<input type="checkbox">
																<i class="fas fa-check"></i>
																<span class="text">Go to school</span>
															</label></td>
														<td>290000</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>
															<label class="task">
																<input type="checkbox">
																<i class="fas fa-check"></i>
																<span class="text">Go to school</span>
															</label></td>
														<td>290000</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>
															<label class="task">
																<input type="checkbox">
																<i class="fas fa-check"></i>
																<span class="text">Go to school</span>
															</label></td>
														<td>290000</td>
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
