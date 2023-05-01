<div class="col footer" id="order">
    <div class="row">
        <div class="col-sm-12" style="background-color:#000000;">
            <h3 style="color:red;text-align: center">अभी ऑर्डर कीजिए</h3>

            <form action="" enctype="multipart/form-data" method="POST">



                <div style="text-align: center;display: flex;justify-content: center;align-items: center;">
                    <span style="color:Red;font-weight:bold;font-size:20px" class="blink">BUY 1 GET 1
                        FREE</span>
                    <img height="35px" src="./assets/free_shipping.png" alt="free_shipping">
                </div>
                <p style="color:red;text-align:center"><span id="timer">8 : 56</span></p>
                <h6 style="color:white;">ऑफर समाप्त होने में थोड़ा ही समय बचा है जल्दी करे निचे दिए गया फॉर्म भर
                    के ऑफर का लाभ उठाये </h6>

                <div><input type="text" value="" name="userName" placeholder="नाम" required=""></div>
                <div>
                    <input type="text" class="form_group only_number" value="" name="subject" placeholder="फोन नंबर" maxlength="14" title="Enter 10 digit mobile number dont not start  or 0 digit" required="">
                </div>
                <div>
                    <input type="text" value="" name="userEmail" placeholder="पता" required="">
                    <select name="baddress" value="" type="text" id="">
                        <option value="BUY 1 GET 1 FREE Rs.999 Only">BUY 1 GET 1 FREE Rs.999 Only</option>
                        <option value="1 Oil + 30 capsule Rs.999 Only">1 Oil + 30 Capsule Rs.999 Only</option>
                        <option value="1 Oil + 1 Oil Rs.999 Only">1 Oil + 1 Oil Rs.999 Only</option>

                    </select>
                </div>


                <div> <input type="submit" value=" अभी ऑर्डर करें " name="send"></div>
            </form>
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

        </div>
    </div>
</div>