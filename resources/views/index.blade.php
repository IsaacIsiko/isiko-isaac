@extends('layouts.apps')
@section('content')
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                        <h2 data-animation="animated bounceInDown"><span style="border-radius: 40px;">Give a little change a lot</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="aboutus">READ MORE</a></h4>             
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                        <h2 data-animation="animated bounceInDown"><span style="border-radius: 40px;">More charity More better life</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="aboutus">READ MORE</a></h4>             
             </div>
            <!-- Item 3 -->
            <div class="item slide3">
                        <h2 data-animation="animated bounceInDown"><span style="border-radius: 40px;">Raise fund Warm heart</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="aboutus">READ MORE</a></h4>             
             </div>
            <!-- Item 4 -->
            <div class="item slide4">
                        <h2 data-animation="animated bounceInDown"><span style="border-radius: 40px;">Raise your funds for a cause</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="aboutus">READ MORE</a></h4>             
             </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h1>About Ishak Community Organisation</h1>
<hr>
<h5>We are charitable non-profit organization</h5>
<p>Bringing a smile on the face of every child and human in the world is our passion, we have done this through providing educational services to the orphans, we aim at providing healthcare services to the children, elderly and un abled people such as pregnant mothers. We also provide basic needs like clothes, books, water, food etc. to the poor, this has brought a smile to people in the community.</p>
<p>Ishak community foundation was founded by Dr ISIKO ISAAC in 2020 though was fully registered as a community-based organization in 2021. This was in response to the suffering of children in the communities of Jinja district of Eastern Uganda. Where ISIKO ISAAC grew up and studies from. Many children were malnourished with no access to medical services, many families were hungry, many school-aged children were out of school, and many youths were unemployed.</p>
<p>Dr.ISIKO ISAAC was touched by the kind of suffering the children in his community pass through daily and he  decided to join hands with few of community volunteers to help the poorest and the most vulnerable of them. This is how Ishak community foundation was started.
    <br/> The organization started operation in 1 district in Eastern Uganda i.e. Jinja district but has since then expanded to 2 more districts.
    </p>
    <p>Currently, all the support for our children is got from membership subscription fee and community volunteers. We welcome all kinds of donations and grants from individuals and organizations willing to change the lives of the hopeless children within the community. We are also open to any partnership with any organization such humanitarian, child advocacy and any other non-profit organizations.</p>
<div class="text-center">
<a href="donate" class="btn1">donate now</a>
<a href="aboutus" class="btn2">Read More</a>
</div>
</div>
</div>
</section>

<section id="activities-sec">
<div class="container">
<div class="row text-center">
<h1>WHAT WE DO?</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-heart"></i></div>
<div class="grid-content-wrapper"><h4>Charity for Education</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
<div class="grid-content-wrapper"><h4>Feed for Hungry Child</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-home"></i></div>
<div class="grid-content-wrapper"><h4>Home for Homeless</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-tint"></i></div>
<div class="grid-content-wrapper"><h4>Bringing Clean Water</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
<div class="grid-content-wrapper"><h4>Help Little Hands</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-money"></i></div>
<div class="grid-content-wrapper"><h4>Donate for Children</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities" title="" >Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="video-sec">
<div class="container">
<div class="row text-center">
<h1>How can you help?</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-6 clearfix top-off">
<video width="400" controls>
 <source src="/assets/images/mov_bbb.mp4" type="video/mp4">
</video>
</div>
<div class="col-md-6 clearfix top-off">
<div class="media">
<div class="media-image">
<img src="/assets/images/g1.png" class="attachment-full size-full" alt="g1">																							</div>
<div class="media-text">
<h5>BECOME A VOLUNTEER</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
<div class="media">
<div class="media-image">
<img src="/assets/images/g2.png" class="attachment-full size-full" alt="g1">																							</div>
<div class="media-text">
<h5>MAKE A GIFT</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
<div class="media">
<div class="media-image">
<img src="/assets/images/g1.png" class="attachment-full size-full" alt="g1">																							</div>
<div class="media-text">
<h5>GIVE A SCHOLASHIP</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="projects-sec">
<div class="container">
<div class="row text-center">
<h1>OUR PROJECTS</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-center"> 
<div class="col-md-4 clearfix top-off">
<div class="grid-image"><img src="/assets/images/test1.jpg"></div>
<div class="post-content">
<h3>Nepal Earthquake: Clean Water Initiative</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="projects" title="" >View Project</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-image"><img src="/assets/images/test2.jpg"></div>
<div class="post-content">
<h3>Nepal Earthquake: Clean Water Initiative</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="projects" title="" >View Project</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-image"><img src="/assets/images/test3.jpg"></div>
<div class="post-content">
<h3>Nepal Earthquake: Clean Water Initiative</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="projects" title="" >View Project</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="gallery-sec">
<div class="container">
<div class="row text-center">
<h1>OUR GALLERY</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<ul class="clearfix">

<li>
<a href="/assets/images/gallery1.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery1.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div></a>
</li>
<li>
<a href="/assets/images/gallery2.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery2.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>

<li>
<a href="/assets/images/gallery3.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery3.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>

<li>
<a href="/assets/images/gallery4.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery4.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="/assets/images/gallery5.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery5.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="/assets/images/gallery6.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery6.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="/assets/images/gallery7.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery7.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="/assets/images/gallery8.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="/assets/images/gallery8.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
</ul>
<div class="text-center">
<a href="gallery" class="btn1">View More</a>
</div>
</div>
</div>
</section>

@endsection


