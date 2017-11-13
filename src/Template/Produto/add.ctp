<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Produto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produto form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Agregar Produto') ?></legend>
        <?php
            echo $this->Form->control('tipo_producto');
            echo $this->Form->control('variedad');
            echo $this->Form->control('procedencia_elaboracion');
            echo $this->Form->control('anio_elavoracion');
            echo $this->Form->control('volumen');
            echo $this->Form->control('alcohol');
            echo $this->Form->control('acidez_volatil');
            echo $this->Form->control('acidez_total');
            echo $this->Form->control('azucar');
            echo $this->Form->control('extracto_seco');
            echo $this->Form->control('grado_brix');
            echo $this->Form->control('precio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
