<h1><?php echo h($posts[0]['Post']['title']); ?></h1>

<p><?php echo h($posts[0]['Post']['body']); ?></p>

<p><small>Posted: <?php echo $posts[0]['Post']['created']; ?></small></p>
<?php if(isset($posts[0]['Post']['modified']) && $posts[0]['Post']['created'] != $posts[0]['Post']['modified']): ?>
	<p><small>Edited: <?php echo $posts[0]['Post']['modified']; ?> </small></p>
<?php endif; ?>
