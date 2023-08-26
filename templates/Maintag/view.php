<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maintag $maintag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Maintag'), ['action' => 'edit', $maintag->main_tag_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Maintag'), ['action' => 'delete', $maintag->main_tag_id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintag->main_tag_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Maintag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Maintag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="maintag view content">
            <h3><?= h($maintag->main_tag_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Main Tag Name') ?></th>
                    <td><?= h($maintag->main_tag_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Main Tag Id') ?></th>
                    <td><?= $this->Number->format($maintag->main_tag_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Main Tag Type') ?></th>
                    <td><?= $maintag->main_tag_type === null ? '' : $this->Number->format($maintag->main_tag_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createtime') ?></th>
                    <td><?= h($maintag->createtime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updatetime') ?></th>
                    <td><?= h($maintag->updatetime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
