<header>
  <div class="container">
    <table border="0">
      <tr>
        <th>
          <a href="index.php" title="Home">
            <img src="./img/typeface.png" alt="<?php echo $ctx_alias; ?>" />
          </a>
        </th>
        <td>
          <ul>
            <li>
              <?php 
                $btn = '';
                if (isset($_SESSION['admin']) || isset($_SESSION['user']))
                  $btn = '<a onclick="handleLogout(\'?logout=true\')">Logout</a>';
                else
                  $btn = '<a href="login.php">Login</a>';
                echo $btn;
              ?>
            </li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
</header>
