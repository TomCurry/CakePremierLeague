<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ranking'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rankings index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('league_id') ?></th>
            <th><?= $this->Paginator->sort('club_id') ?></th>
            <th><?= $this->Paginator->sort('played') ?></th>
            <th><?= $this->Paginator->sort('won') ?></th>
            <th><?= $this->Paginator->sort('draw') ?></th>
            <th><?= $this->Paginator->sort('loss') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rankings as $ranking): ?>
        <tr>
            <td><?= $this->Number->format($ranking->id) ?></td>
            <td>
                <?= $ranking->has('league') ? $this->Html->link($ranking->league->name, ['controller' => 'Leagues', 'action' => 'view', $ranking->league->id]) : '' ?>
            </td>
            <td>
                <?= $ranking->has('club') ? $this->Html->link($ranking->club->id, ['controller' => 'Clubs', 'action' => 'view', $ranking->club->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($ranking->played) ?></td>
            <td><?= $this->Number->format($ranking->won) ?></td>
            <td><?= $this->Number->format($ranking->draw) ?></td>
            <td><?= $this->Number->format($ranking->loss) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ranking->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ranking->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ranking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ranking->id)]) ?>
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
