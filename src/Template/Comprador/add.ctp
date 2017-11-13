<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprador $comprador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Comprador'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comprador form large-9 medium-8 columns content">
    <?= $this->Form->create($comprador) ?>
    <fieldset>
        <legend><?= __('Add Comprador') ?></legend>
        <?php
            echo $this->Form->control('tipo_producto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
