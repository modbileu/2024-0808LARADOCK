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
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/LB2.png')}}" alt="LB防水油漆"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">水性氯丁PU-防水材料<span class="subtitle fw-light ls-0">結合水性單液產品環保好操作特性並媲美聚脲材質膜性。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-030.png')}}" alt="P-036C水性PU防漏膠"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-036C水性PU防漏膠<span class="subtitle fw-light ls-0">主要成分係由國外引進物性極優良水性PU樹脂與進口天然橡膠， 防水性特強的乳化瀝青經改質而成的共縮合物。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-080.png')}}" alt="P-628 厚塗型彩色水性PU"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-628 厚塗型彩色水性PU<span class="subtitle fw-light ls-0">P-628彩色水性PU是以高分子材料為主要原料，是一種高彈性、水乳性、冷施工、單組分的防水塗料。該塗料固化成膜後能形成一種橡膠狀的彈性體，並且有優異的拉伸強度、延伸性及不透水性，而且色彩鮮豔、無毒、無味、無腐蝕性、不易燃燒。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-090.png')}}" alt="P-022C 水性防吐白底漆"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-022C 水性防吐白底漆<span class="subtitle fw-light ls-0">係本公司針對目前市場需求，並以革新科技所研發成功的水性乙烯防吐白底漆，特別是和鹼性水泥砂漿底材接著與封孔，也可作為外牆粗坯後、貼磁磚前，粗坯面的吐白華防治。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-226.png')}}" alt="P-226 單液型油性透明防水膠"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-226 單液型油性透明防水膠<span class="subtitle fw-light ls-0">P-226單液型油性透明防水膠，係耐黃變型油性聚胺酯類，壓克力等高分子共聚合的外牆透明塗料，具高滲透能力與高光澤性，可在牆面形成連續無縫的無色透明膜，而達到防水防滲效果。另有P-226-1，P-226-2系列產品。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-255.png')}}" alt="P-255 單液型彈泥"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-255 單液型彈泥<span class="subtitle fw-light ls-0">P-255係以高分子丙烯樹脂與特殊無機骨材和其它化學成分所研製而成的高彈性、高接著力的單液型彈泥，膜性強韌具有優越的底層追蹤性。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-800.png')}}" alt="P-800 逆轉滲"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-800 逆轉滲<span class="subtitle fw-light ls-0">P-800係水性無溶劑的乳霜型滲透劑，可逆滲入混凝土數公分以上（滲入深度依水泥含量有異）。可以長效維護外觀及預防壁癌產生，而不影響建物的物理性能（如透氣性），並可防止建物藻類、苔蘚等微生物的滋生污染。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/P-999.png')}}" alt="P-999 節能漆"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-999 節能漆<span class="subtitle fw-light ls-0">本產品為多功能性建築外觀面漆，添加最新奈米航太科技材料，具防水、隔熱、自潔、消音、節能等全方位功效，讓建築物保護力提升，能減少維護成本且符合ESG環保精神，為劃時代全效塗料產品。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/p617_0.png')}}" alt="P-617 水性彩色彈性防水膠"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-617 水性彩色彈性防水膠<span class="subtitle fw-light ls-0">P-617彩色彈性防水膠是以高分子材料為主原料，本產品是一種高彈性、單組分的防水塗料，該塗料固化成膜後能形成一種橡膠狀的彈性體，並且有優異的拉伸強度、延伸性及不透水性，而且色彩鮮艷、無味、無腐蝕性、不易燃燒。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/p731_0.png')}}" alt="P-731自潔型防水隔熱彈性漆"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-731自潔型防水隔熱彈性漆<span class="subtitle fw-light ls-0">係外牆防水塗料的突破性產品，主要以無機矽樹脂TiO2組成，具多功能性建築外觀面漆，可使被塗物具有防水、隔熱、自潔、保護、抗污等全面功效，讓建築物長保如新，延長使用壽命。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/p916_01_0.png')}}" alt="P-916 磁磚專用接著底漆"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">P-916 磁磚專用接著底漆<span class="subtitle fw-light ls-0">P-916係針對外牆磁磚、光滑面石材等無機材質，強化接著、附著能力所開發設計的透明有膜壓克力底漆。P-916的塗膜除了具有優良的附著性能外，更具有耐水和耐鹼的特性極適合用於外壁磁磚，再塗覆彈性防水膠時有超強力的接著，即使浸泡在水中亦有優異的接著能力，是外牆拉皮工程很適用的接著底漆。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="feature-box media-box fbox-bg h-100">
									<div class="fbox-media">
										<a href="#"><img src="{{ asset('assets/greensheiled/polyester_0.png')}}" alt="防水專用抗裂聚酯網"></a>
									</div>
									<div class="fbox-content border-0">
										<h3 class="text-transform-none ls-0 fw-semibold">防水專用抗裂聚酯網<span class="subtitle fw-light ls-0">防水專用抗裂聚酯網係含有芳香族酸形成脂鍵的線型高分子物纖維，比國內一般聚酯纖維的滲透性、抗裂性等物性皆高很多。</span></h3>
										<a href="#" class="button-link border-0 color">閱讀更多</a>
									</div>
								</div>
							</div>
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
					<a class="grid-item" href="{{ asset('assets/greensheiled/LB2.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/LB2.png')}}" alt="Gallery Thumb 1">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-030.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-030.png')}}" alt="Gallery Thumb 2">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-080.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-080.png')}}" alt="Gallery Thumb 3">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-090.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-090.png')}}" alt="Gallery Thumb 4">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-226.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-226.png')}}" alt="Gallery Thumb 5">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-255.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-255.png')}}" alt="Gallery Thumb 6">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-800.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-800.png')}}" alt="Gallery Thumb 7">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/P-999.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/P-999.png')}}" alt="Gallery Thumb 8">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/p617_0.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/p617_0.png')}}" alt="Gallery Thumb 9">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/p731_0.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/p731_0.png')}}" alt="Gallery Thumb 10">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/p916_01_0.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/p916_01_0.png')}}" alt="Gallery Thumb 11">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="{{ asset('assets/greensheiled/polyester_0.png')}}" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="{{ asset('assets/greensheiled/polyester_0.png')}}" alt="Gallery Thumb 12">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
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

		