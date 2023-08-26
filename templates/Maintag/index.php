<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Maintag> $maintag
 */
?>
<div class="maintag index content">
    <?= $this->Html->link(__('New Maintag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Maintag') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('main_tag_id') ?></th>
                    <th><?= $this->Paginator->sort('main_tag_name') ?></th>
                    <th><?= $this->Paginator->sort('main_tag_type') ?></th>
                    <th><?= $this->Paginator->sort('createtime') ?></th>
                    <th><?= $this->Paginator->sort('updatetime') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($maintag as $maintag): ?>
                <tr>
                    <td><?= $this->Number->format($maintag->main_tag_id) ?></td>
                    <td><?= h($maintag->main_tag_name) ?></td>
                    <td><?= $maintag->main_tag_type === null ? '' : $this->Number->format($maintag->main_tag_type) ?></td>
                    <td><?= h($maintag->createtime) ?></td>
                    <td><?= h($maintag->updatetime) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $maintag->main_tag_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maintag->main_tag_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maintag->main_tag_id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintag->main_tag_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
