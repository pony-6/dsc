(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-9e51"],{"228c":function(t,i,e){t.exports=e.p+"img/info-icon4.png"},2414:function(t,i,e){"use strict";e.r(i);var a,s=function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("div",{staticClass:"con drp-info"},[0==t.drpdata.error||1==t.drpdata.audit?[a("div",{staticClass:"warp"},[t.drpdata.expiry&&t.drpdata.expiry.expiry_status>0&&1==t.drpdata.expiry.card_expiry_status?a("div",{staticClass:"tip"},[t._v(t._s(t.drpdata.expiry.expiry_time_notice))]):t._e(),1!=t.drpdata.expiry.card_expiry_status?a("div",{staticClass:"tip"},[t._v(t._s(t.drpdata.expiry.card_status_notice))]):t._e(),a("div",{staticClass:"header"},[a("div",{staticClass:"header-top"},[a("div",{staticClass:"header-img"},[a("router-link",{attrs:{to:{name:"drp-set"}}},[t.drpdata.shop_info.user_picture?a("img",{staticClass:"img",attrs:{src:t.drpdata.shop_info.user_picture,alt:""}}):a("img",{staticClass:"img",attrs:{src:e("e31e"),alt:""}})])],1),a("div",{staticClass:"header-right"},[a("h4",[t._v(t._s(t.drpdata.shop_info.shop_name))]),1==t.drpdata.expiry.expiry_status?[a("span",{staticClass:"time"},[t._v(t._s(t.$t("lang.membership_of_validity"))+"："+t._s(t.$t("lang.have_expired")))])]:["forever"==t.drpdata.expiry.expiry_type?a("span",{staticClass:"time"},[t._v(t._s(t.$t("lang.membership_of_validity"))+"："+t._s(t.$t("lang.permanence")))]):"days"==t.drpdata.expiry.expiry_type?a("span",{staticClass:"time"},[t._v(t._s(t.$t("lang.membership_of_validity"))+"："+t._s(t.drpdata.expiry.expiry_time_format))]):"timespan"==t.drpdata.expiry.expiry_type?a("span",{staticClass:"time"},[t._v(t._s(t.$t("lang.membership_of_validity"))+"："+t._s(t.drpdata.expiry.expiry_time_format))]):t._e()],a("div",{staticClass:"hang"},[a("div",{staticClass:"vip"},[t._m(0),a("span",[t._v(t._s(t.drpdata.user_rank))])]),a("span",{staticClass:"user-more",on:{click:t.drpApplyHref}},[t._v(t._s(t.$t("lang.detail"))),a("i",{staticClass:"iconfont icon-more"})])])],2)]),a("div",{staticClass:"header-bottom bor"},[a("div",{staticClass:"drp-button"},[0!=t.drpdata.expiry.expiry_status&&1==t.drpdata.expiry.card_expiry_status?a("div",{staticClass:"item",on:{click:t.drpRenew}},[a("p",[t._v(t._s(t.$t("lang.renew")))])]):t._e(),0==t.drpdata.expiry.expiry_status||2==t.drpdata.expiry.expiry_status?a("div",{staticClass:"item",on:{click:t.drpChange}},[a("p",[t._v(t._s(t.$t("lang.change")))])]):t._e(),1==t.drpdata.expiry.expiry_status?a("div",{staticClass:"item",on:{click:t.applyAgain}},[a("p",[t._v(t._s(t.$t("lang.re_purchase")))])]):t._e()])])]),t.card&&t.protectionList.length>0?a("div",{staticClass:"section protection"},[a("div",{staticClass:"tit"},[a("div",[t._v(t._s(t.$t("lang.enjoy_equity")))]),a("span",{staticClass:"user-more",on:{click:function(i){t.protectionHref(0)}}},[t._v(t._s(t.$t("lang.more"))),a("i",{staticClass:"iconfont icon-more"})])]),a("div",{staticClass:"value"},t._l(t.protectionList,function(i,e){return a("div",{key:e,staticClass:"item-list",on:{click:function(i){t.protectionHref(e)}}},[a("div",{staticClass:"icon"},[a("div",{staticClass:"img-box"},[a("img",{staticClass:"img",attrs:{src:i.icon}})])]),a("div",{staticClass:"text"},[t._v(t._s(i.name))])])}))]):t._e(),a("div",{staticClass:"section section-money"},[a("div",{staticClass:"tit"},[a("div",[t._v(t._s(t.pageDrpInfo.my_asset?t.pageDrpInfo.my_asset:t.$t("lang.my_assets")))]),a("span",{staticClass:"user-more",on:{click:t.depositLog}},[t._v(t._s(t.$t("lang.deposit_log"))),a("i",{staticClass:"iconfont icon-more"})])]),a("div",{staticClass:"value"},[a("div",{staticClass:"item",on:{click:t.Withdraw}},[a("p",[t._v(t._s(t.drpdata.surplus_amount))]),a("span",[t._v(t._s(t.pageDrpInfo.shop_money?t.pageDrpInfo.shop_money:t.$t("lang.deposit_brokerage")))])]),a("div",{staticClass:"item"},[a("p",[t._v(t._s(t.drpdata.totals))]),a("span",[t._v(t._s(t.pageDrpInfo.total_drp_log_money?t.pageDrpInfo.total_drp_log_money:t.$t("lang.drp_totals")))])]),a("div",{staticClass:"item"},[a("p",[t._v(t._s(t.drpdata.today_total))]),a("span",[t._v(t._s(t.pageDrpInfo.today_drp_log_money?t.pageDrpInfo.today_drp_log_money:t.$t("lang.today_income")))])]),a("div",{staticClass:"item"},[a("p",[t._v(t._s(t.drpdata.total_amount))]),a("span",[t._v(t._s(t.pageDrpInfo.total_drp_order_amount?t.pageDrpInfo.total_drp_order_amount:t.$t("lang.drp_total_amount")))])])])]),a("div",{staticClass:"section section-money"},[a("div",{staticClass:"tit"},[a("div",[t._v(t._s(t.pageDrpInfo.order_card?t.pageDrpInfo.order_card:t.$t("lang.rec_card")))]),a("router-link",{staticClass:"user-more",attrs:{to:{name:"drp-order",query:{type:"card"}}}},[t._v(t._s(t.$t("lang.detailed"))),a("i",{staticClass:"iconfont icon-more"})])],1),a("div",{staticClass:"value"},[a("div",{staticClass:"item",on:{click:t.teamClick}},[a("p",[t._v(t._s(t.drpdata.team_count))]),a("span",[t._v(t._s(t.pageDrpInfo.order_card_total?t.pageDrpInfo.order_card_total:t.$t("lang.card_total_number")))])]),a("div",{staticClass:"item"},[a("p",[t._v(t._s(t.drpdata.card_total_amount))]),a("span",[t._v(t._s(t.pageDrpInfo.card_total_amount?t.pageDrpInfo.card_total_amount:t.$t("lang.drp_total_amount")))])]),a("div",{staticClass:"item"},[a("p",[t._v(t._s(t.drpdata.card_today_money))]),a("span",[t._v(t._s(t.pageDrpInfo.card_today_money?t.pageDrpInfo.card_today_money:t.$t("lang.today_rewards")))])]),a("div",{staticClass:"item"},[a("p",[t._v(t._s(t.drpdata.card_total_money))]),a("span",[t._v(t._s(t.pageDrpInfo.card_total_money?t.pageDrpInfo.card_total_money:t.$t("lang.cumulative_rewards")))])])]),a("div",{staticClass:"invite_friends_button",on:{click:function(i){t.inviteFriends()}}},[t._v(t._s(t.pageDrpInfo.drp_card?t.pageDrpInfo.drp_card:t.$t("lang.team_rule_tit_3"))),a("i",{staticClass:"iconfont icon-more"})])]),a("div",{staticClass:"section section-money"},[a("div",{staticClass:"tit"},[a("div",[t._v(t._s(t.$t("lang.help_center")))]),a("router-link",{staticClass:"user-more",attrs:{to:{name:"help",query:{type:"drphelp"}}}},[t._v(t._s(t.$t("lang.more"))),a("i",{staticClass:"iconfont icon-more"})])],1),a("ul",{staticClass:"list-ul"},t._l(t.drpdata.article_list,function(i,e){return a("li",{key:e},[a("router-link",{attrs:{to:{name:"articleDetail",params:{id:i.id}}}},[t._v(t._s(i.title))])],1)}))])]),a("div",{staticClass:"drp-info-team"},[a("div",{staticClass:"tit"},[a("i",{staticClass:"row"}),a("span",[t._v(t._s(t.pageDrpInfo.drp_team?t.pageDrpInfo.drp_team:t.$t("lang.my_team_alt")))])]),a("div",{staticClass:"items"},[a("div",{staticClass:"item item1",on:{click:t.teamClick}},[a("div",{staticClass:"num"},[t._v(t._s(t.drpdata.sum_count))]),a("div",{staticClass:"link"}),a("div",{staticClass:"text"},[t._v(t._s(t.pageDrpInfo.sum_count?t.pageDrpInfo.sum_count:t.$t("lang.user_total")))])]),a("div",{staticClass:"item item2"},[a("div",{staticClass:"num"},[t._v(t._s(t.drpdata.team_count))]),a("div",{staticClass:"link"}),a("div",{staticClass:"text"},[t._v(t._s(t.pageDrpInfo.team_count?t.pageDrpInfo.team_count:t.$t("lang.directly_user")))])]),a("div",{staticClass:"item item3"},[a("div",{staticClass:"num"},[t._v(t._s(t.drpdata.user_count))]),a("div",{staticClass:"link"}),a("div",{staticClass:"text"},[t._v(t._s(t.pageDrpInfo.user_count?t.pageDrpInfo.user_count:t.$t("lang.direct_referrals")))])])])]),a("div",{staticClass:"nav-items"},[a("router-link",{staticClass:"nav-item",attrs:{to:{name:"drp-order",query:{type:"card"}}}},[a("i",[a("img",{staticClass:"img",attrs:{src:e("d003")}})]),a("span",[t._v(t._s(t.pageDrpInfo.order_card_list?t.pageDrpInfo.order_card_list:t.$t("lang.card_reward")))])]),a("router-link",{staticClass:"nav-item",attrs:{to:{name:"drp-order",query:{type:"order"}}}},[a("i",[a("img",{staticClass:"img",attrs:{src:e("3f7c")}})]),a("span",[t._v(t._s(t.pageDrpInfo.order_list?t.pageDrpInfo.order_list:t.$t("lang.sale_reward")))])]),a("router-link",{staticClass:"nav-item",attrs:{to:{name:"drp-rank"}}},[a("i",[a("img",{staticClass:"img",attrs:{src:e("b57f")}})]),a("span",[t._v(t._s(t.pageDrpInfo.drp_rank?t.pageDrpInfo.drp_rank:t.$t("lang.rich_list")))])]),a("div",{staticClass:"nav-item",on:{click:t.drpshopLink}},[t._m(1),a("span",[t._v(t._s(t.pageDrpInfo.drp_store?t.pageDrpInfo.drp_store:t.$t("lang.my_drp")))])])],1),t.drpdata.banner&&t.drpdata.banner.length>0?a("div",{staticClass:"adv"},[t.drpdata.banner?a("Swiper",{attrs:{data:t.drpdata.banner,autoplay:3e3}}):t._e()],1):t._e()]:[a("div",{staticClass:"ectouch-notcont"},[t._m(2),1==t.viewStatus?[0==t.viewAudit?[a("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.drp_status_propmt_1")))])]:t._e(),2==t.viewAudit?[a("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.drp_status_propmt_7")))])]:t._e()]:t._e(),2==t.viewStatus?[a("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.drp_status_propmt_3"))),a("router-link",{staticClass:"color-red",attrs:{to:{name:"drp-register"}}},[t._v(t._s(t.$t("lang.to_apply")))])],1)]:t._e()],2)],a("ec-tab-down"),a("van-popup",{staticClass:"show-popup-bottom",attrs:{position:"bottom"},model:{value:t.renewShow,callback:function(i){t.renewShow=i},expression:"renewShow"}},[a("div",{staticClass:"goods-show-title padding-all"},[a("h3",{staticClass:"fl"},[t._v(t._s(t.$t("lang.fill_in_renew")))]),a("i",{staticClass:"iconfont icon-close fr",on:{click:t.renewClose}})]),a("div",{staticClass:"s-g-list-con"},[a("div",{staticClass:"select-two"},[a("ul",t._l(t.card.receive_value,function(i,e){return a("li",{key:e,staticClass:"ect-select",class:{active:t.renew_type==i.type},on:{click:function(e){t.renew_method_select(i.type)}}},[a("label",{staticClass:"dis-box"},["integral"==i.type?a("span",{staticClass:"box-flex"},[t._v(t._s(t.$t("lang.drp_apply_title_1")))]):t._e(),"order"==i.type?a("span",{staticClass:"box-flex"},[t._v(t._s(t.$t("lang.drp_apply_title_2")))]):t._e(),"buy"==i.type?a("span",{staticClass:"box-flex"},[t._v(t._s(t.$t("lang.drp_apply_title_3")))]):t._e(),"goods"==i.type?a("span",{staticClass:"box-flex"},[t._v(t._s(t.$t("lang.drp_apply_title_4")))]):t._e(),"free"==i.type?a("span",{staticClass:"box-flex"},[t._v(t._s(t.$t("lang.drp_apply_title_5")))]):t._e(),a("i",{staticClass:"iconfont icon-gou"})])])}))])])]),a("DscLoading",{attrs:{dscLoading:t.dscLoading}})],2)},n=[function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("i",[a("img",{staticClass:"img",attrs:{src:e("60c6")}})])},function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("i",[a("img",{staticClass:"img",attrs:{src:e("228c")}})])},function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("div",{staticClass:"img"},[a("img",{staticClass:"img",attrs:{src:e("b8c9")}})])}],r=(e("8e6e"),e("ac6a"),e("456d"),e("a481"),e("96cf"),e("1da1")),o=e("ade3"),c=(e("8a58"),e("e41f")),u=(e("e7e5"),e("d399")),p=(e("7f7f"),e("66b9"),e("b650")),d=e("2f62"),l=e("8419"),h=e("d567"),_=e("6b6e"),f=e("42d1");function m(t,i){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);i&&(a=a.filter(function(i){return Object.getOwnPropertyDescriptor(t,i).enumerable})),e.push.apply(e,a)}return e}function v(t){for(var i=1;i<arguments.length;i++){var e=null!=arguments[i]?arguments[i]:{};i%2?m(Object(e),!0).forEach(function(i){Object(o["a"])(t,i,e[i])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(e)):m(Object(e)).forEach(function(i){Object.defineProperty(t,i,Object.getOwnPropertyDescriptor(e,i))})}return t}var g={components:(a={Swiper:l["a"],CommonNav:h["a"],EcTabDown:_["a"],DscLoading:f["a"]},Object(o["a"])(a,p["a"].name,p["a"]),Object(o["a"])(a,u["a"].name,u["a"]),Object(o["a"])(a,c["a"].name,c["a"]),a),data:function(){return{viewStatus:0,routerName:"drp",routerPath:"",dscLoading:!0,renewShow:!1,renew_type:"",back:this.$route.query.back,pageDrpInfo:{}}},created:function(){var t=Object(r["a"])(regeneratorRuntime.mark(function t(){return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.getCustomText();case 2:this.$store.dispatch("setDrp");case 3:case"end":return t.stop()}},t,this)}));function i(){return t.apply(this,arguments)}return i}(),computed:v(v({},Object(d["c"])({drpdata:function(t){return t.drp.drpData}})),{},{card:function(){return this.drpdata.membership_card_info?this.drpdata.membership_card_info:""},protectionList:function(){return this.card?this.card.user_membership_card_rights_list:""}}),mounted:function(){window.history&&window.history.pushState&&this.back&&(history.pushState(null,null,document.URL),window.addEventListener("popstate",this.goBack,!1))},methods:{goBack:function(){this.$router.replace({path:this.back})},teamClick:function(){var t=this;t.$router.push({name:"drp-team",params:{user_id:t.drpdata.shop_info.user_id}})},drpshopLink:function(){3!=this.viewStatus?this.$router.push({name:"drp"}):Object(u["a"])(this.$t("lang.drp_status_propmt_8"))},inviteFriends:function(){this.$router.push({name:"drp-card"})},Withdraw:function(){var t=this;t.$router.push({name:"drp-withdraw"})},protectionHref:function(t){this.$router.push({name:"drp-protection",query:{card_id:this.card.id,index:t}})},drpApplyHref:function(){this.$router.push({name:"drp-apply",query:{card_id:this.card.id}})},drpRenew:function(){this.renewShow=!0},drpChange:function(){this.$router.push({name:"drp-register",query:{apply_status:"change",membership_card_id:this.card.id}})},applyAgain:function(){this.$router.push({name:"drp-register",query:{apply_status:"repeat",membership_card_id:this.card.id}})},renewClose:function(){this.renewShow=!1},renew_method_select:function(t){var i={};this.renew_type=t,i=this.card.id?{receive_type:t,apply_status:"renew",membership_card_id:this.card.id}:{receive_type:t,apply_status:"renew"},this.$router.push({name:"drp-apply",query:i})},depositLog:function(){this.$router.push({name:"drp-withdraw-log"})},getCustomText:function(){var t=Object(r["a"])(regeneratorRuntime.mark(function t(){var i,e,a,s;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.$http.post("".concat(window.ROOT_URL,"api/drp/custom_text"),{code:"page_drp_info"});case 2:i=t.sent,e=i.data,a=e.status,s=e.data.page_drp_info,"success"==a&&(this.pageDrpInfo=s||{});case 7:case"end":return t.stop()}},t,this)}));function i(){return t.apply(this,arguments)}return i}()},watch:{drpdata:function(){var t=this;setTimeout(function(){t.dscLoading=!1},1e3),this.viewStatus=this.drpdata.error,this.viewAudit=this.drpdata.audit,2==this.viewStatus&&this.$router.replace({name:"drp-register",query:{back:this.routerPath}})}},beforeRouteEnter:function(t,i,e){e(function(t){t.routerPath=i.fullPath})}},y=g,C=(e("918a"),e("2877")),w=Object(C["a"])(y,s,n,!1,null,"4f8c9d52",null);w.options.__file="Drpinfo.vue";i["default"]=w.exports},2662:function(t,i,e){},"2bb1":function(t,i,e){"use strict";var a=e("fe7e");i["a"]=Object(a["a"])({render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{class:t.b(),style:t.style},[t._t("default")],2)},name:"swipe-item",data:function(){return{offset:0}},computed:{style:function(){var t=this.$parent,i=t.vertical,e=t.computedWidth,a=t.computedHeight;return{width:e+"px",height:i?a+"px":"100%",transform:"translate"+(i?"Y":"X")+"("+this.offset+"px)"}}},beforeCreate:function(){this.$parent.swipes.push(this)},destroyed:function(){this.$parent.swipes.splice(this.$parent.swipes.indexOf(this),1)}})},"3f7c":function(t,i,e){t.exports=e.p+"img/info-icon2.png"},"42d1":function(t,i,e){"use strict";var a=function(){var t=this,i=t.$createElement,e=t._self._c||i;return t.dscLoading?e("div",{staticClass:"cloading",style:{height:t.clientHeight+"px"},on:{touchmove:function(t){t.preventDefault()},mousewheel:function(t){t.preventDefault()}}},[e("div",{staticClass:"cloading-mask"}),t._t("text",[t._m(0)])],2):t._e()},s=[function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("div",{staticClass:"cloading-main"},[a("img",{attrs:{src:e("f8b2")}})])}],n=e("ade3"),r=(e("7f7f"),e("ac1e"),e("543e")),o={props:["dscLoading"],data:function(){return{clientHeight:""}},components:Object(n["a"])({},r["a"].name,r["a"]),created:function(){},mounted:function(){this.clientHeight=document.documentElement.clientHeight},methods:{}},c=o,u=(e("a637"),e("2877")),p=Object(u["a"])(c,a,s,!1,null,"9a0469b6",null);p.options.__file="DscLoading.vue";i["a"]=p.exports},"4b0a":function(t,i,e){"use strict";e("68ef"),e("786d")},5596:function(t,i,e){"use strict";var a=e("fe7e"),s=e("3875"),n=e("db78");i["a"]=Object(a["a"])({render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{class:t.b()},[e("div",{class:t.b("track"),style:t.trackStyle,on:{touchstart:t.onTouchStart,touchmove:t.onTouchMove,touchend:t.onTouchEnd,touchcancel:t.onTouchEnd,transitionend:function(i){t.$emit("change",t.activeIndicator)}}},[t._t("default")],2),t._t("indicator",[t.showIndicators&&t.count>1?e("div",{class:t.b("indicators",{vertical:t.vertical})},t._l(t.count,function(i){return e("i",{class:t.b("indicator",{active:i-1===t.activeIndicator})})})):t._e()])],2)},name:"swipe",mixins:[s["a"]],props:{width:Number,height:Number,autoplay:Number,vertical:Boolean,loop:{type:Boolean,default:!0},touchable:{type:Boolean,default:!0},initialSwipe:{type:Number,default:0},showIndicators:{type:Boolean,default:!0},duration:{type:Number,default:500}},data:function(){return{computedWidth:0,computedHeight:0,offset:0,active:0,deltaX:0,deltaY:0,swipes:[],swiping:!1}},mounted:function(){this.initialize(),this.$isServer||Object(n["b"])(window,"resize",this.onResize,!0)},destroyed:function(){this.clear(),this.$isServer||Object(n["a"])(window,"resize",this.onResize,!0)},watch:{swipes:function(){this.initialize()},initialSwipe:function(){this.initialize()},autoplay:function(t){t?this.autoPlay():this.clear()}},computed:{count:function(){return this.swipes.length},delta:function(){return this.vertical?this.deltaY:this.deltaX},size:function(){return this[this.vertical?"computedHeight":"computedWidth"]},trackSize:function(){return this.count*this.size},activeIndicator:function(){return(this.active+this.count)%this.count},isCorrectDirection:function(){var t=this.vertical?"vertical":"horizontal";return this.direction===t},trackStyle:function(){var t,i=this.vertical?"height":"width",e=this.vertical?"width":"height";return t={},t[i]=this.trackSize+"px",t[e]=this[e]?this[e]+"px":"",t.transitionDuration=(this.swiping?0:this.duration)+"ms",t.transform="translate"+(this.vertical?"Y":"X")+"("+this.offset+"px)",t}},methods:{initialize:function(t){if(void 0===t&&(t=this.initialSwipe),clearTimeout(this.timer),this.$el){var i=this.$el.getBoundingClientRect();this.computedWidth=this.width||i.width,this.computedHeight=this.height||i.height}this.swiping=!0,this.active=t,this.offset=this.count>1?-this.size*this.active:0,this.swipes.forEach(function(t){t.offset=0}),this.autoPlay()},onResize:function(){this.initialize(this.activeIndicator)},onTouchStart:function(t){this.touchable&&(this.clear(),this.swiping=!0,this.touchStart(t),this.correctPosition())},onTouchMove:function(t){this.touchable&&this.swiping&&(this.touchMove(t),this.isCorrectDirection&&(t.preventDefault(),t.stopPropagation(),this.move(0,Math.min(Math.max(this.delta,-this.size),this.size))))},onTouchEnd:function(){if(this.touchable&&this.swiping){if(this.delta&&this.isCorrectDirection){var t=this.vertical?this.offsetY:this.offsetX;this.move(t>0?this.delta>0?-1:1:0)}this.swiping=!1,this.autoPlay()}},move:function(t,i){void 0===t&&(t=0),void 0===i&&(i=0);var e=this.delta,a=this.active,s=this.count,n=this.swipes,r=this.trackSize,o=0===a,c=a===s-1,u=!this.loop&&(o&&(i>0||t<0)||c&&(i<0||t>0));u||s<=1||(n[0].offset=c&&(e<0||t>0)?r:0,n[s-1].offset=o&&(e>0||t<0)?-r:0,t&&a+t>=-1&&a+t<=s&&(this.active+=t),this.offset=i-this.active*this.size)},swipeTo:function(t){var i=this;this.swiping=!0,this.correctPosition(),setTimeout(function(){i.swiping=!1,i.move(t%i.count-i.active)},30)},correctPosition:function(){this.active<=-1&&this.move(this.count),this.active>=this.count&&this.move(-this.count)},clear:function(){clearTimeout(this.timer)},autoPlay:function(){var t=this,i=this.autoplay;i&&this.count>1&&(this.clear(),this.timer=setTimeout(function(){t.swiping=!0,t.resetTouchStatus(),t.correctPosition(),setTimeout(function(){t.swiping=!1,t.move(1),t.autoPlay()},30)},i))}}})},"60c6":function(t,i,e){t.exports=e.p+"img/icon-vip.png"},"66b9":function(t,i,e){"use strict";e("68ef")},"6fd6":function(t,i,e){},7844:function(t,i,e){"use strict";e("68ef"),e("8270")},"786d":function(t,i,e){},8270:function(t,i,e){},8419:function(t,i,e){"use strict";var a,s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("van-swipe",{staticClass:"swipe",attrs:{autoplay:t.autoplay}},t._l(t.data,function(t,i){return e("van-swipe-item",{key:i},[e("a",{attrs:{href:t.link}},[e("img",{staticClass:"img",attrs:{src:t.pic}})])])}))},n=[],r=e("ade3"),o=(e("4b0a"),e("2bb1")),c=(e("7f7f"),e("7844"),e("5596")),u={props:["data","swipeUrl","autoplay"],components:(a={},Object(r["a"])(a,c["a"].name,c["a"]),Object(r["a"])(a,o["a"].name,o["a"]),a),data:function(){return{}},computed:{}},p=u,d=e("2877"),l=Object(d["a"])(p,s,n,!1,null,null,null);l.options.__file="Swiper.vue";i["a"]=l.exports},"8a58":function(t,i,e){"use strict";e("68ef"),e("4d75")},"918a":function(t,i,e){"use strict";var a=e("cdac"),s=e.n(a);s.a},a637:function(t,i,e){"use strict";var a=e("2662"),s=e.n(a);s.a},ac1e:function(t,i,e){"use strict";e("68ef")},b57f:function(t,i,e){t.exports=e.p+"img/info-icon3.png"},b8c9:function(t,i){t.exports="data:image/png;base64,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"},c1ee:function(t,i,e){"use strict";var a=e("6fd6"),s=e.n(a);s.a},cdac:function(t,i,e){},d003:function(t,i,e){t.exports=e.p+"img/info-icon1.png"},d567:function(t,i,e){"use strict";var a=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"sus-nav"},[e("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[e("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[e("ul",[e("li",{on:{click:function(i){t.routerLink("home")}}},[e("i",{staticClass:"iconfont icon-zhuye"}),e("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?e("li",{on:{click:function(i){t.routerLink("search")}}},[e("i",{staticClass:"iconfont icon-search"}),e("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),e("li",{on:{click:function(i){t.routerLink("catalog")}}},[e("i",{staticClass:"iconfont icon-menu"}),e("p",[t._v(t._s(t.$t("lang.category")))])]),e("li",{on:{click:function(i){t.routerLink("cart")}}},[e("i",{staticClass:"iconfont icon-cart"}),e("p",[t._v(t._s(t.$t("lang.cart")))])]),e("li",{on:{click:function(i){t.routerLink("user")}}},[e("i",{staticClass:"iconfont icon-gerenzhongxin"}),e("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?e("li",{on:{click:function(i){t.routerLink("team")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?e("li",{on:{click:function(i){t.routerLink("supplier")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),e("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),e("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(i){return i.stopPropagation(),t.handelShow(i)}}})])},s=[],n=(e("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,i,e,a;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,i=document.documentElement.clientHeight,e=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(a=i-e-this.yPum>0?i-e-this.yPum:0):(e+=rightDiv.clientHeight,this.yPum-e>0&&(a=i-this.yPum>0?i-this.yPum:0)),moveDiv.style.bottom=a+"px")},end:function(){this.flags=!1},routerLink:function(t){var i=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(e){e.plus||e.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?i.$router.push({name:"search"}):i.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):i.$router.push({name:t})}}}),r=n,o=(e("c1ee"),e("2877")),c=Object(o["a"])(r,a,s,!1,null,null,null);c.options.__file="CommonNav.vue";i["a"]=c.exports},e31e:function(t,i,e){t.exports=e.p+"img/user_default.png"},e41f:function(t,i,e){"use strict";var a=e("fe7e"),s=e("6605");i["a"]=Object(a["a"])({render:function(){var t,i=this,e=i.$createElement,a=i._self._c||e;return a("transition",{attrs:{name:i.currentTransition}},[i.shouldRender?a("div",{directives:[{name:"show",rawName:"v-show",value:i.value,expression:"value"}],class:i.b((t={},t[i.position]=i.position,t))},[i._t("default")],2):i._e()])},name:"popup",mixins:[s["a"]],props:{transition:String,overlay:{type:Boolean,default:!0},closeOnClickOverlay:{type:Boolean,default:!0},position:{type:String,default:""}},computed:{currentTransition:function(){return this.transition||(""===this.position?"van-fade":"popup-slide-"+this.position)}}})},f8b2:function(t,i,e){t.exports=e.p+"img/loading.gif"}}]);