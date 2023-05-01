/*!
*  
Decription For Custom Validatio Class Name

--validation Msg attribute
validationtitle

--special Validation Function 
**set onfocus event**
Alph a only
$(this).IsAlphaOnlytxt(); --for type only Alpha in text box

Numbric Key
$(this).IsNumOnlytxt(); --for type only number in text box

Decimal Number key
$(this).IsDecNumOnlytxt(); --for type only Decimal number in text box
--for bind contain

$.bindeventfield('tagname','controlname');

$.bindspclvalidationevent('tagname','controlname');

-----------------

*     Validation For                            Class Name                 
                                                      
*      Require Field                   -         reqfield      

*      Email                           -         reqemail   

*      Confirm Email                   -         cmpremail for Email (textbox) and cmpremailto for confirm email (textbox)) --- work on Id

*      NumberOnly                      -         reqnumonly

*      OnlyDecimalNum                  -         reqdecimalnum  

*      NumOrDecimal                    -         reqnumordec

*      Password Length Check           -         reqpassword

*      Confirm Password Check           -         cmprpass for Password (textbox) and cmprpassto for Confirm Password (textbox) --- work on Id

*      Url                             -          requrl

*      start index check 0 in mobile num  -       reqmobilecustom        
*      (default length set five in customvalidationcheck function)



*Devloped By CK  and Abhi...

**/
var _valMsgBoxShow = true;
/*******************************************Global Properties*************************************************/
var wrngClass = "validationerorr";
var regexemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var regexPhoneNum = /^\d{3}-?\d{3}-?\d{4}$/g;
var regexOnlyNum = /^[0-9]+$/;
var regexnumdecimal = /^[-+]?[0-9]+\.[0-9]+$/;
var onlynumdecimal = /^.[0-9]+$/;
/*************************************************End**********************************************************/

//Know for Array Max or Min Value
Array.max = function (array) {
    return Math.max.apply(Math, array);
};

// Function to get the Min value in Array
Array.min = function (array) {
    return Math.min.apply(Math, array);
};

//Create a new jquery function for check attribute
$.fn.hasAttr = function (name) {
    return this.attr(name) !== undefined;
};
//end


/**********************************************************extend function*****************************************/
$.fn.extend({
    Valcheck: function (regexvalue) {
        this.each(function () {
            if (regexvalue.test($(this).val())) {
                $(this).removeClass(wrngClass);
            }
            else {
                $(this).addClass(wrngClass);

            }
        });
        return regexvalue.test($(this).val());
    },

    valuecheck: function (regexvalue) {
        return regexvalue.test($(this).val());
    },

    passwordlengthcheck: function (length) {
        var txtlength = $(this).val().length;
        if (txtlength < length) {
            $(this).addClass(wrngClass);
            return false;
        } else {
            $(this).removeClass(wrngClass);
            return true;
        }
    },

    Requiredcheck: function () {
        var propName = $(this).prop('tagName').toLowerCase();
        //debugger
        if (propName == "select") {
            if ($(this)[0].selectedIndex == 0) {
                $(this).addClass(wrngClass);
                return false;
            }
            else {
                $(this).removeClass(wrngClass);
                return true;
            }

        }
        else if (propName == "textarea") {
            if ($.trim($(this).val()) == "") {
                $(this).addClass(wrngClass);
                return false;
            }
            else {
                $(this).removeClass(wrngClass);
                return true;
            }

        }
        else {
            var elemtype = $(this).attr('type').toLowerCase();
            if (elemtype == "checkbox") {
                if (!$(this).is(":checked")) {
                    $(this).addClass(wrngClass);
                    return false;
                } else {
                    $(this).removeClass(wrngClass);
                    return true;
                }
            }
            else {
                if ($.trim($(this).val()) == "") {
                    $(this).addClass(wrngClass);
                    return false;
                }
                else {
                    $(this).removeClass(wrngClass);
                    return true;
                }
            }
        }


    },
    IsAlphaOnlytxt: function () {
        var regex = /^[a-zA-Z ]*$/;
        var obj = this;
        return this.each(function () {
            $(this).keydown(function (e) {
                //                if (e.shiftKey || e.ctrlKey || e.altKey) {
                //                    e.preventDefault();
                //                } else {
                var key = e.keyCode;
                if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                    e.preventDefault();
                    //                    }
                }
            });
        });
    },
    IsNumOnlytxt: function () {
        return this.each(function () {
            $(this).keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57))
                    return false;
                else
                    return true;

            });
        });
    },

    IsDecNumOnlytxt: function () {
        return this.each(function () {
            $(this).keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 46)
                    return false;
                else
                    return true;

            });
        });
    },
    hasAttr: function (attrVal) {
        var attrValue = $(this).attr(attrVal);
        if (typeof attrValue == 'undefined' || attrValue == '' || attrValue == false)
            return false;
        else
            return true;
    }
});

