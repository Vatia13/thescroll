jQuery(document).ready(function($){
    loadMore($);
    jQuery(window).resize(function(){
        itemSize();
    });
    itemSize();
    $('article .page-nav.page-nav-post .big').parent('a').css('width','90%');

});

function loadMore($){
    $('.load-more button').click(function(){
        $(this).unbind('click');
        var num = $('#ajax_news_place .td_mod_new').length + 1;
        var preloader = $('.load-more .loading-gif').data('image');
        var search = $('.load-more').data('search');
        var cat = $('.load-more').data('cat');
        $.ajax({
            url: $(this).data('url'),
            type: 'POST',
            data: {action:'load_ajax_news',last_id:num, search: (search) ? search : cat},
            beforeSend:function(data){
                $('.load-more .loading-gif').html('<img src="'+preloader+'"/>');
            },
            success:function(data){
                if(data != 0){
                    $('#ajax_news_place').append(data);
                }else{
                    $('.load-more button').hide();
                }
                $('.load-more .loading-gif').html('');
                loadMore($);
                itemSize();
            }
        });
    });
}

function itemSize(){
    if(jQuery(window).width() < 725){
        jQuery('#ajax_news_place .td_mod_new').css({
            'max-width':jQuery(window).width()+'px',
            'width':'100%'
        });
        jQuery('#ajax_news_place .td_mod_new:nth-child(2n)').css({
            'margin':'0'
        });
        jQuery('#ajax_news_place .td_mod_new img').css({
            'max-width':jQuery(window).width()+'px',
            'width':'100%'
        });
    }
}

function topPagination($){
    var pRight = ($(window).width() - ($('.container .container-fluid .row-fluid').offset().left + $('.container .container-fluid .row-fluid').outerWidth()) + 5);
    $('.show-on-scroll').css('right', pRight + 'px').css('width',$('.container .container-fluid .row-fluid').width()+'px');
    //$('.show-on-scroll center > span d').html('You are viewing page');
    $(this).scrollTop(0);
    $(this).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.hide-on-scroll').hide(200);
            $('.td-header-style-8-wrapper .td-header-bg').fadeIn(200).css('position', 'fixed');
            $('.show-on-scroll').fadeIn(400);
        } else {
            $('.hide-on-scroll').show();
            $('.td-header-style-8-wrapper .td-header-bg').css('position', 'relative');
            $('.show-on-scroll').fadeOut(200);
        }
    });
}