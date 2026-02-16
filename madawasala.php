<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meda Wasala | Material & Otherness</title>

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

        .transcript-box {
            max-height: 260px;
            overflow-y: auto;
            padding: 25px;
            background: #fff;
            border-left: 6px solid #7a0000;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            line-height: 1.7;
        }

        .transcript-box::-webkit-scrollbar {
            width: 8px;
        }

        .transcript-box::-webkit-scrollbar-thumb {
            background-color: #7a0000;
            border-radius: 10px;
        }

        .transcript-box::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .gallery-img {
            width: 100%;
            aspect-ratio: 3 / 2; 
            object-fit: cover;   
            object-position: center;
            border-radius: 8px; 
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .gallery-img:hover {
            transform: scale(1.03); 
        }
         .pdf-link {
            background: #fdf0f0;
            padding: 25px;
            border-left: 5px solid #8b0000;
        }
    </style>
</head>

<body>

<!-- ================= HERO ================= -->
<section class="hero text-center">
    <h1 data-aos="fade-down">Meda Wasala</h1>
    <p class="mt-3" data-aos="fade-up">
        Kabok Stone, Women’s Space, and Material Intelligence in Kandyan Architecture
    </p>
</section>

<!-- ================= DESCRIPTION ================= -->
<section class="container section-space">
    <div class="row justify-content-center">
        <div class="col-md-10" data-aos="fade-up">
            <div class="info-card">
                <h2>Architectural Significance</h2>
                <p class="mt-3">
                    The Meda Wasala is a rare Kandyan-period royal residential structure,
                    historically associated with Queen Randoliya. Beyond its political and
                    cultural narrative, the building demonstrates a highly sophisticated use
                    of material and space, particularly through its extensive use of kabok stone.
                </p>
                <p>
                    As a women’s heritage space, the Meda Wasala reflects how architecture
                    quietly communicates hierarchy, privacy, comfort, and dignity.
                    The building functions as both a domestic environment and a symbol
                    of controlled power within the Kandyan royal complex.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= IMAGE REFERENCES ================= -->
<section class="container section-space">
    <h2 class="text-center mb-5" data-aos="fade-up">Visual References</h2>

    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <img src="assets/images/Meda-Wasala-1.jpg" 
                 class="img-fluid gallery-img" 
                 alt="Meda Wasala View 1"
                 data-bs-toggle="modal" 
                 data-bs-target="#imgModal">
        </div>
        
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/images/Meda-Wasala-2.jfif" 
                 class="img-fluid gallery-img" 
                 alt="Meda Wasala View 2"
                 data-bs-toggle="modal" 
                 data-bs-target="#imgModal">
        </div>
        
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/images/wasala.jpg" 
                 class="img-fluid gallery-img" 
                 alt="Wasala View"
                 data-bs-toggle="modal" 
                 data-bs-target="#imgModal">
        </div>
    </div>
</section>

<!-- ================= AUDIO ================= -->
<section class="container section-space">
    <h2 class="text-center mb-4" data-aos="fade-up">Audio Documentation</h2>

    <div class="row justify-content-center">
        <div class="col-md-9" data-aos="fade-up">

            <p class="text-center mb-4">
                Oral history and architectural explanations related to Meda Wasala. 
                <b><p>Madawasa Explanation 01,
                Madawasa Explanation 02,
                Madawasa Architectural Explanation </p></b>
            </p>

            <audio controls class="w-100 mb-3">
                <source src="assets/audio/Madawasala 1.m4a" type="audio/mpeg">
            </audio>

            <audio controls class="w-100 mb-3">
                <source src="assets/audio/Madawasala 2.m4a" type="audio/mpeg">
            </audio>

            <audio controls class="w-100">
                <source src="assets/audio/Madawasala explanation with things.m4a" type="audio/mpeg">
            </audio>

        </div>
    </div>
</section>

<!-- ================= TRANSCRIPT ================= -->
<section class="container section-space">
    <h2 class="text-center mb-4" data-aos="fade-up">Audio Transcript</h2>

    <div class="row justify-content-center">
        <div class="col-md-10" data-aos="fade-up">
            <div class="transcript-box">
                <p>
                    “මැදවාසල <br>
                    ස්තානය භාරව සිටි රජයේ නිලදාරී ඔලු කුමාරි  මහත්මිය.<br>
                    I:මැද වාසල ගැන පොඩි හැඳින්වීමක් කරන්න පුලුවන් ද?<br>
                    Madam:ඔව් පුලුවන් අහගන්නකො<br>
                    මේ මැද වාසල කියන්නෙ රජතුමාගෙ ප්‍රදාන් බිසව ඒ කි‍යන්යනෙ රන්දෝලිය හිටපු මාලිගාව මේක රජමාලිගාවෙ ඒ කියන්නෙ මහවාසලේ පරිවාර ගොඩනැගිල්ලක් වගේම මාලිගා සංකීර්නයේ දකින්න පුලුවන් විශේශම ගොඩනැගිල්ලක්.මොකද බිසවක් වෙනුවෙන් ඉදි කල එකම මාලිගා සංකීර්නය දැනට ලංකාවෙ දකින්න පුලුවන්.ඒක මේ මැද වාසලේ  තියන සුවිශේශිම දෙයක්. ඉස්සර මෙ නුවර ප්‍රභූ නිවාස වල දකින්න පුලුවන් උන මැද මිදුල,මහමඩුව,කුලුනු සහිත ආලින්දය,සිතුවම් වගේ දේවල් මෙකෙ බලා ගන්න පුලුවන්.වාස්තු විද්‍යාත්මකව මේ ගොඩනැගිල්ල ගොඩක් වැදගත් වෙනව. 
                    ඒ වගේම කාන්තා උරුමය ගැන කියන කොට මේ මැද වාසල ගැන සඳහන් නොකරම බෑ. ශ්‍රී වික්‍රම රාජසිංහ රජතුමාගෙ අගබිසව එහෙම නැත්තම් රන්දෝලිය උන ද්‍රවිඩ කාන්තාවක් උන වෙංකත රෙංගම්මාල් බිසව තමයි මේ මැද වාසල පරිහරනය කරල තියෙන්නෙ.මහනුවර යුගයේ අවසන් රාජකීයන් වාසය කල නිවස්නක් විදියටත් මේක හඳුන්වන්න පුලුවන්.
                    මේ මැද වාසල රාජසිංහ රජතුමාගෙ රන්දෝලිය ඒ කියන්නෙ වෙංකත රෙංගම්මාල් දකුණු ඉන්දීයාවෙ ඉඳල ලංකාවට පැමිණි ගම්පොල සාමිගෙ වැඩිමහල් දියනිය.මේ ගම්පොල සාමි එන්නෙ ඉන්දියාවෙ මදුරාපුර ඉදන් ලංකාවෙ ත්‍රිකුනාමල වරායෙන් ගොඩ බැහල සෙංකඩගල නුවරට තම දියනියන් දෙදෙනත් සමග.ඔය එන අතරෙ මාතලේදි ගම්පොල සාමි සිර භාරයට ගන්නව දියනිවරුන් දෙන්නව දකින අදිකාරම්වරයෙක් මේ දෙන්නව කැඳවාගෙන ඇවිල්ල් රජතුමාට සරණපාවා දෙනව. වැඩිමල් දියනිය උන වෙංකත රෙංගම්මාල් අගබිසව නත්තන් රන්දෝලිය වෙනව දෙවන බිසව රිදී දෝලිය වෙනව. මේ රන්දෝලිය සරණ් කර ගන්න කොට වයස අව්රුදු 13ක් කියල තමෛ කියන්නෙ ඒ වෙනකොට වැඩිවියට හෝ පත් වී නොමැත කියල තමයි සදහන් වෙන්නෙ.මේ රන්දෝලියට මේ මැද වාසල වෙන් කරල තියනව ඊට පහලින් තියන පල්ලෙ වාහල දැනට මහනුවර කෞතුකාගාරය විදියට තියෙන්නෙ ආන්න ඒක තමයි අන්තඃපුරය විදියට පාවිච්චි කරල තියෙන්නෙ. මේ මැද වාසලේ බිසව පාවිච්චි කරපු  කුටිය ඔයාලට බලාගන්න පුලුවන්.මේකෙ දොරවල් දෙකක් තියනව ලොකු දොර තිබිල තියෙන්නෙ කාමරයට ඇතුල් වෙන්න අනිත් බටහිර පැත්තෙ දොර තිබිල තියෙන්නෙ පිට වීමට. මේක රහස් දොරක් විදියටත් පාවිච්චි කරල තියනව.මේ දොර අරින්න පුලුවන් ඇතුල් පැත්තෙන් විතරයි.ප්‍රදාන දොරට තියෙන්නෙ චන්ද්‍රවංකය සහිත උලුවස්සක්.
                    එතකොට මේ කුටියේ ඇඳක් තිබුන බවට සලකන්න පුලුවන් පාදස්තල හතරක් බලා ගන්න ඔයාලට පුලුවන්. එතකොට අපි එවගෙ කැනීම් කරනකොට  මේ පාදම් අතර තිබිල තබ පත්තිරු හම්බුනා එව දැනට කෞතුකාගරේ බලන්න පුලුවන් ඔයාලට ගිහින් බලන්න.ඒ ව්ගෙම ඔයාලට බලා ගන්න පුලුවන් ඇදේ පාදම අසලින් ම කැසිගිලි ගලකුත් තියනව.මේ අබ්‍යන්තර කුටිය සියලු අංගෝපාංග සහිතව නිර්මාණය උන ඉතා වැදගත් නිර්මාණයක් කියල අපිට කියන්න පුලුවන්. තව දෙයක් මේ මැද වාසලේ මැද මිදුල ඔයාලට පේනව ඇතිනේ නොමිලෙ අව්ව වැස්ස හුලඟ ලබා ගන්නත් අලන්කාරයටත් තමයි මේ මැද මිදුල් ඉදි කරල තියෙන්නෙ.මේ මැද මිදුලෙ කොච්චර වැස්සත් වතුර එකතු වෙන්නෙ නැහැ ඔක්කම ගලා ගෙන එලියට යන විදියට තමයි ඉදි කරල තියෙන්නෙ.
                    ඒ වගේම ඔයාලට බලා ගන්න පුලුවන් කැණිමඩලක් ආකරයට තමයි වහල ඉදි කරල තියෙන්නෙ ජනෙල් වලට බීරලු යොදල  තමයි හදල තියෙන්නෙ.ජනෙල් ප්‍රමානයෙන් කුඩායි.උඩරට දැව කර්මාන්තයේ විශිශ්ටත්වය පෙන්නන්න පුලුවන් ගොඩනැගිල්ලක් තමයි මේක. කිබුල්කට මූට්ටුව සිංහල මූට්ටුව වගේ ක්‍රම භාවිතා කරල තියනව වහල ඉදි කරද්දි.
                    ඒ වගේම මැද වාසල එකිනෙක සම්බන්ද වහලවල් 3ක් තියනවා අභය්න්තර කුටිය හා එයට සම්බන්ද කොටස ආවරනය වෙන්නෙ පල හතරකින් යුක්ත වහලයකින්.
                    තව දෙයක් ඔයාලට බලා ගන්න පුලුවන් කැටයම් සහිත ලී කනු .මේවගෙ වැදගත්කම තමයි මේ ලී කනු හතරෙ තියෙන්නෙ ව්කිනෙකට වෙනස් වෙන කැටයම්. හොදට බලුවොත් පෙනෙවි කනු හතරෙ කැටයම් සමාන නැතිබව. ඒක මහනුවර යුගයේ ලී කැටයම් කලාවෙ දක්ශකම කියල අපිට කියන්න පුලුවන්.
                    ඒ වගේම තව විශේශ දෙයක් තියනව ඔයාලට දැනෙනව ඇති මේක ඇතුලට ආවම පිටත පරිසරයට වඩා සීතලක් දැනෙනව කියල. හේතුව තමයි මේ බිත්ති හදල තියෙන්නෙ කබොක් ගලින්  කබොක් ගලින් බිත්ති හැදුවම මේ වගේ සීතලක් රඳා පවතිනව. ඔයාලට ඒක හොදටම බලා ගන්න පුලුවන් ඇතුල් කුටියට ගියහම එකෙ සීතල ගතියක් හොදටම රඳා පවතිනවා.
                    ඒ වගේම ඔයාලට බලා ගන්න පුලුවන් මේ බිත්ති වල ඉස්සර සිතුවම් කරල තියනව ඉස්සර ප්‍රභූ නිවාස වල තමයි මේ විදියට සිතුවම් කරල තියෙන්නෙ. අපිට දැනට සංරක්ශනය කර ගන්න පුලුවන් උන පොඩි සිතුවම් කොටස් කිපය තමයි ඔයලට පෙන්නෙ. ඒ උනාට ඔය බිත්ති පුරාම සිතුවම් තිබිල තියනව.මේ සිතුවම් කොටස් වල ඔයාලට බලා ගන්න පුලුවන් අඳුරු රෝස පාට පසුබිමේ ඇඳපු පෙතිහයකින් යුතු රතු පාට මල් මෝස්තරයක්.

                    ඔය වගේ ඉතාම වැදගත් ලක්ශන බොහොමයක් මේ මැදවාසල සම්බන්දව තියනව. වාස්තුවිද්‍යාත්මකව ගත්තත් මේ මැදවාසල ඉතාම වැදගත්.  එ වගේම කාන්තා උරුමය මූර්තිමත් කරන ඉතා විරල ගනයේ නිර්මානයක් මේක.
                    ”
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
                <h3>Material Focus — Kabok Stone</h3>
                <ul class="mt-3">
                    <li>
                        <strong>Primary Material:</strong><br>
                        Kabok stone (laterite) forms the main structural walls of the Meda Wasala,
                        providing strength, durability, and thermal regulation.
                    </li>
                    <li>
                        <strong>Thermal Comfort:</strong><br>
                        Thick kabok walls create a naturally cool interior,
                        producing a noticeable temperature difference between interior
                        chambers and the external environment.
                    </li>
                    <li>
                        <strong>Women’s Heritage:</strong><br>
                        The Meda Wasala is closely associated with Queen Randoliya,
                        making it a rare architectural example reflecting women’s spatial
                        dignity within the Kandyan royal complex.
                    </li>
                    <li>
                        <strong>Environmental Design:</strong><br>
                        A central courtyard allows controlled entry of light, rain, and air,
                        while preventing water accumulation through effective drainage.
                    </li>
                    <li>
                        <strong>Interior Evidence:</strong><br>
                        Stone bases believed to support a bed structure and preserved leaf layers
                        discovered during excavations are now displayed in the museum.
                    </li>
                    <li>
                        <strong>Material Combination:</strong><br>
                        While timber dominates carved pillars, roofing, and window frames,
                        kabok stone forms the enduring structural core of the building.
                    </li>
                    <li>
                        <strong>Surface Treatment:</strong><br>
                        Interior walls were once fully painted; surviving fragments reveal
                        six-petaled red floral motifs on dark pink backgrounds.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ================= PDF RESOURCE ================= -->
<section class="container section-space">
    <div class="row justify-content-center">
        <div class="col-md-9" data-aos="fade-up">
            <div class="pdf-link">
                <h3>Mada Wasala</h3>
                <p class="mt-2">
                    Delve deeper into the history of Meda Wasala. Click here to access the full book reference, 
                    featuring detailed descriptions and rare imagery. <i> -By D.S.N.Olu Kumari-</i>
                </p>

                <a href="https://drive.google.com/file/d/1dzB_SyA7ZYQvYvk5N28Yucnn9Bt_iC_c/view?usp=drive_link"
                   target="_blank"
                   class="btn btn-danger mt-2">
                    <i class="bi bi-file-earmark-pdf"></i> Open Official UDA PDF
                </a>
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
