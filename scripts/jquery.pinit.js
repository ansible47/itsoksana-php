/*!
 * jQuery pinit - v1.0 - 3/3/2012
 * http://www.mediadevelopment.no/projects/pinit
 *
 * Copyright (c) 2012 Sindre Holtbakk
 * Dual licensed under the MIT and GPL licenses.
 */

// Project Home - http://www.mediadevelopment.no/projects/pinit
// Source       - http://www.mediadevelopment.no/projects/pinit/jquery.pinit.js
// (Minified)   - http://www.mediadevelopment.no/projects/pinit/jquery.pinit.min.js
//
// Tested width jQuery Versions - 1.6.2
// Browsers Tested - IE 8+, Firefox 9.0.1, Chrome
//
// Release History:
// 1.0 - (3/3/2012) Initial release

(function($){
    var methods = {
        settings : {
            align: "topLeft",
            selector: ".pinit",
            offsetTop: "10",
            offsetRight: "10",
            offsetBottom: "10",
            offsetLeft: "10",
            fadeSpeed: "200",
            textSource: "alt",
            opacity: "1"
        },
        init : function(settings){
            if(settings)
                $().extend(methods.settings, settings);
            setTimeout(function(){
                $(methods.settings.selector).each(function(){
                    var position = methods.getPosition(this);
                    var btn = $("<div>").attr("class", "btn").css({
                        top: position.top,
                        left: position.left
                    });
                    $(this).after(btn);
                });
            }, 100);
            $("body").append("<style type='text/css'>.btn{width:40px;height:20px;background:url(http://passets.pinterest.com/images/pidgets/bps1.png) 0 0;position:absolute;display:none;cursor:pointer;}</style>");
            $("body").delegate(methods.settings.selector, "mouseenter", function(){
                $(this).next(".btn").stop(true, true).fadeTo(parseInt(methods.settings.fadeSpeed),parseFloat(methods.settings.opacity));
            }).delegate(methods.settings.selector, "mouseleave", function(){
                $(this).next(".btn").stop(true, true).fadeOut(parseInt(methods.settings.fadeSpeed));
            });
            $("body").delegate(".btn", "mouseenter", function(){
                $(this).stop(true, true).show();
            });
            $("body").delegate(".btn", "click", function(e){
                methods.pinImage(this);
                e.stopPropagation();
                return false;
            });
        },
        getPosition : function(obj){
            var position = {};
            if(methods.settings.align === "topLeft"){
                position.top = $(obj).position().top + parseInt($(obj).css("marginTop")) + parseInt(methods.settings.offsetTop);
                position.left = $(obj).position().left + parseInt($(obj).css("marginLeft")) + parseInt(methods.settings.offsetLeft);
            }
            if(methods.settings.align === "topRight"){
                position.top = $(obj).position().top + parseInt($(obj).css("marginTop")) + parseInt(methods.settings.offsetTop);
                position.left = ($(obj).position().left + $(obj).width() - 43) + parseInt($(obj).css("marginLeft")) - parseInt(methods.settings.offsetRight);
            }
            if(methods.settings.align === "bottomLeft"){
                position.top = ($(obj).position().top + $(obj).height() - 20) + parseInt($(obj).css("marginTop")) - parseInt(methods.settings.offsetBottom);
                position.left = $(obj).position().left + parseInt($(obj).css("marginLeft")) + parseInt(methods.settings.offsetLeft);
            }
            if(methods.settings.align === "bottomRight"){
                position.top = ($(obj).position().top + $(obj).height() - 20) + parseInt($(obj).css("marginTop")) - parseInt(methods.settings.offsetBottom);
                position.left = ($(obj).position().left  + $(obj).width() - 43) + parseInt($(obj).css("marginLeft")) - parseInt(methods.settings.offsetRight);
            }
            return position;
        },
        pinImage : function(obj){
            var url = "http://pinterest.com/pin/create/button/?url="+escape(window.location.href)+"&media="+ escape($(obj).prev().get(0).src) +"&description=" + ($(obj).prev().attr(methods.settings.textSource) || "");
            window.open(url,'','width=650,height=350');
        }
    };

    $.fn.pinit = function(method){
        if(methods[method])
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        else if(typeof method === 'object' || !method)
            return methods.init.apply(this, arguments);
        else
            $.error('Method ' +  method + ' does not exist on jQuery.tooltip');
    };
})(jQuery);