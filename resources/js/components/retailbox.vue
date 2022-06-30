
    
<template>


  <div> 
   
<!-- <html lang="en"> -->
   <head>
      <title>Product Page</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
   <!-- <body style="-webkit-overflow-scrolling: touch;overflow-y: scroll;"> -->
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
      <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-3 bg-white rounded custom-menu scroll_background_important">
         <div class="container-fluid">
  <router-link  to='/'>
            <img class="default-logo1" :src="`images/logo.png`"  sizes="(min-width: 400px) 400px, 400px" alt="Mosaic Vision Packaging" aria-label="Mosaic Vision Packaging" width="273" height="55">
            </router-link> 
            <button class="navbar-toggler ms-auto me-3" type="button" data-target="#main_nav" onclick="openNav()" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="main_nav">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item active mx-1"> <a class="nav-link" href="index.html">RETAIL BOXES</a> </li>
                  <li class="nav-item  mx-1dropdown has-megamenu menga-menu-bullets">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">BOX BY INDUSTRY<i
                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item dropdown mx-1">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">BOX BY STYLE <i
                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item active mx-1">                     
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
      <!-- <body style="-webkit-overflow-scrolling: touch;overflow-y: scroll;"> -->
         <section class="products_container">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-12">
                     <div class="banner banner-bg">
                        <div class="tl-corner-box">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="product-ban text-left">
                                       <h2>Light up the World with
                                          Custom Candle Box
                                          Packaging
                                       </h2>
                                       <p>Add the feeling of warmth to your candles with well designed
                                          personalized candle box packaging Create unique candle
                                          Packaging with our expert guidance and materials!
                                       </p>
                                       <div class="px-auto">
                                          <a href="#.html"
                                             class="btn mt-1  btn-warning text-uppercase get_started">Get
                                          Started</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="banner-img">
                                       <img :src="`assets/images/sliders/product-pb.png`" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="products-list my-4">
                        <div class="card-deck row mx-0">
                           <div class="col-sm-6 col-lg-4 col-12 d-sm-flex px-1">
                              <div class="card-box card shadow-lg mb-5 mx-1 bg-white rounded">
                                 <a href="assets/images/product-1.png"
                                    class="change-hover d-sm-flex justify-content-center flex-wrap"
                                    aria-label="custom-tuck-boxes" target="_blank" rel="noopener">
                                 <img height="356" width="356" style="width: 100%;height: auto"
                                    alt="Custom Tuck Boxes" title="Custom Tuck Boxes" class="product_image"
                                    :src="`images/product-1.png`">
                                 <img height="356" width="356" style="width: 100%;height: auto"
                                    alt="Custom Tuck Box Template" title="Custom Tuck Box Template"
                                    class="product_image" :src="`images/product-1.png`">
                                 </a>
                                 <div class="card-body title_box d-flex flex-wrap justify-content-center">
                                    <div class="col-md-12 text-center">
                                       <h2>CANDLE DISPLAY BOXES</h2>
                                    </div>
                                    <div class="px-auto">
                                       <a href="#.html"
                                          class="btn mt-1 rounded-pill btn-blue text-uppercase get_started">Get
                                       Started</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 col-lg-4 col-12 d-sm-flex px-1">
                              <div class="card-box card shadow-lg mb-5 mx-1 bg-white rounded">
                                 <a href="assets/images/product-2.png"
                                    class="change-hover d-sm-flex justify-content-center flex-wrap"
                                    aria-label="custom-printed-straight-tuck-end-packaging-boxes" target="_blank"
                                    rel="noopener">
                                 <img height="356" width="356" style="width: 100%;height: auto"
                                    alt="Custom Printed Straight Tuck End Packaging Boxes"
                                    title="Custom Printed Straight Tuck End Packaging Boxes"
                                    class="product_image" :src="`images/product-2.png`">
                                 <img height="356" width="356" style="width: 100%;height: auto"
                                    alt="Custom Straight Tuck End Packaging Boxes"
                                    title="Custom Straight Tuck End Packaging Boxes" class="product_image"
                                    :src="`images/product-2.png`">
                                 </a>
                                 <div class="card-body title_box d-flex flex-wrap justify-content-center">
                                    <div class="col-md-12 text-center">
                                       <h2>Straight Tuck End</h2>
                                    </div>
                                    <div class="px-auto">
                                       <a href="#.html"
                                          class="btn mt-1 rounded-pill btn-blue text-uppercase get_started">Get
                                       Started</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 col-lg-4 col-12 d-sm-flex px-1">
                              <div class="card-box card shadow-lg mb-5 mx-1 bg-white rounded">
                                 <a href="assets/images/product-3.png"
                                    class="change-hover d-sm-flex justify-content-center flex-wrap"
                                    aria-label="custom-printed-sleeve-packaging-boxes" target="_blank"
                                    rel="noopener">
                                 <img height="356" width="356" style="width: 100%;height: auto"
                                    alt="Custom Printed Sleeve Packaging Boxes"
                                    title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                                    :src="`images/product-3.png`">
                                 <img height="356" width="356" style="width: 100%;height: auto"
                                    alt="Custom Printed Sleeve Packaging Boxes"
                                    title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                                    :src="`images/product-3.png`">
                                 </a>
                                 <div class="card-body title_box d-flex flex-wrap justify-content-center">
                                    <div class="col-md-12 text-center">
                                       <h2>Sleeve Boxes</h2>
                                    </div>
                                    <div class="px-auto">
                                       <a href="#.html"
                                          class="btn mt-1 rounded-pill btn-blue text-uppercase get_started">Get
                                       Started</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-12 position-sticky sticky_element" id="sticky_element">
                     <div class="row side-bar-form mx-0">
                        <div class="get-quote">
                           <h4>GET CUSTOM QUOTE</h4>
                        </div>
                        <div class="details">
                           <form id="get_quote" action="https://oxopackaging.com/get-quote" method="post">
                              <input type="hidden" name="_token" value="pkUBSv3UQwJKNQGbLkLPw46WZPPRbvVLKEYsxLxG">
                              <div class="row pt-3">
                                 <div class="col-lg-3 col-md-12 px-1">
                                    <div class="form-group">
                                       <input name="product_length" id="product_length" value=""
                                          class="form-control required" placeholder="Length">
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-md-12 px-1">
                                    <div class="form-group">
                                       <input name="product_width" id="product_width" value=""
                                          class="form-control required" placeholder="Width">
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-md-12 px-1">
                                    <div class="form-group">
                                       <input name="product_depth" id="product_depth" value=""
                                          class="form-control required" placeholder="Depth">
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-md-12 px-1">
                                    <div class="form-group">
                                       <select class="form-control required" name="measurement_units" id="units">
                                          <option value="cm">cm</option>
                                          <option value="mm">mm</option>
                                          <option selected value="inches">inch</option>
                                       </select>
                                    </div>
                                 </div>
                                 <input type="hidden"
                                    value="https://oxopackaging.com/templates/custom-template-packaging-boxes.html"
                                    name="current_url">
                                 <div class="col-md-12 px-1">
                                    <div class="form-group">
                                       <select name="product_name" class="form-control required" id="product_name">
                                          <option selected disabled hidden style='display: none' value=''>
                                             Product Name
                                          </option>
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
                                          <option value="Cardboard dispenser boxes">Cardboard dispenser boxes
                                          </option>
                                          <option value="Cereal Boxes">Cereal Boxes</option>
                                          <option value="Chinese Take Out Boxes">Chinese Take Out Boxes
                                          </option>
                                          <option value="Chocolate Boxes">Chocolate Boxes</option>
                                          <option value="Christmas Boxes">Christmas Boxes</option>
                                          <option value="Cigarette Boxes">Cigarette Boxes</option>
                                          <option value="Cookie Boxes">Cookie Boxes</option>
                                          <option value="Corrugated Boxes">Corrugated Boxes</option>
                                          <option value="Cosmetic Boxes">Cosmetic Boxes</option>
                                          <option value="Cosmetic Display Boxes">Cosmetic Display Boxes
                                          </option>
                                          <option value="Cream Boxes">Cream Boxes</option>
                                          <option value="Cube Boxes">Cube Boxes</option>
                                          <option value="Cupcake Boxes">Cupcake Boxes</option>
                                          <option value="Custom Bath Bomb Boxes">Custom Bath Bomb Boxes
                                          </option>
                                          <option value="Custom Electronic Cigarette Boxes">Custom Electronic
                                             Cigarette Boxes
                                          </option>
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
                                       <input class="form-control required" value="" name="quantity" id="quantity"
                                          type="text">
                                    </div>
                                 </div>
                                 <div class="col-md-12 px-1">
                                    <div class="form-group red-star">
                                       <input class="form-control required" value="" name="contact_name"
                                          id="contact_name" type="text" placeholder="Name">
                                    </div>
                                 </div>
                                 <div class="col-md-12 px-1">
                                    <div class="form-group red-star">
                                       <input class="form-control required" value="" name="contact_email"
                                          id="contact_email" type="text" placeholder="Email">
                                    </div>
                                 </div>
                                 <div class="col-md-12 px-1">
                                    <div class="form-group red-star">
                                       <input class="form-control required" value="" name="contact_phone"
                                          id="contact_phone" type="text" placeholder="+xxxxxxxxxxx">
                                    </div>
                                 </div>
                                 <div class="col-md-12 px-1">
                                    <div class="form-group">
                                       <label for="comment">Message:</label>
                                       <textarea rows="3" name="message" id="message"
                                          placeholder="write short message" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-md-12 py-2 px-1">
                                    <div class="col-md-12">
                                       <input id="num1" class="sum col-2" type="text" name="num1" value="2"
                                          readonly="readonly" /> +
                                       <input id="num2" class="sum col-2" type="text" name="num2" value="6"
                                          readonly="readonly" /> =
                                       <input id="captcha" class="captcha col-2" type="text" name="captcha"
                                          maxlength="2" /><br>
                                       <span id="spambot">(Are you human, or spambot?)</span>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <button type="submit"
                                          class="btn btn-blue btn-quote rounded-pill col-12">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row offer-sec">
                  <h2 class="text-center">Candle Boxes</h2>
                  <p class="text-center">We facilitate your business by bringing you innovative printed boxes with
                     extraordinary design printing.
                  </p>
                  <div class="row offer-slider">
                     <div class="owl-carousel">
                        <div class="shadow-view">
                           <a href="#.html">
                           <img height="356" width="356" style="width: 100%;height: auto"
                              alt="Custom Printed Sleeve Packaging Boxes"
                              title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                              src="assets/images/product-1.png">
                           </a>
                        </div>
                        <div class="shadow-view"><a
                           href="#.html">
                           <img height="356" width="356" style="width: 100%;height: auto"
                              alt="Custom Printed Sleeve Packaging Boxes"
                              title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                              src="assets/images/product-2.png"></a>
                        </div>
                        <div class="shadow-view"><a
                           href="#.html"><img
                           height="356" width="356" style="width: 100%;height: auto"
                           alt="Custom Printed Sleeve Packaging Boxes"
                           title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                           src="assets/images/product-3.png"></a></div>
                        <div class="shadow-view"><a
                           href="#.html"><img
                           height="356" width="356" style="width: 100%;height: auto"
                           alt="Custom Printed Sleeve Packaging Boxes"
                           title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                           src="assets/images/product-1.png"></a></div>
                        <div class="shadow-view"><a
                           href="#.html"><img
                           height="356" width="356" style="width: 100%;height: auto"
                           alt="Custom Printed Sleeve Packaging Boxes"
                           title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                           src="assets/images/product-2.png"></a></div>
                        <div class="shadow-view"><a
                           href="#.html"><img
                           height="356" width="356" style="width: 100%;height: auto"
                           alt="Custom Printed Sleeve Packaging Boxes"
                           title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                           src="assets/images/product-3.png"></a></div>
                        <div class="shadow-view"><a
                           href="#.html"><img
                           height="356" width="356" style="width: 100%;height: auto"
                           alt="Custom Printed Sleeve Packaging Boxes"
                           title="Custom Printed Sleeve Packaging Boxes" class="product_image"
                           src="assets/images/product-1.png"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-white category_detail_box">
            <div class="container">
               <div class="category_detail">
                  <h2>Candle Packaging Boxes</h2>
                  <p class="content"></p>p
                  <p>The candle is used in a variety of settings and for a variety of occasions. You'll need a
                     one-of-a-kind box with a fancy appearance if you want to impress your clients before they light the
                     candle.
                     <strong>Candle packaging boxes</strong> should be fragrant and transmit the natural glow of the wax while preserving
                     its quality, light, and colours.
                     <strong>Mosaic Vision Packaging </strong>is a well-known company that offers a variety of packaging options,
                     including     <strong>custom  Candle packaging boxes</strong>.
                     We offer a wide range of high-quality, 100%  <strong>recyclable custom candle boxes </strong> in a variety of shapes
                     and sizes. Our packaging is extremely cost-effective, which is great news for our brand.
                     Because they are made of high-quality materials and the most advanced printing and finishing
                     technologies, our     <strong>candle gift boxes </strong> are ideal for creating an excitement in anyone's heart.
                  </p>
                  <h2>There are numerous advantages to using custom candle boxes:</h2>
                  <p class="content">
                  <p>Have you ever wondered that What is the significance of personalised candle boxes, and why are they
                     gaining popularity?
                     Why should businesses purchase boxes when their customers can do so directly?
                     These questions are relevant because people used to buy candle storage boxes straight from the
                     store, unpackaged, and use them as-is. The reasons for someone purchasing the cases can be
                     complicated.
                     Some people like to use it as a candle gift box, while others like it for its unique and beautiful
                     packaging.
                     Furthermore, the candle packaging boxes protect the candles from scratches and fine lines. Shipping
                     Boxes can also be used to keep items safe during transportation, delivery, and capacity.
                  </p>
                  </p>
                  <h2>What kind of custom candle boxes do you want?</h2>
                  <p class="content">
                  <p>If you're thinking of giving candles as a gift, you'll need a high-quality box, which is wise. We
                     offer candle packaging boxes that are not only inexpensive, but also come in a variety of forms and
                     designs from which customers can choose.
                     When you're running a business and competing against a lot of other people, you need to grasp the
                     importance of packaging in order to stand out and obtain more customers.
                     If you believe you can win a competition by using boring and straightforward packaging, you live in
                     a fantastic world.
                  </p>
                  </p>
                  <h2>Candle Boxes with a Personalised Service</h2>
                  <p class="content">
                  <p>Customers are more likely to notice you if you have interesting packaging. A customer, for example,
                     will be invited to purchase your candle packaging boxes if they find them attractive. White or
                     neutral tones are ideal for your custom packing boxes.
                     You could also choose a simple look. A basic rule that you must follow, on the other hand, does not
                     complicate the design; it should have perfect harmony between patterns and colouring.
                     For everyday and simple items, you can usually go with a basic style.
                  </p>
                  </p>
                  <h2>Candle Boxes & Packaging Manufactured using High Material</h2>
                  <p class="content">
                  <p>We employ high-quality, low-cost custom candle boxes and packaging. We all know that candles are one
                     of the most delicate and sensitive objects. They can be readily broken with a small and light load..
                  </p>
                  </p>
                  <h2>How important are Candle Packaging Boxes in the company</h2>
                  <p class="content">
                  <p>A wide range of candles in various tones and scents are available on the market. With so many
                     businesses on the market, competition has been tough, and item packaging is an excellent
                     conservative way to differentiate your image from the crowd.
                     You can enhance the brand's personality by creating custom candle boxes. For your candles, you can
                     focus on the logo, brand tone, a clear image, or Rigid Packaging. It will have a visible, positive
                     impact on the clients' minds and help them understand your image in the future.
                  </p>
                  </p>
                  <h2>Paper Candle Lids are made from natural materials</h2>
                  <p class="content">
                  <p>At <strong>Mosaic Vision Packaging,</strong> we use  <strong>eco-friendly adjustable packaging,</strong> which contributes to our
                     commitment to sustainability. We never overlook the importance of using environmentally friendly
                     packaging.
                     We recognise that our customers have become more environmentally conscious and are concerned about
                     the environmental impact of packaging. Because it can be reused multiple times, craft paper is the
                     best option for reprocessing. Clients can also recycle the boxes or return them to the company.
                  </p>
                  </p>
                  <h2>Paper Candle Samples are made from environmentally friendly materials</h2>
                  <p class="content">
                  <p>Box material is important because it contributes to the aesthetic appeal of a variety of
                     products.Custom Candle Boxes companies can use this packaging to quickly promote and market their
                     image.
                     Simple and accurate information about the candle item, as well as the organisation's symbol, can be
                     printed on the containers. The eye-catching details and layout will assist prospective clients in
                     separating our candle from other corporate candle boxes.
                  </p>
                  </p>
                  <h2>Candle Decorative Boxes are available at wholesale prices</h2>
                  <p class="content">
                  <p>If you work in the wholesale candle box industry, you should be delivering a large number of orders
                     every day. As a result, buying in huge quantities candle boxes may be the most cost-effective
                     option.
                     These are made in such a way that a large number of candles can be stored in a single box. The
                     material is of high quality and build quality, and it can withstand significant weight pressure.
                     Furthermore, you can make these containers stand out by printing your organisation's logo or
                     subtleties on them. Customization is possibly the most cost-effective way to communicate with your
                     customers.
                     Customised Candle Boxes have a number of advantages, the most important of which is that they will
                     serve as an excellent source of publicity.
                     This promotion will be less expensive than television and online media advertisements, which can be
                     quite expensive.
                     Customization also aids in more effectively and successfully communicating your message to clients,
                     resulting in low-cost candle boxes.
                  </p>
                  </p>
                  <h2>Our Incredible Customers' Happiness!</h2>
                  <p class="content">
                  <p>We are proud to say that over the years, our customised candle packaging boxes have satisfied a large
                     number of customers.
                     At <strong>Mosaic Vision Packaging,</strong> we have a team of knowledgeable customer service representatives to
                     assist you in any way we can.
                     Whether you need help choosing the right design, shadings, or materials, or you're worried about
                     costs, we'll make sure all of your questions and concerns are addressed.
                     To maintain our good services and excellent reputation as candle packaging box manufacturers, we
                     keep up with new unique and innovative methods and inventions.
                     As we try to improve our services, client feedback is especially motivating for us.
                  </p>
                  </p>
               </div>
            </div>
         </section>
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
                  <img style="margin-top: 25px;" srcset="assets/images/payment-img.webp 800w, assets/images/payment-img.webp 400w" sizes="(min-width: 400px) 400px, 400px" :src="`images/payment-img.webp`"  alt="Box Packaging" title="Box Packaging" width="205" height="73">
                  <div class="clearfix"></div>
                  <p>Follow Us:</p>
                  <div class="social-icon">
                     <a href="http://www.facebook.com/Mosaic Visionpackaging" aria-label="Face Book" target="_blank" rel="noopener"> <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                     <a href="https://twitter.com/Mosaic Vision_Packaging" aria-label="Twitter" target="_blank" rel="noopener"> <i class="fab fa-twitter" aria-hidden="true"></i></a>
                     <a href="https://www.youtube.com/channel/UCDZAA-9ksepAMcUmA8nCUaA/" aria-label="Youtube" target="_blank" rel="noopener"> <i class="fab fa-youtube" aria-hidden="true"></i></a>
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
                     <li><a href="contact-us.html">Contact Us</a></li>
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
                     <li class="payment"><img loading="lazy" style="width: 100%;height: auto" alt="Box Packaging" title="Box Packaging" :src="`images/free-shipping.webp`" width="300" height="102"> </li>
                     <li class="payment"><img loading="lazy" style="margin-top: -17px;
                        margin-left: -6px;width: 100%;height: auto" alt="Box Packaging" title="Box Packaging" :src="`images/flag.webp`"   width="249" height="85"></li>
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
         </div>
     
  
      <!-- </body>
   </body> -->
<!-- </html> -->

</template>

<script>
//


export default {
  mounted() {
   
  
        }
};
</script>
