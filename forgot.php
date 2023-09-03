<?php 
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_forgot.php';
include_once 'src/inc_top.php';
?>

<body class="login" id="top">
<noscript>You need to enable JavaScript to run this app.</noscript>

<?php ctx_err($error, $errno, true); ?>

<main>
  <hgroup>
    <h1>
      <a href="" title="Home">
        <img src="./img/logo.png" alt="<?php echo $ctx_alias; ?>" />
      </a>
    </h1>
    <h2><?php echo $ctx_caption; ?></h2>
  </hgroup>

  <form <?php echo $ctx_form_attrib; ?>>
    <fieldset>  
      <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Email address" required />  
            
      <p class="checkbox-group">
        <!-- <input type="checkbox" id="checkbox" />
        <label for="checkbox">Remember me</label> -->
      </p>
      
      <button>Reset Password</button>

      <div class="bottom-links">
        <a href="login.php">Return to login</a>
        <p></p>
        Don't have an account? <a href="index.php">Sign up</a>
      </div>
    </fieldset>
  </form>

  <?php echo $ctx_copy; ?>
</main>

</body>
</html>