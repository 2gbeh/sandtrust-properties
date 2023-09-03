<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_admin_pass.php';
include_once 'src/inc_top.php';
?>

<body class="admin" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php include_once 'src/inc_header.php';?>
<?php include_once 'src/inc_nav_admin.php';?>
<?php ctx_err($error, $errno, true);?>

<main>
  <div class="container">

    <?php include_once 'src/inc_breadcrumb.php';?>

    <section class="content">
      <form <?php echo $ctx_form_attrib; ?>>
        <fieldset>
        <p class="field-group">
          <label for="password">Current Password</label>
          <input type="password" name="password" value="<?php echo $_POST['password']; ?>" id="password" placeholder="" ondblclick="togglePassword()" required />
        </p>

        <p class="field-group">
          <label for="password">New Password</label>
          <input type="password" name="password_new" value="<?php echo $_POST['password_new']; ?>" id="password_new" placeholder="" ondblclick="togglePassword('input[name=password_new]')" required />
        </p>

        <p class="field-group">
          <label for="password">Retype New Password</label>
          <input type="password" name="password_cfm" value="<?php echo $_POST['password_cfm']; ?>" id="password_cfm" placeholder="" ondblclick="togglePassword('input[name=password_cfm]')" required />
        </p>

        <p class="button-group">
          <button type="button">Cancel</button>
          <button type="submit">Change</button>
        </p>
        </fieldset>
      </form>
    </section>

  </div>
</main>

<?php include_once 'src/inc_footer.php';?>

</body>
</html>