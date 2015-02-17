<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Rankings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rankings form large-10 medium-9 columns">
    <?= $this->Form->create($ranking); ?>
    <fieldset>
        <legend><?= __('Add Ranking') ?></legend>
        <?php
            echo $this->Form->input('league_id', ['options' => $leagues]);
            echo $this->Form->input('club_id', ['options' => $clubs]);
            echo $this->Form->input('played');
            echo $this->Form->input('won');
            echo $this->Form->input('draw');
            echo $this->Form->input('loss');
            echo $this->Form->input('goals_for');
            echo $this->Form->input('goals_against');
            echo $this->Form->input('goals_difference');
            echo $this->Form->input('points');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
