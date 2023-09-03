<?PHP
$ctx_title = 'My Referees | ' . $ctx_alias;
$ctx_caption = 'My Referees';
$ctx_snippet = [
    ['Referees', 'user_refs.php'],
];

$tbody = '';
$ref_my_rows = Main::refs_of($whois->ref_my);
if (is_array($ref_my_rows)) {
    foreach ($ref_my_rows as $row) {
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
