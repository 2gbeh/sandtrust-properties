<?php
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_user_edit.php';
include_once 'src/inc_top.php';
?>

<body class="admin" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php include_once 'src/inc_header.php';?>
<?php include_once 'src/inc_nav_user.php';?>
<?php ctx_err($error, $errno, true);?>

<main>
  <div class="container">

    <?php include_once 'src/inc_breadcrumb.php';?>

    <section class="content">
      <form <?php echo $ctx_form_attrib; ?>>
        <fieldset>
        <p class="image-group">
          <span class="thumbnail" title="Change"
            style="background-image: url(./<?php echo $img_uri; ?>);"
            onclick="handleUpload('input[name=photo]')">&nbsp;</span>
        </p>
        
        <p class="field-group">
          <label for="photo">Profile Photo</label>
          <input type="file" name="photo" id="photo" accept="image/*" />
        </p>

        <p class="field-group">
          <label for="names"><b>*</b> Full Name</label>
          <input type="text" name="names" value="<?php echo $_POST['names']; ?>" id="names" placeholder="(surname first)" required />
        </p>

        <div class="field-group">
          <label for="sex"><b>*</b> Gender</label>
          <p class="radio-group radio-group-readonly">
            <input type="radio" name="sex" id="male" value="m" <?php echo isChecked('sex', 'm'); ?> disabled required />
            <label for="male">Male</label>
            &nbsp;
            <input type="radio" name="sex" id="female" value="f" <?php echo isChecked('sex', 'f'); ?> disabled required />
            <label for="female">Female</label>
          </p>
        </div>

        <p class="field-group">
          <label for="dob">Date of Birth</label>
          <input type="date" name="dob" value="<?php echo $_POST['dob']; ?>" id="dob" placeholder="Ex. YYYY-MM-DD" />
        </p>        

        <p class="field-group">
          <label for="email"><b>*</b> Email Address</label>
          <input type="email" name="email" value="<?php echo $_POST['email']; ?>" id="email" placeholder="Ex. example@domain.com" disabled required />
        </p>

        <p class="field-group">
          <label for="phone"><b>*</b> Telephone No.</label>
          <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" id="phone" placeholder="Ex. +(123)456-7890" maxlength="25" required />
        </p>

        <p class="field-group">
          <label for="address"><b>*</b> Home Address</label>
          <textarea name="address" id="address" placeholder="" required><?php echo $_POST['address']; ?></textarea>
        </p>

        <p class="field-group">
          <label for="state"><b>*</b> State</label>
          <select name="state" id="state" required>
            <option></option>
            <?php echo $ddl_state; ?>
          </select>
        </p>

        <p class="hr"></p>
        <p class="field-group">
          <label for="bank">Bank Name</label>
          <select name="bank" id="bank">
            <option value="0"></option>
            <?php echo $ddl_bank; ?>
          </select>
        </p>

        <p class="field-group">
          <label for="acct_name">Account Name</label>
          <input type="text" name="acct_name" value="<?php echo $_POST['acct_name']; ?>" id="acct_name" placeholder="" />
        </p>

        <p class="field-group">
          <label for="acct_no">Account Number</label>
          <input type="number" name="acct_no" value="<?php echo $_POST['acct_no']; ?>" id="acct_no" maxlength="10" placeholder=""/>
        </p>

        <p class="hr"></p>
        <p class="field-group">
          <label for="username"><b>*</b> Username</label>
          <input type="text" name="username" value="<?php echo $_POST['username']; ?>" id="username" placeholder="" disabled required />
        </p>

        <p class="field-group">
          <label for="ref_by"><b>*</b> Referral Uplink</label>
          <input type="number" name="ref_by" value="<?php echo $_POST['ref_by']; ?>" id="ref_by" placeholder="" disabled required />
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