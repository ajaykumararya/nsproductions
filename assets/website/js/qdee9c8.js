$(document).ready(function () {


    $("#mobile").keypress(function (e) {
        $('#errormobile').html('');

        var regex = /^[0-5][0-9]{0}$/;
        if (regex.test($(this).val())) {
            $(this).val('');
            $('#errormobile').html('Please enter the valid mobile number.').show().css({'color': 'red'});
            return false;
        }

        if ($(this).val().length >= 10) {
            $('#errormobile').html("").css({'color': '#0070c0'});
            return false;
        }

        if ($(this).val().length < 9) {
            $('#errormobile').html('Please enter the 10 digit.').show().css({'color': 'red'});
        } else {
            $('#errormobile').html("").css({'color': '#0070c0'});
        }

    });

    $("#alternate_mobile").keypress(function (e) {
        $('#erroraltmobile').html('');

        var regex = /^[0-5][0-9]{0}$/;

        if (regex.test($(this).val())) {
            $(this).val('');
            $('#erroraltmobile').html('Please enter the valid alternate mobile number.').show().css({'color': 'red'});
            return false;
        }

//        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
//            $('#error_altmobile').html('Number Only!').show().css({'color': 'red'});
//            return false;
//        }
        if ($(this).val().length >= 10) {
            $('#erroraltmobile').html('').show().css({'color': '#0070c0'});
            return false;
        }
        if ($(this).val().length < 9)
        {
            $('#erroraltmobile').html('Please enter the 10 digit.').show().css({'color': 'red'});
        } else {
            $('#erroraltmobile').html('').show().css({'color': '#0070c0'});

        }
    });

    $('.counter-value').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 3500,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    $("#pincode").keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
        if ($(this).val().length >= 6) {
            return false;
        }
        if ($(this).val().length < 5)
        {
            $('#error_pincode').html('Please enter the valid pincode.').show().css({'color': 'red'});
        } else {
            $('#error_pincode').html('').show().css({'color': 'green'});
        }
    });


    $("#full_name").keypress(function (event) {
        var inputValue = event.which;
        if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
            $('#errorname').html('Please enter the alphabat only.').show().css({'color': 'red'});
            event.preventDefault();
        } else {
            $('#errorname').html('').show().css({'color': 'red'});
        }
    });

    $("#loan_amount").keypress(function (e) {
        $('#errorloanamount').html('');

        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $('#errorloanamount').html('Please enter the digit only.').show().css({'color': 'red'});
            return false;
        }

        if ($(this).val().length > 6) {
            $('#errorloanamount').html('Maximum 6 digit allowed.').show().css({'color': 'red'});
            return false;
        }

        if ($(this).val().length < 5) {
            $('#errorloanamount').html('Minimum 4 digit requried.').show().css({'color': 'red'});
        } else {
            $('#errorloanamount').html("").css({'color': '#0070c0'});

        }
    });

    $("#ContactEnquiry").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#FormVerify").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#OTPVerify").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#FormApplyNow").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#FormLoanDetails").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#FormDocumentsUpload").on("submit", function () {
//            $("#overlay").fadeIn(300);
    });

    $("#FormCareer").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#ContactUSEnquiry").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#subscribeemail").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $("#FormDocumentsUploadFinish").on("submit", function () {
        $("#overlay").fadeIn(300);
    });

    $('#submit').click(function () {
        if ($(".checkbox_check").prop('checked') == false) {
            $('#error_checked').html('Please check the checkbox first!').show().css({'color': 'red'});
            return false;
        }
    });

    $('#applyForm').submit(function () {
        $('#applybutton').css({"color": "white", "background-color": "black"}).prop('disabled', true);
    });


});

