			
			<div id="sidebar">
				<p class="sidebar_bttn"><a href="<?php echo site_url('main/create'); ?>">Share Your Recipe</a></p>
				<p class="sidebar_bttn"><a href="<?php echo site_url('main/browse'); ?>">Browse Recipes</a></p>
				<p class="intro_video"><iframe width="271" height="213" src="http://www.youtube.com/embed/RKrz6LLewrE" frameborder="0" allowfullscreen></iframe></p>
				<ul id="social">
					<li><img src="<?php echo base_url(); ?>images/facebook-logo.png"/></li>
					<li><img src="<?php echo base_url(); ?>images/twitter-logo.png"/></li>
					<li><img src="<?php echo base_url(); ?>images/google-plus-logo.png"/></li>
				</ul>
				<!--<h2>Categories</h2>
				<ul>
					<li><a href="<?php echo site_url('main/recipes')?>"><span>&raquo;</span> All</a></li>
					<?php
						if($categories){
							foreach($categories as $row){
								$segments = array('main', 'recipes', $row['id']);?>
								<li><a href="<?php echo site_url($segments); ?>"><span>&raquo;</span><?php echo $row['name']; ?></a></li>
								<?php
							}
						}
					?>
				</ul>-->
			</div>
			
			<div id="content">