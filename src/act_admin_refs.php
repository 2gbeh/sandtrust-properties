<?PHP
$ctx_title = 'Referees | ' . $ctx_alias;
$ctx_caption = 'Referees';
$ctx_snippet = [
    ['Referees', 'admin_refs.php'],
];

$nav2 = 'admin_user.php';

if (isset($_GET['q'])) {
  $db_res = sql_select_one($conn, $tb_user, 'username', $_GET['q']);
  if (is_array($db_res)) {
    goto_page('admin_user.php?k='.$db_res['ID']);
  }
}

$tbody = '';
$ref_rows = Main::refs();
if (is_array($ref_rows)) {
    foreach ($ref_rows as $row) {
        $e = Main::user($row['ID']);
        $img_uri = $dir_uploads . $e['photo_f'];
        $href = $nav2 .'?k='.$row['ID'];
        $tbody .= '<tr>
          <td>
            <span class="badge" style="background-image: url(./' . $img_uri . ');">&nbsp;</span>
          </td>
          <td style="white-space:nowrap;">
            <b>' . $e['names_f'] . '</b> ('.$e['sex'].') <br/>
            ' . $e['phone'] . '
          </td>
          <td style="white-space:nowrap;">
            ' . $e['date_t'] . ' <br/>
            ' . $e['time_t'] . '
          </td>
          <td>
            <a href="'.$href.'"><var>more</var></a>
          </td>
        </tr>';
    }
}

$enum_username = sql_column_distinct($conn, $tb_user, 'username');
$dl_username = Enums::datalist($enum_username, 'dl_username');