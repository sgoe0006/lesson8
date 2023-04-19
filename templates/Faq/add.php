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
            <?= $this->Html->link(__('List Faq'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faq form content">
            <?= $this->Form->create($faq) ?>
            <fieldset>
                <legend><?= __('Add Faq') ?></legend>
                <?php
                    echo $this->Form->control('question1');
                    echo $this->Form->control('response1');
                    echo $this->Form->control('question2');
                    echo $this->Form->control('response2');
                    echo $this->Form->control('question3');
                    echo $this->Form->control('response3');
                    echo $this->Form->control('question4');
                    echo $this->Form->control('response4');
                    echo $this->Form->control('question5');
                    echo $this->Form->control('response5');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
