<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Club'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stadia'), ['controller' => 'Stadia', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stadia'), ['controller' => 'Stadia', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rankings'), ['controller' => 'Rankings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranking'), ['controller' => 'Rankings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clubs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('full_name') ?></th>
            <th><?= $this->Paginator->sort('nickname') ?></th>
            <th><?= $this->Paginator->sort('abbreviation') ?></th>
            <th><?= $this->Paginator->sort('founded') ?></th>
            <th><?= $this->Paginator->sort('site') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clubs as $club): ?>
        <tr>
            <td><?= h($club->full_name) ?></td>
            <td><?= h($club->nickname) ?></td>
            <td><?= h($club->abbreviation) ?></td>
            <td><?= h($club->founded) ?></td>
            <td><?= $this->Text->autoLinkUrls($club->site, ['target' => '_blank']) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $club->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $club->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?>
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
