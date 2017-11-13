<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $login->usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Usuario'), ['action' => 'delete', $login->usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $login->usuario)]) ?> </li>
        <li><?= $this->Html->link(__('Listado Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="login view large-9 medium-8 columns content">
    <h3><?= h($login->usuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $this->Number->format($login->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contraseña') ?></th>
            <td><?= $this->Number->format($login->contraseña) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razon Social') ?></th>
            <td><?= $this->Number->format($login->razon_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuit') ?></th>
            <td><?= $this->Number->format($login->cuit) ?></td>
        </tr>
    </table>
</div>
