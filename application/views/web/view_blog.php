<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="container blog">
	<div class="row">
		<div id="featured" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#featured" data-slide-to="0" class="active"></li>
				<li data-target="#featured" data-slide-to="1"></li>
				<li data-target="#featured" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="http://localhost/ci-paypro/assets/post/thumbnail/code-wallpaper-38.jpg" alt="">
					<div class="carousel-caption">
						<h3 class="title"><a href="">5 Rekomendasi Memilih</a></h3>
						<div class="info"><a href="">Admin</a>, 30 Februari 2017</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deserunt facilis impedit adipisci beatae voluptatum unde error obcaecati aut quis dignissimos non nemo, quia consequuntur illum recusandae explicabo quisquam labore.</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="item">
					<img src="http://localhost/ci-paypro/assets/post/thumbnail/code-wallpaper-38.jpg" alt="...">
					<div class="carousel-caption">
						Gambar 2
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="item">
					<img src="http://localhost/ci-paypro/assets/post/thumbnail/code-wallpaper-38.jpg" alt="...">
					<div class="carousel-caption">
						Gambar 3
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- Controls -->
<!-- 			<a class="left carousel-control" href="#featured" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#featured" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a> -->
		</div>
	</div>
	<div class="row">
		<h3>Latest News</h3>
		<?php foreach ($news as $post):?>
		<section class="posts">
			<div class="thumbnail">
				<img src="<?php echo base_url('assets/post/thumbnail/' . $post['thumbnail'])?>" alt="<?php echo $post['title']?>"/>
			</div>
			<div class="title"><a href="<?php echo base_url('Blogs/view/'.$post['link']);?>"><?php echo $post['title'];?></a></div>
			<div class="meta"><a href="mailto:<?php echo $post['author']['email'];?>"><?php echo $post['author']['fullname'];?> - </a> <time datetime="<?php echo $post['timeISO8601']?>"><?php echo $post['time']?></time></div>
			<div class="summary"><?php echo $post['summary']?></div>
		</section>
		<?php endforeach;?>
		<div class="clearfix"></div>
	</div>
</div>
