
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ART-INK </title>
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
	
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="/" class="logo">
						<img src="../../images/icons/logo-02.png" alt="IMG-LOGO" style="width: 142px; height: 103px;">
					</a>
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="#">كفرات جوال</a>
								<ul class="sub-menu">
									@foreach ($caver as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">تيشرت</a>
								<ul class="sub-menu">
									@foreach ($techert as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">تعليقات</a>
								<ul class="sub-menu">
									@foreach ($talka as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">اكواب</a>
								<ul class="sub-menu">
									@foreach ($mg as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">مسكات جوال</a>
								<ul class="sub-menu">
									@foreach ($maskat as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">حامل بطاقات</a>
								<ul class="sub-menu">
									@foreach ($cart as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">ساعات جدارية</a>
								<ul class="sub-menu">
									@foreach ($clok as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
									@endforeach
									
									
								</ul>
							</li>
							<li>
								<a href="#">لوحات معدنية</a>
								<ul class="sub-menu">
									@foreach ($lohat as $item)
								<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
				<a href="/"><img src="../../images/icons/logo-01.png" alt="IMG-LOGO"></a>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					   <li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
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
					<li><a href="{{"/products/".$item->id}}">{{$item->namee}}</a></li>
						@endforeach
						
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
			
				

				
			</ul>
		</div>

		
	</header>
	<br><br><br>
	<form action="cartshop" method="POST" class="bg0 p-t-75 p-b-85" style="background-color: white;">
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
									<td data-th="quantity">
										<input type="number" name="num[]" value="{{ $details['quantity'] }}" class="form-control quantity" />
									</td>
									<td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
									<td class="column-5" data-th="">
										<button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
										<button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
									</td>
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

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									المجموع النهائي :
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									 SR{{ $total }}
									 <input type="hidden" name="total[]" value="{{ $total }}">
								</span>
							</div>
						</div>

						
						<a href={{'login' }} class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
							تابع لإتمام عملية الشراء
						   </a>
					
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://ART-INK.NET" target="_blank">ART-INK</a>
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

