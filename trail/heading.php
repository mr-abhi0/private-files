<h1 id="text3d">SHADE</h1>

<style>
    h1 {
        width: 100%;
        margin: 0 auto 0 auto;
        font-family: 'Lato', sans-serif;
        line-height: 280px;
        font-size: 11.5rem;
        padding: 80px 50px;
        text-align: center;
        text-transform: uppercase;
        text-rendering: optimizeLegibility;
    }

    /*	
============
	Light
============
*/
    h1::before {
        content: "";
        width: 100%;
        height: 750px;
        position: absolute;
        top: -200px;
        left: 10px;
        transform: rotate(55deg);
        background: rgba(206, 188, 155, .7);
        background: -moz-linear-gradient(left, rgba(206, 188, 155, .7) 0%, rgba(42, 31, 25, 0) 65%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(206, 188, 155, .7)), color-stop(65%, rgba(42, 31, 25, 0)));
        background: -webkit-linear-gradient(left, rgba(206, 188, 155, .7) 0%, rgba(42, 31, 25, 0) 65%);
        background: -o-linear-gradient(left, rgba(206, 188, 155, .7) 0%, rgba(42, 31, 25, 0) 65%);
        background: -ms-linear-gradient(left, rgba(206, 188, 155, .7) 0%, rgba(42, 31, 25, 0) 65%);
        background: linear-gradient(to right, rgba(206, 188, 155, .7) 0%, rgba(42, 31, 25, 0) 65%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cebc9b', endColorstr='#2a1f19', GradientType=0.7);
        );
    }



    /*	
========================
			3D Effect
========================
*/
    #text3d {
        color: #70869d;
        letter-spacing: .15em;
        text-shadow:
            -1px -1px 1px #efede3,
            0px 1px 0 #2e2e2e,
            0px 2px 0 #2c2c2c,
            0px 3px 0 #2a2a2a,
            0px 4px 0 #282828,
            0px 5px 0 #262626,
            0px 6px 0 #242424,
            0px 7px 0 #222,
            0px 8px 0 #202020,
            0px 9px 0 #1e1e1e,
            0px 10px 0 #1c1c1c,
            0px 11px 0 #1a1a1a,
            0px 12px 0 #181818,
            0px 13px 0 #161616,
            0px 14px 0 #141414,
            0px 15px 0 #121212,
            2px 20px 5px rgba(0, 0, 0, 0.9),
            5px 23px 5px rgba(0, 0, 0, 0.3),
            8px 27px 8px rgba(0, 0, 0, 0.5),
            8px 28px 35px rgba(0, 0, 0, 0.9);
    }
</style>