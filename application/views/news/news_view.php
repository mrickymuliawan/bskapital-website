<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
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
					<h3><?= ucwords($news['title']) ?></h3>
					<small><?= date('d F Y',strtotime($news['created_at'])) ?> by <strong><?= $news['first_name'] ?></strong></small> 
					<hr />
				</div><!-- /.post-head -->
				<div class="post-body p-2">
					<img class="w-75" src="<?=base_url("assets/images/news/$news[image_name]") ?>" alt="" />
					<br /><br />
					<p>
						<?= $news['content'] ?>
					</p>
				</div><!-- /.post-body -->	
				<hr />
				
			</div><!-- /.col-md-8 -->
			<div class="col-md-4">
				<h3>Latest Regulation</h3>
				<br />
				<hr />
				<ul class="list-group">
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				  <li class="list-group-item bg-info"><a class="text-white" href="">MoF Regulation No. 118/PMK.03/2016Concerning Implementation of Laws No. 11 Year 2016</a></li>
				</ul>
				<br />
				<a href="<?= base_url('regulation') ?>" class="btn btn-info float-right">Show All Regulations</a>
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>