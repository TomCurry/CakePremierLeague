<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stadia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stadia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stadia'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="stadia form large-10 medium-9 columns">
    <?= $this->Form->create($stadia); ?>
    <fieldset>
        <legend><?= __('Edit Stadia') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('capacity');
            echo $this->Form->input('opened');
            echo $this->Form->input('location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
