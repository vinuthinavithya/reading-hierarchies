<?php
session_start();
$_SESSION['choices'] = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Things of Otherness</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at center, #ffffff 0%, #f2dede 40%, #b30000 100%);
            overflow: hidden;
        }

        .title {
            color: #b30000;
            letter-spacing: 2px;
            animation: fadeIn 2s ease;
        }

        .subtitle {
            color: #3a3a3a;
            animation: fadeIn 3s ease;
        }

        .btn-red {
            background-color: #b30000;
            color: white;
            border-radius: 50px;
            padding: 12px 36px;
            animation: pulse 2.5s infinite;
        }

        .btn-red:hover {
            background-color: #8f0000;
            color: white;
        }

        .card-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(6px);
            border-radius: 20px;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(179, 0, 0, 0.6);
            }
            70% {
                box-shadow: 0 0 0 18px rgba(179, 0, 0, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(179, 0, 0, 0);
            }
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

<div class="card card-glass shadow text-center p-5" style="max-width: 520px;">
    
    <h1 class="title mb-4">THINGS OF OTHERNESS</h1>

    <p class="subtitle mb-4">
        This is not a game to win.<br>
        This is an experience to notice.<br>
        <span class="text-muted">Your choices will not be judged.</span>
    </p>

    <form action="scenario1.php" method="post">
        <button type="submit" class="btn btn-red">
            Enter Experience
        </button>
    </form>

</div>

</body>
</html>
