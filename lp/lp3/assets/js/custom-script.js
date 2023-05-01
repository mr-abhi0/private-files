$(document).on('keyup', '.mobile-length', function() { mobile = parseInt($(this).val()); if (true == Number.isInteger(mobile)) { mobile = String(mobile);
        mobile = mobile.substr(0, 10);
        $(this).val(mobile); } else { $(this).val(''); } })
$(document).on('keyup', '.pin-length', function() { pin = parseInt($(this).val()); if (true == Number.isInteger(pin)) { pin = String(pin);
        pin = pin.substr(0, 6);
        $(this).val(pin); } else { $(this).val(''); } })
$(document).on('keyup', '.name-validate', function() { name = $(this).val(); if (name == '') { $(this).val(''); } else { name = name.match(/[a-zA-z .]/g);
        name = name.toString(); if (name == 'null') { $(this).val(''); } else { name = name.replace(new RegExp(',', 'g'), '');
            name = name.match(/[^_^`\[\]]/g);
            name = name.toString();
            name = name.replace(new RegExp(',', 'g'), '');
            name = name.replace(new RegExp('  ', 'g'), ' ');
            name = name.toLowerCase();
            $(this).val(name);
            $(this).css('textTransform', 'capitalize'); } } })
$(document).on('submit', ".form-submit", function(e) {
    startAjax();
    e.preventDefault();
    var form = $(this);
    var Form_Data = new FormData(form[0]);
    $.ajax({
        url: 'process.php',
        cache: false,
        type: 'post',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: Form_Data,
        success: function(data) {
            console.log(data);
            if (data['type'] === 'success') { $('#thanks-modal .modal-title').html(data.title);
                $('#thanks-modal .modal-body').html(data.msg);
                $('#thanks-modal').modal('show');
                $(form).trigger('reset'); } else if (data['type'] === 'error') { $('#thanks-modal .modal-title').html(data.tile);
                $('#thanks-modal .modal-body').html('<p>Sorry Try Again...<p>');
                $('#thanks-modal').modal('show'); }
            stopAjax();
            if (data.type === 'login') { window.location = data.url; }
            if (data.type === 'login_error') { $('#error').html(data.msg); }
        },
        error: function(data2) { stopAjax(); }
    });
});
$(document).ready(function() { var deadline = new Date(); var endtime = new Date(deadline.getMonth() + 1 + "/" + deadline.getDate() + "/" + deadline.getFullYear() + " 11:59:59 PM");
    initializeClock('clockdiv-1', endtime);
    initializeClock('clockdiv-2', endtime); })

function getTimeRemaining(endtime) { var t = Date.parse(endtime) - Date.parse(new Date()); var seconds = Math.floor((t / 1000) % 60); var minutes = Math.floor((t / 1000 / 60) % 60); var hours = Math.floor((t / (1000 * 60 * 60)) % 24); var days = Math.floor(t / (1000 * 60 * 60 * 24)); return { 'total': t, 'days': days, 'hours': hours, 'minutes': minutes, 'seconds': seconds }; }

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);
        daysSpan.innerHTML = ('0' + t.days).slice(-2);
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        var seconds = parseInt(((t.hours * 60 * 60) + (t.minutes * 60) + t.seconds));
        if (seconds % 4 == 0) { var lastvalue = parseInt($(".limitedstock-1").html()); if (lastvalue > 8) { $(".limitedstock-1").html(lastvalue - 1); } }
        if (seconds % 3 == 0) { var lastvalue2 = parseInt($(".limitedstock-2").html()); if (lastvalue2 > 5) { $(".limitedstock-2").html(lastvalue2 - 1); } }
    }
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}
var x = document.getElementById("myVideo");

function playVid() { x.play(); }

function pauseVid() { x.pause(); }
$(document).ready(function() { playVid(); });

function startAjax() { $(document).ajaxStart(function() { $('.loader').show(); }); }

function stopAjax() { $(document).ajaxStop(function() { $('.loader').hide(); }); }
var names = ["Mr.Saurabh Saxena", "Mr.Nitish Verma", "Mr.Anirudh Rawat", "Mr.Krishna Sinha", "Mr.Santosh", "Mr.Gurjeet Singh", "Mr.Harmeet Singh", "Mr.Manoj", "Mr.Akash Kumar", "Mr.Vinay Bhardwaj", "Mr.Hariom", "Mr.Diwakar", "Mr.Abhay Tiwari", "Mr.Rahul Jha", "Mr.Kamal Kant", "Mr.Alok Nath", "Mr.Shubhanshu", "Mr.Fahim Anshari", "Mr.Gaurav Saini", "Mr.Devender Singh", "Mr.Bineet", "Mr.Akbar", "Mr.Ramprakash", "Mr.Vignesh", "Mr.Abdul", "Mr.Antony", "Mr. Pratap", "Mr.Kumar", "Mr.Santhan", "Ms.Selvi", ];
var places = ["Chennai", "Banglore", "Mumbai", "Coachin", "Madurai", "Banglore", "Delhi", "Mumbai", "Hyderabad", "Delhi", "Dehradun", "Patna", "Chennai", "Banglore", "Mumbai", "Coachin", "Madurai", "Banglore", "Delhi", "Mumbai", "Hyderabad", "Delhi", "Dehradun", "Patna", "Chennai", "Banglore", "Mumbai", "Coachin", "Madurai", "Banglore", "Delhi", "Mumbai", "Hyderabad", "Delhi", "Dehradun", "Patna", ];
var counts = ["Trial Pack", "2 Month Course", "Full Course"];
var times = ["5 Min", "10 Min", "15 Min", "20 Min", "20 Min", "5 Min", "5 Min", "10 Min", "15 Min", "20 Min", "20 Min", "5 Min", "5 Min", "10 Min", "15 Min", "20 Min", "20 Min", "5 Min", "5 Min", "10 Min", "15 Min", "20 Min", "20 Min", "5 Min", "5 Min", "10 Min", "15 Min", "20 Min", "20 Min", "5 Min", "9 Min"];
setInterval(function() { $(".custom-social-proof").stop().slideToggle('slow'); }, 8000);
$(".custom-close").click(function() { $(".custom-social-proof").stop().slideToggle('slow'); });
setInterval(function() { var name = Math.round((Math.random()) * names.length); if (name == names.length) --name;
    $("#c_name").html(names[name]); var place = Math.round((Math.random()) * places.length); if (place == places.length) --place;
    $("#c_place").html(places[place]); var place = Math.round((Math.random()) * places.length); if (place == places.length) --place;
    $("#c_place").html(places[place]); var place = Math.round((Math.random()) * places.length); if (place == places.length) --place;
    $("#c_place").html(places[place]); var place = Math.round((Math.random()) * places.length); if (place == places.length) --place;
    $("#c_place").html(places[place]); var count = Math.round((Math.random()) * counts.length); if (count == counts.length) --count;
    $("#c_count").html(counts[count]); var time = Math.round((Math.random()) * times.length); if (time == times.length) --time;
    $("#c_time").html(times[time]); }, 8000);