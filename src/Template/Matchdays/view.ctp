  <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Matchday'), ['action' => 'edit', $matchday->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matchday'), ['action' => 'delete', $matchday->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchday->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matchdays'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matchday'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="matchdays view large-10 medium-9 columns">
    <h2><?= h($matchday->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($matchday->id) ?></p>
            <h6 class="subheader"><?= __('Match Week') ?></h6>
            <p><?= $this->Number->format($matchday->match_week) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Matches') ?></h4>
    <?php if (!empty($matchday->matches)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Home Team') ?></th>
            <th><?= __('Away Team') ?></th>
            <th><?= __('Stadium Id') ?></th>
            <th><?= __('Matchday Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($matchday->matches as $matches): ?>
        <tr>
            <td><?= h($matches->id) ?></td>
            <td><?= h($matches->home_team_id) ?></td>
            <td><?= h($matches->away_team_id) ?></td>
            <td><?= h($matches->stadium_id) ?></td>
            <td><?= h($matches->matchday_id) ?></td>
            <td><?= h($matches->created) ?></td>
            <td><?= h($matches->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Matches', 'action' => 'view', $matches->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Matches', 'action' => 'edit', $matches->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matches', 'action' => 'delete', $matches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matches->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
