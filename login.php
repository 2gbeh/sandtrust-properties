<?php 
require_once 'src/_config.php';
include_once 'src/_utils.php';
include_once 'src/act_login.php';
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
      <input type="text" name="username" value="<?php echo $_POST['username']; ?>" placeholder="Username" required />  
      
      <input type="password" name="password" value="<?php echo $_POST['password']; ?>" placeholder="Password" ondblclick="togglePassword()" required />
      
      <p class="checkbox-group">
        <!-- <input type="checkbox" id="checkbox" />
        <label for="checkbox">Remember me</label> -->
      </p>
      
      <button>Sign in</button>

      <div class="bottom-links">
        &#9888; <a href="forgot.php">Forgot password</a>
        <p></p>
        Don't have an account? <a href="index.php">Sign up</a>
      </div>
    </fieldset>
  </form>

  <?php echo $ctx_copy; ?>
</main>

</body>
</html>