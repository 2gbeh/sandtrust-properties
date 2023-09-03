<?PHP
require_once 'lib/php-mailer/Exception.php';
require_once 'lib/php-mailer/PHPMailer.php';
require_once 'lib/php-mailer/SMTP.php';
require_once 'lib/php-mailer/main.php';

$ctx_title = 'Forgot Password | ' . $ctx_alias;
$ctx_caption = 'Forgot Password';
$ctx_snippet = '';

$nav = 'login.php';
$errno = 400;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = sanitize_request($_POST);
    $email = $post['email'];
    $db_res_user = sql_select_one($conn, $tb_user, 'email', $email);

    if (is_array($db_res_user)) {
        $post_array = array('password' => sha1_f('1234'));
        sql_update_id($conn, $tb_user, $post_array, $db_res_user['ID']);

        $_POST = null;
        $error = 'Password reset successful, kindly check your email for new login details.';
        $errno = 200;

        $names = strtoupper($db_res_user['names']);
        $user = $db_res_user['username'];
        $pass = '1234 (default)';
        $url = $ctx_url . 'login.php';
        $src = $ctx_url . 'img/typeface.png';
        $to = $db_res_user['email'];
        $subject = 'Password Reset';
        $body = 'Dear ' . $names . ', <p></p>
Your account password has been reset to the default password, kindly login and change your password immediately.<p></p>
<b>Username:</b> ' . $user . ' <br/>
<b>Password:</b> ' . $pass . ' <br/>
<b>Login URL:</b> <a href="' . $url . '">./sandtrustproperties.com/portal/login</a> <p></p>
<p></p> <p></p>
<img src="' . $src . '" width="160" alt="' . $ctx_appname . '" />';

        // php_mailer_send($sub_domain, $username, $password, $from, $to, $subject, $body, $reply_to = null, $attach = null);
        $send = php_mailer_send(
            $ctx_wm_host,
            $ctx_wm_user,
            $ctx_wm_psw,
            [$ctx_wm_user, $ctx_appname],
            $to,
            $subject,
            $body
        );
        #if ($send !== true) $error .= sprintf('@%s %s', $ctx_wm_host, $send);

        ctx_goto([$nav, $error, $errno]);
        //var_dump([$nav, $error, $errno, $send]);
    } else {
        $error = 'Email address not found';
    }
}
