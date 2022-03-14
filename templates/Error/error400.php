<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Database\StatementInterface $error
 * @var string $message
 * @var string $url
 */
use Cake\Core\Configure;
use Cake\Error\Debugger;

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.php');

    $this->start('file');
    ?>
    <?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
    <?php if (!empty($error->params)) : ?>
    <strong>SQL Query Params: </strong>
    <?php Debugger::dump($error->params) ?>
<?php endif; ?>
    <?= $this->element('auto_table_warning') ?>
    <?php

    $this->end();
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->fetch('webroot'); ?>
    <?= $this->fetch('lib'); ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">
<header class="margin-top-0">

    <!-- Hero Start -->
    <div class="hero" id="home" style="margin-bottom: 13%">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Page not found</h1>
                            <p class="error">
                                The page you are looking for does not exist
                            </p>

                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="/">Return home</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <?= $this->Html->image('Claudia-1.png', ['alt' => 'CakePHP']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

