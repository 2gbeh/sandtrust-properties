<?PHP
$ctx_title = 'Login | '.$ctx_alias;
$ctx_caption = 'Agent Portal';
$ctx_snippet = ''; 

$nav_user = 'user.php';
$nav_admin = 'admin.php';
$errno = 400;

#var_dump($_POST, $_FILES);
//$post_array = array('password' => sha1_f('1234'));
//sql_update_all($conn, $tb_user, $post_array);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = sanitize_request($_POST);
    $username = $post['username'];
    $db_res_user = sql_select_one($conn, $tb_user, 'username', $username);
    $db_res_admin = sql_select_one($conn, $tb_admin, 'username', $username);

  	$error = 'Login successful, welcome back <b>'.ucwords($post['username']).'</b>';
    if (is_array($db_res_user)) {
        if (sha1_f($post['password'], $db_res_user['password'])) {
            $_POST = null;
            $errno = 200;

            $_SESSION['user'] = $db_res_user;
            ctx_goto([$nav_user, $error, $errno]);
        } else {
            $error = 'Incorrect password';
        }
    } else if (is_array($db_res_admin)) {
        if (sha1_f($post['password'], $db_res_admin['password'])) {
            $_POST = null;
            $errno = 200;

            $_SESSION['admin'] = $db_res_admin;
            ctx_goto([$nav_admin, $error, $errno]);
        } else {
            $error = 'Incorrect password';
        }        
    } else {
        $error = 'Username not found';
    }
}
