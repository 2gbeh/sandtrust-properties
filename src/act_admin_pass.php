<?PHP
$ctx_title = 'Change Password | ' . $ctx_alias;
$ctx_caption = 'Change Password';
$ctx_snippet = [
    ['Account', 'admin_edit.php'],
    ['Password', 'admin_pass.php'],
];

$nav = 'login.php';
$errno = 400;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = sanitize_request($_POST);
    $post_sha1 = array_map('sha1_f', $post);
    $db_res = change_password($post_sha1, $whois->password);

    if (is_array($db_res)) {
        $new_post = $db_res;
        $db_res = sql_update_id($conn, $tb_admin, $new_post, $whois->ID);
        if (is_numeric($db_res) && $db_res > 0) {
            $_POST = null;
            $error = 'Password updated successfully, sign in to continue.';
            $errno = 200;

            session_destroy();
            ctx_goto([$nav, $error, $errno]);
        } else {
            $error = $db_res > 0? $db_res: 'SQL WARNING: No affected rows.';
            $errno = 300;
        }
    } else {
        $error = $db_res;
    }
}
