<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contactus> $contactus
 */
?>
<div class="contactus index content">
    <?= $this->Html->link(__('New Contactus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contactus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('full_name','Name') ?></th>
                    <th><?= $this->Paginator->sort('email','Email Address') ?></th>
                    <th><?= $this->Paginator->sort('contact_number','Contact Number') ?></th>
                    <th><?= $this->Paginator->sort('query_replied','Replied?') ?></th>
                    <th><?= $this->Paginator->sort('created','Added On') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactus as $contactus): ?>
                <tr>
                    <td><?= h($contactus->full_name) ?></td>
                    <td><?= h($contactus->email) ?></td>
                    <td><?= $contactus->contact_number === null ? '' : $this->Number->format($contactus->contact_number) ?></td>
                    <td><?= h($contactus->query_replied) ?></td>
                    <td><?= h($contactus->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contactus->contact_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactus->contact_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactus->contact_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactus->contact_id)]) ?>
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
