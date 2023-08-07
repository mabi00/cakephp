<div class="films index">
    <h2>
        <?php echo __('Films'); ?>
    </h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">
                        <?php echo $this->Paginator->sort('poster'); ?>
                    </th>
                    <th scope="col">
                        <?php echo $this->Paginator->sort('title'); ?>
                    </th>
                    <th scope="col">
                        <?php echo $this->Paginator->sort('genre_id'); ?>
                    </th>
                    <th scope="col">
                        <?php echo __('Actions'); ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($films as $film): ?>
                <tr>
                    <th scope="row">
                        <img src="/cakephp/app/webroot/media/filmes/<?= h($film['Film']['poster']); ?>"
                            alt="Movie poster" width="240" height="368">
                    </th>
                    <td>
                        <?php echo h($film['Film']['title']); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($film['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $film['Genre']['id']), array('class' => 'btn btn-dark')); ?>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $film['Film']['id']), array('class' => 'btn btn-primary')); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $film['Film']['id']), array('class' => 'btn btn-primary')); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $film['Film']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $film['Film']['id']), 'class' => 'btn btn-danger')); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <p>
        <?php
        echo $this->Paginator->counter(
            array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            )
        );
        ?>
    </p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3>
        <?php echo __('Actions'); ?>
    </h3>
    <ul>
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