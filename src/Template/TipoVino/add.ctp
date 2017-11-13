<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoVino $tipoVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('List Tipo Vino'), ['Opciones' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoVino form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoVino) ?>
    <fieldset>
        <legend><?= __('Agregar Tipo Vino') ?></legend>
        <?php
            echo $this->Form->control('tipo_producto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
