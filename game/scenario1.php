<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scenario 1</title>

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

<div class="card shadow-sm" style="max-width: 500px;">
    <div class="card-body">
        <h4 class="card-title text-danger mb-3">Scenario 1</h4>

        <p class="card-text">
            You are sitting in the university library.<br>
            Everyone around you is sitting in pairs.<br>
            You are alone.
        </p>

        <form action="scenario2.php" method="post">
            <button class="btn btn-outline-red w-100 mb-2" name="choice" value="stay">
                Continue working quietly
            </button>

            <button action="scenario2.php" class="btn btn-outline-red w-100 mb-2" name="choice" value="move">
                Move to another seat
            </button>

            <button action="scenario2.php" class="btn btn-outline-red w-100" name="choice" value="leave">
                Leave the library
            </button>
        </form>
    </div>
</div>

</body>
</html>
