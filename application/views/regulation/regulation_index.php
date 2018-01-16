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
				<h3><?= $title ?></h3>
				<hr />
				
				<ul class="list-group">
				<?php foreach ($regulation as $key => $value): ?>
					<a class="text-white mb-2" href="<?= base_url("regulation/$value[slug]") ?>">
						<li class="list-group-item bg-info">
								<?= $value['title'] ?>
								<br />
						</li>
						<li class="list-group-item">
							
						<span class="text-dark"><?= date("d F Y",strtotime($value['created_at'])) ?></span>
						<span class="float-right btn btn-info">Read More</span>
						</li>
					</a>
				<?php endforeach ?>
				</ul><!-- /.row -->
				<br />
	
				<nav aria-label="Page navigation example">
				  <?php echo $this->pagination->create_links(); ?>
				</nav>
			</div><!-- /.col-md-8 -->
		
			<div class="col-md-4">
				<h3>Latest Regulations</h3>
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