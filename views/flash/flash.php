<?php foreach ($flashes as $flash): ?>
<div class="alert alert-<?php echo $flash['type']; ?>" data-dismiss="alert">
	<p><?php echo $flash['message']; ?></p>
</div>
<?php endforeach; ?>
