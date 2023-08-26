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
            <?= $this->Html->link(__('List Maintag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="maintag form content">
            <?= $this->Form->create($maintag) ?>
            <fieldset>
                <legend><?= __('Add Maintag') ?></legend>
                <?php
                    echo $this->Form->control('main_tag_name');
                    echo $this->Form->control('main_tag_type');
                    echo $this->Form->control('createtime');
                    echo $this->Form->control('updatetime');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
