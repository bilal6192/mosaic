    
     
<template>

  <div> 


<html lang="en">
   <head>
      <title>Blog</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
   <!-- overflow-y: scroll; -->
   <body style="-webkit-overflow-scrolling: touch;">
      <!-- ********** Header Start ********** -->
      <header class="header bg-warning py-2">
         <div class="container-fluid">
            <div class="row cntct-info m-0 rowfafari">
               <div class="col-md-2 d-none social-icon align-items-center d-md-flex justify-content-start px-4">
                  <a class="px-1" href="http://www.facebook.com" aria-label="Face Book" target="_blank" rel="noopener"> <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="px-1" href="https://www.instagram.com" target="_blank" aria-label="Instagram" rel="noopener"> <i class="fab fa-instagram" aria-hidden="true"></i></a> <a class="px-1" href="http://www.facebook.com" aria-label="Face Book" target="_blank" rel="noopener"><i
                     class="fab fa-linkedin" aria-hidden="true"></i></a> 
               </div>
               <div class="col-md-6 col-12 d-flex justify-content-center  contact-tab align-items-center"> <a><span style="display: inline-flex">Free Shipping on all Orders!</span></a> </div>
               <div class="col-md-4 d-none social-icon align-items-center d-md-flex justify-content-end px-4"> <a href="mailto:info@mosaicvisionpackaging.com">info@mosaicvisionpackaging.com</a> </div>
            </div>
         </div> 
      </header>
      <nav class="navbar navbar-expand-lg navbar-light custom-setting2 bg-light sticky-top p-3 bg-white rounded custom-menu scroll_background_important">
         <div class="container-fluid">
            <!-- <a class="navbar-brand" href="index.html"> -->
               <router-link  to='/'>
            <img class="default-logo1" :src="`images/logo.png`"  sizes="(min-width: 400px) 400px, 400px" alt="Mosaic Vision Packaging" aria-label="Mosaic Vision Packaging" width="273" height="55">
            </router-link>
            <!-- </a> -->
            <button class="navbar-toggler ms-auto me-3 " type="button" data-target="#main_nav" onclick="openNav()" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse custom-setting" id="main_nav"  >
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item active mx-1">                     
                     <router-link class="routerLink" to='/retailbox'>RETAIL BOXES</router-link>  
                  </li>
                  <li class="nav-item active mx-1">                     
                     <router-link class="routerLink" to='/boxbyindustry'>BOX BY INDUSTRY</router-link>  
                  </li>    
                   <li class="nav-item active mx-1">                     
                     <router-link class="routerLink" to='/boxbystyle'>BOX BY STYLE</router-link>  
                  </li>   
                  <li class="nav-item dropdown mx-1">
                     <router-link class="routerLink" to='/blog'>BLOG</router-link>                           
                  </li>   
                  <li class="nav-item mx-1"> <a class="nav-link" href="tel:+92 324 8473731" aria-label="Portfolio" style="transition: none !important;"><i
                     class="fas fa-phone-alt"></i> +92 324 8473731</a> </li>
                  <li class="nav-item mx-1"> <a class="nav-link" href="portfolio.html" aria-label="Portfolio" style="transition: none !important;">Get a Free Quote</a> </li>
               </ul>
            </div>
         </div>
         <div class="drop-search shadow-view">
            <form class="small_search_form_top" action="#/search" method="get">
               <div class="input-group top-bar-search-group">
                  <input type="text" required="" name="search" class="form-control search_input_top" placeholder="Search" value="">
                  <button type="submit" aria-label="search" class="btn btn-secondary  bg-transparent border-0 border-start border-secondary"><i class="fa fa-search"></i></button>
               </div>
            </form>
         </div>
      </nav>
      <a href="#" data-bs-toggle="modal" data-bs-target="#getQuote" class="common_get_quote_button">
         <p style="text-align: center;margin-bottom: auto;color: #fff">Get Quote</p>
      </a>
      <div class="modal fade" id="getQuote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row side-bar-form mx-0">
                     <div class="get-quote">
                        <h4>GET CUSTOM QUOTE</h4>
                     </div>
                     <div class="details">
                        <form id="get_quote" action="#/get-quote" method="post" novalidate="novalidate">
                           <input type="hidden" name="_token" value="pkUBSv3UQwJKNQGbLkLPw46WZPPRbvVLKEYsxLxG">
                           <div class="row pt-3">
                              <div class="col-lg-3 col-md-12 px-1">
                                 <div class="form-group">
                                    <input name="product_length" id="product_length" value="" class="form-control required" placeholder="Length"> 
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-12 px-1">
                                 <div class="form-group">
                                    <input name="product_width" id="product_width" value="" class="form-control required" placeholder="Width"> 
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-12 px-1">
                                 <div class="form-group">
                                    <input name="product_depth" id="product_depth" value="" class="form-control required" placeholder="Depth"> 
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-12 px-1">
                                 <div class="form-group">
                                    <select class="form-control required" name="measurement_units" id="units">
                                       <option value="cm">cm</option>
                                       <option value="mm">mm</option>
                                       <option selected="" value="inches">inch</option>
                                    </select>
                                 </div>
                              </div>
                              <input type="hidden" value="#" name="current_url">
                              <div class="col-md-12 px-1">
                                 <div class="form-group">
                                    <select name="product_name" class="form-control required" id="product_name">
                                       <option selected="" disabled="" style="display: none" value="" hidden=""> Product Name</option>
                                       <option value="Auto-Lock Boxes">Auto-Lock Boxes</option>
                                       <option value="Baby Product Boxes">Baby Product Boxes</option>
                                       <option value="Bakery Boxes">Bakery Boxes</option>
                                       <option value="Ballot boxes">Ballot boxes</option>
                                       <option value="Bandage Boxes">Bandage Boxes</option>
                                       <option value="Belt Boxes">Belt Boxes</option>
                                       <option value="Black Gable Boxes">Black Gable Boxes</option>
                                       <option value="Book End Boxes">Book End Boxes</option>
                                       <option value="Bottle Boxes">Bottle Boxes</option>
                                       <option value="Bottle Neckers">Bottle Neckers</option>
                                       <option value="Business Card Boxes">Business Card Boxes</option>
                                       <option value="Cake Boxes">Cake Boxes</option>
                                       <option value="Candle Boxes">Candle Boxes</option>
                                       <option value="Candy Apple Box">Candy Apple Box</option>
                                       <option value="Candy Boxes">Candy Boxes</option>
                                       <option value="Cardboard Boxes">Cardboard Boxes</option>
                                       <option value="Cardboard Boxes">Cardboard Boxes</option>
                                       <option value="Cardboard dispenser boxes">Cardboard dispenser boxes </option>
                                       <option value="Cereal Boxes">Cereal Boxes</option>
                                       <option value="Chinese Take Out Boxes">Chinese Take Out Boxes </option>
                                       <option value="Chocolate Boxes">Chocolate Boxes</option>
                                       <option value="Christmas Boxes">Christmas Boxes</option>
                                       <option value="Cigarette Boxes">Cigarette Boxes</option>
                                       <option value="Cookie Boxes">Cookie Boxes</option>
                                       <option value="Corrugated Boxes">Corrugated Boxes</option>
                                       <option value="Cosmetic Boxes">Cosmetic Boxes</option>
                                       <option value="Cosmetic Display Boxes">Cosmetic Display Boxes </option>
                                       <option value="Cream Boxes">Cream Boxes</option>
                                       <option value="Cube Boxes">Cube Boxes</option>
                                       <option value="Cupcake Boxes">Cupcake Boxes</option>
                                       <option value="Custom Bath Bomb Boxes">Custom Bath Bomb Boxes </option>
                                       <option value="Custom Electronic Cigarette Boxes">Custom Electronic Cigarette Boxes</option>
                                       <option value="Die-Cut Boxes">Die-Cut Boxes</option>
                                       <option value="Display Boxes">Display Boxes</option>
                                       <option value="Donut Boxes">Donut Boxes</option>
                                       <option value="E-Liquid Boxes">E-Liquid Boxes</option>
                                       <option value="Eye Shadow Boxes">Eye Shadow Boxes</option>
                                       <option value="Eyeliner Boxes">Eyeliner Boxes</option>
                                       <option value="Favor Boxes">Favor Boxes</option>
                                       <option value="Flap Boxes">Flap Boxes</option>
                                       <option value="Foundation Boxes">Foundation Boxes</option>
                                       <option value="Gable Boxes">Gable Boxes</option>
                                       <option value="Game Boxes">Game Boxes</option>
                                       <option value="Gift Boxes">Gift Boxes</option>
                                       <option value="Gift Card Boxes">Gift Card Boxes</option>
                                       <option value="Gold Foil Boxes">Gold Foil Boxes</option>
                                       <option value="Hair Extension Boxes">Hair Extension Boxes</option>
                                       <option value="Hairspray Boxes">Hairspray Boxes</option>
                                       <option value="Handle Boxes">Handle Boxes</option>
                                       <option value="Hanging Tab Boxes">Hanging Tab Boxes</option>
                                       <option value="Hexagon Boxes">Hexagon Boxes</option>
                                       <option value="Invitation Boxes">Invitation Boxes</option>
                                       <option value="Kraft Boxes">Kraft Boxes</option>
                                       <option value="Lip Gloss Boxes">Lip Gloss Boxes</option>
                                       <option value="Lipstick Boxes">Lipstick Boxes</option>
                                       <option value="Lotion Boxes">Lotion Boxes</option>
                                       <option value="Macaron Boxes">Macaron Boxes</option>
                                       <option value="Mailer Boxes">Mailer Boxes</option>
                                       <option value="Makeup Boxes">Makeup Boxes</option>
                                       <option value="Mascara Boxes">Mascara Boxes</option>
                                       <option value="Medicine Boxes">Medicine Boxes</option>
                                       <option value="Muffin Boxes">Muffin Boxes</option>
                                       <option value="Nail Polish Boxes">Nail Polish Boxes</option>
                                       <option value="Ornament Boxes">Ornament Boxes</option>
                                       <option value="Paper Boxes">Paper Boxes</option>
                                       <option value="Paper Cups">Paper Cups</option>
                                       <option value="Pastry Boxes">Pastry Boxes</option>
                                       <option value="Perfume Boxes">Perfume Boxes</option>
                                       <option value="Pie Boxes">Pie Boxes</option>
                                       <option value="Pillow boxes">Pillow boxes</option>
                                       <option value="Pizza Boxes">Pizza Boxes</option>
                                       <option value="Playing Cards Boxes">Playing Cards Boxes</option>
                                       <option value="Popcorn Boxes">Popcorn Boxes</option>
                                       <option value="Product Boxes">Product Boxes</option>
                                       <option value="Pyramid Boxes">Pyramid Boxes</option>
                                       <option value="Retail Boxes">Retail Boxes</option>
                                       <option value="Rigid Boxes">Rigid Boxes</option>
                                       <option value="Shirt Boxes">Shirt Boxes</option>
                                       <option value="Sleeve Boxes">Sleeve Boxes</option>
                                       <option value="Snack Boxes">Snack Boxes</option>
                                       <option value="Soap Boxes">Soap Boxes</option>
                                       <option value="Software Boxes">Software Boxes</option>
                                       <option value="Tea Boxes">Tea Boxes</option>
                                       <option value="Tie Boxes">Tie Boxes</option>
                                       <option value="Toy Boxes">Toy Boxes</option>
                                       <option value="USB boxes">USB boxes</option>
                                       <option value="Window  boxes">Window boxes</option>
                                       <option value="Others">Others</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 px-1">
                                 <div class="form-group">
                                    <label for="color">Color:</label>
                                    <select name="color" id="color" class="form-control">
                                       <option value="">None</option>
                                       <option value="1 Color">1 Color</option>
                                       <option value="2 Color">2 Color</option>
                                       <option value="3 Color">3 Color</option>
                                       <option value="4 Color">4 Color</option>
                                       <option value="4/1 Color">4/1 Color</option>
                                       <option value="4/2 Color">4/2 Color</option>
                                       <option value="4/3 Color">4/3 Color</option>
                                       <option value="4/4 Color">4/4 Color</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 px-1">
                                 <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input class="form-control required" value="" name="quantity" id="quantity" type="text"> 
                                 </div>
                              </div>
                              <div class="col-md-12 px-1">
                                 <div class="form-group red-star">
                                    <input class="form-control required" value="" name="contact_name" id="contact_name" type="text" placeholder="Name"> 
                                 </div>
                              </div>
                              <div class="col-md-12 px-1">
                                 <div class="form-group red-star">
                                    <input class="form-control required" value="" name="contact_email" id="contact_email" type="text" placeholder="Email"> 
                                 </div>
                              </div>
                              <div class="col-md-12 px-1">
                                 <div class="form-group red-star">
                                    <input class="form-control required" value="" name="contact_phone" id="contact_phone" type="text" placeholder="+xxxxxxxxxxx"> 
                                 </div>
                              </div>
                              <div class="col-md-12 px-1">
                                 <div class="form-group">
                                    <label for="comment">Message:</label>
                                    <textarea rows="3" name="message" id="message" placeholder="write short message" class="form-control"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12 py-2 px-1">
                                 <div class="col-md-12">
                                    <input id="num1" class="sum col-2" type="text" name="num1" value="4" readonly="readonly"> +
                                    <input id="num2" class="sum col-2" type="text" name="num2" value="5" readonly="readonly"> =
                                    <input id="captcha" class="captcha col-2" type="text" name="captcha" maxlength="2">
                                    <br> <span id="spambot">(Are you human, or spambot?)</span> 
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-quote rounded-pill col-12">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="tel:+923248473731" class="common_phone_call_icon">
         <div> <img :src="`images/phone-icon-946.webp`" width="35" height="35"> </div>
      </a>
      <!-- ********** Header End ********** -->
      <div >
         <section class="static_page" style="padding:0px !important">
            <div class="container top_mar">
               <div class="row">        
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img style="width:1300px" :src="`images/sliders/%5e410836B54409450B229352E5022E745ADB0F5D3DBC1E5F8AAF%5epimgpsh_fullsize_distr2.webp`"/>   
                     </div>
                     <div class="carousel-item">
                        <img style="width:1300px" :src="`images/sliders/%5e40E0BC7AFB4966CAF02303F8C3638F786026FF072ECE4B6951%5epimgpsh_fullsize_distr.webp`"/>                            
                     </div>
                     <div class="carousel-item">
                        <img style="width:1300px" :src="`images/sliders/%5e0130799E202DC738545DE729D7373441C7D9A89F31271556C6%5epimgpsh_fullsize_distr.webp`"/>
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
                  </div>
                                 
               </div>
               <div class="row">
                  <div class="col-sm-4 col-xs-12 package-hover-main  padding-none opi-package-hover-main">
                     <img :src="`images/blog-posts/5-reasons-why-custom-packaging-is-important-in-todays-world.webp`"  style="width:100%;" class="img-responsive" />
                     <div class="package-hover">
                        <h2><a href="#.html">5 Reasons Why Custom Packaging is Important in Today&#039;s World?</a></h2>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-12 package-hover-main  padding-none opi-package-hover-main">
                      
                     <img :src="`images/blog-posts/the-importance-and-drawbacks-of-uv-coating-in-printing.webp`" width="100%" alt="blog slider" title="blog slider">
                     <div class="package-hover">
                        <h2><a href="#.html">The Importance of UV Coating in Printing and its Drawbacks </a></h2>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-12 package-hover-main  padding-none opi-package-hover-main">
                     <img :src="`images/blog-posts/pros-and-cons-of-offset-and-digital-printing.webp`" width="100%" alt="blog slider" title="blog slider">
           
                     <div class="package-hover">
                        <h2><a href="#.html">Pros and Cons of Offset and Digital Printing ( 2022 Research)</a></h2>
                     </div>
                  </div>
               </div>
               <div class="row mb-5">
                  <div class="col-md-8 col-12">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="follow_us_main">
                              <h4 class="lastest-head">Latest Posts</h4>
                              <div class="follow_us_border2"></div>
                           </div>
                           
                           <div class="mb-4"><img :src="`images/blog-img-4.jpg`" width="100%" alt="blog image"
                              title="blog image"></div>
                        </div>
                     </div>
                     <div class="row mx-0">
                        <div class="col-sm-6 col-lg-6 col-12 d-sm-flex px-1">
                           <div class="mb-5 mx-1">
                              <div class="d-sm-flex justify-content-center flex-wrap">
                                 <a href="#.html">
                                    
                                 <img width="100%"
                                    :src="`images/blog-posts/5-reasons-why-custom-packaging-is-important-in-todays-world.webp`"
                                    alt="Featured Image" title="Featured Image" />
                                 </a>
                              </div>
                              <div class="bg-transparent mt-3">
                                 <a style="color: #337ab7;font-size: 17px" class="text-decoration-none"
                                    href="#.html"><span>5 Reasons Why Custom Packaging is Important in Today&#039;s
                                 World?</span></a>
                                 <p class="description-post">
                                    Suppose you are running a soap business in the United States. It&#39;s the early 21st
                                    century, and your product is reaching the doorsteps of millions...
                                 </p>
                                 <div class="ml-auto">
                                    <p class="post-date text-end"><i class="far fa-clock"
                                       aria-hidden="true"></i>&nbsp;2022-05-23 14:04:40</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-12 d-sm-flex px-1">
                           <div class="mb-5 mx-1">
                              <div class="d-sm-flex justify-content-center flex-wrap">
                                 <a href="#.html">
                                    
                                 <img width="100%"
                                    :src="`images/blog-posts/the-importance-and-drawbacks-of-uv-coating-in-printing.webp`"
                                    alt="Featured Image" title="Featured Image" />
                                 </a>
                              </div>
                              <div class="bg-transparent mt-3">
                                 <a style="color: #337ab7;font-size: 17px" class="text-decoration-none"
                                    href="#.html"><span>The Importance of UV Coating in Printing and its Drawbacks
                                 </span></a>
                                 <p class="description-post">
                                    A UV-coating is a transparent liquid film applied on the surface of a packaging
                                    material using Ultraviolet light. UV coating is different from...
                                 </p>
                                 <div class="ml-auto">
                                    <p class="post-date text-end"><i class="far fa-clock"
                                       aria-hidden="true"></i>&nbsp;2022-04-29 10:41:24</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-12 d-sm-flex px-1">
                           <div class="mb-5 mx-1">
                              <div class="d-sm-flex justify-content-center flex-wrap">
                                 <a href="#.html">
                                   
                                 <img width="100%"
                                     :src="`images/blog-posts/pros-and-cons-of-offset-and-digital-printing.webp`"
                                    alt="Featured Image" title="Featured Image" />
                                 </a>
                              </div>
                              <div class="bg-transparent mt-3">
                                 <a style="color: #337ab7;font-size: 17px" class="text-decoration-none"
                                    href="#.html"><span>Pros and Cons of Offset and Digital Printing ( 2022
                                 Research)</span></a>
                                 <p class="description-post">
                                    The most common paper printing type is offset printing. Whether a paper is used in the
                                    document form or is used in the packaging, the offset printing...
                                 </p>
                                 <div class="ml-auto">
                                    <p class="post-date text-end"><i class="far fa-clock"
                                       aria-hidden="true"></i>&nbsp;2022-04-27 10:36:00</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-12 d-sm-flex px-1">
                           <div class="mb-5 mx-1">
                              <div class="d-sm-flex justify-content-center flex-wrap">
                                 <a href="#.html">
                                 <img width="100%"
                                 
                                    :src="`images/blog-posts/functions-applications-and-comparison-between-matte-and-gloss-lamination.webp`"
                                    alt="Featured Image" title="Featured Image" />
                                 </a>
                              </div>
                              <div class="bg-transparent mt-3">
                                 <a style="color: #337ab7;font-size: 17px" class="text-decoration-none"
                                    href="blog/functions-applications-and-comparison-between-matte-and-gloss-lamination.html"><span>Functions,
                                 Applications and Comparison between Matte and Gloss Lamination</span></a>
                                 <p class="description-post">
                                    Lamination is a process through which the packaging surface is enhanced by mixing
                                    flexible packaging bands together. Generally, lamination is a...
                                 </p>
                                 <div class="ml-auto">
                                    <p class="post-date text-end"><i class="far fa-clock"
                                       aria-hidden="true"></i>&nbsp;2022-04-27 10:24:55</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-12 d-sm-flex px-1">
                           <div class="mb-5 mx-1">
                              <div class="d-sm-flex justify-content-center flex-wrap">
                                 <a href="#.html">
                                 <img width="100%"
                                 
                                    :src="`images/blog-posts/how-to-promote-your-products-through-impressive-cbd-oil-boxes.jpg`"
                                    alt="Featured Image" title="Featured Image" />
                                 </a>
                              </div>
                              <div class="bg-transparent mt-3">
                                 <a style="color: #337ab7;font-size: 17px" class="text-decoration-none"
                                    href="blog/how-to-promote-your-products-through-impressive-cbd-oil-boxes.html"><span>How
                                 to Promote your Products through Impressive CBD Oil Boxes?</span></a>
                                 <p class="description-post">
                                    Getting your product at the top of the list is always challenging. You need to beat
                                    competitors at every stage. You have to make careful decisions at...
                                 </p>
                                 <div class="ml-auto">
                                    <p class="post-date text-end"><i class="far fa-clock"
                                       aria-hidden="true"></i>&nbsp;2022-04-19 10:03:18</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-12 d-sm-flex px-1">
                           <div class="mb-5 mx-1">
                              <div class="d-sm-flex justify-content-center flex-wrap">
                                 <a href="#.html">
                                 <img width="100%"
                                 :src="`images/blog-posts/give-your-brand-a-bang-with-custom-candle-boxes.webp`"
                                    
                                    alt="Featured Image" title="Featured Image" />
                                 </a>
                              </div>
                              <div class="bg-transparent mt-3">
                                 <a style="color: #337ab7;font-size: 17px" class="text-decoration-none"
                                    href="blog/give-your-brand-a-bang-with-custom-candle-boxes.html"><span>Give your Brand
                                 a Bang with Custom Candle Boxes</span></a>
                                 <p class="description-post">
                                    It is not an easy task to brand your product in modern competitive markets. However, if
                                    you have made up your mind, then there are particular things...
                                 </p>
                                 <div class="ml-auto">
                                    <p class="post-date text-end"><i class="far fa-clock"
                                       aria-hidden="true"></i>&nbsp;2022-04-14 07:15:31</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12">
                     <section class="right_bar" style="padding:0px !important">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="follow_us_main">
                                 <h4 class="lastest-head">Follow Us</h4>
                                 <div class="follow_us_border2" style="left:115px !important;width:73% !important"></div>
                              </div>
                           </div>
                        </div>
                        <div class="social-icon row text-right">
                           <ul>
                              <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="#" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"
                                 aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <hr>
                        <ul class="tips-ul">
                        </ul>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="follow_us_main">
                                 <h4 class="lastest-head">Recent Posts</h4>
                                 <div class="follow_us_border"></div>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="sidebar-package opi-sidebar-package">
                                 <img                                 
                                    :src="`images/blog-posts/5-reasons-why-custom-packaging-is-important-in-todays-world.webp`"
                                    style="width: 100%;height: auto" width="416" height="217">
                                 <h3 class="sidebar-pack-hover"><a href="#.html">5 Reasons Why Custom Packaging is
                                    Important in Today&#039;s World?</a>
                                 </h3>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="sidebar-package opi-sidebar-package">
                                 <img
                                    :src="`images/blog-posts/the-importance-and-drawbacks-of-uv-coating-in-printing.webp`"                                   
                                    style="width: 100%;height: auto" width="416" height="217">
                                 <h3 class="sidebar-pack-hover"><a href="#.html">The Importance of UV Coating in Printing
                                    and its Drawbacks </a>
                                 </h3>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="sidebar-package opi-sidebar-package">
                                 <img 
                                    :src="`images/blog-posts/pros-and-cons-of-offset-and-digital-printing.webp`"                                  
                                    style="width: 100%;height: auto" width="416" height="217">
                                 <h3 class="sidebar-pack-hover"><a href="#.html">Pros and Cons of Offset and Digital
                                    Printing ( 2022 Research)</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
                  <nav>
                     <ul class="pagination">
                        <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                           <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="blog4658.html?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="blog9ba9.html?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="blogfdb0.html?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="blogaf4d.html?page=5">5</a></li>
                        <li class="page-item"><a class="page-link" href="blogc575.html?page=6">6</a></li>
                        <li class="page-item"><a class="page-link" href="blog235c.html?page=7">7</a></li>
                        <li class="page-item"><a class="page-link" href="blogfdfa.html?page=8">8</a></li>
                        <li class="page-item">
                           <a class="page-link" href="blog4658.html?page=2" rel="next"
                              aria-label="Next &raquo;">&rsaquo;</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </section>
      </div>
      <!-- ********** Footer Start ********** -->
      <section class="footer">
         <div class="container">
            <h3 class="text-center">MOSAIC VISION PACKAGING</h3>
            <hr>
            <div class="row mx-0">
               <div class="col-sm-6 col-lg-3 col-xs-12">
                  <p style="
                     font-size: 18px;
                     margin-top: 10px;
                     margin-bottom: 10px;
                     text-transform: uppercase;
                     color: #fff;
                     font-weight: 500;
                     line-height: 1.2;
                     font-family: 'Montserrat Bold';
                     ">Newsletter</p>
                  <p class="fw-bold font_m_bold">Subscribe for a newsletter</p>
                  <div id="messagenote" style="color: red;"></div>
                  <form class="margin-bottom-0" name="frmNewsletter" id="frmNewsletter" action="#/subscribe" method="post">
                     <input type="text" name="email" id="footer-form" placeholder="Your Email Address.." required="">  
                     <button id="footer-btn" class="btn btn-warning rounded-pill" style="
                        transition: none !important;
                        " type="submit">Submit</button>
                  </form>
                  <img style="margin-top: 25px;" srcset="assets/images/payment-img.webp 800w, assets/images/payment-img.webp 400w" sizes="(min-width: 400px) 400px, 400px" :src="`images/payment-img.webp`" alt="Box Packaging" title="Box Packaging" width="205" height="73">
                  <div class="clearfix"></div>
                  <p>Follow Us:</p>
                  <div class="social-icon">
                     <a href="http://www.facebook.com/Mosaic Visionpackaging" aria-label="Face Book" target="_blank" rel="noopener"> <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                     <a href="https://twitter.com/Mosaic Vision_Packaging" aria-label="Twitter" target="_blank" rel="noopener"> <i class="fab fa-twitter" aria-hidden="true"></i></a>
                     <a href="https://www.youtube.com/" aria-label="Youtube" target="_blank" rel="noopener"> <i class="fab fa-youtube" aria-hidden="true"></i></a>
                     <a href="https://www.pinterest.com/Mosaic Visionpackaging/" aria-label="Pinterest" target="_blank" rel="noopener"> <i class="fab fa-pinterest" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3 col-xs-12 bullets">
                  <p style="
                     font-size: 18px;
                     margin-top: 10px;
                     margin-bottom: 10px;
                     text-transform: uppercase;
                     color: #fff;
                     font-weight: 500;
                     line-height: 1.2;
                     font-family: 'Montserrat Bold';
                     ">Information</p>
                  <ul>
                     <li><router-link  to='/privacy'>Privacy and Security</router-link> </li>
                     <li><a href="terms.html">Terms and Conditions</a></li>
                     <li><router-link  to='/aboutus'>About Us</router-link> </li>
                     <li><router-link  to='/contactus'>Contact Us</router-link> </li>                     
                     <li><a href="sitemap.html">Sitemap</a></li>
                     <li><a href="portfolio.html">Portfolio</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-lg-3 col-xs-12 bullets">
                  <p style="
                     font-size: 18px;
                     margin-top: 10px;
                     margin-bottom: 10px;
                     text-transform: uppercase;
                     color: #fff;
                     font-weight: 500;
                     line-height: 1.2;
                     font-family: 'Montserrat Bold';
                     ">Packaging Products</p>
                  <ul>
                     <li><a href="#.html">Mailer Boxes</a></li>
                     <li><a href="#.html">Soap Boxes</a> </li>
                     <li><a href="#.html">Bakery Boxes</a></li>
                     <li><a href="#.html">Kraft Boxes</a></li>
                     <li><a href="#.html">CardBoard Boxes</a></li>
                     <li><a href="#.html">Personalized Packaging Boxes</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-lg-3 col-xs-12 contact-ul">
                  <span style="
                     font-size: 18px;
                     margin-top: 10px;
                     margin-bottom: 10px;
                     text-transform: uppercase;
                     color: #fff;
                     font-weight: 500;
                     line-height: 1.2;
                     font-family: 'Montserrat Bold';
                     ">Contact Us</span>
                  <ul style="list-style-type: none;">
                     <li><i class="fa fa-phone" aria-hidden="true" style="margin-right: 8px;"></i><a href="tel: +92 324 8473731"> +92 324 8473731</a> </li>
                     <li>
                        <a href="mailto:info@mosaicvisionpackaging.com" class="clr-orange" style="font-size: 14px !important;"> <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 8px;"></i>info@mosaicvisionpackaging.com</a>
                     </li>
                     <li><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 8px;"></i> 19-A, Abbot Road, Near PTV Station, 
                        Lahore, Punjab, Pakistan
                     </li>
                     <li class="payment"><img loading="lazy" style="width: 100%;height: auto" alt="Box Packaging" title="Box Packaging" src="assets/images/free-shipping.webp" width="300" height="102"> </li>
                     <li class="payment"><img loading="lazy" style="margin-top: -17px;
                        margin-left: -6px;width: 100%;height: auto" alt="Box Packaging" title="Box Packaging" src="assets/images/flag.webp" width="249" height="85"></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <footer>
         <div class="col-xs-12 text-center">
            <p style="color: white">Copyright 2022. www.mosaicvisionpackaging.com All rights reserved.</p>
         </div>
         <div class="clearfix"></div>
      </footer>
      <!-- ********** Footer End ********** -->
      <!-- ********** Header Mobile Start ********** -->
      <div id="res-nav" class="res-overlay">
         <a href="#" class="closebtn" onclick="closeNav()">×</a>
         <div class="overlay-content col-xs-12">
            <div class="accordion" id="accordionMenu">
               <div class="accordion-item text-left">
                  <h2 class="accordion-header py-3 px-4 text-start">
                     <a class="text-white" href="index.html">Home</a>
                  </h2>
               </div>
               <div class="accordion-item text-left">
                  <h2 class="accordion-header py-3 px-4 text-start">
                     <a class="text-white" href="#.html">RETAIL BOXES</a>
                  </h2>
               </div>
               <div class="accordion-item text-left">
                  <h2 class="accordion-header py-3 px-4 text-start">
                     <a class="text-white" href="#.html">BOX BY INDUSTRY</a>
                  </h2>
               </div>
               <div class="accordion-item text-left">
                  <h2 class="accordion-header py-3 px-4 text-start">
                     <a class="text-white" href="#.html">BOX BY STYLE </a>
                  </h2>
               </div>
               <div class="accordion-item text-left">
                  <h2 class="accordion-header py-3 px-4 text-start">
                     <a class="text-white" href="blog.html">Blog</a>
                  </h2>
               </div>
               <div class="accordion-item text-left">
                  <h2 class="accordion-header py-3 px-4 text-start">
                     <a class="text-white" href="tel: +923248473731"> +92 324 8473731</a>
                  </h2>
               </div>
            </div>
         </div>
      </div>
    
   </body>
</html>

  </div>
</template>
<script src="{{('js/js/jquery.min.js')}}"></script>
      <script src="{{('js/js/owl.carousel.min.js')}}"></script>
      <script src="{{('js/js/script3860.js')}}"></script>
<script>
const default_layout = "default";


export default {
  mounted() {
   

        }
};
</script>
<style>
.follow_us_border2 {
    display: inline-block;
    height: 15px;
    width: 84%;
    background-color: #f2f2f2;
    position: absolute;
    left: 137px;
    top: 11px;
    z-index: 0;
}
</style>
