<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $matchday->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $matchday->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Matchdays'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="matchdays form large-10 medium-9 columns">
    <?= $this->Form->create($matchday); ?>
    <fieldset>
        <legend><?= __('Edit Matchday') ?></legend>
        <?php
            echo $this->Form->input('match_week');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
