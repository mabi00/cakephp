<div class="films form">
    <?php echo $this->Form->create('Film', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend>
            <?php echo __('Add Film'); ?>
        </legend>
        <?php
		echo $this->Form->input('title', array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'Insert a Movie Title...'));
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