<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_admin_edit.php';
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
          <label for="username"><b>*</b> Username</label>
          <input type="text" name="username" value="<?php echo $_POST['username']; ?>" id="username" placeholder="" disabled required />
        </p>

        <p class="field-group">
          <label for="email"><b>*</b> Email Address</label>
          <input type="email" name="email" value="<?php echo $_POST['email']; ?>" id="email" placeholder="Ex. example@domain.com" required />
        </p>

        <p class="field-group">
          <label for="phone"><b>*</b> Telephone No.</label>
          <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" id="phone" placeholder="Ex. +(123)456-7890" maxlength="25" required />
        </p>

        <p class="button-group">
          <button type="button">Cancel</button>
          <button type="submit">Update</button>
        </p>
      </form>
      </fieldset>
    </section>

  </div>
</main>

<?php include_once 'src/inc_footer.php';?>

</body>
</html>