<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="results index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('match_id') ?></th>
            <th><?= $this->Paginator->sort('team_id') ?></th>
            <th><?= $this->Paginator->sort('goals') ?></th>
            <th><?= $this->Paginator->sort('points') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($results as $result): ?>
        <tr>
            <td>
                <?= $result->has('match') ? $this->Html->link($result->match->id, ['controller' => 'Matches', 'action' => 'view', $result->match->id]) : '' ?>
            </td>
            <td><?= h($result->team_id) ?></td>
            <td><?= $this->Number->format($result->goals) ?></td>
            <td><?= $this->Number->format($result->points) ?></td>
            
           
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $result->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $result->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
