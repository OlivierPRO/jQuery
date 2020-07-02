//CHAPITRE 1 : LA DECOUVERTE => consiste à organiser les fichiers et telecharger jQuery ou utiliser les CDN---------------------------------------------------------------------------

//CHAPITRE 2 : Les evenements---------------------------------------------------------------------------------------------------------------------------------------------------------

// 1 - l'evenement clic 

$(document).ready(function () {
    $('#titre').click(function () {
        $('.p1SimpleClick').hide();
    });
});

// 2 - l'evenement double-clic

$(document).ready(function () {
    $('#titre2').dblclick(function () {
        $(this).hide();
    });
});

// 3 - les evenements mouseenter et mouseleave

$(document).ready(function () {
    $('eveMouse').hide();
    $('#titre3').mouseenter(function () {
        $('.eveMouse').show();
    });
    $('#titre3').mouseleave(function () {
        $('.eveMouse').hide();
    });
});

// 4 - la methode hover

$(document).ready(function () {
    $('.methHover').hide();
    $('#titre4').hover(
            function () {
                $('.methHover').show();
            },
            function () {
                $('.methHover').hide();
            }
    );
});

// 5 - Les evenements mousedown et mouseup

$(document).ready(function () {
    $('.eveMousedown').hide();
    $('#titre5').mousedown(function () {
        $('.eveMousedown').show();
    });
    $('#titre5').mouseup(function () {
        $('.eveMousedown').hide();
    });
});

// 6 - Les evenements keydown et keyup

$(document).ready(function () {
    $('#nom1').keydown(function () {
        $(this).css('background-color', 'orange');
    });
    $('#nom1').keyup(function () {
        $(this).css('background-color', 'grey');
    });
});

// 7 - l'evenement focus

$(document).ready(function () {
    $('#nom2').focus(function () {
        $(this).css('background-color', 'orange');
    });
    $('#nom2').focusout(function () {
        $(this).css('background-color', 'white');
    });
    $('#prenom2').focus(function () {
        $(this).css('background-color', 'orange');
    });
    $('#prenom2').focusout(function () {
        $(this).css('background-color', 'white');
    });
});

// 7 - l'evenement focus

$(document).ready(function () {
    $('#nom2').focusin(function () {
        $('#span_nom2').html(' veuillez entrer votre nom');
    });
    $('#prenom2').focusin(function () {
        $('#span_prenom2').html(' veuillez entrer votre prénom');
    });
    $('#prenom2').focusout(function () {
        $('#span_prenom2').html('');
    });
    $('#nom2').focusout(function () {
        $('#span_nom2').html('');
    });
});

//chapitre 3 : LES EFFETS :----------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 1 - La durée des effets

$(document).ready(function () {
    $('#bt').click(function () {
        $('#div1').hide('slow');
        $('#div1').show(1000);
    });
});

$(document).ready(function () {
    $('#bt2').click(function () {
        $('#div1').hide('fast');
        $('#div1').show(500);
    });
});

$(document).ready(function () {
    $('#bt3').click(function () {
        $('#div1').hide(3000);
        $('#div1').show(3000);
    });
});

// 2 - Les fonctions Callback

$(document).ready(function () {
    $('#bt4').click(function () {
        $('#div2').hide(3000, function () {
            $('#bt4').hide(2000, function () {
                $('#div2').show(3000, function () {
                    $('#bt4').show(3000);
                });
            });
        });
    });
});

// 3 - la fonction toggle()

$(document).ready(function () {
    $('#bt5').click(function () {
        $('#div3').toggle();
    });
});

// 4 - L'opacité

$(document).ready(function () {
    $('#div4').fadeIn();
    $('#bt6').click(function () {
        $('#div4').fadeOut(2000);
        $('#div4').fadeIn(2000);
    });
});

$(document).ready(function () {
    $('#bt7').click(function () {
        $('#div4').fadeToggle(2000);
    });
});

$(document).ready(function () {
    $('#bt8').click(function () {
        $('#div4').fadeTo(2000, 0.5);
    });
});

$(document).ready(function () {
    $('#bt9').click(function () {
        $('#div4').fadeTo(2000, 1.0);
    });
});

// 5 - Les effets de slide

$(document).ready(function () {
    $('#bt10').click(function () {
        $('#div5').slideUp(2000);
    });
    $('#bt11').click(function () {
        $('#div5').slideDown(2000);
    });
});

// 5 - les effets de slide /suite

$(document).click(function () {
    $('#bt12').click(function () {
        $('#div5').slideToggle(2000);
    });
});

//CHAPITRE 4 LES ANIMATIONS------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 1 - Créer une animation simple

$(document).ready(function () {
    $('#bt13').click(function () {
        $('#div6').animate({left: '500px'}, 3000, function () {
            $('#div6').hide();
        });
    });
});

//RESET ANIMATION SIMPLE

$(document).ready(function () {
    $('#bt14').click(function () {
        $('#div6').animate({left: '50px'});
        $('#div6').show();
    });
});

// 2 - Plusieurs animations à à la suite

$(document).ready(function () {
    $('#bt15').click(function () {
        $('#div7').animate({left: '500px'});
        $('#div7').animate({height: '400px'});
    });
});

//RESET PLUSIEURS ANIMATIONS

$(document).ready(function () {
    $('#bt16').click(function () {
        $('#div7').animate({left: '0px'});
        $('#div7').animate({height: '250px'});
    });
});

// 3 - Arreter les animations

$(document).ready(function () {
    $('#bt17').click(function () {
        $('#div8').animate({left: '500px'}, 3000);
        $('#div8').animate({height: '300px'}, 3000);
    });
    $('#bt18').click(function () {
        //true en argument sert à arreter toutes les animations en meme temmps
        $('#div8').stop(true, true);
    });
});

//RESET arreter les animations

$(document).ready(function () {
    $('#bt19').click(function () {
        $('#div8').animate({left: '0px'});
        $('#div8').animate({height: '250px'});
    });
});

// 4 - chainer(concaténer) les animations

$(document).ready(function () {
    $('#bt20').click(function () {
        $('#div9').animate({left: '500px'}, 3000).animate({left: '50px'}, 2000);
    });
});
