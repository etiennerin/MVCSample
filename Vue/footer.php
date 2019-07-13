		<?php 
		foreach($this->getLibraries() as &$value)
		{
		?>
		<script src="<?= $value ?>" ></script>
		<?php 
		}
		?>
		<?php
		foreach($footer_data["scripts"] as &$value)
		{
		?>
		<script src="<?= $value ?>" ></script>
		<?php 
		}
		?>
	</body>
</html>
	