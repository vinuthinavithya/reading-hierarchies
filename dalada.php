<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dalada Maligawa | Material & Otherness</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background-color: #fafafa;
            font-family: 'Segoe UI', sans-serif;
            color: #222;
        }

        h1, h2, h3 {
            color: #d36060;
        }

        .hero {
            background: linear-gradient(135deg, #7a0000, #b22222);
            color: white;
            padding: 90px 20px;
        }

        .section-space {
            padding: 70px 0;
        }

        .info-card {
            background: #ffffff;
            border-left: 6px solid #7a0000;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .gallery-img {
            cursor: pointer;
            transition: 0.3s;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .note-card {
            background: #fff;
            padding: 25px;
            border-left: 5px solid #7a0000;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            height: 100%;
        }
        .gallery-img {
            width: 100%;
            aspect-ratio: 4 / 3; /* You can change this to 1/1 for squares */
            object-fit: cover;   /* This crops the image to fill the frame without stretching */
            object-position: center;
            border-radius: 8px;  /* Optional: adds nice rounded corners */
            cursor: pointer;
        }
    </style>
</head>

<body>

<!-- ================= HERO ================= -->
<section class="hero text-center">
    <h1 data-aos="fade-down">Sri Dalada Maligawa</h1>
    <p class="mt-3" data-aos="fade-up">
        Warichchi Walls, Kithul Timber, and Sacred Resilience
    </p>
</section>

<!-- ================= DESCRIPTION ================= -->
<section class="container section-space">
    <div class="row justify-content-center">
        <div class="col-md-10" data-aos="fade-up">
            <div class="info-card">
                <h2>Material Intelligence of the Sacred Temple</h2>
                <p class="mt-3">
                    The Temple of the Sacred Tooth Relic is not only a religious monument,
                    but also a powerful example of indigenous material knowledge.
                    Its construction reflects an advanced understanding of flexibility,
                    resilience, and sacred protection embedded within traditional
                    Kandyan building systems.
                </p>
                <p>
                    The material choices of the Dalada Maligawa demonstrate how
                    architecture operates as a silent form of cultural control,
                    where sacredness, durability, and survival are shaped through
                    carefully selected construction techniques.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= IMAGE REFERENCES ================= -->
<section class="container section-space">
    <h2 class="text-center mb-5" data-aos="fade-up">Museum Visual References</h2>

    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <img src="assets/images/maligaya.jpg" 
                 class="img-fluid gallery-img" 
                 alt="Museum View 1"
                 data-bs-toggle="modal" 
                 data-bs-target="#imgModal">
        </div>
        
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/images/museum.jfif" 
                 class="img-fluid gallery-img" 
                 alt="Museum View 2"
                 data-bs-toggle="modal" 
                 data-bs-target="#imgModal">
        </div>
        
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/images/maligaya1.jpeg" 
                 class="img-fluid gallery-img" 
                 alt="Museum View 3"
                 data-bs-toggle="modal" 
                 data-bs-target="#imgModal">
        </div>
    </div>
</section>

<!-- ================= MUSEUM NOTES ================= -->
<section class="container section-space">
    <h2 class="text-center mb-5" data-aos="fade-up">Museum Notes</h2>

    <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up">
            <div class="note-card">
                <h5>Note 01 — Wall Construction</h5>
                <p>
                    Museum displays reveal that the main walls of the Dalada Maligawa
                    are constructed using <strong>warichchi walls reinforced with kithul pati</strong>,
                    rather than solid masonry.<br>
                    දළදා මාළිගාවේ බිත්ති සදහා වරිච්චි මැටියෙන් කළ ඒවා වේ. ඉට අමතරව කිතුල් ලී පටි භාවිතා කර ඇත. 
                    1998 දි බෝම්බ ප්‍රහාරය සිදු වුවත් හානිය අවම වීමට එම තාක්ෂණය හේතු වී ඇත.
                </p>
            </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="note-card">
                <h5>Note 02 — 1988 Bombing Evidence</h5>
                <p>
                    Photographic documentation on the first floor of the museum shows
                    how this flexible wall system minimized structural damage during
                    the 1988 bombing incident.
                    <br>
                    1998/01/25 බෝම්බ පිපිරීම් නිසා බිත්ති කඩා වැටුනා. සිතුවම් කැබලි තුල සිතුවම් ස්තර 3 ක් දක්නට ලැබුණා.  
                    දළදා මාලිගාවට එල්ල කරන ලද ප්‍රහාරය නිසා පිවිසෙන දොරටුවේ සිට සඳකඩපහණ, වළාකුළු බැම්ම, දිය අගල, 
                    එතෙරවන බෝකුව, වාහල්කඩ, ආධරාව, පත්තිරිප්පුව, පල්ලෙමාලේ  විහාරය, හේවිසි මණ්ඩපය, හා උඩුමහල ධාතු කුටිය, 
                    ඉදිරි දිගේ හානියට ලක් වන ලදී. (කෞතුකාගාරය)

                </p>
            </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="note-card">
                <h5>Note 03 — Material Knowledge</h5>
                <p>
                    These exhibits demonstrate that traditional Kandyan construction
                    methods were not symbolic alone, but technologically advanced
                    systems grounded in environmental understanding.
                    <br>
                    දළදා මාළිගාවේ බිත්ති සදහා වරිච්චි මැටියෙන් කළ ඒවා වේ. ඉට අමතරව කිතුල් ලී පටි භාවිතා කර ඇත. 
                     තවද උල් පැන් ගෙ හා පත්තිරිප්පුව සදහා ගඩොල් හා හුණු මිශ්‍ර බදාම භාවිතා කර ඇති අතර මැද වාසල කබොක් 
                     ගලින් නිර්මාණය කර ඇත. තවද එකම යුගයක නිර්මාණය වුවත් විවිධ තාක්ෂණික ක්‍රම මෙහි දැක ගත හැකි වේ.

                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= MATERIAL SUMMARY ================= -->
<section class="container section-space">
    <div class="row justify-content-center">
        <div class="col-md-9" data-aos="fade-up">
            <div class="info-card">
                <h3>Material Focus — Warichchi & Kithul Wood</h3>

                <ul class="mt-3">
                    <li>
                        <strong>Primary Wall System:</strong><br>
                        Warichchi walls reinforced with kithul pati (kithul timber strips),
                        forming a layered and flexible structural system.
                    </li>
                    <li>
                        <strong>Structural Resilience:</strong><br>
                        The flexibility of warichchi construction allowed pressure
                        absorption and release during the 1988 bombing,
                        significantly reducing wall damage.
                    </li>
                    <li>
                        <strong>Kithul Wood Strength:</strong><br>
                        Kithul timber is recognized as one of the strongest and most
                        durable wood types used in ancient Sri Lankan architecture.
                    </li>
                    <li>
                        <strong>Shock Resistance:</strong><br>
                        The tensile strength and elasticity of kithul wood enhanced
                        the building’s resistance to vibration and blast impact.
                    </li>
                    <li>
                        <strong>Museum Evidence:</strong><br>
                        Visual records and photographs documenting the bombing incident
                        are displayed on the first floor of the Dalada Maligawa Museum.
                    </li>
                    <li>
                        <strong>Material Intelligence:</strong><br>
                        This construction method proves that sacred architecture
                        incorporated advanced engineering knowledge alongside
                        ritual and symbolic meaning.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ================= BACK ================= -->
<div class="text-center mb-5">
    <a href="kandy.php" class="btn btn-danger">
        ← Back to Kandy
    </a>
</div>

<!-- ================= IMAGE MODAL ================= -->
<div class="modal fade" id="imgModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <img src="" class="img-fluid" id="modalImg">
        </div>
    </div>
</div>

<!-- ================= JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();

    document.querySelectorAll('.gallery-img').forEach(img => {
        img.addEventListener('click', function () {
            document.getElementById('modalImg').src = this.src;
        });
    });
</script>

</body>
</html>
