(function($){

    require(['jquery'], function($) {
        $.fn.Menu = function(options) {
            var that = this;

            var _options = {
                navButton: undefined,
                beforeAnimate: undefined,
                afterAnimate: undefined,
                items: undefined,
                itemClick: undefined
            };

            _options = $.extend({}, options);
            this.state = 'HIDDEN';
            var width = that.width() + "px";
            var button = _options.navButton;

            that.hideMenu = function() {
                that.show();

                if(_options.beforeAnimate) {
                    _options.beforeAnimate.call(that, { sender: that, state : that.state });
                }

                that.animate({
                    'left' : '-=' + width
                }, 400, function(){
                    that.hide();
                    that.state = 'HIDDEN';
                    button.removeClass('back-really-dark-blue');

                    if(_options.afterAnimate) {
                        _options.afterAnimate.call(that, { sender: that, state : that.state });
                    }
                });
            };

            that.showMenu = function() {
                that.show();

                if(_options.beforeAnimate) {
                    _options.beforeAnimate.call(that, { sender: that, state : that.state });
                }

                that.animate({
                    'left' : '+=' + width
                }, 400);

                that.state = 'VISIBLE';
                button.addClass('back-really-dark-blue');

                if(_options.afterAnimate) {
                    _options.afterAnimate.call(that, { sender: that, state : that.state });
                }
            };

            that.refreshItems = function(items) {
                _renderItems(items);
            };

            var _onNavButtonClick = function(e){
                var button = $(this);

                switch(that.state) {
                    case 'HIDDEN':
                        that.showMenu();
                        break;
                    case 'VISIBLE':
                        that.hideMenu();
                        break;
                }
            };

            var _renderItems = function(items) {
                if(!items || !items.length || items.length == 0)
                    return;

                var ul = that.find('ul');

                if(ul && ul.length > 0) {
                    $.each(ul, function(){
                        this.remove();
                    });
                }

                ul = $('<ul></ul>').appendTo(that);

                var template = '<li anchor="{anchor}"> ' + 
                               '    <i class="{icon}"></i> &nbsp; {description} ' + 
                               '    <div class="separator"></div> ' +
                               '</li> ';

                for(var i = 0; i < items.length; i++) {
                    var item = items[i];

                    var html = template.replace(/\{anchor\}/g, item.anchor)
                                       .replace(/\{icon\}/g, item.icon)
                                       .replace(/\{description\}/g, item.description);

                    var li = $(html).appendTo(ul);
                    li.data('MenuItem', item);
                    li.data('Menu', that);

                    if(_options.itemClick) {
                        li.click(_options.itemClick);
                    }
                }
            }

            _options.navButton.click(_onNavButtonClick);
            that.css({ 'left' : '-' + width });
            that.hide();
            _renderItems(_options.items);
            that.data('Menu', that);

            return that;
        }
    });

})(jQuery);