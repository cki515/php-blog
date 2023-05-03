<?php
require_once "util.php";
require_once "app.php";

    $siteTitle = "php_blog";

    $article4 = [];
    $article4["id"] = 4;
    $article4["title"] = "Test 4";
    $article4["regDate"] = "2023-03-05 21:00:20";
    $article4["writerName"] = "test";
    $article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar"></use></svg>';
    $article4["tags"] = ["html", "js"];
    $article4["body"] = <<<EOT
    # content4<br>
    - flex <br>
    - grid <br>
    - position <br>
    - test4<br>
    EOT;

    $article3 = [];
    $article3["id"] = 3;
    $article3["title"] = "Test 3";
    $article3["regDate"] = "2023-03-05 19:30:25";
    $article3["writerName"] = "test";
    $article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar"></use></svg>';
    $article3["tags"] = ["html", "css", "js"];
    $article3["body"] = <<<EOT
    # content3<br>
    - img tag<br>
    - p, a tag<br>
    - h4 h5<br>
    - test3<br>
    EOT;

    $article2 = [];
    $article2["id"] = 2;
    $article2["title"] = "Test 2";
    $article2["regDate"] = "2023-03-05 15:10:10";
    $article2["writerName"] = "test";
    $article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar"></use></svg>';
    $article2["tags"] = ["css", "js"];
    $article2["body"] = <<<EOT
    # content2<br>
    - link tag<br>
    - span tag<br>
    - h1 h2 h3<br>
    - test2<br>
    EOT;

    $article1 = [];
    $article1["id"] = 1;
    $article1["title"] = "Test 1";
    $article1["regDate"] = "2023-01-05 12:12:14";
    $article1["writerName"] = "test";
    $article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar"></use></svg>';
    $article1["tags"] = ["html", "css"];
    $article1["body"] = <<<EOT
    # content<br>
    - script tag<br>
    - src tag<br>
    - defer html loading wait<br>
    - test1<br>
    EOT;

