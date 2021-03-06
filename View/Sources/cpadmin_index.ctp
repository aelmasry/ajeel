<div class="sources index">
	<h2><?php echo __('List Sources'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('alias'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"></th>
	</tr>
	<?php foreach ($sources as $source): ?>
	<tr>
		<td><?php echo h($source['Source']['id']); ?>&nbsp;</td>
		<td><?php echo h($source['Source']['name']); ?>&nbsp;</td>
		<td><?php echo h($source['Source']['alias']); ?>&nbsp;</td>
                <td>
                   <?php if($source['Source']['status'] == 1) { ?>
                    <span class="publish"> <?php echo $this->Html->image("publish.png", array("alt" => "publish", 'url' => array('action' => 'unpublish', $source['Source']['id']))); ?></span>
                <?php }else { ?>
                    <span class="unpublish"> <?php echo $this->Html->image("unpublish.png", array("alt" => "unpublish", 'url' => array('action' => 'publish', $source['Source']['id']))); ?></span>
                <?php } ?> 
                </td>
		<td><?php echo h($source['Source']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $source['Source']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $source['Source']['id']), null, __('Are you sure you want to delete # %s?', $source['Source']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Add Source'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Rss'), array('controller' => 'SourcesRss', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('New Sources Rss'), array('controller' => 'SourcesRss', 'action' => 'add')); ?></li>
	</ul>
</div>
