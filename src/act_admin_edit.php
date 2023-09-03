<?PHP
$ctx_title = 'My Account | ' . $ctx_alias;
$ctx_caption = 'My Account';
$ctx_snippet = [
    ['Account', 'admin_edit.php'],
];

$errno = 400;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = sanitize_request($_POST);

    $db_res = sql_update_id($conn, $tb_admin, $post, $whois->ID);
    if (is_numeric($db_res)) {
        $_POST = sql_select_id($conn, $tb_admin, $whois->ID);
        $error = 'Account updated successfully';
        $errno = 200;

        $_SESSION['admin'] = $_POST;
    } else {
        $error = $db_res;
    }

} else {
    $_POST = (array) $whois;
}