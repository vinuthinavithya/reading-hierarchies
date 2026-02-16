<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kandy | Material & Otherness</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background-color: #fafafa;
            color: #222;
            font-family: 'Segoe UI', sans-serif;
        }

        h1, h2, h3 {
            color: #8B0000;
        }

        .hero {
            position: relative;
            background: linear-gradient(
                rgba(0, 0, 0, 0.55),
                rgba(0, 0, 0, 0.55)
            ),
            url("assets/images/kandyan-pattern-bg.png");
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 120px 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-shadow: 0 6px 20px rgba(0,0,0,0.6);
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 20px auto 0;
            color: #f2f2f2;
            text-shadow: 0 3px 10px rgba(0,0,0,0.5);
        }


        .section-space {
            padding: 70px 0;
        }

        .material-btn {
            border: 2px solid #8B0000;
            color: #8B0000;
            background: #fff;

            padding: 14px 12px;        
            font-weight: 600;
            font-size: 0.95rem;        
            border-radius: 8px;       

            transition: all 0.3s ease;
        }

        .material-btn:hover {
            background: #c96161;
            color: #fff;
            transform: translateY(-3px);
        }


        .info-card {
            background: #ffffff;
            border-left: 6px solid #8B0000;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: 30px;
        }

        .chatbot-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: #8B0000;
            color: #fff;
            padding: 14px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            z-index: 999;
        }

        .chatbot-btn:hover {
            background: #B22222;
            color: #fff;
        }
        body {
            font-family: 'Segoe UI', sans-serif;
            color: #222;
            background-color: #faf6f6;

            background-image:
                radial-gradient(circle at 10px 10px, rgba(139,0,0,0.08) 2px, transparent 0),
                radial-gradient(circle at 30px 30px, rgba(178,34,34,0.06) 2px, transparent 0);

            background-size: 60px 60px;
        }
        .section-space {
            padding: 70px 0;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(2px);
            border-radius: 16px;
            margin-bottom: 60px;
        }
        body {
            background-color: #fafafa;
            background-image: url("assets/images/kandyan-floral-bg.jpg");
            background-repeat: repeat;
            background-size: 300px;
            background-attachment: fixed;
        }
        /* Home Button  */
        .home-btn {
            position: fixed;
            bottom: 25px;
            left: 25px; 
            background: #444; 
            color: #fff;
            padding: 14px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            z-index: 999;
            transition: all 0.3s ease;
        }

        .home-btn:hover {
            background: #222;
            color: #fff;
            transform: translateY(-3px);
        }
        
    
        .home-btn i {
            margin-right: 8px;
        }


        
    </style>
</head>

<body>
    

<!-- ================= HERO ================= -->
<section class="hero text-center">
    <h1 data-aos="fade-down">Material as Otherness</h1>
    <p data-aos="fade-up">
        Exploring how material and height shape power, sacredness,
        and cultural identity in Kandy
    </p>
</section>


<!-- ================= INTRO ================= -->
<section class="container section-space">
    <div class="row justify-content-center">
        <div class="col-md-9" data-aos="fade-up">
            <p class="fs-5">
                This page documents the selected <strong>Thing of Otherness in Kandy</strong>   
                the materials used in architecture and the invisible rules that govern building height.
                These elements silently control power, hierarchy, and sacred dominance in the city.
            </p>
        </div>
    </div>
</section>

<!-- ================= MATERIALS USED ================= -->
<section class="container section-space">
    <h2 class="mb-5 text-center" data-aos="fade-up">Materials Used in Kandyan Architecture</h2>

    <div class="row g-4 text-center">
        <div class="col-md-3" data-aos="zoom-in">
            <a href="paththirippuwa.php" class="btn material-btn w-75 mx-auto">
                Paththirippuwa / Ulpange
            </a>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
            <a href="dalada.php" class="btn material-btn w-75 mx-auto">
                Dalada Maligaya
            </a>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
            <a href="madawasala.php" class="btn material-btn w-75 mx-auto">
                Madawasala
            </a>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
            <a href="shitha-maligaya.php" class="btn material-btn w-75 mx-auto">
                Shitha Maligaya
            </a>
        </div>
    </div>
</section>

<!-- ================= HEIGHT SECTION ================= -->
<section class="container section-space">
    <div class="row">
        <div class="col-md-10 mx-auto" data-aos="fade-right">
            <div class="info-card">
                <h2>Height as Cultural Control</h2>
                <p class="mt-3">
                    In Kandy, architecture follows an unspoken but powerful rule:
                    <strong>no building is allowed to rise higher than the Paththirippuwa</strong>
                    of the Temple of the Tooth Relic.
                </p>
                <p>
                    This height restriction ensures that sacred authority remains visually dominant,
                    even over modern structures such as Kandy City Centre (KCC).
                    Height becomes an invisible tool of cultural power and reverence.
                </p>

                <a href="height-rule.php" class="btn btn-danger mt-3">
                    More Information →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= BOOK REFERENCE ================= -->
<section class="container section-space">
    <h2 class="text-center mb-4" data-aos="fade-up">
        Beautiful Chende, Beautiful Sri Lanka
    </h2>

    <div class="row justify-content-center">
        <div class="col-md-9" data-aos="fade-up">
            <p class="fs-5">
                In the book <em>Beautiful Chende, Beautiful Sri Lanka</em>,  
                Kandy is metaphorically described as a <strong>Chende city</strong> 
                layered, rhythmic, and controlled by ritual and repetition.
            </p>
            <p>
                This idea resonates with the city’s architecture, where materials and height
                create a structured harmony, reinforcing cultural identity while producing
                moments of otherness within the urban fabric.
            </p>
        </div>
    </div>
</section>

<!-- ================= THEME & VISUAL LANGUAGE ================= -->
<section class="container section-space">
    <h2 class="text-center mb-5" data-aos="fade-up">
        Visual & Cultural Theme
    </h2>

    <div class="row align-items-center justify-content-center">

        <!-- TEXT CONTENT -->
        <div class="col-md-6" data-aos="fade-right">
            <p class="fs-5">
                The visual theme of this website is inspired by
                <strong>Kandyan floral and ornamental design traditions</strong>
                commonly found in royal textiles, wall paintings, and sacred interiors.
            </p>

            <p>
                Rather than functioning as decoration, the floral pattern is used as a
                <em>cultural texture</em>  a background layer that quietly communicates
                ideas of ritual, hierarchy, and sacred presence.
            </p>

            <p>
                By reducing opacity and combining it with a light surface,
                the design maintains readability while allowing traditional visual language
                to coexist with digital space. This mirrors the research theme of
                <strong>material as otherness</strong>, where meaning is embedded subtly
                rather than explicitly.
            </p>
        </div>

        <!-- ARTWORK / IMAGE -->
        <div class="col-md-5 text-center" data-aos="fade-left">
            <div class="p-3" style="
                background: rgba(255,255,255,0.8);
                border: 2px solid #8B0000;
                border-radius: 12px;
                box-shadow: 0 12px 30px rgba(0,0,0,0.12);
            ">
                <img 
                    src="assets/images/20220503_203828.jpg" 
                    alt="Kandyan Floral Illustration"
                    class="img-fluid rounded"
                >
                <p class="mt-3 small text-muted">
                    Hand-drawn Kandyan floral study by the researcher
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ================= CHATBOT ================= -->
<a href="chatbot/index.html" class="chatbot-btn">
    💬 Ask the Material Bot
</a>
<!-- ================= HOME ================= -->
<a href="index1.php" class="home-btn">
    <i class="bi bi-house-door-fill"></i> Back to Home
</a>


<!-- ================= JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
