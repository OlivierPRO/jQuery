//fonction qui permet de cacher les details des exercices au chargement de la page
$('.cacheTout').hide();
//cacher la page complete complete
$('#apparition1').hide();
$('#apparition2').hide();
$('#logoJquery').hide();
$('.btnVoirCode1,.btnVoirCode2,.btnVoirCode3,.btnVoirCode4,.btnVoirCode5,.btnVoirCode6,.btnVoirCode7').hide();
$(document).ready(function () {
    $('#logoJquery').fadeIn(5000);
});

//deroulement des chapitres
$(document).ready(function () {
    $('#apparition1').slideDown(4000).delay(6000);
});
$(document).ready(function () {
    $('#apparition2').slideDown(2000);
});

$(document).ready(function () {
    $('.clic1').click(function () {
        $('.btnVoirCode1').slideToggle(1000);
        $('.btnVoirCode2, .btnVoirCode3, .btnVoirCode4, .btnVoirCode5, .btnVoirCode6, .btnVoirCode7').hide(1000);
        $('#cache1').slideToggle(1000);
        $('#cache2, #cache3, #cache4, #cache5, #cache6, #cache7').hide(1000);
        if ($("#fleche1").css('transform') == 'none') {
            $("#fleche1").css({'transform': 'rotate(270deg)'});
            $("#fleche2, #fleche3, #fleche4, #fleche5, #fleche6, #fleche7").css({'transform': 'unset'});
        } else {
            $("#fleche1").css({'transform': ''});
            $('.btnVoirCode').slideUp(1000);
        }
        ;
    });
});
$(document).ready(function () {
    $('.clic2').click(function () {
        $('.btnVoirCode2').slideToggle(1000);
        $('.btnVoirCode1, .btnVoirCode3, .btnVoirCode4, .btnVoirCode5, .btnVoirCode6, .btnVoirCode7').hide(1000);
        $('#cache2').slideToggle(1000);
        $('#cache1, #cache3, #cache4, #cache5, #cache6, #cache7').hide(1000);
        if ($("#fleche2").css('transform') == 'none') {
            $("#fleche2").css({'transform': 'rotate(270deg)'});
            $("#fleche1, #fleche3, #fleche4, #fleche5, #fleche6, #fleche7").css({'transform': 'unset'});
        } else {
            $("#fleche2").css({'transform': ''});
        }
        ;
    });
});
$(document).ready(function () {
    $('.clic3').click(function () {
        $('.btnVoirCode3').slideToggle(1000);
        $('.btnVoirCode1, .btnVoirCode2, .btnVoirCode4, .btnVoirCode5, .btnVoirCode6, .btnVoirCode7').hide(1000);
        $('#cache3').slideToggle(1000);
        $('#cache1, #cache2, #cache4, #cache5, #cache6, #cache7').hide(1000);
        if ($("#fleche3").css('transform') == 'none') {
            $("#fleche3").css({'transform': 'rotate(270deg)'}, {'color': 'red'});
            $("#fleche1, #fleche2, #fleche4, #fleche5, #fleche6, #fleche7").css({'transform': 'unset'});
        } else {
            $("#fleche3").css({'transform': ''});
        }
        ;
    });
});
$(document).ready(function () {
    $('.clic4').click(function () {
        $('.btnVoirCode4').slideToggle(1000);
        $('.btnVoirCode1, .btnVoirCode2, .btnVoirCode3, .btnVoirCode5, .btnVoirCode6, .btnVoirCode7').hide(1000);
        $('#cache4').slideToggle(1000);
        $('#cache1, #cache2, #cache3, #cache5, #cache6, #cache7').hide(1000);
        if ($("#fleche4").css('transform') == 'none') {
            $("#fleche4").css({'transform': 'rotate(270deg)'}, {'color': 'red'});
            $("#fleche1, #fleche2, #fleche3, #fleche5, #fleche6, #fleche7").css({'transform': 'unset'});
        } else {
            $("#fleche4").css({'transform': ''});
        }
        ;
    });
});
$(document).ready(function () {
    $('.clic5').click(function () {
        $('.btnVoirCode5').slideToggle(1000);
        $('.btnVoirCode1, .btnVoirCode2, .btnVoirCode3, .btnVoirCode4, .btnVoirCode6, .btnVoirCode7').hide(1000);
        $('#cache5').slideToggle(1000);
        $('#cache1, #cache2, #cache3, #cache4, #cache6, #cache7').hide(1000);
        if ($("#fleche5").css('transform') == 'none') {
            $("#fleche5").css({'transform': 'rotate(270deg)'}, {'color': 'red'});
            $("#fleche1, #fleche2, #fleche3, #fleche4, #fleche6, #fleche7").css({'transform': 'unset'});
        } else {
            $("#fleche5").css({'transform': ''});
        }
        ;
    });
});
$(document).ready(function () {
    $('.clic6').click(function () {
        $('.btnVoirCode6').slideToggle(1000);
        $('.btnVoirCode1, .btnVoirCode2, .btnVoirCode3, .btnVoirCode4, .btnVoirCode5, .btnVoirCode7').hide(1000);
        $('#cache6').slideToggle(1000);
        $('#cache1, #cache2, #cache3, #cache4, #cache5, #cache7').hide(1000);
        if ($("#fleche6").css('transform') == 'none') {
            $("#fleche6").css({'transform': 'rotate(270deg)'}, {'color': 'red'});
            $("#fleche1, #fleche2, #fleche3, #fleche4, #fleche5, #fleche7").css({'transform': 'unset'});
        } else {
            $("#fleche6").css({'transform': ''});
        }
        ;
    });
});
$(document).ready(function () {
    $('.clic7').click(function () {
        $('.btnVoirCode7').slideToggle(1000);
        $('.btnVoirCode1, .btnVoirCode2, .btnVoirCode3, .btnVoirCode4, .btnVoirCode5, .btnVoirCode6').hide(1000);
        $('#cache7').slideToggle(1000);
        $('#cache1, #cache2, #cache3, #cache4, #cache5, #cache6').hide(1000);
        if ($("#fleche7").css('transform') == 'none') {
            $("#fleche7").css({'transform': 'rotate(270deg)'}, {'color': 'red'});
            $("#fleche1, #fleche2, #fleche3, #fleche4, #fleche5, #fleche6").css({'transform': 'unset'});
        } else {
            $("#fleche7").css({'transform': ''});
        }
        ;
    });
});

