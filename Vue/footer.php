		<!--<script src="https://cdn.tiny.cloud/1/vai3v6jyalwd933wte7v6xd737fwl936ios2qmp3wl878bo8/tinymce/5/tinymce.min.js"></script>-->
		 
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
	