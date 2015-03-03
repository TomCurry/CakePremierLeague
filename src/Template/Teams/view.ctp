<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teams view large-10 medium-9 columns">
    <h2><?= h($team->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Club') ?></h6>
            <p><?= $team->has('club') ? $this->Html->link($team->club->full_name, ['controller' => 'Clubs', 'action' => 'view', $team->club->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($team->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?=  h($team->name) ?></p>
        </div>
    </div>
    
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Home Matches') ?></h4>
        <?=  $this->element('table', [
            'matches' => $team->home_matches
        ]); ?>
    <h4 class="subheader"><?= __('Related Away Matches') ?></h4>
        <?=  $this->element('table', [
            'matches' => $team->away_matches
        ]); ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Players') ?></h4>
    <?php if (!empty($team->players)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Birth') ?></th>
            <th><?= __('Country') ?></th>
            <th><?= __('Position') ?></th>
            <th><?= __('Squad Number') ?></th>
            <th><?= __('Club Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($team->players as $players): ?>
        <tr>
            <td><?= h($players->id) ?></td>
            <td><?= h($players->first_name) ?></td>
            <td><?= h($players->last_name) ?></td>
            <td><?= h($players->birth->format('d/M/Y')) ?></td>
            <td><?= h($players->country) ?></td>
            <td><?= h($players->position) ?></td>
            <td><?= h($players->squad_number) ?></td>
            <td><?= h($players->club_id) ?></td>
            <td><?= h($players->created) ?></td>
            <td><?= h($players->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
