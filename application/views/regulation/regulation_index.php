<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">News</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Data</li>
				  </ol>
				</nav>
			</div><!-- /.colmd-8 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-8">
				<h2>Regulations</h2>
				<hr />
				
				<div class="row">
				<?php foreach ($regulation as $key => $value): ?>
					<div class="col-md-6 mb-2">
						<div class="card p-2">
						  <h4 class="card-title"><?= $value['title'] ?></h4>
						  <img class="card-img-top w-100" src="<?=base_url("assets/images/regulation/default-regulation.jpg") ?>" alt="Card image cap">
						  <div class="card-block p-2">
						    <p class="card-text text-muted">
										<?= word_limiter($value['content'],50) ?>
						    </p>
						    
						    <small><?= date('d m Y',strtotime($value['created_at']))." by <b>$value[first_name]</b>" ?></small><a href="<?= base_url("regulation/view/$value[slug]") ?>" class="float-right">Read More</a>
						  </div>
						</div>
					</div><!-- /.col-md-6 -->
				<?php endforeach ?>
				</div><!-- /.row -->


				<nav aria-label="Page navigation example">
				  <?php echo $this->pagination->create_links(); ?>
				</nav>
			</div><!-- /.col-md-8 -->
		
			<div class="col-md-4">
				<h2>Latest Regulations</h2>
				<hr />
				<ul class="list-group">
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				</ul>
				<br />
				<button class="btn btn-info float-right">Show All Regulations</button>
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>