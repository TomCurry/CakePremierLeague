<h2>Premier League Table 2014/2015</h>
<div class="rankings home">
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('club_id') ?></th>
            <th><?= $this->Paginator->sort('played') ?></th>
            <th><?= $this->Paginator->sort('won') ?></th>
            <th><?= $this->Paginator->sort('draw') ?></th>
            <th><?= $this->Paginator->sort('loss') ?></th>
            <th><?= $this->Paginator->sort('goals_for') ?></th>
            <th><?= $this->Paginator->sort('goals_against') ?></th>
            <th><?= $this->Paginator->sort('goals_difference') ?></th>
            <th><?= $this->Paginator->sort('points') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rankings as $ranking): ?>
            <tr>
                <td>
                    <?= $ranking->has('club') ? $this->Html->link($ranking->club->full_name, ['controller' => 'Clubs', 'action' => 'view', $ranking->club->id]) : '' ?>
                </td>
                <td><?= $this->Number->format($ranking->played) ?></td>
                <td><?= $this->Number->format($ranking->won) ?></td>
                <td><?= $this->Number->format($ranking->draw) ?></td>
                <td><?= $this->Number->format($ranking->loss) ?></td>
                <td><?= $this->Number->format($ranking->goals_for) ?></td>
                <td><?= $this->Number->format($ranking->goals_against) ?></td>
                <td><?= $this->Number->format($ranking->goals_difference) ?></td>
                <td><?= $this->Number->format($ranking->points) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


