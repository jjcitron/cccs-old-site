/* File Created: February 23, 2015 */
/********* autopopulate forms ************/

$(function () {
    /* this section will replace the value of hidden fields
    with the values in the query string */
    var match,
		pl = /\+/g,  // Regex for replacing addition symbol with a space
		search = /([^&=]+)=?([^&]*)/g, // regex for name value pairs
		decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); }, // decode function
		query = window.location.search.substring(1); // url query

    /* loop for each name value pair and update fields */
    while (match = search.exec(query)) {
        if (decode(match[2]) != '') {
            /* if the value is not empty
            then set the value of the input with the matching id */
            $('#' + decode(match[1])).val(decode(match[2]));
        }
    }

    // check to see if there is a pid or partnerid in the url 
    if (queryParameterGet("aid") != "" || queryParameterGet("aff_id") != "") {
        var value = $('#aff_id').val();
        var linkUS = $('#thank_you_url').val() + '?aff_id=' + value;
        $('#thank_you_url').val(linkUS);

        var link = $('#thank_you_urlspa').val() + '?aff_id=' + value;
        $('#thank_you_urlspa').val(link);
    }
    else {

        // check to see if there is a pid or partnerid in the url 
        if (queryParameterGet("pid") != "" || queryParameterGet("partnerid") != "" || queryParameterGet("Partnerid") != "" || queryParameterGet("partnerId") != "" || queryParameterGet("PartnerId") != "" || queryParameterGet("partnerID") != "" || queryParameterGet("PartnerID") != "") 
        {

            if ($('#pid').val()) {
                updateFieldWithParameters('#pid', ['pid', 'partnerid', 'Partnerid', 'partnerId', 'PartnerId', 'partnerID', 'PartnerID']);
                var value = $('#pid').val();
            } else {

                updateFieldWithParameters('#partnerid', ['pid', 'partnerid', 'Partnerid', 'partnerId', 'PartnerId', 'partnerID', 'PartnerID']);
                var value = $('#partnerid').val();

            }

            var linkUS = $('#thank_you_url').val() + '?partnerid=' + value;
            $('#thank_you_url').val(linkUS);

            var link = $('#thank_you_urlspa').val() + '?partnerid=' + value;
            $('#thank_you_urlspa').val(link);
        }
        else {
            var linkUS = $('#thank_you_url').val();
            $('#thank_you_url').val(linkUS);

            var link = $('#thank_you_urlspa').val();
            $('#thank_you_urlspa').val(link);
        }


    }

    //updateFieldWithParameters('#ckm_request_id', ['r']);
    updateFieldWithParameters('#pid', ['pid', 'partnerid', 'Partnerid', 'partnerId', 'PartnerId', 'partnerID', 'PartnerID']);
    updateFieldWithParameters('#ckm_subid', ['s1']);
    updateFieldWithParameters('#ckm_subid_2', ['s2']);
    updateFieldWithParameters('#ckm_subid_3', ['s3']);
    updateFieldWithParameters('#ckm_subid_4', ['s4']);
    updateFieldWithParameters('#ckm_subid_5', ['s5']);
    updateFieldWithParameters('#aid', ['aid', 'aff_id']);



    $('#newsletter').click(function () {
        $('#optout').val($('#optout').val() == 'false' ? 'true' : 'false');
    });

});

