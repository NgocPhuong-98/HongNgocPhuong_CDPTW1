<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1740 ">
    <div class="container">
        <!-- Main Title -->
        <div class="title">

            <div class="name">
                <hr class="title_hr">
                </hr>
                <h3 class="title_name">DEFAULT STYLE</h3>
                <hr class="title_hr">
                </hr>
            </div>
        </div>
        <!-- End Title -->
    </div>

    <!-- Show Product List -->
    <section class="category ">
        <div class="container">
            <div class="row" class="category_list">
                <!-- Product Information -->
                <div class="col-lg-4 col-md-4  col-sm-4 col-12 category_item ">
                    <a href="" class="category_link">
                        <div class="item">
                            <!--Image-->
                            <img src="images/img1.jpg" alt="" class="category_item_img img-fluid">
                            <!--detail-->
                            <div class="category_item_box">
                                <h5 class="category_item_box_name">Welocome to FlatsomeFlatsome</h5>
                                <div class="category_item_box_aa"></div>
                                <p class="category_item_box_detail detail">Welcome to WordPress. This is your
                                    first
                                    post.
                                    Edit or delete it, then start blogging! [...]</p>
                            </div>
                        </div>
                        <!--Month Day-->
                        <div class="category_item_monthday">
                            <div class="monthday">
                                <span class="category_item_monthday_day">13</span>
                                <br>
                                <span class="category_item_monthday_month">Oct</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-4 col-md-4   col-sm-4 col-12  category_item ">
                    <a href="" class="category_link">
                        <div class="item">
                            <!--Image-->
                            <img src="images/img2.jpg" alt="" class="category_item_img img-fluid">
                            <!--detail-->
                            <div class="category_item_box">
                                <h5 class="category_item_box_name">Welocome to FlatsomeFlatsome</h5>
                                <div class="category_item_box_aa"></div>
                                <p class="category_item_box_detail detail">Welcome to WordPress. This is your
                                    first
                                    post.
                                    Edit or delete it, then start blogging! [...]</p>
                            </div>
                        </div>
                        <!--Month Day-->
                        <div class="category_item_monthday">
                            <div class="monthday">
                                <span class="category_item_monthday_day">13</span>
                                <br>
                                <span class="category_item_monthday_month">Oct</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-4 col-md-4  col-sm-4 col-12 category_item ">
                    <a href="" class="category_link">
                        <div class="item">
                            <!--Image-->
                            <img src="images/img3.jpg" alt="" class="category_item_img img-fluid">
                            <!--detail-->
                            <div class="category_item_box">
                                <h5 class="category_item_box_name">Welocome to FlatsomeFlatsome</h5>
                                <div class="category_item_box_aa"></div>
                                <p class="category_item_box_detail detail">Welcome to WordPress. This is your
                                    first
                                    post.
                                    Edit or delete it, then start blogging! [...]</p>
                            </div>
                        </div>
                        <!--Month Day-->
                        <div class="category_item_monthday">
                            <div class="monthday">
                                <span class="category_item_monthday_day">13</span>
                                <br>
                                <span class="category_item_monthday_month">Oct</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Product Information -->
            </div>

        </div>
    </section>
    <!-- End Product List -->
</div>