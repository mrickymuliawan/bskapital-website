
<header class="">

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
              <img class="d-block w-100" src="<?=base_url("assets/images/slider/$value[image_name]") ?>" alt="First slide">
	              
            </div><!-- /.col -->
            <div class="col-lg-10">
            	<div class="carousel-caption text-justify px-2">
						    <h3><?=$value['title']?></h3>
						    <h5><?=$value['sub_title']?></h5>
						    <p><?=$value['content']?></p>
						    <?php if ($value['link_url'] != ''): ?>
						    	<a href="<?=$value['link_url']?>" class="btn btn-primary"><?=$value['link_text']?></a>
						    <?php endif ?>
						    
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
	  		<?= $about['content'] ?>
				<a href="<?= base_url('about') ?>" class="btn btn-primary">About Us</a href="">
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
	  	<?php foreach ($services as $key => $value): ?>
	  	<div class="col-md-4">
	  		<div class="card hover-shadow">
				  <a href="<?=base_url("services/$value[slug]") ?>"> <img class="card-img-top" src="<?=base_url("assets/images/subpage/$value[image_name]") ?>" alt="Card image cap"></a>
				  <div class="card=block p-2">
				    <h4 class="card-title"><?= ucwords($value['title']) ?></h4>
				    <?= strip_tags(word_limiter($value['content'],30)) ?>
				  </div>
				  <div class="card-block">
				    <a href="<?=base_url("services/$value[slug]") ?>" class="btn btn-info btn-block ">Find Out More</a>
				  </div><!-- /.card-block -->
				</div>
	  	</div><!-- /.col-md-4 -->
	  	<?php endforeach ?>
	  	
	  </div><!-- /.row -->
	</div><!-- /.container -->
</section>	

<section class="bg-light p-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2 class="text-center">LATEST NEWS</h2>
				<?php foreach ($news as $key => $value): ?>
				
	  		<div class="card hover-shadow">
	  			<a href="<?= base_url("news/$value[slug]") ?>">
				 	 <img class="card-img-top" src="<?=base_url("assets/images/news/$value[image_name]") ?>" alt="Card image cap" >
				  </a>	
				  <div class="card-block p-2">
				    <h4 class="card-title"><?= ucwords($value['title']) ?></h4>
				    <p>
				    <?= date('d F Y',strtotime($value['created_at']))." by <b>$value[first_name]</b>" ?>			    	
				    </p>
				    <?= strip_tags(word_limiter($value['content'],30)) ?>
				    
				    <br /><br />
				    <a href="<?= base_url("news/$value[slug]") ?>" class="btn float-right">Read More</a>
				  </div>
				</div>
				<?php endforeach ?>	
				<br />
				<a href="<?=base_url("news")?>" class="btn btn-info float-right">Show All News</a>
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<h2 class="text-center">LATEST REGULATIONS</h2>
				<ul class="list-group">
					<?php foreach ($regulation as $key => $value): ?>
				  	<li class="list-group-item">
				  		<a href="<?= base_url("regulation/$value[slug]") ?>">
				  			<?= $value['title'] ?>
				  		</a>
				  	</li>
						
					<?php endforeach ?>
				</ul>
				<br />
				<a href="<?=base_url("regulation")?>" class="btn btn-info float-right">Show All Regulations</a>
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
	  <?php foreach ($career as $key => $value): ?>
	  	<div class="col-md-6 p-4 bg-light text-dark">
				<h4><?= ucwords($value['title']) ?></h4>
				<p class="text-muted">
					<?= strip_tags(word_limiter($value['content'],30)) ?>
				</p>
				<a href="<?=base_url("career/$value[slug]")?>" class="btn btn-primary">Read More</a>
	  	</div>
	  	
	  <?php endforeach ?>
	  <a href="<?=base_url("career")?>" class="btn bg-white mt-2 btn-block">See All Careers</a>
	  </div>
	</div><!-- /.container -->
</section>	