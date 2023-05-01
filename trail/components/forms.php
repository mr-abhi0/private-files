<form class="form">
    <h3 class="form-header" style="color:red;text-align: center">अभी ऑर्डर कीजिए</h3>
    <!-- <h2>CONTACT US</h2>
    <p type="Name:"><input placeholder="Write your name here.."></input></p>
    <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
    <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
    <button>Send Message</button> -->



    <div><input type="text" value="" name="userName" placeholder="नाम" required=""></div>
    <div>
        <input type="text" class="form_group only_number" value="" name="subject" placeholder="फोन नंबर" maxlength="14" title="Enter 10 digit mobile number dont not start  or 0 digit" required="">
    </div>
    <div>
        <select name="baddress" value="" type="text" id="">
            <option value="BUY 1 GET 1 FREE Rs.999 Only">BUY 1 GET 1 FREE Rs.999 Only</option>
            <option value="1 Oil + 30 capsule Rs.999 Only">1 Oil + 30 Capsule Rs.999 Only</option>
            <option value="1 Oil + 1 Oil Rs.999 Only">1 Oil + 1 Oil Rs.999 Only</option>

        </select>
    </div>


    <div> <input class="checkedsub" type="submit" value=" अभी ऑर्डर करें " name="send"></div>

</form>

<style>
    .form {
        /* width: 340px; */
        /* height: 440px; */
        background: #e6e6e6;
        border-radius: 8px;
        box-shadow: 0 0 40px -10px #000;
        margin: calc(50vh - 220px) auto;
        padding: 20px 30px;
        max-width: calc(100vw - 40px);
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        position: relative
    }

    form-header {
        margin: 10px 0;
        padding-bottom: 10px;
        /* width: 180px; */
        color: #78788c;
        border-bottom: 3px solid #78788c
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        background: none;
        outline: none;
        resize: none;
        border: 0;
        font-family: 'Montserrat', sans-serif;
        transition: all .3s;
        border-bottom: 2px solid #bebed2
    }

    input:focus {
        border-bottom: 2px solid #78788c
    }

    /* 
    p:before {
        content: attr(type);
        display: block;
        margin: 28px 0 0;
        font-size: 14px;
        color: #5a5a5a
    } */

    .checkedsub {
        float: right;
        padding: 8px 12px;
        margin: 8px 0 0;
        font-family: 'Montserrat', sans-serif;
        border: 2px solid #78788c;
        background: 0;
        color: #5a5a6e;
        cursor: pointer;
        transition: all .3s
    }

    .checkedsub:hover {
        background: #78788c;
        color: #fff
    }
</style>