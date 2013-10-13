<article>
	<h1>Bilder der Praxis</h1>
	<p>Hier sehen Sie einige Bilder meiner Praxis.</p>

	<figure class="left">
		<?php 
			// echo $this->Html->link($this->Html->image('practice001_thumb.jpg'), 'img/practice001_thumb.jpg', array('escape' => false, 'class' => 'overlay'));
			echo $this->Html->image('practice001_thumb.jpg');
		?>
		<!-- <figcaption>Porträt von mir</figcaption> -->
	</figure>

	<figure class="right">
		<?php 
			echo $this->Html->image('practice002_thumb.jpg');
		?>
		<!-- <figcaption>Porträt von mir</figcaption> -->
	</figure>

	<figure class="left">
		<?php 
			echo $this->Html->image('practice003_thumb.jpg');
		?>
		<!-- <figcaption>Porträt von mir</figcaption> -->
	</figure>
</article>