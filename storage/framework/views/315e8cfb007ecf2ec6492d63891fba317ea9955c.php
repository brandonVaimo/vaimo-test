<?php
    use \App\Http\Controllers\CartController;
    $res = ((new CartController)->get());
    $cart = json_decode($res->getContent());

    function titleSort($a, $b) {
        $a = $a['title'];
        $b = $b['title'];
        if ($a == $b)
            return 0;
        return ($a > $b) ? 1 : -1;
    }
    usort($products, "titleSort");
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style>
            #app{
                display: none;
            }
            #loader{
                display: block;
            }
        </style>
        <script>
            function loadingScreen()
            {
                document.getElementById("app").style.display = "block";
                document.getElementById("loader").style.display = "none";
            }
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VAIMO STORE</title>
        <link rel="stylesheet" href="dist/app.css" />
    </head>
    <body onload="loadingScreen()">
        <div id="app">
            <div class="columns">
                <div class="blue-banner-top"></div>
            </div>
            <div class="columns narrow-center">
                <div class="column is-6 is-6-mobile logo-small">
                    <img src="img/Logo_Transparent.png" class="logo" alt="Vaimo Store">
                </div>
                <div class="column is-6 align-right is-6-mobile">
                    <popover class="popover-mobile" :width="300" trigger="click">
                        <button class="button shopping-cart-button">
                            <span class="no-left-margin icon">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                        </button>
                        <div slot="content">
                            <?php foreach($cart->items as $item): ?>
                                <div class="columns">
                                    <img class="cart-image" src="<?php echo e($item->imgSrc); ?>" alt="<?php echo e($item->name); ?>">
                                    <div class="w-100">
                                        <div class="inline-container item-details">
                                            <div>
                                                <?php echo e($item->name); ?>

                                            </div>
                                            <div>
                                                <?php echo e($item->qty); ?> x € <?php echo e($item->price); ?>

                                            </div>
                                        </div>
                                        <div class="inline-container">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </popover>
                    <popover class="popover-desktop" :width="300" trigger="hover">
                        <button class="button shopping-cart-button">
                            <span class="no-left-margin icon">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <?php if($cart): ?>
                            <span class="no-left-margin d-none">
                                <span id="cartNum"></span> <span id="itemsText"></span> in your cart
                            </span>
                            <span class="heavy-font d-none">
                                € <span id="cartTotal"></span>
                            </span>
                            <?php endif; ?>
                        </button>
                        <div slot="content" id="shopping-cart-content">
                        </div>
                    </popover>
                </div>
            </div>
            <div class="columns narrow-center bottom-border-thick">
                <div class="column is-9">
                    <dropdown trigger="hover">
                <button class="button nav-button">
                    <span class="heavy-font">WOMEN</span>
                </button>
                <div slot="content">
                    <menus>
                        <menu-item>
                            <span>2014</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                        <menu-item>
                            <span>2013</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                        <menu-item>
                            <span>2012</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                        <menu-item>
                            <span>2011</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                    </menus>
                </div>
            </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">MEN</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">JUNIOR</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <button class="button nav-button">
                        <span class="heavy-font">ACCESSORIES</span>
                    </button>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">COLLECTIONS</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font red-color">SALE</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                </div>
                <div class="column is-3 align-right">
                    <dropdown trigger="hover">
                        <a class="button nav-button">
                            <span class="heavy-font">MY ACCOUNT</span>
                        </a>
                        <div slot="content">
                            <menus>
                                <menu-item icon="user" to="/">Profile</menu-item>
                                <menu-item icon="ticket">Orders</menu-item>
                                <menu-item icon="lock">Settings</menu-item>
                                <div class="divider"></div>
                                <menu-item icon="power-off">Sign out</menu-item>
                            </menus>
                        </div>
                    </dropdown>
                </div>
            </div>
            <div class="columns mobile-navbar">
                <Slide>
                    <div>
                        <div class="column extra-width">
                            <div class="menu">
                                <menus>
                                    <menu-item>
                                        CATEGORIES
                                    </menu-item>
                                    <menu-item>
                                        <span>WOMEN</span>
                                        <menus slot="sub">
                                            <menu-item>
                                                <span>
                                                    2014
                                                </span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2013</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2012</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2011</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                        </menus>
                                    </menu-item>
                                    <menu-item>
                                        <span>MEN</span>
                                        <menus slot="sub">
                                            <menu-item>
                                                <span>
                                                    2014
                                                </span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2013</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2012</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2011</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                        </menus>
                                    </menu-item>
                                    <menu-item>
                                        <span>JUNIOR</span>
                                        <menus slot="sub">
                                            <menu-item>
                                                <span>
                                                    2014
                                                </span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2013</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2012</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2011</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                        </menus>
                                    </menu-item>
                                    <menu-item>
                                        <span>ACCESSORIES</span>
                                        <menus slot="sub">
                                            <menu-item>
                                                <span>
                                                    2014
                                                </span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2013</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2012</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2011</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                        </menus>
                                    </menu-item>
                                    <menu-item>
                                        <span>COLLECTIONS</span>
                                        <menus slot="sub">
                                            <menu-item>
                                                <span>
                                                    2014
                                                </span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2013</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2012</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2011</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                        </menus>
                                    </menu-item>
                                    <menu-item>
                                        <span>SALE</span>
                                        <menus slot="sub">
                                            <menu-item>
                                                <span>
                                                    2014
                                                </span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2013</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2012</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                            <menu-item>
                                                <span>2011</span>
                                                <menus slot="sub">
                                                    <menu-item>SUMMER</menu-item>
                                                    <menu-item>AUTUMN</menu-item>
                                                    <menu-item>WINTER</menu-item>
                                                    <menu-item>SPRING</menu-item>
                                                </menus>
                                            </menu-item>
                                        </menus>
                                    </menu-item>
                                    <menu-item>
                                        <span>MY ACCOUNT</span>
                                        <menus slot="sub">
                                            <menu-item icon="user" to="/">Profile</menu-item>
                                            <menu-item icon="ticket">Orders</menu-item>
                                            <menu-item icon="lock">Settings</menu-item>
                                            <menu-item icon="power-off">Sign out</menu-item>
                                        </menus>
                                    </menu-item>
                                </menus>
                            </div>
                        </div>
                    </div>
                </Slide>
            </div>
            <div class="columns narrow-center">
                <div class="column is-6">
                    <img src="img/Hero_Banner.png" class="hero-banner" alt="Hero Banner">
                </div>
                <div class="column is-6">
                    <div class="columns">
                        <h1>This is Vaimo Store</h1>
                    </div>
                    <div class="columns">
                        <h2>YOUR ONE-STOP FASHION DESTINATION</h2>
                    </div>
                    <div class="columns">
                        <h4>
                            Shop from over 850 of the best brands, including VAIMO's own label.  Plus, get your daily
                            fix of the freshest style, celebrity and music news.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="columns narrow-center">
                <div class="column is-1">
                    <p class="strikethrough"></p>
                </div>
                <div class="column is-3 favourites-text">
                    <h3 class="favourites-heading">OUR FAVOURITES</h3>
                </div>
                <div class="column is-8">
                    <p class="strikethrough"></p>
                </div>
            </div>
            <div class="columns narrow-center">
                <?php foreach($products as $product): ?>
                    <div class="column is-3-desktop is-6-mobile">
                        <div>
                            <img src="<?php echo e($product['image']); ?>" class="grey-border" alt="<?php echo e($product['title']); ?>">
                            <h5 class="uppercase align-center product-title">
                                <?php echo e($product['title']); ?>

                            </h5>
                            <?php if(strlen($product['specialPrice']) == 0): ?>
                                <div>
                                    <h5 class="align-center item-price">
                                        € <?php echo e($product['price']); ?>

                                    </h5>
                                </div>
                            <?php endif; ?>
                            <?php if(strlen($product['specialPrice']) != 0): ?>
                                <div>
                                    <h5 class="align-right col-2-custom strikethrough-text">
                                        € <?php echo e($product['price']); ?>

                                    </h5>
                                    <h5 class="align-left col-2-custom red-color">
                                        € <?php echo e($product['specialPrice']); ?>

                                    </h5>
                                </div>
                            <?php endif; ?>
                            <div class="align-center">
                                <button class="button vaimo-button">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="columns footer">
                <div class="column is-3">
                    <a>
                    <h3 class="white link">
                        TOP CATEGORIES
                    </h3>
                    </a>
                    <a>
                    <h6 class="white link">
                        WOMEN
                    </h6>
                    </a>
                    <a>
                    <h6 class="white link">
                        MEN
                    </h6>
                    </a>
                    <a>
                    <h6 class="white link">
                        JUNIOR
                    </h6>
                    </a>
                    <a>
                    <h6 class="white link">
                        ACCESSORIES
                    </h6>
                    </a>
                </div>
                <div class="column is-3">
                    <a>
                    <h3 class="white link">
                        CUSTOMER SERVICE
                    </h3>
                    </a>
                    <a>
                    <h6 class="white link">
                        RETURNS
                    </h6>
                    </a>
                    <a>
                    <h6 class="white link">
                        SHIPPING
                    </h6>
                    </a>
                    <a>
                    <h6 class="white link">
                        ABOUT US
                    </h6>
                    </a>
                    <a>
                    <h6 class="white link">
                        CONTACT US
                    </h6>
                    </a>
                </div>
                <div class="column is-6 white">
                    <h3 class="subscribe-text">
                        NEWSLETTER SUBSCRIBE
                    </h3>
                    <div class="icon-container">
                        <input id="email" class="input w-80 subscribe-input" type="text" placeholder="Enter your email address">
                        <span class="icon subscribe-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <button id="buttonSend" class="button vaimo-button subscribe vaimo-button-large-text" @click="checkEmail()">
                            SUBSCRIBE
                        </button>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="loader">
            <div class="wrap">
                <div class="loading">
                    <div class="bounceball"></div>
                    <div class="text">NOW LOADING</div>
                </div>
            </div>
        </div>
        <script src="dist/app.js"></script>
    </body>
</html>