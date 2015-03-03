<table cellpadding="0" cellspacing="0">
    
    <?php if (!empty($matches)): ?>
    <tr>
        <th><?= __('Id') ?></th>
        <th><?= __('Home Team Id') ?></th>
        <th><?= __('Away Team Id') ?></th>
        <th><?= __('Stadium Id') ?></th>
        <th><?= __('Matchday Id') ?></th>
        <th><?= __('Created') ?></th>
        <th><?= __('Updated') ?></th>
        <th class="actions"><?= __('Actions') ?></th>
    </tr>
    <?php foreach ($matches as $match): ?>
    <tr>
        <td><?= h($match->id) ?></td>
        <td><?= h($match->home_team_id) ?></td>
        <td><?= h($match->away_team_id) ?></td>
        <td><?= h($match->stadium_id) ?></td>
        <td><?= h($match->matchday_id) ?></td>
        <td><?= h($match->created) ?></td>
        <td><?= h($match->updated) ?></td>

        <td class="actions">
            <?= $this->Html->link(__('View'), ['controller' => 'Matches', 'action' => 'view', $match->id]) ?>

            <?= $this->Html->link(__('Edit'), ['controller' => 'Matches', 'action' => 'edit', $match->id]) ?>

            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matches', 'action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?>

        </td>
    
   <?php  ?>
    </tr>
    <?php endforeach; ?>
    <?php else : echo "No matches found!"; ?>
    <?php endif; ?>
</table>
