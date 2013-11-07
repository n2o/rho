<article>
	<h1 class="cataneo" style="padding-bottom: 0; font-size: 2em;">WEGE ZUR HEILUNG</h1>
	<h3 style="font-size: 1.25em"><span class="cataneo"><font color="black">den ganzen Menschen heilen - Körper, Geist, Seele.</font></span></h3>	

	<?php 
		echo $this->Html->image('sun_clear.png', array('class' => 'cornerRight'));
	?>

	<div width="100%">
		<div id="left">
			<?php 
				echo $this->Html->image('paper_first_page.png', array('class' => 'paperFirstPage'));
			?>
		</div>

		<div id="right" style="margin-top: 3em;">
			<h3 style="margin-top: 1em;">Anschrift:</h3>
			<p>
				Heilpraktikerin Renate Horsch<br>
				Sperberstr. 24<br>
				42859 Remscheid<br>
				Telefon: 02191 / 882197<br>
				E-Mail: <?php echo $this->Html->link('info@renate-horsch.de', 'mailto:info@renate-horsch.de'); ?>
			</p>
		</div>
	</div>

	<?php 
		echo $this->Html->image("horsch_renate_21.10.2013_thumb.png", array(
			"class" => "cornerRightBottom",
			"alt" => "certificate",
			"url" => "http://www.bkhd-zweckbetrieb.de")
		);
	?>
</article>