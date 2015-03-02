<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Leagues'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rankings'), ['controller' => 'Rankings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranking'), ['controller' => 'Rankings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leagues form large-10 medium-9 columns">
    <?= $this->Form->create($league); ?>
    <fieldset>
        <legend><?= __('Add League') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('year');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
