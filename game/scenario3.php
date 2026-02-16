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
    <title>Scenario 3</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .btn-outline-red {
            border: 2px solid #b30000;
            color: #b30000;
        }
        .btn-outline-red:hover {
            background-color: #b30000;
            color: white;
        }
        .reflection-box {
            border-left: 6px solid #b30000;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

<div class="card reflection-box shadow-sm" style="max-width: 550px;">
    <div class="card-body">
        <h4 class="text-danger mb-3">Scenario 3</h4>

        <p>
            You realize something makes you different here.<br>
            It could be your language, clothing, behavior, or silence.
        </p>

        <p>
            No one says anything.<br>
            But you feel watched.
        </p>

        <form action="reflection1.php" method="post">
            <button class="btn btn-outline-red w-100 mb-2" name="choice" value="ignore">
                Ignore the feeling and continue
            </button>

            <button action="reflection1.php" class="btn btn-outline-red w-100 mb-2" name="choice" value="change_self">
                Change yourself to blend in
            </button>

            <button action="reflection1.php" class="btn btn-outline-red w-100" name="choice" value="embrace">
                Accept the difference
            </button>
        </form>
    </div>
</div>

</body>
</html>
