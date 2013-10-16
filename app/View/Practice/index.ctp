<article>
	<h1>Praxis</h1>
	<p>
		Bitte wählen Sie aus folgenden Unterseiten:
		<ul>
			<?php 
				echo "<li>".$this->Html->link('Bilder', array('action' => 'pics'))."</li>"; 
				echo "<li>".$this->Html->link('Sprechzeiten', array('action' => 'consultation'))."</li>";
				echo "<li>".$this->Html->link('Behandlung', array('action' => 'treatment'))."</li>";
				echo "<li>".$this->Html->link('Kosten', array('action' => 'costs'))."</li>";
				echo "<li>".$this->Html->link('Gebührenordnung', array('action' => 'tariffs'))."</li>";
			?>
		</ul>
	</p>
</article>