!function(w){"use strict";function y(a){return moment(a.toDate())}function T(a){return 12*a.format("YYYY")+parseInt(a.format("MM"))}w.fn.dateTimePicker=function(a){var f=w.extend({selectData:"now",dateFormat:"YYYY-MM-DD HH:mm",showTime:!0,locale:"en",positionShift:{top:20,left:0},title:"Select Date and Time",buttonTitle:"Select"},a);moment.locale(f.locale);var u=this,v={hour:23,minute:59},h=!1,C=800,_="now"==f.selectData?moment():moment(f.selectData,f.dateFormat);_<moment()&&(_=moment());var g=y(moment()),x=y(_);return this.each(function(){x!=_&&(_=y(x)),u.addClass("dtp_main"),function(){var a=f.dateFormat.split(" ");f.showTime&&2!=a.length&&(a.length=2,a[0]="DD/MM/YY",a[1]="HH:mm");var d=w("<span>");d.text(x.format(a[0])),u.empty(),u.append(d),(d=w("<i>")).addClass("fa fa-calendar ico-size"),u.append(d),f.showTime&&((d=w("<span>")).text(x.format(a[1])),u.append(d),(d=w("<i>")).addClass("fa fa-clock-o ico-size"),u.append(d))}(),u.on("click",function(){var a=w("<div>");a.addClass("dtp_modal-win");var d=w("body");d.append(a);var t=function(){var a=w("<div>");f.showTime?a.addClass("dtp_modal-content"):a.addClass("dtp_modal-content-no-time");var d=w("<div>");{var t,e;d.addClass("dtp_modal-title"),d.text(f.title),a.append(d),(d=w("<div>")).addClass("dtp_modal-cell-date"),d.attr("id","field-data"),a.append(d),f.showTime&&((d=w("<div>")).addClass("dtp_modal-cell-time"),(e=w("<div>")).addClass("dtp_modal-time-block"),e.attr("id","field-time"),d.append(e),(t=w("<div>")).attr("id","time-line"),t.addClass("dtp_modal-time-line"),t.text(x.format(f.dateFormat)),e.append(t),e.append(function(){var a=w("<div>");a.addClass("dtp_modal-time-mechanic");var d=w("<div>");d.addClass("dtp_modal-append");var t=w("<i>");t.attr("id","angle-up-hour"),t.addClass("fa fa-angle-up ico-size-large cursorily hov"),d.append(t);var e=w("<span>");e.addClass("dtp_modal-midle"),d.append(e),(t=w("<i>")).attr("id","angle-up-minute"),t.addClass("fa fa-angle-up ico-size-large cursorily hov"),d.append(t),a.append(d),(d=w("<div>")).addClass("dtp_modal-digits");var n=w("<span>");return n.addClass("dtp_modal-digit"),n.attr("id","d-hh"),n.text(x.format("HH")),d.append(n),(e=w("<span>")).addClass("dtp_modal-midle-dig"),e.html(":"),d.append(e),(n=w("<span>")).addClass("dtp_modal-digit"),n.attr("id","d-mm"),n.text(x.format("mm")),d.append(n),a.append(d),(d=w("<div>")).addClass("dtp_modal-append"),(t=w("<i>")).attr("id","angle-down-hour"),t.addClass("fa fa-angle-down ico-size-large cursorily hov"),d.append(t),(e=w("<span>")).addClass("dtp_modal-midle"),d.append(e),(t=w("<i>")).attr("id","angle-down-minute"),t.addClass("fa fa-angle-down ico-size-large cursorily hov"),d.append(t),a.append(d),a}()),(e=w("<div>")).addClass("dpt_modal-button"),e.text(f.buttonTitle),e.bind("click",l),d.append(e),a.append(d))}return a}();d.append(t);var n,i,e,d=u.offset();function o(a){var d=t.find("#field-data");d.empty(),d.append(function(a){var d=w("<div>");d.addClass("dtp_modal-months");var t=w("<i></i>");return t.addClass("fa fa-angle-left cursorily ico-size-month hov"),t.bind("click",p),d.append(t),(t=w("<span>")).text(a.format("MMMM YYYY")),d.append(t),(t=w("<i></i>")).addClass("fa fa-angle-right cursorily ico-size-month hov"),t.bind("click",s),d.append(t),d}(a)),d.append(function(a){var d=w("<div>");d.addClass("dtp_modal-calendar");for(var t=0;t<7;t++){var e=w("<div>");e.addClass("dtp_modal-calendar-cell dtp_modal-colored"),e.text(moment().weekday(t).format("ddd")),d.append(e)}var n=y(a);n.date(1);for(var i=T(a)===T(g),o=T(x)===T(a),l=parseInt(a.format("D")),s=parseInt(g.format("D")),t=0;t<6;t++)for(var p=0;p<7;p++){var r,m=w("<div>");m.html("&nbsp;"),m.addClass("dtp_modal-calendar-cell"),n.month()==a.month()&&n.weekday()==p&&(r=parseInt(n.format("D")),m.text(r),i&&r<s?m.addClass("dtp_modal-grey"):o&&r==l?m.addClass("dtp_modal-cell-selected"):(m.addClass("cursorily"),m.bind("click",c)),n.add(1,"days")),d.append(m)}return d}(a))}function c(){var a=w(this);_.date(a.text()),x=y(_),m();var d=t.find("#field-data").find(".dtp_modal-cell-selected");d.removeClass("dtp_modal-cell-selected"),d.addClass("cursorily"),a.addClass("dtp_modal-cell-selected"),a.removeClass("cursorily"),d.bind("click",c),a.unbind("click")}function l(){f.showTime&&(x.hour(parseInt(n.text())),x.minute(parseInt(i.text())),_.hour(parseInt(n.text())),_.minute(parseInt(i.text()))),m(),t.remove(),a.remove()}function s(){_.add(1,"month"),o(_)}function p(){T(_)>T(g)&&(_.add(-1,"month"),o(_))}function r(a){var d=this||a,t=(d=w(d)).attr("id").split("-"),e=1;"down"==t[1]&&(e=-1),a=t[2],t=e,e="hour"==a?n:i,(t=parseInt(e.text())+t)<0?t=v[a]:v[a]<t&&(t=0),e.text(function(a){if(a<10)return"0"+a;return a}(t)),setTimeout(function(){var a;a=d,h&&(200<C&&(C-=200),r(a))},C)}function m(){f.showTime&&w("#time-line").text(x.format(f.dateFormat)),function(){var a=f.dateFormat.split(" ");f.showTime&&2!=a.length&&(a.length=2,a[0]="DD/MM/YY",a[1]="HH:mm");var d=w("<span>");d.text(x.format(a[0])),u.empty(),u.append(d),(d=w("<i>")).addClass("fa fa-calendar ico-size"),u.append(d),f.showTime&&((d=w("<span>")).text(x.format(a[1])),u.append(d),(d=w("<i>")).addClass("fa fa-clock-o ico-size"),u.append(d))}(),u.next().val(_.format(f.dateFormat)),f.showTime||(t.remove(),a.remove())}t.css({top:d.top+f.positionShift.top+"px",left:d.left+f.positionShift.left+"px"}),o(_),a.on("click",function(){t.remove(),a.remove()}),f.showTime&&((e=w(t).find('i[id^="angle-"]')).bind("mouseup",function(){h=!1,C=800}),e.bind("mousedown",function(){h=!0,r(this)}),d=w("#field-time"),n=d.find("#d-hh"),i=d.find("#d-mm"))})})}}(jQuery);