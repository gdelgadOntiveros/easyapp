Yii 2 - Materialize
================================================


En este Repositorio, podras encontrar como empezar a usar MaterializeCss en Framework Yii2

1.- Descargar el archivo de materializecss -> http://materializecss.com/getting-started.html

2.- configurar el archivo AppAsset.php 

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/materialize.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/materialize.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

 3.- reemplazar el layout main.php

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="row">
  <div class="nav-wrapper">
    <div class="col s12">
    <a href="<?= Yii::$app->homeUrl ?>" class="brand-logo">Easy APP</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="<?= Url::to('index') ?>">Home</a></li>
      <li><a href="<?= Url::to('about') ?>">About</a></li>
      <li><a href="<?= Url::to('contact') ?>">Contact</a></li>
      <li>
        <?=
            Yii::$app->user->isGuest ? '<a href="'. Url::to('login').'">Login</a>' : '<a href="'. Url::to('logout').'" data-method="post">Logout (' . Yii::$app->user->identity->username . ')</a>';
        ?>
      </li>
    </ul>
    </div>
  </div>
</nav>

    <main class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </main>


 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">EASY APP</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Website for the esasy app</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


4.- reemplazar site.css 

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

5.- agregar archivo .htaccess en web/

6.- activar urlmanager en config/web.php

'urlManager' => [
        'class' => 'yii\web\UrlManager',
        // Disable index.php
        'showScriptName' => false,
        // Disable r= routes
        'enablePrettyUrl' => true,
        'rules' => array(
                            '<controller:\w+>/<id:\d+>' => '<controller>/view',
                            '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                        ),
        ], 

7.- reemplazar views/site/index.php

<?php

/* @var $this yii\web\View */

$this->title = 'Easyapp';
?>
<div class="site-index">

    <div class="jumbotron" align="center">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
           
        </div>

    </div>
</div>