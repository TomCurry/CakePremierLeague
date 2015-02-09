<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Manager'), ['action' => 'edit', $manager->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manager'), ['action' => 'delete', $manager->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="managers view large-10 medium-9 columns">
    <h2><?= h($manager->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($manager->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($manager->last_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($manager->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birth') ?></h6>
            <p><?= h($manager->birth) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($manager->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($manager->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Clubs') ?></h4>
    <?php if (!empty($manager->clubs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Full Name') ?></th>
            <th><?= __('Nickname') ?></th>
            <th><?= __('Abbreviation') ?></th>
            <th><?= __('Founded') ?></th>
            <th><?= __('Crest Image') ?></th>
            <th><?= __('Site') ?></th>
            <th><?= __('Manager Id') ?></th>
            <th><?= __('Stadium Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($manager->clubs as $clubs): ?>
        <tr>
            <td><?= h($clubs->id) ?></td>
            <td><?= h($clubs->full_name) ?></td>
            <td><?= h($clubs->nickname) ?></td>
            <td><?= h($clubs->abbreviation) ?></td>
            <td><?= h($clubs->founded) ?></td>
            <td><?= h($clubs->crest_image) ?></td>
            <td><?= h($clubs->site) ?></td>
            <td><?= h($clubs->manager_id) ?></td>
            <td><?= h($clubs->stadium_id) ?></td>
            <td><?= h($clubs->created) ?></td>
            <td><?= h($clubs->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Clubs', 'action' => 'view', $clubs->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Clubs', 'action' => 'edit', $clubs->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clubs', 'action' => 'delete', $clubs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clubs->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
