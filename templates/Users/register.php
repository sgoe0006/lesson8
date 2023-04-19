use Cake\Core\Configure;

$appLocale = Configure::read('App.defaultLocale');

$this->assign('title', 'Registering new Student');
$this->disableAutoLayout();  
<!DOCTYPE html>
<html lang="<?= $appLocale ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?> - Glass of Art
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<main class="main">
    <div class="container register">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Welcome to Glass of Arts User Registeration') ?></legend>
                <?= $this->Flash->render() ?>
                
                <?php echo $this->Form->control('email'); ?>
                <div class="row">
                    <?php
                    echo $this->Form->control('first_name', [
                        'required'=>true,
                        'templateVars' => ['container_class' => 'column'],
                    ]);

                    echo $this->Form->control('last_name', [
                        'required' => false,
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    ?>


                </div>

                <div class="row">
                    <?php
                    echo $this->Form->control('password', [
                        'value' => '', // Ensure password is not sending back to the client side,
                        'type'=>password,
                        'label'=>'Password',
                        'required'=>true,
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    // Validate password by repeating it
                    echo $this->Form->control('password_confirm', [
                        'type' => 'password',
                        'value' => '',  // Ensure password is not sending back to the client side
                        'label' => 'Retype Password',
                        'required'=>true,
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    ?>
                </div>
                <?php
                echo $this->Form->control('image', ['type' => 'file']);
                ?>
                

            </fieldset>+
            <?= $this->Form->button(__('Register')) ?>
            <?= $this->Html->link(__('Login Page'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline float-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</main>

</body>
</html>
