<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $produto->id_venta],
        ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_venta)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista produto'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $produto->id_venta],
        ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_venta)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista Producto'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($libreta); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Produto']) ?></legend>
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
<?= $this->Form->button(__("Guardar")); ?>
<?= $this->Form->end() ?>