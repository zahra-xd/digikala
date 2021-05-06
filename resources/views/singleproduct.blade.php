<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>صفحه  محصولات </title>
          <link href="/public/font/shabnam-font-v1.1.0">
          <link href="{{ asset('css/style.css') }}" rel="stylesheet">
          <link href="{{ asset('css/stylepage2.css') }}" rel="stylesheet">
          <link rel="stylesheet" href="/font/fontasem/font-awesome.min.css"> 
           <script src="/font/fontasem/a076d05399.js" crossorigin='anonymous'></script>
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
             <link href="{{ asset('owll-crousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
             <script src="{{ asset('owll-crousel/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>
             <script src="{{ asset('/public/owll-crousel/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}"></script>
            </head>
        <body class="antialiased">
             @component('components.header')
             @endcomponent
   {{-- //menu --}}
             @component('components.menuheader')
             @endcomponent
{{-- // منو محصولات  --}}
<div class="conti">
              <div class="o-page js-product-page c-product-page">
                  <div class="contanert">
                     <div class="c-product__nav-container">
                         <nav class="js-breadcrumb ">
                             <ul class="c-breadcrumb">
                                 <li class="menu-product"><a><span>دیجی کالا</span></a></li>
                                 <li class="menu-product"><a><span>کالای دیجیتال</span></a></li>
                                 <li class="menu-product"><a><span>موبایل</span></a></li>
                                 <li><a><span>گوشی موبایل</span></a></li>
                             </ul>
                         </nav>
                         <div class="c-product__ext-links">
                             <a class="c-product__ext-link c-product__ext-link--seller"> کالای خود را در دیجی کالا بفروشید</a>
                         </div>
                     </div>
                    </div>
                  <div class="c-product js-product">
                    <section  class="product-info">
                        <div class="titel-product">
                            <div>
                                <div class="item-center">
                                    <div class="brand-titel" style="color: #0fabc6">
                                        <a>شیائومی</a>
                                        <span>/</span>
                                        <a>گوشی موبایل شیائومی</a>
                                    </div>
                                </div>
                                <h1 class="one-titel">گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت</h1>
                            </div>
                        </div>
                        <div class="product-atribute">
                            <div id="zoom-box"></div>
                            <div class="product-cofing">
                                <span class="c-product-titel">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                                <div class="c-product__engagement">
                                    <div class="engament-item">
                                        <div class="grade-product">
                                            <i  class="fa">&#xf005;</i>4.3
                                            <span class="c-product__engagement-rating-num">(399)</span>
                                        </div>
                                    </div>
                                    <div class="product__engagement-item">
                                        <div class="produt-enga-link"> 502 دیدگاه کاربران</div>
                                    </div>
                                    <div class="product__engagement-item">
                                        <div class="produt-enga-link"> 157 پرسش و پاسخ </div>
                                    </div>
                                </div>
                                    <div class="icon-titel-product">
                                       <i class="ml-1"><img src="/image/high-quality (1).png" style="width: 20px; margin-right:6px"></i>
                                        <span>پیشنهاد شده توسط بیش از ۲۲۰ نفر از خریداران</span>
                                    </div>
                                 <div class="c-product__config-wrapper">
                                     <div class="c-product__circle-variants">
                                         <div class="circle-titel">
                                             <header>رنگ:</header>
                                             <span>زرد</span>

                                         </div>
                                         <ul class="product-variants">
                                             <span><li class="circle-item" style="background:yellow"></li></span>
                                             <span><li class="circle-item" style="background: black"> </li></span>
                                             <span> <li class="circle-item" style="background: blue"> </li></span>
                                         </ul>
                                     </div>
                                     <div class="c-product__params js-is-expandable">
                                         <ul>
                                             <span>ویژگی های کالا</span>
                                             <li>حافظه داخلی: 128 گیگابایت</li>
                                             <li>شبکه های ارتباطی: 4G، 3G، 2G</li>
                                             <li>دوربین‌های پشت گوشی: 3 ماژول دوربین</li>
                                             <li>سیستم عامل: Android</li>
                                             <li>توضیحات سیم کارت:سایز نانو (8.8 × 12.3 میلی‌متر)</li>
                                             {{-- <li class="moust-carbord" onclick="myFunction2()" id="myBtnu">+موارد بیشتر  </li> --}}
                                             <li ><span id="dots2"></span>
                                                <ul id="more2">
                                                <li>مقدار رم</li>
                                                <li>رزولیشن عکس</li>
                                                <li>نسخه سیستم عامل</li>
                                                <li>فناوری صفحه نمایش</li>
                                                
                                                </ul>
                                                </li>
                                                <li class="moust-carbord" onclick="myFunction12()" id="myBtnu">+موارد بیشتر  </li>
                                               
                                            </ul>
                                           <div class="text-product-param">
                                                <div class="c-product__additional-item ">
                                                  <i class="ml-2"><img src="/image/exclamation.svg" style="width: 20px"></i>
                                            شدار سامانه همتا: حتما در زمان تحویل دستگاه، به کمک کد فعال‌سازی چاپ شده روی جعبه یا کارت گارانتی، دستگاه را از طریق #7777*، برای سیم‌کارت خود فعال‌سازی کنید. آموزش تصویری دری 
                                                </div>
                                            </div> 
                                     </div>

                                 </div>
                           
                                </div>
                                <div class="c-product__summary js-product-summary">
                                    <div class="card__box">
                                        <div class="c-product__seller-info js-seller-info">
                                            <div class=" c-product__seller-box">
                                                    <div class="c-product-header">
                                                        <div>فروشنده</div>
                                                        <a style="color: #0fabc6;  font-weight: 700;">4 فروشنده دیگر</a>
                                                    </div>
                                                    <div class="c-proc-row">
              
                                                        <div class="c-product__seller-first-line mr-2">
                                                            <span class="c-product-name"> <i class="ml-2" style="    right: -20px;  position: relative;"><img src="/image/icon.png" style="width: 30px; border-radius: 0px 12px 12px 0px;"></i>دیجی کالا </span>
                                                            <i style='font-size:20px' class='fas text-muted mrr-5'>&#xf104;</i>
                                                        </div>
                                            </div>
                                            <div class="text-muted  c-pr-line c-product__seller-first-line mr-5 ">عملکرد <span class="ml-2">5از 5</span>
                                           <span> | </span>     <span  class="mr-2">80 درصد رضایت کالا</span></div>
                                           <div class="c-proc-row">
                                        
                                            <i><img src="/image/verified.png" style="width: 30px"></i>
                                            <div class="c-product__seller-first-line mr-2">
                                                <span class="c-product-name">گارانتي 18 ماهه</span>
                                            </div>
                                        
                                </div>
                                  <hr  class="line-zemant">
                                <div class="c-proc-row">
                                    <i class="ml-2"><img src="/image/now-in-stock.png" style="width: 30px"></i>
                                    {{-- <i style='font-size:24px' class='fas cproct-icon'>&#xf559;</i> --}}
                                    <div class="c-product__seller-first-line mr-2 c-pr-linee">
                                        
                                        <span class="c-product-name">موجود در انبار</span>
                                        <i style='font-size:20px' class='fas text-muted mrr-5'>&#xf104;</i>
                                    </div>
                                 </div>
                        <div class="text-muted  c-pr-line c-product__seller-first-line mr-5 ">   <i class="ml-2"><img src="/image/truck.png" style="width: 20px"></i>ارسال ديجي کالا</div>
                                            </div>
                                            <div class="c-product__seller-price-real">
                                                <div class="c-product__seller-price">4,800,000<span class="text-se-price">تومان</span> </div>
                                            </div>
                                            <div class="c-cart-view-count">
                                                <i style='font-size:17px' class='far ml-2'>&#xf06e;</i>
                                                50نفر در حال بازديد اين کالا هستند 
                                            </div>
                                            <div class="c-product__seller-row c-product__seller-row--add-to-cart">
                                                <a class="btn-add-to-cart">
                                                    <span class="btn-add-to-cart__txt">افزودن به سبد خريد </span>
                                                </a>
                                            </div>
                                           
                                        </div>
                                      
                                        <div class="c-product-shipping-limitationn">
                                            <div class="c-product-shipping-limitation__title" style="margin-top: 10px">
                                                <i style="margin-right: 8px"><img src="/image/exclamation.svg" style="width: 20px"></i>
                                                <span class="mr-2"> فرایند قیمت گذاری ونظارت بر قیمت ها</span>
                                            </div>
                                        </div>
                                        <div class="ml-5 mb-2 text-muted price-monaseb">ايا قيمت مناسبي سراغ داريد؟</div>
                                       
                                    </div>
                                    
                                </div> 
                             
                         
                       
                            </div>

                       <div class="c-product__usp">
                           <aside class="c-product__feature">
                               <div class="o-grid">
                                   <div class="row">
                                       <div class="c-product__feature-col">
                                           <a class="cfeature-item c-product__feature-item--1"><i class="ml-2"><img src="/image/box.png" style="width: 35px"></i>امکان تحویل<br>اکسپرس</a>
                                       </div>
                                       <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--3"><i class="ml-2"><img src="/image/24-hours-support.png" style="width: 35px"></i>هفت روز هفته<br>24 ساعته </a>
                                    </div>
                                    <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--4"><i class="ml-2"><img src="/image/product_icon_E.png" style="width: 55px"></i>تحویل<br>پرداخت در محل </a>
                                    </div>
                                    <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--5"><i class="ml-2"><img src="/image/images.png" style="width: 35px"></i>هفت  روز ضمانت بازگشت کالا</a>
                                    </div>
                                    <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--6"><i class="ml-2"><img src="/image/high-quality.png" style="width: 35px"></i>ضمانت<br>اصل بودن کالا</a>
                                    </div>
                                   </div>
                               </div>
                           </aside>
                       </div>
                    </section>


                    <section c-galery>
                        <div class="cadr-galery">
                            <div class="item-galery">
                           <ul class="networksocial">

                               <li class="tooltipp"><i style='font-size:22px' class='far'>&#xf004;</i>  <span class="tooltiptextt">افزودن به علاقه مندی</span></li>
                               <li class="tooltipp"><i style='font-size:24px' class='fas'>&#xf1e0;</i> <span class="tooltiptextt">اشتراک گذاری</span> </li>
                               <li class="tooltipp"><i style='font-size:24px' class='far'>&#xf0f3;</i><span class="tooltiptextt">اطلاع رسانی شگفت انگیز</span></li>
                               <li class="tooltipp"><i style='font-size:24px' class='fas'>&#xf201;</i><span class="tooltiptextt">نمودار قیمت </span></li>
                               <li class="tooltipp"><i style='font-size:24px' class='fas'>&#xf201;</i><span class="tooltiptextt">مقایسه</span></li>
                            </ul >
                               <div class="card-galery-img" >
                                {{-- <div class="img-zoom-lens" style="left: 59.125px; top: 119.2px;"></div> --}}
                                      <img class=""  id="myimage" src="/image/77.jpg" srcset="/image/77.jpg">
                                     <span id="myhide" style="float: right; position: absolute; top: 0px;right: 450px;width: auto;height: 100%;z-index: 2424">
                                        <div id="myresult" class="img-zoom-result" onmouseleave="hideme(this)" style="background-image: url(&quot;/image/77.jpg&quot;); background-size: 1320px 1375px; background-position: -628.5px -271.667px;"></div> 
                                  </span> 
                            
                                      {{-- ** --}}
                                      <div class="c-gallery__main-img-badges-container"></div>
                                    </div>
                            </div>
                            <ul class="c-gallery__items">
                             
                                 <li class="js-product-thumb-img" data-id="2">
                                    <div class="thumb-wrapper">
                                        <img src="/image/78.jpg">
                                    </div>
                                </li> 
                                 <li class="js-product-thumb-img" data-id="3">
                                    <div class="thumb-wrapper">
                                        <img src="/image/79.jpg">
                                    </div>
                                </li> 
                                 <li class="js-product-thumb-img" data-id="4">
                                    <div class="thumb-wrapper">
                                        <img src="/image/82.jpg">
                                        <div class="cir">...</div>
                                    </div>
                                </li>
                                <li class="js-product-thumb-img" data-id="5">
                                    <div class="thumb-wrapper">
                                        <img src="/image/80.jpg">

                                    </div>
                                </li> 
                                <li class="js-product-thumb-img" id="mybtnn" onclick="oopemodel()"  data-id="6">
                                    <div class="thumb-wrapper">
                                        <img src="/image/82.jpg" style="-webkit-filter: blur(3px)">
                                        <div class="cir">...</div>
                                    </div>
                                </li>
                          
                          
                                {{-- ***model** --}}
                                 <li class="js-product-thumb-img" data-id="7">
                                    <div class="thumb-wrapper">
                                        <img src="/image/81.jpg">
                                      
                                    </div>
                                </li>
                                <li class="js-product-thumb-img" data-id="8">
                                    <div class="thumb-wrapper">
                                        <img src="/image/78.jpg">
                                       
                                    </div>
                                </li> 
                             
                            </ul>
                            <div class="bazkhord-product "><a><i class="ml-2"><img src="/image/chat.svg" style="width:16px"></i>بازخرد درباره یاین کالا</a></div>
                           <div id="myModal" class="modall">
                                <div class="modal-contentt">
                                    <div class="">
                                        <div class="c-remodal-gallery__tabs js-top-bar-tabs">
                                            <div class="c-remodal-gallery__tab c-remodal-gallery__tab--selected js-gallery-tab" data-id="1">تصاویر رسمی
                                        </div>
                                        <div class="c-remodal-gallery__tab js-gallery-tab" data-id="1">تصاویر خریداران
                                        </div>
                               
                                        <span class="close" onclick="closeee()">&times;</span>
                                    </div>
                                    <div class="modal-bodyy">
                                        <div class="c-remodal-gallery__content js-gallery-tab-content is-active">
                                            <div class="c-remodal-gallery__content_1">
                                                <div class="gal mySlides content__main " ><img  class="imggg" src="/image/101.jpg"></div>
                                                 <div class="gal mySlides"><img class="imggg" src="/image/102.jpg"></div>
                                                <div class="gal mySlides"><img class="imggg" src="/image/92.jpg"></div>
                                                <div class="gal mySlides"><img class="imggg" src="/image/93.jpg"></div>
                                                <div class="gal mySlides"><img class="imggg" src="/image/94.jpg"></div>
                                                <div class="gal mySlides"><img class="imggg" src="/image/95.jpg"></div> 
                                            </div>
                                            <div class="info_img">
                                                <div class="c-remodal-gallery__title">گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت</div>
                                                <div class="infoImg">
                                                    <div data-slide="1" class="gal-small" ><img src="/image/90.jpg" class="demo cursor " onclick="currentSlide(1)">
                                                    </div>
                                                    <div data-slide="2" class="gal-small "><img  src="/image/91.jpg" class="demo cursor "  onclick="currentSlide(2)" >
                                                    </div>
                                                    <div data-slide="3" class="gal-small "><img src="/image/92.jpg" class="demo cursor "  onclick="currentSlide(3)">
                                                    </div>
                                                    <div data-slide="4" class="gal-small "><img src="/image/93.jpg">
                                                    </div>
                                                    <div data-slide="5" class="gal-small "><img src="/image/94.jpg">
                                                    </div>
                                                    <div data-slide="6" class="gal-small "><img src="/image/95.jpg">
                                                    </div>
                                                    <div data-slide="1" class="gal-small "><img src="/image/96.jpg">
                                                    </div>
                                                    <div data-slide="2" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="3" class="gal-small "><img src="/image/91.jpg">
                                                    </div>
                                                    <div data-slide="4" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="5" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="6" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="1" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="2" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="3" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="4" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="5" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                    <div data-slide="6" class="gal-small "><img src="/image/90.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </section>
                
                </div>
                {{-- //لیست فروشندگان کامل نشده --}}
               
               <div>
                {{-- @component('components.froshandgan')
                @endcomponent --}}
               </div>
               
               
                {{-- *************** --}}
              </div>
              
              {{-- //محصولات مرتبط --}}
             @component('components.sliderproduct')
      @slot('titel')
         محصولات مرتبط
      @endslot
      @slot('urlimage')
          <img src="/image/45.jpg">
      @endslot
      @slot('price')
          5,600,000
      @endslot
    @endcomponent
            {{-- //کامنت --}}
            <div class="c-product__bottom-section u-mt-12 has-mini-buybox">
                  <div id="tab" class="o-box o-box--no-border o-box--grow c-product__tabs-container">
                      <ul class="tab-box o-box__tabs--sticky nav-level-1-ul">
                        <div class="nav-hoverr"></div>
                          <li class=" o-box__tab   nav-level-1-li ">
                              <a href="#bakhsh-1">نقد بررسی</a>
                          </li>
                          <li class=" o-box__tab nav-level-1-li ">
                            <a href="#bakhsh-2">بررسی تخصصی</a>
                        </li>
                        <li class=" o-box__tab nav-level-1-li ">
                            <a  href="#bakhsh-3"> مشخصات</a>
                        </li>
                        <li class=" o-box__tab nav-level-1-li">
                            <a  href="#bakhsh-4">دیدگاه کاربران </a>
                        </li>
                        <li class=" o-box__tab nav-level-1-li">
                            <a  href="#bakhsh-5">پرسش و پاسخ</a>
                        </li>
                      </ul>
                      <div>
                          <div>
                            <div class="o-box__header" id="bakhsh-1">
                                <span class="o-box__title ">نقد و بررسی اجمالی</span><br>
                                <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                              </div>
                              <article>
                                  
                                         <div>
                                             <section class="c-content-expert__summary">
                                                 <div class="c-mask">
                                                     <div class="c-mask__text c-mask__text--product-summary"><p style="text-align: justify">گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت از جمله اولین سری محصولات برند شیائومی است. این محصول دارای ساختاری متوازن و خوش‌ساخت بدون پشتیبانی از تکنولوژی 5G در تاریخ نوامبر 2020 روانه بازار شده است. این محصول از فریم پلاستیکی ساخته شده است که قاب جلو شیشه‌ای جلوه ویژه‌ای به این مدل بخشیده است. صفحه‌نمایش گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت در اندازه 6.53 منتشر شده است. این صفحه‌نمایش کاملاً<span id="dotts">...</span><span id="more">است. شارژ معکوس یا همون (reverse charging) ویژگی است که به شما این امکان را می‌دهد که از تلفن خود برای شارژ دستگاه‌های دیگر مانند تلفن‌های هوشمند، ساعت‌های هوشمند و باندهای هوشمندی که از شارژ بی‌سیم پشتیبانی می‌کنند، استفاده کنید. برای اینکه بتوانید آنها را به‌صورت بی‌سیم شارژ کنید، دستگاه شما باید از پروتکل شارژ بی‌سیم Qi پشتیبانی کند.</span></p></div>
                                                     <h6 class="c-mask-link" id="mostread" onclick="readmore()">ادامه مطلب</h6>
                                                    </div>
                                           
                                             </section>
                                      {{-- *** --}}
                                   
                                         </div>
                              </article>
                          </div>
                          <div>
                            <div class="o-box__header" id="bakhsh-2">
                                <span class="o-box__title ">نقد و بررسی تخصصی</span><br>
                                <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                             
                            </div>

                              <article>
                                  <div class="c-content-expert__articles">
                                      <section>
                                          {{-- <h3 class="c-content-expert__title">جنجالی دیگر</h3> --}}
                                          <div>
                                              <img src="/image/86.jpg">
                                          </div>
                                          <div class="c-content-expert__text"><p></p><p style="text-align:justify">شرکت «شیائومی» (xiaomi)، جزو شرکت‌هایی است که سال‌هاست برای ارائه گوشی‌هایی با کیفیت بالا تلاش می‌کند. با ارائه گوشی &nbsp;POCO M3 M2010J19CG، شاید ایندفعه در این هدف موفق شده باشد. این گوشی دارای ظاهری خاص و بدنه‌ای مقاوم بوده که در کنار باتری بزرگ خود توانسته است وزن مناسب گوشی را حفظ کند.</p><p></p></div>
                                      </section>
                                  </div>
                              </article>
                          </div>
                          {{-- ** --}}
                          <div class="c-params js-product-tab-content" id="params" data-method="params">
                              <article class="c-params__border-bottom">
                                  <div class="o-box__header" id="bakhsh-3">
                                      <span class="o-box__title " style="    position: relative;  right: -75%;">مشخصات کالا</span>
                                      <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                                    </div>
                                    <section>
                                        <h3 class="c-params__title">مشخصات کلی</h3>
                                        <ul class="c-params__list">
                                            <li>
                                                <div class="c-params__list-key">
                                                    <span class="block">ابعاد</span>
                                                </div>
                                                <div class="c-params__list-value">
                                                    <span class="block">  162.3x77.3x9.6 میلی‌متر </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-params__list-key">
                                                    <span class="block">توضیحات سیم کارت</span></div>
                                                    <div class="c-params__list-value"><span class="block">سایز نانو (8.8 × 12.3 میلی‌متر)   </span></div></li><li><div class="c-params__list-key"><span class="block">وزن</span></div><div class="c-params__list-value"><span class="block"> 198 گرم
                    </span>
                </div>
            </li>
            <li>
                <div class="c-params__list-key"><span class="block">ساختار بدنه</span></div><div class="c-params__list-value"><span class="block"> قاب جلو از شیشه با محافظ گوریلا گلس ۳</span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">قاب پشت از جنس پلاستیک
</span>
</div>
</li>
<li>
    <div class="c-params__list-key"></div>
    <div class="c-params__list-value">
        <span class="block">
فریم از جنس پلاستیک
</span>
</div>
</li>
<li>
    <div class="c-params__list-key">
        <span class="block">ویژگی‌های خاص</span></div>
        <div class="c-params__list-value"><span class="block">

                                                                    مجهز به حس‌گر اثرانگشت 
                        , 

                                                                    مناسب عکاسی 
                        , 
                                                                    مناسب عکاسی سلفی 
                        , 

                                                        مناسب بازی 
                        , 

                                                                    دارای بدنه مقاوم  

                    </span></div></li><li><div class="c-params__list-key"><span class="block">تعداد سیم کارت</span></div><div class="c-params__list-value"><span class="block">

                                                                    دو سیم کارت
                        

                    </span></div></li><li><div class="c-params__list-key"><span class="block">زمان معرفی</span></div><div class="c-params__list-value"><span class="block">
                            24 نوامبر 2020 
                    </span></div></li><li><div class="c-params__list-key"><span class="block">شیار مجزا برای کارت حافظه</span></div><div class="c-params__list-value"><span class="block">

                                                                    دارد  

                    </span></div></li><li><div class="c-params__list-key"><span class="block">مدل</span></div><div class="c-params__list-value"><span class="block">
                            (جهانی) Xiaomi POCO M3 M2010J19CG - Global 
                    </span></div></li><li><div class="c-params__list-key"><span class="block">شناسه کالا</span></div><div class="c-params__list-value"><span class="block">
                            2800000492908 
                    </span></div></li>
                    <a href="#" class="c-params__collapse--link js-open-product-params">نمایش همه مشخصات کالا</a>
                </ul>

                   
                  </article></div>
                      </div>

                      {{-- //دیدگاه کاربران --}}
                      <div class="ff-box">
                        <div class="o-box__header" id="bakhsh-4">
                            <span class="o-box__title  ">امتیاز و دیدگاه کاربران</span><br>
                            <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                            
                        </div>
                      </div>
                      
                          
                           <div class="comments__container">
                            <div class="comments__side-bar">
                                <div class="comment-star">
                                    <div class="c-comments__side-rating">
                                        <div class="c-comment-main">4.1</div>
                                            <div class="c-comments-desc ">از 5</div>
                                    </div>
                                    <div class="coment-star-rait">
                                        <div class="c-stars">
                                            <span class="c-stars__item"><i style="font-size:20px" class="fa">&#xf005;</i></span>
                                            <span class="c-stars__item"><i style="font-size:20px" class="fa">&#xf005;</i></span>
                                            <span class="c-stars__item"><i style="font-size:20px" class="fa">&#xf005;</i></span>
                                            <span class="c-stars__item"><i style="font-size:20px" class="fa">&#xf005;</i></span>
                                            <span class="c-stars__item"><i style="font-size:20px" class="fa">&#xf005;</i></span>
                                        </div>
                                        <div class="c-comments__side-rating-all">از مجموع423 امتیاز</div>
                                </div>
                                <ul class="c-content-expert__rating">
                                    <li>
                                <div class="c-content-expert__rating-title">کیفیت ساخت</div>
                                <div class="c-content-expert__rating-value">
                                    <div class="c-rating c-rating--general js-rating">
                                        <div class="c-rating__rate js-rating-value" data-rate-value="84%" style="width: 84%;"></div>
                                    </div>
                                    <span class="c-rating__overall-word">۴.۲</span>
                                </div>
                            </li>
                                    <li>
                                <div class="c-content-expert__rating-title">ارزش خرید به نسبت قیمت</div>
                                <div class="c-content-expert__rating-value">
                                    <div class="c-rating c-rating--general js-rating">
                                        <div class="c-rating__rate js-rating-value" data-rate-value="82%" style="width: 82%;"></div>
                                    </div>
                                    <span class="c-rating__overall-word">۴.۱</span>
                                </div>
                            </li>
                                    <li>
                                <div class="c-content-expert__rating-title">نوآوری</div>
                                <div class="c-content-expert__rating-value">
                                    <div class="c-rating c-rating--general js-rating">
                                        <div class="c-rating__rate js-rating-value" data-rate-value="82%" style="width: 82%;"></div>
                                    </div>
                                    <span class="c-rating__overall-word">۴.۱</span>
                                </div>
                            </li>
                                    <li>
                                <div class="c-content-expert__rating-title">امکانات و قابلیت ها</div>
                                <div class="c-content-expert__rating-value">
                                    <div class="c-rating c-rating--general js-rating">
                                        <div class="c-rating__rate js-rating-value" data-rate-value="82%" style="width: 82%;"></div>
                                    </div>
                                    <span class="c-rating__overall-word">۴.۱</span>
                                </div>
                            </li>
                                    <li>
                                <div class="c-content-expert__rating-title">سهولت استفاده</div>
                                <div class="c-content-expert__rating-value">
                                    <div class="c-rating c-rating--general js-rating">
                                        <div class="c-rating__rate js-rating-value" data-rate-value="82%" style="width: 82%;"></div>
                                    </div>
                                    <span class="c-rating__overall-word">۴.۱</span>
                                </div>
                            </li>
                                    <li>
                                <div class="c-content-expert__rating-title">طراحی و ظاهر</div>
                                <div class="c-content-expert__rating-value">
                                    <div class="c-rating c-rating--general js-rating">
                                        <div class="c-rating__rate js-rating-value" data-rate-value="82%" style="width: 82%;"></div>
                                    </div>
                                    <span class="c-rating__overall-word">۴.۱</span>
                                </div>
                            </li>
                            </ul>
                            <div class="c-comments__add-comment-desc">دیدگاه خود را درباره این کالا بیان کنید</div>
                             <a class="add-com-btn"><button>افزودن دیدگاه</button></a>
                             <div class="c-comments__dc-touch">
                                <div class="c-comments__dc-touch-title">۵ امتیاز دیجی‌کلاب</div>
                                <div class="c-comments__dc-touch-desc">با بیان دیدگاه برای این کالا دریافت کنید</div>
                            </div>
                        </div>
                        </div>
                        <div class="c-comments__empty">
                            <div class="c-comments__empty-title">شما هم می‌توانید در مورد این کالا نظر دهید.</div>
                            <div class="c-comments__empty-desc">اگر این محصول را قبلا از دیجی‌کالا خریده باشید، دیدگاه شما به عنوان خریدار ثبت خواهد شد. همچنین در صورت تمایل می‌توانید به صورت ناشناس دیدگاه خود را ثبت کنید.</div>
                        </div> 
                    
                        </div>
                        {{-- //پرسش و پاسخ --}}
                        <div class="ff-box">
                            <div class="o-box__header" id="bakhsh-5">
                                <span class="o-box__title ">پرسش و پاسخ</span><br>
                                <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>    
                            </div>
                          </div> 
                          <div class="js-content">
                            <div class="c-question__container">
                                    <div class="c-question__content">
                                                <form class="c-question__empty-container js-add-question-form" novalidate="novalidate">
                                        
                                        <div class="c-question__empty-desc">
                                            پرسش خود را در مورد کالا مطرح کنید
                                        </div>
                                            <label class="o-form__field-container">
                                    <div class="o-form__field-frame">
                                <textarea name="qa[body]" placeholder="" class="o-form__textarea js-input-textarea js-question-body js-ui-char-counter" maxlength="100">                
                                </textarea>
                            </div>
                                                <div class="o-form__field-counter">
                                    <span class="js-ui-counter-value">۰</span>
                                    /۱۰۰
                                </div>
                                </label>
                    
                                        <div class="c-question__empty-bar">
                                            <div class="c-question__terms">ثبت پرسش به معنی موافقت با <a href="#" class="o-link o-link--sm o-link--no-border">قوانین انتشار دیجی‌کالا</a> است.</div>
                                            <button class="o-btn o-btn--contained-red-md js-add-question-submit disabled">ثبت پرسش</button>
                                        </div>
                                    </form>
                             </div>
                        </div>
                    </div>
                 </div>
             {{-- //اسلاید بار سمت چپ --}}
                <div class="c-mini-buy-box-fixed">
                    <div class="c-mini-buy-box js-mini-buy-box">
                  <div class="c-mini-buy-box__product-info">
                      <img class="c-mini-buy-box__product-info--img" src="/image/89.jpg">  
                      <div><div style="text-align: justify">گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت</div></div>
                    </div>
                              <div class="buy-box-mini">
                                  <ul>
                                      <li > <i class="ml-2" style="    right: -20px;  position: relative;"><img src="/image/guarantee (1).png" style="width: 20px"></i>کالاپلاس</li>
                                      <li style="margin-right: -20px;"><i class="ml-2"> <img src="/image/verified.png" style="width: 20px"></i>گارانی 18 ماهه</li>
                                      <li style="margin-right: -20px;"> <i class="ml-2"><img src="/image/now-in-stock.png" style="width: 20px"></i>موجود در انبار</li>
                                  </ul>
                              </div>
                              <div class="c-product__seller-pricer">4,500,000<span>تومان </span> </div>
                                     <div class="">
                                    <a class="btn-pr-mini"><button>افزودن به سبد خرید</button></a>
                                 
                                    
                                        </div>
           
                               
                            </div>
                            
                        </div>
                  
                 </div>
       {{-- //محصولات پیشنهادی --}}
         @component('components.sliderproduct')
      @slot('titel')
         خریداران این محصول،محصولات زیر را هم خریداری کردند 
      @endslot
      @slot('urlimage')
          <img src="/image/45.jpg">
      @endslot
      @slot('price')
          5,600,000
      @endslot
    @endcomponent
          {{-- ***footer --}}
        </div>
        <div class="c-footer__product-id"><span>شناسه کالا :</span><span>DKP - ۴۱۴۹۰۳۷</span></div>
    </div>
        @component('components.footer')
          
          @endcomponent
          
<script>
    $(document).ready(function() {
                $('.owl-product').owlCarousel({
                    loop: false,
                    rtl: true,
                    dots: false,
                    nav: true,
                    responsive: {
                        0: {
                            items: 4

                        },
                        600: {
                            items: 4

                        },
                        1330: {
                            items: 4

                        },
                        1350: {
                            items: 5
                        }
                    }
                })
              })
           

</script>
{{-- <script src="/js/indexx.js"></script> --}}
  <script src="/js/jspage2.js"></script>
  <script src="/js/indexx.js"></script>
  <script src="/js/megamenu.js"></script>
    </body>
</html>
