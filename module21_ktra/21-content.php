<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-21 pt-5 pb-5">
    <div class="container">
        <div class="accordion" id="accordion" role="tablist">
            <!-- Child Question One-->
            <div class="accordion_item">
                <div class="panel-heading" role="tab" id="headingOne">
                    <div class="panel-title">
                        <!-- Question -->
                        <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne" class="accordion_item_title collapsed">
                            Is it possible to pay for an order with Visa and MasterCard payment cards?
                        </a>
                    </div>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"
                    aria-expanded="false" style="height: 0px;" data-parent="#accordion">
                    <!-- Answer -->
                    <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean id convallis tellus.
                        Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                        Vivamus et dolor nec nisl consectetur vulputate id non ante. <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean id convallis tellus.
                        Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                        Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                </div>

            </div>
            <!-- End Child Question One -->

            <!-- Child Question Two-->
            <div class="accordion_item">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <div class="panel-title">
                        <!-- Question -->
                        <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo" class="accordion_item_title collapsed">
                            Is it possible to pay by credit card?
                        </a>
                    </div>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"
                    aria-expanded="false" style="height: 0px;" data-parent="#accordion">
                    <!-- Answer -->
                    <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean id convallis tellus.
                        Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                        Vivamus et dolor nec nisl consectetur vulputate id non ante. <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean id convallis tellus.
                        Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                        Vivamus et dolor nec nisl consectetur vulputate id non ante.
                    </p>
                </div>
            </div>
            <!-- End Child Question Two -->

            <!-- Child Question Three-->
            <div class="accordion_item">
                <div class="panel-heading" role="tab" id="headingThree">
                    <div class="panel-title">
                        <!-- Question -->
                        <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree" class="accordion_item_title collapsed">
                            What payment methods exist in your company?
                        </a>
                    </div>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"
                    aria-expanded="false" style="height: 0px;" data-parent="#accordion">
                    <!-- Answer -->
                    <p class="accordion_inner">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean id convallis tellus.
                        Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                        Vivamus et dolor nec nisl consectetur vulputate id non ante. <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean id convallis tellus.
                        Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                        Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                </div>
            </div>
            <!-- End Child Question Three -->
        </div>
    </div>
</div>