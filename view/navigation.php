<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //If user is not authenticated, kill the code and send the user back to the index page
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>
    <ul>
        <button type="button" class="btn btn-primary"><a id="post" href="<?php echo $path . "post.php"?>">Blog Post Form</a></button>
    </ul>
</nav>