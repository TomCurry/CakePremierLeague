<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?> </li>
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
<div class="matches view large-10 medium-9 columns">
    <h2><?= h($match->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Stadia') ?></h6>
            <p><?= $match->has('stadia') ? $this->Html->link($match->stadia->name, ['controller' => 'Stadia', 'action' => 'view', $match->stadia->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Matchday') ?></h6>
            <p><?= $match->has('matchday') ? $this->Html->link($match->matchday->id, ['controller' => 'Matchdays', 'action' => 'view', $match->matchday->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($match->id) ?></p>
            <h6 class="subheader"><?= __('Home Team') ?></h6>
            <p><?= $this->Number->format($match->home_team_id) ?></p>
            <h6 class="subheader"><?= __('Away Team') ?></h6>
            <p><?= $this->Number->format($match->away_team_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($match->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($match->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Results') ?></h4>
    <?php if (!empty($match->results)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Match Id') ?></th>
            <th><?= __('Home Score') ?></th>
            <th><?= __('Away Score') ?></th>
            <th><?= __('Score') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($match->results as $results): ?>
        <tr>
            <td><?= h($results->id) ?></td>
            <td><?= h($results->match_id) ?></td>
            <td><?= h($results->home_score) ?></td>
            <td><?= h($results->away_score) ?></td>
            <td><?= h($results->score) ?></td>
            <td><?= h($results->created) ?></td>
            <td><?= h($results->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Results', 'action' => 'view', $results->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Results', 'action' => 'edit', $results->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Results', 'action' => 'delete', $results->id], ['confirm' => __('Are you sure you want to delete # {0}?', $results->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Teams') ?></h4>
    <?php if (!empty($match->teams)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Club Id') ?></th>
            <th><?= __('Player Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($match->teams as $teams): ?>
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
