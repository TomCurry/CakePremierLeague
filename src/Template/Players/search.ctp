<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="players form large-10 medium-9 columns">
    <?= $this->Form->create(); ?>
    <fieldset>
        <legend><?= __('Search For Player') ?></legend>
            <?php
                echo $this->Form->input('club_id', ['options' => $clubs]);
                $options = [
                    'GK' => 'Goalkeeper',
                    'DF' => 'Defender',
                    'MF' => 'Midfielder',
                    'FW' => 'Forward'
                ];
                echo $this->Form->select('position', $options, [
                    'multiple' => 'checkbox'
                ]);
            ?>
        <?= $this->Form->button(__('Search')) ?>
    </fieldset>
    <?= $this->Form->end() ?>
<div class="players index large-10 medium-9 columns">
    <?php if (!empty($players)) { ?>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= ('First Name') ?></th>
            <th><?= ('Last Name') ?></th>
            <th><?= ('Date of Birth') ?></th>
            <th><?= ('Country') ?></th>
            <th><?= ('Position') ?></th>
            <th><?= ('Squad Number') ?></th>
        </tr>
    </thead>
    <?php foreach ($players as $player): ?>   
        <tr> 
            <td><?= h($player->first_name) ?></td>
            <td><?= h($player->last_name) ?></td>
            <td><?= h($player->birth->format('d/M/Y')) ?></td>
            <td><?= h($player->country) ?></td>
            <td><?= h($player->position) ?></td>
            <td><?= $this->Number->format($player->squad_number) ?></td>
        </tr>
        <?php endforeach; }
        else {
            echo "<p>No players found. Try again.</p>";
        }
        ?>
    </tbody>
    </table>

