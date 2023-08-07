<div class="genres view">
	<dl>

		<dd>
			<?php echo h($genre['Genre']['modified']); ?>
			&nbsp;
		</dd>
		<h2>
			<?php echo h($genre['Genre']['name']); ?>
		</h2>
		<dt>
			<?php echo __('Created'); ?>
		</dt>
		<dd>
			<?php echo h($genre['Genre']['created']); ?>
			&nbsp;
		</dd>
		<dt>
			<?php echo __('Modified'); ?>
		</dt>

		<h3>Films in this genre:</h3>
		<ul>
			<?php foreach ($genre['Film'] as $film): ?>
				<li>
					<?php echo h($film['title']); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</dl>
</div>


<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Genre'), array('action' => 'edit', $genre['Genre']['id']), array('class' => 'btn btn-primary')); ?>
		</li>
		<li>
			<?php echo $this->Form->postLink(__('Delete Genre'), array('action' => 'delete', $genre['Genre']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genre['Genre']['id']), 'class' => 'btn btn-danger')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Genres'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('New Genre'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</li>
	</ul>
</div>