<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ranking'), ['action' => 'edit', $ranking->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ranking'), ['action' => 'delete', $ranking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ranking->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rankings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranking'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rankings view large-10 medium-9 columns">
    <h2><?= h($ranking->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('League') ?></h6>
            <p><?= $ranking->has('league') ? $this->Html->link($ranking->league->name, ['controller' => 'Leagues', 'action' => 'view', $ranking->league->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Club') ?></h6>
            <p><?= $ranking->has('club') ? $this->Html->link($ranking->club->full_name, ['controller' => 'Clubs', 'action' => 'view', $ranking->club->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ranking->id) ?></p>
            <h6 class="subheader"><?= __('Played') ?></h6>
            <p><?= $this->Number->format($ranking->played) ?></p>
            <h6 class="subheader"><?= __('Won') ?></h6>
            <p><?= $this->Number->format($ranking->won) ?></p>
            <h6 class="subheader"><?= __('Draw') ?></h6>
            <p><?= $this->Number->format($ranking->draw) ?></p>
            <h6 class="subheader"><?= __('Loss') ?></h6>
            <p><?= $this->Number->format($ranking->loss) ?></p>
            <h6 class="subheader"><?= __('Goals For') ?></h6>
            <p><?= $this->Number->format($ranking->goals_for) ?></p>
            <h6 class="subheader"><?= __('Goals Against') ?></h6>
            <p><?= $this->Number->format($ranking->goals_against) ?></p>
            <h6 class="subheader"><?= __('Goals Difference') ?></h6>
            <p><?= $this->Number->format($ranking->goals_difference) ?></p>
            <h6 class="subheader"><?= __('Points') ?></h6>
            <p><?= $this->Number->format($ranking->points) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($ranking->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($ranking->updated) ?></p>
        </div>
    </div>
</div>
