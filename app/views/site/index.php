<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);
?>

<?= Carousel::widget(1140, 520) ?>

<div class="text-center">
    <h1><?= Text::get('index-welcome-title') ?></h1>
    <p><?= $page->text ?></p>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2><?=Yii::t('app', 'Last photos')?></h2>
    <br/>
    <?php foreach(Gallery::last(6) as $photo) : ?>
        <?= $photo->box(180, 135) ?>
    <?php endforeach;?>
    <?php Gallery::plugin() ?>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2><?=Yii::t('app', 'Last news')?></h2>
    <blockquote class="text-left">
        <?= Html::a(News::last()->title, ['news/view', 'slug' => News::last()->slug]) ?>
        <br/>
        <?= News::last()->short ?>
    </blockquote>
</div>

<br/>
<hr/>



<br/>
