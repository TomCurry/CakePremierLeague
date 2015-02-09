<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $result->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="results form large-10 medium-9 columns">
    <?= $this->Form->create($result); ?>
    <fieldset>
        <legend><?= __('Edit Result') ?></legend>
        <?php
            echo $this->Form->input('match_id', ['options' => $matches]);
            echo $this->Form->input('home_score');
            echo $this->Form->input('away_score');
            echo $this->Form->input('score');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