Number.prototype.formatMoney = function (c, d, t) {
    var n = this,
	c = isNaN(c = Math.abs(c)) ? 0 : c,
	d = d == undefined ? "." : d,
	t = t == undefined ? "," : t,
	s = n < 0 ? "-" : "",
	i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
	j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

/* used to parse URL query parameters */
function queryParameterGet(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
    return '';
}

// field used to update hidden field when URL parameter can have multiple names
function updateFieldWithParameters(field, listOfParameters) {
    // loop through list of parameters to look for value
    var parameterValue = '';
    for (var i = 0; i < listOfParameters.length; i++) {
        if (queryParameterGet(listOfParameters[i]) != '') {
            parameterValue = queryParameterGet(listOfParameters[i]);
        }
    }

    // if a value is in URL update field
    if (parameterValue != '') {
        $(field).val(parameterValue);
    }
}

/********* validation initialization ************/

var validationUseToolTips = false; /* if false shows error text under fields, if true displays tool tips */
var validationFieldsJquerySelector = 'input[type="text"], input[type="radio"], select'; /* used to select the form fields on the page */

$(function () {
    /* adds validation method for checking names excluding numbers and invalid characters */
    jQuery.validator.addMethod('namecheck_sp', function (value, element) {
        return value.match(/^[A-Za-z\s\'\.\-]+$/);
    }, 'Please enter a valid name.');

    /* adds validation method for simple 10 digit number format */
    jQuery.validator.addMethod('phonecheck_sp', function (value, element) {
        if (value == '') {
            return true;
        }
        value = value.replace('(', '').replace(')', '').replace(/-/g, '').replace(/\./g, '');
        $(element).val(value);
        return value.match(/^[0-9]{10}$/);
    }, 'Please enter a valid phone number.');

    /* fill form with test data with link is pressed */
    $('#form_fill').click(function () {
        $('input[name=first_name]').val('vtest');
        $('input[name=last_name]').val('vtest');
        $('input[name=primary_phone]').val('3055555555');
        $('input[name=email]').val('test@vtsqa.com');
        $('select[name=debtamount]').val('1000');
        $('select[name=paymentstatus]').val('Current');
        $('select[name=state]').val('FL');

        return false;
    });

    /* move form left and right for testing */
    $('#form_left_right').click(function () {
        $('.tooltipstered').tooltipster('hide');
        if ($('#form_left_right').html() == 'Move Form Right') {
            $('#form_div').css('float', 'right');
            $('#form_left_right').html('Move Form Left');
        } else {
            $('#form_div').css('float', 'left');
            $('#form_left_right').html('Move Form Right');
        }

        return false;
    });

    /* this should be modified if fields are added, removed or changed */
    $("#form").validate({
        /* validation rules for each field */
        rules: {
            first_name: { required: true, namecheck_sp: true },
            last_name: { required: true, namecheck_sp: true },
            primary_phone: { required: true, phonecheck_sp: true },
            secondary_phone: { phonecheck_sp: true },
            phone_work: { phonecheck_sp: true },
            email: { required: true, email: true },
            state: "required",
            debtamount: "required",
            paymentstatus: "required"
        },
        /* validation messages for each field */
        messages: {
            first_name: "Por favor entre su nombre.",
            last_name: "Por favor, entre su apellido.",
            primary_phone: "Por favor, entre un número de teléfono válido.",
            secondary_phone: "Por favor, entre un número de teléfono válido.",
            phone_work: "Por favor, entre un número de teléfono válido.",
            email: "Por favor, entre un correo electrónico válida.",
            state: "Por favor seleccione su estado.",
            debtamount: "Por favor seleccione la cantidad de su deuda.",
            paymentstatus: "Por favor seleccione su estado de pago."
        },
        /* used to override jquery validation plugin show errors function so that 
        only one tooltip is shown if they are being used */
        showErrors: function (errorMap, errorList) {
            if (validationUseToolTips) {
                /* if not show messages under fields */
                if (errorList.length) {
                    /* if there are errors in the list hide all tips and show the one for the first error */
                    $(validationFieldsJquerySelector).tooltipster('hide');
                    $(errorList[0].element).tooltipster('update', errorList[0].message);
                    $(errorList[0].element).tooltipster('show');
                    $(errorList[0].element).focus();
                }
            }
            this.defaultShowErrors();
        },
        /* used to override jquery validation plugin success function so that 
        all the tool tips are hidden */
        success: function (label, element) {
            if (validationUseToolTips) {
                $(element).tooltipster('hide');
            }
        },
        submitHandler: function (form) {
            if ($('input[type="submit"]').attr("processtext")) {
                /* if processing text exist change text of button */
                $('input[type="submit"]').val($('input[type="submit"]').attr("processtext"));
            }

            if ($('input[type="submit"]')) {
                /* if button exists disable so that there is no second click */
                $('input[type="submit"]').prop('disabled', true);
            }

            form.submit();
        },
        /* used to override jquery validation plugin success function so that 
        it is disabled when using tool tips */
        errorPlacement: function (error, element) {
            if (!validationUseToolTips) {
                element.after(error);
            }
        }
    });

    if ($('form').length) {
        /* if a form exists and usetooltips is true show tips 
        instead of messages under fields */
        validationUseToolTips = $('form').attr('usetooltips') == 'true';
    }

    /* initialize tooltipster on form input elements */
    if (validationUseToolTips) {
        $(validationFieldsJquerySelector).tooltipster({
            trigger: 'custom',
            onlyOne: false,
            position: 'right'
        });
        $(validationFieldsJquerySelector).keyup(function () {
            $(this).tooltipster('hide');
        });
    }

    /* Prevent "ENTER" key from submitting form */
    $(document).ready(function () {
        $(window).keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });



    /* Invoke the plugin for the input field placeholders for IE8 and IE9 */
    $('input, textarea').placeholder();
});

function showstuff(boxid) {
    document.getElementById(boxid).style.display = 'inline';
    document.getElementById(boxid).style.visibility = 'visible';
}
function hidestuff(boxid) {
    document.getElementById(boxid).style.visibility = "hidden";
    document.getElementById(boxid).style.display = "none";
}