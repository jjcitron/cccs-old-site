(function (b) { b.support.touch = "ontouchend" in document; if (!b.support.touch) { return; } var c = b.ui.mouse.prototype, e = c._mouseInit, a; function d(g, h) { if (g.originalEvent.touches.length > 1) { return; } g.preventDefault(); var i = g.originalEvent.changedTouches[0], f = document.createEvent("MouseEvents"); f.initMouseEvent(h, true, true, window, 1, i.screenX, i.screenY, i.clientX, i.clientY, false, false, false, false, 0, null); g.target.dispatchEvent(f); } c._touchStart = function (g) { var f = this; if (a || !f._mouseCapture(g.originalEvent.changedTouches[0])) { return; } a = true; f._touchMoved = false; d(g, "mouseover"); d(g, "mousemove"); d(g, "mousedown"); }; c._touchMove = function (f) { if (!a) { return; } this._touchMoved = true; d(f, "mousemove"); }; c._touchEnd = function (f) { if (!a) { return; } d(f, "mouseup"); d(f, "mouseout"); if (!this._touchMoved) { d(f, "click"); } a = false; }; c._mouseInit = function () { var f = this; f.element.bind("touchstart", b.proxy(f, "_touchStart")).bind("touchmove", b.proxy(f, "_touchMove")).bind("touchend", b.proxy(f, "_touchEnd")); e.call(f) } })(jQuery);
Number.prototype.formatMoney = function (c, d, t) { var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "." : d, t = t == undefined ? "," : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0; return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "") };

