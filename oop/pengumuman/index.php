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
        <h1 class="h2">Employees Details</h1>
        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
    </div>
    <?php
    // Include config file
    require_once "config.php";

    // Attempt select query execution
    $sql = "SELECT * FROM employees";
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered table-striped">';
            echo "<thead>";
            echo "<tr>";
            //echo "<th>#</th>";
            echo "<th>Name</th>";
            echo "<th>Address</th>";
            echo "<th>Salary</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                //echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
                echo "<td>";
                echo '<a href="read.php?id=' . $row['id'] . '" class="me-3 text-success" title="View Record" data-toggle="tooltip"><i class="bi bi-eye-fill"></i></a>';
                echo '<a href="update.php?id=' . $row['id'] . '" class="me-3 text-primary" title="Update Record" data-toggle="tooltip"><i class="bi bi-pencil-square"></i></a>';
                echo '<a href="delete.php?id=' . $row['id'] . '" class="text-danger" title="Delete Record" data-toggle="tooltip"><i class="bi bi-trash"></i></a>';
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            // Free result set
            $result->free();
        } else {
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close connection
    $mysqli->close();
    ?>
</main>
<?php include "../template/footer.php"; ?>