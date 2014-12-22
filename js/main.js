//************** admin

var params = {};
$(':input[name=login]').focus(function () {
    $('.tool1').removeClass('active_login');
    $('input[name=login]').removeClass('red_input');
});
$(':input[name=password]').focus(function () {
    $('.tool3').removeClass('active_pass');
    $('input[name=password]').removeClass('red_input');
});

$('.button_auth').click(function () {

    $form = $('#auth');
    if ($form.find('input[name=login]').val() === '') {
        $('label.tooltips span.tool1').addClass('active_login');
        $('input[name=login]').addClass('red_input');
    } else {
        params.login = $form.find('input[name=login]').val();
    }
    if ($form.find('input[name=password]').val() === '') {
        $('label.tooltips span.tool3').addClass('active_pass');
        $('input[name=password]').addClass('red_input');
    } else {
        params.password = $form.find('input[name=password]').val();
    }
    params.auth = 1;
    $.post('functions.php', params, function (data) {
        console.log(data);
        if (data === 'ok') {
            window.location.replace("/works");
        } else if (data === 'no_login') {
            $('.input_login, .input_pass').val('');
            $('.error_message').slideDown();
        }

    });
    return false;
});

// ********************** end admin
//***********************contacts 

function clear_form() {
    $(':input[name=user]').focus(function () {
        $('.tool1').removeClass('active_name');
        $('input[name=user]').removeClass('red_input');
    });
    if (($(':input').val() !== '') || ($($('.message').val() !== ''))) {
        $('.email, .message, .input-capcha, .name').val('');
        $('.email, .input-capcha, .message, .name').focus().blur();

    }
    $(':input[name=email]').focus(function () {
        $('.tool2').removeClass('active_email');
        $('input[name=email]').removeClass('red_input');
    });
    $(':input[name=capcha]').focus(function () {
        $('.tool4').removeClass('active_capcha');
        $('input[name=capcha]').removeClass('red_input');
    });
    $('.message:input').focus(function () {
        $('.tool3').removeClass('active_message');
        $('.message:input').removeClass('red_input');
    });
    $('.success_message').slideUp();
    $('.error_message').slideUp();
}

$('.button_submit').click(function () {

    $form = $('#send_message');
    if ($form.find('input[name=user]').val() === '') {
        $('label.tooltips span.tool1').addClass('active_name');
        $('input[name=user]').addClass('red_input');
    } else {
        params.user = $form.find('input[name=user]').val();
    }
    if ($form.find('input[name=email]').val() === '') {
        $('label.tooltips span.tool2').addClass('active_email');
        $('input[name=email]').addClass('red_input');
    } else {
        params.email = $form.find('input[name=email]').val();
    }
    if ($form.find('.message').val() === '') {
        $('label.tooltips span.tool3').addClass('active_message');
        $('.message').addClass('red_input');
    } else {
        params.message = $form.find('.message').val();
    }
    if ($form.find('input[name=capcha]').val() === '') {
        $('label.tooltips span.tool4').addClass('active_capcha');
        $('input[name=capcha]').addClass('red_input');
    } else {
        params.capcha = $form.find('input[name=capcha]').val();
    }
    params.send = 1;
    $.post('functions.php', params, function (data) {
        console.log(data);
        if (data === 'ok') {
            clear_form();
            $('.success_message').slideToggle();
        } else if (data === 'no') {
            clear_form();
            $('.error_message').slideToggle();
        } else if (data === 'capcha_no') {
            $('label.tooltips span.tool4').addClass('active_capcha');
            $('input[name=capcha]').addClass('red_input');
        } else if (data === 'email_no') {
            $('label.tooltips span.tool2').addClass('active_email');
            $('input[name=email]').addClass('red_input');
        }

    });
    return false;
});

$('.button_clear').click(function () {
    clear_form();
})
$('body,html').animate({scrollTop: 0}, 0);

//************************end contacts
//************************footer

$(document).ready(function () {
    var link = window.location.pathname;
    $('#navigation li a[href="' + link + '"]').parent().addClass('active');
});