/***********************************************************extend end**************************************************************/
/*******************************************Validation Functions*************************************************/


$.bindeventfield = function (tag, control) {

    $(document).on('click', control, function () {
        var log = true;
        var $errortoparray = [];
        $(tag).find("input[type='text'],input[type='hidden'],input[type='email'],input[type='password'],select,textarea").each(function () {
            if (!$(this).Requiredcheck()) {
                log = false;
                $errortoparray.push($(this).position().top);
            }
        });
        if (log == false) {
            $("html, body").animate({ scrollTop: Array.min($errortoparray) - 20 }, 1000);
        }
        return log;
    });

    var tagdocument = tag + " input[type='text'],input[type='email'],input[type='password'],textarea,select";
    $(document).on('blur', tagdocument, function () {
        var log = true;
        if (!$(this).Requiredcheck()) {
            log = false;
        }
        return log;
    });
}

$.bindspclvalidationevent = function (tag, control) {
    var tagdocument = tag + " input[type='text'],input[type='email'],input[type='password'],input[type='checkbox'],textarea,select";
    var tagclass = tag + " .reqnumonly,.reqdecimalnum,.reqnumordec";
    $(document).on('click', control, function () {
        var log = true;
        var $errortoparray = [];
        $(tag).find("input[type='text'],input[type='hidden'],input[type='email'],input[type='password'],input[type='checkbox'],textarea,select").each(function () {
            if (!customvalidationcheck(this)) {
                log = false
                $errortoparray.push($(this).position().top);
            }
        });

        if (log == false) {
            //$("html, body").animate({ scrollTop: Array.min($errortoparray), scrollLeft: -20 }, 1000);
        }
        return log;
    });

    $(document).on('blur', tagdocument, function () {
        var log = true;
        //if (!customvalidationcheck(this)) {
        //    log = false
        //}

        return log;
    });

    $(document).on('focus', tagclass, function () {
        if ($(this).hasClass('reqnumonly') || $(this).hasClass('reqdecimalnum')) {
            return $(this).IsNumOnlytxt();
        }
        if ($(this).hasClass('reqnumordec')) {
            return $(this).IsDecNumOnlytxt();
        }
    });
}

