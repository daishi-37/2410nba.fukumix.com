/*---------------------------------------------------------*/
/* アンカースクロール　                                         */
/*---------------------------------------------------------*/
$('a[href^="#"]').click(function() {
    let header = $(".header").innerHeight();
    let speed = 1000;
    let id = $(this).attr("href");
    let target = $("#" == id ? "html" : id);
    let position = $(target).offset().top - header;
    $("html, body").animate(
        {
        scrollTop: position
        },
        speed
    );
    return false;
});


/*---------------------------------------------------------*/
/* スマホメニュー開閉　                                         */
/*---------------------------------------------------------*/
$('.header-btn').click(function() {
    $('body').toggleClass('header-navi__open');
});


/*---------------------------------------------------------*/
/* トップへのスクロール表示                                      */
/*---------------------------------------------------------*/
$(function(){
    var pagetop = $('.pagetop');
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});



/*---------------------------------------------------------*/
/* スタッフモーダル表示/非表示　                                  */
/*---------------------------------------------------------*/
$('.posts-type3__link').click(function() {
    if($('body').hasClass('staff-modal__open')) {
        $('body').removeClass('staff-modal__open');
    }else{
        $('.staff-modal__img').attr('src', $(this).attr('data-figure'));
        $('.staff-modal__row.name    .staff-modal__row-th').html($(this).attr('data-fugure'));
        $('.staff-modal__row.name    .staff-modal__row-th').html($(this).attr('data-postion'));
        $('.staff-modal__row.name    .staff-modal__row-td').html($(this).attr('data-name'));
        $('.staff-modal__row.license .staff-modal__row-td').html($(this).attr('data-license'));
        $('.staff-modal__row.menu    .staff-modal__row-td').html($(this).attr('data-menu'));
        $('.staff-modal__row.hobby   .staff-modal__row-td').html($(this).attr('data-hobby'));
        $('body').addClass('staff-modal__open');
    }

    return false;
});

$('.staff-modal').click(function() {
    $('body').removeClass('staff-modal__open');
    return false;
});

$('.staff-modal__article').click(function(e) {
    e.stopPropagation() 
});

$('.staff-modal__close').click(function() {
    $('body').removeClass('staff-modal__open');
    return false;
});