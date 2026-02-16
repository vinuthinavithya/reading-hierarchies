<?php
session_start();

if (isset($_POST['choice'])) {
    $_SESSION['choices'][] = $_POST['choice'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scenario 2</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
        }
        .btn-outline-red {
            border: 2px solid #b30000;
            color: #b30000;
        }
        .btn-outline-red:hover {
            background-color: #b30000;
            color: white;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

<div class="card shadow-sm" style="max-width: 520px;">
    <div class="card-body">
        <h4 class="text-danger mb-3">Scenario 2</h4>

        <p>
            You walk into a canteen.<br>
            The tables are full.<br>
            You notice people looking at you while you search for a seat.
        </p>

        <p class="text-muted">
            Your body becomes more noticeable than your presence.
        </p>

        <form action="scenario3.php" method="post">
            <button class="btn btn-outline-red w-100 mb-2" name="choice" value="stand">
                Stand and wait quietly
            </button>

            <button action="scenario3.php" class="btn btn-outline-red w-100 mb-2" name="choice" value="leave_canteen">
                Leave without eating
            </button>

            <button action="scenario3.php" class="btn btn-outline-red w-100" name="choice" value="ask_seat">
                Ask someone for a seat
            </button>
        </form>
    </div>
</div>

</body>
</html>
