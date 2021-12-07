<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jolg - om blott en tanke</title>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="js/app.js" defer></script>
</head>

<body>
    <div class="background"></div>
    <div class="container">

        <div class="site-header">
            <div class="site_title">
                <h1>jolg</h1>
            </div>
            <ul class="nav_links">
                <li>
                    <a href="/" class="link _active">Start<span></span></a>
                </li>
                <li>
                    <a href="/blogg.html" class="link">Blogg<span></span></a>
                </li>
                <li>
                    <a href="/om.html" class="link">Om<span></span></a>
                </li>
                <li>
                    <a href="/kontakt.html" class="link">Kontakt<span></span></a>
                </li>
            </ul>
            <div class="spacer"></div>
            <ul class="social_links">
                <li>
                    <a href="">
                        <span class="icon_link mdi mdi-facebook mdi-24px"></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon_link mdi mdi-whatsapp mdi-24px"></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon_link mdi mdi-instagram mdi-24px"></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon_link mdi mdi-snapchat mdi-24px"></span>
                    </a>
                </li>
            </ul>
            <div class="navtools">
                <div class="form-container search_form">
                    <div class="input-form">
                        <input type="text" id="_tool-search" class="input-field" autocomplete="off" placeholder=" ">
                        <label for="_tool-search" class="input-label">
                            <span class="label-text text_down">Sök bland tankar..</span>
                            <span class="label-underline"></span>
                            <span class="mdi mdi-cloud-search-outline mdi-24px label-mdi"></span>
                        </label>
                    </div>
                </div>
                <button class="input-button _burger">
                    <span class="mdi mdi-dots-vertical mdi-24px button-mdi"></span>
                </button>
            </div>
        </div>

        <main id="page_loader">

        </main>

    </div>
</body>

</html>