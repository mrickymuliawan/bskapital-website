<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <?= $breadcrumb ?>
				  </ol>
				</nav>
			</div><!-- /.colmd-12 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-8">
				<h3><?= $title ?></h3>
				<hr />
				<?php foreach ($news as $key => $value): ?>
				<div class="row mb-2">
				
					<div class="col-md-4">
						<img class="img-fluid" src="<?=base_url("assets/images/news/$value[image_name]") ?>" alt="Card image cap">
					</div><!-- /.col-md-4 -->
					<div class="col-md-8">
						<div class="card p-2">
						  <h4 class="card-title"><?= ucwords($value['title']) ?></h4>
						  
						  <div class="card-block p-2">
						    <p class="card-text text-muted">
										<?= word_limiter($value['content'],50) ?>
						    </p>
						    
						    <small><?= date('d F Y',strtotime($value['created_at']))." by <b>$value[first_name]</b>" ?></small><a href="<?= base_url("news/$value[slug]") ?>" class="float-right">Read More</a>
						  </div>
						</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
				<?php endforeach ?>


				<nav aria-label="Page navigation example">
				  <?php echo $this->pagination->create_links(); ?>
				</nav>
			</div><!-- /.col-md-8 -->

			<div class="col-md-4">
				<h3>Latest Regulation</h3>
				<hr />
				<ul class="list-group">
					<?php foreach ($regulation as $key => $value): ?>
						<li class="list-group-item bg-info">
							<a class="text-white" href="<?= base_url("regulation/$value[slug]") ?>">
							<?= $value['title'] ?></a>
						</li>
					<?php endforeach ?>
				  
				</ul>
				<br />
				<a href="<?= base_url('regulation') ?>" class="btn btn-info float-right">Show All Regulations</a>
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>