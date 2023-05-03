<?php
require_once "data.php";
require_once "head.php";

$articles = getArticleByTag($_GET["tag"]);
?>
    <section class="section-title">
        <h1 class="con">
            <span>
                <i class="fas fa-list"></i>
            </span>
            <span>
                `<?=$_GET['tag']?>` LIST
            </span>
        </h1>
    </section>

    <section class="section-article-list padding-0-10">
        <div class="con">
            <div class="article-list">
                <ul>
                    <?php foreach($articles as $article) { ?>
                        <li>
                            <h1><a href="<?=getArticleLink($article["id"])?>"><?=$article["title"]?></a></h1>    
                            <div class="article-list__reg-date">
                                <span><i class="fas fa-calendar-alt"></i></span>
                                <span><?=$article["regDate"]?></span>
                        </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

<?php
require_once "foot.php";
?>