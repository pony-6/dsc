(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-5fa1"],{"0653":function(t,e,n){"use strict";n("68ef")},1146:function(t,e,n){},3846:function(t,e,n){n("9e1e")&&"g"!=/./g.flags&&n("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:n("0bfb")})},"565f":function(t,e,n){"use strict";var i=n("c31d"),a=n("fe7e"),s=n("a142");e["a"]=Object(a["a"])({render:function(){var t,e=this,n=e.$createElement,i=e._self._c||n;return i("cell",{class:e.b((t={error:e.error,disabled:e.$attrs.disabled,"min-height":"textarea"===e.type&&!e.autosize},t["label-"+e.labelAlign]=e.labelAlign,t)),attrs:{icon:e.leftIcon,title:e.label,center:e.center,border:e.border,"is-link":e.isLink,required:e.required}},[e._t("left-icon",null,{slot:"icon"}),e._t("label",null,{slot:"title"}),i("div",{class:e.b("body")},["textarea"===e.type?i("textarea",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{readonly:e.readonly},domProps:{value:e.value}},"textarea",e.$attrs,!1),e.listeners)):i("input",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{type:e.type,readonly:e.readonly},domProps:{value:e.value}},"input",e.$attrs,!1),e.listeners)),e.showClear?i("icon",{class:e.b("clear"),attrs:{name:"clear"},on:{touchstart:function(t){return t.preventDefault(),e.onClear(t)}}}):e._e(),e.$slots.icon||e.icon?i("div",{class:e.b("icon"),on:{click:e.onClickIcon}},[e._t("icon",[i("icon",{attrs:{name:e.icon}})])],2):e._e(),e.$slots.button?i("div",{class:e.b("button")},[e._t("button")],2):e._e()],1),e.errorMessage?i("div",{class:e.b("error-message"),domProps:{textContent:e._s(e.errorMessage)}}):e._e()],2)},name:"field",inheritAttrs:!1,props:{value:[String,Number],icon:String,label:String,error:Boolean,center:Boolean,isLink:Boolean,leftIcon:String,readonly:Boolean,required:Boolean,clearable:Boolean,labelAlign:String,inputAlign:String,onIconClick:Function,autosize:[Boolean,Object],errorMessage:String,type:{type:String,default:"text"},border:{type:Boolean,default:!0}},data:function(){return{focused:!1}},watch:{value:function(){this.$nextTick(this.adjustSize)}},mounted:function(){this.format(),this.$nextTick(this.adjustSize)},computed:{showClear:function(){return this.clearable&&this.focused&&""!==this.value&&this.isDef(this.value)&&!this.readonly},listeners:function(){return Object(i["a"])({},this.$listeners,{input:this.onInput,keypress:this.onKeypress,focus:this.onFocus,blur:this.onBlur})}},methods:{focus:function(){this.$refs.input&&this.$refs.input.focus()},blur:function(){this.$refs.input&&this.$refs.input.blur()},format:function(t){void 0===t&&(t=this.$refs.input);var e=t,n=e.value,i=this.$attrs.maxlength;return this.isDef(i)&&n.length>i&&(n=n.slice(0,i),t.value=n),n},onInput:function(t){this.$emit("input",this.format(t.target))},onFocus:function(t){this.focused=!0,this.$emit("focus",t),this.readonly&&this.blur()},onBlur:function(t){this.focused=!1,this.$emit("blur",t)},onClickIcon:function(){this.$emit("click-icon"),this.onIconClick&&this.onIconClick()},onClear:function(){this.$emit("input",""),this.$emit("clear")},onKeypress:function(t){if("number"===this.type){var e=t.keyCode,n=-1===String(this.value).indexOf("."),i=e>=48&&e<=57||46===e&&n||45===e;i||t.preventDefault()}"search"===this.type&&13===t.keyCode&&this.blur(),this.$emit("keypress",t)},adjustSize:function(){var t=this.$refs.input;if("textarea"===this.type&&this.autosize&&t){t.style.height="auto";var e=t.scrollHeight;if(Object(s["d"])(this.autosize)){var n=this.autosize,i=n.maxHeight,a=n.minHeight;i&&(e=Math.min(e,i)),a&&(e=Math.max(e,a))}e&&(t.style.height=e+"px")}}}})},"615c":function(t,e,n){"use strict";n.r(e);var i,a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"user-recharge"},[n("van-field",{attrs:{type:"digit",label:t.$t("lang.recharge_money"),placeholder:t.$t("lang.enter_recharge_money")},model:{value:t.amount,callback:function(e){t.amount=e},expression:"amount"}}),n("div",{staticClass:"field-tips"},[t._v(t._s(t.$t("lang.lowest_recharge_money"))+"："),t.buyer_recharge>0?n("em",{staticClass:"color-red"},[t._v("￥"+t._s(t.buyer_recharge))]):0==t.buyer_recharge?n("em",{staticClass:"color-red"},[t._v(t._s(t.$t("lang.unlimited")))]):t._e()]),n("van-field",{attrs:{label:t.$t("lang.remarks"),type:"textarea",placeholder:t.$t("lang.select_fill")},model:{value:t.user_note,callback:function(e){t.user_note=e},expression:"user_note"}}),n("van-cell-group",{staticClass:"m-top10"},[n("van-cell",{attrs:{title:t.$t("lang.recharge_type"),value:t.pay_name,"is-link":""},on:{click:t.modeHandle}})],1),n("div",{staticClass:"padding-all"},[t.submit_btn?[n("div",{domProps:{innerHTML:t._s(t.submit_btn)}})]:[n("button",{staticClass:"btn btn-submit border-radius-top05",on:{click:t.submitBtn}},[t._v(t._s(t.$t("lang.submit_apply")))])]],2),n("van-popup",{staticClass:"show-popup-bottom",attrs:{position:"bottom"},model:{value:t.show,callback:function(e){t.show=e},expression:"show"}},[n("div",{staticClass:"goods-show-title padding-all"},[n("h3",{staticClass:"fl"},[t._v(t._s(t.$t("lang.recharge_type")))]),n("i",{staticClass:"iconfont icon-close fr",on:{click:t.close}})]),n("div",{staticClass:"s-g-list-con"},[n("div",{staticClass:"select-two"},[n("ul",t._l(t.payment_method,function(e,i){return n("li",{key:i,staticClass:"ect-select",class:{active:t.pay_id==e.pay_id},on:{click:function(n){t.payment_method_select(e.pay_id,e.pay_name)}}},[n("label",{staticClass:"dis-box"},[n("span",{staticClass:"box-flex"},[t._v(t._s(e.pay_name))]),n("i",{staticClass:"iconfont icon-gou"})])])}))])])]),n("CommonNav")],1)},s=[],o=(n("c5f6"),n("88d8")),r=(n("e7e5"),n("d399")),c=(n("8a58"),n("e41f")),l=(n("0653"),n("34e9")),u=(n("c194"),n("7744")),h=(n("7f7f"),n("be7f"),n("565f")),p=n("4328"),d=n.n(p),f=n("d567"),m={data:function(){return{show:!1,amount:"",user_note:"",payment_method:[],pay_name:"",pay_id:0,buyer_recharge:0,submit_btn:""}},components:(i={},Object(o["a"])(i,h["a"].name,h["a"]),Object(o["a"])(i,u["a"].name,u["a"]),Object(o["a"])(i,l["a"].name,l["a"]),Object(o["a"])(i,c["a"].name,c["a"]),Object(o["a"])(i,r["a"].name,r["a"]),Object(o["a"])(i,"CommonNav",f["a"]),i),created:function(){this.depositInfo(),this.shopConfig()},methods:{depositInfo:function(){var t=this;this.$http.get("".concat(window.ROOT_URL,"api/account/deposit")).then(function(e){"success"==e.data.status&&(t.payment_method=e.data.data.payment)})},modeHandle:function(){this.show=!0},payment_method_select:function(t,e){this.pay_id=t,this.pay_name=e,this.show=!1},close:function(){this.show=!1},shopConfig:function(){var t=this;this.$http.get("".concat(window.ROOT_URL,"api/shop/config")).then(function(e){var n=e.data.data;t.buyer_recharge=n.buyer_recharge})},submitBtn:function(){var t=this,e={amount:this.amount,user_note:this.user_note,payment_id:this.pay_id,surplus_type:0};if(this.amount>2e4)return Object(r["a"])("最大充值金额20000"),!1;Number(this.amount)>=Number(this.buyer_recharge)?this.$http.post("".concat(window.ROOT_URL,"api/account/account"),d.a.stringify(e)).then(function(e){var n=e.data.data;0==n.code?"wxpay"==n.pay_button.paycode?"wxh5"==n.pay_button.type?window.location.href=n.pay_button.mweb_url:t.callpay(n.pay_button):t.submit_btn=n.pay_button:Object(r["a"])(n.msg)}):Object(r["a"])(this.$t("lang.recharge_money_prompt"))},jsApiCall:function(t){var e=JSON.parse(t.payment),n=t.success_url;t.cancel_url;WeixinJSBridge.invoke("getBrandWCPayRequest",e,function(t){"get_brand_wcpay_request:ok"==t.err_msg?window.location.href=n:"get_brand_wcpay_request:fail"==t.err_msg&&Object(r["a"])(this.$t("lang.payment_fail"))})},callpay:function(t){"undefined"==typeof WeixinJSBridge?document.addEventListener?document.addEventListener("WeixinJSBridgeReady",this.jsApiCall(t),!1):document.attachEvent&&(document.attachEvent("WeixinJSBridgeReady",this.jsApiCall(t)),document.attachEvent("onWeixinJSBridgeReady",this.jsApiCall(t))):this.jsApiCall(t)}}},v=m,_=n("2877"),g=Object(_["a"])(v,a,s,!1,null,null,null);g.options.__file="Deposit.vue";e["default"]=g.exports},"8a58":function(t,e,n){"use strict";n("68ef"),n("4d75")},9718:function(t,e,n){},be7f:function(t,e,n){"use strict";n("68ef"),n("1146")},c194:function(t,e,n){"use strict";n("68ef")},c1ee:function(t,e,n){"use strict";var i=n("9718"),a=n.n(i);a.a},d567:function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"sus-nav"},[n("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[n("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[n("ul",[n("li",{on:{click:function(e){t.routerLink("home")}}},[n("i",{staticClass:"iconfont icon-zhuye"}),n("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?n("li",{on:{click:function(e){t.routerLink("search")}}},[n("i",{staticClass:"iconfont icon-search"}),n("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),n("li",{on:{click:function(e){t.routerLink("catalog")}}},[n("i",{staticClass:"iconfont icon-menu"}),n("p",[t._v(t._s(t.$t("lang.category")))])]),n("li",{on:{click:function(e){t.routerLink("cart")}}},[n("i",{staticClass:"iconfont icon-cart"}),n("p",[t._v(t._s(t.$t("lang.cart")))])]),n("li",{on:{click:function(e){t.routerLink("user")}}},[n("i",{staticClass:"iconfont icon-gerenzhongxin"}),n("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?n("li",{on:{click:function(e){t.routerLink("team")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?n("li",{on:{click:function(e){t.routerLink("supplier")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),n("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),n("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},a=[],s=(n("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,n,i;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,n=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(i=e-n-this.yPum>0?e-n-this.yPum:0):(n+=rightDiv.clientHeight,this.yPum-n>0&&(i=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=i+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(n){n.plus||n.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=s,r=(n("c1ee"),n("2877")),c=Object(r["a"])(o,i,a,!1,null,null,null);c.options.__file="CommonNav.vue";e["a"]=c.exports},e41f:function(t,e,n){"use strict";var i=n("fe7e"),a=n("6605");e["a"]=Object(i["a"])({render:function(){var t,e=this,n=e.$createElement,i=e._self._c||n;return i("transition",{attrs:{name:e.currentTransition}},[e.shouldRender?i("div",{directives:[{name:"show",rawName:"v-show",value:e.value,expression:"value"}],class:e.b((t={},t[e.position]=e.position,t))},[e._t("default")],2):e._e()])},name:"popup",mixins:[a["a"]],props:{transition:String,overlay:{type:Boolean,default:!0},closeOnClickOverlay:{type:Boolean,default:!0},position:{type:String,default:""}},computed:{currentTransition:function(){return this.transition||(""===this.position?"van-fade":"popup-slide-"+this.position)}}})}}]);