
        var isNS = (navigator.appName == "Netscape") ? 1 : 0;
        if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);
        function mischandler() {
            return false;
        }
        function mousehandler(e) {
            var myevent = (isNS) ? e : event;
            var eventbutton = (isNS) ? myevent.which : myevent.button;
            if ((eventbutton == 2) || (eventbutton == 3)) return false;
        }
        document.oncontextmenu = mischandler;
        document.onmousedown = mousehandler;
        document.onmouseup = mousehandler;

        document.onkeydown = function (e) {
            if (e.ctrlKey &&
                (e.keyCode === 67 ||
                    e.keyCode === 86 ||
                    e.keyCode === 85 ||
                    e.keyCode === 123 ||
                    e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };
        $(document).keypress("u", function (e) {
            if (e.ctrlKey) {
                return false;
            }
            else {
                return true;
            }
        });

   

   

        document.onkeydown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123 || event.keyCode == 18) {
                alert("This function is disabled here");
                return false;
            }
        }
    