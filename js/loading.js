define('loading', ['jquery'], function($){
    window.loading = {
        imageSrc: 'img/loading.gif',
        state: 'hidden',

        resize: function() {
            var that = this;

            var maskWidth = that.mask.width(),
                maskHeight = that.mask.height(),
                imageWidth = that.image.width(),
                imageHeight = that.image.height();

            var imageLeft = Math.round( ((maskWidth / 2) - (imageWidth - 2)) ) + 105,
                imageTop = Math.round( ((maskHeight / 2) - (imageHeight / 2)) );

            that.image.css({
                'top' : imageTop + 'px',
                'left': imageLeft + 'px'
            });
        },

        show : function (){
            var that = this;
            that.hide();

            that.mask = $('<div class="loading-mask">&nbsp;</div>').appendTo($('body'));            
            that.image = $('<img id="loading-image" style="position: absolute;" src="'+ that.imageSrc +'" />').appendTo(that.mask);
            that.resize();
            
            $(window).resize(function(){
                that.resize();
            });

            that.state = 'VISIBLE';
        },

        hide : function() {
            var matchs = $('body > .loading-mask');

            if (matchs && matchs.length > 0) {
                $.each(matchs, function(){
                    matchs.remove();
                });
            }

            this.state = 'HIDDEN';
        }
    };

    return window.loading;
});
