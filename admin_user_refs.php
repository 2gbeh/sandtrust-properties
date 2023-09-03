<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_admin_user_refs.php';
include_once 'src/inc_top.php';
?>

<body class="admin" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php include_once 'src/inc_header.php';?>
<?php include_once 'src/inc_nav_admin.php';?>

<main>
  <div class="container">

    <?php include_once 'src/inc_breadcrumb.php';?>

    <section class="content">
      <div class="wrapper">
      <table border="0">
        <caption>
          <form onsubmit="return false" autocomplete="off">
            <input type="search" name="q" placeholder="Search..." list="dl_refs" required />
            <datalist id="dl_refs">
              <?php echo $dl_refs; ?>
            </datalist>
          </form>
        </caption>
        <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Agent</th>
          <th colspan="2">Date</th>
        </tr>
        </thead>
        <tbody>
          <?php echo $tbody; ?>
          <!--
          <tr>
            <td>
              <span class="badge" style="background-image: url(./uploads/424671.png);">&nbsp;</span>
            </td>
            <td style="white-space: nowrap;">
              <b>John Doe</b> <br/>
              01234567891
            </td>
            <td style="white-space: nowrap;">
              <time datetime="1993-01-01T00:00:00">
                Tue, Jan 1, 1993 <br/> 12:00 AM
              </time>
            </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <span class="badge" style="background-image: url(./uploads/455898.png);">&nbsp;</span>
            </td>
            <td style="white-space: nowrap;">
              <b>Jane Doe</b> <br/>
              01234567892
            </td>
            <td style="white-space: nowrap;">
              <time datetime="1993-01-01T00:00:00">
                Tue, Jan 1, 1993 <br/> 12:00 AM
              </time>
            </td>
            <td>&nbsp;</td>
          </tr>
          -->
        </tbody>
      </table>
      </div>
    </section>

    <?php include_once 'src/inc_pagination.php';?>
  </div>
</main>

<?php include_once 'src/inc_footer.php';?>

</body>
</html>