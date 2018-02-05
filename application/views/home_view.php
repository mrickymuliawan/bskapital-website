
<header class="py-2">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
    	<?php foreach ($slider as $key => $value): ?>
    		<div class="carousel-item <?php if ($key==0): ?> active <?php endif ?>">
          <div class="row">
            <div class="col-md-12 carousel-column">
              <img class="d-block w-100 h-100" src="<?=base_url("assets/images/slider/$value[image_name]") ?>" alt="First slide">
	              
            </div><!-- /.col -->
            <div class="col-lg-10">
            	<div class="carousel-caption text-justify px-2">
						    <h3><?=$value['title']?></h3>
						    <h5><?=$value['sub_title']?></h5>
						    <p><?=$value['content']?></p>
						    <button class="btn btn-primary">See More</button>
						  </div>
            </div><!-- /.col-md-8 -->
          </div><!-- /.row -->
        </div>
    	<?php endforeach ?>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>	

<section class="bg-light py-5">
	<div class="container">
	  <div class="row">
	  	<div class="col-md-12">
	  		<h2 class="">Welcome to <strong>BSKAPITAL</strong></h2>

	  		<p>
	  			<b>
	  				The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
	  			</b>
	  		</p>
	  		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. 
				</p>
				<p>
					The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then
				</p>
				<a href="" class="btn btn-primary">About Us</a href="">
	  	</div>
	  </div>
	</div><!-- /.container -->
</section>	

<section class="bg-primary text-white mb-5 py-5">
	<div class="container">
	  <div class="row">
	  	<div class="col-md-8 mx-auto text-center">
	  		<h2 class="">What Services We Provide</h2>
	  		<p>This is what we offer</p>
	  	</div>
	  </div>
	</div><!-- /.container -->
</section>	

<section class="mb-5">
	<div class="container">
		<h2 class="text-center">SERVICES</h2>
	  <div class="row">
	  	<div class="col-md-4">
	  		<div class="card">
				  <img class="card-img-top" src="<?=base_url("assets/images/home/carousel3.jpg") ?>" alt="Card image cap">
				  <div class="card=block p-2">
				    <h4 class="card-title">Tax Advisory Services</h4>
				    <p class="card-text text-muted">Tax issues are a crucial component in any company's operations. With Indonesian tax regulations growing more complicated, and tax officials becoming...</p>
				  </div>
				  <div class="card-block">
				    <a href="#" class="btn btn-info btn-block ">Find Out More</a>
				  </div><!-- /.card-block -->
				</div>
	  	</div><!-- /.col-md-4 -->
	  	<div class="col-md-4">
	  		<div class="card">
				  <img class="card-img-top" src="<?=base_url("assets/images/home/carousel3.jpg") ?>" alt="Card image cap">
				  <div class="card-block p-2">
				    <h4 class="card-title">Tax Compliance Services</h4>
				    <p class="card-text text-muted">
							“Because Time is Your Most Valuable Asset” Tax and financial issues are crucial components in any company’s operations. Failure to...
						</p>
				  </div>
				  <div class="card-block">
				    <a href="#" class="btn btn-info btn-block ">Find Out More</a>
				  </div><!-- /.card-block -->
				</div>
	  	</div><!-- /.col-md-4 -->
	  	<div class="col-md-4">
	  		<div class="card">
				  <img class="card-img-top" src="<?=base_url("assets/images/home/carousel3.jpg") ?>" alt="Card image cap">
				  <div class="card-block p-2">
				    <h4 class="card-title">Transfer Pricing Services</h4>
				    <p class="card-text text-muted">
				    	With a significant occurrence of cross border transactions, the importance of transfer pricing rule has captured the tax authority’s attention. In...
						</p>				   
				  </div>				  
				  <div class="card-block">
				    <a href="#" class="btn btn-info btn-block ">Find Out More</a>
				  </div><!-- /.card-block -->
				</div>
	  	</div><!-- /.col-md-4 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
</section>	

<section class="bg-light p-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2 class="text-center">LATEST NEWS</h2>
	  		<div class="card">
				  <img class="card-img-top" src="<?=base_url("assets/images/home/carousel3.jpg") ?>" alt="Card image cap">
				  <div class="card-block p-2">
				    <h4 class="card-title">News Title</h4>
				    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    
				    <small>7 Oct 2017 by Admin</small><a href="#" class="float-right">Read More</a>
				  </div>
				</div>
				<br />
				<button class="btn btn-info float-right">Show All News</button>
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<h2 class="text-center">LATEST REGULATIONS</h2>
				<ul class="list-group">
				  <li class="list-group-item"><a href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item"><a href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item"><a href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item"><a href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item"><a href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				</ul>
				<br />
				<button class="btn btn-info float-right">Show All Regulations</button>
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<section class="bg-info text-white p-5">
	<div class="container">
		<h2 class="">CAREER</h2>
		<!-- <p>Jobs Offer</p> -->
		<hr />
	  <div class="row">
	  	<div class="col-md-6 p-4 bg-light text-dark">
				<h4>HR Analyst</h4>
				<p class="text-muted">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				</p>
				<button class="btn btn-default">Read More</button>
	  	</div>
	  	<div class="col-md-6 p-4 bg-light text-dark">
				<h4>Auditor</h4>
				<p class="text-muted">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				</p>
				<button class="btn btn-default">Read More</button>
	  	</div>
	  </div>
	</div><!-- /.container -->
</section>	