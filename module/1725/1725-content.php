<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1725 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 gallery">
                <div class="gallery_img">
                    <img src="images/img3.jpeg" alt="" class="img-fluid ga_img ">
                </div>
                <div class="row thumbnail mx-n1 mt-2">
                    <div class="col-md-3 col px-1">
                        <img src="images/img1.jpeg" alt="" class="img-fluid img">
                    </div>
                    <div class="col-md-3  col px-1">
                        <img src="images/img2.jpeg" alt="" class="img-fluid img">
                    </div>
                    <div class="col-md-3  col px-1">
                        <img src="images/img3.jpeg" alt="" class="img-fluid img">
                    </div>
                    <div class="col-md-3  col px-1">
                        <img src="images/img4.jpeg" alt="" class="img-fluid img">
                    </div>
                </div>

                <div class="sale">
                    <span class="box_sale">Sale!</span>
                </div>
                <div class="new">
                    <span class="box_new">New</span>
                </div>


                <div class="often">
                </div>
                <div class="social-icons share-icons share-row relative like">
                    <a href="#">

                        <i class="fa fa-heart-circle" aria-hidden="true"></i>
                    </a>
                </div>


            </div>

            <div class="col-md-4 summary">
                <div class="summary_nav ">
                    <a href="">home</a>
                    <span class="divider">/</span>
                    <a href="">shop</a>
                    <span class="divider">/</span>
                    <a href="">womem</a>
                    <span class="divider">/</span>
                    <a href="">tops</a>

                </div>
                <div class="summary_title">

                    <h1 class="name">Varanise CN Tee Hilfiger Denim </h1>
                    <div class="is-divider "></div>
                </div>
                <div class="summary_price">
                    <del class="price_old">
                        <del class="unit">$</del>15,00
                    </del>
                    <span class="price_promotion">
                        <span class="unit">$</span>15,00
                    </span>
                </div>
                <div class="summary_detail">
                    <p>Varanise CN Tee NOK 449, Hilfiger Denim – NELLY.COM.
                        Marfa authentic High Life veniam.
                        Tumblr post-ironic typewriter, sriracha tote bag kogi you.
                        Direct trade Banksy Carles pop-up. Marfa authentic High Life veniam.</p>

                </div>
                <div class="summary_add_cart">
                    <div class="quantity">
                        <input type="button" value="-" class="minus is-form">
                        <input type="mumber" value="1" class="input-text">
                        <input type="button" value="+" class="plus is-form">
                    </div>
                    <button type="submit" name="add" class="add_cart_button button ">Add to cart</button>

                </div>
                <div class="summary_hender">
                    <div class="categories">
                        <p>
                            Categories: <a href="" class="">Tops</a> ,<a href="" class="">Women</a>
                        </p>
                    </div>
                    <div class="social-icons share-icons share-row relative">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>