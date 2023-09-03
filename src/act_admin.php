<?PHP
$ctx_title = 'Dashboard | ' . $ctx_alias;
$ctx_caption = 'Dashboard';
$ctx_snippet = [
    ['Dashboard', 'admin.php'],
];

$nav = 'admin_refs.php';
$nav2 = 'admin_user.php';

$username = $admin_row['username_ff'];
$phone = $admin_row['phone'];
$email = $admin_row['email'];
$reg_date = $admin_row['date_t'];

$ref_row = Main::refs();
$ref_tot = count($ref_row);

$ref_today = sql_fetch_by_date($conn, $tb_user);
$ref_today_n = count($ref_today);
$ref_today_r = (int) $ref_today_n / (int) $ref_tot;
$ref_today_d = round($ref_today_r, 2);
$ref_today_p = ($ref_today_d * 100) . '%';

$ref_this_week = sql_fetch_by_week($conn, $tb_user);
$ref_this_week_n = count($ref_this_week);
$ref_this_week_r = (int) $ref_this_week_n / (int) $ref_tot;
$ref_this_week_d = round($ref_this_week_r, 2);
$ref_this_week_p = ($ref_this_week_d * 100) . '%';

$ref_this_month = sql_fetch_by_month($conn, $tb_user);
$ref_this_month_n = count($ref_this_month);
$ref_this_month_r = (int) $ref_this_month_n / (int) $ref_tot;
$ref_this_month_d = round($ref_this_month_r, 2);
$ref_this_month_p = ($ref_this_month_d * 100) . '%';

$tbody = '';
if (is_array($ref_row)) {
    $ref_row_crop = array_slice($ref_row, 0, 25);
    foreach ($ref_row_crop as $row) {
        $e = Main::user($row['ID']);
        $img_uri = $dir_uploads . $e['photo_f'];
        $href = $nav2 .'?k='.$row['ID'];
        $tbody .= '<tr>
          <td>
            <span class="badge" style="background-image: url(./'.$img_uri.');">&nbsp;</span>
          </td>
          <td style="white-space:nowrap;">
            <b>'.$e['names_f'].'</b> ('.$e['sex'].') <br/>
            '.$e['phone'].'
          </td>
          <td style="white-space:nowrap;">
            '.$e['date_t'].' <br/>
            '.$e['time_t'].'
          </td>
          <td>
            <a href="'.$href.'"><var>more</var></a>
          </td>
        </tr>';
    }
}

//var_dump($ref_my_rows);
