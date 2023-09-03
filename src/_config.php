<?PHP
# STOP WARNING ERRORS
error_reporting(E_ALL ^ E_DEPRECATED);
set_error_handler(function () {});

# STOP CACHE MEMORY
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

# EXTEND VAR_DUMP
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

# START SESSION
session_start();

# UTIL ATTRIBS
$ctx_this_page = basename($_SERVER['PHP_SELF']);
$ctx_localhost = $_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost';
$ctx_base_dir = $ctx_localhost == true ? '' : $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];
$ctx_form_attrib = 'action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post" autocomplete="off" enctype="multipart/form-data"';
$ctx_form_attrib_get = 'action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="get" autocomplete="off"';

$ctx_server = $ctx_localhost == true ? 'sandtrus' : 'sandtrus';
$ctx_domain = 'sandtrustproperties.com';
$ctx_sub_domain = 'portal';
$ctx_url = sprintf('https://%s/', $ctx_domain);
$ctx_url = sprintf('https://%s.%s/', $ctx_sub_domain, $ctx_domain);
$ctx_cp = $ctx_domain. '/cpanel';
$ctx_cp_user = $ctx_server;
$ctx_cp_psw = 'zZ6tXf@.GQ07s8';
/*
            $send = php_mailer_send(
                $ctx_wm_host,
                $ctx_wm_user, 
                $ctx_wm_psw, 
                [$ctx_wm_user, $ctx_appname],
                $post['email'], 
                'Welcome to '.$ctx_appname,
                $body   
*/
$ctx_wm = $ctx_domain. '/webmail';
$ctx_wm_host = 'portal.'.$ctx_domain;
$ctx_wm_user = 'no-reply@' . $ctx_domain;
$ctx_wm_psw = 'Sandtrustproperties21';
if ($ctx_localhost == true) {
    $ctx_db = $ctx_server . '_db';
    $ctx_db_user = 'root';
    $ctx_db_psw = '';
} else {
    $ctx_db = $ctx_server.'_db';
    $ctx_db_user = $ctx_server.'_root';
    $ctx_db_psw = '_Strongp@ssw0rd';
    // overwrite
    $ctx_db = 'sandtrus_portal';
    $ctx_db_user = 'sandtrus_portal';
    $ctx_db_psw = 'Sandtrustproperties21';
}

$ctx_appname = 'Sandtrust Properties Limited';
$ctx_alias = 'SANDTRUST';
$ctx_summary = 'A world-class real estate development company driven by value innovation and optimum service to deliver functional lands and Houses.';
$ctx_keywords = 'property developers,real estate,real estate company,real estate nigeria,real estate lagos,godsent adingwupu,hwplabs,emmanuel tugbeh';
$ctx_theme = '#ffffff';
$ctx_admin = 'admin.' . $ctx_domain;
$ctx_user = 'user.' . $ctx_domain;
$ctx_info = 'info@' . $ctx_domain;
$ctx_support = 'support@' . $ctx_domain;
$ctx_ticket = 'ticket@' . $ctx_domain;
$ctx_mailto = 'mailto:' . $ctx_support;
$ctx_owner = 'Godsent Adingwupu';
$ctx_autofwd = '';
$ctx_phone = '08160358572';
$ctx_copy = '<address>&copy; 2022 <b>Sandtrust</b> Properties Ltd.</address>';
$ctx_site_url = 'https://sandtrustproperties.com/';
$ctx_login_url = 'login.php';

$sm_fb = 'https://facebook.com/sandtrustproperties/';
$sm_tw = 'https://twitter.com/';
$sm_ig = 'https://instagram.com/';
$sm_yt = 'https://youtu.be/y6C0qu18OG0';
$sm_wa = 'https://wa.me/2348160358572';
$sm_tg = 'https://telegram.org/';

$seo = [
    'canonical' => $ctx_url.'index.php',
    'site_name' => 'Sandtrust', 
    'title' => 'Sandtrust Properties Limited', 
    'description' => 'Property Development, Sales &amp; Consulting', 
    'url' => $ctx_url,
    'image' => $ctx_url.'img/preview.png', 
    'width' => '640',
    'height' => '320',
];

# UTIL METHODS
function ctx_goto ($args) {
    $url = is_array($args)? sprintf('%s?error=%s&errno=%d', $args[0], $args[1], $args[2]): $args;
    echo '<script type="text/javascript">location.assign("' . $url . '");</script>';
}

function ctx_err ($error, $errno, $banner = false) {
    if (strlen($error) > 0 || isset($_GET['error'])) {
        $ctx_err_var = strlen($error) > 0? $error: $_GET['error'];
        if ($errno == 200 || $_GET['errno'] == 200) {$ctx_err_hex = 'ctx_err_200'; $ctx_err_ico = '&#9989;';}
        else if ($errno == 400 || $_GET['errno'] == 400) {$ctx_err_hex = 'ctx_err_400'; $ctx_err_ico = '&#9940;';}
        else {$ctx_err_hex = ''; $ctx_err_ico = '&#128276;';}
        if ($banner == true) {$nbsp = '&nbsp;'; $padd = '20px';}
        else {$nbsp = ''; $padd = '10px';}
        echo '<style type="text/css">
            .ctx_err {background-color: #fff8c5; color: #24292f; border-bottom: solid thin #eed888; margin-bottom: 10px; padding: 12px;}
            .ctx_err_200 {background-color: #d4edda; border-color: #090;}
            .ctx_err_400 {background-color: #f8d7da; border-color: #e11;}    
            .ctx_err table tr {vertical-align: top;}
            .ctx_err table tr th {text-align: left; font-weight: normal;}
            .ctx_err table tr th i {font-style: normal;}
            .ctx_err table tr th p {margin: 0 0 0 5px; padding: 0; font-size: 14px; line-height: 20px; display: inline;}
            .ctx_err table tr th a {color: #0969da; text-decoration: none;}
            .ctx_err table tr th a:hover {text-decoration: underline;}
            .ctx_err table tr td {text-align: right;}
            .ctx_err table tr td a {font-size: 18px; line-height: 0.2;}
            .ctx_err table tr td a:hover {color: #e11; cursor: pointer;}
        </style>    
        <div class="ctx_err '.$ctx_err_hex.'" id="ctx_err"><table border="0"><tr>
            <th><i>'.$ctx_err_ico.'</i> <p>'.$ctx_err_var.'</p></th>
            <td><a title="Hide" onclick="document.querySelector(\'#ctx_err\').style.display=\'none\'">&times;</a></td>
        </tr></table></div>';
    }
}

#var_dump($GLOBALS);
