<nav id="primary_nav_wrap">
    <ul>
        <li class="current-menu-item<?php echo ($this->request->here === '/')? 'active' : '';?>"><?php echo $this->Html->link('Home', '/');?></li>
        <li class="<?php echo ($this->request->params['controller'] === 'clubs')? 'active' : '';?>"><?php echo $this->Html->link('Clubs', ['controller' => 'Clubs', 'action' => 'index']);?>
            <ul>
                <li class="<?php echo ($this->request->params['controller'] === 'stadia')? 'active' : '';?>"><?php echo $this->Html->link('Stadia', ['controller' => 'Stadia', 'action' => 'index']);?></li>
                <li class="<?php echo ($this->request->params['controller'] === 'managers')? 'active' : '';?>"><?php echo $this->Html->link('Managers', ['controller' => 'Managers', 'action' => 'index']);?></li>
            </ul>
        </li>
        <li class="<?php echo ($this->request->params['controller'] === 'matches')? 'active' : '';?>"><?php echo $this->Html->link('Matches', ['controller' => 'Matches', 'action' => 'index']);?>
            <ul>
                <li class="<?php echo ($this->request->params['controller'] === 'matchdays')? 'active' : '';?>"><?php echo $this->Html->link('Matchdays', ['controller' => 'Matchdays', 'action' => 'index']);?></li>
            </ul>
        </li>
        <li class="<?php echo ($this->request->params['controller'] === 'players')? 'active' : '';?>"><?php echo $this->Html->link('Players', ['controller' => 'Players', 'action' => 'index']);?>

        <li class="<?php echo ($this->request->params['controller'] === 'rankings')? 'active' : '';?>"><?php echo $this->Html->link('Rankings', ['controller' => 'Rankings', 'action' => 'index']);?>

        <li class="<?php echo ($this->request->params['controller'] === 'results')? 'active' : '';?>"><?php echo $this->Html->link('Results', ['controller' => 'Results', 'action' => 'index']);?>
    </ul>
</nav>