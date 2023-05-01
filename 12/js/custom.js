$(document).ready(function () {
    $.ajax({
        url: 'action.php',
        type: 'post',
        dataType: 'json',
        cache: false,
        data: {
            courses: true
        },
        success: function (data, textStatus, jqXHR) {
            $('#course').html(data['courses']);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
});

// All Form Submit
$(document).on('submit', ".form-submit", function (e) {
    e.preventDefault();
    // console.log(this);
    var form = $(this);
    var Form_Data = new FormData(form[0]);
    $.ajax({
        url: 'action.php',
        cache: false,
        type: 'post',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: Form_Data,
        success: function (data) {
            console.log(data);
            if (data['type'] === 'success') {
                swal(data['notification'], data['msg'], data['type']);
                $(form)[0].reset();
            }

            if (data['type'] === 'error') {
                swal(data['notification'], data['msg'], data['type']);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });
});
// //All Form Submit