<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoVino $tipoVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $tipoVino->id_pruducto],
                ['confirmar' => __('Are you sure you want to delete # {0}?', $tipoVino->id_pruducto)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listado Tipo Vino'), ['Opciones' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoVino form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoVino) ?>
    <fieldset>
        <legend><?= __('Editar Tipo Vino') ?></legend>
        <?php
            echo $this->Form->control('tipo_producto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
