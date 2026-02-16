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
    <title>Reflection</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #f3d6d6);
        }

        .reflection-card {
            border-radius: 20px;
            background: rgba(255,255,255,0.9);
            animation: fadeUp 1.5s ease;
        }

        .line {
            height: 4px;
            width: 60px;
            background-color: #b30000;
            margin: 20px auto;
        }

        .btn-red {
            background-color: #b30000;
            color: white;
            border-radius: 40px;
            padding: 10px 30px;
        }

        .btn-red:hover {
            background-color: #8f0000;
            color: white;
        }

        .soft-text {
            color: #555;
            font-size: 0.95rem;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card reflection-card shadow p-5 text-center">

                <h3 class="text-danger mb-3">Before You Leave</h3>

                <div class="line"></div>

                <p class="soft-text mb-4">
                    Nothing dramatic happened.<br>
                    No one pointed.<br>
                    No one spoke.
                </p>

                <p class="mb-4">
                    Yet, something shifted.
                </p>

                <p class="soft-text mb-4">
                    Otherness often lives in silence   
                    in where we sit,  
                    in how we are seen,  
                    in moments when we feel slightly out of place.
                </p>

                <p class="mb-4">
                    You were not excluded.<br>
                    You were simply <span class="text-danger fw-semibold">aware</span>.
                </p>

                <form action="../index1.php" method="post">
                    <button type="submit" class="btn btn-red">
                        Exit Experience
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>

</body>
</html>
