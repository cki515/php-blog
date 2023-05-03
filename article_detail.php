<?php
require_once "data.php";
require_once "head.php";

$selectArticle = getArticleById($_GET["id"]);
?>

    <section class="section-title">
        <h1 class="con">
            <span>
                <i class="fas fa-newspaper"></i>
            </span>
            <span>
                DETAIL
            </span>
        </h1>
    </section>

    <section class="section-article-detail padding-0-10">
        <div class="con">
            <h1 class="article-list-box__title"><a href="<?=getArticleLink($selectArticle["id"])?>"><?=$selectArticle["title"]?></a></h1>
            <div class="article-list-box__reg-date"><?=$selectArticle["regDate"]?></div>
            <div class="article-list-box__writer">
                <span><?=$selectArticle["writerAvatar"]?></span>
                <span><?=$selectArticle["writerName"]?></span>
            </div>
            <div class="article-list-box__body"><?=$selectArticle["body"]?></div>
        </div>
    </section>

    <section class="section-article-reply-box padding-0-10">
        <div class="con">
            <div id="disqus_thread"></div>
            <script>
                var disqus_config = function () {
                    this.page.url = 'http://localhost:8012/article_detail_<?=$articleId?>.html';
                    this.page.identifier = 'article_detail_<?=$articleId?>.html';
                };
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://testweb-jzobxfzjhx.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
        </div>
</section>

<?php
require_once "foot.php";
?>