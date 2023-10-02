$(document).ready(function() {
    // var baseUrl = "https://business.richcores.com/api";
    var baseUrl = "http://grass-root-soft.mlmsoftwaredemo.org/api"

    $('#contact-msg').hide();

    $('#contact_form').submit(function(e) {
        e.preventDefault();

        console.log(e);

        var first_name = $("#first_name").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var captcha = $("#recaptcha").val();


        // console.log(" Name : ----- " + first_name);
        // console.log(" email : ----- " + email);
        // console.log(" subject : ----- " + subject);
        // console.log(" message : ----- " + removeTags(message));


        $.ajax({
            url: baseUrl + "/public/inquiry/submit",
            dataType: "json",
            type: "POST",
            data: { name: first_name, email: email, contact: mobile, subject: subject, message: message, recaptcha: captcha },
            // processData: false,  // tell jQuery not to process the data
            // contentType: false   // tell jQuery not to set contentType
        }).done(function(data) {
            if (data.status) {
                // alert();
                $('#contact-msg').show();
                $('#contact-msg').append(data.message);
                let id = setTimeout(function() {
                    $('#contact-msg').hide();
                }, 4000);
                $('#contact_form')[0].reset();

            }
        });

    })

    $('#grivanceRedressal').submit(function(e) {
        e.preventDefault();

        // console.log(e);

        var first_name = removeTags($("#first_name").val());
        var email = $("#email").val();
        var subject = removeTags($("#subject").val());
        var message = removeTags($("#message").val());
        var captcha = $("#recaptcha").val();

        /*
        console.log(" Name : ----- " + first_name);
        console.log(" Name : ----- " + mobile);
        console.log(" email : ----- " + email);
        console.log(" subject : ----- " + subject);
        console.log(" message : ----- " + removeTags(message));
        */

        $.ajax({
            url: baseUrl + "/public/inquiry/submit",
            dataType: "json",
            type: "POST",
            data: { name: first_name, email: email, subject: subject, message: message, recaptcha: captcha },
            // processData: false,  // tell jQuery not to process the data
            // contentType: false   // tell jQuery not to set contentType
        }).done(function(data) {
            if (data.status) {
                console.log(data.data.id)
                let messageOne = "You have successfully Registered a Complaint "
                let sucess = "<h3> Your Ticket Id is " + data.data.id + "</h3>";
                sucess = messageOne + sucess;
                // alert();
                $('#contact-msg').html(sucess);
                $('#contact-msg').show();
                // let id = setTimeout(function() {
                //    $('#contact-msg').hide();
                // }, 8000 );
                $('#grivanceRedressal')[0].reset();

            }
            //Perform ANy action after successful post data
        });

    })
})