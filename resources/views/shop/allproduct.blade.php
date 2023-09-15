@extends('layouts.InLogin')

@section('content')
{{-- <script lang="javascript"  src="js/zy.js"></script> --}}
	<section class="bg0 p-t-23 p-b-140"  style="padding: 150px;">
		<div class="container">
			
			<div class="row isotope-grid" id="show_product" style="margin-right: -150px; margin-left: -150px;">
                @foreach ($data as $x)					
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<div class="block2" style="background: white;">
							<div class="block2-pic hov-img0">
								<img src={{"../../upload/".$x->image}} alt="IMG-PRODUCT">
								<input type="hidden"  id="img-' . $counter . '"  value="' . $row['imag'] . '">
								<a href="{{"/showproducts/".$x->id."/".$x->id_section}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									عرض المنتج
								</a>
							</div>
			
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
								    <p class="js-name-b2">{{$x->name}}</p>
									<span class="stext-105 cl3">
										SR{{$x->price}}
									</span>
									<a href="{{"/profilee/".$x->namee}}">
										<h6>
										  Design By: {{$x->namee}}
										</h6>
									   </a>
								</div>
							</div>
						</div>

						<br>
						<a data-id="{{$x->id}}"  data-itemImage="{{"upload/".$x->image}}" data-itemname="{{$x->name}}"  data-itemprice="{{$x->price}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04 semer  js-addwish-b2">
							أضف إلى العربة
						</a>
					</div>
											
											
                                       
                @endforeach

			</div>
			<div class="flex-c-m flex-w w-full p-t-38">
			  {!! $data->links() !!}
			</div>
		</div>
	</section>
	<!-- Footer -->
@endsection