<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_user.php';
include_once 'src/inc_top.php';
?>

<body class="admin" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php include_once 'src/inc_header.php';?>
<?php include_once 'src/inc_nav_user.php';?>

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
            <p><?php echo $names.' ('.$sex.')'; ?></p>
            <p><?php echo $phone; ?></p>
            <p><?php echo $ref_link; ?></p>
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
            <b>Uplink Profile</b>
            <p><?php echo $ref_by_names.' ('.$ref_by_sex.')'; ?></p>
            <p><?php echo $ref_by_phone; ?></p>
            <p><?php echo $ref_by_link; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <b>Total Referees</b>
             <p><?php echo sprintf('*%d of %d &nbsp; (%s)', $ref_my_n, $ref_tot, $ref_my_p); ?></p>
             <meter value="<?php echo $ref_my_d; ?>" title="<?php echo $ref_my_p; ?>"></meter>
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