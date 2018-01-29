<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb bg-light">
				    <?= $breadcrumb ?>
				  </ol>
				</nav>
			</div><!-- /.colmd-12 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<h3><?= $title ?></h3>
				<hr />
				<div class="row">
				<?php foreach ($career as $key => $value): ?>
				<div class="col-md-6 text-white mb-2">
					<div class="card p-2 bg-info">
					  <h5 class="card-title"><?= ucwords($value['title']) ?></h5>
					  <div class="card-block p-2">
					    <p class="card-text">
					    	<?= strip_tags(word_limiter($value['content'],30)) ?>
					    </p>
						<!-- <span><?= date('d F Y',strtotime($value['created_at']))." by <b>$value[first_name]</b>" ?></span> -->
	 					<a href="<?= base_url("career/$value[slug]") ?>" class="btn bg-white float-right">Read More</a>	
					  </div>
					</div>
				</div><!-- /.col-md-6 -->
				
				<?php endforeach ?>
				</div><!-- /.row -->
				
			</div><!-- /.col-md-12 -->

		
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>