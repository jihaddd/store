
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ART-INK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{csrf_token()}}"/>  
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="/home" class="logo">
						<img src="../../images/icons/logo-02.png" alt="IMG-LOGO" style="width: 142px; height: 103px;">
					</a>
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="#">كفرات جوال</a>
								<ul class="sub-menu">
									@foreach ($caver as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">تيشرت</a>
								<ul class="sub-menu">
									@foreach ($techert as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">تعليقات</a>
								<ul class="sub-menu">
									@foreach ($talka as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">اكواب</a>
								<ul class="sub-menu">
									@foreach ($mg as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>

							<li>
								<a href="#">مسكات جوال</a>
								<ul class="sub-menu">
									@foreach ($maskat as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">حامل بطاقات</a>
								<ul class="sub-menu">
									@foreach ($cart as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">ساعات جدارية</a>
								<ul class="sub-menu">
									@foreach ($clok as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">لوحات معدنية</a>
								<ul class="sub-menu">
									@foreach ($lohat as $item)
								<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>


						
						</ul>
					</div>	
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart">
								<button id="test" >
									<i class="zmdi zmdi-shopping-cart" ><p id="xxx">{{ count(session('cart')) }}</p></i>
								</button>
							</div>
							
						</div>
						
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu" style="color: black;"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="/home"><img src="../../images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-5">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				
				<li>
					<a href="#">كفرات جوال</a>
					<ul class="sub-menu-m">
						@foreach ($caver as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="#">تيشرت</a>
					<ul class="sub-menu-m">
						@foreach ($techert as $item)
					   <li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="#">تعليقات</a>
					<ul class="sub-menu-m">
						@foreach ($talka as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="#">اكواب</a>
					<ul class="sub-menu-m">
						@foreach ($mg as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="#">مسكات جوال</a>
					<ul class="sub-menu-m">
						@foreach ($maskat as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="#">حامل بطاقات</a>
					<ul class="sub-menu-m">
						@foreach ($cart as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="#">ساعات جدارية</a>
					<ul class="sub-menu-m">
						@foreach ($clok as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="#">لوحات معدنية</a>
					<ul class="sub-menu-m">
						@foreach ($lohat as $item)
					<li><a href="{{"/pro/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
			
				

				
			</ul>
		</div>

		
	</header>


	<!-- Sidebar -->
	<aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<ul class="sidebar-link w-full">
					<li class="p-b-13">
						<a  class="stext-102 cl2 hov-cl1 trans-04">
							{{Auth::user()->name}}
						</a>
					</li>
					<li class="p-b-13">
						<a href="{{"/editinfo"}}" class="stext-102 cl2 hov-cl1 trans-04">
							معلومات الحساب
						</a>
					</li>
					<li class="p-b-13">
						<a href="/hostory/{{$id}}" class="stext-102 cl2 hov-cl1 trans-04">
							سجل الطلبات
						</a>
					</li>
					<li class="p-b-13">
						<a href="{{"/repassword"}}" class="stext-102 cl2 hov-cl1 trans-04">
							تغير كلمة المرور
						</a>
					</li>
					<li class="p-b-13">
						<a href="{{"/logout"}}" class="stext-102 cl2 hov-cl1 trans-04">
							تسجيل الخروج
						</a>
					</li>
					


					<li class="p-b-13">
						<a href="http://design.art-ink.net/" class="stext-102 cl2 hov-cl1 trans-04">
							كن شريك معنا
						</a>
					</li>

				</ul>
				<div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						@ Art-Ink Store
					</span>

					<div class="flex-w flex-sb p-t-36 gallery-lb">
						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-01.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-02.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-03.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-04.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-05.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-06.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-07.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-08.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1"  data-lightbox="gallery" 
							style="background-image: url('images/gallery-09.jpg');"></a>
						</div>
					</div>
				</div>

				

			</div>
		</div>
	</aside>


	<!-- Cart -->

	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					عربة التسوق
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full" id="cart">
                    @if(session('cart'))
					@foreach(session('cart') as $id => $details)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
                            <img src="{{'upload/'.$details['image'] }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{ $details['name'] }}
							</a>

							<span class="header-cart-item-info">
								SR{{ $details['price'] }}
							</span>
						</div>
                    </li>	
                    @endforeach
					@endif	
				</ul>
				
				<div class="w-full">
					
					<div class="header-cart-buttons flex-w w-full">
						<a href="{{ url('cart') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							عرض سلة المشتريات
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<form action="cart" method="POST" class="bg0 p-t-75 p-b-85" style="background-color: #fff;">
		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table id="cart"  class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">المنتج</th>
									<th class="column-2"></th>
									<th class="column-3">السعر</th>
									<th class="column-4">الكمية</th>
									<th class="column-5">المجموع</th>
									<th class="column-6"></th>
								</tr>
								  <?php $total = 0 ?>

                                 @if(session('cart'))
                                 @foreach(session('cart') as $id => $details)

                                     <?php $total += $details['price'] * $details['quantity'] ?>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{ 'upload/'.$details['image'] }}" alt="IMG">
											<input type="hidden" name="imag[]" value="{{ $details['image'] }}">
										</div>
									</td>
									<td class="column-2">{{ $details['name'] }}</td>
									
									<input type="hidden" name="name[]" value="{{ $details['name'] }}">
									<td data-th="Price" class="column-3">SR{{ $details['price'] }}</td>
									<input type="hidden" name="price[]" value="{{ $details['price'] }}">
									<td data-th="Quantity">
										<input type="number" name="num[]" value="{{ $details['quantity'] }}" class="form-control quantity" />
									</td>
									<td data-th="Subtotal"  class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
									<input type="hidden" name="subtotal[]" value="{{ $details['price'] * $details['quantity'] }}">
									<td class="column-5" data-th="">
										<button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
										<button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
									</td>
									<input type="hidden" name="product[]" value="{{ $details['id'] }}">
								<input type="hidden" name="id[]" value="{{Auth::user()->id}}">
								</tr>
								@endforeach
								@endif

								
							</table>
						</div>

						
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							تأكيد الطلب
						</h4>
						@if ($errors->any())
						<div class="alert alert-danger">
						  <ul>
							 @foreach ($errors->all() as $error)
								   <li>{{ $error }}</li>
							 @endforeach
						   </ul>
						 </div><br />
					 @endif

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									المجموع النهائي :
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									 SR{{ $total }}
									 <input type="hidden" name="totall[]" value="{{ $total }}">
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									الشحن
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										عنوان التوصيل
									</span>
									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state[]" placeholder="المنطقة" required>
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="contry[]" placeholder="المدينة" required>
									</div>
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="hai[]" placeholder="اسم الحي" required>
									</div>
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="stret[]" placeholder="اسم الشارع" required>
									</div>	
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="numhome[]" placeholder="رقم المنزل" >
									</div>	
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="phone[]" placeholder="رقم الجوال" required>
									</div>	
								</div>
							</div>
						</div>
						<div class="flex-w flex-sb-m p-b-52">
							<div class="flex-w flex-c-m m-tb-10">
							   
								<select name="payment[]" id="brand"  class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 " required>
									<option value=""> اختر طريقة الدفع </option>
									<option  value="فيزا" name="op1">فيزا</option>
									<option  value="عند الاستلام" name="op2" >عند الاستلام </option>
								</select>
							</div>
						</div>
						<button type="submit" class="flex-c-m stext-101 cl0 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="margin: auto;height: 50px; width: -webkit-fill-available;">
							تأكيد عملية الشراء
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32" style="text-align: center;">
		<div class="container">
			
			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>


</body>
</html>

