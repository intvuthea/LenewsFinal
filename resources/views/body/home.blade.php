
@extends("masterpage")
@section("home")

		 <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                                 please consider donating a small sum to help pay..
                              </p>
                              <button class="btn btn-primary btn-lg">Read More</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Second slide -->
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                              <button class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Third slide -->
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                              <button class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!-- /.carousel -->


            
            <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/imac.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">10 July 2019</span>
                              <h2><a href="blog-detail.html">The new Macpro Price</a></h2>
                              <p>Apple has announced a brand new Mac Pro, just over two years with a price tag of $6000 which is insanely high.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/mate30pro.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">20 July 2019</span>
                              <h2><a href="blog-detail.html">Free play to ground in anywhere</a></h2>
                              <p>Huawei's P30 Pro is one of the best camera phones on the market, but it's not the last device we expect to see this year.</p>
                           </div>
                        </div>
                     </div>
                     
                     
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                     <div class="top-stroy-header">
                        <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                        <span class="date">July 05, 2017</span>
                        <h2>Other Headlines</h2>
                     </div>
                     <ul class="other-stroies">
                        <li><a href="#">Wenger Vardy won't start</a></li>
                        <li><a href="#">Evans: Vardy just</a></li>
                        <li><a href="#">Pires and Murray </a></li>
                        <li><a href="#">Okazaki backing</a></li>
                        <li><a href="#">Wolfsburg's Rodriguez</a></li>
                        <li><a href="#">Jamie Vardy compared</a></li>
                        <li><a href="#">Arsenal target Mkhitaryan</a></li>
                        <li><a href="#">Messi wins libel case.</a></li>
                     </ul>
                  </div>
                  <!-- <aside id="sidebar" class="right-bar">
                     <div class="banner">
                        <img class="img-responsive" src="images/adds-3.jpg" alt="#">
                     </div>
                  </aside> -->
               </div>
            </div>
         </div>
      </section>
@stop