$(function () {



    //	var f = document.getElementsByTagName('SCRIPT')[0], p = document.createElement('SCRIPT');
    //	p.type = 'text/javascript';
    //	p.async = true;
    //	p.src = '//assets.pinterest.com/js/pinit.js';
    //	p.setAttribute('data-pin-hover', true);
    //	f.parentNode.insertBefore(p, f);

    //	//set the attribute for pinterest no hover for all img tag
    //	//pin will not show 

    //	$('img').attr('data-pin-no-hover', true);
    //	//$('#itc-slideshow #thumbs .thumbs li .thumbs img').attr('data-pin-no-hover', true);
    //	
    //	//remove the attribute for only this class
    //	$('.pinterest').removeAttr('data-pin-no-hover');
    //	
    //document.domain = 'portal.debtfree.local';
//    var dom = window.location.host;
//    var temp = '';
//    var count = (dom.match(/./g) || []).length
//    if (count == 1) {
//        temp = dom;
//    } else if (count > 1) {

//        temp = dom.substr(dom.indexOf('.') + 1);
    //    }


    if (document.documentMode == 9 || document.documentMode == 8) {

        $.getScript('/res/js/jquery.placeholder.js', function () {
            $('input, textarea').placeholder();
        });
    }

    if ($('.overlay').length) {
        $('.overlay,.overlay .close').click(function () {
            $('.overlay').fadeOut('fast');
        });
        $('.overlay .inner').click(function (e) {
            e.stopPropagation();
        });
    }

    if ($('.footer-logos .ico').length) {
        $('.footer-logos .ico').click(function () {
            $('.logo-info .inf').hide();
            $('.logo-info #info-' + this.id).show();
            $('.logo-overlay').fadeIn('fast').click(function () {
                $('.logo-overlay').fadeOut('fast');
            });

        });
    }

    if ($('.header-logos .ico').length) {
        $('.header-logos .ico').click(function () {
            $('.logo-info .inf').hide();
            $('.logo-info #info-' + this.id).show();
            $('.logo-overlay').fadeIn('fast').click(function () {
                $('.logo-overlay').fadeOut('fast');
            });

        });
    }

    if ($('.lead .ico').length) {
        $('.lead .ico').click(function () {
            $('.logo-info .inf').hide();
            $('.logo-info #info-' + this.id).show();
            $('.logo-overlay').fadeIn('fast').click(function () {
                $('.logo-overlay').fadeOut('fast');
            });

        });


    }



    $(document).on('focus', '.lead input[type="text"],.lead input[type="tel"],.lead input[type="email"]', function () {
        if (this.value == this.defaultValue) {
            this.select();
        }
    });
    $(document).on('blur', '.lead input[type="text"],.lead input[type="tel"],.lead input[type="email"]', function () {
        if (this.value == '') {
            this.value = this.defaultValue;
        }
    });

    $(document).on('blur', '.lead input[name="phone"]', function () {
        if (this.value.replace(/[^0-9]/).length == 10) {
            this.value = '(' + this.value.replace(/[^0-9]/).substr(0, 3) + ') ' + this.value.replace(/[^0-9]/).substr(3, 3) + '-' + this.value.replace(/[^0-9]/).substr(6);
        }
    });

    $(document).on('blur', '.lead input[name="phone2"]', function () {
        if (this.value.replace(/[^0-9]/).length == 10) {
            this.value = '(' + this.value.replace(/[^0-9]/).substr(0, 3) + ') ' + this.value.replace(/[^0-9]/).substr(3, 3) + '-' + this.value.replace(/[^0-9]/).substr(6);
        }
    });


    if ($('.lead #slider').length) {
        $('.lead #slider').slider({
            value: parseInt($('.lead #debt').val()),
            max: 50000,
            min: 1000,
            step: 150,
            slide: function (e, u) {
                $('.lead #debt').val(u.value);
                $('.lead .amt').html((u.value == 1000 ? '<' : '') + '$' + u.value.formatMoney().replace('.00', '') + (u.value == 50000 ? '+' : ''))
            }
        });
        $('#primary-form #slider').draggable();
    }

    if ($('.toggle').length) {
        $('.toggle .title').click(function () {
            if ($(this).parent().find('.hidden').is(':visible')) {
                $(this).parent().find('.hidden').slideUp();
            } else {
                $(this).parent().find('.hidden').slideDown();
            }
        })
    }

    if ($('.home .testimonial').length > 1) {
        var slide = 0;
        $('.home .testimonial').each(function () {
            if ($(this).is(':visible')) {
                slide = this.id;
            } else {
                $('#' + this.id + ' .person').css({ left: '-' + $('#' + this.id + ' .person').width() + 'px', opacity: 0 });
                $('#' + this.id + ' .txt').css({ left: '+=380px', opacity: 0 });
                $('#' + this.id + ' .bg').css({ bottom: '-' + $('#' + this.id + ' .bg').height() + 'px', opacity: 0 });
            }
        });

        $('.home .testimonial').show();


        var do_slide = function () {
            if ($('.home .testimonial:eq(' + ($('#' + slide).index()) + ')').length) {
                var next_slide = $('.home .testimonial:eq(' + ($('#' + slide).index()) + ')').prop('id');
            } else {
                next_slide = $('.home .testimonial:eq(0)').prop('id');
            }


            $('#' + slide + ' .person').animate({ left: '-' + $('#' + slide + ' .person').width() + 'px', opacity: 0 }, 750, function () {

                $('#' + next_slide + ' .person').animate({ left: 0, opacity: 1 }, 750);

            });

            $('#' + slide + ' .txt').animate({ left: '+=380px', opacity: 0 }, 750, function () {

                $('#' + next_slide + ' .txt').animate({ left: '-=380px', opacity: 1 }, 750);

            });

            $('#' + slide + ' .bg').animate({ bottom: '-' + $('#' + slide + ' .bg').height() + 'px', opacity: 0 }, 750, function () {

                $('#' + next_slide + ' .bg').animate({ bottom: 0, opacity: 1 }, 750);

            });

            slide = next_slide;
        };


        var slide_duration = 7000, slider = setInterval(do_slide, slide_duration);

        $('.home .testimonial').mouseover(function () {
            clearInterval(slider);

        }).mouseout(function () {
            slider = setInterval(do_slide, slide_duration);

        });

    }


    if ($('.banners .banner').length > 1) {
        var slide = 'banner1';

        var do_slide = function () {
            var num = parseInt(slide.replace(/banner/, ''));

            if ($('.banners #banner' + (num + 1)).length) {
                var next_slide = 'banner' + (num + 1);
            } else {
                next_slide = 'banner1';

            }

            $('.banners #' + slide).fadeOut('slow', function () {

            });
            $('#' + next_slide).fadeIn('slow');

            slide = next_slide;

        };


        var slide_duration = 9000, slider = setInterval(do_slide, slide_duration);

        $('.banners').mouseover(function () {
            clearInterval(slider);

        }).mouseout(function () {
            slider = setInterval(do_slide, slide_duration);

        });
    }

    if ($('form.dmp-comparison').length) {
        $('form.dmp-comparison #val').focus(function () {
            if (this.value == $(this).prop('defaultValue')) {
                this.value = '';
            }
        }).blur(function () {
            if (this.value == '') {
                this.value = this.defaultValue;
            } else {
                this.value = '$' + (parseFloat(this.value.replace(/[^0-9.-]/g, ''))).formatMoney().replace('.00', '');
            }

        });

        $('form.dmp-comparison').submit(function () {
            if ($('form.dmp-comparison #val').val() == '' || $('form.dmp-comparison #val').val() == $('form.dmp-comparison #val').prop('defaultValue') || parseFloat($('form.dmp-comparison #val').val().replace(/[^0-9.-]/, '')) == 0) {
                $('form.dmp-comparison #val').parent('.iw').addClass('error');
                $('form.dmp-comparison #val').select();
                setTimeout(function () {
                    $('form.dmp-comparison #val').parent('.iw').removeClass('error');
                }, 2000);
                return false;
            }

            $('.overlay').hide();

            $('.logo-info .info').hide();
            console.log('$' + (parseFloat($('form.dmp-comparison #val').val().replace(/[^0-9.-]/, '')) * .21).formatMoney().replace('.00', ''));
            $('.logo-info #info-dmp .val').html('$' + (parseFloat($('form.dmp-comparison #val').val().replace(/[^0-9.-]/g, '')) * .021).formatMoney().replace('.00', ''));
            $('.logo-info #info-dmp').show();

            $('.overlay .cont').click(function (e) {
                e.stopPropagation();
            })
            $('.logo-overlay').fadeIn('fast').click(function () {
                $('.overlay').fadeOut('fast');
            });

            return false;
        });
    }

    if ($('.itc').length) {
        $('.itc #cc').change(function () {
            $('.itc .loading').show();
            $.ajax({
                type: "POST",
                url: "/res/ajax/itc.php",
                data: { id: $('.itc #cc').val() },
                success: function (o) {
                    $('.itc .slideshow-con').hide().html(o);
                    gallery();
                    $('img').attr('data-pin-no-hover', true);
                }
            })
        });

        $('.itc #cc').change();
    }

    if ($('.quiz').length) {
        //$('.quiz input[type="radio"]').prop('checked','');
        $('.quiz label.rad input').change(function () {
            $('.quiz label.rad input[name="' + $(this).prop('name') + '"]').parent('label').removeClass('checked');
            $(this).parent('label').addClass('checked');
        });
        $('.quiz .reset').click(function () {
            $('.quiz label.rad').removeClass('checked');
            $('.quiz input[type="radio"]').prop('checked', '');
        });
    }

    if ($('.sidebar .open-lead-form').length) {
        $('.sidebar .open-lead-form').click(function () {
            $('.lead-overlay').show();
        });
    }

    if ($('a.youtube-video').length) {
        $('a.youtube-video').click(function () {
            $('.yt-overlay iframe').prop('src', '//youtube.com/embed/' + $(this).data('video') + '?autoplay=1');
            $('.yt-overlay').show();
            return false;
        });

        $('.yt-overlay').click(function () {
            $('.yt-overlay iframe').prop('src', '');
        });
    }

    if ($('.open-housing-form').length) {
        $('.open-housing-form').click(function () {
            if (!$('.housing-overlay .inner').length) {
                $('.housing-overlay').load('/res/inc/housing-form.php' + ($('.housing-overlay').hasClass('reverse-mortgage') ? '?rm=' : ''), function () {
                    $('.ShowPhoneNumber').text($('.ShowPhoneNumber:eq(0)').text())
                    $('.housing-overlay #lender').change(function () {
                        if ($(this).val() == 'Yes') {
                            $('.housing-overlay .lender-info').show();
                        } else {
                            $('.housing-overlay .lender-info').hide();
                        }
                    });

                    $('.overlay .inner').click(function (e) {
                        e.stopPropagation();
                    });
                    $('.overlay .close').click(function (e) {
                        $('.overlay').fadeOut();
                    });
                });
            }
            $('.housing-overlay').css({ height: $(document).height() + 'px' }).show();
            $(window).scrollTop(0);
        });

    }


    //Infographic Popups

    // Gluttons For Payments

    $('.open-infographic').click(function () {

        if (!$('.infographic-overlay .inner').length) {
            $('.infographic-overlay').load('/res/inc/glutton-infographic.php/' + ($('.infographic-overlay').hasClass('infographic_popup') ? '?ip=' : ''), function () {

                $('.overlay .inner').click(function (e) {
                    e.stopPropagation();
                });
                $('.overlay .close').click(function (e) {
                    $('.overlay').fadeOut();
                });
            });
        }
        $('.infographic-overlay').css({ height: $(document).height() + 'px' }).show();
        $(window).scrollTop(0);
    });

    // Credit Score Idols

    $('.open-infographic-idols').click(function () {

        if (!$('.infographic-overlay .inner').length) {
            $('.infographic-overlay').load('/res/inc/credit-idols-infographic.php/' + ($('.infographic-overlay').hasClass('infographic_popup_credit-score-idols') ? '?ip=' : ''), function () {

                $('.overlay .inner').click(function (e) {
                    e.stopPropagation();
                });
                $('.overlay .close').click(function (e) {
                    $('.overlay').fadeOut();
                });
            });
        }
        $('.infographic-overlay').css({ height: $(document).height() + 'px' }).show();
        $(window).scrollTop(0);
    });

    // Get Off The Ground

    $('.open-infographic-plane').click(function () {

        if (!$('.infographic-overlay .inner').length) {
            $('.infographic-overlay').load('/res/inc/get-off-the-ground-infographic.php/' + ($('.infographic-overlay').hasClass('infographic_popup_get-off-the-ground') ? '?ip=' : ''), function () {

                $('.overlay .inner').click(function (e) {
                    e.stopPropagation();
                });
                $('.overlay .close').click(function (e) {
                    $('.overlay').fadeOut();
                });
            });
        }
        $('.infographic-overlay').css({ height: $(document).height() + 'px' }).show();
        $(window).scrollTop(0);
    });

    // Take The Plunge

    $('.open-infographic-plunge').click(function () {

        if (!$('.infographic-overlay .inner').length) {
            $('.infographic-overlay').load('/res/inc/take-the-plunge-infographic.php/' + ($('.infographic-overlay').hasClass('infographic_popup_take-the-plunge') ? '?ip=' : ''), function () {

                $('.overlay .inner').click(function (e) {
                    e.stopPropagation();
                });
                $('.overlay .close').click(function (e) {
                    $('.overlay').fadeOut();
                });
            });
        }
        $('.infographic-overlay').css({ height: $(document).height() + 'px' }).show();
        $(window).scrollTop(0);
    });

    // Alchemy of Equity

    $('.open-infographic-alchemy').click(function () {

        if (!$('.infographic-overlay .inner').length) {
            $('.infographic-overlay').load('/res/inc/alchemy-of-equity-infographic.php/' + ($('.infographic-overlay').hasClass('infographic_popup_alchemy') ? '?ip=' : ''), function () {

                $('.overlay .inner').click(function (e) {
                    e.stopPropagation();
                });
                $('.overlay .close').click(function (e) {
                    $('.overlay').fadeOut();
                });
            });
        }
        $('.infographic-overlay').css({ height: $(document).height() + 'px' }).show();
        $(window).scrollTop(0);
    });

    // Mountain of Debt, Skiing

    $('.debt-consol-skiing').click(function () {

        if (!$('.infographic-overlay .inner').length) {
            $('.infographic-overlay').load('/res/inc/debt-consol-skiing-infographic.php/' + ($('.infographic-overlay').hasClass('infographic_popup_debt-consol-skiing') ? '?ip=' : ''), function () {

                $('.overlay .inner').click(function (e) {
                    e.stopPropagation();
                });
                $('.overlay .close').click(function (e) {
                    $('.overlay').fadeOut();
                });
            });
        }
        $('.infographic-overlay').css({ height: $(document).height() + 'px' }).show();
        $(window).scrollTop(0);
    });


    // Lead

    if ($('.lead-ab').length) {
        $('.lead-ab .btn.call').click(function () {
            if (!$('.lead-overlay .lead').length) {
                get_form('callback');
            }
            $('.lead-overlay').show();
            $('.lead-overlay .lead').prop('action', $('.lead-overlay .lead #callback-action').val());
            $('.lead-overlay .lead #online').hide();
            $('.lead-overlay .lead #callback').addClass('lg').show();

        });
        $('.lead-ab .btn.online').click(function () {
            if (!$('.lead-overlay .lead').length) {
                get_form('online');
            }
            $('.lead-overlay').show();
            $('.lead-overlay .lead').prop('action', $('.lead-overlay .lead #online-action').val());
            $('.lead-overlay .lead #callback').hide();
            $('.lead-overlay .lead #online').addClass('lg').show();
        });
    }

    if ($('.self_help_booklets').length && $('.self_help_booklets .item').length > 1) {
        $('.self_help_booklets #val').val(1)
        $('.self_help_booklets .scroll a.next').click(function () {
            var i = parseInt($('.self_help_booklets #val').val());
            var c = parseInt($('.self_help_booklets #count').val());
            if (i == c) {
                var fadeIn = 1;
                var fadeOut = $('.self_help_booklets .item').length;
                i = 1;
            } else {
                var fadeIn = i + 1;
                var fadeOut = i;
                i++;
            }

            $('.self_help_booklets #val').val(i)

            $('.self_help_booklets .item:eq(' + (fadeOut - 1) + ')').fadeOut('fast', function () {
                $('.self_help_booklets .item:eq(' + (fadeIn - 1) + ')').fadeIn('fast');
                $('.self_help_booklets .count .cur').text(i);
            });

        });
        $('.self_help_booklets .scroll a.prev').click(function () {
            var i = parseInt($('.self_help_booklets #val').val());
            var c = parseInt($('.self_help_booklets #count').val());
            if (i == 1) {
                var fadeOut = 1;
                var fadeIn = $('.self_help_booklets .item').length;
                i = $('.self_help_booklets .item').length;
            } else {
                var fadeIn = i - 1;
                var fadeOut = i;
                i--;
            }

            $('.self_help_booklets #val').val(i)

            $('.self_help_booklets .item:eq(' + (fadeOut - 1) + ')').fadeOut('fast', function () {
                $('.self_help_booklets .item:eq(' + (fadeIn - 1) + ')').fadeIn('fast');
                $('.self_help_booklets .count .cur').text(i);
            });

        });

    }

    $('#header .con .ico').click(function () {
        $('.footer-logos #' + this.id).click();
    });

    $('.lead .ico').click(function () {
        $('.footer-logos #' + this.id).click();
    });


    $('#header .con .ico').click(function () {
        $('.inline-logos #' + this.id).click();
    });




    if ($('.sidebar .dmp_comparison').length) {
        $('.sidebar .dmp_comparison .disclaimer').click(function () {
            $('.dmp-comparison-overlay').fadeIn('fast');
        });
    }

    var f = document.getElementsByTagName('SCRIPT')[0], p = document.createElement('SCRIPT');
    p.type = 'text/javascript';
    p.async = true;
    p.src = '//assets.pinterest.com/js/pinit.js';
    p.setAttribute('data-pin-hover', true);
    f.parentNode.insertBefore(p, f);

    //set the attribute for pinterest no hover for all img tag
    //pin will not show 

    $('img').attr('data-pin-no-hover', true);

    //$('#itc-slideshow #thumbs .thumbs li .thumbs img').attr('data-pin-no-hover', true);

    //remove the attribute for only this class
    $('.pinterest').removeAttr('data-pin-no-hover');

});

