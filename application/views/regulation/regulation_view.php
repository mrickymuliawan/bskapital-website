<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <?= $breadcrumb ?>
				  </ol>
				</nav>
			</div><!-- /.colmd-8 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-8">
				<div class="post-head">
					<h2><?= $regulation['title'] ?></h2>
					<small><?= date('d m Y',strtotime($regulation['created_at'])) ?> by <strong><?= $regulation['first_name'] ?></strong></small> 
					<hr />
				</div><!-- /.post-head -->
				<div class="post-body p-2">
					<img class="w-75" src="<?=base_url("assets/images/regulation/default-regulation.jpg") ?>" alt="" />
					<br /><br />
					<p>
						<?= $regulation['content'] ?>
					</p>
				</div><!-- /.post-body -->	
				<hr />
				<div class="post-comments">
					<h4>Leave Your Comments here</h4>
					<form action="">
						<div class="form-group row">
							<label for="" class="col-2 col-form-label">Name</label>
							<div class="col-8">
								<input type="text" class="form-control" />
							</div><!-- /.col-10 -->
						</div><!-- /.form-gruoup -->
						<div class="form-group row">
							<label for="" class="col-2 col-form-label">Comment</label>
							<div class="col-8">
								<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
							</div><!-- /.col-10 -->
						</div><!-- /.form-gruoup -->
						<div class="form-group row">
							<div class="offset-6 col-4">								
								<button class="form-control btn btn-info">Submit	</button>
							</div><!-- /.col-6 -->
						</div><!-- /.form-group -->
					</form>
				</div><!-- /.post-comments -->
			</div><!-- /.col-md-8 -->
			<div class="offset-md-1 col-md-3">
				<h2>Latest News</h2>
				<hr />
				<div class="card">
				  <img class="card-img-top" src="<?=base_url("assets/images/home/carousel3.jpg") ?>" alt="Card image cap">
				  <div class="card-block p-2">
				    <h4 class="card-title">News Title</h4>
				    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    
				    <small>7 Oct 2017 by Admin</small><a href="#" class="float-right">Read More</a>
				  </div>
				</div>
				<br />
				<div class="card">
				  <img class="card-img-top" src="<?=base_url("assets/images/home/carousel3.jpg") ?>" alt="Card image cap">
				  <div class="card-block p-2">
				    <h4 class="card-title">News Title</h4>
				    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    
				    <small>7 Oct 2017 by Admin</small><a href="#" class="float-right">Read More</a>
				  </div>
				</div>
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>