<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login.php");
    exit;
}

// Check existence of id parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);

                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $mysqli->close();
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<?php include "../template/header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Record</h1>
    </div>
    <div class="form-group">
        <label>Name</label>
        <p><b><?php echo $row["name"]; ?></b></p>
    </div>
    <div class="form-group">
        <label>Address</label>
        <p><b><?php echo $row["address"]; ?></b></p>
    </div>
    <div class="form-group">
        <label>Salary</label>
        <p><b><?php echo $row["salary"]; ?></b></p>
    </div>
    <p><a href="index.php" class="btn btn-primary">Back</a></p>
</main>

<?php include "../template/footer.php"; ?>