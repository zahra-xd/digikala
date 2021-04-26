<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>صفحه  محصولات </title>
         <script src="/js/indexx.js"></script>
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="/css/style.css" >
         <link rel="stylesheet" href="/css/stylepage2.css" >
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.carousel.min.css" />
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
         <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <header class="headerr" id="meno-navbar">
            <div class="header-right">
                   <a class="logo"></a>
                   <i style="font-size:24px" class="fa icon-box-search">&#xf002;</i>
                   <input type="search" class="search-box" placeholder="جستجو در دیجی‌کالا …">
            </div>
                 <div class="header-left">
                        <div class="box-user">
                              <a class="box-left-user text-muted"> <i style="font-size:24px" class="fa">&#xf2c0;</i>ورود به حساب کاربری</a>
                         </div>
                       <a class="text-muted line-user">
                           <i style="font-size:24px" class="fa icon-user-st">&#xf07a;</i>
                       </a>
                </div>
         </header>
<!-- //start meno -->
               <div>
                  <div class="meno" id="my-nav">
                      <div class="headerright">
                          <ul class="meno-headerr nav-level-1-ul">
                            <div class="nav-hover"></div>
                           <li class="nav-level-1-li"><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf0c9;</i>دسته بندی کالا</li></a>
                           <li class="nav-level-1-li"><div class="dropdown"><a>سوپرمارکت</a></div></li>
                           <li>
                              <div class="dropdown">
                                <a><i style="font-size:15px" class="fa ml-2 text-muted">&#xf295;</i>تخفیف ها و پیشنهاد ها</a>
                                    <div class="sum-menmo">
                                         <div class="drop-right">
                                                <div>
                                               <ul class="list-submeno">
                                                    <li> <a>مشاهده همه تخفیف ها و پیشنهاد ها<i style="font-size:14px" class="fa text-muted mr-2">&#xf104;</i></a></li>
                                                    <li> <a>کالاهای شگفت انگیز<i style="font-size:14px" class="fa text-muted mr-2">&#xf104;</i></a></li>
                                                    <li><a>شگفت انگیز سوپر مارکتی<i style="font-size:14px" class="fa text-muted mr-2">&#xf104;</i></a></li>
                                                    <li><a>فروش ویژه<i style="font-size:14px" class="fa text-muted mr-2">&#xf104;</i></a></li>
                                                    <li class="text-muted"><a>کالا های دیجیتال</a></li>
                                                    <li class="text-muted"> ابزار تجهیزات صنعتی خودرو </li>
                                                    <li class="text-muted"><a>مد پوشاک</a></li>
                                                    <li class="text-muted"><a>اسباب بازی، کودک و نوزاد</a></li>
                                                    <li class="text-muted"><a>کالاهای سوپرمارکتی</a> </li>
                                                    <li class="text-muted"><a>زیبایی و سلامت</a> </li>
                                                    <li class="text-muted">  <a>خانه و آشپزخانه</a></li>
                                                    <li class="text-muted"> <a>کتاب و لوازم  تحریر</a> </li>
                                                   <li class="text-muted"> <a>ورزش و سفر</a> </li>
                                               </ul>
                                           </div>
                                        </div>
                                             <div class="droop-left">
                                                   <ul class="list-drop-left">
                                                         <li><a>چتر کم تر از 150 هزار تومان </a></li>
                                                          <li><a>کتاب چاپی تا 70%تخفیف</a></li>
                                                           <hr style="width: 90%;">
                                                           <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>پر فروش ترین کالاها</a></li>
                                                            <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>با هر خرید هدیه بگیرید!</a></li>
                                                            <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>تخفیف پایان سال</a></li>
                                                            <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>کارت هدیه خرید </a></li>
                                                            <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>تازه های فروشنده جدید </a></li>
                                                      </ul>
                                                            <div class="img-off">
                                                                 <a><img src="/image/1.png"></a>
                                                             </div>
                                                          </div>
                                                     </div>
                                                 </div>
                                             </li>
                                                 <li><a> دیجی کالای من</a></li>
                                                  <li>
                                                     <div class="dropdown">
                                                         <a> <i style='font-size:15px ;color: purple;' class='fas ml-2 text-muted'>&#xf863;</i>دیجی پلاس</a>
                                                          <div class="sum-meno">
                                                          <div class="drop-right">
                                                         <div>
                                                         <div class="c-dp-header-submenu__head-title "> خدمات ویژه کاربران <img src="/image/2.svg" alt="Digiplus"> </div>
                                                     <div class="c-dp-header-submenu__head-subtitle">   ارسال رایگان بدون محدودیت قیمت، هدیه نقدی و بازگشت کالا تا ۳۰ روز پس از تحویل</div>
                                                       <div>
                                                          <ul class="sub-plas">
                                                           <li style="color: #0fabc6;"> <a> اطلاعات بیشتر و عضویت <i style="font-size:14px;color: #0fabc6;" class="fa  mr-2">&#xf104;</i></a></li>
                                                           <hr style="width: 90%;">
                                                           <li>کالاهای دیجی پلاس</li>
                                                         </ul>
                                                        </div>
                                                       </div>
                                                         <div class="drop-left">
                                                                <div class="img-digiplas"><a><img src="/image/3.jpg"></a></div>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </li>
                                       <li>
                                        <div class="dropdown">
                                            <a> <i style='font-size:15px' class='fab ml-2 text-muted'>&#xf4f0;</i>دیجی کلاب</a>
                                            <div class="sum-meno">
                                                <div class="drop-right">
                                                <div>
                                                <div class=" logo-sub"><img src="/image/4.svg"></div>
                                                  <ul class="list-submeno">
                                                      <li>  <a>صفحه اصلی دیجی کلاب <i style="font-size:14px" class="fa text-muted mr-2">&#xf104;</i></a>   </li>
                                                      <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>جوایز دیجی کلاب</a></li>
                                                      <li><a class="text-muted"> <i style="font-size:20px" class="fa ml-2">&#xf017;</i>تاریخچه امتیازات دیجی کلاب</a>  </li>
                                                      <li><a><i style="font-size:20px" class="fa text-muted ml-2">&#xf0e7;</i>ماموریت های دیجی کلابی</a></li>
                                                      <hr class="mt-2 mb-0" style="width: 90%;">
                                                      <li>
                                                        <div class="timer-ghorekeshi">
                                                           <a><i style="font-size:20px" class="fa text-muted ml-2">&#xf06b;</i>قرعه کشی  </a>
                                                              <div id="demo-sunmeno"></div>
                                                         </div>
                                                     </li>
                                                   </ul>
                                              </div>
                                          </div>
                                            <div class="drop-left"><div><a><img src="/image/5.jpg"></a></div> </div>
                                     </div>
                                  </div>
                               </li>
                                                       <li><a> سوالی دارد <i style='font-size:15px' class='fas text-muted ml-2'>&#xf128;</i></a></li>
                                                       <li><a>فروشنده شوید</a></li>
                                               </ul>
                                        </div>
                                   <div class="headerleft">
                                      <ul class="place">
                                         <li>
                                             <span class="text-muted">  ارسال به خراسان شمالی، شیروان</span>
                                             <span class="text-muted"><i style='font-size:24px' class='fas'>&#xf3c5;</i></span>
                                         </li>
                                      </ul>
                               </div>
                           </div>
                     </div>
                </div>
             </div> 
{{-- // منو محصولات  --}}
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
                                    <div class="brand-titel">
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
                                        <i  class='far'>&#xf0eb;</i>
                                        <span>پیشنهاد شده توسط بیش از ۲۲۰ نفر از خریداران</span>
                                    </div>
                                 <div class="c-product__config-wrapper">
                                     <div class="c-product__circle-variants">
                                         <div class="circle-titel">
                                             <header>رنگ:</header>
                                             <span>زرد</span>

                                         </div>
                                         <ul class="product-variants">
                                             <li class="circle-item" style="background:yellow"> </li>
                                             <li class="circle-item" style="background: black"> </li>
                                             <li class="circle-item" style="background: blue"> </li>
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
                                             <li class="moust-carbord">+موارد بیشتر</li>
                                            </ul>
                                            {{-- <div class="text-product-param">
                                                <div class="c-product__additional-item ">
                                                    <span class="glyphicon">&#xe101;</span>
                                                    هشدار سامانه همتا: حتما در زمان تحویل دستگاه، به کمک کد فعال‌سازی چاپ شده روی جعبه یا کارت گارانتی، دستگاه را از طریق #7777*، برای سیم‌کارت خود فعال‌سازی کنید. آموزش تصویری در آدرس اینترنتی hmti.ir/05
                                                </div>
                                            </div> --}}
                                     </div>

                                 </div>
                                 {{-- <div class="c-product__summary js-product-summary">
                                     <div class="card__box">
                                         <div class="c-product__seller-info js-seller-info">
                                             <div class=" c-product__seller-box">
                                                     <div class="c-product-header">
                                                         <div>فروشنده</div>
                                                         <a>4 فروشنده دیگر</a>
                                                     </div>
                                                     <div class="c-proc-row">

                                                     </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div> --}}
                                </div>
                                <div class="c-product__summary js-product-summary">
                                    <div class="card__box">
                                        <div class="c-product__seller-info js-seller-info">
                                            <div class=" c-product__seller-box">
                                                    <div class="c-product-header">
                                                        <div>فروشنده</div>
                                                        <a style="color: #0fabc6;">4 فروشنده دیگر</a>
                                                    </div>
                                                    <div class="c-proc-row">
                                                        <i style='font-size:24px' class='fas cproct-icon'>&#xf559;</i>
                                                        <div class="c-product__seller-first-line mr-2">
                                                            <span class="c-product-name">داده پرداز مهر جاوید</span>
                                                            <i style='font-size:20px' class='fas text-muted mrr-5'>&#xf104;</i>
                                                        </div>
                                            </div>
                                            <div class="text-muted  c-pr-line c-product__seller-first-line mr-5 ">عملکرد <span class="ml-2">5از 5</span>
                                           <span> | </span>     <span  class="mr-2">80 درصد رضایت کالا</span></div>
                                           <div class="c-proc-row">
                                            <i style='font-size:20px' class='fas'>&#xf666;</i>
                                            <div class="c-product__seller-first-line mr-2">
                                                <span class="c-product-name">گارانتي 18 ماهه</span>
                                              
                                            </div>
                                </div>
                                <div class="c-proc-row">
                                    <i style='font-size:24px' class='fas cproct-icon'>&#xf559;</i>
                                    <div class="c-product__seller-first-line mr-2">
                                        <span class="c-product-name">موجود در انبار</span>
                                        <i style='font-size:20px' class='fas text-muted mrr-5'>&#xf104;</i>
                                    </div>
                                 </div>
                        <div class="text-muted  c-pr-line c-product__seller-first-line mr-5 ">ارسال ديجي کالا</div>
                                            </div>
                                            <div class="c-product__seller-price-real">
                                                <div class="c-product__seller-price">4,800,000<span class="text-se-price">تومان</span> </div>
                                            </div>
                                            <div class="c-cart-view-count">
                                                <i style='font-size:20px' class='far ml-2'>&#xf06e;</i>
                                                50نفر در حال بازديد اين کالا هستند 
                                            </div>
                                            <div class="c-product__seller-row c-product__seller-row--add-to-cart">
                                                <a class="btn-add-to-cart">
                                                    <span class="btn-add-to-cart__txt">افزودن به سبد خريد </span>
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="c-product-shipping-limitation">
                                            <div class="c-product-shipping-limitation__title">
                                                <i style='font-size:14px ;margin-right:-30px;color:orange' class='far'>&#xf017;</i>
                                                <span class="mr-2">اين کالا را ارزان تر بخريد </span>
                                                <i style='font-size:14px' class='fas rt'>&#xf104;</i>
                                            </div>
                                            <div class="c-product-shipping-limitation__dsc"><span>از 4و500و000 هزار تومان توسط فروشندگان ديگر</span></div>
                                        </div>
                                        <div class="c-product-shipping-limitationn">
                                            <div class="c-product-shipping-limitation__title">
                                                <i style='font-size:14px ;margin-right:-30px' class='far'>&#xf017;</i>
                                                <span class="mr-2">اين کالا را ارزان تر بخريد </span>
                                                <i style='font-size:14px' class='fas rt'>&#xf104;</i>
                                            </div>
                                        </div>
                                        <div class="ml-5 text-muted">ايا قيمت مناسبي سراغ داريد؟</div>
                                       
                                    </div>
                                    
                                </div> 
                             
                         
                       
                            </div>

                       <div class="c-product__usp">
                           <aside class="c-product__feature">
                               <div class="o-grid">
                                   <div class="row">
                                       <div class="c-product__feature-col">
                                           <a class="cfeature-item c-product__feature-item--1">امکان تحویل<br>اکسپرس</a>
                                       </div>
                                       <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--3">هفت روز هفته<br>24 ساعته </a>
                                    </div>
                                    <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--4">تحویل<br>پرداخت در محل </a>
                                    </div>
                                    <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--5">هفت  روز ضمانت بازگشت کالا</a>
                                    </div>
                                    <div class="c-product__feature-col">
                                        <a class="cfeature-item c-product__feature-item--6">ضمانت<br>اصل بودن کالا</a>
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

                               <li><i style='font-size:24px' class='far'>&#xf004;</i></li>
                               <li><i style='font-size:24px' class='fas'>&#xf1e0;</i> </li>
                               <li><i style='font-size:24px' class='far'>&#xf1f6;</i></li>
                               <li><i style='font-size:24px' class='fas'>&#xf201;</i></li>
                               <li><i style='font-size:24px' class='fas'>&#xf201;</i></li>
                            </ul>
                               <div class="card-galery-img">
                                      <img src="/image/77.jpg">
                                      <div class="c-gallery__main-img-badges-container"></div>
                                    </div>
                            </div>
                            <ul class="c-gallery__items">
                                {{-- <li class="js-product-thumb-img" data-id="1">
                                    <div class="thumb-wrapper">
                                        <img src="/image/78.jpg">
                                    </div>
                                </li> --}}
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
                                <li class="js-product-thumb-img" data-id="6">
                                    <div class="thumb-wrapper">
                                        <img src="/image/82.jpg" style="-webkit-filter: blur(3px)">
                                        <div class="cir">...</div>
                                    </div>
                                </li>
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
                                {{-- <li class="js-product-thumb-img" data-id="9">
                                    <div class="thumb-wrapper">
                                        <img src="MAINIMG/1.jpg">
                                        
                                    </div>
                                </li>
                                <li class="js-product-thumb-img" data-id="10">
                                    <div class="thumb-wrapper">
                                        <img src="MAINIMG/1.jpg">
                                       
                                    </div>
                                </li>
                                <li class="js-product-thumb-img" data-id="11">
                                    <div class="thumb-wrapper">
                                        <img src="MAINIMG/1.jpg">
                                        
                                    </div>
                                </li>
                                <li class="js-product-thumb-img" data-id="12">
                                    <div class="thumb-wrapper">
                                        <img src="MAINIMG/1.jpg">
                                       
                                    </div>
                                </li> --}}
                            </ul>
                            <div class="bazkhord-product "><a>بازخرد درباره یاین کالا</a></div>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="c-remodal-gallery__tabs js-top-bar-tabs">
                                            <div class="c-remodal-gallery__tab c-remodal-gallery__tab--selected js-gallery-tab" data-id="1">تصاویر رسمی
                                            </div>
                                        </div>
                                        <span class="close">&times;</span>
                                    </div>
                                    <div class="modal-body">
                                        <div class="c-remodal-gallery__content js-gallery-tab-content is-active">
                                            <div class="c-remodal-gallery__content_1">
                                                <div class="gal"><img class="imggg" src="MAINIMG/1.jpg"></div>
                                                <div class="gal"><img class="imggg" src="MAINIMG/2.jpg"></div>
                                                <div class="gal"><img class="imggg" src="MAINIMG/3.jpg"></div>
                                                <div class="gal"><img class="imggg" src="MAINIMG/4.jpg"></div>
                                                <div class="gal"><img class="imggg" src="MAINIMG/5.jpg"></div>
                                                <div class="gal"><img class="imggg" src="MAINIMG/6.jpg"></div>
                                            </div>
                                            <div class="info_img">
                                                <div class="infoImg">
                                                    <div data-slide="1" class="gal-small"><img src="MAINIMG/1.jpg">
                                                    </div>
                                                    <div data-slide="2" class="gal-small"><img src="MAINIMG/2.jpg">
                                                    </div>
                                                    <div data-slide="3" class="gal-small"><img src="MAINIMG/3.jpg">
                                                    </div>
                                                    <div data-slide="4" class="gal-small"><img src="MAINIMG/4.jpg">
                                                    </div>
                                                    <div data-slide="5" class="gal-small"><img src="MAINIMG/5.jpg">
                                                    </div>
                                                    <div data-slide="6" class="gal-small"><img src="MAINIMG/6.jpg">
                                                    </div>
                                                    <div data-slide="1" class="gal-small"><img src="MAINIMG/1.jpg">
                                                    </div>
                                                    <div data-slide="2" class="gal-small"><img src="MAINIMG/2.jpg">
                                                    </div>
                                                    <div data-slide="3" class="gal-small"><img src="MAINIMG/3.jpg">
                                                    </div>
                                                    <div data-slide="4" class="gal-small"><img src="MAINIMG/4.jpg">
                                                    </div>
                                                    <div data-slide="5" class="gal-small"><img src="MAINIMG/5.jpg">
                                                    </div>
                                                    <div data-slide="6" class="gal-small"><img src="MAINIMG/6.jpg">
                                                    </div>
                                                    <div data-slide="1" class="gal-small"><img src="MAINIMG/1.jpg">
                                                    </div>
                                                    <div data-slide="2" class="gal-small"><img src="MAINIMG/2.jpg">
                                                    </div>
                                                    <div data-slide="3" class="gal-small"><img src="MAINIMG/3.jpg">
                                                    </div>
                                                    <div data-slide="4" class="gal-small"><img src="MAINIMG/4.jpg">
                                                    </div>
                                                    <div data-slide="5" class="gal-small"><img src="MAINIMG/5.jpg">
                                                    </div>
                                                    <div data-slide="6" class="gal-small"><img src="MAINIMG/6.jpg">
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
                {{-- <div class="c-box-suppliers">
                    <div class="c-box-suppliers-heder">
                        <div class="o-box__header">
                            <span class="o-box__title">لیست فروشندگان کالا</span>
                        </div>
                        <div class="c-box">
                            <div class="c-table-suppliers js-c-table-suppliers--summary">
                                <div class="table-sup__body">
                                    <div class="c-table-suppliers__row js-supplier in-filter in-list c-table-suppliers__row--active">
                                        <div class="c-table-suppliers__cell c-table-suppliers__cell--title">
                                            <span class="c-table-suppliers__seller-icon   "></span>
                                            <div class="c-table-suppliers__seller-wrapper">
                                                <p class="c-table-suppliers__seller-name"><a>داده پرداز جاوید</a></p>
                                                  <div class="c-table-suppliers__rating">
                                                      <span>عملکرد 5 از 5 
                                                          | 80 درصد رضایت 
                                                      </span>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

              </div>
              <div>
                <div class="containert">
                    <div class="row">
                        <div class="cadr-slaider-productt">
                            <div class="text-prodouct"> 
                                 <p> محصولات مرتبط</p>
                                
                                </div>
                            <div class="owl-carousel owl-product owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;">
                                        <div class="owl-item active" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/45.jpg"> </div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">400.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/46.jpg"></div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">4.000.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/46.jpg"> </div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">4.000.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/47.jpg"></div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">420.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/47.jpg"></div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">800.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div>
                                                        <img src="/image/48.jpg">  </div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">440.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/45.jpg"> </div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">2.400.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div>  <img src="/image/45.jpg"></div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">140.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div> <img src="/image/46.jpg"></div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">200.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 190px;">
                                            <div class="col-lg-2 nj">
                                                <div class="item-page2 ">
                                                    <div><img src="/image/48.jpg"></div>
                                                    <div class="mt-2 to-sistem ">
                                                        <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                        <div class="price-2">600.000 تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- //کامنت --}}
            <div class="c-product__bottom-section u-mt-12 has-mini-buybox">
                  <div id="tab" class="o-box o-box--no-border o-box--grow c-product__tabs-container">
                      <ul class="tab-box">
                          <li class=" o-box__tab  is-active">
                              <a href="">نقد بررسی</a>
                          </li>
                          <li class=" o-box__tab  ">
                            <a href="">بررسی تخصصی</a>
                        </li>
                        <li class=" o-box__tab  ">
                            <a href=""> مشخصات</a>
                        </li>
                        <li class=" o-box__tab ">
                            <a href="">دیدگاه کاربران </a>
                        </li>
                        <li class=" o-box__tab  ">
                            <a href="">پرسش و پاسخ</a>
                        </li>
                      </ul>
                      <div>
                          <div>
                            <div class="o-box__header">
                                <span class="o-box__title">نقد و بررسی اجمالی</span><br>
                                <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                              </div>
                              <article>
                                  
                                         <div>
                                             <section class="c-content-expert__summary">
                                                 <div class="c-mask">
                                                     <div class="c-mask__text c-mask__text--product-summary">گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت از جمله اولین سری محصولات برند شیائومی است. این محصول دارای ساختاری متوازن و خوش‌ساخت بدون پشتیبانی از تکنولوژی 5G در تاریخ نوامبر 2020 روانه بازار شده است. این محصول از فریم پلاستیکی ساخته شده است که قاب جلو شیشه‌ای جلوه ویژه‌ای به این مدل بخشیده است. صفحه‌نمایش گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت در اندازه 6.53 منتشر شده است. این صفحه‌نمایش کاملاً تمام‌صفحه است و در بالا وسط اثری از بریدگی یا حفره دوربین سلفی وجود دیده می‌شود. دوربین سلفی این محصول دارای حسگر 8 مگاپیکسلی است .صحفه‌نمایش گوشی موبایل شیائومی مدل POCO M3 M2010J19CG با استفاده از فناوری Corning Gorilla Glass 3 در برابر خط‌وخش و صدمات احتمالی محافظت می‌شود. ویژگی دیگر Poco M3 مجهز شدن به حسگر اثرانگشت در زیر کنار گوشی که نشان از بالارده بودن محصول دارد. گفتنی است ۳ دوربین که سنسور اصلی آن 48 مگاپیکسلی است در قسمت پشتی این گوشی جا خوش کرده‌اند. این دوربین‌ها قادر هستند ویدئوی Full HD را ثبت و ضبط کنند. دوربین‌ سلفی این محصول هم به سنسوری 8 مگاپیکسلی مجهز شده است. بلوتوث نسخه 5.0، نسخه 10 سیستم عامل اندروید و باتری شگفت‌انگیز 6000 میلی‌آمپرساعتی از دیگر ویژگی‌‌های این گوشی جدید هستند. گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت دارای قابلیت reverse charging است. شارژ معکوس یا همون (reverse charging) ویژگی است که به شما این امکان را می‌دهد که از تلفن خود برای شارژ دستگاه‌های دیگر مانند تلفن‌های هوشمند، ساعت‌های هوشمند و باندهای هوشمندی که از شارژ بی‌سیم پشتیبانی می‌کنند، استفاده کنید. برای اینکه بتوانید آنها را به‌صورت بی‌سیم شارژ کنید، دستگاه شما باید از پروتکل شارژ بی‌سیم Qi پشتیبانی کند.</div>
                                                     <a class="c-mask-link">ادامه مطلب</a>
                                                    </div>
                                           
                                             </section>
                                      {{-- *** --}}
                                      <div>
                                        <div class="containert">
                                            <div class="row">
                                                <div class="cadr-slaider-productt">
                                                    <div class="text-prodouct"> 
                                                         <p> پیشنهاد فروشندگان</p>
                                                        
                                                        </div>
                                                    <div class="owl-carousel owl-product owl-theme owl-rtl owl-loaded owl-drag">
                                                        <div class="owl-stage-outer">
                                                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;">
                                                                <div class="owl-item active" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/45.jpg"> </div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">400.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/46.jpg"></div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">4.000.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/46.jpg"> </div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">4.000.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/47.jpg"></div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">420.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/47.jpg"></div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">800.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div>
                                                                                <img src="/image/48.jpg">  </div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">440.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/45.jpg"> </div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">2.400.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div>  <img src="/image/45.jpg"></div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">140.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div> <img src="/image/46.jpg"></div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">200.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 190px;">
                                                                    <div class="col-lg-2 nj">
                                                                        <div class="item-page2 ">
                                                                            <div><img src="/image/48.jpg"></div>
                                                                            <div class="mt-2 to-sistem ">
                                                                                <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                                                <div class="price-2">600.000 تومان</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                         </div>
                              </article>
                          </div>
                          <div>
                            <div class="o-box__header">
                                <span class="o-box__title">نقد و بررسی تخصصی</span><br>
                                <span class="o-box__header-desc">Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                               
                            </div>
                              <article>
                                  <div class="c-content-expert__articles">
                                      <section>
                                          <h3 class="c-content-expert__title">جنجالی دیگر</h3>
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
                                  <div class="o-box__header">
                                      <span class="o-box__title">مشخصات کالا</span>
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
                    </span></div></li></ul>

                   
                    <a href="#" class="c-params__collapse--link js-open-product-params">نمایش همه مشخصات کالا</a></article></div>
                      </div>
                  </div>
            </div>
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
    </body>
</html>
