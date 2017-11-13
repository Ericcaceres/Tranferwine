<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Libreta'), ['action' => 'edit', $produto->id_venta]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Libreta'), ['action' => 'delete', $produto->id_venta], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_venta)]) ?> </li>
<li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Libreta'), ['action' => 'edit', $produto->id_venta]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Libreta'), ['action' => 'delete', $produto->id_venta], ['confirm' => __('Are you sure you want to delete # {0}?',$produto->id_venta)]) ?> </li>
<li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="produto view large-9 medium-8 columns content">
    <h3><?= h($produto->id_venta) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Variedad') ?></th>
            <td><?= h($produto->variedad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Procedencia Elaboracion') ?></th>
            <td><?= h($produto->procedencia_elaboracion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Venta') ?></th>
            <td><?= $this->Number->format($produto->id_venta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Producto') ?></th>
            <td><?= $this->Number->format($produto->tipo_producto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Volumen') ?></th>
            <td><?= $this->Number->format($produto->volumen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alcohol') ?></th>
            <td><?= $this->Number->format($produto->alcohol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acidez Volatil') ?></th>
            <td><?= $this->Number->format($produto->acidez_volatil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acidez Total') ?></th>
            <td><?= $this->Number->format($produto->acidez_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Azucar') ?></th>
            <td><?= $this->Number->format($produto->azucar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extracto Seco') ?></th>
            <td><?= $this->Number->format($produto->extracto_seco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grado Brix') ?></th>
            <td><?= $this->Number->format($produto->grado_brix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($produto->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anio Elavoracion') ?></th>
            <td><?= h($produto->anio_elavoracion) ?></td>
        </tr>
    </table>
</div>
