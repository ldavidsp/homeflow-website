(($) => {
        if ($('.path-signin, .path-create, .path-login').length) {
            $('body')
                .css({
                    'background': 'url(/assets/img/bg/hero.png)no-repeat',
                    'background-size': 'cover'
                });
        }

        window.onscroll = function () {
            if ($('.path-homepage, .path-signin, .path-create').length) {
                const shadow = document.getElementById('homeflow-navbar');
                const homeflow_content = document.getElementById(
                    'homeflow-content');

                if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
                    shadow.classList.add('homeflow-navbar-collapsed');
                    homeflow_content.classList.add('homeflow-content-collapsed')
                }
                else {
                    shadow.classList.remove('homeflow-navbar-collapsed')
                }
            }
        };

    }
)(jQuery);