function get_form(method) {
    $.ajax({
        type: "POST",
        date: { method: method },
        url: "/res/inc/form.php",
        async: false,
        success: function (x) {
            $('.lead-overlay .inner').prepend(x);
            $('.lead #slider').slider({
                value: parseInt($('.lead #debt').val()),
                max: 50000,
                min: 1000,
                step: 150,
                slide: function (e, u) {
                    $('.lead #debt').val(u.value);
                    $('.lead .amt').html((u.value == 1000 ? '<' : '') + '$' + u.value.formatMoney().replace('.00', '') + (u.value == 50000 ? '+' : ''))
                }
            });
        }
    });

}

function validate(form, buttonclicked) {


    var f = ['fname', 'lname', 'email', 'phone', 'state', 'verify-val'], hash = $(form).find('#hash').val();

    for (var x = 0; x < f.length; x++) {

        if ($(form).find('#' + f[x] + hash).length && ($(form).find('#' + f[x] + hash).val() == '' || $(form).find('#' + f[x] + hash).val() == $(form).find('#' + f[x] + hash).prop('defaultValue'))) {
            if (f[x] == 'state') {
                $('.lead #' + f[x] + hash).parent().addClass('error');
            } else {
                $('.lead #' + f[x] + hash).addClass('error').select();
            }

            setTimeout(function () {
                if (f[x] == 'state') {
                    $(form).find('#' + f[x] + hash).parent().removeClass('error');
                } else {
                    $(form).find('#' + f[x] + hash).removeClass('error');
                }
            }, 3000)
            return false;
        }

        if (f[x] == 'fname' && $(form).find('#fname' + hash).val().replace(/[^A-Za-z-]/g, '') != $(form).find('#fname' + hash).val()) {
            $(form).find('#' + f[x] + hash).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x] + hash).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'lname' && $(form).find('#lname' + hash).val().replace(/[^A-Za-z-]/g, '') != $(form).find('#lname' + hash).val()) {
            $(form).find('#' + f[x] + hash).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x] + hash).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'email' && !(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test($(form).find('#email' + hash).val())) {

            $(form).find('#' + f[x] + hash).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x] + hash).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'phone' && $(form).find('#phone' + hash).val().replace(/[^0-9]/g, '').length != 10) {
            $(form).find('#' + f[x] + hash).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x] + hash).removeClass('error');
            }, 3000)
            return false;
        }



        if ($(form).find('#phone2' + hash).val().length > 0 && $(form).find('#phone2' + hash).val().replace(/[^0-9]/g, '').length != 10 ) {
            $(form).find('#phone2'  + hash).addClass('error').select();

            setTimeout(function () {
                $(form).find('#phone2' + hash).removeClass('error');
            }, 3000)
            return false;
        }

    }

    if ($(form).find('#verify-val' + hash).length) {
        $.ajax({
            type: "POST",
            url: "/res/ajax/ajax.captcha.php",
            data: 'c=' + $(form).find('#verify-val' + hash).val(),
            async: false,
            success: function (x) {

                //console.log(x);
                if (x == '') {
                    $(form).find('input.submit').addClass('processing');
                    //$(form).find('input.submit').val('Processing...');				
                    $(form).find('input.submit' + '.' + buttonclicked).val('Processing...');
                    $(form).attr('onsubmit', '').submit();
                } else {

                    $(form).find('#verify-val' + hash).addClass('error').select();
                    setTimeout(function () {
                        $(form).find('#verify-val' + hash).removeClass('error');
                    }, 3000);
                    return false;
                }
            }
        });
    } else {
        $(form).find('input.submit').addClass('processing');
        //$(form).find('input.submit').val('Processing...');			
        $(form).find('input.submit' + '.' + buttonclicked).val('Processing...');

        $(form).attr('onsubmit', '').submit();
    }
    return false;
}

