<?PHP
$k = $_GET['k'];
$nav = 'admin_user.php?k='.$k;
$nav2 = 'admin_user_refs.php?k='.$k;

$admin_user_row = Main::user($k);
$img_uri = $dir_uploads . $admin_user_row['photo_f'];
$names = $admin_user_row['names_ff'];
$sex = $admin_user_row['sex'];
$username = $admin_user_row['username'];
$ref_url = $ctx_url . $admin_user_row['ref_my_q'];
$ref_link = sprintf('<a href="%s" title="Referral Link">%s</a>', $ref_url, $ref_url);
$email = $admin_user_row['email_f'];
$phone = $admin_user_row['tel_f'];
$address = $admin_user_row['address'];
$state = $admin_user_row['state_f'];
$bank = $admin_user_row['bank_f'];
$acct_name = $admin_user_row['acct_name_f'];
$acct_no = $admin_user_row['acct_no'];
$dob_date = $admin_user_row['dob_f'];
$reg_date = $admin_user_row['date_t'];

$ref_by = $admin_user_row['ref_by'];
$ref_by_names = 'NONE';
if ($ref_by > 0) {
    $ref_by_row = sql_select_one($conn, $tb_user, 'ref_my', $ref_by);
    $ref_by_row = Main::user($ref_by_row['ID']);
    $ref_by_names = $ref_by_row['names_ff'];
    $ref_by_sex = $ref_by_row['sex'];
    $ref_by_phone = $ref_by_row['tel_f'];
    $ref_by_url = $ctx_url . $ref_by_row['ref_my_q'];
    $ref_by_link = sprintf('<a href="%s" title="Referral Link">%s</a>', $ref_by_url, $ref_by_url);
}

$ref_tot = Main::refs(true);
$ref_my_n = $admin_user_row['ref_my_n'];
$ref_my_r = (int) $ref_my_n / (int) $ref_tot;
$ref_my_d = round($ref_my_r, 2);
$ref_my_p = ($ref_my_d * 100) . '%';

$ctx_title = 'Agent Profile | ' . $ctx_alias;
$ctx_caption = $admin_user_row['names_f'];
$ctx_snippet = [    
    ['Profile', $nav],
    ['Downlinks', $nav2],
];

//var_dump($ref_my_rows);