window.onscroll = function () {
    myFunction();
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

function FirstNameValidate(name)
{
    let valid_name = $(name).val();
    if (valid_name.length < 3 || valid_name.length > 40) {
        $('#errorname').html('Name length should be in between 3 to 40 characters.').show().css({'color': 'red'});
        $(name).val("");
        return false;
    } else {
        $('#errorname').html('').show().css({'color': '#ffc107'});
    }
    var letters = /^[A-Za-z ]+$/;
    if (valid_name.match(letters)) {
        $('#errorname').html('').show().css({'color': '#ffc107'});
    } else {
        $('#errorname').html('Name can only contain alphabets.').show().css({'color': 'red'});
        $(name).val("");
        return false;
    }

}

function IsEmail_personal(email) {
    var regex = /([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/;
    let valid_email = $(email).val();
    if (valid_email.match(regex)) {
        $('#erroremail').html('').show().css({'color': '#0070c0'});
    } else {
        $('#erroremail').html('Please enter the valid email.').show().css({'color': 'red'});
        $(email).val("");
        return false;
    }
}


function validloanamount(amount) {
    var loan_amount = $(amount).val();
    if (loan_amount < 5000) {
        $('#errorloanamount').html('Minimum loan amount can be Rs 5,000/-').show().css({'color': 'red'});
        $(amount).val("");
        return false;
    }
    if (loan_amount > 100000) {
        $('#errorloanamount').html('Maximum loan amount can be Rs 1,00,000/-').show().css({'color': 'red'});
        $(amount).val("");
        return false;
    } else {
        $('#errorloanamount').html("").css({'color': '#0070c0'});
    }
}

function income_type_label(obj) {

    var income_type = $(obj).val();

    $("#lbl_income_type").text("Monthly Salary");
    $("#monthly_salary").attr('placeholder', 'Monthly Salary');

    if (income_type == 2) {
        $("#lbl_income_type").text("Monthly Income");
        $("#monthly_salary").attr('placeholder', 'Monthly Income');
    }
}

function valid_monthly_income(amount) {
    var monthly_income = $(amount).val();
    if (monthly_income < 15000) {
        $('#errormonthlysalary').html('Minimum income required is Rs 15,000/-').show().css({'color': 'red'});
        $(amount).val("");
        return false;
    } else {
        $('#errormonthlysalary').html("").css({'color': '#0070c0'});
    }
}

function loan_obligation(amount) {
    var loan_obligations = $(amount).val();
    if (loan_obligations < 0) {
        $('#error_loan_obligation').html('For no obligations, mention 0').show().css({'color': 'red'});
        $(amount).val("");
        return false;
    } else {
        $('#error_loan_obligation').html("").css({'color': '#0070c0'});
    }
}


function validatePanNumber(pan) {
    let pannumber = $(pan).val();
    var regex = /[a-zA-Z]{3}[p-pP-P]{1}[a-zA-Z]{1}\d{4}[a-zA-Z]{1}/;

    if (pannumber.length == 10) {
        if (pannumber.match(regex)) {
            $('#errorpancard').html('').show().css({'color': '#0070c0'});
        } else {
            $('#errorpancard').html('Please enter valid pan number..').show().css({'color': 'red'});
            $(pan).val("").focus();
            return false;
        }
    } else {
        $('#errorpancard').html('Please enter valid pan number.').show().css({'color': 'red'});
        $(pan).val("").focus();
        return false;
    }
}


function IsEmail_office(email) {
    var regex = /([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/;
    let valid_email = $(email).val();
    if (valid_email.match(regex)) {
        $('#erroremailoffice').html('').show().css({'color': '#0070c0'});
    } else {
        $('#erroremailoffice').html('Please enter the valid email.').show().css({'color': 'red'});
        $(email).val("");
        return false;
    }
}

function toUnicode(elmnt, content) {
    if (content.length == elmnt.maxLength) {
        next = elmnt.tabIndex
        if (next < document.forms[0].elements.length) {
            document.forms[0].elements[next].focus()
        }
    }
}

function clockTimer()
{
    var i = 1 * 180;
    var timer1 = '';

    (function timer() {
        if (--i < 0)
            return;
        setTimeout(function () {
            if (i == 0) {
                $('#resend-otp').html('Session Expired.');
            } else {
                $('#timer').html('Session will expire in ' + i + ' seconds');
                timer1 = i;
                timer();
            }
        }, 1000);
    })();
}

function Filevalidation(fileid) {
    const fi = document.getElementById(fileid);
    if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {
            const fsize = fi.files.item(i).size;
            const file = Math.round((fsize / 1024));
            // The size of the file.
            if (file >= 2048) {
                $('#size').html('File too Big, please select a file less than 2mb').show().css({'color': 'red'});
                $('#submit').attr('disabled', 'disabled');
                return false;
            } else {
                $('#submit').removeAttr('disabled');
                $('#size').html('').show().css({'color': '#0070c0'});
            }
        }
    }
}
function validateDocumentUpload(f) {
    var maxUploadSize = 2; //8MB
    var maxUploadSizeChk = maxUploadSize * 1024 * 1024;
//        console.log("Step 1");
    if (f == undefined)
        return false;
//        console.log("Step 2");
    var mp = document.getElementById('docs_error');
    mp.style.display = 'none';

    var frm = f;

//        alert(f);
//        console.log("Step 3");

    var docUpload = frm['docs_type'].value;

//        console.log("Step 4");
//        alert(docUpload);
//        console.log("Step 5");
    var willPost = 1;
    var error_msg = '';

    if (frm['docs_type'].value == "") {
        error_msg = "Please select document type from dropdown";
        willPost = 0;
    } else if (frm['doc_file'].value == '' || frm['doc_file'].files == undefined) {
        error_msg = "Please select file to upload";
        willPost = 0;
    } else if ((frm['docs_type'].value == '6' || frm['docs_type'].value == '7' || frm['docs_type'].value == '13') && !frm['doc_file'].value.match(/(\.pdf)$/i)) {
        error_msg = "Please upload pdf file only.";
        willPost = 0;
    } else if ((frm['docs_type'].value == '18') && !frm['doc_file'].value.match(/(\.jpg|\.jpeg|\.png)$/i)) {
        error_msg = "Please upload jpeg, jpg, png file only.";
        willPost = 0;
    } else if (!frm['doc_file'].value.match(/(\.pdf|\.jpg|\.jpeg|\.png)$/i)) {
        error_msg = "Invalid file format selected";
        willPost = 0;
    } else if (frm['doc_file'].files != undefined && frm['doc_file'].files[0].size > maxUploadSizeChk) {
        error_msg = "File size is greater than " + maxUploadSize + " MB";
        willPost = 0;
    }

    if (willPost == 1) {
        mp.style.display = 'none';
        $("#overlay").fadeIn(300);
        return true;
    } else {
        mp.style.display = 'block';
        $("#docs_error .alert").text(error_msg);
        return false;
    }

    return false;
}
