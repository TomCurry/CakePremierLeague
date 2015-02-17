<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="players view large-10 medium-9 columns">
    <h2><?= h($player->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($player->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($player->last_name) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= h($player->country) ?></p>
            <h6 class="subheader"><?= __('Position') ?></h6>
            <p><?= h($player->position) ?></p>
            <h6 class="subheader"><?= __('Club') ?></h6>
            <p><?= $player->has('club') ? $this->Html->link($player->club->id, ['controller' => 'Clubs', 'action' => 'view', $player->club->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            
            <h6 class="subheader"><?= __('Squad Number') ?></h6>
            <p><?= $this->Number->format($player->squad_number) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birth') ?></h6>
            <p><?= h($player->birth) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($player->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($player->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Teams') ?></h4>
    <?php if (!empty($player->teams)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Club Id') ?></th>
            <th><?= __('Player Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($player->teams as $teams): ?>
        <tr>
            <td><?= h($teams->id) ?></td>
            <td><?= h($teams->club_id) ?></td>
            <td><?= h($teams->player_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
