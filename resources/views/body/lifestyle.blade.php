@extends("masterpage")
@section("home")





<div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>News</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">News</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/lifestyle1.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">19 July 2019</span>
                              <h2><a href="blog-detail.html">Funny Conversation</a></h2>
                              <p>McDonald's employee accidentally leaves drive-thru mic on, revealing hilarious conversation</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/lifestyle2.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">21 July 2019</span>
                              <h2><a href="blog-detail.html">Testing Out new System</a></h2>
                              <p>Pizza Hut to test out system where customers never have to interact with an actual person</p>
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


@endsection