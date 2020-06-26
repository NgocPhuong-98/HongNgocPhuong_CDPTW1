<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1817 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bder_login">
                <h3 class="uppercase">LOGIN</h3>
                <!-- Show Form Login-->
                <form action="" class="login forms">
                    <div class="username margins">
                        <label class="lbl" for="username">Username or email address*</label><br>
                        <input type="text" class="input_text" id="username">
                    </div>
                    <div class="password margins">
                        <label class="lbl" for="password">Password*</label><br>
                        <input type="password" class="input_text" id="password">
                    </div>
                    <div class="remember margins">
                        <input type="checkbox" class="input_checkbox" id="remember">
                        <label class="lbl" for="remember">Remember me</label>
                    </div>
                    <div class="sm_login margins">
                        <button type="submit" class="btn_login btn">log in</button>
                    </div>
                    <div class="lost_pass margins">
                        <a href=""class="link">Lost your password?</a>
                    </div>
                </form>
                <!--End Form Login-->
            </div>

            <div class="col-md-6 bder_rg">
                <h3 class="uppercase">register</h3>
                <!-- Show Form Login-->
                <form action="" class="registier forms">
                    <div class="rg_email margins">
                        <label class="lbl" for="rg_email">Email address*</label><br>
                        <input type="text" class="input_text" id="rg_email">
                    </div>
                    <div class="rg_password margins">
                        <label class="lbl" for="rg_password">Password*</label><br>
                        <input type="rg_password" class="input_text" id="rg_password">
                    </div>
                    <div class="rg_text margins">
                        <p>Your personal data will be used to support your experience throughout this website, to
                            manage
                            access to your account, and for other purposes described in our
                            <a href="" class="link">privacy policy</a>.</p>
                    </div>
                    <div class="sm_register margins">
                        <button type="submit" class="btn_register btn">register</button>
                    </div>
                </form>
                <!--End Form Login-->

            </div>
        </div>
    </div>
</div>