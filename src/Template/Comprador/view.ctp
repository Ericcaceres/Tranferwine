<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprador $comprador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comprador'), ['action' => 'edit', $comprador->id_compra]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comprador'), ['action' => 'delete', $comprador->id_compra], ['confirm' => __('Are you sure you want to delete # {0}?', $comprador->id_compra)]) ?> </li>
        <li><?= $this->Html->link(__('List Comprador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comprador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comprador view large-9 medium-8 columns content">
    <h3><?= h($comprador->id_compra) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Compra') ?></th>
            <td><?= $this->Number->format($comprador->id_compra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Producto') ?></th>
            <td><?= $this->Number->format($comprador->tipo_producto) ?></td>
        </tr>
    </table>
</div>
