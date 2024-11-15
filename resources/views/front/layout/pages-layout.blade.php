
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="Ecommerce">
    <title>Ticketrum Comunidad de compra y venta de boletos</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/front/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css" type="text/css">    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/front/fonts/font-awesome.min.css" type="text/css">   
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="/front/fonts/line-icons/line-icons.css" type="text/css">      
    <!-- Main Styles -->
    <link rel="stylesheet" href="/front/css/main.css" type="text/css">
 
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/front/extras/animate.css" type="text/css">    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/front/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/front/extras/owl.theme.css" type="text/css">  
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="/front/css/slicknav.css" type="text/css">  
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="/front/css/responsive.css" type="text/css">
    
  </head>

  <body>  
    <!-- Header Section Start -->
    @include('front.layout.inc.header')
    <!-- Header Section End -->

    <!-- Mobile menu start -->
    @include('front.layout.inc.mobile-menu')
    <!-- mobile menu end -->

    <!-- Main Ad Section -->
    <section class="section">
              <!-- LAYERS 1-->
              <div class="text-center">
                <p>You are trying free version</p>
                <h2>Purchase Full Version to Get All Pages and Features</h2>
                <p></p>
                <a class="btn btn-danger" rel="nofollow" href="https://rebrand.ly/purchase-emart">Purchase Now</a>
              </div>
    </section>
    <!-- Main Ad Section End-->

    <!-- Feature ctg Section Start -->
    <section class="feature-categories section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-item-content">
              <img src="/front/img/feature/img1.jpg" style="width:100%;height:520px;">
              <div class="feature-content">
                <div class="banner-text">
                  <h4>Conciertos</h4>
                  <p>Encuentra el concierto que estabas esperando</p>
                </div>                
                <a href="#" class="btn btn-common">Shop Now</a>
              </div>
            </div>
          </div>         
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-item-content">
              <img src="/front/img/feature/img3.jpg"  style="width:100%;height:520px;">
              <div class="feature-content">
                <div class="banner-text">
                  <h4>Women's Clothing</h4>
                  <p>Up to <span>70%</span> OFF</p>
                </div>                 
                <a href="#" class="btn btn-common">Shop Now</a>
              </div>
            </div>
          </div>
           <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-item-content mb-30">
              <img src="/front/img/feature/img2.jpg"  style="width:370px;height:245px;">
              <div class="feature-content">
                <div class="banner-text accessories">
                  <h4>Accessories</h4>
                  <p>Handpicked for Men/Women</p>
                </div>
                <a href="#" class="btn btn-common">Shop Now</a>
              </div>
            </div>
            <div class="feature-item-content">
              <img src="/front/img/feature/img4.jpg" style="width:370px;height:245px;">
              <div class="feature-content">
                <div class="banner-text accessories">
                  <h4>Kids Essentials</h4>
                  <p>Best Collection for Kids</p>
                </div>
                <a href="#" class="btn btn-common">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature ctg Section End -->

    <!-- Shop Collection Section Start -->
    <section id="shop-collection">
      <div class="container">
        <h1 class="section-title">Nuevos Boletos</h1>
        <hr class="lines">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-01.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <span class="sticker new"><strong>NEW</strong></span>
                <div class="actions">
                  <div class="add-to-links">                     
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$49.00</span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>             
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-02.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <span class="sticker discount"><strong>-40%</strong></span>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$59.00</span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-03.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$69.00 <del>$79.00</del></span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-04.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <span class="sticker sale"><strong>Sale</strong></span>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$39.00</span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-05.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <span class="sticker sale"><strong>Sale</strong></span>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$69.00</span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-06.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$39.00 <del>$79.00</del></span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>             
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-07.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <span class="sticker new"><strong>NEW</strong></span>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$56.00</span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>             
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="/front/img/products/img-08.jpg"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.html">Beatae Vitae Dicta</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">$79.00</span>
                  </div>
                  <div class="pull-right">
                    <div class="reviews-icon">
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="i-color fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>             
          </div>
        </div>
      </div>
    </section>
    <!-- Shop Collection Section End -->

    <!--  Discount Product Start  -->
    <section class="discount-product-area">
      <div class="container">
        <div class="row">
          <div class="discount-text">
            <p></p>
            <h3>Exclusive Deals of This Season!</h3>
            <a href="#" class="btn btn-common btn-large">Descubre mas</a>
          </div>
        </div>
      </div>
    </section>
    <!--  Discount Product End  -->

    <!-- New Products Section Start-->
    <section class="section">
      <div class="container">
        <h1 class="section-title">Eventos Destacados</h1>
        <hr class="lines">
        <div class="row">
          <div class="col-md-12">
            <div id="new-products" class="owl-carousel">
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-01.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                     <span class="sticker new"><strong>NEW</strong></span>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$49.00</span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-02.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>                   
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$59.00 <del>$79.00</del></span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-03.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>                    
                    <span class="sticker sale"><strong>Sale</strong></span>
                    <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$68.00</span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-04.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$59.00 <del>$69.00</del></span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-05.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <span class="sticker discount"><strong>-40%</strong></span>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$79.00</span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-06.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$69.00</span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>  
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="/front/img/feature-products/img-07.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <span class="sticker sale"><strong>Sale</strong></span>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$56.00</span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
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
    </section>
    <!-- New Products Section End -->

    <!--  Content Area  Section Start -->
    <section id="content-area">
      <div class="container">
        <div class="hero-land clearfix">
          <div class="landing caption">
            <h2>Multi-vendor eCommerce Template</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem, ducimus reprehenderit sed molestiae iure sapiente accusamus incidunt minima expedita velit assumenda vitae libero. Eaque nostrum magni architecto, corporis doloremque!</p>
            <p>
              <a href="category.html" class="btn btn-common">Explore</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--  Content Area  Section End -->

    <!-- Services Section Starts -->
    <section id="services" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">          
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-people"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Multi-vendor eCommerce</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-screen-desktop"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Clean Design</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-basket-loaded"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">100+ eCommerce Elements</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-layers"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Included Business Pages</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-screen-tablet"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Fully Responsive</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service -->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-chemistry"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Cutting-edge Features</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-settings"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Completely Customizable</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-rocket"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Fast and Well-optimized</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service -->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-umbrella"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Rich Doc and Support</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
        </div>
      </div>
      <!-- Container Ends -->
    </section>
  
    <!-- Start Client Section -->
    <div class="client section">
      <div class="container">
        <div class="row">
          <div id="client-logo" class="owl-carousel">
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-01.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-02.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-03.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-04.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-05.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-06.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-07.png" alt="" />
              </a>
            </div>
            <div class="client-logo item">
              <a href="#">
                <img src="/front/img/clients/logo-08.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Client Section -->

    <!-- Support Section Start -->
    <div class="support section">
      <div class="container">
        <div class="row">
         <div class="support-inner">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row-normal clearfix">
              <div class="support-info">
                <div class="info-title">
                  <i class="icon-plane"></i>
                  Free Shipping Worldwide
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row-normal clearfix">
              <div class="support-info">
                <div class="info-title">
                  <i class="icon-earphones-alt"></i>
                  24/7 Customer Service
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row-normal clearfix">
              <div class="support-info">
                <div class="info-title">
                  <i class="icon-refresh"></i>
                  Easy Return Policy
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
    <!-- Support Section End -->
    
    <!-- Footer Start -->
    @include('front.layout.inc.footer')
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p>All copyrights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="payment pull-right">
              <img src="/front/img/payment.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>


    <!-- Start Loader -->
    <div id="loader">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>  
        
    <!-- All js here -->
    <script type="text/javascript" src="/front/js/jquery-min.js"></script>      
    <script type="text/javascript" src="/front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/front/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/front/js/classie.js"></script>    
    <script type="text/javascript" src="/front/js/slick.min.js"></script>
    <script type="text/javascript" src="/front/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="/front/js/main.js"></script>       
    
  </body>
</html>