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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactus->contact_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactus->contact_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contactus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactus form content">
            <?= $this->Form->create($contactus) ?>
            <fieldset>
                <legend><?= __('Edit Contactus') ?></legend>
                <?php
                    echo $this->Form->control('full_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact_number');
                    echo $this->Form->control('query');
                    echo $this->Form->control('query_replied');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
