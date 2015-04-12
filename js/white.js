$(document).ready(function() {
    $('h2 a').click(function() {
        myloadoriginal = this.text;
        $(this).text('正在加载中 ...');
        var myload = this;
        setTimeout(function() {
            $(myload).text(myloadoriginal);
        }, 2014);
    });
});
$(function() {
    $('img').hover(function() {
        $(this).fadeTo("fast", 0.5);
    }, function() {
        $(this).fadeTo("fast", 1.1);
    });
});
$(function() {
    $.fn.scrollToTop = function() {
        $(this).hide().removeAttr("href");
        if ($(window).scrollTop() != "0") {
            $(this).fadeIn("slow")
        }
        var scrollDiv = $(this);
        $(window).scroll(function() {
            if ($(window).scrollTop() == "0") {
                $(scrollDiv).fadeOut("slow")
            } else {
                $(scrollDiv).fadeIn("slow")
            }
        });
        $(this).click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow")
        })
    }
});
$(function() {
    $("#sToTop").scrollToTop();
});