<?PHP
$nav = 'user_refs.php';

$names = $user_row['names_ff'];
$username = $user_row['username_f'];
$sex = $user_row['sex'];
$phone = $user_row['phone'];
$ref_link = $ctx_url . $user_row['ref_my_q'];
$reg_date = $user_row['date_t'];

$ref_tot = Main::refs(true);

$ref_my_n = $user_row['ref_my_n'];
$ref_my_r = (int) $ref_my_n / (int) $ref_tot;
$ref_my_d = round($ref_my_r, 2);
$ref_my_p = ($ref_my_d * 100) . '%';

$ref_by = $whois->ref_by;
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

$tbody = '';
$ref_my_rows = Main::refs_of($whois->ref_my);
if (is_array($ref_my_rows)) {
    $ref_my_rows_crop = array_slice($ref_my_rows, 0, 25);
    foreach ($ref_my_rows_crop as $row) {
        $e = Main::user($row['ID']);
        $img_uri = $dir_uploads . $e['photo_f'];
        $tbody .= '<tr>
          <td>
            <span class="badge" style="background-image: url(./'.$img_uri.');">&nbsp;</span>
          </td>
          <td style="white-space:nowrap;">
            <b>'.$e['names_f'].'</b> ('.$e['sex'].')<br/>
            '.$e['phone'].'
          </td>
          <td style="white-space:nowrap;">
            '.$e['date_t'].' <br/>
            '.$e['time_t'].'
          </td>
          <td>&nbsp;</td>
        </tr>';
    }
}

$ctx_title = 'Dashboard | ' . $ctx_alias;
$ctx_caption = $user_row['names_f'];
$ctx_snippet = [
    ['Dashboard', 'user.php'],
];

//var_dump($ref_my_rows);
