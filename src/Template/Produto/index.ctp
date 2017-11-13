<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produto index large-9 medium-8 columns content">
    <h3><?= __('Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_venta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_producto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variedad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('procedencia_elaboracion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anio_elavoracion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('volumen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alcohol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acidez_volatil') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acidez_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('azucar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extracto_seco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grado_brix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produto as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->id_venta) ?></td>
                <td><?= $this->Number->format($produto->tipo_producto) ?></td>
                <td><?= h($produto->variedad) ?></td>
                <td><?= h($produto->procedencia_elaboracion) ?></td>
                <td><?= h($produto->anio_elavoracion) ?></td>
                <td><?= $this->Number->format($produto->volumen) ?></td>
                <td><?= $this->Number->format($produto->alcohol) ?></td>
                <td><?= $this->Number->format($produto->acidez_volatil) ?></td>
                <td><?= $this->Number->format($produto->acidez_total) ?></td>
                <td><?= $this->Number->format($produto->azucar) ?></td>
                <td><?= $this->Number->format($produto->extracto_seco) ?></td>
                <td><?= $this->Number->format($produto->grado_brix) ?></td>
                <td><?= $this->Number->format($produto->precio) ?></td>
                <td class="actions">
                <?= $this->Html->link('', ['action' => 'ver', $produto->id_venta], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'editar', $produto->id_venta], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'borrar', $produto->id_venta], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_venta), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
