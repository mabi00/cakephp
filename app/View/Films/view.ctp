<div class="films view">
    <h2>
        <?php echo __('Film'); ?>
    </h2>
    <dl>
        <dt>
            <?php echo __('Title'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['title']); ?>
        </dd>
        <dt>
            <?php echo __('Genre'); ?>
        </dt>
        <dd>
            <?php echo $this->Html->link($film['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $film['Genre']['id'])); ?>

        </dd>
        <dt>
            <?php echo __('Poster'); ?>
        </dt>
        <dd>
            <img src="/cakephp/app/webroot/media/filmes/<?php echo h($film['Film']['poster']); ?>">
        </dd>
        <dt>
            <?php echo __('Synopsis'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['synopsis']); ?>

        </dd>
        <dt>
            <?php echo __('Director'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['director']); ?>

        </dd>
        <dt>
            <?php echo __('Starryng'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['starryng']); ?>

        </dd>
        <dt>
            <?php echo __('Writers'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['writers']); ?>

        </dd>
        <dt>
            <?php echo __('Created'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['created']); ?>

        </dd>
        <dt>
            <?php echo __('Modified'); ?>
        </dt>
        <dd>
            <?php echo h($film['Film']['modified']); ?>

        </dd>
    </dl>
</div>
<div class="actions">
    <h3>
        <?php echo __('Actions'); ?>
    </h3>
    <ul>
        <li>
            <?php echo $this->Html->link(__('Edit Film'), array('action' => 'edit', $film['Film']['id']), array('class' => 'btn btn-primary')); ?>
        </li>
        <li>
            <?php echo $this->Form->postLink(__('Delete Film'), array('action' => 'delete', $film['Film']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $film['Film']['id']), 'class' => 'btn btn-danger')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('List Films'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Film'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index'), array('class' => 'btn btn-primary')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
        </li>
    </ul>
</div>