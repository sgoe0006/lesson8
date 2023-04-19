<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contactus $contactus
 */
?>
<div class="row">
    <div class="column-responsive">
        <div class="contactus form content">
            <?= $this->Form->create($contactus) ?>
            <fieldset>
                
                <legend><?= __('Submit your query/ feedback about Glass of Art') ?></legend>

                <?php
                    echo $this->Form->control('full_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact_number');
                    echo $this->Form->control('query');
                    echo $this->Form->control('query_replied');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <!-- to go back to the previous page automatically-->
            <?= $this->Html->link(__('Back'), ['action' => 'index']) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
