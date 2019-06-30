<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>



<?php

echo $this->Form->create('Comment', ['url' => ['controller' => 'comment', 'action' => 'add']]);
echo $this->Form->input('comment', array('rows' => '3'));
echo $this->Form->input('post_id', array('type' => 'hidden','value'=> $post['Post']['id']));
echo $this->Form->end('Save comment');
?>
<h2>All Comments </h2>
<?php foreach ($post['Comment'] as $comm): ?>
<h4><?php echo $comm['comment'];?></h4>

<?php endforeach; ?>
