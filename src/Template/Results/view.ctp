<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="results view large-10 medium-9 columns">
    <h2><?= h($result->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Match') ?></h6>
            <p><?= $result->has('match') ? $this->Html->link($result->match->id, ['controller' => 'Matches', 'action' => 'view', $result->match->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Score') ?></h6>
            <p><?= h($result->score) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($result->id) ?></p>
            <h6 class="subheader"><?= __('Home Score') ?></h6>
            <p><?= $this->Number->format($result->home_score) ?></p>
            <h6 class="subheader"><?= __('Away Score') ?></h6>
            <p><?= $this->Number->format($result->away_score) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($result->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($result->updated) ?></p>
        </div>
    </div>
</div>
