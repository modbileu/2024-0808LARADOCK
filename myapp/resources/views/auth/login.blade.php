<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 
@section('title',$title)
<!-- 傳送資料到母模板，並指定變數為 title --> 
<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
			@include('components.errorMessage')
				<div class="container">
					<div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">
						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed bi-person"></i>
								<i class="accordion-open bi-check-circle-fill"></i>
							</div>
							    <div class="accordion-title">
								    登入MyGreenShiled帳號
							    </div>
						    </div>
						<div>
							<form class="row" action="/user/auth/login" method="post">
								@csrf
								<div class="col-12 form-group">
									<label for="login-form-email">使用者信箱:</label>
									<input type="text" id="email" name="email" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">密碼:</label>
									<input type="password" id="password" name="password" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<div class="d-flex justify-content-between">
										<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">登入</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->
@endsection
