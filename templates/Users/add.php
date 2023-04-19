<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column-responsive">
        <div class="users form content">
            <?= $this->Form->create($user,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('image',['type'=>'file']);
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('retype_password',['type'=>'password']);
                    echo $this->Form->control('street');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('post_code');
                    echo $this->Form->control('STATE');
                    echo $this->Form->control('DOB', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Register')) ?>
            <?= $this->Html->link(__('Login Page'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline float-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
