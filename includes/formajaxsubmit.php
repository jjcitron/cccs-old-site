function checkDuplicateLead(obj, callback) {
    if (obj['Status'] == 'Errors') {
        var img = new Image();
        var img2 = new Image();
        img.onload = function(e) {};
        img2.onload = function(e) {};
        img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?existingEmailFound';
        img2.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?formErrors';
    }
    return callback();
}

$("#form, #contactform").submit(function(event) {
    var submissionUrl = "<?php echo (isset($submitPath)) ? $submitPath : "submit.php"; ?>";
    $.post(submissionUrl, $("#form, #contactform").serialize()).done(function(data) {
        data = data.replace("}1", "}");

        try {
            var obj = jQuery.parseJSON(data);
        } catch(e) {
            console.log(data);
            alert("There was a problem with your submission. Check your phone number or email");
            return;
        }

        var img = new Image();
        var redirectUrl = '<?php echo $thankYouPage; ?>#?id=' + obj["LeadID"] + '&key=' + obj["DebtAnalysisToken"];
        var errorMsg = "";
        var formError = obj["Status"] == "Fail: Bad Phone number" ||
                        obj["Status"] == "Fail: Invalid e-mail address format" ||
                        (("Errors" in obj) && obj["Errors"].indexOf("Invalid") != -1) ||
                        (("Errors" in obj) && obj["Status"] == 'Errors' && obj["Errors"][0] == 'Invalid Email Address');

        //log the response when it returns
        console.log(obj["Errors"]);
        console.log("Data Status: " + obj["Status"]);

        if (formError) {
            /*
             * Do not redirect if the reponse returns:
             * 1. Bad phone number, 2. Invalid Email Address, 3. An unknown invalid case
             */
            errorMsg = obj["Errors"].toString().split(',')[0];
            img.onload = function(e) {};
            img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?FAIL_+'+obj["Status"];
            alert("There was a problem with your submissiion. Please refresh the page and try again Errors\n" + errorMsg);
        } else {
            //Else, Redirect on successful or duplicate leads
            img.onload = function(e) {};
            img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?OID_' + obj["LeadID"];
            checkDuplicateLead(obj, function () {
                window.location = redirectUrl;
            });
        }
    });
    event.preventDefault(); //stop the form from posting via DOM
});
