<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>فروشگاه اینترنتی دیجی کالا</title>
       <link href="/public/font/shabnam-font-v1.1.0">
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
         <link href="{{ asset('owll-crousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
         <script src="{{ asset('owll-crousel/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>
         <script src="{{ asset('/public/owll-crousel/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}"></script>

        </head>
 <body class="antialiased">
 
      <div class="bg-kol">
<!-- //start header -->
         @component('components.header')
             @endcomponent
   {{-- //menu --}}
             @component('components.menuheader')
             @endcomponent
             <!-- //slider -->
           <div class="gt">
              <div class="bg-slider containert">
                  <div class="cont">
                     <div class="row">
                         <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                               <div id="carouselExampleIndicators" class="carousel slide carousel-image" data-ride="carousel">
                                <ol class="carousel-indicators circleslide">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                     <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                     <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                     <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                </ol>
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"><img src="/image/6.jpg" class="d-block w-100" alt="..."></div>
                                        <div class="carousel-item"><img src="/image/7.jpg" class="d-block w-100" alt="..."> </div>
                                        <div class="carousel-item"><img src="/image/8.gif" class="d-block w-100" alt="..."> </div>
                                        <div class="carousel-item"><img src="/image/9.jpg" class="d-block w-100" alt="..."> </div>
                                        <div class="carousel-item"><img src="/image/10.jpg" class="d-block w-100" alt="..."></div>
                                        <div class="carousel-item"> <img src="/image/11.jpg" class="d-block w-100" alt="...">  </div>
                                        <div class="carousel-item"> <img src="/image/13.jpg" class="d-block w-100" alt="..."> </div>
                                     </div>
                             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                             </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 image-banner">
                    <img src="/image/12.jpg" alt="">
                    <img src="/image/14.jpg" alt="">
                </div>
            </div>
           </div>
  </div>
    <!-- //پیشنهاد های شگفت انگیز -->
    <div class="spuermarket">
        <div class="containert">
            <div class="row">
                <div class=" d-lg-block shegeft-img">
                    <a class="c-swiper-specials__title"><img src="/image/15.png" alt="  پیشنهاد شگفت انگیز سوپرمارکتی"> </a>
                        <div class="shegeft-btn">
                             <a class="mr-4"> مشاهده </a>
                               <i style="font-size:24px" class="fa ml-4"></i>
                         </div>
                    </div>
                <div class="box-sh">
                    <div class="owl-carousel  owl-uy owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 2200px;">
                                <div class="owl-item active" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                         <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                              <div class="box-of">
                                                   <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                 <div class="c-new-price__valuee">
                                                      ۳۸,۶۴۰
                                                     <span class="c-new-price__currency">تومان</span></div>
                                                <div>
                                                <div class="c-product-box__progress-bar">
                                                    <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                </div>
                                            </div>
                                            <div class="mm-l">
                                                <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                <div>
                                                    <span class="demo">5:34:20</span>
                                                    <span><i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                        <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                        <div class="box-of">
                                            <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                <div class="c-new-price__valuee">
                                                   ۳۸,۶۴۰
                                                     <span class="c-new-price__currency">تومان</span></div>
                                                 <div>
                                                        <div class="c-product-box__progress-bar">
                                                          <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                         </div>
                                                    </div>
                                                  <div class="mm-l">
                                                         <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                           <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                  </div>
                                           </div>
                                       </div>
                                </div>
                                <div class="owl-item active" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                             <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                            <div class="box-of">
                                                 <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                   <div class="c-new-price__valuee">
                                                           ۳۸,۶۴۰
                                                          <span class="c-new-price__currency">تومان</span></div>
                                                    <div>
                                                          <div class="c-product-box__progress-bar">
                                                                  <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                         </div>
                                                   </div>
                                                      <div class="mm-l">
                                                                 <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                <div><span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span> </div>
                                                             </div>
                                                        </div>
                                                  </div>
                                             </div>
                                                  <div class="owl-item active" style="width: 275px;">
                                                       <div class="item2">
                                                        <div class="mg-shgf-green">
                                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                                        </div>
                                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                          <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                                 <div class="box-of">
                                                                     <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                         <div class="c-new-price__valuee">
                                                                               ۳۸,۶۴۰
                                                                               <span class="c-new-price__currency">تومان</span></div>
                                                                          <div>
                                                                        <div class="c-product-box__progress-bar">
                                                                        <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                     </div>
                                                                </div>
                                                                 <div class="mm-l">
                                                                     <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                          <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                     </div>
                                                               </div>
                                                          </div>
                                                          </div>
                                                               <div class="owl-item" style="width: 275px;">
                                                                   <div class="item2">
                                                                    <div class="mg-shgf-green">
                                                                            <img style="width: 170px;margin-right: 40px;" src="../imagedigikala/56.jpg">
                                                                    </div>
                                                                            <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                                              <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                                                   <div class="box-of">
                                                                                      <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                                           <div class="c-new-price__valuee">
                                                                                                  ۳۸,۶۴۰
                                                                                                   <span class="c-new-price__currency">تومان</span></div>
                                                                                               <div>
                                                                                           <div class="c-product-box__progress-bar">
                                                                                      <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                                      </div>
                                                                                  </div>
                                                                                            <div class="mm-l">
                                                                                                   <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                                                     <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                                                   </div>
                                                                                                </div>
                                                                                              </div>
                                                                                        </div>
                                                                             <div class="owl-item" style="width: 275px;">
                                                                                  <div class="item2">
                                                                                    <div class="mg-shgf-green">
                                                                                          <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                                                                    </div>
                                                                                          <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                                                           <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                                                      <div class="box-of">
                                                                                         <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                                             <div class="c-new-price__valuee">
                                                                                                       ۳۸,۶۴۰
                                                                                                     <span class="c-new-price__currency">تومان</span></div>
                                                                                           <div>
                                                                                           <div class="c-product-box__progress-bar">
                                                                                        <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                   <div class="mm-l">
                                                                                     <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                                            <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                                     </div>
                                                                                  </div>
                                                                              </div>
                                                                         </div>
                        <div class="owl-item" style="width: 275px;">
                                          <div class="item2">
                                            <div class="mg-shgf-green">
                                                    <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                            </div>
                                                    <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                       <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                         <div class="box-of">
                                                             <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                <div class="c-new-price__valuee">
                                                                      ۳۸,۶۴۰
                                                                    <span class="c-new-price__currency">تومان</span></div>
                                                               <div>
                                                                         <div class="c-product-box__progress-bar">
                                                                              <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                          </div>
                                                               </div>
                                                                       <div class="mm-l">
                                                                                <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                                <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                          </div>
                                <div class="owl-item" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                               <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                               <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                 <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                        <div class="box-of">
                                                               <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                 <div class="c-new-price__valuee">
                                                                     ۳۸,۶۴۰
                                                                     <span class="c-new-price__currency">تومان</span></div>
                                                                            <div>
                                                                               <div class="c-product-box__progress-bar">
                                                                           <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                   </div>
                                                           </div>
                                                                   <div class="mm-l">
                                                                 <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                  <span>02/32/40 
                                                                    <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i>
                                                                </span>
                                                              </div>
                                                       </div>
                                                   </div>
                                             </div>
                                          </div>
                                     </div>
                              <div class="owl-nav">
                                  <button type="button" role="presentation" class="owl-prev">
                                            <span aria-label="Previous">‹</span>
                                        </button> 
                                      
                                        </div>
                                  <div class="owl-dots disabled"></div> 
                                   <div class="owl-nav">
                              
                                    </div>
                                    <div class="owl-dots disabled"></div></div> 
                                </div> 
                             
                           </div>
                        </div>
                    </div>  
    <!-- //4 تا باکس -->
    <div class="four-box">
        <div class="containert">
           <div class="row banner2-item">
              <div class="col-6 col-lg-3 col-xl-3 col-md-3   col-sm-3"><img src="/image/17.jpg" alt="" width="100%"> </div>
                <div class="col-6 col-lg-3 col-xl-3 col-md-3 col-sm-3"><img src="/image/22.jpg" alt="" width="100%"> </div>
                <div class="col-6 col-lg-3 col-xl-3 col-md-3 col-sm-3"><img src="/image/19.jpg" alt="" width="100%"> </div>
                <div class="col-6 col-lg-3 col-xl-3 col-md-3 col-sm-3"> <img src="/image/20.jpg" alt="" width="100%"></div>
            </div>
        </div>
    </div>
    <!-- //محصولات شگفت انگیز -->
   
    <div class="spuermarket2">
        <div class="containert">
            <div class="row">
                <div class=" d-lg-block shegeft-img">
                    <a class="c-swiper-specials__title"><img src="/image/21.png" alt="  پیشنهاد شگفت انگیز سوپرمارکتی"> </a>
                        <div class="shegeft-btn">
                             <a class="mr-4"> مشاهده </a>
                               <i style="font-size:24px" class="fa ml-4"></i>
                         </div>
                    </div>
                <div class="box-sh">
                    <div class="owl-carousel  owl-uy owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 2200px;">
                                <div class="owl-item active" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                         <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                              <div class="box-of">
                                                   <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                 <div class="c-new-price__valuee">
                                                      ۳۸,۶۴۰
                                                     <span class="c-new-price__currency">تومان</span></div>
                                                <div>
                                                <div class="c-product-box__progress-bar">
                                                    <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                </div>
                                            </div>
                                            <div class="mm-l">
                                                <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                <div>
                                                    <span class="demo">5:34:20</span>
                                                    <span><i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                        <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                        <div class="box-of">
                                            <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                <div class="c-new-price__valuee">
                                                   ۳۸,۶۴۰
                                                     <span class="c-new-price__currency">تومان</span></div>
                                              <div>
                                                        <div class="c-product-box__progress-bar">
                                                          <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                              </div>
                                                    </div>
                                                  <div class="mm-l">
                                                         <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                           <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                  </div>
                                           </div>
                                       </div>
                                </div>
                                <div class="owl-item active" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                             <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                            <div class="box-of">
                                                 <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                   <div class="c-new-price__valuee">
                                                           ۳۸,۶۴۰
                                                          <span class="c-new-price__currency">تومان</span></div>
                                                    <div>
                                                          <div class="c-product-box__progress-bar">
                                                                  <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                         </div>
                                                   </div>
                                                      <div class="mm-l">
                                                                 <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                <div><span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span> </div>
                                                             </div>
                                                        </div>
                                                  </div>
                                             </div>
                                                  <div class="owl-item active" style="width: 275px;">
                                                       <div class="item2">
                                                        <div class="mg-shgf-green">
                                                        <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                   </div>
                                                        <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                          <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                                 <div class="box-of">
                                                                     <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                         <div class="c-new-price__valuee">
                                                                               ۳۸,۶۴۰
                                                                               <span class="c-new-price__currency">تومان</span></div>
                                                                          <div>
                                                                        <div class="c-product-box__progress-bar">
                                                                        <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                     </div>
                                                                </div>
                                                                 <div class="mm-l">
                                                                     <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                          <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                     </div>
                                                               </div>
                                                          </div>
                                                          </div>
                                                               <div class="owl-item" style="width: 275px;">
                                                                   <div class="item2">
                                                                    <div class="mg-shgf-green">
                                                                            <img style="width: 170px;margin-right: 40px;" src="../imagedigikala/56.jpg">
                                                                    </div>
                                                                            <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                                              <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                                                   <div class="box-of">
                                                                                      <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                                           <div class="c-new-price__valuee">
                                                                                                  ۳۸,۶۴۰
                                                                                                   <span class="c-new-price__currency">تومان</span></div>
                                                                                               <div>
                                                                                           <div class="c-product-box__progress-bar">
                                                                                      <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                                      </div>
                                                                                  </div>
                                                                                            <div class="mm-l">
                                                                                                   <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                                                     <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                                                   </div>
                                                                                                </div>
                                                                                              </div>
                                                                                        </div>
                                                                             <div class="owl-item" style="width: 275px;">
                                                                                  <div class="item2">
                                                                                    <div class="mg-shgf-green">
                                                                                          <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                                                                    </div>
                                                                                          <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                                                           <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                                                      <div class="box-of">
                                                                                         <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                                             <div class="c-new-price__valuee">
                                                                                                       ۳۸,۶۴۰
                                                                                                     <span class="c-new-price__currency">تومان</span></div>
                                                                                           <div>
                                                                                           <div class="c-product-box__progress-bar">
                                                                                        <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                   <div class="mm-l">
                                                                                     <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                                            <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                                     </div>
                                                                                  </div>
                                                                              </div>
                                                                         </div>
                        <div class="owl-item" style="width: 275px;">
                                          <div class="item2">
                                            <div class="mg-shgf-green">
                                                    <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                            </div>
                                                    <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                       <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                         <div class="box-of">
                                                             <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                <div class="c-new-price__valuee">
                                                                      ۳۸,۶۴۰
                                                                    <span class="c-new-price__currency">تومان</span></div>
                                                               <div>
                                                                         <div class="c-product-box__progress-bar">
                                                                              <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                          </div>
                                                               </div>
                                                                       <div class="mm-l">
                                                                                <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                                <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                          </div>
                                <div class="owl-item" style="width: 275px;">
                                    <div class="item2">
                                        <div class="mg-shgf-green">
                                               <img style="width: 170px;margin-right: 40px;" src="/image/16.jpg">
                                        </div>
                                               <p class="text-supermark">Vanilla And Honey مقدار 400 گرم شامپو بدن کرمی اکتیو مدل</p>
                                                 <p class="textsupermark">10.000 تومان هدیه نقدی</p>
                                                        <div class="box-of">
                                                               <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                                 <div class="c-new-price__valuee">
                                                                     ۳۸,۶۴۰
                                                                     <span class="c-new-price__currency">تومان</span></div>
                                                                            <div>
                                                                               <div class="c-product-box__progress-bar">
                                                                           <div class="c-product-box__progress-bar-value" style="width: 71%"></div>
                                                                   </div>
                                                           </div>
                                                                   <div class="mm-l">
                                                                 <div><span class="precent-frosh">67%</span> فروش رفته</div>
                                                                  <span>02/32/40 <i style=" font-size:20px;color: #737373;" class='far'>&#xf017;</i></span>
                                                              </div>
                                                       </div>
                                                   </div>
                                             </div>
                                          </div>
                                     </div>
                                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                     <div class="owl-dots disabled"></div>
                                   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                                </div>
                           </div>
                        </div>
                    </div>
    <!-- //پیشنهاد های لحظه ای  -->
    <div class="four-box">
        <div class="containert container--home">
            <div class="row">
                <div class="o-page">
                    <div class="o-page__row o-grid o-page__row--main-page js-recommendation-home_1-row">
               
                        <div class="col-9">
                            <div class="box-prodout2">
                                 <div class="pp"> <div class="o-headline"><span> <p class="pt-2 pr-4" style="font-size: 16px;">گوشی موبایل</p></span></div> </div>
                                   <div class="owl-carousel owl-pishnahad-lahzei owl-theme owl-rtl owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(456px, 0px, 0px); transition: all 0.25s ease 0s; width: 2280px;">
                                            <div class="owl-item" style="width: 228px;">
                                                <div class="col-lg-2 col-sm-2 col-md-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/46.jpg"> </div>
                                                        <div class=" to-sistem  mttt">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20C دو </a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 228px;">
                                                 <div class="col-lg-2 nj">
                                                      <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/45.jpg"> </div>
                                                        <div class=" to-sistem mttt">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو</a>
                                                            <div class="price price2" >400.000 تومان</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 228px;">
                                                <div class="col-lg-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/48.jpg"> </div>
                                                        <div class=" to-sistem mttt">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو</a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 228px;">
                                                <div class="col-lg-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/47.jpg"> </div>
                                                        <div class=" to-sistem mttt">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو </a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 228px;">
                                                <div class="col-lg-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/48.jpg"> </div>
                                                        <div class=" to-sistem mttt ">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو </a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 228px;">
                                                <div class="col-lg-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/47.jpg"> </div>
                                                        <div class=" to-sistem mttt ">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو </a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 228px;">
                                                <div class="col-lg-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/46.jpg"> </div>
                                                        <div class=" to-sistem mttt">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو</a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 228px;">
                                                <div class="col-lg-2 nj">
                                                    <div class="item-lahzei">
                                                        <div class="img-lahz-slide"> <img src="/image/45.jpg"> </div>
                                                        <div class=" to-sistem mttt">
                                                            <a> گوشی موبایل شیائومی مدل <br>POCO X3 M2007J20CG دو </a>
                                                            <div class="price price2">400.000 تومان</div>
                                                        </div>
                                                   
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="pishnahad-lahzaei ">
                                <div class="slides fade-ani">
                                <div class="progress">
                                    <div class="timeline"></div>
                                </div>
                               <div class="c-promo-single__headline js-promo-single-bar is-active">پیشنهادهای لحظه‌ای برای شما</div>
                                   <div class="imagee-laz">
                                       <img src="/image/18.jpg"> 
                                    </div>
                                     <div class="text-box-lahzeei"> 
                                            <span> سرویس قابلمه 6 پارچه مدل S67001 </span> 
                                        </div>
                              <div class="c-new-price__valuew">
                                      <div class="box-of">
                                        <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                        <div class="c-new-price__valuew">    
                                            <span  class="price-value ml-2">    ۳۸,۶۴۰  تومان</span></div>
                                        <div>
                                     </div>
                                    </div>

                                    </div>
                              </div>
                              <div class="slides fade-ani">
                                <div class="progress">
                                    <div class="timeline"></div>
                                </div>
                               <div class="c-promo-single__headline js-promo-single-bar is-active">پیشنهادهای لحظه‌ای برای شما</div>
                                   <div class="imagee-laz">
                                       <img src="/image/111.jpg"> 
                                    </div>
                                     <div class="text-box-lahzeei"> 
                                            <span> کوله کوهنوردی</span> 
                                        </div>
                              <div class="c-new-price__valuew">
                                      <div class="box-of">
                                        <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                        <div class="c-new-price__valuew">    
                                            <span  class="price-value ml-2">    ۳۸,۶۴۰  تومان</span></div>
                                        <div>
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
 <!-- //2000 تا کالا -->
 <div class="fourbox">
            <div class="containert">
                <div class="row">
                    <div class="o-page__row c-box c-promotion__categories-container c-promotion__categories-container--home">
                        <div class="c-promotion__categories-title">بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</div>
                        <div class="c-promotion__categories">
                            <a href="" class="c-promotion__category c-promotion__category--electronics">
                           <i><img src="/image/icons8-laptop-computer-64.png" style="width:40px"></i>
                                <div class="c-promotion__category-name">کالای دیجیتال</div>
                                <div class="c-promotion__category-quantity">+۵۳۱۰۰۰ کالا</div>
                             </a>
                            <a href="" class="c-promotion__category c-promotion__category--tools">
                                <i><img src="/image/icons8-support-24.png" style="width:40px"></i>
                                <div class="c-promotion__category-name">خودرو، ابزار و تجهیزات </div>
                                <div class="c-promotion__category-quantity">+۱۱۵۰۰۰ کالا </div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--fashion">
                                <i><img src="/image/t-shirt (2).svg" style="width:40px"></i>
                                <div class="c-promotion__category-name">مد و پوشاک</div>
                                <div class="c-promotion__category-quantity">+۵۱۳۰۰۰ کالا </div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--mother-and-child">
                              <i><img src="/image/baby-boy (2).svg" style="width:40px"></i>
                                <div class="c-promotion__category-name">اسباب بازی، کودک</div>
                                <div class="c-promotion__category-quantity">+۵۵۰۰۰ کالا  </div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--food-and-beverage">
                               <i><img src="/image/beverage (1).svg" style="width:40px"></i>
                                <div class="c-promotion__category-name">کالاهای سوپرمارکتی</div>
                                <div class="c-promotion__category-quantity">+۴۷۰۰۰ کالا </div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--personal-appliance">
                                  <i><img src="/image/icons8-heart-health-32.png" style="width: 40px"></i>
                                <div class="c-promotion__category-name">زیبایی و سلامت</div>
                                <div class="c-promotion__category-quantity">+۸۲۰۰۰ کالا</div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--home-and-kitchen">
                                <i><img src="/image/armchair (2).svg" style="width: 40px"></i>
                                <div class="c-promotion__category-name">خانه و آشپزخانه</div>
                                <div class="c-promotion__category-quantity">+۳۵۹۰۰۰ کالا  </div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--book-and-media">
                                <i><img src="/image/design-tools (1).svg" style="width:40px"></i>
                                <div class="c-promotion__category-name">کتاب، لوازم تحریر و هنر</div>
                                <div class="c-promotion__category-quantity">+۲۰۹۰۰۰ کالا  </div>
                            </a>
                            <a href="" class="c-promotion__category c-promotion__category--sport-and-entertainment">
                            <i style='font-size:34px' class='fas'>&#xf6bb;</i>
                                <div class="c-promotion__category-name">ورزش و سفر</div>
                                <div class="c-promotion__category-quantity">+۲۹۰۰۰ کالا  </div>
                            </a>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- //4 تا باکس -->
               <div class="four-box">
                     <div class="containert">
                       <div class="row banner2-item">
                <div class="col-6 col-lg-3 col-xl-3 col-md-3   col-sm-3"><img src="/image/24.jpg" alt="" width="100%"> </div>
                <div class="col-6 col-lg-3 col-xl-3 col-md-3 col-sm-3"> <img src="/image/25.jpg" alt="" width="100%"> </div>
                <div class="col-6 col-lg-3 col-xl-3 col-md-3 col-sm-3"> <img src="/image/26.jpg" alt="" width="100%">  </div>
                <div class="col-6 col-lg-3 col-xl-3 col-md-3 col-sm-3"> <img src="/image/27.jpg" alt="" width="100%"> </div>
            </div>
        </div>
    </div>
     <!-- // محصولات صفحه کلید -->
    
        @component('components.slideprudect-kibord')
        @slot('titel')
         کیبورد(صفحه کلید)
        @endslot
        @slot('urllimage')
            <img src="/image/28.jpg">
        @endslot
        @slot('text')
        کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
        @slot('pricee')
            630,000
        @endslot
        @slot('urllimage1')
        <img src="/image/28.jpg">
    @endslot
    @slot('text1')
    کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
    @endslot
    @slot('pricee1')
        730,000
    @endslot
    @slot('urllimage2')
    <img src="/image/28.jpg">
   @endslot
    @slot('text2')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price2')
      400,000
    @endslot
    @slot('urllimage3')
    <img src="/image/28.jpg">
   @endslot
    @slot('text3')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price3')
      500,000
    @endslot
    @slot('urllimage4')
    <img src="/image/28.jpg">
   @endslot
    @slot('text4')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price4')
      420,000
    @endslot
    @slot('urllimage5')
    <img src="/image/28.jpg">
   @endslot
    @slot('text5')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price5')
      520,000
    @endslot
    @slot('urllimage6')
    <img src="/image/28.jpg">
   @endslot
    @slot('text6')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price6')
      120,000
    @endslot
    @slot('urllimage7')
    <img src="/image/28.jpg">
   @endslot
    @slot('text7')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price7')
      1,420,000
    @endslot
    @slot('urllimage8')
    <img src="/image/28.jpg">
   @endslot
    @slot('text8')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price8')
      720,000
    @endslot
    @slot('urllimage9')
    <img src="/image/28.jpg">
   @endslot
    @slot('text9')
              کیبورد و ماوس بی سیم تسکو مدل TKM 7020W 
        @endslot
   @slot('price9')
      220,000
    @endslot
        @endcomponent
{{-- **********************   <!-- // تجهیزات کوهنوردی و سفر-->--}}

        @component('components.slideprudect-kibord')
        @slot('titel')
        تجهیزات کوهنوردی و سفر
       @endslot
       @slot('urllimage')
       <img src="/image/29.jpg">
       @endslot
       @slot('text')
        آتش زنه  مدل دائمی  
       @endslot
       @slot('pricee')
           230,000
       @endslot
       @slot('urllimage1')
       <img src="/image/27 (1).jpg">
   @endslot
   @slot('text1')
     آفتابه مسافرتی کد 1001  
   @endslot
   @slot('pricee1')
       730,000
   @endslot
   @slot('urllimage2')
   <img src="/image/31.jpg"> 
  @endslot
   @slot('text2')
       منقل سفری حیران مدل A60 
       @endslot
  @slot('price2')
     400,000
   @endslot
   @slot('urllimage3')
   <img src="/image/30 (1).jpg">
  @endslot
   @slot('text3')
    یخ خشک سفری کد HP270 بسته 2  
       @endslot
  @slot('price3')
     500,000
   @endslot
   @slot('urllimage4')
   <img src="/image/33.jpg">
  @endslot
   @slot('text4')
    منقل سفری
       @endslot
  @slot('price4')
     420,000
   @endslot
   @slot('urllimage5')
   <img src="/image/29.jpg">
  @endslot
   @slot('text5')
   آتش زنه  مدل دائمی  
       @endslot
  @slot('price5')
     520,000
   @endslot
   @slot('urllimage6')
   <img src="/image/30.jpg">
  @endslot
   @slot('text6')
   یخ خشک سفری کد HP270 بسته 2  
       @endslot
  @slot('price6')
     120,000
   @endslot
   @slot('urllimage7')
   <img src="/image/27 (1).jpg">
  @endslot
   @slot('text7')
   آفتابه مسافرتی کد 1001  
       @endslot
  @slot('price7')
     1,420,000
   @endslot
   @slot('urllimage8')
   <img src="/image/32.jpg">
  @endslot
   @slot('text8')
   منقل سفری
       @endslot
  @slot('price8')
     720,000
   @endslot
   @slot('urllimage9')
   <img src="/image/30.jpg">
  @endslot
   @slot('text9')
   یخ خشک سفری کد HP270 بسته 2  
       @endslot
  @slot('price9')
     220,000
   @endslot
       @endcomponent

       
         

           <!-- //2 تا باکس تصویر دوم  -->
           <div class="four-box">
            <div class="containert">
                <div class="row banner2-item">
                    <div class="image-box"> <img src="/image/36.jpg" alt="oclock"> </div>
                    <div class="image-box2"><img src="/image/35.jpg" alt=""></div>
                </div>
            </div>
        </div> 

         <!-- // زیر انداز-->
         
        @component('components.slideprudect-kibord')
        @slot('titel')
        زیرانداز
       @endslot
       @slot('urllimage')
       <img src="/image/40.jpg">
       @endslot
       @slot('text')
        زیرانداز سفری سومریا مدل 400068 
       @endslot
       @slot('pricee')
           230,000
       @endslot
       @slot('urllimage1')
       <img src="/image/41.jpg">
   @endslot
   @slot('text1')
   زیرانداز سفری سومریا مدل 400068 
   @endslot
   @slot('pricee1')
       730,000
   @endslot
   @slot('urllimage2')
   <img src="/image/42.jpg">
  @endslot
   @slot('text2')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price2')
     400,000
   @endslot
   @slot('urllimage3')
   <img src="/image/43.jpg">
  @endslot
   @slot('text3')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price3')
     500,000
   @endslot
   @slot('urllimage4')
   <img src="/image/44.jpg">
  @endslot
   @slot('text4')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price4')
     420,000
   @endslot
   @slot('urllimage5')
   <img src="/image/44.jpg">
  @endslot
   @slot('text5')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price5')
     520,000
   @endslot
   @slot('urllimage6')
   <img src="/image/41.jpg">
  @endslot
   @slot('text6')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price6')
     120,000
   @endslot
   @slot('urllimage7')
   <img src="/image/41.jpg">
  @endslot
   @slot('text7')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price7')
     1,420,000
   @endslot
   @slot('urllimage8')
   <img src="/image/42.jpg">
  @endslot
   @slot('text8')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price8')
     720,000
   @endslot
   @slot('urllimage9')
   <img src="/image/43.jpg">
  @endslot
   @slot('text9')
   زیرانداز سفری سومریا مدل 400068 
       @endslot
  @slot('price9')
     220,000
   @endslot
       @endcomponent
       
          <!-- // محصولات پربازدید اخیر-> -->
          <div>
            <div class="containert">
                <div class="row">
                    <div class="cadr-slaider-product">
                        <div class="text-prodouct"> 
                             <p> محصولات پربازدید اخیر</p>
                             <hr width="97%">
                            </div>
                        <div class="owl-carousel owl-product owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;">
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/45.jpg"> </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">400.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/46.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">4.000.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/46.jpg"> </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="box-of">
                                                        <div class="c-new-price__old-value "><del>۴۲,۰۰۰ </del><span class="c-new-price__discount">٪۸</span></div>
                                                        <div class="c-new-price__value">
                                                            ۳۸,۶۴۰
                                                            <span class="c-new-price__currency">تومان</span></div>
                                                        <div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/47.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">420.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/47.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">800.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div>
                                                    <img src="/image/48.jpg">  </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">440.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/45.jpg"> </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">2.400.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div>  <img src="/image/45.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">140.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/46.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">200.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div><img src="/image/48.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...</a>
                                                    <div class="price">600.000 تومان</div>
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
        <!-- // باکس تصویر  -->
        <div class="containert">
            <img class="image-tea" src="/image/50.jpg">
        </div>
          <!-- //برند های ویژه -->
          <div>
            <div class="containert">
                <div class="row">
                    <div class="box-slide">
                        <div class="text-prodouct">
                            <div class="o-headline"><span>برندهای ویژه</span></div>
                          
                        </div>
                        <div class="owl-carousel owl-product rr owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;">
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 ">
                                            <div class="item"> <div><img src="/image/51.jpg"> </div> </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 ">
                                            <div class="item">  <div> <img src="/image/52.png"> </div></div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item"> <div> <img src="/image/53.png"> </div> </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item"> <div> <img src="/image/54.png"></div> </div> </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item"><div> <img src="/image/55.jpg"></div> </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item">
                                                <div>   <img src="/image/52.png">  </div>  </div> </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item">
                                                <div> <img src="/image/52.png"> </div></div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item"><div> <img src="/image/53.png"></div></div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item">  <div> <img src="/image/52.png"> </div>  </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2">
                                            <div class="item"> <div><img src="/image/52.png">  </div> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***  منتخب محصولات تخفیف و حراج-->
        <div>
            <div class="containert">
                <div class="row">
                    <div class="cadr-slaider-product">
                        <div class="text-prodouct"> 
                     
                             <div class="o-headlinee">
                                <div class="o-headline__title-box">
                                    <div class="o-headline__title-content">
                                        <p> منتخب محصولات تخفیف و حراج</p>
                                    </div>
                                </div><a href="/landing-page/?promotion_types%5B0%5D=incredible_offer&amp;promotion_types%5B1%5D=promotion&amp;promotion_times%5B0%5D=active" class="c-swiper__show-more">مشاهده همه</a></div>
                            </div>
                        <div class="owl-carousel owl-product owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;">
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/66.jpg"> </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> هدست بی سیم </a>
                                                    {{-- <div class="price">400.000 تومان</div> --}}
                                                    <div class="c-product-box__price-row">
                                                        <div class="c-product-box__fast-shopping">

                                                            <div class="c-product__add-container js-add-to-cart-container 
                                                        js-fast-shopping-confirm">
                                                                <a class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm" href="/cart/add/4085721/1/" >+</a>

                                                            </div>
                                                        </div>
                                                        <div class="c-product-box__price-item">
                                                            <a class="js-product-url js-carousel-ga-product-box" href="/product/dkp-1481793/سس-ایتالیایی-بدون-چربی-بیژن-وزن-505-گرم">
                                                                <div class="c-new-price">
                                                                    <div class="c-new-price__old-value"><del>۱۰,۷۰۰ </del><span class="c-new-price__discount">۳۰٪</span></div>
                                                                    <div class="c-new-price__valuee">
                                                                        ۷,۵۰۰
                                                                        <span class="c-new-price__currency">تومان</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/67.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> ضدعفونی کننده</a>
                                                    <div class="price">4000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/68.jpg"> </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a>  سس جزیره</a>
                                                    <div class="c-product-box__price-row">
                                                        <div class="c-product-box__fast-shopping">

                                                            <div class="c-product__add-container js-add-to-cart-container 
                                                        js-fast-shopping-confirm">
                                                                <a class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm" href="/cart/add/4085721/1/" >+</a>

                                                            </div>
                                                        </div>
                                                        <div class="c-product-box__price-item">
                                                            <a class="js-product-url js-carousel-ga-product-box" href="/product/dkp-1481793/سس-ایتالیایی-بدون-چربی-بیژن-وزن-505-گرم">
                                                                <div class="c-new-price">
                                                                    <div class="c-new-price__old-value"><del>۱۰,۷۰۰ </del><span class="c-new-price__discount">۳۰٪</span></div>
                                                                    <div class="c-new-price__valuee">
                                                                        ۷,۵۰۰
                                                                        <span class="c-new-price__currency">تومان</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/69.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> صابون گلنار</a>
                                                    <div class="price">12000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/67.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> ضد عفونی کننده</a>
                                                    <div class="price">800.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div>
                                                    <img src="/image/67.jpg">  </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> ضدعفونی کننده</a>
                                                    <div class="price">440.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/67.jpg"> </div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> ضدعفونی  کننده</a>
                                                    <div class="price">2.400.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div>  <img src="/image/66.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> هدست بی سیم</a>
                                                    <div class="price">140.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div> <img src="/image/67.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> ضدعفونی کننده</a>
                                                    <div class="price">200.000 تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 190px;">
                                        <div class="col-lg-2 nj">
                                            <div class="item">
                                                <div><img src="/image/67.jpg"></div>
                                                <div class="mt-2 to-sistem ">
                                                    <a> ضدعفونی کنده</a>
                                                    <div class="price">600.000 تومان</div>
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
             <!-- //footer -->
           @component('components.footer')
          @endcomponent
</div>

        <script>
        @component('components.owl-crousel')
          @endcomponent
        </script>
           <script src="/js/indexx.js"></script>
           <script src="/js/megamenu.js"></script>
           
   </body>
 </html>
