<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_admin_user.php';
include_once 'src/inc_top.php';
?>

<body class="admin" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php include_once 'src/inc_header.php';?>
<?php include_once 'src/inc_nav_admin.php';?>

<main>
  <div class="container">

    <?php include_once 'src/inc_breadcrumb.php';?>

    <section class="widget">
      <table border="0">
        <tr>
          <td>
            <p>
              <figure style="background-image: url(./<?php echo $img_uri; ?>);">&nbsp;</figure>
            </p>
            <b><?php echo $username.' ('.$sex.')'; ?></b>
            <p><?php echo $ref_link; ?></p>                     
          </td>
        </tr>
        <tr>
          <td>
            <b>Date of Birth</b>
            <p><?php echo $dob_date; ?></p>
          </td>
        </tr>        
        <tr>
          <td>
            <b>Contact Info</b>
            <p><?php echo $email; ?></p>
            <p><?php echo $phone; ?></p>               
            <p><?php echo $address; ?></p>
            <p><?php echo $state; ?></p>
          </td>
        </tr>        
        <tr>
          <td>
            <b>Bank Details</b>
            <p><?php echo $bank; ?></p>
            <p><?php echo $acct_name; ?></p>
            <p><?php echo $acct_no; ?></p>
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
             <p><meter value="<?php echo $ref_my_d; ?>" title="<?php echo $ref_my_p; ?>"></meter</p>
          </td>
        </tr>
        <tr>
          <td>
            <b>Agent Downlinks</b>
            <p>
              <button><a href="<?php echo $nav2; ?>">View All</button>
            </p>
          </td>
        </tr>        
      </table>
    </section>

  </div>
</main>

<?php include_once 'src/inc_footer.php';?>

</body>
</html>