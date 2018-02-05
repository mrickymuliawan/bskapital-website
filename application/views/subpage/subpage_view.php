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
			<div class="col-md-4">
				<ul class="list-group">

					<?php foreach ($sub_page_list as $key => $value): ?>
						
						<?php if ($value['title']!='homepage'): ?>
							<li class="list-group-item"><a class="" href="<?= base_url("$page_title/$value[slug]") ?>"><?= ucwords($value['title']) ?> <span class="fa fa-chevron-right float-right"></a> </span></li>
						<?php endif ?>

					<?php endforeach ?>

					<?php if ($page_title=='about'): ?>
						<li class="list-group-item"><a class="" href="<?= base_url("people") ?>">
						Our People<span class="fa fa-chevron-right float-right"></a> </span></li>
					<?php endif ?>
				  
				</ul>
			</div><!-- /.col-md-4 -->
			<div class="col-md-8">
				<div class="post-head">
					<h3><?= ucwords($sub_page['title']) ?></h3>
					<p><?= ucwords($sub_page['sub_title']) ?></p>
					<hr />
				</div><!-- /.post-head -->
				<div class="post-body p-2">
					<img class="img-fluid" src="<?=base_url("assets/images/subpage/$sub_page[image_name]") ?>" alt="" />
					<br /><br />

					<?= $sub_page['content'] ?>
					
				</div><!-- /.post-body -->	
			</div><!-- /.col-md-8 -->
			
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>