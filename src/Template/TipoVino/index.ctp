<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoVino[]|\Cake\Collection\CollectionInterface $tipoVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Vino'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoVino index large-9 medium-8 columns content">
    <h3><?= __('Tipo Vino') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_pruducto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_producto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoVino as $tipoVino): ?>
            <tr>
                <td><?= $this->Number->format($tipoVino->id_pruducto) ?></td>
                <td><?= $this->Number->format($tipoVino->tipo_producto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoVino->id_pruducto]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoVino->id_pruducto]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoVino->id_pruducto], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoVino->id_pruducto)]) ?>
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
