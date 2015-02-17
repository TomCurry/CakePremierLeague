<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Stadia'), ['action' => 'edit', $stadia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stadia'), ['action' => 'delete', $stadia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stadia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stadia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stadia'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="stadia view large-10 medium-9 columns">
    <h2><?= h($stadia->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($stadia->name) ?></p>
            <h6 class="subheader"><?= __('Location') ?></h6>
            <p><?= h($stadia->location) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($stadia->id) ?></p>
            <h6 class="subheader"><?= __('Capacity') ?></h6>
            <p><?= $this->Number->format($stadia->capacity) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Opened') ?></h6>
            <p><?= h($stadia->opened) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($stadia->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($stadia->updated) ?></p>
        </div>
    </div>
</div>
