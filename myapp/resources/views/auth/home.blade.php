@extends('layout.master')

@section('content')
<section id="content">

			<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background:  url('{{ asset('assets/greenforever/ocean.png')}}') center right no-repeat; background-size: cover;">
				<div class="slider-inner">

					<div class="vertical-middle">
						<div class="container py-5">
							<div class="emphasis-title dark m-0">

								<h2 style="font-size: 40px; line-height: 1.4; font-weight: 600; text-shadow: 1px 1px 1px rgba(0, 100, 0, 1);">「選擇綠盾塗料，您不僅獲得無毒的健康油漆，也支持我們的 ESG 原則，讓我們共同推動環境保護和社會責任，為未來創造更美好的世界。」</h2><br>
								<p class="fw-light d-none d-md-block" style="font-size: 16px; opacity: .7; text-shadow: 1px 1px 1px rgba(0, 0, 255, 1);">綠盾塗料，為環保而生，守護家園的每一面牆。</p>

							</div>
						</div>
					</div>

				</div>
			</section>
			<div class="content-wrap pt-0">
		
				<div class="section m-0" style="background-color: #eef2f5;">
					<div class="container">

						<div class="heading-block text-center border-bottom-0 mb-5 mt-4 mx-auto" style="max-width: 640px">
							<h1 class="text-transform-none font-secondary fw-normal" style="font-size: 50px;">公司宗旨:</h1>
							<span><p>我們公司的宗旨為:讓顧客使用 <strong>最安全</strong>, <strong>無毒</strong> &amp; <strong>無添加</strong> 的健康油漆。</p></span>
						</div>

						<!-- Features colomns
						============================================= -->
						<div class="row align-items-stretch g-4">
							@foreach ($MerchandisePaginate as $Merchandise)	
								<div class="col-lg-3 col-md-6">
									<div class="feature-box media-box fbox-bg h-100">
										<div class="fbox-media">
											<a href="{{ route('merchandise.thing', ['merchandise_id' => $Merchandise->id]) }}"><img src="{{ asset($Merchandise->photo) }}" alt="{{ $Merchandise->name }}"></a>
										</div>
										<div class="fbox-content border-0">
											<h3 class="text-transform-none ls-0 fw-semibold">{{$Merchandise->name}}<span class="subtitle fw-light ls-0">{{ $Merchandise->introduction }}</span></h3>
											<a href="{{ route('merchandise.thing', ['merchandise_id' => $Merchandise->id]) }}" class="button-link border-0 color">閱讀更多</a>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>

				<div class="section mb-0">
					<div class="heading-block text-center border-bottom-0 mb-0 mx-auto" style="max-width: 640px">
						<h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">我們的產品圖示</h3>
						<span>我們永遠致力於，建築物防水堵漏、節能隔熱、自潔抗污、硬化地坪等需求，提供最完整的解決方案。</span>
					</div>
				</div>

				<div class="masonry-thumbs row row-cols-6 grid-container" data-big="3" data-lightbox="gallery">
					@foreach ($MerchandisePaginate as $Merchandise)
						<a class="grid-item" href="{{ asset($Merchandise->photo) }}" data-lightbox="gallery-item">
							<div class="grid-inner">
								<img src="{{ asset($Merchandise->photo) }}" alt="Gallery Thumb 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark">
										<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
						</a>
					@endforeach
				</div>

				<div class="section m-0 bg-transparent">
					<div class="container">
						<div class="heading-block text-center border-bottom-0 mx-auto" style="max-width: 640px">
							<h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">我們的產品價格</h3>
							<span>以我們對顧客的尊敬，為了讓顧客省下更多的錢。我們將會以最為低廉的價格賣給客戶品質最好的產品</span>
						</div>
						<div class="row mt-5">
							<div class="col-lg-5 d-none d-lg-block">
								<img src="{{ asset('assets/greenforever/forever.png')}}" alt="Dogs">
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="row">
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="{{ asset('assets/greensheiled/p916_01_0.png')}}" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc text-center">
												<div class="product-title"><h3><a href="#">P-916 磁磚專用接著底漆</a></h3></div>
												<div class="product-price"><ins>請來電電洽</ins></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="{{ asset('assets/greensheiled/p731_0.png')}}" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc text-center">
												<div class="product-title"><h3><a href="#">P-617 水性彩色彈性防水膠</a></h3></div>
												<div class="product-price"><ins>請來電電洽</ins></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="{{ asset('assets/greensheiled/p617_0.png')}}" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc text-center">
												<div class="product-title"><h3><a href="#">P-617 水性彩色彈性防水膠</a></h3></div>
												<div class="product-price"><ins>請來電電洽</ins></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container mt-6">
					<div class="heading-block text-center border-bottom-0 mx-auto" style="max-width: 640px">
						<h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">我們的經銷商</h3>
						<span>下列為我們的經銷商地址</span>
					</div>
					<div class="row contact-properties">
						<div class="col-md-4">
						<a href="https://maps.app.goo.gl/g9vmJ1skviVbisau9" style="background: url('{{ asset('assets/shop/shop1.jpg')}}') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark text-center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize fw-normal font-secondary">昌來油漆防水工程行</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											拜訪地址:<br>
											80755高雄市三民區同盟一路69號
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="https://maps.app.goo.gl/hntJxCSL7KLW9vNw5" style="background: url('{{ asset('assets/shop/shop2.jpg')}}') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark text-center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize fw-normal font-secondary">高雄光揚油漆行</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											拜訪地址:<br>
											807高雄市三民區九如一路197號
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="https://maps.app.goo.gl/mQ9XUL8WFZREz8vVA" style="background: url('{{ asset('assets/shop/shop3.jpg')}}') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark text-center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize fw-normal font-secondary">陽光油漆行</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											拜訪地址:<br>
											807高雄市三民區金鼎路299號
										</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->
 @endsection

		