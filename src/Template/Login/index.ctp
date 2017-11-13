<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login[]|\Cake\Collection\CollectionInterface $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="login index large-9 medium-8 columns content">
    <h3><?= __('Login') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contraseña') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razon_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cuit') ?></th>
                <th scope="col" class="actions"><?= __('Opciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($login as $login): ?>
            <tr>
                <td><?= $this->Number->format($login->usuario) ?></td>
                <td><?= $this->Number->format($login->contraseña) ?></td>
                <td><?= $this->Number->format($login->razon_social) ?></td>
                <td><?= $this->Number->format($login->cuit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $login->usuario]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $login->usuario]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $login->usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $login->usuario)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
