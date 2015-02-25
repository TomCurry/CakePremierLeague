<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $player->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="players form large-10 medium-9 columns">
    <?= $this->Form->create($player); ?>
    <fieldset>
        <legend><?= __('Edit Player') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('birth', [
                'label' => 'Date of birth',
                'minYear' => 1900,
                'maxYear' =>  date('Y')
            ]);
            echo $this->Form->input('country');
            echo $this->Form->input('position');
            echo $this->Form->input('squad_number');
            echo $this->Form->input('club_id', ['options' => $clubs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
