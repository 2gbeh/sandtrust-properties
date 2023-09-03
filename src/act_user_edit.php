<?PHP
$ctx_title = 'My Account | ' . $ctx_alias;
$ctx_caption = 'My Account';
$ctx_snippet = [
    ['Account', 'user_edit.php'],
];

$errno = 400;
$img_uri = $dir_uploads . $whois->photo;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = sanitize_request($_POST);

    if (is_file($_FILES['photo']['tmp_name'])) {
        $post['photo'] = upload_file($_FILES['photo'], $dir_uploads, $whois->ref_my);
        $img_uri = $dir_uploads . $post['photo'];
    }

    $db_res = sql_update_id($conn, $tb_user, $post, $whois->ID);
    if (is_numeric($db_res)) {
        $_POST = sql_select_id($conn, $tb_user, $whois->ID);
        $error = 'Account updated successfully';
        $errno = 200;

        $_SESSION['user'] = $_POST;
    } else {
        $error = $db_res;
    }

} else {
    $_POST = (array) $whois;
}

$ddl_state = Enums::option(Lists::STATE, $_POST['state']);
$ddl_bank = Enums::option(Lists::BANK, $_POST['bank']);
