<?PHP
require_once 'lib/php-mailer/Exception.php';
require_once 'lib/php-mailer/PHPMailer.php';
require_once 'lib/php-mailer/SMTP.php';
require_once 'lib/php-mailer/main.php';

$ctx_title = 'Register | '.$ctx_alias;
$ctx_caption = 'Realtor\'s Registration Form';
$ctx_snippet = ''; 

$nav = 'login.php';
$errno = 400;

if (isset($_GET['k'])) {
    $_SESSION['ref_by'] = $_GET['k'];
    $db_res = sql_select_one($conn, $tb_user, 'ref_my', $_GET['k']);
    if (is_array($db_res)) {
        $names = strtoupper($db_res['names']); 
        $error = sprintf('Welcome, you\'re being referred by <b>%s</b> ', $names);
        $errno = 300;
    }  
}

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {    

    $_POST['ref_my'] = $ref_my = keygen();
    $_POST['ref_by'] = $ref_by = $_SESSION['ref_by'] ?: 0;
    $_POST['username'] = $username = current(explode('@', $_POST['email']));
    $_POST['password'] = $password = sha1_f($ref_my);
    $post = sanitize_request($_POST);
    
    $db_res_email = sql_select_one($conn, $tb_user, 'email', $post['email']);
    $db_res_phone = sql_select_one($conn, $tb_user, 'phone', $post['phone']);
    if (is_array($db_res_email)) {
        $error = 'Realtor\'s email address already registered';
    } else if (is_array($db_res_phone)) {
        $error = 'Realtor\'s phone number already registered';
    } else {
        if (is_file($_FILES['photo']['tmp_name'])) {            
            $post['photo'] = upload_file($_FILES['photo'], $dir_uploads, $ref_my);
        }
        
        $db_res = sql_insert($conn, $tb_user, $post);
        if (is_numeric($db_res)) {
            $_POST = null;            
            $error = 'Account created successfully, kindly check your email for login details.';
            $errno = 200;
            
$names = strtoupper($post['names']);
$user = $username;
$pass = $ref_my;
$url = $ctx_url.'?k='.$ref_my;
$src = $ctx_url. 'img/typeface.png';
$to = $post['email'];
$subject = 'Welcome to '.$ctx_appname;
$body = 'Dear '.$names.', <p></p>
Thank you for your interest in being part of our distinguished team of Real Estate agents.<br/>
Your Realtor Portal login details are stated below;<p></p>
<b>Username:</b> '.$user.' <br/>
<b>Password:</b> '.$pass.' <br/>
<b>Ref. Link:</b> <a href="'.$url.'">'.$url.'</a> <p></p>
Welcome on board! <p></p> <p></p>
<img src="'.$src.'" width="160" alt="'.$ctx_appname.'" />';
            
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
        } else {
            $error = $db_res;
        }
    }
}

$ddl_state = Enums::option(Lists::STATE, $_POST['state']);
$ddl_bank = Enums::option(Lists::BANK, $_POST['bank']);
