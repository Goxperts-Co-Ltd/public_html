$('document').ready(function() {
    var email_state = false;
    var company_email_state = false;

    // $('a').on('click', function() {
    //     var username = $('#v-pills-2-tab').val();
    //     if (username == '') {
    //         username_state = false;
    //         return;
    //     }
    //     // $("button").attr("aria-expanded","true");
    //     console.log('true');
    //     $.ajax({
    //         url: 'register.php',
    //         type: 'post',
    //         data: {
    //             'username_check': 1,
    //             'username': username,
    //         },
    //         success: function(response) {
    //             if (response == 'taken') {
    //                 username_state = false;
    //                 $('#username').parent().removeClass();
    //                 $('#username').parent().addClass("form_error");
    //                 $('#username').siblings("span").text('Sorry... Username already taken');
    //             } else if (response == 'not_taken') {
    //                 username_state = true;
    //                 $('#username').parent().removeClass();
    //                 $('#username').parent().addClass("form_success");
    //                 $('#username').siblings("span").text('Username available');
    //             }
    //         }
    //     });
    // });
    $('#candidateEmail').bind('keyup change', function() {
        var email = $('#candidateEmail').val();
        if (email == '') {
            email_state = false;
            return;
        }
        $.ajax({
            url: ajax_object.ajaxurl,
            type: 'post',
            data: {
                'action': 'email_check',
                'email': email,
            },
            success: function(data) {
                if (data == 'taken') {
                    email_state = false;
                    $('#candidateEmail').parent().removeClass();
                    $('#candidateEmail').parent().addClass("col-md-12 mb-3 mb-md-0 form_error");
                    $('#candidateEmail').siblings("span").text('Sorry... Email already taken');
                    $('#Candidate_Register').prop('disabled', true);
                } else if (data == 'not_taken') {
                    email_state = true;
                    $('#candidateEmail').parent().removeClass();
                    $('#candidateEmail').parent().addClass("col-md-12 mb-3 mb-md-0 form_success");
                    $('#candidateEmail').siblings("span").text('Email available!');
                    $('#Candidate_Register').prop('disabled', false);
                }
            }
        });
    });

    $('#Company_register').click(function() {
        var companyName = $('#companyName').val();
        var companyEmail = $('#companyEmail').val();
        var companyPhone = $('#companyPhone').val();
        var webSite = $('#webSite').val();
        var companyLocation = $('#companyLocation').val();
        var companySource = $('#companySource').val();
        var companyNotes = $('#companyNotes').val();
        $.ajax({
            url: ajax_object.ajaxurl,
            type: 'post',
            data: {
                //'save': 1,
                'action': 'my_company_register',
                'companyName': companyName,
                'companyEmail': companyEmail,
                'companyPhone': companyPhone,
                'webSite': webSite,
                'companyLocation': companyLocation,
                'companySource': companySource,
                'companyNotes': companyNotes,
            },
            success: function(data) {
                alert(data);
            }
        });
        // }
    });
    $("#v-pills-tab a").click(function(e) {
        setTimeout(function() {
            //proceed call for 3 seconds kasi nag adjust pa ng value para mas accurate
            var freelancerTab = $('#v-pills-1-tab').attr('aria-selected');
            var employerTab = $('#v-pills-2-tab').attr('aria-selected');
            if (employerTab == true) {
                // Disable candidate registration form 
                // $("#candidate_form").prop("disabled", true);

            }

        }, 3000);
    });
    $('#companyEmail').bind('keyup change', function() {
        var company_email = $('#companyEmail').val();
        if (company_email == '') {
            company_email_state = false;
            return;
        }
        $.ajax({
            url: ajax_object.ajaxurl,
            type: 'post',
            data: {
                'action': 'company_email_check',
                'company_email': company_email,
            },
            success: function(data) {
                console.log(data);
                if (data == 'taken') {
                    email_state = false;
                    $('#companyEmail').parent().removeClass();
                    $('#companyEmail').parent().addClass("col-md-12 mb-3 mb-md-0 form_error");
                    $('#companyEmail').siblings("span").text('Sorry... Email already taken');
                    $('#Company_register').prop('disabled', true);
                } else if (data == 'not_taken') {
                    email_state = true;
                    $('#companyEmail').parent().removeClass();
                    $('#companyEmail').parent().addClass("col-md-12 mb-3 mb-md-0 form_success");
                    $('#companyEmail').siblings("span").text('Email available!');
                    $('#Company_register').prop('disabled', false);
                }
            }
        });
    });
});