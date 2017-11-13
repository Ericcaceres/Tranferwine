<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $login->usuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $login->usuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Usuario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="login form large-9 medium-8 columns content">
    <?= $this->Form->create($login) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
         
        echo $this->Form->control('contraseña'); 
            echo $this->Form->control('razon_social');
            echo $this->Form->control('cuit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
