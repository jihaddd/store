@extends('layouts.NoLogin')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    
</section>	


<!-- Content page -->
<section class="bg0 p-t-104 p-b-116" style="background: white;">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form>
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                       تواصل معنا
                    </h4>

                    <div class="bor8 bg0 m-b-12">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="" placeholder="الاسم">
                    </div>
                    <div class="bor8 bg0 m-b-12">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="" placeholder="الايميل">
                    </div>

                    <div class="bor8 bg0 m-b-22">
                        <textarea class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="" placeholder="كيف نساعدك"></textarea>
                    </div>
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        ارسال
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>	
@endsection