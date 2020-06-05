<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php if ($page->isHomePage()): ?>
    <title><?= $site->title()->html() ?> | Technology for crisis situations</title>
    <?php else: ?>
    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
    <?php endif ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="author" content="Niklas Jordan">
    <link rel="stylesheet" href="/assets/style.css">

    <meta property="og:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta property="og:description" content="<?= $site->description()->html() ?>">
    <meta property="og:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta property="og:url" content="https://www.disaster-tech.org">

    <meta name="twitter:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta name="twitter:description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<?php snippet('header') ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php if ($page->isHomePage()): ?>
    <title><?= $site->title()->html() ?> | Technology for crisis situations</title>
    <?php else: ?>
    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
    <?php endif ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="author" content="Niklas Jordan">
    <link rel="stylesheet" href="/assets/style.css">

    <meta property="og:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta property="og:description" content="<?= $site->description()->html() ?>">
    <meta property="og:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta property="og:url" content="https://www.disaster-tech.org">

    <meta name="twitter:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta name="twitter:description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<?php snippet('header') ?>

<div class="container" >
    <h1><?= $page->title()->html() ?></h1>
    <p class="article-intro"><?= $page->intro()->text() ?></p>
    <p class="article-meta">Written by <?php if($author = $page->author()->toUser()): ?><?= $author->name() ?><?php endif ?> – <time datetime="<?= $page->date()->toDate('c') ?>" pubdate="pubdate"><?= $page->date()->toDate('F d, Y') ?></time></p>
</div>

<article class="container">
    <?= $page->text()->kirbytext() ?>

    <p class="article-share">Share this article on <a href="https://twitter.com/intent/tweet?source=webclient&text=<?= rawurlencode($page->title()); ?>%20<?= rawurlencode($page->url()); ?>%20<?= ('via @DisasterTechOrg')?>" target="blank" title="Share this article on Twitter">Twitter</a> or <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= rawurlencode($page->url()); ?>&title=<?= rawurlencode($page->title()); ?>" target="blank" title="Share this article on LinkedIn">LinkedIn</a>.</p>
</article>

<?php snippet('nl_form') ?>

<?php snippet('footer') ?>

</body>
</html>