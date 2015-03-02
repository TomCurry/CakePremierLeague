<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit League'), ['action' => 'edit', $league->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete League'), ['action' => 'delete', $league->id], ['confirm' => __('Are you sure you want to delete # {0}?', $league->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rankings'), ['controller' => 'Rankings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranking'), ['controller' => 'Rankings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leagues view large-10 medium-9 columns">
    <h2><?= h($league->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($league->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Year') ?></h6>
            <p><?= h($league->year) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($league->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($league->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Rankings') ?></h4>
    <?php if (!empty($league->rankings)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('League Id') ?></th>
            <th><?= __('Club Id') ?></th>
            <th><?= __('Played') ?></th>
            <th><?= __('Won') ?></th>
            <th><?= __('Draw') ?></th>
            <th><?= __('Loss') ?></th>
            <th><?= __('Goals For') ?></th>
            <th><?= __('Goals Against') ?></th>
            <th><?= __('Goals Difference') ?></th>
            <th><?= __('Points') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($league->rankings as $rankings): ?>
        <tr>
            <td><?= h($rankings->id) ?></td>
            <td><?= h($rankings->league_id) ?></td>
            <td><?= h($rankings->club_id) ?></td>
            <td><?= h($rankings->played) ?></td>
            <td><?= h($rankings->won) ?></td>
            <td><?= h($rankings->draw) ?></td>
            <td><?= h($rankings->loss) ?></td>
            <td><?= h($rankings->goals_for) ?></td>
            <td><?= h($rankings->goals_against) ?></td>
            <td><?= h($rankings->goals_difference) ?></td>
            <td><?= h($rankings->points) ?></td>
            <td><?= h($rankings->created) ?></td>
            <td><?= h($rankings->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Rankings', 'action' => 'view', $rankings->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Rankings', 'action' => 'edit', $rankings->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rankings', 'action' => 'delete', $rankings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rankings->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
