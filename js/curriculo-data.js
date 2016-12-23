(function($){
    
    require(['jquery'], function($){
        $.fn.CurriculoData = function(options){
            var _options = {
                url: window.app.rootUrl + 'template.php',
                sidebar: undefined,
                language: 'pt-BR'
            };

            _options = $.extend(_options, options);

            var that = this;
            
            var _resize = function() {
                if(_options.sidebar) {
                    _options.sidebar.height(that.height());
                }
            };

            var _init = function() {
                that.html('');

                $.ajax({
                    type: 'GET',
                    url: _options.url,
                    data: { idioma : _options.language, action: 'none' },
                    contentType: 'text/html; charset=utf-8',
                    success: function(a) {
                        that.html(a);
                        _resize();

                        $(window).resize(function(){
                            _resize();
                        })
                    }
                });
            };

            _init();
            return this;
        }
    });
    

})(jQuery);