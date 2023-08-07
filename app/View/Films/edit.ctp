<div class="films form">
	<?php echo $this->Form->create('Film', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend>
			<?php echo __('Edit Film'); ?>
		</legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array('class' => 'form-control', 'type' => 'text'));
		echo $this->Form->input('genre_id', array('class' => 'btn btn-secondary dropdown-toggle'));
		echo $this->Form->input('poster', array('type' => 'file', 'class' => 'form-control'));
		echo $this->Form->input('synopsis', array('class' => 'form-control', 'type' => 'textarea'));
		echo $this->Form->input('director', array('class' => 'form-control', 'type' => 'text'));
		echo $this->Form->input('starryng', array('class' => 'form-control', 'type' => 'text'));
		echo $this->Form->input('writers', array('class' => 'form-control', 'type' => 'text'));
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>

		<li>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Film.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Film.id')), 'class' => 'btn btn-danger')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Films'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index'), array('class' => 'btn btn-primary')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</li>
	</ul>
</div>