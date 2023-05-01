
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>Kam-Ratan</title>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <!--    <link href="img/favicon.png" rel="icon" type="image/x-icon">-->
        <style>
            *, :before, :after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            * {
                margin: 0;
                padding: 0;
                outline: 0;
                border: none;
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            img {
                display: block;
                max-width: 100%;
            }

            body {
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
                line-height: 1;
                background: #000;
                color: #fff;
            }

            .wrapper {
                overflow: hidden;
            }

            .container {
                width: 970px;
                margin: 0 auto;
                position: relative;
                z-index: 1;
            }

            .timer {
                font-size: 0;
                max-width: 268px;
                margin: 0 auto;
            }

            .timer__item {
                display: inline-block;
                vertical-align: top;
                width: 33.33%;
                position: relative;
            }

            .timer__item:not(:last-child):after {
                content: ':';
                position: absolute;
                right: 0;
                top: -2px;
                font-size: 35px;
            }

            .timer__item div {
                font-size: 35px;
                text-align: center;
            }

            .present {
                padding: 35px 0;
                position: relative;
                background: url(img1/58-fucking-sex-hd-best-image-download.jpg) center no-repeat;
            }

            .present:before {
                content: '';
                width: 894px;
                height: 1342px;
                
                position: absolute;
                top: -50%;
                left: 50%;
                margin: -55px 0 0 -1000px;
                opacity: .7;
            }

            .container_logo-mod {
                padding: 0 50px 0 110px;
            }

            .logo {
                font-size: 34px;
                font-weight: 900;
                line-height: 0;
                -webkit-transform-origin: 100% 0;
                -moz-transform-origin: 100% 0;
                -ms-transform-origin: 100% 0;
                -o-transform-origin: 100% 0;
                transform-origin: 100% 0;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                text-transform: uppercase;
                position: absolute;
                top: 0;
                left: -22%;
                margin: 10px 0 0 0px;
            }

            .present__title {
                font-size: 47px;
                font-weight: bold;
                padding: 5px 0 20px;
            }

            .clr-mod {
                color: #ffba00;
            }

            .clr-mod_02 {
                color: #d92b2b;
            }

            .clr-mod_03 {
                color: #000;
            }

            .present__wrap {
                display: table;
                width: 100%;
            }

            .present__cell {
                display: table-cell;
                vertical-align: top;
            }

            .present__text {
                font-size: 19px;
                line-height: 2;
                padding: 0 0 30px;
                width: 75%;
            }

            .advantage {
                width: 75%;
                font-size: 19px;
                font-weight: bold;
                list-style: none;
                padding: 0 0 30px;
                position: relative;
                z-index: 2;
            }

            .advantage__item {
                padding: 10px 0 15px 55px;
                position: relative;
            }

            .advantage__item:before {
                content: '';
                width: 40px;
                height: 40px;
                border: 3px solid #fdb900;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                display: block;
                position: absolute;
                left: 0;
                top: 0;
            }

            .advantage__item:after {
                content: '';
                width: 16px;
                height: 10px;
                border: 3px solid transparent;
                border-left: 3px solid #fdb900;
                border-bottom: 3px solid #fdb900;
                display: block;
                position: absolute;
                left: 0;
                top: 0;
                margin: 14px 0 0 12px;
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            button {
                font-size: 23px;
                text-transform: uppercase;
                font-weight: bold;
                padding: 20px;
                background: #ff1e19;
                display: table;
                margin: 0 auto;
                color: #ffffff;
                cursor: pointer;
                letter-spacing: 0px;
                position: relative;
                z-index: 5;
                text-shadow: 0 0 0 #000;
                overflow: hidden;
                -webkit-transition: color .3s;
                -moz-transition: color .3s;
                -ms-transition: color .3s;
                -o-transition: color .3s;
                transition: color .3s;
            }

            .button__wrap {
                position: relative;
                z-index: 2;
            }

            button:before {
                content: '';
                width: 98%;
                height: 96%;
                position: absolute;
                top: 2%;
                left: 1%;
                box-shadow: inset 0 0 0 0 #000;
                -webkit-transition: box-shadow .2s;
                -moz-transition: box-shadow .2s;
                -o-transition: box-shadow .2s;
                transition: box-shadow .2s;
                z-index: 1;
            }

            button:after {
                content: '';
                width: 98%;
                height: 96%;
                position: absolute;
                top: 2%;
                left: 1%;
                background: #ffba00;
                -webkit-transform-origin: top;
                -moz-transform-origin: top;
                -ms-transform-origin: top;
                -o-transform-origin: top;
                transform-origin: top;
                -webkit-transform: scale(1, 0);
                -moz-transform: scale(1, 0);
                -ms-transform: scale(1, 0);
                -o-transform: scale(1, 0);
                transform: scale(1, 0);
                -webkit-transition: transform .3s;
                -moz-transition: transform .3s;
                -ms-transition: transform .3s;
                -o-transition: transform .3s;
                transition: transform .3s;
            }

            button:hover {
                color: #000;
            }

            button:hover:before {
                box-shadow: inset 0 0 7px 3px #000;
            }

            button:hover:after {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1);
            }

            .subbutton {
                letter-spacing: 1px;
                margin: 0;
            }

            .sale {
                min-width: 125px;
                min-height: 125px;
                margin: 0 30px 0 auto;
                font-size: 29px;
                font-weight: bold;
                text-transform: uppercase;
                background: url(img/sale-bg.png) center no-repeat;
                position: relative;
                z-index: 1;
                display: table;
            }

            .sale__wrap {
                display: table-cell;
                vertical-align: middle;
                text-align: center;
            }

            .sale:after {
                content: '';
                width: 260px;
                height: 454px;
                background: url(img1/kam-ratan.png) center no-repeat;
                position: absolute;
                top: 100%;
                right: 0;
                margin: -33px -13px 0 0;
            }

            .sale:before {
                content: '';
                width: 244px;
                height: 436px;
                background: url(img/product-tube-shadow.png) center no-repeat;
                position: absolute;
                top: 100%;
                right: 0;
                margin: -60px 0 0 0;
            }

            .sale__text {
                display: block;
                font-size: 1.3rem;
                margin-top: 16px;
            }

            .sale__value {
                font-size: 46px;
                position: relative;
            }

            .sale__value:after {
                content: '%';
                font-size: 29px;
                font-weight: 400;
                line-height: 1.43;
                position: absolute;
                left: 100%;
                top: 0;
                margin: 0 0 0 5px;
            }

            .sale_text {
                font-weight: 400;
                font-size: 12px;
            }

            form {
                width: 265px;
            }

            .form__wrap {
                background: #ececec;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                line-height: 1.3;
                padding: 20px;
                margin: 20px 0 20px;
                position: relative;
                z-index: 1;
            }

            .form__title {
                font-size: 20px;
                color: #000;
                padding: 0 0 10px;
                text-align: center;
            }

            .form__field {
                background: #ffffff;
                margin: 10px 0;
                border: 1px solid #a6a6a6;
                position: relative;
            }

            .form__field input {
                font-size: 14px;
                padding: 10px;
                width: 100%;
                background-color: transparent;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                position: relative;
                z-index: 1;
                line-height: 1;
            }

            .price {
                padding: 10px 0 0;
            }

            .price__old {
                font-size: 20px;
                color: #000;
            }

            .price__old span {
                text-decoration: line-through;
            }

            .price__new {
                font-size: 30px;
                font-weight: bold;
                color: #a62121;
                padding: 10px 0 0;
            }

            .statistic {
                padding: 40px 0;
                background: url(img1/shutterstock_570195187-1-1.jpg) center no-repeat;
            }

            .subtitle {
                font-size: 35px;
                font-weight: bold;
                padding: 20px 10px;
                text-align: center;
                line-height: 1.3;
            }

            .subtitle_mod {
                font-weight: 400;
                padding: 0 0 50px;
            }

            .subtitle_l-mod {
                text-align: left;
            }

            .statistic__photo {
                float: left;
                margin: 0 -90px 0 0;
                position: relative;
            }

            .statistic__photo:after {
                content: '';
                width: 100%;
                height: 100%;
                background: #535353;
                position: absolute;
                top: 30px;
                left: 100px;
            }

            .statistic__photo img {
                position: relative;
                z-index: 1;
                -webkit-box-shadow: 10px 0 60px 2px #000;
                -moz-box-shadow: 10px 0 60px 2px #000;
                box-shadow: 10px 0 60px 2px #000;
            }

            .statistic__wrap {
                background: #fff;
                padding: 10px 40px 30px;
                color: #000;
                width: 52%;
                margin: 90px 0px 0 auto;
                position: relative;
                z-index: 1;
                line-height: 1.3;
            }

            .statistic__text {
                font-size: 20px;
                line-height: 1.8;
            }

            .statistic__text:before {
                content: '';
                width: 100px;
                border: 1px solid #e42929;
                display: block;
                margin: 0 0 10px;
            }

            .promo {
                padding: 40px 0;
                position: relative;
            }

            .composition {
                padding: 70px 0 120px;
                position: relative;
            }

            .composition:before {
                content: '';
                width: 848px;
                height: 976px;
                background: url(img1/180601-men-organize-sex-for-wives-01.jpg) center no-repeat;
                position: absolute;
                bottom: 0;
                left: 120px;
                opacity: .3;
            }

            .title {
                font-size: 39px;
                text-align: center;
                line-height: 1.3;
                font-weight: bold;
                position: relative;
                z-index: 1;
            }

            .title_p-mod {
                padding: 0 10px;
            }

            .composition__wrap {
                display: table;
                width: 100%;
                table-layout: fixed;
                padding: 90px 0 50px;
            }

            .composition__cell {
                display: table-cell;
                vertical-align: top;
                padding: 0 20px 0 10px;
                position: relative;
            }

            .composition__cell:before {
                content: '';
                width: 146px;
                height: 146px;
                display: block;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                margin: 0 0 40px;
            }

            .composition__item_01:before {
                background: url(img1/ashwagandha-root-500x500-modified.png) center no-repeat;
            }

            .composition__item_02:before {
                background: url(img1/kali-musli-500x500-modified-100x100.png) center no-repeat;
            }

            .composition__item_03:before {
                background: url(img1/Shatavari-raw-roots-1-modified.png) center no-repeat;
            }

            .composition__title {
                font-weight: bold;
                font-size: 26px;
                line-height: 1.3;
                padding: 20px 0;
                width: 70%;
            }

            .composition__title:after {
                content: '';
                width: 70px;
                border-top: 1px solid #e42929;
                display: block;
                margin: 10px 0 0;
            }

            .composition__text {
                line-height: 1.7;
            }

            .effect {
                padding: 80px 0 90px;
                background: #eeeeee;
                position: relative;
                z-index: 2;
                 background: url(img1/1016.jpg) top center no-repeat;
            }

            .subtitle_w-mod {
                width: 70%;
                margin: 0 auto;
            }

            .effect__wrap {
                display: table;
                width: 75%;
                padding: 0 15px 0 35px;
                margin: 0 auto;
                table-layout: fixed;
               
                height: 465px;
            }

            .effect__cell {
                display: table-cell;
                vertical-align: bottom;
            }

            .effect__pict img {
                margin: 0 auto;
            }

            .effect__data {
                display: table;
                padding: 10px;
                background: #000;
                margin: 45px auto 0;
            }

            .effect__parameter {
                font-size: 18px;
                font-weight: bold;
            }

            .effect__parameter:after {
                content: '';
                width: 50px;
                border-top: 1px solid #e42929;
                display: block;
                margin: 15px 0;
            }

            .effect__parameter:last-child:after {
                display: none;
            }

            .effect__parameter span {
                display: block;
            }

            .use {
                padding: 110px 0;
                position: relative;
            }

            .use:before {
                content: '';
                width: 2000px;
                height: 662px;
                background: url(img/bg-03.jpg) center bottom no-repeat;
                position: absolute;
                bottom: 0;
                left: 50%;
                margin: 0 0 0 -1000px;
            }

            .use__wrap {
                display: table;
                width: 95%;
                margin: 0 auto;
                table-layout: fixed;
                padding: 70px 0 0;
            }

            .use__cell {
                display: table-cell;
                vertical-align: top;
                position: relative;
                text-align: center;
                padding: 0 10px;
            }

            .use__cell:before {
                content: '';
                width: 146px;
                height: 146px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                display: block;
                margin: 0 auto;
            }

            .use__item_01:before {
                background: url(img/use-pict-01.png) center no-repeat;
                background-size: contain;
            }

            .use__item_02:before {
                background: url(img/use-pict-02.png) center no-repeat;
                background-size: contain;
            }

            .use__item_03:before {
                background: url(img/use-pict-03.png) center no-repeat;
                background-size: contain;
            }

            .use__title {
                font-size: 26px;
                font-weight: bold;
                line-height: 1.3;
                padding: 20px 0;
            }

            .use__title:after {
                content: '';
                width: 70px;
                border-top: 1px solid #e42929;
                display: block;
                margin: 10px auto 0;
            }

            .use__text {
                line-height: 1.7;
                width: 85%;
                margin: 0 auto;
            }

            .review {
                padding: 90px 0 70px;
                position: relative;
                z-index: 2;
                background: #fff;
                color: #000;
            }

            .review:before {
                content: '';
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: url(img1/1016.jpg) center no-repeat;
                -webkit-background-size: cover;
                background-size: cover;
                opacity: .17;
                position: absolute;
            }

            .user {
                padding: 50px;
                display: table;
                width: 100%;
            }

            .user:before {
                content: '';
                width: 146px;
                height: 146px;
                display: block;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                margin: 0 20px 0 0;
            }

            .user_01:before {
                background: url(img/user-ava-01.jpg) center no-repeat;
            }

            .user_02:before {
                background: url(img/user-ava-02.jpg) center no-repeat;
            }

            .user_03:before {
                background: url(img/user-ava-03.html) center no-repeat;
            }

            .user__data {
                display: table-cell;
                vertical-align: top;
                padding: 0 0 0 20px;
                border-left: 1px solid #ff0000;
            }

            .user__info {
                font-size: 24px;
                padding: 0 0 15px;
            }

            .user__name {
                font-weight: bold;
            }

            .user__age {
            }

            .review__text {
                line-height: 1.7;
            }

            .order {
                padding: 55px 0 160px;
                position: relative;
            }

            .order .timer {
                max-width: 265px;
                margin-top: 20px;
            }

            .order:before {
                content: '';
                background: url(img1/75303-12-zeichen-dass-du-sex-mit-dem-richtigen-hast,id=2b4c795b,b=cosmopolitan,w=1100,rm=sk.jpeg) right top no-repeat;
                -webkit-background-size: contain;
                background-size: contain;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                opacity: .4;
            }

            .order__wrap {
                display: table;
                width: 65%;
                margin: 0 auto;
                direction: rtl;
            }

            .order__cell {
                display: table-cell;
                vertical-align: top;
                direction: ltr;
            }

            .sale__order {
                margin: 30px 10px 0 0;
            }

            .sale__order:before {
                display: none;
            }

            .sale__order:after {
                display: none;
            }

            .product__order {
                width: 260px;
            }

            .product__order:after {
                content: '';
                width: 368px;
                height: 504px;
                background: url(img1/kam-ratan.png) center no-repeat;
                position: absolute;
                bottom: 0;
                right: 0;
                margin: 0 165px -85px 0;
            }

            .order__btn {
                margin: 0 auto;
            }

            .effect__arrow {
                width: 100px;
                height: 8px;
                background: -webkit-gradient(linear, right top, left top, color-stop(50%, #ff2a00), to(transparent));
                background: -webkit-linear-gradient(right, #ff2a00 50%, transparent);
                background: -moz-linear-gradient(right, #ff2a00 50%, transparent);
                background: -o-linear-gradient(right, #ff2a00 50%, transparent);
                background: linear-gradient(to left, #ff2a00 50%, transparent);
                -webkit-transform: rotate(-12deg);
                -moz-transform: rotate(-12deg);
                -ms-transform: rotate(-12deg);
                -o-transform: rotate(-12deg);
                transform: rotate(-12deg);
                transform-origin: left bottom;
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -25px 0 0 -320px;
            }

            .effect__arrow:after {
                content: '';
                width: 24px;
                height: 24px;
                border: 6px solid transparent;
                border-bottom-color: red;
                border-right-color: red;
                display: block;
                position: absolute;
                right: 0;
                top: 0;
                margin: -8px 0 0 0;
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            .glare {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }

            .glare__item {
                width: 1px;
                height: 1px;
                background: rgba(126, 126, 126, .7);
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                position: absolute;
            }

            .glare__item_01 {
                top: 0;
                left: 0;
                -webkit-box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
            }

            .glare__item_02 {
                top: -10%;
                right: 30%;
                -webkit-box-shadow: 0 0 430px 330px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 430px 330px rgba(126, 126, 126, .7);
                box-shadow: 0 0 430px 330px rgba(126, 126, 126, .7);
            }

            .glare__item_03 {
                top: 60%;
                left: 30%;
                -webkit-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                z-index: 1;
            }

            .glare__item_04 {
                top: 45%;
                left: 45%;
                -webkit-box-shadow: 0 0 480px 380px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 480px 380px rgba(126, 126, 126, .7);
                box-shadow: 0 0 480px 380px rgba(126, 126, 126, .7);
                z-index: 1;
            }

            .glare__item_05 {
                top: 0;
                left: 55%;
                -webkit-box-shadow: 0 0 530px 430px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 530px 430px rgba(126, 126, 126, .7);
                box-shadow: 0 0 530px 430px rgba(126, 126, 126, .7);
            }

            .glare__item_06 {
                top: 10%;
                left: 40%;
                -webkit-box-shadow: 0 0 480px 380px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 480px 380px rgba(126, 126, 126, .7);
                box-shadow: 0 0 480px 380px rgba(126, 126, 126, .7);
            }

            .glare__item_07 {
                top: 25%;
                right: 0;
                -webkit-box-shadow: 0 0 330px 230px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 330px 230px rgba(126, 126, 126, .7);
                box-shadow: 0 0 330px 230px rgba(126, 126, 126, .7);
            }

            .glare__item_08 {
                bottom: -10%;
                left: 5%;
                -webkit-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                -moz-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
            }

            .bx-pager.bx-default-pager {
                text-align: center;
            }

            .bx-pager-item {
                margin: 0 10px;
                display: inline-block;
                font-size: 0;
            }

            .bx-pager-link {
                display: block;
                border: 1px solid #000;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: transparent;
            }

            .active {
                background: #000;
            }

            .experts__item {
                position: relative;
                margin-bottom: 100px;
                padding-left: 345px;
                min-height: 230px;
            }

/*            .experts__item-image-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                margin: auto;
                background-image: url(img/retina.png);
                background-position: 0 0;
                width: 310px;
                height: 310px;
            }*/

            .experts__item-image {
                position: absolute;
                left: 42px;
                bottom: 2px;
                border: none;
                width: 240px;
            }

            .experts__item-title {
                position: absolute;
                right: 27px;
                bottom: -50px;
                text-align: right;
            }

            .experts__item-name {
                font-size: 20px;
                font-weight: 700;
                line-height: 1.2;
                text-transform: uppercase;
                color: #fc0326;
            }

            .experts__item-post {
                font-size: 20px;
                font-weight: 700;
                line-height: 1.1;
            }

            .experts__item-text {
                position: relative;
                padding: 52px 40px 24px 60px;
                font-size: 20px;
                line-height: 1.2;
                color: #fff;
/*                background-image: url(img/expert1-bg.png);*/
                background-repeat: no-repeat;
                -moz-background-size: 100% 100%;
                background-size: 100% 100%;
            }

            .experts__item-text:after, .experts__item-text:before {
                position: absolute;
                top: 0;
                bottom: 0;
                margin: auto;
                content: '';
                background-color: #1c98d2;
            }

            .experts__item-text:before {
                position: absolute;
                left: -23px;
                width: 40px;
                height: 3px;
            }

            .experts__item-text p {
                margin-bottom: 25px;
            }

            .experts__item-text p:last-child {
                margin-bottom: 0;
            }

            .experts__item-text span {
                font-weight: 700;
            }

/*            .experts__item:nth-child(even) {
                padding-right: 345px;
                padding-left: 0;
                margin-top: 70px;
            }*/

            .experts__item:last-child {
                margin-bottom: 0;
            }

            .experts__item:nth-child(even) .experts__item-image-wrapper {
                right: 0;
                left: auto;
                bottom: 2px;
            }

/*            .experts__item:nth-child(even) .experts__item-image-wrapper {
                background-image: url(img/retina.png);
                background-position: -318px 0;
                width: 310px;
                height: 310px;
            }

            .experts__item:nth-child(even) .experts__item-image {
                bottom: 4px;
                left: 25px;
            }

            .experts__item:nth-child(even) .experts__item-title {
                right: auto;
                left: 27px;
                text-align: left;
            }*/

/*            .experts__item:nth-child(even) .experts__item-text {
                background-image: url(img/expert2-bg.png);
            }*/

            .experts__item:nth-child(even) .experts__item-text:before {
                right: -40px;
                left: auto;
            }

            .experts__item:nth-child(even) .experts__item-text:after {
                right: -41px;
                left: auto;
            }

            .experts__item-text:after {
                left: -25px;
                width: 10px;
                height: 10px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
            }

            @media (max-width: 990px) {
                .experts__item-text:before, .experts__item-text:after {
                    display: none;
                }

                .experts__item {
                    margin-bottom: 0;
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                    min-height: auto;
                }

                .experts__item-text {
                    background-color: #1c98d2;
                    padding: 15px;
                }

                .experts__item .experts__item-image-wrapper {
                    width: 170px !important;
                    top: -170px;
                    bottom: inherit;
                }

                .experts__item:nth-child(even) .experts__item-image-wrapper {
                    bottom: inherit;
                    right: 0;
                    top: -250px;
                }

                .experts__item-image {
                    left: 12px;
                }

                .experts__item:nth-child(even) .experts__item-image {
                    left: 0;
                }

                .experts__item .experts__item-title {
                    top: 70px;
                    width: 110px;
                    right: -140px;
                    text-align: left;
                }

                .experts__item:nth-child(even) .experts__item-title {
                    right: auto;
                    top: 140px;
                    left: -130px;
                }

                .experts__item {
                    margin-top: 256px !important;
                }

                .experts__item-image {
                    bottom: 92px;
                }

                .container {
                    width: 768px;
                    padding: 0 10px;
                }

                .present:before {
                    margin: 230px 0 0 -447px;
                }

                .present__text {
                    width: 65%;
                }

                .logo {
                    position: relative;
                    top: 0;
                    left: 0;
                    -webkit-transform: rotate(0);
                    -moz-transform: rotate(0);
                    -ms-transform: rotate(0);
                    -o-transform: rotate(0);
                    transform: rotate(0);
                    margin: 0;
                    line-height: 1;
                    text-align: center;
                }

                .present__wrap {
                    display: block;
                }

                .present__cell {
                    display: block;
                }

                /*.present__title:before {*/
                /*    content: '';*/
                /*    width: 140px;*/
                /*    height: 100px;*/
                /*    display: block;*/
                /*    float: right;*/
                /*}*/
                .sale {
                    position: absolute;
                    top: 75px;
                    right: 0;
                }

                .subbutton {
                    margin: 0 auto 40px;
                }

                form {
                    margin: 20px auto;
                }

                .statistic__photo {
                    float: none;
                    margin: 0 auto;
                    display: table;
                }

                .statistic__wrap {
                    margin: -35px auto 0;
                }

                .effect__wrap {
                    width: 100%;
                }

                .composition {
                    padding: 35px 0 60px;
                }

                .composition__wrap {
                    padding: 90px 20px 50px;
                }

                .composition__title {
                    font-size: 22px;
                }

                .effect {
                    padding: 35px 0 45px;
                }

                .use {
                    padding: 45px 0;
                }

                .use:before {
                    -webkit-background-size: 60%;
                    background-size: 60%;
                }

                .use__wrap {
                    width: 100%;
                    padding: 35px 0 0;
                }

                .use__title {
                    font-size: 24px;
                }

                .product__order:after {
                    margin: 0 0 -50px 0;
                }

                .sale__order {
                    position: absolute;
                    top: 100px;
                    right: 50%;
                    margin: 40px -170px 0 0;
                }

                .subtitle {
                    font-size: 22px;
                }
            }

            @media (max-width: 767px) {
                .present:before {
                    margin: 70px 0 0 -447px;
                    background-size: 65%;
                }

                .container {
                    width: auto;
                    padding: 0 10px;
                }

                .container_logo-mod {
                    padding: 0 15px;
                }

                .logo {
                    font-size: 50px;
                    text-align: left;
                    margin-top: -25px;
                }

                .title {
                    font-size: 26px;
                }

                .sale {
                    top: 45px;
                    background-size: 80%;
                    font-size: 25px;
                    margin-right: 5px;
                }

                .sale__value {
                    font-size: 46px;
                }

                .sale__value:after {
                    font-size: 19px;
                    margin: 0;
                }

                .sale_text {
                    font-size: 12px;
                    margin-left: -5px;
                }

                .present__text {
                    position: relative;
                    z-index: 2;
                    width: 65%;
                    line-height: 1.43;
                }

                .advantage {
                    width: 65%;
                }

                .present__title {
                    font-size: 31px;
                }

                .present__title:before {
                    width: 105px;
                    height: 60px;
                }

                .sale:before {
                    margin: -45px -15px 0 0;
                }

                .sale:after {
                    margin: -55px 0 0 0;
                    background-position: right center;
                }

                .statistic {
                    padding: 15px 0;
                }

                .statistic__wrap {
                    width: 75%;
                }

                .composition:before {
                    background-position: top center;
                    background-size: 60%;
                    bottom: auto;
                    top: 0;
                    left: 50%;
                    margin: 0 0 0 -424px;
                }

                .composition:after {
                    content: '';
                    width: 900px;
                    height: 900px;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    border-radius: 50%;
                    background: -webkit-radial-gradient(circle, transparent 50%, #000 60%);
                    background: -moz-radial-gradient(circle, transparent 50%, #000 60%);
                    background: -o-radial-gradient(circle, transparent 50%, #000 60%);
                    background: radial-gradient(circle, transparent 50%, #000 60%);
                    position: absolute;
                    top: 0;
                    left: 50%;
                    margin: -260px 0 0 -450px;
                }

                .composition__wrap {
                    padding: 20px 0;
                }

                .composition__cell {
                    display: block;
                    padding: 15px 30px 15px 0;
                }

                .composition__cell:before {
                    margin: 0;
                    float: right;
                }

                .effect__wrap {
                    padding: 0;
                }

                .effect__cell_mob {
                    display: none;
                }

                .effect__parameter {
                    font-size: 16px;
                }

                .use__cell {
                    display: block;
                }

                .user {
                    padding: 30px 0 10px;
                    display: block;
                }

                .user:before {
                    float: left;
                    width: 60px;
                    height: 60px;
                    background-size: 100%;
                    margin: 0 10px 0 0;
                }

                .user__data {
                    display: block;
                    border: none;
                    padding: 0;
                }

                .user__info {
                    font-size: 16px;
                    padding: 0 0 10px;
                }

                .review {
                    padding: 30px 0;
                }

                .review__text {
                    line-height: 1.43;
                }

                .order {
                    padding: 60px 0 40px;
                }

                .order__wrap {
                    width: 70%;
                    padding: 0 15px;
                }

                .sale__order {
                    margin: 20px -195px 0 0;
                }

                .product__order:after {
                    background: url(img1/kam-ratan.png) center no-repeat;
                    margin: 0 -40px 0 0;
                }

                .subtitle_w-mod {
                    width: 90%;
                }

                .clr-mod_02 {
                    display: block;
                }

                .glare__item_01 {
                    -webkit-box-shadow: 0 0 180px 80px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 180px 80px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 180px 80px rgba(126, 126, 126, .7);
                }

                .glare__item_02 {
                    -webkit-box-shadow: 0 0 330px 230px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 330px 230px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 330px 230px rgba(126, 126, 126, .7);
                }

                .glare__item_03 {
                    -webkit-box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                    z-index: 1;
                }

                .glare__item_04 {
                    -webkit-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                    z-index: 1;
                }

                .glare__item_05 {
                    top: 0;
                    left: 55%;
                    -webkit-box-shadow: 0 0 430px 330px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 430px 330px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 430px 330px rgba(126, 126, 126, .7);
                }

                .glare__item_06 {
                    -webkit-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 380px 280px rgba(126, 126, 126, .7);
                }

                .glare__item_07 {
                    -webkit-box-shadow: 0 0 230px 130px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 230px 130px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 230px 130px rgba(126, 126, 126, .7);
                }

                .glare__item_08 {
                    -webkit-box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                    -moz-box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                    box-shadow: 0 0 280px 180px rgba(126, 126, 126, .7);
                }

                .use__cell {
                    -webkit-transition: opacity .2s;
                    -moz-transition: opacity .2s;
                    -ms-transition: opacity .2s;
                    -o-transition: opacity .2s;
                    transition: opacity .2s;
                }

            }

            @media (max-width: 479px) {
                .effect__wrap {
                    padding: 0 30px;
                    width: 300px;
                   
                    height: 310px;
                }

                .effect__pict img {
                    width: 50px;
                }

                .effect__pict_mod img {
                    width: 65px;
                }

                .effect__data {
                    margin: 20px auto 0;
                }

                .sale {
                    right: -15px;
                    top: 110px;
                }

                .sale:before {
                    margin: -30px -25px 0 0;
                    background-size: 50%;
                }

                .sale:after {
                    margin: -112px -45px 0 0;
                    background-size: 50%;
                    background-position: center;
                }

                .present__title:before {
                    width: 85px;
                }

                .advantage, .present__text {
                    width: calc(100% - 136px);
                }

                .present__text {
                    font-size: 16px;
                    line-height: 1.2;
                }

                .advantage {
                    font-size: 16px;
                }

                button {
                    padding: 15px 25px;
                    font-size: 22px;
                }

                .statistic__wrap {
                    width: 90%;
                    padding: 0 10px 25px;
                }

                .statistic__text {
                    line-height: 1.3;
                    font-size: 16px;
                    width: 80%;
                }

                .promo {
                    padding: 30px 0;
                }

                .title {
                    font-size: 20px;
                    text-align: left;
                }

                .title_mob {
                    text-align: center;
                }

                .composition__cell:before {
                    width: 60px;
                    height: 60px;
                    background-size: 100%;
                }

                .composition__title {
                    padding: 5px 0 15px;
                }

                .composition__text span {
                    display: none;
                }

                .title_order-mob {
                    font-size: 25px;
                    width: 65%;
                    margin: 0;
                    padding: 0 0 35px;
                }

                .sale__order {
                    right: 0;
                    top: -60px;
                    margin: 0;
                }

                .product__order:after {
                    margin-top: 0px;
                    margin-right: -90px;
                    margin-bottom: -60px;
                    margin-left: 0px;
                    background-size: 30%;
                    bottom: 39%;
                }

                .order:before {
                    background-position: center top;
                    -webkit-background-size: auto 70%;
                    background-size: auto 70%;
                }

                .order__wrap, .order__cell {
                    display: block;
                    width: auto;
                    margin-top: 55px;
                }

                .order__btn {
                    margin: 0 auto;
                }

                .effect__arrow {
                    width: 100px;
                    height: 8px;
                    background: -webkit-gradient(linear, right top, left top, color-stop(50%, #ff2a00), to(transparent));
                    background: -webkit-linear-gradient(right, #ff2a00 50%, transparent);
                    background: -moz-linear-gradient(right, #ff2a00 50%, transparent);
                    background: -o-linear-gradient(right, #ff2a00 50%, transparent);
                    background: linear-gradient(to left, #ff2a00 50%, transparent);
                    -webkit-transform: rotate(-20deg);
                    -moz-transform: rotate(-20deg);
                    -ms-transform: rotate(-20deg);
                    -o-transform: rotate(-20deg);
                    transform: rotate(-20deg);
                    transform-origin: left bottom;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    margin: -25px 0 0 -160px;
                }

                .effect__arrow:after {
                    content: '';
                    width: 24px;
                    height: 24px;
                    border: 6px solid transparent;
                    border-bottom-color: red;
                    border-right-color: red;
                    display: block;
                    position: absolute;
                    right: 0;
                    top: 0;
                    margin: -8px 0 0 0;
                    -webkit-transform: rotate(-45deg);
                    -moz-transform: rotate(-45deg);
                    -ms-transform: rotate(-45deg);
                    -o-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
            }

            .ac_footer {
                position: relative;
                text-align: center;
                overflow: hidden;
                padding: 50px 0;
                color: #A12000;
            }

            .ac_footer p {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <section class="present">
                <div class="glare">
                    <span class="glare__item glare__item_01 glare__slow"></span>
                    <span class="glare__item glare__item_02 glare__fast"></span>
                </div>
                <div class="container container_logo-mod">
                    <div class="logo"> Kam-Ratan</div>
                    <div class="present__title clr-mod">  और भी बड़ा लिंग प्राप्त करें</div>
                    <div class="present__wrap">
                        <div class="present__cell">
                            <div class="present__text"> 
                                <b> कोई फर्क नहीं पड़ता कि आप कितने साल के हैं, </b> आपकी यौन समस्याओं को दूर करने में आपकी मदद करने के लिए Kam-Ratan हमेशा मौजूद रहेगा।
                            </div>
                            <ul class="advantage">
                                <li class="advantage__item"> पाए लोहे जैसी ताकत </li>
                                <li class="advantage__item"> अपनी कामेच्छा वापस पाएं</li>
                                <li class="advantage__item"> अपने साथी को प्रभावित करें</li>
                                <li class="advantage__item" style="width:300px"> उच्च स्तर का टेस्टोस्टेरोन बनाएं</li>
                            </ul>
                            <button class="subbutton">
                                <span class="button__wrap">
                                    <span class="button__text"> अभी ऑर्डर करें </span>
                                </span>
                            </button>
                        </div>
                        <div class="present__cell">
                            <div class="product">
                                <div class="sale">
                                    <div class="sale__wrap">
                                        <span class="sale__text"> डिस्काउंट  </span>
                                        <span class="sale__value">50</span>
                                        <span class="sale_text"> off </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="present__cell">
                            <div class="timer">
                                <div class="timer__item">
                                    <div class="hours"></div>
                                </div>
                                <div class="timer__item">
                                    <div class="min"></div>
                                </div>
                                <div class="timer__item">
                                    <div class="sec"></div>
                                </div>
                            </div>
                             <form action="" enctype="multipart/form-data" class="orderForm order__form order_form" id="order_form"
                                  method="post" name="frmContact"
                                  onsubmit="validateform(this); return false;">
                                <div class="form__wrap">
                                    <div class="form__field">
                                        <input name="userName" required="required" placeholder="नाम" type="text" value="" />
                                    </div>
                                    <div class="form__field">
                                        <input class="only_number" name="subject" minlength="5" required="required" value=""
                                               placeholder="फ़ोन नंबर" type="text" maxlength="17"/>
                                    </div>
                                    <div class="form__field">
                                        <input  name="userEmail"  required="required" value=""
                                               placeholder="पूरा पता" type="text" />
                                    </div>

                                </div>
                                <button class="js_submit order__btn" name="send" value=" अभी ऑर्डर करें ">
                                    <span class="button__wrap">
                                        <span class="button__text"> ऑर्डर करें </span>
                                    </span>
                                </button>
                                 <div class="wpcf7-response-output" aria-hidden="true">
                                    <div id="statusMessage">
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
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="statistic">
                <div class="container">
                    <div class="subtitle subtitle_mod"> अपने सेक्स को <span class="clr-mod">  नॉन स्टॉप परमानंद </span> में
                        बदलें!
                    </div>
<!--                    <div class="statistic__photo">
                        <video playsinline loop autoplay preload="auto" muted="muted"
                               style="position:relative;z-index:1;width:100%">
                            <source src="img/1.mp4" type='video/mp4'/>
                        </video>
                    </div>-->
                    <div class="statistic__wrap">
                        <div class="subtitle subtitle_l-mod">
                             
                           74% पुरुष कम कामेच्छा से पीड़ित हैं और लिंग काफ़ी बड़ा नहीं है
समसामयिक नपुंसकता एक ऐसी समस्या है जिसका सामना हर आदमी एक निश्चित समय पर करता है,
                        </div>
                        <div class="statistic__text"> लेकिन समस्या की गंभीरता अस्थायी रूप से टूटने से भी आगे जा सकती है।.
                        </div><br>
                        <button class="subbutton">
                                <span class="button__wrap">
                                    <span class="button__text"> अभी ऑर्डर करें </span>
                                </span>
                            </button>
                    </div>

                </div>
            </section>
<!--            <section class="promo">
                <span class="glare__item glare__item_03 glare__slow"></span>
                <div class="container">
                    <div class="subtitle"> पुरुष स्वास्थ्य विशेषज्ञों की राय <span class="clr-mod"> अब </span>
                    </div>
                    <div class="experts__item">
                        <div class="experts__item-image-wrapper">
                            <img alt="" class="experts__item-image" src="img1/young-doctor-16088825.jpg">
                            <div class="experts__item-title">
                                <div class="experts__item-name"> रशीद अल मघराबी</div>
                                <div class="experts__item-post"> कामुकता विशेषज्ञ</div>
                            </div>
                        </div>
                        <div class="experts__item-text">
                            <p> बहुत कम लोग असली आँकड़ों के बारे में जानते हैं क्योंकि लिंग सर्जरी एक वर्जित मुद्दा है जिसकी
                                खुलेआम बात नहीं की जाती है। मध्य पूर्व में 10,000 से अधिक पुरुष, हर साल सर्जरी कराके अपने लिंग
                                का साइज़ और लंबाई बढ़ाते हैं। हम हमेशा चेतावनी देते हैं कि ये पुरुष सर्जरी कराके गंभीर स्वास्थ्य
                                जोखिम उठा रहे हैं, क्योंकि तंत्रिका तंतुओं का एक नेटवर्क पेनाइल कैविटीस के द्वारा प्रवेश करता
                                है। जब ये कैविटीस क्षतिग्रस्त हो जाती हैं, तो समस्याओं का खतरा बढ़ जाता है, जिसमें उत्तेजनाओं की
                                कमी, लिंग के खड़े होने में दर्द और बांझपन शामिल हैं। </p>
                            <p> सर्जरी की तुलना में,
                                <span>  Kam-Ratan </span> से कोई भी गंभीर दुष्प्रभाव नहीं होते है। यह शरीर को उत्तेजित
                                करके, लिंग में वसा ऊतक को प्राकृतिक रुप से इकठ्ठा कराता है।
                            </p>
                        </div>
                    </div>
                    <div class="experts__item">
                        <div class="experts__item-image-wrapper">
                            <img alt="" class="experts__item-image" src="img1/pexels-photo-3825586.jpeg">
                            <div class="experts__item-title">
                                <div class="experts__item-name"> नीरज अग्रवाल</div>
                                <div class="experts__item-post"> कामुकता विशेषज्ञ</div>
                            </div>
                        </div>
                        <div class="experts__item-text">
                            <p> योनि का सबसे संवेदनशील हिस्सा 2-3 सेमी गहराई में होता है। इसलिए लिंग का साइज़ महिला की इच्छा को
                                संतुष्ट करने में ख़ास भूमिका निभाता है, न कि लंबाई, जैसे हर कोई सोचता है। आपका लिंग जितना बड़ा और
                                कड़ा होगा, आपकी पत्नी उतनी ही ज्यादा संतुष्ट होंगी। <span></span>
                            </p>
                            <p> इससे भी ज्यादा, एक बड़ा लिंग संभोग के दौरान क्लाइटोरिस को आसानी से उत्तेजित करता है, इस प्रकार
                                चरमानंद की भावना और प्रभाव को कई गुना बढ़ाता है। </p>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="composition">
                <span class="glare__item glare__item_04 glare__fast"></span>
                <div class="container">
                    <div class="title title_p-mod">
                        <span class="clr-mod"> Kam-Ratan</span> को एक प्रभावी इरेक्शन बढ़ाने वाला बनाती है?
                    </div>
                    <div class="composition__wrap">
                        <div class="composition__cell composition__item_01">
                            <div class="composition__title"> अश्वगंधा</div>
                            <div class="composition__text">
                                <span>कामोत्तेजक होने के कारण, अश्वगंधा आपकी यौन इच्छा को बढ़ा सकता है।  </span>
                                 यह नाइट्रिक ऑक्साइड के उत्पादन को उत्तेजित करके और जननांगों में रक्त के प्रवाह को बढ़ाकर काम करता है।
                            </div>
                        </div>
                        <div class="composition__cell composition__item_02">
                            <div class="composition__title"> काली मुस्ली</div>
                            <div class="composition__text">
                                <span> काली मुसली का उपयोग शुक्राणु विकृति, कम शुक्राणुओं की संख्या,  </span> स्तंभन दोष, कम कामेच्छा और सहनशक्ति में वृद्धि के उपचार के लिए किया जाता है।.
                            </div>
                        </div>
                        <div class="composition__cell composition__item_03">
                            <div class="composition__title"> शतावरी </div>
                            <div class="composition__text"> पुरुष अंग के ऊतकों का निर्माण करके, इसकी लम्बाई और मोटाई को बढाता
                                है।
                                <span> इनकी बदौलत लिंग दोनों सामान्य और उत्तेजित अवस्था में बड़ा हो जाता है।  </span>
                            </div>
                        </div>
                    </div>
                    <button class="pre_toform">
                        <span class="button__wrap">
                            <a href="#ordera0">
                                <span class="button__text">  ऑर्डर करें  </span>
                            </a>
                        </span>
                    </button>
                </div>
            </section>
<!--            <section class="effect">
                <div class="container">
                    <div class="subtitle subtitle_w-mod clr-mod_03">  Kam-Ratan
                        <span class="clr-mod_02"> का इस्तेमाल करने के बाद नतीजे </span>
                    </div>
                    <div class="effect__subwrap">
                        <div class="effect__arrow"></div>
                        <div class="effect__wrap">
                            <div class="effect__cell">
                                <div class="effect__pict">
                                    <img src="img/dick-01.png">
                                </div>
                                <div class="effect__data">
                                    <div class="effect__parameter"> लंबाई <span> + 1.3 सेमी </span>
                                    </div>
                                    <div class="effect__parameter"> मोटाई <span> + 0.5 सेमी </span>
                                    </div>
                                </div>
                            </div>
                            <div class="effect__cell effect__cell_mob">
                                <div class="effect__pict">
                                    <img src="img/dick-02.png">
                                </div>
                                <div class="effect__data">
                                    <div class="effect__parameter"> लंबाई <span> + 2.5 सेमी </span>
                                    </div>
                                    <div class="effect__parameter"> मोटाई <span> +1.2 सेमी </span>
                                    </div>
                                </div>
                            </div>
                            <div class="effect__cell effect__cell_mob">
                                <div class="effect__pict">
                                    <img src="img/dick-03.png">
                                </div>
                                <div class="effect__data">
                                    <div class="effect__parameter"> लंबाई <span> + 3.2 सेमी </span>
                                    </div>
                                    <div class="effect__parameter"> मोटाई <span> +1.9 सेमी </span>
                                    </div>
                                </div>
                            </div>
                            <div class="effect__cell">
                                <div class="effect__pict effect__pict_mod">
                                    <img src="img/dick-04.png">
                                </div>
                                <div class="effect__data">
                                    <div class="effect__parameter"> लंबाई <span> +4.7 सेमी </span>
                                    </div>
                                    <div class="effect__parameter"> मोटाई <span> +2.6 सेमी </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="use">
                <span class="glare__item glare__item_05 glare__fast"></span>
                <div class="container">
                    <div class="title title_mob">
                        <span class="clr-mod"> Kam-Ratan </span> इस्तेमाल करने में आसान है
                    </div>
                    <div class="use__slider">
                        <div class="use__wrap">
                            <div class="use__cell use__item_01">
                                <div class="use__title"> रोजाना एक कैप्सूल लीजिये</div>
                                <div class="use__text"> दवा के सक्रिय तत्व लिंग की कैवर्नस बॉडीज को प्रभावित करके, इसकी लंबाई और
                                    मात्रा में बढ़ाते हैं।
                                </div>
                            </div>
                            <div class="use__cell use__item_02">
                                <div class="use__title"> सेक्स से पहले एक अतिरिक्त कैप्सूल लें</div>
                                <div class="use__text"> दवा उत्तेजना बढ़ाती है और लिंग में खून के बहाव को बढाती है। लिंग लम्बे
                                    समय तक खड़ा रहता है, और सेक्स 3 घंटे तक चलेगा।
                                </div>
                            </div>
                            <div class="use__cell use__item_03">
                                <div class="use__title"> अपने आप को कम मत आंकिये</div>
                                <div class="use__text"> आप जितना ज्यादा सेक्स करेंगे, आपका लिंग उतना ही ज्यादा उत्तेजित होगा और
                                    आपका लिंग मजबूती से खड़ा होगा।
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="review">
                <div class="container">
                    <div class="title"> ग्राहकों के रिव्यु</div>
                    <div class="review__slider slider">
                        <div class="slider__item">
                            <div class="user user_01">
                                <div class="user__data">
                                    <div class="user__info">
                                        <span class="user__name"> अनन्या </span> , <span class="user__age">35</span>
                                    </div>
                                    <div class="review__text"> मेरे पति और मुझे बिस्तर में कोई गंभीर समस्या नहीं थी, लेकिन उनके
                                        लिंग का साइज़ मुझे पूरी तरह से संतुष्ट करने के लिए काफी छोटा था। मुझे उसका साइज़ भी काफी
                                        नहीं लगा। हालाँकि मैंने इसे अपने पास राज़ रखा। मुझे लगा कि यह ख़ास नहीं था। फिर मैंने
                                        Kam-Ratan का ऑनलाइन रिव्यु देखा और इसे अपने पति के लिए ऑर्डर किया। भगवान, यह इस
                                        तरह से बहुत बढ़िया है!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="user user_02">
                                <div class="user__data">
                                    <div class="user__info">
                                        <span class="user__name"> अर्जुन </span> , <span class="user__age">28</span>
                                    </div>
                                    <div class="review__text"> मेरा पहला यौन अनुभव बहुत अच्छा नहीं था। अपनी जवानी से ही, मैंने
                                        अपने छोटे लिंग को लेकर असुरक्षित महसूस किया। मैंने 18 साल की उम्र में अपनी वर्जिनिटी खो
                                        दी थी। हताश होकर, मैं ऑनलाइन गया और Kam-Ratan के बहुत सारे अच्छे रिव्यु मिले,
                                        इसलिए मैंने एक डिब्बा खरीदा। मैंने अपनी अगली मुलाकात से पहले इसका इस्तेमाल किया। हमने
                                        रात भर शानदार सेक्स किया!!! मैंने पहली बार ऐसा कुछ अनुभव किया था। मैं अब Kam-Ratan
                                        का कोर्स ले रहा हूं। केवल 2 सप्ताह में, मेरा लिंग 3 सेमी बड़ा हो गया!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="user user_03">
                                <div class="user__data">
                                    <div class="user__info">
                                        <span class="user__name"> आरव </span> , <span class="user__age">47</span>
                                    </div>
                                    <div class="review__text"> यह सच में आपके लिंग के साइज़ को बढाता है! मैंने कई सारी चीजें,
                                        पंप, क्रीम और गोलियां आजमायीं थीं। इनमें से किसी ने भी असर नहीं किया। मेरी पत्नी बहुत
                                        स्मार्ट है, उसे Kam-Ratan मिला। मैंने एक आजमाईश के लिए इसे खरीदा था। मैंने उसके
                                        मार्गदर्शन में इसका इस्तेमाल किया। मैंने कैप्सूल का इस्तेमाल जारी रखने का फैसला लिया है।
                                        यह मुझे 100% संतुष्ट करता है! हम फिर से युवाओं की तरह बहुत बढ़िया सेक्स करते हैं। हम बहुत
                                        खुश है।
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="order">
                <div class="glare">
                    <span class="glare__item glare__item_06 glare__fast"></span>
                    <span class="glare__item glare__item_07 glare__slow"></span>
                    <span class="glare__item glare__item_08 glare__slow"></span>
                </div>
                <div class="container">
                    <div class="title title_order-mob subtitle_w-mod">
                        <span class="clr-mod"> Kam-Ratan </span> बिस्तर में
                        आपकी सफलता की पक्की गारंटी है!
                    </div>
                    <div class="order__wrap">
                        <div class="order__cell">
                            <div class="product product__order">
                                <div class="sale sale__order">
                                    <div class="sale__wrap">
                                        <span class="sale__text"> डिस्काउंट  </span>
                                        <span class="sale__value">50</span>
                                        <span class="sale_text"> off </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order__cell">
                            <div class="timer">
                                <div class="timer__item">
                                    <div class="hours"></div>
                                </div>
                                <div class="timer__item">
                                    <div class="min"></div>
                                </div>
                                <div class="timer__item">
                                    <div class="sec"></div>
                                </div>
                            </div>
                            <form action="" enctype="multipart/form-data" class="orderForm order__form order_form" id="order_form"
                                  method="post" name="frmContact"
                                  onsubmit="validateform(this); return false;">
                                <div class="form__wrap">
                                    <div class="form__field">
                                        <input name="userName" required="required" placeholder="नाम" type="text" value="" />
                                    </div>
                                    <div class="form__field">
                                        <input class="only_number" name="subject" minlength="5" required="required" value=""
                                               placeholder="फ़ोन नंबर" type="text" maxlength="17"/>
                                    </div>
                                    <div class="form__field">
                                        <input  name="userEmail"  required="required" value=""
                                               placeholder="पूरा पता" type="text" />
                                    </div>

                                </div>
                                <button class="js_submit order__btn" name="send" value=" अभी ऑर्डर करें ">
                                    <span class="button__wrap">
                                        <span class="button__text"> ऑर्डर करें </span>
                                    </span>
                                </button>
                                 <div class="wpcf7-response-output" aria-hidden="true">
                                    <div id="statusMessage">
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
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="ac_footer">
            <span>© 2021 Copyright. All rights reserved.</span><br>
            <span>Disclaimer : These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease. </span><br>
        </div>

        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/common.js"></script>
        <script src="js/timer.js"></script>
        <script>
                                function validateform(form) {
                                    if (form.elements["name"].value == "") {
                                        alert("कृपया आपका पूरा नाम प्रविष्ट कीजिए");
                                        return false;
                                    }
                                    if (form.elements["name"].value.length < 2) {
                                        alert("कृपया आपका पूरा नाम प्रविष्ट कीजिए");
                                        return false;
                                    }
                                    var phone_reg = new RegExp("[A-z А-я]", "g");
                                    var literInPhone = phone_reg.test(form.elements["phone"].value);
                                    if (form.elements["phone"].value == "") {
                                        alert("कृपया अपना फोन नंबर दर्ज करें");
                                        return false;
                                    }
                                    if (literInPhone) {
                                        alert("कृपया अपना फोन नंबर दर्ज करें");
                                        return false;
                                    }
                                    if (form.elements["phone"].value.length > 17) {
                                        alert("कृपया अपना फोन नंबर दर्ज करें");
                                        return false;
                                    }
                                    form.querySelector(".btn").setAttribute("disabled", true);
                                    form.submit();
                                }
        </script>



    </body>

</html>
