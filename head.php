<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <script src="js/common.js" defer></script>
    <title><?=$siteTitle?></title>
</head>
<body>
    <div class="body-content">
        <!-- top bar -->
        <header class="top-bar visible-md-up">
            <div class="con height-100p flex flex-jc-sb">
                <a href="index.ssghtml.php" class="logo flex flex-ai-c">
                    <span><i class="fa-solid fa-snowflake"></i></span>
                    <span>SNOW BLOG</span>
                </a>
                <nav class="top-bar__menu height-100p">
                    <ul class="flex height-100p">
                        <li>
                            <a href="index.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                                <span><i class="fas fa-home"></i></span>
                                <span>HOME</span>
                            </a>
                        </li>
                        <li>
                            <a href="about.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                                <span><i class="fas fa-address-card"></i></span>
                                <span>ABOUT</span>
                            </a>
                        </li>
                        <li>
                            <a href="portfolio.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                                <span><i class="fas fa-list-alt"></i></span>
                                <span>PORTFOLIO</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
                                <span><i class="fas fa-newspaper"></i></span>
                                <span>ARTICLES</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- mobile top bar -->       
        <header class="mobile-top-bar visible-sm-down flex">
            <div class="flex-1-0-0 flex flex-ai-c">
                <div class="mobile-top-bar__btn-toggle-side-bar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div>
                <a href="index.ssghtml.php" class="logo flex flex-ai-c height-100p">
                    <span><i class="fa-solid fa-snowflake"></i></span>
                    <span>SNOW SHOP</span>
                </a>
            </div>
            <div class="flex-1-0-0"></div>
        </header>

        <!-- mobile side bar  -->
        <aside class="mobile-side-bar visible-sm-down">
            <nav class="mobile-side-bar__menu">
                <ul>
                    <li>
                        <a href="index.ssghtml.php" class="block">
                            <span><i class="fas fa-home"></i></span>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="about.ssghtml.php" class="block">
                            <span><i class="fas fa-address-card"></i></span>
                            <span>ABOUT</span>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.ssghtml.php" class="block">
                            <span><i class="fas fa-list-alt"></i></span>
                            <span>PORTFOLIO</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block">
                            <span><i class="fas fa-newspaper"></i></span>
                            <span>ARTICLES</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main>