function validate_housing() {
    if ($('.housing-overlay .set1').hasClass('active')) {
        var f = ['fname', 'lname', 'email', 'cstate', 'phone'];
    } else {
        var f = ['address1', 'city', 'state', 'zip'];
    }

    for (var x = 0; x < f.length; x++) {
        if ($('.housing-overlay #' + f[x]).val() == '') {
            $('.housing-overlay #' + f[x]).focus().closest('.iw').addClass('error');

            setTimeout(function () {
                $('.housing-overlay #' + f[x]).closest('.iw').removeClass('error');
            }, 3000)
            return false;
        }
    }

    if ($('.housing-overlay .info.set1').hasClass('active')) {
        $('.housing-overlay .set1').removeClass('active').hide();
        $('.housing-overlay .set2').addClass('active').show();
        $('.housing-overlay .submit').val('Get My Free Consultation');
        return false;
    }

    $.ajax({
        type: "POST",
        url: "/res/ajax/housing-submit.php",
        data: $('.housing-overlay form').serialize(),
        success: function () {
           
            $(window).scrollTop(0);
            $('.housing-overlay .set2').removeClass('active').hide();
            $('.housing-overlay .submit').hide();
            $('.housing-overlay .complete').show();
        }
    });

    setTimeout(function () {
        location.reload();
    }, 10000);

    if (f[x] == 'name' && $(form).find('#name' + hash).val().replace(/[^A-Za-z-]/g, '') != $(form).find('#name' + hash).val()) {
        $(form).find('#' + f[x] + hash).addClass('error').select();

        setTimeout(function () {
            $(form).find('#' + f[x] + hash).removeClass('error');
        }, 3000)
        return false;
    }
    if (f[x] == 'email' && !(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test($(form).find('#email' + hash).val())) {

        $(form).find('#' + f[x] + hash).addClass('error').select();

        setTimeout(function () {
            $(form).find('#' + f[x] + hash).removeClass('error');
        }, 3000)
        return false;
    }
    if (f[x] == 'state') {
        $('.lead #' + f[x] + hash).parent().addClass('error');
    } else {
        $('.lead #' + f[x] + hash).addClass('error').select();
    }

    setTimeout(function () {
        if (f[x] == 'state') {
            $(form).find('#' + f[x] + hash).parent().removeClass('error');
        } else {
            $(form).find('#' + f[x] + hash).removeClass('error');
        }
    }, 3000)
    return false;
}

function showThankyou() {

    $(window).scrollTop(0);
    $('.housing-overlay .set2').removeClass('active').hide();
    $('.housing-overlay .submit').hide();
    $('.housing-overlay .complete').show();
   
    return false;

}


function validate_ate(form) {

    var f = ['notes', 'name', 'email', 'city', 'state'];

    for (var x = 0; x < f.length; x++) {

        if ($(form).find('#' + f[x]).length && ($(form).find('#' + f[x]).val() == '' || $(form).find('#' + f[x]).val() == $(form).find('#' + f[x]).prop('defaultValue'))) {
            if (f[x] == 'state') {
                $('.ate #' + f[x]).parent().addClass('error');
            } else {
                $('.ate #' + f[x]).addClass('error').select();
            }

            setTimeout(function () {
                if (f[x] == 'state') {
                    $(form).find('#' + f[x]).parent().removeClass('error');
                } else {
                    $(form).find('#' + f[x]).removeClass('error');
                }
            }, 3000)
            return false;
        }

        if (f[x] == 'name' && $(form).find('#name').val().replace(/[^A-Za-z-]/g, '') != $(form).find('#name').val()) {
            $(form).find('#' + f[x]).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'city' && $(form).find('#city').val().replace(/[^A-Za-z-]/g, '') != $(form).find('#city').val()) {
            $(form).find('#' + f[x]).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'notes' && ($(form).find('#' + f[x]).val() == '' || $(form).find('#' + f[x]).val() == $(form).find('#' + f[x]).prop('defaultValue'))) {
            $(form).find('#' + f[x]).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'email' && !(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test($(form).find('#email').val())) {

            $(form).find('#' + f[x]).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }


    }

    $.ajax({
        type: "POST",
        url: "/res/ajax/ate-submit.php",
        data: $(form).serialize(),

        success: function () {
            //$(window).scrollTop(0);
            showstuff('ate-ty'); hidestuff('ate-form'); return false;
        }
    });



    return false;
}


function validate_seminar(form) {

    var f = ['fname', 'lname', 'email'];
 
    for (var x = 0; x < f.length; x++) {

        if (f[x] == 'fname' && ($(form).find('#fname').val().replace(/[^A-Za-z-]/g, '') != $(form).find('#fname').val()) || $(form).find('#fname').val() == '') {

            $(form).find('#' + f[x]).addClass('error').select();
            
            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'lname' && ($(form).find('#lname').val().replace(/[^A-Za-z-]/g, '') != $(form).find('#lname').val() || $(form).find('#lname').val() == '')) {
            $(form).find('#' + f[x]).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }

        if (f[x] == 'email' && !(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test($(form).find('#email').val())) {

            $(form).find('#' + f[x]).addClass('error').select();

            setTimeout(function () {
                $(form).find('#' + f[x]).removeClass('error');
            }, 3000)
            return false;
        }


    }

    $(form).find('input.submit').addClass('processing');
    $(form).find('input.submit').val('Processing...');
    $(form).find('input.submit').attr("disabled", "disabled");

    $.ajax({
        type: "POST",
        url: "/res/ajax/seminar-submit.php",
        data: $(form).serialize(),

        success: function (x) {        
            
            //$(window).scrollTop(0);
            showstuff('seminar-ty'); hidestuff('seminar-form'); return false;
        }
    });



    return false;
}



function validate_callback() {
    var f = ['fname', 'phone'];

    for (var x = 0; x < f.length; x++) {
        if ($('.callback-overlay #' + f[x]).val() == '') {
            $('.callback-overlay #' + f[x]).focus().closest('.iw').addClass('error');

            setTimeout(function () {
                $('.callback-overlay #' + f[x]).closest('.iw').removeClass('error');
            }, 3000)
            return false;
        }
    }

}

function gallery() {
    var onMouseOutOpacity = 0.67;
    var gallery = $('#thumbs').galleriffic({
        delay: 2500,
        numThumbs: 4,
        preloadAhead: 10,
        enableTopPager: false,
        enableBottomPager: false,
        imageContainerSel: '#slideshow',
        controlsContainerSel: '#controls',
        captionContainerSel: '#caption',
        loadingContainerSel: '#loading',
        renderSSControls: false,
        renderNavControls: false,
        enableHistory: false,
        autoStart: false,
        syncTransitions: true,
        defaultTransitionDuration: 900,
        onSlideChange: function (prevIndex, nextIndex) {
            this.find('ul.thumbs').children()
				.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
				.eq(nextIndex).fadeTo('fast', 1.0);
            this.$captionContainer.find('div.photo-index')
				.html('Photo ' + (nextIndex + 1) + ' of ' + this.data.length);
            $('img').attr('data-pin-no-hover', true);
        },
        onPageTransitionOut: function (callback) {
            this.fadeTo('fast', 0.0, callback);
        },
        onPageTransitionIn: function () {
            var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
            var nextPageLink = this.find('a.next').css('visibility', 'hidden');

            if (this.displayedPage > 0)
                prevPageLink.css('visibility', 'visible');

            var lastPage = this.getNumPages() - 1;
            if (this.displayedPage < lastPage)
                nextPageLink.css('visibility', 'visible');

            this.fadeTo('fast', 1.0);
        },
        onTransitionIn: function (slide, caption, isSync) {
            slide.fadeTo(this.getDefaultTransitionDuration(isSync), 1.0);
            if (caption)
                caption.fadeTo(this.getDefaultTransitionDuration(isSync), 1.0);
            $('img').attr('data-pin-no-hover', true);
        }
    });
    gallery.find('a.prev').click(function (e) {
        gallery.previousPage();
        e.preventDefault();
    });

    gallery.find('a.next').click(function (e) {
        gallery.nextPage();
        e.preventDefault();
    });

    setTimeout(function () {
        $('.itc .loading').hide();
        $('.itc .slideshow-con').show();
        $('img').attr('data-pin-no-hover', true);
    }, 1000);
}

function validate_debt_quiz() {
    var r = true;
    $('.quiz .question').each(function () {

        var sel = false
        $(this).find('input[type="radio"]').each(function () {
            if (this.checked) {
                sel = true;
            }
        });
        if (!sel) {
            $('html, body').animate({
                scrollTop: $(this).find('.q').offset().top
            }, 100);

            $(this).find('.q').addClass('error');

            r = false;
            return false;
        }
    });
    setTimeout(function () {
        $('.quiz .question .q').removeClass('error');
    }, 3000);
    return r;
}

function showstuff(boxid) {
    document.getElementById(boxid).style.display = 'inline';
    document.getElementById(boxid).style.visibility = 'visible';
}
function hidestuff(boxid) {
    document.getElementById(boxid).style.visibility = 'hidden';
    document.getElementById(boxid).style.display = 'none';
}



//$(function(){

// // Get URL
//  var url = window.location.href;

//  // Check if URL contains the keyword
//  	if( url.search( 'debt-elimination' ) > 0 ) {
//  // Hide the DIVs
//  	    $("#ate-debt-elimination-link,#ate-most-recent,#ate-more-questions-heading,#ate-credit-score,#ate-budgeting,#ate-family-finance,#ate-all-about-credit,#ate-mortgage-homeownership").css("display", "none");
//  }
//  // Check if URL contains the keyword
//  if( url.search( 'credit-score' ) > 0 ) {
//  // Hide the DIVs
//      $("#ate-credit-score-link,#ate-most-recent,#ate-more-questions-heading,#ate-debt-elimination,#ate-budgeting,#ate-family-finance,#ate-all-about-credit,#ate-mortgage-homeownership").css("display", "none");
//  }  
//  // Check if URL contains the keyword
//  if( url.search( 'budgeting' ) > 0 ) {
//  // Hide the DIVs
//      $("#ate-budgeting-link,#ate-most-recent,#ate-more-questions-heading,#ate-debt-elimination,#ate-credit-score,#ate-family-finance,#ate-all-about-credit,#ate-mortgage-homeownership").css("display", "none");
//  }
//  // Check if URL contains the keyword
//  if( url.search( 'family-finance' ) > 0 ) {
//  // Hide the DIVs
//      $("#ate-family-finance-link,#ate-most-recent,#ate-more-questions-heading,#ate-debt-elimination,#ate-credit-score,#ate-budgeting,#ate-all-about-credit,#ate-mortgage-homeownership").css("display", "none");
//  }
//  // Check if URL contains the keyword
//  if (url.search( 'all-about-credit' ) > 0) {
//  // Hide the DIVs
//      $("#ate-all-about-credit-link,#ate-most-recent,#ate-more-questions-heading,#ate-debt-elimination,#ate-credit-score,#ate-budgeting,#ate-family-finance,#ate-mortgage-homeownership").css("display", "none");
//  }
//  // Check if URL contains the keyword
//  if (url.search('mortgage-and-homeownership') > 0) {
//  // Hide the DIVs
//      $("#ate-mortgage-homeownership-link,#ate-most-recent,#ate-more-questions-heading,#ate-debt-elimination,#ate-credit-score,#ate-budgeting,#ate-all-about-credit,#ate-family-finance").css("display", "none");
//  }
//});


//Date Content Controller
window.setInterval(function () {

    var current = new Date();
    var debtRestructurCalc = new Date("November 13, 2014 06:00:00") //November 13, 2014 06:00:00
    var loanCostCalc = new Date("November 25, 2014 06:00:00")  //November 25, 2014 06:00:00
    var debtLearningCenter = new Date("November 27, 2014 06:00:00")  //November 27, 2014 06:00:00

    if (current.getTime() > debtRestructurCalc.getTime()) {
        $('#NULL').hide();
        $('#debtRestructurCalc').show();
    }

    if (current.getTime() > loanCostCalc.getTime()) {
        $('#loanCostCalc').show();
    }

    if (current.getTime() > debtLearningCenter.getTime()) {
        $('#debtLearningCenter').show();
    }

}, 3000);

$('#NULL').show();

//Transcript smooth collapse
function growDiv() {
    var growDiv = document.getElementById('grow');
    if (growDiv.clientHeight) {
        growDiv.style.height = 0;
    } else {
        var wrapper = document.querySelector('.transcriptWrapper');
        growDiv.style.height = wrapper.clientHeight + "px";
    }
    document.getElementById("more-button").value = document.getElementById("more-button").value == 'View Transcript' ? 'Hide Transcript' : 'View Transcript';
}
