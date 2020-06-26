<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1836">
    <div class="container">
        <div class="content ">
            <!--Main Title-->
            <div class="title">
                <h2 class="title_text">Amazing Theme with perfect User Experience</h2>
            </div>
            <!--End Title-->
            <!--Show Detail-->
            <div class="detail">
                <p class="detail_text">
                    <strong class="detail_strong">Flatsome</strong> is the perfect theme for your shop or company
                    website, or for all your client websites if you are an agency or freelancer. It got all the tools
                    needs to create <strong class="detail_strong">super fast</strong> responsive websites with
                    <strong class="detail_strong">amazing user experience.</strong> It got <strong
                        class="detail_strong">unlimited options</strong>
                    and a revolutionary <strong class="detail_strong">responsive page builder</strong>,
                    so you can create anything <strong class="detail_strong">without coding.</strong>
                </p>
            </div>
            <!--End Detail-->
        </div>
        <!--Show img-->
        <div class="div_img">
            <img src="images/img1.jpg" alt="" class="img img-fluid">
        </div>
    </div>
</div>