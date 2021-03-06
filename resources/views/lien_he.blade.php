
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liên hệ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href=" {{ asset('/css/style.css') }} ">
</head>
<body>
	<!-- header -->
	<header>
		<!-- header-top -->
		<div class="header-top d-flex align-items-center">	
			<div class="container">	
				<div class="row">
					<div class="col-md-8 d-flex align-items-center">
						<div class="header-address"><span><i class="fas fa-map-marker-alt"></i> 319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</span></div>
						<div><span><i class="fas fa-phone-alt"></i>076 922 0162</span></div>
					</div>
					<div class="col-md-4 d-flex justify-content-end">
						<div>
							<span><i class="fab fa-facebook-f"></i></span>
							<span><i class="fab fa-instagram"></i></span>
							<span><i class="fab fa-twitter"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- end header-top -->

		<!-- header-main -->
		<div class="header-main">
			<div class="container">
				<div class="row">
					<div class="col-md-4 logo p-3">
						<h1><a href=""><img width="180" src="{{ asset('/images/logo.png') }}" alt="logo"></a></h1>
					</div>
					<div class="col-md-6 search d-flex align-items-center">
						<input type="text" placeholder="Tìm kiếm...">
						<button><i class="fas fa-search"></i></button>
					</div>
					<div class="col-md-2 header-cart d-flex justify-content-end align-items-center">
						<span class="header-heart"><i class="fas fa-heart"></i>

						</span>
						<div class="cart"><i class="fas fa-shopping-cart"></i>
							<span class="cart-number">0</span></div>
						</div>
					</div>
				</div>
			</div>
			<!-- end header-main -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="d-flex justify-content-center align-items-center">
							<ul>
								<li><a href="#">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Đồng hồ nam</a></li>
								<li><a href="#">Đồng hồ nữ</a></li>
								<li><a href="#">Blogs</a></li>
								<li><a class="active" href="#">Liên hệ</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- header-buttom -->

			<!-- end header-buttom -->
		</header>
		<!-- end header -->

		<!-- content -->
		<main>	
			<!-- map -->
			<div class="map pt-4">
				<div class="container">
					<div class="row mt-4">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.416095003024!2d106.650339!3d10.779409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf63e15bfce46baef!2sC%C3%B4ng%20ty%20TNHH%20-%20MONA%20MEDIA!5e0!3m2!1svi!2sus!4v1614325760484!5m2!1svi!2sus" width="1200" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
			<!-- end map -->


			<!-- contact -->
			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="d-flex">
								<div style="margin-right: 16px"><img src="{{ asset('/images/icon-address.png') }}" ></div>
								<div class="contact-right">
									<h3>Địa chỉ:</h3>
									<p>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="d-flex">
								<div style="margin-right: 16px"><img src="{{ asset('/images/icon-address.png') }}" ></div>
								<div class="contact-right">
									<h3>Điện thoại:</h3>
									<h4>1900 636 648</h4>
									<p>Bấm 109 – Phòng kinh doanh</p>
									<p>Bấm 103 – Phòng kỹ thuật</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="d-flex">
								<div style="margin-right: 16px"><img src="{{ asset('/images/icon-address.png') }}" ></div>
								<div class="contact-right">
									<h3>Email:</h3>
									<p>demonhunterg@gmail.com</p>
									<p>mon@mona.media</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end contact -->

			<!-- form -->
			<div class="form">
				<div class="container">
					<div class="row">
						<div class="col-md-12 d-flex justify-content-center align-items-center">
							<form action="">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Họ và tên">
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="Email">
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="Họ và tên">
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="Email">
									</div>

									<div class="col-md-12">
										<textarea placeholder="Lời nhắn"></textarea>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="submit d-flex justify-content-center">
											<button class="text-center">
												Gửi
											</button>
										</div>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end form -->
		</main>
		<!--end content -->


		<!-- email -->
		<div class="email">
			<div class="container">
				<div class="row d-flex justify-content-end">
					<div class="col-md-6 d-flex justify-content-start">
						<h2>ĐĂNG KÝ NHẬN THÔNG TIN</h2>
					</div>
					<div class="col-md-6 d-flex justify-content-end">
						<form action="">
							<input type="text" placeholder="Email">
							<button>ĐĂNG KÝ</button>
						</form>
					</div>

				</div>
			</div>
		</div>
		<!-- end email -->
		<!-- footer -->
		<footer>	
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h3>THÔNG TIN LIÊN HỆ</h3>
							<p><svg fill="#fff" style="margin-right: 8px" width="16px" height="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440 440" style="enable-background:new 0 0 440 440;" xml:space="preserve">
								<g>
									<path d="M340.57,241.141c-54.826,0-99.429,44.604-99.429,99.43c0,54.825,44.604,99.429,99.429,99.429S440,395.396,440,340.571
									C440,285.745,395.396,241.141,340.57,241.141z M328.122,395.104l-58.807-58.807l21.213-21.213l37.594,37.594l56.035-56.034
									l21.213,21.213L328.122,395.104z"></path>
									<path d="M166.62,119.397c-24.813,0-45,20.187-45,45s20.187,45,45,45c24.813,0,45-20.187,45-45S191.433,119.397,166.62,119.397z"></path>
									<path d="M326.984,211.853c4.067-14.39,6.256-29.559,6.256-45.234C333.24,74.745,258.494,0,166.62,0C74.746,0,0,74.745,0,166.619
									c0,38.93,13.421,74.781,35.878,103.177L166.62,434.174l48.641-61.155c-2.688-10.373-4.12-21.247-4.12-32.448
									C211.141,273.791,261.978,218.665,326.984,211.853z M91.62,164.397c0-41.355,33.645-75,75-75c41.355,0,75,33.645,75,75
									s-33.645,75-75,75C125.265,239.397,91.62,205.752,91.62,164.397z"></path>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
							</svg> 319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</p>

							<p><svg fill="#fff" style="margin-right: 8px" width="16px" height="16px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
								<g>
									<path d="M586.923,256.013c-7.959-8.24-16.655-13.074-24.53-15.916c10.798-62.807,8.812-97.901-246.643-178.322
									C55.771-20.07,26.688,13.85,5.274,81.869L1.622,93.471c-5.794,18.406,4.43,38.025,22.836,43.82l83.405,26.257
									c18.407,5.794,38.025-4.43,43.82-22.836l3.652-11.602c16.587-52.69,97.773-28.905,143.76-14.428
									c45.986,14.477,126.155,41.49,109.568,94.18l-3.653,11.601c-5.794,18.406,4.43,38.025,22.836,43.82l83.405,26.257
									c18.406,5.795,38.025-4.429,43.82-22.835l2.369-8.038c4.933,2.036,10.229,5.149,15.123,10.215
									c17.553,18.182,23.378,53.308,16.842,101.589c-11.335,83.657-44.21,113.537-79.221,123.481v-14.553
									c0-14.775-3.693-29.4-11.181-42.179c-34.94-59.797-84.556-112.856-147.598-159.626v-35.34c0-2.745-2.246-4.992-4.991-4.992h-51.862
									c-2.795,0-4.992,2.247-4.992,4.992v35.139h-59.199v-35.139c0-2.745-2.246-4.992-4.992-4.992H173.46
									c-2.746,0-4.992,2.247-4.992,4.992v35.139C105.326,325.264,55.661,378.322,20.67,438.22C13.183,450.998,9.49,465.623,9.49,480.397
									v32.894c0,46.87,37.985,84.855,84.854,84.855h330.984c46.136,0,83.581-36.824,84.745-82.679
									c56.115-13.143,87.95-58.928,99.111-141.316C616.681,318.816,609.189,279.069,586.923,256.013z M346.544,481.271l-33.304-11.858
									c3.533-7.12,5.57-15.115,5.57-23.606c0-29.35-23.809-53.159-53.208-53.159c-29.35,0-53.209,23.81-53.209,53.159
									c0,29.4,23.859,53.21,53.209,53.21c10.87,0,20.965-3.271,29.386-8.859l18.266,30.026c-13.76,8.835-30.087,14.022-47.652,14.022
									c-48.817,0-88.349-39.582-88.349-88.398c0-48.767,39.533-88.349,88.349-88.349c48.816,0,88.399,39.583,88.399,88.349
									C354.001,458.429,351.311,470.408,346.544,481.271z"></path>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
							</svg> 076 922 0162</p>

							<p><svg fill="#fff" style="margin-right: 8px" width="16px" height="16px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="308.728px" height="308.728px" viewBox="0 0 308.728 308.728" style="enable-background:new 0 0 308.728 308.728;" xml:space="preserve">
								<g>
									<g>
										<path d="M153.188,27.208c-37.562,1.134-130,55.057-144.495,63.65l-7.981,32.664l40.236,28.809l-7.733-27.01l189.62-54.288
										l26.895,93.949l58.098-41.331l-10.004-32.698C283.848,82.656,190.877,28.342,153.188,27.208z"></path>
										<polygon points="308.728,281.52 308.728,195.199 308.728,160.289 308.728,136.255 306.809,137.621 252.882,175.988 
										222.101,197.888 226.557,202.27 231.942,207.581 237.326,212.886 243.833,219.288 307.02,281.52 		"></polygon>
										<polygon points="0,137.415 0,150.224 0,281.52 1.479,281.52 60.832,221.766 66.667,215.892 72.127,210.391 77.588,204.891 
										85.158,197.271 45.731,169.042 8.147,142.135 0,136.299 		"></polygon>
										<path d="M231.905,222.705l-9.692-9.545l-5.39-5.311l-5.39-5.31l-1.382-1.366l-5.489-5.4l-0.954-0.938
										c-1.599-1.576-3.27-3.053-4.989-4.461c-12.777-10.457-28.655-16.158-45.399-16.158c-16.767,0-32.616,5.69-45.394,16.137
										c-1.938,1.582-3.813,3.265-5.598,5.058l-0.334,0.338l-5.363,5.399l-3.452,3.48l-5.458,5.495l-5.46,5.495l-17.921,18.046
										l-47.276,47.593h274.396L231.905,222.705z"></path>
									</g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
							</svg> demonhunterg@gmail.com</p>
						</div>

						<div class="col-md-3">
							<h3>LIÊN KẾT</h3>
							<p><a href="#">Giới thiệu</a></p>
							<p><a href="#">Đồng hồ nam</a></p>
							<p><a href="#">Đồng hồ nữ</a></p>
							<p><a href="#">Blogs</a></p>
							<p><a href="#">Liên hệ</a></p>
						</div>

						<div class="col-md-3">
							<h3>HỖ TRỢ</h3>
							<p><a href="#">Hướng dẫn mua hàng</a></p>
							<p><a href="#">Hướng dẫn thanh toán</a></p>
							<p><a href="#">Chính sách bảo hành</a></p>
							<p><a href="#">Chính sách đổi trả</a></p>
							<p><a href="#">Tư vấn khách hàng</a></p>
						</div>

						<div class="col-md-3">
							<h3>TẢI ỨNG DỤNG TRÊN</h3>
							<p>Ứng dụng Mona Watch hiện có sẵn trên Google Play & App Store. Tải nó ngay</p>
							<img class="mb-2" src="{{ asset('/images/img-googleplay.jpg') }}" alt="">
							<img src="{{ asset('/images/img-appstore.jpg') }}" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>© Bản quyền thuộc về . Thiết kế website MonaMedia Mona Media</p>
						</div>
						<div class="col-md-6">
							<img src="{{ asset('/images/img-payment.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
	</body>
	</html>

