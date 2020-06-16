<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>




<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="type-1772 pt-5 pb-5">
                <!-- Show Product List -->
                <div class="category">
                    <div class="category_list ">
                        <!--Main title-->
                        <div class="category_title text-center">
                            <a href="" class="category_link tag">uncategorized</a>
                            <div class="title">
                                <a href="" class="category_link ">
                                    <!--title name-->
                                    <h5 class="category_title_name">Just another post with A Gallery</h5>
                                </a>
                                <div class="category_title_aa "></div>
                                <!--OSTED ON-->
                                <span class="category_title_note tag">OSTED ON </span>
                                <a href="" class="category_link tag ">OCTOBER 13, 2015</a>
                                <span class="category_title_note tag">BY</span>
                                <a href="" class="category_link tag">TOMMY VEDVIK</a>
                                </p>
                            </div>
                        </div>
                        <!--end title-->
                        <!-- show images-->
                        <div class="category_img entry-image relative ">
                            <a href="" class="category_link">
                                <img src="images/img1.jpg" alt="" class="img img-fluid">

                                <!--Month Day-->
                                <div class="category_img_monthday ">
                                    <div class="monthday">
                                        <span class="category_img_monthday_day">13</span>
                                        <br>
                                        <span class="category_img_monthday_month">Oct</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--End images-->
                        <!--Detail-->
                        <div class="category_detail text-center">
                            <p class=" detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate
                                massa.
                                Fusce ante magna, iaculis ut purus ut, facilisis ultrices nibh. Quisque commodo nunc
                                eget
                                tortor
                                dapibus, et tristique magna convallis. Phasellus egestas nunc eu venenatis vehicula.
                                Phasellus
                                et magna nulla. Proin ante nunc, mollis a lectus ac, volutpat placerat ante. Vestibulum
                                sit
                                amet
                                […]</p>
                            <div class="">
                                <a href="" class="category_link button tag">Continue reading -> </a>
                            </div>
                        </div>
                        <!--end detail-->
                    </div>
                </div>
                <!-- End Product List -->
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>