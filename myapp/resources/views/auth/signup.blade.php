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
				<div class="container">
					<div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">
						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed bi-person"></i>
								<i class="accordion-open bi-check-circle-fill"></i>
							</div>
							<div class="accordion-title">
								新用戶:去註冊一個吧
							</div>
						</div>
						<div class="accordion-content">
							<form id="register-form" name="register-form" class="row mb-0" action="#" method="post">
								<div class="col-12 form-group">
									<label for="register-form-name">暱稱:</label>
									<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-email">email:</label>
									<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-username">密碼:</label>
									<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-phone">帳號類型:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control">
								</div>
								<div class="col-12 form-group">
									<button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">開始註冊</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->
@endsection