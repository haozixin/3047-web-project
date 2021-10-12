<?php

$this->layout = 'login_default';
$formTemplate = [
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label{{attrs}}class="form-label">{{text}}</label>',
    'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',

];
$this->Form->setTemplates($formTemplate);
?>

<!-- in /templates/customers/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $this->Html->meta('icon') ?></title>
    <title>Admins - Login</title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.min.css') ?>

</head>

<body class="bg-gradient-primary">

<h3>Login</h3>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block"><img src="../webroot/img/resource/login.gif" alt=""/> </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <!--<form class="user">-->
                                <div class="user">
                                    <fieldset>
                                        <div class="form-group">

                                            <!--                                            <input type="email" class="form-control form-control-user"-->
                                            <!--                                                   id="exampleInputEmail" aria-describedby="emailHelp"-->
                                            <!--                                                   placeholder="Enter Email Address..." >-->

                                            <?= $this->Form->control('email', ['required' => true]) ?>

                                            <!--                                        <div class="form-group">-->
                                            <!--                                            <input type="password" class="form-control form-control-user"-->
                                            <!--                                                   id="exampleInputPassword" placeholder="Password">-->
                                            <?= $this->Form->control('password', ['required' => true]) ?>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <a href="<?= $this->Form->submit(__('Login')) ?>"Refresh"

                                </a>
                                <hr>
                                </fieldset>


                            </div>
                            <hr>

                            <?= $this->Form->end() ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>
<!-- Custom scripts for all pages-->
<?= $this->Html->script('/sb-admin-2.min.js') ?>
</body>


</html>

