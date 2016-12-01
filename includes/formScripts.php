<script type="text/javascript">

//stupid IE phone format checker for when its not required
if (Modernizr.input.required) {
    var tel = document.querySelector('input[type="tel"]');
    if (typeof(tel) !== "undefined" && tel !== null) {
        tel.oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Please enter a valid telephone number");
            }
        };
    }
}

function check(input) {
    console.log(input.value);
    if (input.validity.patternMismatch) {
        //console.log(input);console.log(input.type);
        switch (input.type) {
            case 'email':
                //console.log('email found');
                input.setCustomValidity("Please enter a valid Email");
                break;
            case 'tel':
                //console.log('tel found');
                input.setCustomValidity("Please enter a valid US/Canada phone number (10 digits)");
                break;
            default:
                //console.log('something else found');
                console.log(input.id);
                switch (input.id) {
                    case 'firstname':
                        input.setCustomValidity("Please enter your first name");
                        break;
                    case 'lastname':
                        input.setCustomValidity("Please enter your last name");
                        break;
                    default:
                        input.setCustomValidity("Please enter the required information");
                        break;
                }
                break;
        }
    } else {
        input.setCustomValidity("");
    }
}



var webkit = '';
var ua = navigator.userAgent.toLowerCase();
if (ua.indexOf('safari') != -1) {
    if (ua.indexOf('chrome') > -1) {
        webkit = "Chrome";
    } else {
        webkit = "Safari";
    }
}
if (!Modernizr.input.required || webkit == "Safari") {

    $.validator.setDefaults({

        showErrors: function(map, list) {
            // there's probably a way to simplify this
            var focussed = document.activeElement;
            if (focussed && $(focussed).is("input, textarea")) {
                $(this.currentForm).tooltip("close", {
                    currentTarget: focussed
                }, true)
            }
            this.currentElements.removeAttr("title").removeClass("ui-state-highlight");
            $.each(list, function(index, error) {
                $(error.element).attr("title", error.message).addClass("ui-state-highlight");
            });
            if (focussed && $(focussed).is("input, textarea")) {
                $(this.currentForm).tooltip("open", {
                    target: focussed
                });
            }
        }

    });

    (function() {
        // use custom tooltip; disable animations for now to work around lack of refresh method on tooltip

        $("#form").tooltip({
            show: false,
            hide: false
        });

        // validate the comment form when it is submitted
        $("#form").validate();
    })();
}


$(document).ready(function() {

    var onFire = false;
    $("#form input, #contactform input").one("focus", function() {
        if (!onFire) {
            var img = new Image();
            img.onload = function(e) {};
            img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?formEntry';

            onFire = true;
        }
    });


    // process the form
    <?php echo include('formajaxsubmit.php'); ?>

});
</script>
