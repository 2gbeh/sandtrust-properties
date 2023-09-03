<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_admin.php';
include_once 'src/inc_top.php';
?>

<body class="admin" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php include_once 'src/inc_header.php';?>
<?php include_once 'src/inc_nav_admin.php';?>

<main>
  <div class="container">
    <?php ctx_err($error, $errno, true); ?>

    <?php include_once 'src/inc_breadcrumb.php';?>

    <section class="section">
      Account Summary
    </section>

    <section class="widget">
      <table border="0">
        <tr>
          <td>
            <b>My Profile</b>
            <p><?php echo $username; ?></p>
            <p><?php echo $phone; ?></p>
            <p><?php echo $email; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <b>Registration Date</b>
            <p><?php echo $reg_date; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <b>Referees Today</b>
             <p><?php echo sprintf('*%d of %d &nbsp; (%s)', $ref_today_n, $ref_tot, $ref_today_p); ?></p>
             <meter value="<?php echo $ref_today_d; ?>" title="<?php echo $ref_today_p; ?>"></meter>
          </td>
        </tr>
        <tr>
          <td>
            <b>Referees This Week</b>
             <p><?php echo sprintf('*%d of %d &nbsp; (%s)', $ref_this_week_n, $ref_tot, $ref_this_week_p); ?></p>
             <meter value="<?php echo $ref_this_week_d; ?>" title="<?php echo $ref_this_week_p; ?>"></meter>
          </td>
        </tr>
        <tr>
          <td>
            <b>Referees This Month</b>
             <p><?php echo sprintf('*%d of %d &nbsp; (%s)', $ref_this_month_n, $ref_tot, $ref_this_month_p); ?></p>
             <meter value="<?php echo $ref_this_month_d; ?>" title="<?php echo $ref_this_month_p; ?>"></meter>
          </td>
        </tr>
      </table>
    </section>

    <section class="section">
      <a href="<?php echo $nav; ?>">View all</a>
      Recent Referees
    </section>

    <section class="content">
      <div class="wrapper">
      <table border="0">
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

  </div>
</main>

<?php include_once 'src/inc_footer.php';?>

</body>
</html>