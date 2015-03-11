<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stadia'), ['controller' => 'Stadia', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stadia'), ['controller' => 'Stadia', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matchdays'), ['controller' => 'Matchdays', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matchday'), ['controller' => 'Matchdays', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="matches index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('home_team_id') ?></th>
            <th><?= $this->Paginator->sort('away_team_id') ?></th>
            <th><?= $this->Paginator->sort('stadium_id') ?></th>
            <th><?= $this->Paginator->sort('matchday_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($matches as $match): ?>
        <tr>
            <td><?= $match->has('home_team') ? $this->Html->link($match->home_team->name, ['controller' => 'Teams', 'action' => 'view', $match->home_team_id]) : ''?></td>
            <td><?= $match->has('away_team') ? $this->Html->link($match->away_team->name, ['controller' => 'Teams', 'action' => 'view', $match->away_team_id]) : ''?></td>
            <td>
                <?= $match->has('stadia') ? $this->Html->link($match->stadia->name, ['controller' => 'Stadia', 'action' => 'view', $match->stadia->id]) : '' ?>
            </td>
            <td>
                <?= $match->has('matchday') ? $this->Html->link($match->matchday->id, ['controller' => 'Matchdays', 'action' => 'view', $match->matchday->id]) : '' ?>
            </td>
            <td><?= h($match->created) ?></td>
            <td><?= h($match->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $match->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $match->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?>
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
