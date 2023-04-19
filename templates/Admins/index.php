<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Admin> $admins
 */
?>
<div class="admins index content">
    <?= $this->Html->link(__('New Admin'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Admins') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('middle_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('DOB') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('contact_number') ?></th>
                    <th><?= $this->Paginator->sort('street') ?></th>
                    <th><?= $this->Paginator->sort('suburb') ?></th>
                    <th><?= $this->Paginator->sort('post_code') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?= @$this->Html->image($admin->image) ?></td>
                    <td><?= h($admin->first_name) ?></td>
                    <td><?= h($admin->middle_name) ?></td>
                    <td><?= h($admin->last_name) ?></td>
                    <td><?= h($admin->DOB) ?></td>

                    <td><?= h($admin->email) ?></td>
                    <td><?= $this->Number->format($admin->contact_number) ?></td>
                    <td><?= h($admin->street) ?></td>
                    <td><?= h($admin->suburb) ?></td>
                    <td><?= $this->Number->format($admin->post_code) ?></td>
                    <td><?= h($admin->state) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $admin->admin_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->admin_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->admin_id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->admin_id)]) ?>
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