var customvalidationcheck = function (e) {
    var log = true;
    var validerrormsg = "";
    var validboxid = '.box_' + $(e).attr('id');

    if ($(e).hasClass('reqfield')) {
        if (!$(e).Requiredcheck()) {
            validerrormsg = "Field is required";
            log = false;
        }
    }

    if ($(e).hasClass('reqemail')) {
        if ($(e).val() != "") {
            if (!$(e).Valcheck(regexemail)) {
                validerrormsg = "Invalid email id";
                log = false;
            }
        }
    }

    if ($(e).hasClass('reqphonenum')) {
        if ($(e).val() != "") {
            if (!$(e).Valcheck(regexPhoneNum)) {
                validerrormsg = "Invalid number";
                log = false;
            }
        }
    }

    if ($(e).hasClass('reqmobilecustom')) {
        if ($(e).length > 0) {
            var val = $(e).val();
            if (val[0] == 0) {
                validerrormsg = "Can't start with zero";
                log = false;
            }
        }
    }

    if ($(e).hasClass('reqpassword')) {
        if ($(e).val() != "") {
            if (!$(e).passwordlengthcheck('8')) {
                validerrormsg = "password length must be 8";
                log = false;
            }
        }
    }

    if ($(e).hasClass('reqnumonly')) {
        if ($(e).val() != "") {
            if (!$(e).Valcheck(regexOnlyNum)) {
                validerrormsg = "Invalid number";
                log = false;
            }
        }
    }

    if ($(e).hasClass('reqdecimalnum')) {
        if ($(e).val() != "") {
            if (!$(e).Valcheck(regexnumdecimal)) {
                validerrormsg = "Invalid number";
                log = false;
            }
        }
    }

    if ($(e).hasClass('reqnumordec')) {
        if ($(e).val() != "") {
            if (!$(e).Valcheck(regexnumdecimal)) {
                if (!$(e).Valcheck(regexOnlyNum)) {
                    log = false;
                    validerrormsg = "Please regexnumdecimal no";
                }
            }
        }
    }

    if ($(e).hasClass('cmpremail') || $(e).hasClass('cmpremailto')) {
        if ($(e).val() != "" && $('.cmpremailto').val() != "") {
            var cmpr = $(".cmpremail");
            var cmprto = $(".cmpremailto");
            if (cmpr.val() != cmprto.val()) {
                validerrormsg = "Confirm E-mail not match";
                log = false;

                $(cmpr).addClass(wrngClass);
                $(cmprto).addClass(wrngClass);
            }
            else {
                $(".box_Email").fadeOut('slow');

                $(cmpr).removeClass(wrngClass);
                $(cmprto).removeClass(wrngClass);
            }
        }
    }

    if ($(e).hasClass('cmprpass') || $(e).hasClass('cmprpassto')) {
        if ($(e).val() != "" && $('.cmprpassto').val() != "") {
            var cmpr = $(".cmprpass");
            var cmprto = $(".cmprpassto");
            if (cmpr.val() != cmprto.val()) {
                validerrormsg = "Confirm password not match";
                log = false;

                $(cmpr).addClass(wrngClass);
                $(cmprto).addClass(wrngClass);
            }
            else {
                $(".box_Password").fadeOut('slow');

                $(cmpr).removeClass(wrngClass);
                $(cmprto).removeClass(wrngClass);
            }
        }
    }

    if ($(e).hasAttr('validationtitle')) {
        validerrormsg = $(e).attr('validationtitle');
    }
    if (_valMsgBoxShow) {
        if (!log) {
            if ($(validboxid).length < 1) {
                showValidErrormsg(e, validerrormsg);
            } else {
                var Content = validboxid + " " + ".validerrorboxContent";
                var msg = '* ' + validerrormsg;
                msg += '<br>';
                $(Content).html(msg);
            }
        } else {
            if ($(validboxid).length > 0) {
                $(validboxid).remove();
            }
        }
    }
    return log;
};

var showValidErrormsg = function (e, msg) {
    var str = "";
    var boxid = 'box_' + $(e).attr('id');
    //    var leftx = $(e).position().left + ($(e).width() - 20) + 'px';
    var leftx = $(e).position().left + 'px';
    var selftopspecing = eval($(e).css('padding-top').replace('px', '')) + eval($(e).css('margin-top').replace('px', ''));
    selftopspecing = selftopspecing ;
    var topy = $(e).position().top - selftopspecing;
    topy += 'px';
    //    margin-top: ' + topy + '
    str += '<div class="validbox errorBox ' + boxid + ' " style="opacity: 0.87;top: 0;left: ' + leftx + ';margin-top:' + topy + ';"><div class="validboxContent">';
    str += '* ' + msg;
    str += '<br></div>';
    str += '<div class="validboxArrow"><div class="line10"><!-- --></div><div class="line9"><!-- --></div><div class="line8"><!-- --></div><div class="line7"><!-- --></div><div class="line6"><!-- --></div><div class="line5"><!-- --></div><div class="line4"><!-- --></div><div class="line3"><!-- --></div><div class="line2"><!-- --></div><div class="line1"><!-- --></div></div></div>';
    $(e).after(str);
    //msg = msg.replace("Field", e.name);
    //alert(msg);
};

$(document).ready(function () {
    $(document).on('mouseover', '.validbox', function () {
        $(this).fadeOut('slow', function () {
            $(this).remove();
        });
    });
});

/************************************************End*******************************************************/

$.maxLengthMsgShow = function () {
    $('input:text').each(function () {
        if ($(this).hasAttr('maxlength')) {
            var maxL = $(this).attr('maxlength');
            var msg = 'max length:' + maxL;
            showValidErrormsg(this, msg);
        }
    });
}
function CheckURL(str) {
    var pattern = new RegExp('^(https?:\\//\\//)?' + // protocol
      '((([a-z\\d]([a-z\\d]*[a-z\d]*)*)\\.)+[a-z]{2,}|' + // domain name
      '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
      '(\\:\d+)?(\\//[-a-z\\d%_.~+]*)*' + // port and path
      '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
      '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locater
    if (!pattern.test(str)) {
        //alert("Please enter a valid URL.");
        return false;
    } else {
        return true;
    }
}