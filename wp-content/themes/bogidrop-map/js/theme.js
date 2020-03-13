(function($, win, doc) {
    var $this = $(this);
    
    // Scroll to top
    $.fn.scrollToTop = function (options) {
        var config = {
            "speed": 800
        };
        if (options) {
            $.extend(config, {
                "speed": options
            });
        }
        return this.each(function () {
            var $this = $(this);
            $(win).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $this.fadeIn();
                }
                else {
                    $this.fadeOut();
                }
            });
            $this.click(function (e) {
                e.preventDefault();
                $("body, html").animate({
                    scrollTop: 0
                }, config.speed);
            });
        });
    };
    //start
    $(function () {
        $("#scrolltop").scrollToTop();
    });

    // Filter job listing
    $("#FilterJobs").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#JobListing tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    //FAQ
    $(doc).on('click', '.faq__item__question', function(){
        var question = $(this).data('question');

        $('.faq__item__answer').each(function(){
            var answer = $(this).data('answer');

            if (question === answer) {
                var $theAnswer = $(this);
                
                if (!$theAnswer.hasClass('faq__item__answer--open')) {
                    $('.faq__item__answer').removeClass('faq__item__answer--open')
                    $theAnswer.addClass('faq__item__answer--open');
                }
            }
        });
    });

    $(doc).on('click', '.navbar-toggler', function(){
        $('#menu-main-menu').toggleClass('open');
        if($('#menu-main-menu').hasClass('open')) {
            $('.navbar-toggler-icon').addClass('fa-close');
            $('.navbar-toggler-icon').removeClass('fa-bars');
        } else {
            $('.navbar-toggler-icon').removeClass('fa-close');
            $('.navbar-toggler-icon').addClass('fa-bars');
        }
    });

    //Product link
    $(doc).on('click', '.product-link, #articles .card', function(){
        $url = $(this).data('url');


        location.href = $url;
    });

    function stickyHeader() {
        var scroll = $(win).scrollTop();

        if (scroll >= 40) {
            $('.home .navbar').addClass('bg');
        } else {
            $('.home .navbar').removeClass('bg');
        }
    }

    function testimonialLoad() {
        $('.consulting-testimonial').each(function(){
            if($(this).hasClass('item-1')) {
                $(this).appendTo('#testimonial');   
            } else {
                $(this).remove();
            }
        });
    }

    $(doc).on('change', '#nf-field-33', function(){
        if( $(this).val() === 'unit-member' ) {
            $('#nf-field-34-container').hide();
        } else {
            $('#nf-field-34-container').show();
        }
    });

    $(win).scroll(function() {    
        stickyHeader();    
    });

    $(win).load(function() {    
        stickyHeader();
        testimonialLoad();
        $('.nf-field-34-container').hide();
        $('.JobPost__Item__Attachment a').each(function(){
            url = $(this).attr('href');
            nameIndex = $(this).text().lastIndexOf("/") + 1;
            text = $(this).text().substr(nameIndex);
            $(this).remove();
            $('<a href="' + url + '">' + text + '</a><br>').appendTo('.JobPost__Item__Attachment');
            
        });

    });

}(window.jQuery, window, document));