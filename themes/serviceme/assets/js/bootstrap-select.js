!function(e){"use strict";e.expr[":"].icontains=function(t,n,r){return e(t).text().toUpperCase().indexOf(r[3].toUpperCase())>=0};var t=function(n,r,i){if(i){i.stopPropagation();i.preventDefault()}this.$element=e(n);this.$newElement=null;this.$button=null;this.$menu=null;this.$lis=null;this.options=e.extend({},e.fn.selectpicker.defaults,this.$element.data(),typeof r=="object"&&r);if(this.options.title===null){this.options.title=this.$element.attr("title")}this.val=t.prototype.val;this.render=t.prototype.render;this.refresh=t.prototype.refresh;this.setStyle=t.prototype.setStyle;this.selectAll=t.prototype.selectAll;this.deselectAll=t.prototype.deselectAll;this.init()};t.prototype={constructor:t,init:function(){var t=this,n=this.$element.attr("id");this.$element.hide();this.multiple=this.$element.prop("multiple");this.autofocus=this.$element.prop("autofocus");this.$newElement=this.createView();this.$element.after(this.$newElement);this.$menu=this.$newElement.find("> .dropdown-menu");this.$button=this.$newElement.find("> button");this.$searchbox=this.$newElement.find("input");if(n!==undefined){this.$button.attr("data-id",n);e('label[for="'+n+'"]').click(function(e){e.preventDefault();t.$button.focus()})}this.checkDisabled();this.clickListener();if(this.options.liveSearch)this.liveSearchListener();this.render();this.liHeight();this.setStyle();this.setWidth();if(this.options.container)this.selectPosition();this.$menu.data("this",this);this.$newElement.data("this",this)},createDropdown:function(){var t=this.multiple?" show-tick":"";var n=this.$element.parent().hasClass("input-group")?" input-group-btn":"";var r=this.autofocus?" autofocus":"";var i=this.options.header?'<div class="popover-title"><button type="button" class="close" aria-hidden="true">&times;</button>'+this.options.header+"</div>":"";var s=this.options.liveSearch?'<div class="bootstrap-select-searchbox"><input type="text" class="input-block-level form-control" /></div>':"";var o=this.options.actionsBox?'<div class="bs-actionsbox">'+'<div class="btn-group btn-block">'+'<button class="actions-btn bs-select-all button btn-sm btn-default">'+"Select All"+"</button>"+'<button class="actions-btn bs-deselect-all button btn-sm btn-default">'+"Deselect All"+"</button>"+"</div>"+"</div>":"";var u='<div class="btn-group bootstrap-select'+t+n+'">'+'<button type="button" class="btn dropdown-toggle selectpicker" data-toggle="dropdown"'+r+">"+'<span class="filter-option pull-left"></span>&nbsp;'+'<span class="caret"></span>'+"</button>"+'<div class="dropdown-menu open">'+i+s+o+'<ul class="dropdown-menu inner selectpicker" role="menu">'+"</ul>"+"</div>"+"</div>";return e(u)},createView:function(){var e=this.createDropdown();var t=this.createLi();e.find("ul").append(t);return e},reloadLi:function(){this.destroyLi();var e=this.createLi();this.$menu.find("ul").append(e)},destroyLi:function(){this.$menu.find("li").remove()},createLi:function(){var t=this,n=[],r="";this.$element.find("option").each(function(){var r=e(this);var i=r.attr("class")||"";var s=r.attr("style")||"";var o=r.data("content")?r.data("content"):r.html();var u=r.data("subtext")!==undefined?'<small class="muted text-muted">'+r.data("subtext")+"</small>":"";var a=r.data("icon")!==undefined?'<i class="'+t.options.iconBase+" "+r.data("icon")+'"></i> ':"";if(a!==""&&(r.is(":disabled")||r.parent().is(":disabled"))){a="<span>"+a+"</span>"}if(!r.data("content")){o=a+'<span class="text">'+o+u+"</span>"}if(t.options.hideDisabled&&(r.is(":disabled")||r.parent().is(":disabled"))){n.push('<a style="min-height: 0; padding: 0"></a>')}else if(r.parent().is("optgroup")&&r.data("divider")!==true){if(r.index()===0){var f=r.parent().attr("label");var l=r.parent().data("subtext")!==undefined?'<small class="muted text-muted">'+r.parent().data("subtext")+"</small>":"";var c=r.parent().data("icon")?'<i class="'+r.parent().data("icon")+'"></i> ':"";f=c+'<span class="text">'+f+l+"</span>";if(r[0].index!==0){n.push('<div class="div-contain"><div class="divider"></div></div>'+"<dt>"+f+"</dt>"+t.createA(o,"opt "+i,s))}else{n.push("<dt>"+f+"</dt>"+t.createA(o,"opt "+i,s))}}else{n.push(t.createA(o,"opt "+i,s))}}else if(r.data("divider")===true){n.push('<div class="div-contain"><div class="divider"></div></div>')}else if(e(this).data("hidden")===true){n.push("<a></a>")}else{n.push(t.createA(o,i,s))}});e.each(n,function(e,t){var n=t==="<a></a>"?'class="hide"':"";r+='<li rel="'+e+'"'+n+">"+t+"</li>"});if(!this.multiple&&this.$element.find("option:selected").length===0&&!this.options.title){this.$element.find("option").eq(0).prop("selected",true).attr("selected","selected")}return e(r)},createA:function(e,t,n){return'<a tabindex="0" class="'+t+'" style="'+n+'">'+e+'<i class="'+this.options.iconBase+" "+this.options.tickIcon+' icon-ok check-mark"></i>'+"</a>"},render:function(t){var n=this;if(t!==false){this.$element.find("option").each(function(t){n.setDisabled(t,e(this).is(":disabled")||e(this).parent().is(":disabled"));n.setSelected(t,e(this).is(":selected"))})}this.tabIndex();var r=this.$element.find("option:selected").map(function(){var t=e(this);var r=t.data("icon")&&n.options.showIcon?'<i class="'+n.options.iconBase+" "+t.data("icon")+'"></i> ':"";var i;if(n.options.showSubtext&&t.attr("data-subtext")&&!n.multiple){i=' <small class="muted text-muted">'+t.data("subtext")+"</small>"}else{i=""}if(t.data("content")&&n.options.showContent){return t.data("content")}else if(t.attr("title")!==undefined){return t.attr("title")}else{return r+t.html()+i}}).toArray();var i=!this.multiple?r[0]:r.join(this.options.multipleSeparator);if(this.multiple&&this.options.selectedTextFormat.indexOf("count")>-1){var s=this.options.selectedTextFormat.split(">");var o=this.options.hideDisabled?":not([disabled])":"";if(s.length>1&&r.length>s[1]||s.length==1&&r.length>=2){i=this.options.countSelectedText.replace("{0}",r.length).replace("{1}",this.$element.find('option:not([data-divider="true"]):not([data-hidden="true"])'+o).length)}}this.options.title=this.$element.attr("title");if(!i){i=this.options.title!==undefined?this.options.title:this.options.noneSelectedText}this.$button.attr("title",e.trim(i));this.$newElement.find(".filter-option").html(i)},setStyle:function(e,t){if(this.$element.attr("class")){this.$newElement.addClass(this.$element.attr("class").replace(/selectpicker|mobile-device/gi,""))}var n=e?e:this.options.style;if(t=="add"){this.$button.addClass(n)}else if(t=="remove"){this.$button.removeClass(n)}else{this.$button.removeClass(this.options.style);this.$button.addClass(n)}},liHeight:function(){if(this.options.size===false)return;var e=this.$menu.parent().clone().find("> .dropdown-toggle").prop("autofocus",false).end().appendTo("body"),t=e.addClass("open").find("> .dropdown-menu"),n=t.find("li > a").outerHeight(),r=this.options.header?t.find(".popover-title").outerHeight():0,i=this.options.liveSearch?t.find(".bootstrap-select-searchbox").outerHeight():0,s=this.options.actionsBox?t.find(".bs-actionsbox").outerHeight():0;e.remove();this.$newElement.data("liHeight",n).data("headerHeight",r).data("searchHeight",i).data("actionsHeight",s)},setSize:function(){var t=this,n=this.$menu,r=n.find(".inner"),i=this.$newElement.outerHeight(),s=this.$newElement.data("liHeight"),o=this.$newElement.data("headerHeight"),u=this.$newElement.data("searchHeight"),a=this.$newElement.data("actionsHeight"),f=n.find("li .divider").outerHeight(true),l=parseInt(n.css("padding-top"))+parseInt(n.css("padding-bottom"))+parseInt(n.css("border-top-width"))+parseInt(n.css("border-bottom-width")),c=this.options.hideDisabled?":not(.disabled)":"",h=e(window),p=l+parseInt(n.css("margin-top"))+parseInt(n.css("margin-bottom"))+2,d,v,m,g=function(){v=t.$newElement.offset().top-h.scrollTop();m=h.height()-v-i};g();if(this.options.header)n.css("padding-top",0);if(this.options.size=="auto"){var y=function(){var e,i=t.$lis.not(".hide");g();d=m-p;if(t.options.dropupAuto){t.$newElement.toggleClass("dropup",v>m&&d-p<n.height())}if(t.$newElement.hasClass("dropup")){d=v-p}if(i.length+i.find("dt").length>3){e=s*3+p-2}else{e=0}n.css({"max-height":d+"px",overflow:"hidden","min-height":e+o+u+a+"px"});r.css({"max-height":d-o-u-a-l+"px","overflow-y":"auto","min-height":Math.max(e-l,0)+"px"})};y();this.$searchbox.off("input.getSize propertychange.getSize").on("input.getSize propertychange.getSize",y);e(window).off("resize.getSize").on("resize.getSize",y);e(window).off("scroll.getSize").on("scroll.getSize",y)}else if(this.options.size&&this.options.size!="auto"&&n.find("li"+c).length>this.options.size){var b=n.find("li"+c+" > *").filter(":not(.div-contain)").slice(0,this.options.size).last().parent().index();var w=n.find("li").slice(0,b+1).find(".div-contain").length;d=s*this.options.size+w*f+l;if(t.options.dropupAuto){this.$newElement.toggleClass("dropup",v>m&&d<n.height())}n.css({"max-height":d+o+u+a+"px",overflow:"hidden"});r.css({"max-height":d-l+"px","overflow-y":"auto"})}},setWidth:function(){if(this.options.width=="auto"){this.$menu.css("min-width","0");var e=this.$newElement.clone().appendTo("body");var t=e.find("> .dropdown-menu").css("width");var n=e.css("width","auto").find("> button").css("width");e.remove();this.$newElement.css("width",Math.max(parseInt(t),parseInt(n))+"px")}else if(this.options.width=="fit"){this.$menu.css("min-width","");this.$newElement.css("width","").addClass("fit-width")}else if(this.options.width){this.$menu.css("min-width","");this.$newElement.css("width",this.options.width)}else{this.$menu.css("min-width","");this.$newElement.css("width","")}if(this.$newElement.hasClass("fit-width")&&this.options.width!=="fit"){this.$newElement.removeClass("fit-width")}},selectPosition:function(){var t=this,n="<div />",r=e(n),i,s,o=function(e){r.addClass(e.attr("class").replace(/form-control/gi,"")).toggleClass("dropup",e.hasClass("dropup"));i=e.offset();s=e.hasClass("dropup")?0:e[0].offsetHeight;r.css({top:i.top+s,left:i.left,width:e[0].offsetWidth,position:"absolute"})};this.$newElement.on("click",function(){if(t.isDisabled()){return}o(e(this));r.appendTo(t.options.container);r.toggleClass("open",!e(this).hasClass("open"));r.append(t.$menu)});e(window).resize(function(){o(t.$newElement)});e(window).on("scroll",function(){o(t.$newElement)});e("html").on("click",function(n){if(e(n.target).closest(t.$newElement).length<1){r.removeClass("open")}})},mobile:function(){this.$element.addClass("mobile-device").appendTo(this.$newElement);if(this.options.container)this.$menu.hide()},refresh:function(){this.$lis=null;this.reloadLi();this.render();this.setWidth();this.setStyle();this.checkDisabled();this.liHeight()},update:function(){this.reloadLi();this.setWidth();this.setStyle();this.checkDisabled();this.liHeight()},setSelected:function(t,n){if(this.$lis==null)this.$lis=this.$menu.find("li");e(this.$lis[t]).toggleClass("selected",n)},setDisabled:function(t,n){if(this.$lis==null)this.$lis=this.$menu.find("li");if(n){e(this.$lis[t]).addClass("disabled").find("a").attr("href","#").attr("tabindex",-1)}else{e(this.$lis[t]).removeClass("disabled").find("a").removeAttr("href").attr("tabindex",0)}},isDisabled:function(){return this.$element.is(":disabled")},checkDisabled:function(){var e=this;if(this.isDisabled()){this.$button.addClass("disabled").attr("tabindex",-1)}else{if(this.$button.hasClass("disabled")){this.$button.removeClass("disabled")}if(this.$button.attr("tabindex")==-1){if(!this.$element.data("tabindex"))this.$button.removeAttr("tabindex")}}this.$button.click(function(){return!e.isDisabled()})},tabIndex:function(){if(this.$element.is("[tabindex]")){this.$element.data("tabindex",this.$element.attr("tabindex"));this.$button.attr("tabindex",this.$element.data("tabindex"))}},clickListener:function(){var t=this;e("body").on("touchstart.dropdown",".dropdown-menu",function(e){e.stopPropagation()});this.$newElement.on("click",function(){t.setSize();if(!t.options.liveSearch&&!t.multiple){setTimeout(function(){t.$menu.find(".selected a").focus()},10)}});this.$menu.on("click","li a",function(n){var r=e(this).parent().index(),i=t.$element.val(),s=t.$element.prop("selectedIndex");if(t.multiple){n.stopPropagation()}n.preventDefault();if(!t.isDisabled()&&!e(this).parent().hasClass("disabled")){var o=t.$element.find("option"),u=o.eq(r),a=u.prop("selected"),f=u.parent("optgroup"),l=t.options.maxOptions,c=f.data("maxOptions")||false;if(!t.multiple){o.prop("selected",false);u.prop("selected",true);t.$menu.find(".selected").removeClass("selected");t.setSelected(r,true)}else{u.prop("selected",!a);t.setSelected(r,!a);if(l!==false||c!==false){var h=l<o.filter(":selected").length,p=c<f.find("option:selected").length,d=t.options.maxOptionsText,v=d[0].replace("{n}",l),m=d[1].replace("{n}",c),g=e('<div class="notify"></div>');if(l&&h||c&&p){if(d[2]){v=v.replace("{var}",d[2][l>1?0:1]);m=m.replace("{var}",d[2][c>1?0:1])}u.prop("selected",false);t.$menu.append(g);if(l&&h){g.append(e("<div>"+v+"</div>"));t.$element.trigger("maxReached.bs.select")}if(c&&p){g.append(e("<div>"+m+"</div>"));t.$element.trigger("maxReachedGrp.bs.select")}setTimeout(function(){t.setSelected(r,false)},10);g.delay(750).fadeOut(300,function(){e(this).remove()})}}}if(!t.multiple){t.$button.focus()}else if(t.options.liveSearch){t.$searchbox.focus()}if(i!=t.$element.val()&&t.multiple||s!=t.$element.prop("selectedIndex")&&!t.multiple){t.$element.change()}}});this.$menu.on("click","li.disabled a, li dt, li .div-contain, .popover-title, .popover-title :not(.close)",function(e){if(e.target==this){e.preventDefault();e.stopPropagation();if(!t.options.liveSearch){t.$button.focus()}else{t.$searchbox.focus()}}});this.$menu.on("click",".popover-title .close",function(){t.$button.focus()});this.$searchbox.on("click",function(e){e.stopPropagation()});this.$menu.on("click",".actions-btn",function(n){if(t.options.liveSearch){t.$searchbox.focus()}else{t.$button.focus()}n.preventDefault();n.stopPropagation();if(e(this).is(".bs-select-all")){t.selectAll()}else{t.deselectAll()}t.$element.change()});this.$element.change(function(){t.render(false)})},liveSearchListener:function(){var t=this,n=e('<li class="no-results"></li>');this.$newElement.on("click.dropdown.data-api",function(){t.$menu.find(".active").removeClass("active");if(!!t.$searchbox.val()){t.$searchbox.val("");t.$menu.find("li").show();if(!!n.parent().length)n.remove()}if(!t.multiple)t.$menu.find(".selected").addClass("active");setTimeout(function(){t.$searchbox.focus()},10)});this.$searchbox.on("input propertychange",function(){if(t.$searchbox.val()){t.$lis.removeClass("hide").find("a").not(":icontains("+t.$searchbox.val()+")").parent().addClass("hide");if(!t.$menu.find("li").filter(":visible:not(.no-results)").length){if(!!n.parent().length)n.remove();n.html(t.options.noneResultsText+' "'+t.$searchbox.val()+'"').show();t.$menu.find("li").last().after(n)}else if(!!n.parent().length){n.remove()}}else{t.$menu.find("li").removeClass("hide");if(!!n.parent().length)n.remove()}t.$menu.find("li.active").removeClass("active");t.$menu.find("li").filter(":visible:not(.divider)").eq(0).addClass("active").find("a").focus();e(this).focus()});this.$menu.on("mouseenter","a",function(n){t.$menu.find(".active").removeClass("active");e(n.currentTarget).parent().not(".disabled").addClass("active")});this.$menu.on("mouseleave","a",function(){t.$menu.find(".active").removeClass("active")})},val:function(e){if(e!==undefined){this.$element.val(e);this.$element.change();return this.$element}else{return this.$element.val()}},selectAll:function(){if(this.$lis==null)this.$lis=this.$menu.find("li");this.$element.find("option:enabled").prop("selected",true);e(this.$lis).filter(":not(.disabled)").addClass("selected");this.render(false)},deselectAll:function(){if(this.$lis==null)this.$lis=this.$menu.find("li");this.$element.find("option:enabled").prop("selected",false);e(this.$lis).filter(":not(.disabled)").removeClass("selected");this.render(false)},keydown:function(t){var n,r,i,s,o,u,a,f,l,c,h,p,d={32:" ",48:"0",49:"1",50:"2",51:"3",52:"4",53:"5",54:"6",55:"7",56:"8",57:"9",59:";",65:"a",66:"b",67:"c",68:"d",69:"e",70:"f",71:"g",72:"h",73:"i",74:"j",75:"k",76:"l",77:"m",78:"n",79:"o",80:"p",81:"q",82:"r",83:"s",84:"t",85:"u",86:"v",87:"w",88:"x",89:"y",90:"z",96:"0",97:"1",98:"2",99:"3",100:"4",101:"5",102:"6",103:"7",104:"8",105:"9"};n=e(this);i=n.parent();if(n.is("input"))i=n.parent().parent();c=i.data("this");if(c.options.liveSearch)i=n.parent().parent();if(c.options.container)i=c.$menu;r=e("[role=menu] li:not(.divider) a",i);p=c.$menu.parent().hasClass("open");if(!p&&/([0-9]|[A-z])/.test(String.fromCharCode(t.keyCode))){if(!c.options.container){c.setSize();c.$menu.parent().addClass("open");p=c.$menu.parent().hasClass("open")}else{c.$newElement.trigger("click")}c.$searchbox.focus()}if(c.options.liveSearch){if(/(^9$|27)/.test(t.keyCode)&&p&&c.$menu.find(".active").length===0){t.preventDefault();c.$menu.parent().removeClass("open");c.$button.focus()}r=e("[role=menu] li:not(.divider):visible",i);if(!n.val()&&!/(38|40)/.test(t.keyCode)){if(r.filter(".active").length===0){r=c.$newElement.find("li").filter(":icontains("+d[t.keyCode]+")")}}}if(!r.length)return;if(/(38|40)/.test(t.keyCode)){s=r.index(r.filter(":focus"));u=r.parent(":not(.disabled):visible").first().index();a=r.parent(":not(.disabled):visible").last().index();o=r.eq(s).parent().nextAll(":not(.disabled):visible").eq(0).index();f=r.eq(s).parent().prevAll(":not(.disabled):visible").eq(0).index();l=r.eq(o).parent().prevAll(":not(.disabled):visible").eq(0).index();if(c.options.liveSearch){r.each(function(t){if(e(this).is(":not(.disabled)")){e(this).data("index",t)}});s=r.index(r.filter(".active"));u=r.filter(":not(.disabled):visible").first().data("index");a=r.filter(":not(.disabled):visible").last().data("index");o=r.eq(s).nextAll(":not(.disabled):visible").eq(0).data("index");f=r.eq(s).prevAll(":not(.disabled):visible").eq(0).data("index");l=r.eq(o).prevAll(":not(.disabled):visible").eq(0).data("index")}h=n.data("prevIndex");if(t.keyCode==38){if(c.options.liveSearch)s-=1;if(s!=l&&s>f)s=f;if(s<u)s=u;if(s==h)s=a}if(t.keyCode==40){if(c.options.liveSearch)s+=1;if(s==-1)s=0;if(s!=l&&s<o)s=o;if(s>a)s=a;if(s==h)s=u}n.data("prevIndex",s);if(!c.options.liveSearch){r.eq(s).focus()}else{t.preventDefault();if(!n.is(".dropdown-toggle")){r.removeClass("active");r.eq(s).addClass("active").find("a").focus();n.focus()}}}else if(!n.is("input")){var v=[],m,g;r.each(function(){if(e(this).parent().is(":not(.disabled)")){if(e.trim(e(this).text().toLowerCase()).substring(0,1)==d[t.keyCode]){v.push(e(this).parent().index())}}});m=e(document).data("keycount");m++;e(document).data("keycount",m);g=e.trim(e(":focus").text().toLowerCase()).substring(0,1);if(g!=d[t.keyCode]){m=1;e(document).data("keycount",m)}else if(m>=v.length){e(document).data("keycount",0);if(m>v.length)m=1}r.eq(v[m-1]).focus()}if(/(13|32|^9$)/.test(t.keyCode)&&p){if(!/(32)/.test(t.keyCode))t.preventDefault();if(!c.options.liveSearch){e(":focus").click()}else if(!/(32)/.test(t.keyCode)){c.$menu.find(".active a").click();n.focus()}e(document).data("keycount",0)}if(/(^9$|27)/.test(t.keyCode)&&p&&(c.multiple||c.options.liveSearch)||/(27)/.test(t.keyCode)&&!p){c.$menu.parent().removeClass("open");c.$button.focus()}},hide:function(){this.$newElement.hide()},show:function(){this.$newElement.show()},destroy:function(){this.$newElement.remove();this.$element.remove()}};e.fn.selectpicker=function(n,r){var i=arguments;var s;var o=this.each(function(){if(e(this).is("select")){var o=e(this),u=o.data("selectpicker"),a=typeof n=="object"&&n;if(!u){o.data("selectpicker",u=new t(this,a,r))}else if(a){for(var f in a){u.options[f]=a[f]}}if(typeof n=="string"){var l=n;if(u[l]instanceof Function){[].shift.apply(i);s=u[l].apply(u,i)}else{s=u.options[l]}}}});if(s!==undefined){return s}else{return o}};e.fn.selectpicker.defaults={style:"button",size:"auto",title:null,selectedTextFormat:"values",noneSelectedText:"Nothing selected",noneResultsText:"No results match",countSelectedText:"{0} of {1} selected",maxOptionsText:["Limit reached ({n} {var} max)","Group limit reached ({n} {var} max)",["items","item"]],width:false,container:false,hideDisabled:false,showSubtext:false,showIcon:true,showContent:true,dropupAuto:true,header:false,liveSearch:false,actionsBox:false,multipleSeparator:", ",iconBase:"glyphicon",tickIcon:"glyphicon-ok",maxOptions:false};e(document).data("keycount",0).on("keydown",".bootstrap-select [data-toggle=dropdown], .bootstrap-select [role=menu], .bootstrap-select-searchbox input",t.prototype.keydown).on("focusin.modal",".bootstrap-select [data-toggle=dropdown], .bootstrap-select [role=menu], .bootstrap-select-searchbox input",function(e){e.stopPropagation()})}(window.jQuery)