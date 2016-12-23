(function($){
    
    require(['jquery', 'loading'], function($, loading){
        $.fn.CurriculoWeb = function(){
            var _flags = {
                brasil: 'data:image/png;base64,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',

                usa: 'data:image/png;base64,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'
            }

            var _menusDescriptions = {
                    'pt-BR' : {
                        inicio: 'Inicio',
                        resumoProfissional: 'Resumo Profissional',
                        competencias: 'Competências',
                        experienciaProfissional: 'Experiência Profissional',
                        qualificacoes: 'Qualificações',
                        sobre: 'Sobre'
                    },

                    'en-US' : {
                        inicio: 'Home',
                        resumoProfissional: 'Professional Summary',
                        competencias: 'Skills',
                        experienciaProfissional: 'Professional Experience',
                        qualificacoes: 'Qualifications',
                        sobre: 'About'
                    }
                };

            var _printBtnDescription = {
                'pt-BR' : 'Imprimir',
                'en-US' : 'Print'
            };

            var _printUrl = 'print.php';

            var that = this;

            var _template = '<header class="back-dark-blue top font-white box-shadow">' +
                            '   <div class="navicon">' +
                            '       <i class="fa fa-bars"></i> &nbsp;'+
                            '   </div>' +

                            '   <div class="language-buttons-container"> ' +
                            '       <button id="pt-BR" class="back-dark-blue"> ' +
                            '           <img src="'+ _flags.brasil +'" /> ' +
                            '       </button>' +

                            '       <button id="en-US" class="back-dark-blue"> ' +
                            '           <img src="'+ _flags.usa +'" /> ' +
                            '       </button>' +
                            '   </div>' +
                            '</header>' +

                            '<section class="content back-gray">'+
                            '   <section id="sidebar" class="sidebar back-light-blue box-shadow">'+                           
                            '   </section>'+

                            '   <section id="main" class="main box-shadow">'+                            
                            '   </section>'+
                            '</section>'+

                            '<footer class="footer back-white box-shadow">'+
                            '    <button id="print" class="btn btn-lg btn-success"> ' +
                            '        <i class="fa fa-print"></i> &nbsp; ' + 
                            '        <span id="description">Imprimir</span> ' + 
                            '    </button>'
                            '</footer> ';

            var _resize = function() {
                var header = that.find('.top'),
                    footer = that.find('.footer');

                var contentHeight = that.height() - (header.height() + footer.height());

                var content = that.find('.content'),
                    sidebar = that.find('.sidebar');

                content.height(contentHeight);
                sidebar.height(contentHeight);
            };

            var _getSelectedLanguage = function(){
                var btn = that.find('.language-buttons-container button.back-really-dark-blue');
                return btn.attr('id');
            };

            var _refreshPrintBtnDescription = function(language) {
                var btn = that.find('.footer #print #description');
                var desc = _printBtnDescription[language];
                btn.text(desc);
            };

            var _print = function(e){
                var lang = _getSelectedLanguage();
                var url = _printUrl + '?idioma=' + lang;
                window.open(url, '_blank');
            };

            var _getMenuItems = function(language) {
                return [
                    {
                        anchor: 'dados-pessoais',
                        icon: 'fa fa-home',
                        description: _menusDescriptions[language].inicio
                    },

                    {
                        anchor: 'resumo-profissional',
                        icon: 'fa fa-file-text-o',
                        description: _menusDescriptions[language].resumoProfissional
                    },

                    {
                        anchor: 'competencias',
                        icon: 'fa fa-address-book-o',
                        description: _menusDescriptions[language].competencias
                    },

                    {
                        anchor: 'experiencia-profissional',
                        icon: 'fa fa-address-card',
                        description: _menusDescriptions[language].experienciaProfissional
                    },

                    {
                        anchor: 'qualificacoes',
                        icon : 'fa fa-university',
                        description: _menusDescriptions[language].qualificacoes
                    },

                    {
                        anchor: '',
                        icon: 'fa fa-info',
                        description: _menusDescriptions[language].sobre
                    }
                ];
            };

            var _createMenu = function(language) {
                var sidebar = $('.sidebar');

                sidebar.Menu({
                    navButton : that.find('.navicon'),
                    items : _getMenuItems(language),

                    itemClick: function(e){
                        e.preventDefault();                        

                        var content = that.find('.content'),
                            main = content.find('.main'),
                            item = $(this).data('MenuItem'),
                            menu = $(this).data('Menu');

                        if(!item.anchor) 
                            return;

                        var anchor = main.find('#' + item.anchor + ' .curriculo-data-titulo-sessao');                            

                        content.animate({
                            scrollTop : anchor.position().top
                        }, 800, function() {
                            menu.hideMenu();
                        });

                        e.stopPropagation();
                    },

                    beforeAnimate : function(e) {
                        var content = that.find('.content');
                        
                        var matchs = content.find('#sidebar-mask');

                        matchs.fadeOut('fast', function(){
                            $.each(matchs, function(){
                                this.remove();
                            });
                        });

                        content.css({
                            'overflow-y': 'auto'
                        });
                    },

                    afterAnimate : function(e) {
                        var content = that.find('.content'),
                            template = '<div id="sidebar-mask" class="back-gray-transparent"></div>',
                            maskWidth = content.width() - sidebar.width(),
                            maskHeight = sidebar.height();
                            mask = undefined;

                        if (e.state == 'HIDDEN')
                            return;

                        mask = $(template).appendTo(content);
                        
                        mask.css({
                            'position' : 'absolute',
                            'width'    : maskWidth + 'px',
                            'height'   : maskHeight + 'px',
                            'top'      : '49px',
                            'z-index'  : 10,
                            'left'     : sidebar.width() + 'px',
                            'display'  : 'none'
                        });

                        mask.fadeIn('fast'); 

                        var ul = this.find('ul');

                        ul.css({
                            'margin-top' : (content.scrollTop() + 10) + 'px'
                        });

                        content.css({
                            'overflow-y': 'hidden'
                        });
                    }
                });
            };

            var _init = function() {
                that.html('');
                loading.show();

                window.setTimeout(function(){                    
                    that.html(_template);
                    _resize();

                    $(window).resize(function() {
                        _resize();
                    });

                    var sidebar = $('.sidebar');
                    _createMenu('pt-BR');                    
                    var main = that.find('.content .main');

                    main.CurriculoData({
                        sidebar : sidebar,
                        language: 'pt-BR'
                    });

                    var printBtn = that.find('.footer #print');
                    printBtn.click(_print);

                    that.find('.top .language-buttons-container #pt-BR').addClass('back-really-dark-blue');

                    that.find('.top .language-buttons-container button').click(function(e){
                        var lang = $(this).attr('id');

                        main.CurriculoData({
                            sidebar : sidebar,
                            language: lang
                        });  
                        
                        var items = _getMenuItems(lang);
                        var menu = sidebar.data('Menu');
                        menu.refreshItems(items);

                        _refreshPrintBtnDescription(lang);

                        $(this).siblings().removeClass('back-really-dark-blue');
                        $(this).addClass('back-really-dark-blue');
                    });

                    loading.hide();
                }, 1000);
            };

            _init();
            return this;
        }
    });
    

})(jQuery);