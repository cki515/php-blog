<?php
require_once "data.php";
require_once "head.php";

$articles = getArticles();
?>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>

    <section class="section-title">
        <h1 class="con">
            <span>
                <i class="fas fa-fire"></i>
            </span>
            <span>
                LATEST ARTICLES
            </span>
        </h1>
    </section>

    <section class="section-latest-articles">
        <div class="con">
            <div class="article-list-box">
                <ul>
                    <?php foreach ($articles as $article ) { ?>
                        <li>
                        <h1 class="article-list-box__title"><a href="<?=getArticleLink($article["id"])?>"><?=$article["title"]?></a></h1>
                        <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
                        <div class="article-list-box__writer">
                            <span><?=$article["writerAvatar"]?></span>
                            <span><?=$article["writerName"]?></span>
                        </div>
                        <div class="article-list-box__body"><?=$article["body"]?></div>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </section>
        

<?php
require_once "foot.php";
?>