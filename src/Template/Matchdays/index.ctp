<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Matchday'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="matchdays index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('match_week') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($matchdays as $matchday): ?>
        <tr>
            <td><?= $this->Number->format($matchday->id) ?></td>
            <td><?= h($matchday->match_week) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $matchday->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matchday->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matchday->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchday->id)]) ?>
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
