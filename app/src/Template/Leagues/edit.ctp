<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $league->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $league->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rankings'), ['controller' => 'Rankings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranking'), ['controller' => 'Rankings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leagues form large-10 medium-9 columns">
    <?= $this->Form->create($league); ?>
    <fieldset>
        <legend><?= __('Edit League') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
