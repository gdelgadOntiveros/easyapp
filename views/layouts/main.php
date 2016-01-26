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
