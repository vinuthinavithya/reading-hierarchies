<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Creative Project</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top, #c1121f, #5a0000);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        /* HERO */
        .hero {
            padding: 100px 20px 70px;
            text-align: center;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 3rem;
            letter-spacing: 1px;
        }

        .hero p {
            opacity: 0.85;
            max-width: 600px;
            margin: 15px auto 0;
        }

        /* CARD DESIGN */
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border-radius: 25px;
            padding: 35px 25px;
            text-align: center;
            height: 100%;
            border: 1px solid rgba(255,255,255,0.25);
            transition: all 0.4s ease;

            display: flex;
            flex-direction: column;
        }


        .glass-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.4);
            background: rgba(255,255,255,0.22);
        }

        .glass-card i {
            font-size: 3rem;
            color: #ffccd5;
            margin-bottom: 15px;
        }

        .glass-card h4 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .glass-card p {
            font-size: 0.9rem;
            opacity: 0.85;
            margin-bottom: 25px;
        }

        /* BUTTON */
        .btn-glow {
            background: linear-gradient(135deg, #ff4d4d, #c1121f);
            border: none;
            color: white;
            padding: 10px 28px;
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 0 0 rgba(255,77,77,0.6);
        }

        .btn-glow:hover {
            box-shadow: 0 0 20px rgba(255,77,77,0.8);
            transform: scale(1.05);
        }

        /* SECTION SPACING */
        .content {
            padding-bottom: 80px;
        }
    </style>
</head>
<body>

    <!-- HERO -->
    <section class="hero">
        <h1>Reading Hierarchies</h1>
        <p>
            A multidisciplinary digital space combining design thinking,
            cultural observation, play, and artificial intelligence. Understanding culture through architectural materials
        </p>
    </section>

    <!-- CONTENT -->
    <section class="content container">
        <div class="row g-4">

            <!-- Design Journal -->
            <div class="col-md-6 col-lg-3">
                <div class="glass-card">
                    <i class="bi bi-journal-richtext"></i>
                    <h4>Design Journal</h4>
                    <p>Documenting creative processes, ideas, and visual exploration.</p>

                    <a href="https://vinuthidharmawardhana.blogspot.com/"
                    class="btn btn-glow mt-auto"
                    target="_blank"
                    rel="noopener noreferrer">
                        Explore
                    </a>
                </div>
            </div>


            <!-- Otherness -->
            <div class="col-md-6 col-lg-3">
                <div class="glass-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <h4>Material as Authority</h4>
                    <p>An exploration of how building materials and height limits shape sacred power and cultural otherness in Kandy.</p>
                    <a href="kandy.php" class="btn btn-glow mt-auto">Discover</a>
                </div>
            </div>

            <!-- Game -->
            <div class="col-md-6 col-lg-3">
                <div class="glass-card">
                    <i class="bi bi-controller"></i>
                    <h4>Built Meanings</h4>
                    <p>A game. An interactive experience designed for engagement and play.</p>
                    <a href="game/index.php" class="btn btn-glow mt-auto">Play</a>
                </div>
            </div>

            <!-- Chatbot -->
            <div class="col-md-6 col-lg-3">
                <div class="glass-card">
                    <i class="bi bi-robot"></i>
                    <h4>Ask the City</h4>
                    <p>A chatbot-guided journey through Kandy, enhancing interaction and guidance.</p>
                    <a href="chatbot/index.html" class="btn btn-glow mt-auto">Chat</a>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
