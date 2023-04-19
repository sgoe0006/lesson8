<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Admins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="admins form content">
            <?= $this->Form->create($admin,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Admin') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact_number');
                    echo $this->Form->control('password');
                    echo $this->Form->control('retype_password',['type'=>'Password']);
                    echo $this->Form->control('DOB');
                    echo $this->Form->control('image',['type'=>'file']);
                    echo $this->Form->control('street');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('post_code');
                    echo $this->Form->control('state');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('last_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
