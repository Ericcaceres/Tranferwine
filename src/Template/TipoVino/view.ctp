<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoVino $tipoVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Tipo Vino'), ['action' => 'edit', $tipoVino->id_pruducto]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Tipo Vino'), ['action' => 'delete', $tipoVino->id_pruducto], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoVino->id_pruducto)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Tipo Vino'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Tipo Vino'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoVino view large-9 medium-8 columns content">
    <h3><?= h($tipoVino->id_pruducto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Pruducto') ?></th>
            <td><?= $this->Number->format($tipoVino->id_pruducto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Producto') ?></th>
            <td><?= $this->Number->format($tipoVino->tipo_producto) ?></td>
        </tr>
    </table>
</div>
