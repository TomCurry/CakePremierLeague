<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Club'), ['action' => 'edit', $club->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Club'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stadia'), ['controller' => 'Stadia', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stadia'), ['controller' => 'Stadia', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rankings'), ['controller' => 'Rankings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranking'), ['controller' => 'Rankings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clubs view large-10 medium-9 columns">
    <h2><?= h($club->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Full Name') ?></h6>
            <p><?= h($club->full_name) ?></p>
            <h6 class="subheader"><?= __('Nickname') ?></h6>
            <p><?= h($club->nickname) ?></p>
            <h6 class="subheader"><?= __('Abbreviation') ?></h6>
            <p><?= h($club->abbreviation) ?></p>
            <h6 class="subheader"><?= __('Crest Image') ?></h6>
            <p><?= $this->Html->image('../files/clubs/crest_image/' . $club->crest_dir . '/square_' . $club->crest_image); ?></p>
            <h6 class="subheader"><?= __('Site') ?></h6>
            <p><?= $this->Text->autoLinkUrls($club->site, ['target' => '_blank']) ?></p>
            <h6 class="subheader"><?= __('Manager') ?></h6>
            <p><?= $club->has('manager') ? $this->Html->link($club->manager->FullName, ['controller' => 'Managers', 'action' => 'view', $club->manager->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Stadia') ?></h6>
            <p><?= $club->has('stadia') ? $this->Html->link($club->stadia->name, ['controller' => 'Stadia', 'action' => 'view', $club->stadia->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($club->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Founded') ?></h6>
            <p><?= h($club->founded) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($club->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($club->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Players') ?></h4>
    <?php if (!empty($club->players)): ?>
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
        <?php foreach ($club->players as $players): ?>
        <tr>
            <td><?= h($players->id) ?></td>
            <td><?= h($players->first_name) ?></td>
            <td><?= h($players->last_name) ?></td>
            <td><?= h($players->birth->format('d-M-Y')) ?></td>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Rankings') ?></h4>
    <?php if (!empty($club->rankings)): ?>
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
        <?php foreach ($club->rankings as $rankings): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Teams') ?></h4>
    <?php if (!empty($club->teams)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Club Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($club->teams as $teams): ?>
        <tr>
            <td><?= h($teams->id) ?></td>
            <td><?= h($teams->club_id) ?></td>

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
