@inject('Pages', 'App\Http\Controllers\PagesController')
@extends('struct')
@section('title', 'Giới thiệu: website bán đồng hồ chất lượng cao abc.xyz')
@section('addcss')
@endsection
@section('content')


		<!-- content -->
		<main>	
			<!-- map -->
			<div class="map pt-4">
				<div class="container">
					<div class="row mt-4">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4429.489324597573!2d105.84515693750326!3d21.002988950865195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac742d3b83df%3A0x28772da31fb145b1!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIG5naOG7gSBCw6FjaCBLaG9hIEjDoCBO4buZaQ!5e0!3m2!1sen!2s!4v1615654994470!5m2!1sen!2s" width="1200" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
								<div style="margin-right: 16px"><i class="fas fa-map-marked-alt"></i></div>
								<div class="contact-right">
									<h3>Địa chỉ:</h3>
									<p>92A, Lê Thanh Nghị, Bách Khoa, Hai Bà Trưng, Hà Nội</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="d-flex">
								<div style="margin-right: 16px"><i class="fas fa-blender-phone"></i></div>
								<div class="contact-right">
									<h3>Điện thoại:</h3>
									<h4>1900 716 223</h4>
									<p>Bấm 109 – Phòng kinh doanh</p>
									<p>Bấm 103 – Phòng kỹ thuật</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="d-flex">
								<div style="margin-right: 16px"><i class="far fa-envelope"></i></div>
								<div class="contact-right">
									<h3>Email:</h3>
									<p>hactech@edu.com</p>
									<p>nhom3@donghoso.ga</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end contact -->
		</main>
		<!--end content -->


@endsection
