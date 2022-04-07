<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login.php");
    exit;
}
?>
<?php include "../template/header.php"; ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Invalid Request</h1>
    </div>
    <div class="alert alert-danger">Sorry, you've made an invalid request. Please <a href="index.php" class="alert-link">go back</a> and try again.</div>
</main>
<?php include "../template/footer.php"; ?>