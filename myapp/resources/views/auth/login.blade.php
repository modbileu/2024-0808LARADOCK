<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">
						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed bi-person"></i>
								<i class="accordion-open bi-check-circle-fill"></i>
							</div>
							    <div class="accordion-title">
								    登入帳號
							    </div>
						    </div>
						<div class="accordion-content">
							<form id="login-form" name="login-form" class="row mb-0" action="#" method="post">
								<div class="col-12 form-group">
									<label for="login-form-username">使用者:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">密碼:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<div class="d-flex justify-content-between">
										<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">登入</button>
										<a href="#">忘記密碼</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->
@endsection
