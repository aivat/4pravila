export default ({ app }) => {
    /*
    ** Only run on client-side and only in production mode
    */
    if (process.env.NODE_ENV !== 'production') return
    /*
    ** Include Google Analytics Script
    */
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50159560 = new Ya.Metrika2({
                    id:50159560,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2", 'ga');
    /*
    ** Set the current page
    */
    ga('create', '50159560', 'auto')
    /*
    ** Every time the route changes (fired on initialization too)
    */
    app.router.afterEach((to, from) => {
      /*
      ** We tell Google Analytic to add a page view
      */
     console.log('страницы перехоl=', to.fullPath)
      ga('set', 'page', to.fullPath)
      ga('send', 'pageview')
    })
  }