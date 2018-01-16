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
			<div class="col-md-12">
				<div class="post-head">
					<h3><?= ucwords($regulation['title']) ?></h3>
					<!-- <small><?= date('d m Y',strtotime($regulation['created_at'])) ?> by <strong><?= $regulation['first_name'] ?></strong></small>  -->
				</div><!-- /.post-head -->
				<div class="post-body p-2 border">
					
					<br /><br />
					<p>
						<?= $regulation['content'] ?>
					</p>
				</div><!-- /.post-body -->	
				<br />
			</div><!-- /.col-md-8 -->
			
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>