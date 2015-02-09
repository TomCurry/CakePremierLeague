<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Stadia'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="stadia index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('capacity') ?></th>
            <th><?= $this->Paginator->sort('opened') ?></th>
            <th><?= $this->Paginator->sort('location') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($stadia as $stadia): ?>
        <tr>
            <td><?= $this->Number->format($stadia->id) ?></td>
            <td><?= h($stadia->name) ?></td>
            <td><?= $this->Number->format($stadia->capacity) ?></td>
            <td><?= h($stadia->opened) ?></td>
            <td><?= h($stadia->location) ?></td>
            <td><?= h($stadia->created) ?></td>
            <td><?= h($stadia->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $stadia->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stadia->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stadia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stadia->id)]) ?>
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
