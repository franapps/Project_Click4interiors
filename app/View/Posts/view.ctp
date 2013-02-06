<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><?php echo h($post['Post']['body']); ?></p>

<p><small>Posted: <?php echo $post['Post']['created']; ?></small></p>
<?php if(isset($post['Post']['modified']) && $post['Post']['created'] != $post['Post']['modified']): ?>
	<p><small>Edited: <?php echo $post['Post']['modified']; ?> </small></p>
<?php endif; ?>