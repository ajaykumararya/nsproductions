!function(s){"use strict";window.qodef={},window.qodefEmptyCallback=function(){},qodef.body=s("body"),qodef.html=s("html"),qodef.windowWidth=s(window).width(),qodef.windowHeight=s(window).height(),qodef.scroll=0,s(document).ready(function(){qodef.scroll=s(window).scrollTop(),t.init(),b.init(),o.init(),i.init(),n.init(),a.init()}),s(window).on("load",function(){d.init(),setTimeout(function(){e.init()},50)}),s(window).resize(function(){qodef.windowWidth=s(window).width(),qodef.windowHeight=s(window).height(),i.init()}),s(window).scroll(function(){qodef.scroll=s(window).scrollTop()}),s(document).on("pelicula_trigger_get_new_posts",function(){b.init(),o.init(),i.init()});var t={init:function(){t.addBodyClassName()},isBrowser:function(e){var i=!1;switch(e){case"chrome":i=/Chrome/.test(navigator.userAgent)&&/Google Inc/.test(navigator.vendor);break;case"safari":i=/Safari/.test(navigator.userAgent)&&/Apple Computer/.test(navigator.vendor);break;case"firefox":i=-1<navigator.userAgent.toLowerCase().indexOf("firefox");break;case"ie":i=0<window.navigator.userAgent.indexOf("MSIE ")||!!navigator.userAgent.match(/Trident.*rv\:11\./);break;case"edge":i=/Edge\/\d./i.test(navigator.userAgent)}return i},addBodyClassName:function(){s.each(["chrome","safari","firefox","ie","edge"],function(e,i){t.isBrowser(i)&&void 0!==qodef.body&&("ie"===i&&(i="ms-explorer"),qodef.body.addClass("qodef-browser--"+i))})}},b={init:function(e){this.holder=s(".qodef-swiper-container"),s.extend(this.holder,e),this.holder.length&&this.holder.each(function(){b.createSlider(s(this))})},createSlider:function(i){var e=b.getOptions(i),t=b.getEvents(i,e);new Swiper(i,Object.assign(e,t)).on("slideChange",function(){var e=String(this.realIndex+1);i.find(".swiper-pagination-current-slide").text(e.length<2?"0"+e:e)})},getOptions:function(e,i){var t=void 0!==e.data("options")?e.data("options"):{},o=void 0!==t.spaceBetween&&""!==t.spaceBetween?t.spaceBetween:0,n=void 0!==t.slidesPerView&&""!==t.slidesPerView?t.slidesPerView:1,a=void 0!==t.centeredSlides&&""!==t.centeredSlides&&t.centeredSlides,s=void 0!==t.slideToClickedItem&&""!==t.slideToClickedItem&&t.slideToClickedItem,d=void 0!==t.sliderScroll&&""!==t.sliderScroll&&t.sliderScroll,r=void 0!==t.roundLengths&&""!==t.roundLengths&&t.roundLengths,l=void 0===t.loop||""===t.loop||t.loop,f=void 0===t.autoplay||""===t.autoplay||t.autoplay,c=void 0!==t.speed&&""!==t.speed?parseInt(t.speed,10):3e3,u=void 0!==t.speedAnimation&&""!==t.speedAnimation?parseInt(t.speedAnimation,10):800,h=void 0!==t.slideAnimation&&""!==t.slideAnimation?t.slideAnimation:"",p=void 0!==t.customStages&&""!==t.customStages&&t.customStages,g=void 0!==t.outsideNavigation&&"yes"===t.outsideNavigation,m=g?".swiper-button-next-"+t.unique:e.find(".swiper-button-next"),g=g?".swiper-button-prev-"+t.unique:e.find(".swiper-button-prev"),q=e.find(".swiper-pagination"),c=(!0===f&&(f={disableOnInteraction:!1},5e3!==c)&&(f.delay=c),void 0!==t.slidesPerView1440&&""!==t.slidesPerView1440?parseInt(t.slidesPerView1440,10):5),v=void 0!==t.slidesPerView1366&&""!==t.slidesPerView1366?parseInt(t.slidesPerView1366,10):4,w=void 0!==t.slidesPerView1024&&""!==t.slidesPerView1024?parseInt(t.slidesPerView1024,10):3,y=void 0!==t.slidesPerView768&&""!==t.slidesPerView768?parseInt(t.slidesPerView768,10):2,_=void 0!==t.slidesPerView680&&""!==t.slidesPerView680?parseInt(t.slidesPerView680,10):1,t=void 0!==t.slidesPerView480&&""!==t.slidesPerView480?parseInt(t.slidesPerView480,10):1,p=(isNaN(c)&&(c="auto"),isNaN(v)&&(v="auto"),isNaN(w)&&(w="auto"),isNaN(y)&&(y="auto"),isNaN(_)&&(_="auto"),p||(n<2?y=w=v=c=n:n<3?w=v=c=n:n<4?v=c=n:n<5&&(c=n)),{slidesPerView:n,centeredSlides:a,slideToClickedItem:s,sliderScroll:d,spaceBetween:o,autoplay:f,loop:l,roundLengths:r,speed:u,navigation:{nextEl:m,prevEl:g},pagination:{el:q,type:"progressbar",progressbarOpposite:!0,renderProgressbar:function(e){return'<span class="'+e+'"></span><span class="swiper-pagination-current-slide">01</span>'}},breakpoints:{0:{slidesPerView:t=isNaN(t)?"auto":t},481:{slidesPerView:_},681:{slidesPerView:y},769:{slidesPerView:w},1025:{slidesPerView:v},1367:{slidesPerView:c},1441:{slidesPerView:n}}});return h.length&&"fade"===h&&(p.effect="fade",p.fadeEffect={crossFade:!0}),Object.assign(p,b.getSliderDatas(e))},getSliderDatas:function(e){var i,t=e.data(),o={};for(i in t)t.hasOwnProperty(i)&&"options"!==i&&void 0!==t[i]&&""!==t[i]&&(o[i]=t[i]);return o},getEvents:function(t,o){return{on:{init:function(){var i;t.addClass("qodef-swiper--initialized"),setTimeout(function(){o.slideToClickedItem&&t.on("click",".swiper-slide",function(e){s(this).hasClass("swiper-slide-active")||(e.preventDefault(),e.stopPropagation(),s(this).hasClass("swiper-slide-next")?t[0].swiper.slideNext():s(this).hasClass("swiper-slide-prev")&&t[0].swiper.slidePrev())})},300),o.sliderScroll&&(i=!1,t.on("mousewheel",function(e){e.preventDefault(),i||(i=!0,e.deltaY<0?t[0].swiper.slideNext():t[0].swiper.slidePrev(),setTimeout(function(){i=!1},o.speed))}))}}}}},o=(qodef.qodefSwiper=b,{init:function(e){this.holder=s(".qodef-magnific-popup"),s.extend(this.holder,e),s.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=s(this);e.hasClass("qodef-popup-item")?o.initSingleImagePopup(e):e.hasClass("qodef-popup-gallery")&&o.initGalleryPopup(e)})},initSingleImagePopup:function(e){var i=e.data("type");e.magnificPopup({type:i,titleSrc:"title",image:{cursor:null}})},initGalleryPopup:function(e){var e=e.find(".qodef-popup-item"),i=o.generateGalleryItems(e);e.each(function(e){s(this).magnificPopup({items:i,gallery:{enabled:!0},index:e,type:"image",image:{cursor:null}})})},generateGalleryItems:function(e){var i=[];return e.length&&e.each(function(){var e=s(this),e={src:e.attr("href"),title:e.attr("title"),type:e.data("type")};i.push(e)}),i}}),e=(qodef.qodefMagnificPopup=o,{init:function(){var e=s(".qodef--parallax-row .elementor-text-editor");e.length&&e.each(function(){var e=s(this);e.appear(function(){e.addClass("qodef--appear")},{accX:0,accY:200})})}}),i=(qodef.qodefAppearOnLoad=e,{init:function(){var e=s(".qodef-e-holder-main");e.length&&e.each(function(){i.position(s(this))})},position:function(e){var i=!!e.length&&e.hasClass("qodef-has-post-media"),t=!!e.length&&!e.hasClass("qodef-exception"),o=e.find(".qodef-e-content-main"),e=e.find(".qodef-e-title-main"),n=e.length?parseFloat(e.css("line-height")):0;o.length&&(i&&t&&e.length&&0<n&&o.css("margin-top",-n/2),o.addClass("qodef-e-content--appear"))}}),d=(qodef.qodefMainContent=i,{init:function(){var e=s(".qodef-slider-layout--predefined.qodef-slider-layout--predefined-fullscreen");e.length&&e.each(function(){var e=s(this);d.calcFSHeight(e)})},calcFSHeight:function(e){var i=s("#qodef-page-header"),t=s(".qodef-predefined-slider-fs-bottom-section"),o=s(".qodef-slider-predefined-text-behind .qodef-custom-font"),n=0,a=0;i.length&&(n=i.outerHeight()),t.length&&(a=t.outerHeight()),o.length&&(i=o.text().split(" "),o.empty(),i.forEach(function(e,i){o.append("<span>"+e+" </span>")})),e.css("height","calc(100vh - "+(n+a)+"px"),d.initAppear(e,t,o)},initAppear:function(e,i,t){t.length&&(t.css("opacity",1),(t=t.find(">span")).length)&&t.each(function(e){var i=s(this);setTimeout(function(){i.addClass("qodef--appear")},70*e)}),setTimeout(function(){var e;i.length&&(e=i.find(".elementor-social-icon")).length&&e.each(function(e){var i=s(this);setTimeout(function(){i.addClass("qodef--appear")},70*e)})},700),setTimeout(function(){e.length&&e.addClass("qodef--appear")},300)}}),n=(qodef.qodefSliderPredefinedFS=d,{customClass:"qodef-last-word",init:function(){var e=s(".widget:not(.widget_rss) .qodef-widget-title, .widget.widget_rss .qodef-widget-title a.rsswidget:last-child, .widget .qodef-author-info-name a span");e.length&&e.each(function(){n.modify(s(this)),s(this).find("."+n.customClass).appear(function(){s(this).addClass("qodef-appeared")})})},modify:function(e){e.html(e.html().replace(/(\S+)\s*$/,'<span class="'+n.customClass+'">$1</span>'))}}),a=(qodef.qodefTextModification=n,{init:function(){var e=s("rs-module[id^=rev_slider]");e.length&&e.each(function(){a.setSlider(s(this))})},setSlider:function(e){var t,o=e.revmaxslide();e.on("revolution.slide.onloaded",function(e){s(e.target).find(".pelicula_pag.tp-bullets").append('<div class="rs-bullets-progressbar-fill"></div>')}),e.on("revolution.slide.onbeforeswap",function(e,i){t=100*i.nextSlideIndex/o,s(e.target).find(".pelicula_pag.tp-bullets .rs-bullets-progressbar-fill").height(t+"%"),s(e.target).find(".pelicula_pag.tp-bullets .tp-bullet").css("opacity",0).filter(":nth-child("+i.nextSlideIndex+")").css("opacity",1)})}});qodef.qodefRevSlider=a,"function"!=typeof Object.assign&&(Object.assign=function(e){if(null==e)throw new TypeError("Cannot convert undefined or null to object");e=Object(e);for(var i=1;i<arguments.length;i++){var t=arguments[i];if(null!==t)for(var o in t)Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o])}return e})}(jQuery),function(o){"use strict";o(document).ready(function(){n.init()}),o(window).on("resize",function(){n.init()}),o(document).on("pelicula_trigger_get_new_posts",function(e,i){i.hasClass("qodef-blog")&&(t.init(i),n.resize(i))});var t={init:function(e){e=e.find(".wp-video-shortcode, .wp-audio-shortcode").not(".mejs-container");e.length&&e.each(function(){var e=o(this);"function"==typeof e.mediaelementplayer&&e.mediaelementplayer({videoWidth:"100%",videoHeight:"56.5%"})})}},n={init:function(){var e=o(".qodef-blog");e.length&&n.resize(e)},resize:function(e){e=e.find(".qodef-e-media iframe");e.length&&e.each(function(){var e=o(this),i=e.attr("width"),t=e.attr("height"),i=e.width()/i*t;e.css("height",i)})}}}(jQuery),function(c){"use strict";c(document).ready(function(){u.init()}),c(document).on("pelicula_trigger_get_new_posts",function(e,i){i.hasClass("qodef-filter--on")&&u.setVisibility(i,i.find(".qodef-m-filter-item.qodef--active"),!0)});var u={init:function(e){this.holder=c(".qodef-filter--on"),c.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=c(this),i=e.find(".qodef-m-filter-item");u.extendListHTML(e),u.clickEvent(e,i)})},extendListHTML:function(e){e.children(".qodef-hidden-filter-items").length||u.isMasonryLayout(e)||e.append('<div class="qodef-hidden-filter-items"></div>')},clickEvent:function(i,t){t.on("click",function(e){e.preventDefault();e=c(this);e.hasClass("qodef--active")||(i.addClass("qodef--filter-loading"),t.removeClass("qodef--active"),e.addClass("qodef--active"),u.setVisibility(i,e))})},setVisibility:function(e,i,t){var o=e.children(".qodef-hidden-filter-items"),n=o.length,a=n?o.children(".qodef-grid-item"):"",s=e.find(".qodef-grid-inner"),d=s.children(".qodef-grid-item"),r=i.data("taxonomy"),i=i.data("filter"),l="*"===i,f=l?i:r+"-"+i,r=d.hasClass(f);n&&!r&&a.hasClass(f)&&(r=!0),t&&l||(l||r||!u.hasLoadMore(e)?(u.isMasonryLayout(e)?s.isotope({filter:l?"":"."+f}):(l||d.each(function(){var e=c(this);-1===e.attr("class").indexOf(f)&&e.hide(300,"linear",function(){e.appendTo(o)})}),a.length&&a.each(function(){var e=c(this),i=e.attr("class");!l&&-1===i.indexOf(f)||e.appendTo(s).show(300,"linear")})),e.removeClass("qodef--filter-loading")):qodef.body.trigger("pelicula_trigger_load_more",[e]))},isMasonryLayout:function(e){return e.hasClass("qodef-layout--masonry")},hasLoadMore:function(e){return e.hasClass("qodef-pagination-type--load-more")}};qodef.qodefFilter=u}(jQuery),function(d){"use strict";d(document).ready(function(){i.init()}),d(document).on("pelicula_trigger_get_new_posts",function(){i.init()});var i={init:function(){var e=d(".qodef-layout--justified-gallery");e.length&&e.each(function(){i.setJustifyGallery(d(this))})},setJustifyGallery:function(e){var i=e.data("options"),t=e.children(".qodef-grid-inner"),o=void 0!==i.justified_gallery_row_height&&""!==i.justified_gallery_row_height?i.justified_gallery_row_height:150,n=void 0!==i.justified_gallery_row_height_max&&""!==i.justified_gallery_row_height_max&&i.justified_gallery_row_height_max,a=2*i.space_value,s=void 0!==i.justified_gallery_treshold&&""!==i.justified_gallery_treshold?i.justified_gallery_treshold:.75;t.waitForImages(function(){"function"==typeof t.justifiedGallery&&t.justifiedGallery({captions:!1,rowHeight:o,maxRowHeight:n,margins:a,border:0,lastRow:"nojustify",justifyThreshold:s,selector:".qodef-grid-item"}).on("jg.complete jg.rowflush",function(){var i=d(this),t=!1;i.find(".qodef-grid-item").addClass("show").each(function(){var e=d(this);e.height(Math.round(e.height())),t||0!==e.width()||(i.height(i.height()-e.height()-a),t=!0)})}),e.addClass("qodef--justified-gallery-init")})}};qodef.qodefJustifiedGallery=i}(jQuery),function(i){"use strict";i(document).ready(function(){n.init()}),i(document).on("pelicula_trigger_get_new_posts",function(e,i){i.hasClass("qodef-layout--masonry")&&n.init()});var n={init:function(e){this.holder=i(".qodef-layout--masonry"),i.extend(this.holder,e),this.holder.length&&this.holder.each(function(){n.createMasonry(i(this))})},createMasonry:function(i){var t=i.find(".qodef-grid-inner"),o=t.find(".qodef-grid-item");t.waitForImages(function(){var e;"function"==typeof t.isotope&&(t.isotope({layoutMode:"packery",itemSelector:".qodef-grid-item",percentPosition:!0,masonry:{columnWidth:".qodef-grid-masonry-sizer",gutter:".qodef-grid-masonry-gutter"}}),i.hasClass("qodef-items--fixed")&&!i.hasClass("qodef-items-custom-proportions--enabled")&&(e=n.getFixedImageSize(t,o),n.setFixedImageProportionSize(t,o,e)),t.isotope("layout")),t.addClass("qodef--masonry-init")})},getFixedImageSize:function(e,i){var t,o=e.find(".qodef-item--square");return o.length?(t=(o=o.find("img")).width())!==(o=o.height())?o:t:e.find(".qodef-grid-masonry-sizer").width()-2*parseInt(i.css("paddingLeft"),10)},setFixedImageProportionSize:function(e,i,t){var o=parseInt(i.css("paddingLeft"),10),n=(e.find(".qodef-item--square"),e.find(".qodef-item--landscape")),a=e.find(".qodef-item--portrait"),e=e.find(".qodef-item--huge-square"),s=qodef.windowWidth<=680;i.css("height",t),n.length&&n.css("height",Math.round(t/2)),a.length&&a.css("height",Math.round(2*(t+o))),s||(n.length&&n.css("height",t),e.length&&e.css("height",Math.round(2*(t+o))))}};qodef.qodefMasonryLayout=n}(jQuery),function(i){"use strict";i(document).ready(function(){t.init()});var t={init:function(){var e=i("#qodef-page-mobile-header");e.length&&(t.initMobileHeaderOpener(e),t.initDropDownMobileMenu())},initMobileHeaderOpener:function(e){var i,t=e.find(".qodef-mobile-header-opener");t.length&&(i=e.find(".qodef-mobile-header-navigation"),t.on("tap click",function(e){e.preventDefault(),i.is(":visible")?(i.slideUp(450),t.removeClass("qodef--opened")):(i.slideDown(450),t.addClass("qodef--opened"))}))},initDropDownMobileMenu:function(){var e=i(".qodef-mobile-header-navigation .menu-item-has-children > a");e.length&&e.each(function(){var o=i(this);o.on("tap click",function(e){e.preventDefault();var i,e=o.parent(),t=e.siblings(".menu-item-has-children");e.hasClass("menu-item-has-children")&&((i=e.find("ul.sub-menu").first()).is(":visible")?(i.slideUp(450),e.removeClass("qodef--opened")):(e.addClass("qodef--opened"),(0===t.length?e:e.siblings().removeClass("qodef--opened")).find(".sub-menu").slideUp(400,function(){i.slideDown(400)})))})})}}}(jQuery),function(s){s(document).ready(function(){e.init()});var e={init:function(){var e=s(".qodef-header-navigation.qodef-header-navigation-initial > ul > li.qodef-menu-item--narrow.menu-item-has-children");e.length&&e.each(function(e){var i,t=s(this),o=t.offset().left,n=t.find(" > ul"),a=n.outerWidth(),o=s(window).width()-o;0<t.find("li.menu-item-has-children").length&&(i=o-a),n.removeClass("qodef-drop-down--right"),(o<a||i<a)&&n.addClass("qodef-drop-down--right")})}}}(jQuery),function(a){"use strict";a(document).ready(function(){s.init()}),a(window).scroll(function(){s.scroll()}),a(document).on("pelicula_trigger_load_more",function(e,i,t){s.triggerLoadMore(i,t)});var s={init:function(e){this.holder=a(".qodef-pagination--on"),a.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=a(this);s.initPaginationType(e)})},scroll:function(e){this.holder=a(".qodef-pagination--on"),a.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=a(this);e.hasClass("qodef-pagination-type--infinite-scroll")&&s.initInfiniteScroll(e)})},initPaginationType:function(e){e.hasClass("qodef-pagination-type--standard")?s.initStandard(e):e.hasClass("qodef-pagination-type--load-more")?s.initLoadMore(e):e.hasClass("qodef-pagination-type--infinite-scroll")&&s.initInfiniteScroll(e)},initStandard:function(o){var e,i=o.find(".qodef-m-pagination-items");i.length&&(e=o.data("options"),i.children().each(function(){var i=a(this),t=i.children("a");s.changeStandardState(o,e.max_pages_num,1),t.on("click",function(e){e.preventDefault(),i.hasClass("qodef--active")||s.getNewPosts(o,t.data("paged"))})}))},changeStandardState:function(e,i,t){var o,n;e.hasClass("qodef-pagination-type--standard")&&(o=(e=e.find(".qodef-m-pagination-items")).children(".qodef--number"),n=e.children(".qodef--prev"),e=e.children(".qodef--next"),o.removeClass("qodef--active").eq(t-1).addClass("qodef--active"),n.children().data("paged",t-1),1<t?n.show():n.hide(),e.children().data("paged",t+1),t===i?e.hide():e.show())},initLoadMore:function(i){i.find(".qodef-load-more-button").on("click",function(e){e.preventDefault(),s.getNewPosts(i)})},triggerLoadMore:function(e,i){s.getNewPosts(e,i)},hideLoadMoreButton:function(e,i){e.hasClass("qodef-pagination-type--load-more")&&i.next_page>i.max_pages_num&&e.find(".qodef-load-more-button").hide()},initInfiniteScroll:function(e){var i=e.outerHeight()+e.offset().top,t=qodef.scroll+qodef.windowHeight,o=e.data("options");!e.hasClass("qodef--loading")&&i<t&&o.max_pages_num>=o.next_page&&s.getNewPosts(e)},getNewPosts:function(i,t){i.addClass("qodef--loading");var o=i.children(".qodef-grid-inner"),n=i.data("options");s.setNextPageValue(n,t,!1),a.ajax({type:"GET",url:qodefGlobal.vars.restUrl+qodefGlobal.vars.paginationRestRoute,data:{options:n},beforeSend:function(e){e.setRequestHeader("X-WP-Nonce",qodefGlobal.vars.restNonce)},success:function(e){"success"===e.status?(s.setNextPageValue(n,t,!0),s.changeStandardState(i,n.max_pages_num,t),o.waitForImages(function(){s.addPosts(o,e.data,t),s.reInitMasonryPosts(i,o),qodef.body.trigger("pelicula_trigger_get_new_posts",[i])}),s.hideLoadMoreButton(i,n)):console.log(e.message)},complete:function(){i.removeClass("qodef--loading")}})},setNextPageValue:function(e,i,t){void 0===i||""===i||t?t&&(e.next_page=parseInt(e.next_page,10)+1):e.next_page=i},addPosts:function(e,i,t){void 0!==t&&""!==t?e.html(i):e.append(i)},reInitMasonryPosts:function(e,i){e.hasClass("qodef-layout--masonry")&&(i.isotope("reloadItems").isotope({sortBy:"original-order"}),setTimeout(function(){i.isotope("layout")},200))}};qodef.qodefPagination=s}(jQuery),function(r){"use strict";r(document).ready(function(){t.init(),e.init(),i.init()});var t={init:function(e){this.holder=[],this.holder.push({holder:r("#qodef-woo-page .woocommerce-ordering select"),options:{minimumResultsForSearch:1/0}}),this.holder.push({holder:r("#qodef-woo-page .variations select"),options:{minimumResultsForSearch:1/0}}),this.holder.push({holder:r("#qodef-woo-page #calc_shipping_country"),options:{}}),this.holder.push({holder:r("#qodef-woo-page .shipping select#calc_shipping_state"),options:{}}),this.holder.push({holder:r(".widget.widget_archive select"),options:{}}),this.holder.push({holder:r(".widget.widget_categories select"),options:{}}),this.holder.push({holder:r(".widget.widget_text select"),options:{}}),r.extend(this.holder,e),"object"==typeof this.holder&&r.each(this.holder,function(e,i){t.createSelect2(i.holder,i.options)})},createSelect2:function(e,i){"function"==typeof e.select2&&e.select2(i)}},e={init:function(){r(document).on("click",".qodef-quantity-minus, .qodef-quantity-plus",function(e){e.stopPropagation();var i,e=r(this),t=e.siblings(".qodef-quantity-input"),o=parseFloat(t.data("step")),n=parseFloat(t.data("max")),a=parseFloat(t.data("min")),s=!1,d="function"==typeof Number.isNaN&&Number.isNaN(parseFloat(t.val()))?a:parseFloat(t.val());(s=e.hasClass("qodef-quantity-minus")?!0:s)?a<=(i=d-o)?t.val(i):t.val(a):(i=d+o,void 0!==n&&n<=i?t.val(n):t.val(i)),t.trigger("change")})}},i={init:function(){var e;"object"==typeof qodef.qodefMagnificPopup&&(e=r(".qodef--single.qodef-magnific-popup.qodef-popup-gallery .woocommerce-product-gallery__image")).length&&(e.each(function(){r(this).children("a").attr("data-type","image").addClass("qodef-popup-item")}),qodef.qodefMagnificPopup.init())}};qodef.qodefWooMagnificPopup=i}(jQuery);