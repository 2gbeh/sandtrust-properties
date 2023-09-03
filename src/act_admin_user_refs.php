<?PHP
$k = $_GET['k'];
$nav = 'admin_user.php?k='.$k;
$nav2 = 'admin_user_refs.php?k='.$k;

$tbody = '';
$admin_user_row = Main::user($k);
$admin_user_refs_rows = Main::refs_of($admin_user_row['ref_my']);
if (is_array($admin_user_refs_rows)) {
    foreach ($admin_user_refs_rows as $row) {
        $e = Main::user($row['ID']);
        $img_uri = $dir_uploads . $e['photo_f'];
        $tbody .= '<tr>
          <td>
            <span class="badge" style="background-image: url(./' . $img_uri . ');">&nbsp;</span>
          </td>
          <td style="white-space:nowrap;">
            <b>' . $e['names_f'] .'</b> ('.$e['sex'].') <br/>
            ' . $e['phone'] . '
          </td>
          <td style="white-space:nowrap;">
            ' . $e['date_t'] . ' <br/>
            ' . $e['time_t'] . '
          </td>
          <td>&nbsp;</td>
        </tr>';
    }
}

$ctx_title = 'Agent Downlinks | ' . $ctx_alias;
$ctx_caption = $admin_user_row['names_f'];
$ctx_snippet = [    
    ['Profile', $nav],
    ['Downlinks', $nav2],
];
//var_dump($admin_user_refs_rows);
