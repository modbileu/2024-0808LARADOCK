@extends('layout.master')

@section('content')
<section id="content">

			<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background:  url('{{ asset('assets/greenforever/ocean.png')}}') center right no-repeat; background-size: cover;">
				<div class="slider-inner">

					<div class="vertical-middle">
						<div class="container py-5">
							<div class="emphasis-title dark m-0">

								<h2 style="font-size: 40px; line-height: 1.4; font-weight: 600; text-shadow: 1px 1px 1px rgba(0,0,0,0.5);">Dogs are not our whole Life,<br>But they make our Lives whole.</h2><br>
								<p class="fw-light d-none d-md-block" style="font-size: 16px; opacity: .7;">Nisl blandit adipisci gravida blandit soluta, explicabo orci, distinctio <br>duis unde provident suspendisse orci? Recusandae! Proident,<br>quos do mi cupidatat.</p>
								<br><em><small style="opacity: 0.4;">Every month a surprise gift*</small></em>

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
					<a class="grid-item" href="demos/pet/images/gallery/3.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/3.jpg" alt="Gallery Thumb 3">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/4.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/4.jpg" alt="Gallery Thumb 4">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/5.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/5.jpg" alt="Gallery Thumb 5">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/6.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/6.jpg" alt="Gallery Thumb 6">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/7.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/7.jpg" alt="Gallery Thumb 7">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/8.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/8.jpg" alt="Gallery Thumb 8">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/9.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/9.jpg" alt="Gallery Thumb 9">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/10.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/10.jpg" alt="Gallery Thumb 10">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/11.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/11.jpg" alt="Gallery Thumb 11">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/12.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/12.jpg" alt="Gallery Thumb 12">
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
							<h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">Our Products</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
						</div>
						<div class="row mt-5">
							<div class="col-lg-5 d-none d-lg-block">
								<img src="demos/pet/images/others/1.png" alt="Dogs">
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="row">
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="demos/pet/images/products/1.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc text-center">
												<div class="product-title"><h3><a href="#">Natural Dog Food</a></h3></div>
												<div class="product-price"><ins>$11.49</ins></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="demos/pet/images/products/2.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc text-center">
												<div class="product-title"><h3><a href="#">Dry Dog Food</a></h3></div>
												<div class="product-price"><ins>$13.99</ins></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="demos/pet/images/products/3.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc text-center">
												<div class="product-title"><h3><a href="#">Canvas Dog Food</a></h3></div>
												<div class="product-price"><ins>$14.49</ins></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section dark parallax m-0" style="padding: 140px 0;">
					<img src="demos/pet/images/others/section-bg.jpg" class="parallax-bg">
					<div class="container text-center">
						<div class="row">
							<div class="col-lg-6">
								<div class="heading-block border-bottom-0 mb-0">
									<div class="before-heading text-lowercase ls-1 text-white fw-normal">want to Adopt your a best friend?</div>
									<h3 class="text-transform-none font-secondary fw-normal" style="font-size: 32px;">Unconditional love is as close as your nearest Shelter.</h3>
									<a href="#" class="button button-large button-circle button-border button-white button-light mt-4 ms-0">Get a Pet Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container mt-6">
					<div class="heading-block text-center border-bottom-0 mx-auto" style="max-width: 640px">
						<h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">Need Help?</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
					</div>
					<div class="row contact-properties">
						<div class="col-md-4">
							<a href="#" style="background: url('demos/pet/images/help/1.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark text-center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize fw-normal font-secondary">Hire a Pet Sitter</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											795 Folsom Ave, Suite 600<br>
											San Francisco, CA 94107
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" style="background: url('demos/pet/images/help/2.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark text-center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize fw-normal font-secondary">Report a Stray Dog</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											call us<br>
											+1-111-222-333
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" style="background: url('demos/pet/images/help/3.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark text-center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize fw-normal font-secondary">Report Harassment Dog</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											Email us<br>
											info@canvas.com
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

		