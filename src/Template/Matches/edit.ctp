<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $match->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['action' => 'index']) ?></li>
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
<div class="matches form large-10 medium-9 columns">
    <?= $this->Form->create($match); ?>
    <fieldset>
        <legend><?= __('Edit Match') ?></legend>
        <?php
            echo $this->Form->input('home_team_id', ['options' => $teams]);
            echo $this->Form->input('away_team_id', ['options' => $teams]);
            echo $this->Form->input('stadium_id', ['options' => $stadia, 'empty' => 'Select stadium']);
            echo $this->Form->input('matchday_id', ['options' => $matchdays, 'empty' => 'Select matchday']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
