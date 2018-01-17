<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb bg-light">
				    <?= $breadcrumb ?>
				  </ol>
				</nav>
			</div><!-- /.colmd-8 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-8">
				<h3><?= $title ?></h3>
				<hr />
				
				
				<?php foreach ($regulation as $key => $value): ?>
					<div class="row mb-5 border py-1">
						<div class="col-md-5">
							<img class="img-fluid" src="<?=base_url("assets/images/regulation/default-regulation.jpg") ?>" alt="Card image cap">
						</div><!-- /.col-md-5 -->
						<div class="col-md-7">					  
					   <a href="<?= base_url("regulation/$value[slug]") ?>">
						  	<h5 class="text-dark"><?= ucwords($value['title']) ?></h5>
						  </a>
					    <p class="text-muted">
									<?= strip_tags(word_limiter($value['content'],30)) ?>
					    </p>
					    <br />
					    <span><?= date('d F Y',strtotime($value['created_at']))." by <b>$value[first_name]</b>" ?></span>
		 					<a href="<?= base_url("regulation/$value[slug]") ?>" class=" btn btn-primary float-right">Read More</a>	
							 
						</div><!-- /.col-md-7 -->

					</div><!-- /.row -->
				<?php endforeach ?>
				<br />
	
				<nav aria-label="Page navigation example">
				  <?php echo $this->pagination->create_links(); ?>
				</nav>
			</div><!-- /.col-md-8 -->

			<div class="col-md-4">
				<h3>Latest News</h3>
				<hr />
					<?php foreach ($news as $key => $value): ?>
						<div class="card">
						  <img class="card-img-top" src="<?= base_url("assets/images/news/$value[image_name]") ?>" >
						  <div class="card-body pb-0">
						    <h5 class="card-title"><?= ucwords($value['title']) ?></h5>
						    <p class="card-text"><?= strip_tags(word_limiter($value['content'],30)) ?></p>
						  </div>
						  <div class="card-footer bg-white">
						  	<small><?= date('d F Y',strtotime($value['created_at']))." by <b>$value[first_name]</b>" ?></small>
						  	<a href="<?= base_url("news/$value[slug]") ?>" class="float-right btn btn-info">Read More</a>
						  </div>
						</div>
						<br />
					<?php endforeach ?>
				<a href="<?= base_url('news') ?>" class="btn btn-info float-right">Show All News</a>
			</div><!-- /.col-md-4 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</section>