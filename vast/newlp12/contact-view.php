<!DOCTYPE html>
<html>


<head>
    <title>Kam-Ratan</title>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sty22.css">
</head>

<body style="position: relative;">

    <section id="callnow3" style="display: none;">
        <div id="callnow3in">
            <!-- <a href="#formOrder" style="color: white"><img src="image/yellow.png"></a> -->
        </div>
    </section>
    <!-- <div style="height: 110px;"></div> -->

    <main style="">

        <section id="secA">
            <br>
            <div class="usa" style="color: white;">
                <a href="#formOrder">
                    <div><img src="image/kamratan.jpg"></div>
                </a>
            </div>
            <br>
            <h1 style="color: #dda608ff">इंडिया का नंबर 1 लिंग वर्धक उत्पाद</h1>
            <h1>Kam-Ratan</h1>
            <br>
            <h2>हमेशा के लिए और भी बड़ा लिंग प्राप्त करें</h2>
            <p>90% महिलाएं चरमानंद का नाटक करती हैं। यह सब इसलिए है क्योंकि ज्यादातर पुरुषों का लिंग छोटा और ढीला होता है। क्या आप इसके लिए राजी हैं?</p>
        </section>
        <br>
        <section style=" display: flex;justify-content: center;">
            <a href="#formOrder"> <img src="image/image-2.jpg" style="max-width: 100%;max-height: 100%"></a>
        </section>
        <br><br>
        <section id="secB">
            <div id="secBA">
                <ul>
                    <li>
                        <div><img src="image/tick.png"></div>
                        <p>लंबाई में +35%</p>
                    </li>
                    <li>
                        <div><img src="image/tick.png"></div>
                        <p>मोटाई में +18%</p>
                    </li>
                    <li>
                        <div><img src="image/tick.png"></div>
                        <p>तुरंत लिंग का खड़ा होना</p>
                    </li>
                    <li>
                        <div><img src="image/tick.png"></div>
                        <p>मजबूत सहनशक्ति: 3 घंटे तक सेक्स करें</p>
                    </li>
                </ul>
            </div>
            <div id="secBB">
                <div class="no1">
                    <a href="#formOrder"> <img src="image/no1.png"></a>
                </div>
                <div>
                    <a href="#formOrder"> <img src="image/bot.png"></a>
                </div>

            </div>
        </section>

        <br><br>
        <section style="width: 100%;text-align: center;">
            <a href="#formOrder"> <img id="mygif" src="image/01.webp"></a>
        </section>
        <br>
        <section id="secC">
            </a>
            <div id="secCA">
                <form method="POST" id="formOrder" action="" enctype="multipart/form-data">
                    <h1>50% Discount पाने के ल फॉर्म भरेें<span style="font-size:2em;color:red"> </span></h1>


                    <input class="form-control" name="userName" placeholder="नाम" type="text" id="Full_Name" value="">
                    <input class="form-control  reqfield reqnumonly" id="input-telephone" name="subject" placeholder="फोन नंबर" type="text" value="">
                    <input class="form-control" name="userEmail" placeholder="पता" id="Full_Name" type="text" value="">
                    <div style="text-align: center;">
                    <button type="submit" name="send" value=" अभी ऑर्डर करें " id="or-btn">ऑर्डर करें</button>
                </div>

                    <?php
                    if (!empty($message)) {
                    ?>
                        <p class='<?php echo $type; ?>Message'>
                            <?php
                            echo '<script language="javascript">';
                            echo 'window.location = "db.php";';
                            echo '</script>';
                            ?>
                        </p>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <div id="secCB">
                <div class="secCBA">
                    <h1>लिंग को मोटा लम्बा और सेक्स पावर बढ़ाने में रामबाण तरीका</h1>
                    <h1>Capsule </h1>
                </div>
                <a href="#formOrder">
                    <div><img src="image/bot.png"></div>
                </a>
            </div>
        </section>



        <section id="secD" style="display:none">
            <div id="secDB">
                <h1>Kam-RatanR</h1>
                <h1>लिंग बड़ा करने के लिए मर्दों का नंबर 1 ब्रांड</h1>
            </div>
            <div id="secDA">
                <a href="#formOrder"> <img src="image/03.webp"></a>
            </div>

        </section>


        <section id="callnow4">
            <div id="callnow4in">
                <!-- <a href="#formOrder" style="color: white"><img src="image/yellow.png"></a> -->
            </div>
        </section>
        <footer>
            <h3> © 2021 Kam-Ratan. All Rights Reserved.</h3>
            <p> Disclaimer: These statements have not been evaluated by the Food and Drug Administration. <br> This product is not intended to diagnose, treat, cure, or prevent any disease.
            </p>
        </footer>
        <br><br>
    </main>

</body>
<!-- <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script> -->

</html>