$('.unlock').click(function () {
    params.exit = 1;
    $.post('functions.php', params, function (data) {
        console.log(data);
        if (data === 'ok') {
            $('.castle').removeClass('unlock').addClass('lock');
            $('.link_add').css('display', 'none');
        }
        return false;
    });
});

//************************end footer
//************************ works 

$(document).ready(function () {
    $('.add').click(function () {
        $('#myModal').modal('show');
        clear_form_add();
        return false;
    });

    function clear_form_add() {
        $(':input[name=name_project]').focus(function () {
            $('.tool5').removeClass('active_nameproject');
            $('input[name=name_project]').removeClass('red_input');
        });
        if (($(':input').val() !== '') || ($($('.opisanie').val() !== ''))) {
            $('.name_project, .url_project, .opisanie, .b-form-modal_inputs-upload').val('');
            $('div#file_name').html('Загрузите изображение');
        }
        $('#file_project').click(function () {
            $('.tool6').removeClass('active_file');
            $('#file_name').removeClass('red_input');
        });
        $(':input[name=url_project]').focus(function () {
            $('.tool7').removeClass('active_url');
            $('input[name=url_project]').removeClass('red_input');
        });
        $('.opisanie:input').focus(function () {
            $('.tool8').removeClass('active_opisanie');
            $('.opisanie:input').removeClass('red_input');
        });
        $('.tool6').removeClass('active_file');
        $('#file_name').removeClass('red_input');
        $('.tool5').removeClass('active_nameproject');
        $('input[name=name_project]').removeClass('red_input');
        $('.tool7').removeClass('active_url');
        $('input[name=url_project]').removeClass('red_input');
        $('.tool8').removeClass('active_opisanie');
        $('.opisanie:input').removeClass('red_input');
        $('.success_message').slideUp();
        $('.error_message').slideUp();
    }

    $('.button_addpr').click(function () {
        var btnUpload = $('.button_addpr');
        $form = $('#add_project');
        if ($form.find('input[name=name_project]').val() === '') {
            $('label.tooltips span.tool5').addClass('active_nameproject');
            $('input[name=name_project]').addClass('red_input');
        } else {
            params.name_proj = $form.find('input[name=name_project]').val();
        }
        if ($form.find('input[name=url_project]').val() === '') {
            $('label.tooltips span.tool7').addClass('active_url');
            $('input[name=url_project]').addClass('red_input');
        } else {
            params.url = $form.find('input[name=url_project]').val();
        }
        if ($form.find('.opisanie').val() === '') {
            $('label.tooltips span.tool8').addClass('active_opisanie');
            $('.opisanie').addClass('red_input');
        } else {
            params.opisanie = $form.find('.opisanie').val();
        }
        if ($form.find('input[name=file_project]').val() === '') {
            $('label.tooltips span.tool6').addClass('active_file');
            $('#file_name').addClass('red_input');
        } else {
            params.file = $form.find('input[name=file_project]').val();
        }
        params.add = 1;
        $.post('functions.php', params, function (data) {
//                console.log(data);
            if (data === 'ok') {
                $('#myModal').modal('hide');
                $('#myModalSuc').modal('show');
                $('.info').append("<div class='my_work'>\n\
                    <div class='view second-effect'>\n\
                    <img src='img/works/antipin.png' class='works'>\n\
                    <div class='mask'><a href='" + params.url + "' class='inform' target='_blank'>Посмотреть</a></div>\n\
                    </div><a href='" + params.url + "'>" + params.url + "</a>\n\
                    <p>" + params.opisanie + "</p>\n\
                    </div>");
            } else if (data === 'no') {
                alert('no');
            }
            return false;
        });


        return false;
    });

    $('form input[type=file]').change(function () {
        if ($('form input[type=file]').val() !== '') {
            $('div#file_name').html($('form input[type=file]').val());
        } else {
            $('div#file_name').html('Загрузите изображение');
        }
    });
});

//************************end works

clear_form_add();
clear_form();



