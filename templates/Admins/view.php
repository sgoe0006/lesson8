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
            <?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->admin_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->admin_id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->admin_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Admins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Admin'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="admins view content">
            <h3><?= h($admin->admin_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($admin->email) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= @$this->($admin->image) ?></td>
                    
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($admin->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($admin->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($admin->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($admin->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Middle Name') ?></th>
                    <td><?= h($admin->middle_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($admin->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin Id') ?></th>
                    <td><?= $this->Number->format($admin->admin_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Number') ?></th>
                    <td><?= $this->Number->format($admin->contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Code') ?></th>
                    <td><?= $this->Number->format($admin->post_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('DOB') ?></th>
                    <td><?= h($admin->DOB) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
