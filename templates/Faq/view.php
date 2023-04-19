<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faq'), ['action' => 'edit', $faq->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faq'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faq'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faq'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faq view content">
            <h3><?= h($faq->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($faq->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($faq->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($faq->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Question1') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->question1)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response1') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->response1)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Question2') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->question2)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response2') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->response2)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Question3') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->question3)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response3') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->response3)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Question4') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->question4)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response4') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->response4)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Question5') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->question5)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response5') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->response5)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
