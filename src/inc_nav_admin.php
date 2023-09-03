<nav>
  <div class="container">
    <table border="0" class="desktop">
      <tr>
        <th>
          <ul>
            <li>
              <a href="admin.php">
                Dashboard
              </a>
            </li>
            <li>
              <a href="admin_refs.php">
                Referees ((<?php echo $admin_refs; ?>))
              </a>
            </li>
            <li>
              <a href="admin_edit.php">
                My Account
              </a>
            </li>
            <li>
              <a href="admin_pass.php">
                Change Password
              </a>
            </li>
          </ul>
        </th>
        <td>
          <ul>
            <li>
              <a href="<?php echo $ctx_site_url; ?>" target="_blank" title="Visit Website">
                <img src="./img/ico-globe.png" width="20" alt="Visit Website" />
                <b>Visit Website</b>
              </a>
            </li>
            <li>
              <a href="admin_edit.php" title="My Account">
                <img src="./img/ico-user-circle.png" width="20" alt="My Account" />
                <b><?php echo $admin_bio; ?></b>
              </a>
            </li>
          </ul>
        </td>
      </tr>
    </table>

    <table border="0" class="mobile">
      <tr>
        <th>
          <a href="admin_edit.php" title="My Account">
            <img src="./img/ico-user-circle.png" width="20" alt="Account:" />
            <b><?php echo $admin_bio; ?></b>
          </a>
        </th>
        <td>
          <u title="Menu" onclick="toggleDrawer(this, '#drawer')">&equiv;</u>
        </td>
      </tr>
    </table>
  </div>
</nav>

<div class="drawer" id="drawer">
  <ul>
    <li>
      <a href="admin.php">
        Dashboard
      </a>
    </li>
    <li>
      <a href="admin_refs.php">
        Referees ((<?php echo $admin_refs; ?>))
      </a>
    </li>
    <li>
      <a href="admin_edit.php">
        My Account
      </a>
    <li>
    <li>
      <a href="admin_pass.php">
        Change Password
      </a>
    <li>
    <li>
      <a href="<?php echo $ctx_site_url; ?>" target="_blank">
        Visit Website
      </a>
    </li>
  </ul>
</div>
