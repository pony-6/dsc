(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6fcc","chunk-252e"],{"037a":function(t,e,i){"use strict";i.r(e);var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"search-page"},[i("Search",{attrs:{placeholder:t.placeholder,placeholderState:t.placeholderState}}),i("div",{staticClass:"ms-search-wraper"},[i("div",{staticClass:"recent-search"},[i("div",{staticClass:"ms-search-head clearfix"},[i("p",[t._v(t._s(t.$t("lang.recent_search")))]),i("i",{staticClass:"iconfont icon-delete",on:{click:t.emptyArr}})]),i("div",{staticClass:"ms-search-tags"},[t._l(t.latelyKeyword,function(e,s){return i("span",{key:s,on:{click:function(i){t.searchTag(e)}}},[i("a",{attrs:{href:"javascript:void(0)"}},[t._v(t._s(e))])])}),0==t.latelyKeyword.length?i("span",[i("a",{attrs:{href:"javascript:void(0);"}},[t._v(t._s(t.$t("lang.not_available")))])]):t._e()],2)]),t.search_keywords.length>0?i("div",{staticClass:"hot-search"},[i("div",{staticClass:"ms-search-head clearfix"},[i("p",[t._v(t._s(t.$t("lang.hot_search")))])]),i("div",{staticClass:"ms-search-tags"},t._l(t.search_keywords,function(e,s){return i("span",{key:s},[i("a",{attrs:{href:"javascript:void(0)"},on:{click:function(i){t.searchTag(e)}}},[t._v(t._s(e))])])}))]):t._e()]),i("ec-tab-down")],1)},a=[],n=(i("28a5"),i("6b6e")),o=i("c106"),r={name:"search",data:function(){return{latelyKeyword:[],search_keywords:[],placeholderState:0,placeholder:this.$t("lang.search_goods")}},components:{EcTabDown:n["a"],Search:o["a"]},created:function(){this.load()},methods:{load:function(){var t=JSON.parse(sessionStorage.getItem("configData"));t&&(this.search_keywords=t.search_keywords.split(",")),localStorage.getItem("LatelyKeyword")?(this.latelyKeyword=JSON.parse(localStorage.getItem("LatelyKeyword")),this.placeholder=this.latelyKeyword[0],this.placeholderState=1):(this.latelyKeyword=[],this.placeholder=this.$t("lang.search_goods"),this.placeholderState=0)},searchTag:function(t){this.placeholder=t,this.$router.push({name:"searchList",query:{keywords:t}})},emptyArr:function(){this.placeholder=this.$t("lang.search_goods"),this.placeholderState=0,localStorage.removeItem("LatelyKeyword"),this.load()}}},c=r,l=i("2877"),h=Object(l["a"])(c,s,a,!1,null,null,null);h.options.__file="Search.vue";e["default"]=h.exports},"0b33":function(t,e,i){"use strict";var s=i("fe7e"),a=i("f331");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{directives:[{name:"show",rawName:"v-show",value:t.isSelected,expression:"isSelected"}],class:t.b("pane")},[t.inited?t._t("default"):t._e(),t.$slots.title?i("div",{ref:"title"},[t._t("title")],2):t._e()],2)},name:"tab",mixins:[a["a"]],props:{title:String,disabled:Boolean},data:function(){return{inited:!1}},computed:{index:function(){return this.parent.tabs.indexOf(this)},isSelected:function(){return this.index===this.parent.curActive}},watch:{"parent.curActive":function(){this.inited=this.inited||this.isSelected},title:function(){this.parent.setLine()}},created:function(){this.findParent("van-tabs")},mounted:function(){var t=this.parent.tabs,e=this.parent.$slots.default.indexOf(this.$vnode);t.splice(-1===e?t.length:e,0,this),this.$slots.title&&this.parent.renderTitle(this.$refs.title,this.index)},beforeDestroy:function(){this.parent.tabs.splice(this.index,1)}})},3592:function(t,e,i){},"3e0b":function(t,e,i){},"5e46":function(t,e,i){"use strict";var s=i("fe7e"),a=i("8624"),n=i("db78"),o=i("023d"),r=i("3875");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b([t.type])},[i("div",{ref:"wrap",class:[t.b("wrap",{scrollable:t.scrollable}),{"van-hairline--top-bottom":"line"===t.type}],style:t.wrapStyle},[i("div",{ref:"nav",class:t.b("nav",[t.type]),style:t.navStyle},["line"===t.type?i("div",{class:t.b("line"),style:t.lineStyle}):t._e(),t._l(t.tabs,function(e,s){return i("div",{ref:"tabs",refInFor:!0,staticClass:"van-tab",class:{"van-tab--active":s===t.curActive,"van-tab--disabled":e.disabled},style:t.getTabStyle(e,s),on:{click:function(e){t.onClick(s)}}},[i("span",{ref:"title",refInFor:!0,staticClass:"van-ellipsis"},[t._v("\n          "+t._s(e.title)+"\n        ")])])})],2)]),i("div",{ref:"content",class:t.b("content")},[t._t("default")],2)])},name:"tabs",mixins:[r["a"]],model:{prop:"active"},props:{color:String,sticky:Boolean,lineWidth:Number,swipeable:Boolean,active:{type:[Number,String],default:0},type:{type:String,default:"line"},duration:{type:Number,default:.2},swipeThreshold:{type:Number,default:4},offsetTop:{type:Number,default:0}},data:function(){return{tabs:[],position:"",curActive:null,lineStyle:{},events:{resize:!1,sticky:!1,swipeable:!1}}},computed:{scrollable:function(){return this.tabs.length>this.swipeThreshold},wrapStyle:function(){switch(this.position){case"top":return{top:this.offsetTop+"px",position:"fixed"};case"bottom":return{top:"auto",bottom:0};default:return null}},navStyle:function(){return{borderColor:this.color}}},watch:{active:function(t){t!==this.curActive&&this.correctActive(t)},color:function(){this.setLine()},tabs:function(t){this.correctActive(this.curActive||this.active),this.scrollIntoView(),this.setLine()},curActive:function(){this.scrollIntoView(),this.setLine(),"top"!==this.position&&"bottom"!==this.position||o["a"].setScrollTop(window,o["a"].getElementTop(this.$el))},sticky:function(){this.handlers(!0)},swipeable:function(){this.handlers(!0)}},mounted:function(){var t=this;this.correctActive(this.active),this.setLine(),this.$nextTick(function(){t.handlers(!0),t.scrollIntoView(!0)})},activated:function(){var t=this;this.$nextTick(function(){t.handlers(!0),t.scrollIntoView(!0)})},deactivated:function(){this.handlers(!1)},beforeDestroy:function(){this.handlers(!1)},methods:{handlers:function(t){var e=this.events,i=this.sticky&&t,s=this.swipeable&&t;if(e.resize!==t&&(e.resize=t,(t?n["b"]:n["a"])(window,"resize",this.setLine,!0)),e.sticky!==i&&(e.sticky=i,this.scrollEl=this.scrollEl||o["a"].getScrollEventTarget(this.$el),(i?n["b"]:n["a"])(this.scrollEl,"scroll",this.onScroll,!0),this.onScroll()),e.swipeable!==s){e.swipeable=s;var a=this.$refs.content,r=s?n["b"]:n["a"];r(a,"touchstart",this.touchStart),r(a,"touchmove",this.touchMove),r(a,"touchend",this.onTouchEnd),r(a,"touchcancel",this.onTouchEnd)}},onTouchEnd:function(){var t=this.direction,e=this.deltaX,i=this.curActive,s=50;"horizontal"===t&&this.offsetX>=s&&(e>0&&0!==i?this.setCurActive(i-1):e<0&&i!==this.tabs.length-1&&this.setCurActive(i+1))},onScroll:function(){var t=o["a"].getScrollTop(window)+this.offsetTop,e=o["a"].getElementTop(this.$el),i=e+this.$el.offsetHeight-this.$refs.wrap.offsetHeight;this.position=t>i?"bottom":t>e?"top":"";var s={scrollTop:t,isFixed:"top"===this.position};this.$emit("scroll",s)},setLine:function(){var t=this;this.$nextTick(function(){if(t.$refs.tabs&&"line"===t.type){var e=t.$refs.tabs[t.curActive],i=t.isDef(t.lineWidth)?t.lineWidth:e.offsetWidth/2,s=e.offsetLeft+(e.offsetWidth-i)/2;t.lineStyle={width:i+"px",backgroundColor:t.color,transform:"translateX("+s+"px)",transitionDuration:t.duration+"s"}}})},correctActive:function(t){t=+t;var e=this.tabs.some(function(e){return e.index===t}),i=(this.tabs[0]||{}).index||0;this.setCurActive(e?t:i)},setCurActive:function(t){t=this.findAvailableTab(t,t<this.curActive),this.isDef(t)&&t!==this.curActive&&(this.$emit("input",t),null!==this.curActive&&this.$emit("change",t,this.tabs[t].title),this.curActive=t)},findAvailableTab:function(t,e){var i=e?-1:1,s=t;while(s>=0&&s<this.tabs.length){if(!this.tabs[s].disabled)return s;s+=i}},onClick:function(t){var e=this.tabs[t],i=e.title,s=e.disabled;s?this.$emit("disabled",t,i):(this.setCurActive(t),this.$emit("click",t,i))},scrollIntoView:function(t){if(this.scrollable&&this.$refs.tabs){var e=this.$refs.tabs[this.curActive],i=this.$refs.nav,s=i.scrollLeft,a=i.offsetWidth,n=e.offsetLeft,o=e.offsetWidth;this.scrollTo(i,s,n-(a-o)/2,t)}},scrollTo:function(t,e,i,s){if(s)t.scrollLeft+=i-e;else{var n=0,o=Math.round(1e3*this.duration/16),r=function s(){t.scrollLeft+=(i-e)/o,++n<o&&Object(a["a"])(s)};r()}},renderTitle:function(t,e){var i=this;this.$nextTick(function(){var s=i.$refs.title[e];s.parentNode.replaceChild(t,s)})},getTabStyle:function(t,e){var i={},s=this.color,a=e===this.curActive,n="card"===this.type;return s&&(t.disabled||n===a||(i.color=s),!t.disabled&&n&&a&&(i.backgroundColor=s),n&&(i.borderColor=s)),i}}})},8624:function(t,e,i){"use strict";(function(t){i.d(e,"a",function(){return c});var s=i("a142"),a=Date.now();function n(t){var e=Date.now(),i=Math.max(0,16-(e-a)),s=setTimeout(t,i);return a=e+i,s}var o=s["e"]?t:window,r=o.requestAnimationFrame||o.webkitRequestAnimationFrame||n;o.cancelAnimationFrame||o.webkitCancelAnimationFrame||o.clearTimeout;function c(t){return r.call(o,t)}}).call(this,i("c8ba"))},"8e30":function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"community_list_container",class:{community_container_list:"tab"==t.routerName},attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},[s("div",{class:["grid"==t.mode?"video_list_grid":"video_list"]},[t.list.length>0?t._l(t.list,function(e,a){return s("div",{key:a,staticClass:"video_item bgc_fff",on:{click:function(i){t.goDetail(e.comment_id)}}},[e.img?s("img",{staticClass:"video_poster",attrs:{src:e.img}}):s("img",{staticClass:"video_poster",attrs:{src:i("d9e6")}}),s("div",{staticClass:"video_info flex_box fd_column jc_sb"},[s("p",{staticClass:"text_2 size_15 color_333 weight_700"},[t._v(t._s(e.goods_name))]),s("div",{staticClass:"video_user_info flex_box jc_sb ai_center"},[s("div",{staticClass:"video_info_left flex_box ai_center"},[e.user_picture?s("img",{staticClass:"video_upic",attrs:{src:e.user_picture}}):s("img",{staticClass:"video_upic",attrs:{src:i("d9e6")}}),s("span",{staticClass:"video_uname size_12 color_666"},[t._v(t._s(e.user_name))])]),s("div",{staticClass:"video_info_right"},[s("i",{staticClass:"iconfont icon-find-liulan-alt color_ccc"}),s("span",{staticClass:"size_12 color_ccc"},[t._v(t._s(e.dis_browse_num?e.dis_browse_num:"0"))])])])])])}):t.loading?t._e():[s("div",{staticStyle:{margin:"0 auto"}},[s("no-data")],1)]],2),t.loading?[s("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e(),s("div",{staticClass:"footer-cont dsc_loading_box"},[t._v(t._s(t.isOver&&t.list.length>4?t.$t("lang.no_more"):""))])],2)},a=[],n=i("2909"),o=(i("96cf"),i("1da1")),r=(i("d49c"),i("5487")),c=(i("e7e5"),i("d399")),l=(i("ac1e"),i("543e")),h=i("2b0e"),d=i("6f38"),u=i("42d1");h["default"].use(c["a"]).use(l["a"]);var f={name:"conmmentlist",directives:{WaterfallLower:Object(r["a"])("lower")},props:{routerName:{type:String,default:""}},components:{"no-data":d["a"],"dsc-loading":u["a"]},data:function(){return{dscLoading:!0,list:[],disabled:!0,loading:!0,finished:!1,mode:"grid",page:1,size:10,isOver:!1}},created:function(){this.getList()},methods:{getList:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){var e,i,s,a;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return this.disabled=!0,this.loading=!0,t.next=4,this.$http.get("".concat(window.ROOT_URL,"api/discover/find_list"),{params:{size:this.size,page:this.page}});case 4:e=t.sent,i=e.data,s=i.data,a=i.status,"success"==a?(this.isOver=s.length<this.size,this.list=[].concat(Object(n["a"])(this.list),Object(n["a"])(s))):Object(c["a"])("获取数据失败!"),this.loading=!1,this.disabled=!1;case 11:case"end":return t.stop()}},t,this)}));function e(){return t.apply(this,arguments)}return e}(),goDetail:function(t){this.$router.push({path:"/conmmentlist/".concat(t)})},loadMore:function(){this.isOver||this.loading||(this.page=this.page+1,this.getList())}}},p=f,v=(i("9bb6"),i("2877")),m=Object(v["a"])(p,s,a,!1,null,"2b4fde64",null);m.options.__file="community.vue";e["a"]=m.exports},"9bb6":function(t,e,i){"use strict";var s=i("3592"),a=i.n(s);a.a},a0d7:function(t,e,i){"use strict";var s=i("ac1f"),a=i.n(s);a.a},ac1f:function(t,e,i){},b807:function(t,e,i){},bda7:function(t,e,i){"use strict";i("68ef"),i("b807")},c106:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("section",{staticClass:"secrch"},[i("form",{on:{submit:function(t){t.preventDefault()}}},[i("div",{staticClass:"secrch-warp"},[t.app||"integration"==t.routeName?t._e():i("div",{staticClass:"back",on:{click:t.onClickLeft}},[i("i",{staticClass:"iconfont icon-back"})]),i("div",{staticClass:"input-text"},[t.isSearch?[i("input",{directives:[{name:"model",rawName:"v-model",value:t.keyword,expression:"keyword"},{name:"focus",rawName:"v-focus"}],staticClass:"j-input-text",attrs:{type:"search",name:"keyword",autocomplete:"off",placeholder:t.placeholder},domProps:{value:t.keyword},on:{keypress:t.search,input:function(e){e.target.composing||(t.keyword=e.target.value)}}})]:[i("input",{staticClass:"j-input-text",attrs:{type:"search",name:"keyword",autocomplete:"off",placeholder:t.placeholder,readonly:"!isSearch"},on:{keypress:t.search,click:t.routeSearch}})],t._m(0)],2),t.isFilter?[i("div",{staticClass:"mode-switch",on:{click:t.viewSwitch}},["small"===t.myMode?[i("i",{staticClass:"iconfont icon-viewlist"})]:[i("i",{staticClass:"iconfont icon-pailie"})]],2)]:[t.isSearch?i("a",{staticClass:"btn-submit search-btn",attrs:{href:"javascript:void(0);"},on:{click:t.secrchBtn}},[t._v(t._s(t.$t("lang.search")))]):t._e()]],2)])])},a=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("label",{staticClass:"search-check"},[i("i",{staticClass:"iconfont icon-search"})])}],n=(i("ac6a"),i("7f7f"),{props:["mode","isFilter","placeholder","placeholderState","app"],data:function(){return{myMode:this.mode,keyword:"",arr:[]}},created:function(){},directives:{focus:{inserted:function(t){t.focus()}}},computed:{routeName:function(){return this.$route.name},isSearch:function(){return"search"==this.routeName||"integration"==this.routeName}},methods:{getGoodGroup:function(t){var e={},i=0,s=[];return t.forEach(function(t){var a=t.goods_id;e[a]?s[e[a]-1].price.push(t.price):(e[a]=++i,s.push({goods_id:a,price:[t.price]}))}),s},viewSwitch:function(){this.myMode="small"===this.myMode?"medium":"small",this.$emit("getViewSwitch",this.myMode)},search:function(t){13==t.keyCode&&(t.preventDefault(),this.keyword=t.target.value,this.secrchBtn())},secrchBtn:function(){if(this.keyword||1!=this.placeholderState){this.keyword&&this.arr.push(this.keyword);var t=JSON.parse(localStorage.getItem("LatelyKeyword"));t&&(this.arr=this.unique(this.arr.concat(t))),this.arr.length>0&&(localStorage.setItem("LatelyKeyword",JSON.stringify(this.arr)),this.$router.push({name:"searchList",query:{keywords:this.keyword}}))}else this.$router.push({name:"searchList",query:{keywords:this.placeholder}})},onClickLeft:function(){this.$router.go(-1)},routeSearch:function(){this.$router.push({name:"search"})},unique:function(t){for(var e=[],i={},s=0;s<t.length;s++)i[t[s]]||(i[t[s]]=!0,e.push(t[s]));return e},quickSort:function(t){if(t.length<=1)return t;for(var e=Math.floor(t.length/2),i=t.splice(e,1),s=[],a=[],n=0;n<t.length;n++)t[n]<i?s.push(t[n]):a.push(t[n]);return this.quickSort(s).concat(i,this.quickSort(a))}}}),o=n,r=i("2877"),c=Object(r["a"])(o,s,a,!1,null,null,null);c.options.__file="Search.vue";e["a"]=c.exports},da3c:function(t,e,i){"use strict";i("68ef"),i("f319")},de75:function(t,e,i){"use strict";var s=i("3e0b"),a=i.n(s);a.a},eb96:function(t,e,i){"use strict";i.r(e);var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"discover_content"},[i("van-tabs",{attrs:{color:"#000000",sticky:""},on:{change:t.onChange},model:{value:t.active,callback:function(e){t.active=e},expression:"active"}},[i("van-tab",{attrs:{title:t.$t("lang.community")}},[i("dsc-community")],1),i("van-tab",{attrs:{title:t.$t("lang.shop_street")}},[i("dsc-shop")],1),i("van-tab",{attrs:{title:t.$t("lang.video")}},[i("dsc-video-list")],1)],1),i("ec-tab-down")],1)},a=[],n=i("ade3"),o=(i("bda7"),i("5e46")),r=(i("7f7f"),i("da3c"),i("0b33")),c=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"dsc_nav_bar"},[i("div",{staticClass:"nav_title_box",style:t.nav_bars_style},[t._l(t.list,function(e,s){return i("div",{key:s,staticClass:"nav_item",class:t.navIndex==s?"active":"",on:{click:function(e){t.tapNav(s)}}},[i("span",[t._v(t._s(e))])])}),i("div",{staticClass:"navigation_bars",style:{left:t.nav_bars_left}})],2),i("div",{staticClass:"tabs_content"},t._l(t.list,function(e,s){return i("div",{key:s,staticClass:"tabs_item",style:{display:t.navIndex!=s?"none":""}},[t._t(s)],2)}))])},l=[],h=(i("d263"),i("c5f6"),{props:{list:{type:Array,required:!0},navIndex:{type:Number,default:0},fixed:{type:Boolean,default:!1},sticky:{type:Boolean,default:!1},bgc:{type:String,default:"#FFFFFF"}},data:function(){return{scrollTopObj:{},offsetTop:0,navBarFixed:!1}},computed:{nav_bars_left:function(){return(this.navIndex+.5)/this.list.length*100+"%"},nav_bars_style:function(){return{backgroundColor:this.bgc,position:this.navBarFixed||this.fixed?"fixed":"absolute",top:this.fixed?this.offsetTop:"0"}}},mounted:function(){if(this.offsetTop=document.querySelector(".dsc_nav_bar").offsetTop,this.sticky){var t=!1;try{Object.defineProperty({},"passive",{get:function(){t=!0}});window.addEventListener("scroll",this.handleScroll,!!t&&{passive:!0})}catch(t){window.addEventListener("scroll",this.handleScroll)}}},destroyed:function(){this.sticky&&window.removeEventListener("scroll",this.handleScroll)},methods:{tapNav:function(t){this.navIndex!=t&&this.$emit("change-index",t)},handleScroll:function(t){var e=window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop;e>this.offsetTop?this.navBarFixed=!0:this.navBarFixed=!1}}}),d=h,u=(i("a0d7"),i("2877")),f=Object(u["a"])(d,c,l,!1,null,"3ab412ae",null);f.options.__file="dsc-tabs.vue";f.exports;var p,v=i("6b6e"),m=i("8e30"),b=(i("037a"),i("f55e")),_=i("36ea"),y={data:function(){return{active:this.$route.query.type&&this.$route.query.type<4?this.$route.query.type:0}},components:(p={},Object(n["a"])(p,r["a"].name,r["a"]),Object(n["a"])(p,o["a"].name,o["a"]),Object(n["a"])(p,"dsc-community",m["a"]),Object(n["a"])(p,"ec-tab-down",v["a"]),Object(n["a"])(p,"dscShop",b["default"]),Object(n["a"])(p,"dscVideoList",_["default"]),p),methods:{onChange:function(t){this.$router.push({name:"integration",query:{type:t}})}}},g=y,w=(i("de75"),Object(u["a"])(g,s,a,!1,null,null,null));w.options.__file="Integration.vue";e["default"]=w.exports},f319:function(t,e,i){},f331:function(t,e,i){"use strict";e["a"]={data:function(){return{parent:null}},methods:{findParent:function(t){var e=this.$parent;while(e){if(e.$options.name===t){this.parent=e;break}e=e.$parent}}}}}}]);