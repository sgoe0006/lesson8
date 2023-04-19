<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contactus $contactus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contactus'), ['action' => 'edit', $contactus->contact_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contactus'), ['action' => 'delete', $contactus->contact_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactus->contact_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contactus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contactus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column
">
        <div class="contactus view content">
            <h3><?= h("View Enquiry")?></h3>
            <p>All the required fields have been marked with an (*)</p>
            <table>
                <tr>
                    <th><?= __('Name * ') ?></th>
                    <td><?= h($contactus->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Address *') ?></th>
                    <td><?= h($contactus->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Number') ?></th>
                    <td><?= $contactus->contact_number === null ? '' : $this->Number->format($contactus->contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($contactus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Replied *') ?></th>
                    <td><?= $contactus->query_replied ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Query *') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contactus->query)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
