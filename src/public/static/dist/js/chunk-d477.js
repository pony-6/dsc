(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-d477"],{1146:function(t,e,n){},3846:function(t,e,n){n("9e1e")&&"g"!=/./g.flags&&n("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:n("0bfb")})},"402a":function(t,e,n){"use strict";n.r(e);var i,s=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",[n("div",{staticClass:"drp-register"},[n("div",{staticClass:"input-list"},[n("van-field",{staticClass:"f-04",attrs:{clearable:"",placeholder:t.$t("lang.value_card_sn")},model:{value:t.vc_num,callback:function(e){t.vc_num=e},expression:"vc_num"}}),n("van-field",{staticClass:"f-04",attrs:{type:t.isShowPwd?"text":"password",placeholder:t.$t("lang.value_card_pwd")},model:{value:t.vc_password,callback:function(e){t.vc_password=e},expression:"vc_password"}},[n("div",{staticClass:"right_icon",attrs:{slot:"button"},on:{click:t.clickRightIcon},slot:"button"},[n("i",{class:["iconfont","icon-liulan1",t.isShowPwd?"color_red":""]})])])],1),n("div",{staticClass:"padding-all"},[n("van-button",{staticClass:"br-5 f-06",attrs:{type:"primary","bottom-action":""},on:{click:t.btnSubmit}},[""==t.deposit?[t._v(t._s(t.$t("lang.bind_cur_account")))]:[t._v(t._s(t.$t("lang.recharge_value_card")))]],2)],1)]),n("CommonNav")],1)},a=[],o=n("88d8"),r=(n("c3a6"),n("ad06")),c=(n("e7e5"),n("d399")),u=(n("66b9"),n("b650")),l=(n("7f7f"),n("be7f"),n("565f")),h=(n("2f62"),n("d567")),d={name:"addValueCard",components:(i={},Object(o["a"])(i,l["a"].name,l["a"]),Object(o["a"])(i,u["a"].name,u["a"]),Object(o["a"])(i,c["a"].name,c["a"]),Object(o["a"])(i,r["a"].name,r["a"]),Object(o["a"])(i,"CommonNav",h["a"]),i),data:function(){return{vc_num:"",vc_password:"",deposit:this.$route.query.type?this.$route.query.type:"",vc_id:this.$route.query.vc_id?this.$route.query.vc_id:0,isShowPwd:!1}},methods:{btnSubmit:function(){var t=this;""!=this.vc_num&&""!=this.vc_password?""==this.deposit?this.$store.dispatch("setAddValueCard",{vc_num:this.vc_num,vc_password:this.vc_password}).then(function(e){Object(c["a"])(e.data.msg),0==e.data.error&&t.$router.push({name:"valueCard"})}):this.$store.dispatch("setDepositValueCard",{vc_num:this.vc_num,vc_password:this.vc_password,vc_id:this.vc_id}).then(function(e){Object(c["a"])(e.data.msg),0==e.data.error&&t.$router.push({name:"valueCard"})}):Object(c["a"])(this.$t("lang.card_pwd_not_null"))},clickRightIcon:function(){this.isShowPwd=!this.isShowPwd}}},f=d,p=(n("6ed9"),n("2877")),v=Object(p["a"])(f,s,a,!1,null,"3d41ca44",null);v.options.__file="AddValueCard.vue";e["default"]=v.exports},"4bb8":function(t,e,n){},"565f":function(t,e,n){"use strict";var i=n("c31d"),s=n("fe7e"),a=n("a142");e["a"]=Object(s["a"])({render:function(){var t,e=this,n=e.$createElement,i=e._self._c||n;return i("cell",{class:e.b((t={error:e.error,disabled:e.$attrs.disabled,"min-height":"textarea"===e.type&&!e.autosize},t["label-"+e.labelAlign]=e.labelAlign,t)),attrs:{icon:e.leftIcon,title:e.label,center:e.center,border:e.border,"is-link":e.isLink,required:e.required}},[e._t("left-icon",null,{slot:"icon"}),e._t("label",null,{slot:"title"}),i("div",{class:e.b("body")},["textarea"===e.type?i("textarea",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{readonly:e.readonly},domProps:{value:e.value}},"textarea",e.$attrs,!1),e.listeners)):i("input",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{type:e.type,readonly:e.readonly},domProps:{value:e.value}},"input",e.$attrs,!1),e.listeners)),e.showClear?i("icon",{class:e.b("clear"),attrs:{name:"clear"},on:{touchstart:function(t){return t.preventDefault(),e.onClear(t)}}}):e._e(),e.$slots.icon||e.icon?i("div",{class:e.b("icon"),on:{click:e.onClickIcon}},[e._t("icon",[i("icon",{attrs:{name:e.icon}})])],2):e._e(),e.$slots.button?i("div",{class:e.b("button")},[e._t("button")],2):e._e()],1),e.errorMessage?i("div",{class:e.b("error-message"),domProps:{textContent:e._s(e.errorMessage)}}):e._e()],2)},name:"field",inheritAttrs:!1,props:{value:[String,Number],icon:String,label:String,error:Boolean,center:Boolean,isLink:Boolean,leftIcon:String,readonly:Boolean,required:Boolean,clearable:Boolean,labelAlign:String,inputAlign:String,onIconClick:Function,autosize:[Boolean,Object],errorMessage:String,type:{type:String,default:"text"},border:{type:Boolean,default:!0}},data:function(){return{focused:!1}},watch:{value:function(){this.$nextTick(this.adjustSize)}},mounted:function(){this.format(),this.$nextTick(this.adjustSize)},computed:{showClear:function(){return this.clearable&&this.focused&&""!==this.value&&this.isDef(this.value)&&!this.readonly},listeners:function(){return Object(i["a"])({},this.$listeners,{input:this.onInput,keypress:this.onKeypress,focus:this.onFocus,blur:this.onBlur})}},methods:{focus:function(){this.$refs.input&&this.$refs.input.focus()},blur:function(){this.$refs.input&&this.$refs.input.blur()},format:function(t){void 0===t&&(t=this.$refs.input);var e=t,n=e.value,i=this.$attrs.maxlength;return this.isDef(i)&&n.length>i&&(n=n.slice(0,i),t.value=n),n},onInput:function(t){this.$emit("input",this.format(t.target))},onFocus:function(t){this.focused=!0,this.$emit("focus",t),this.readonly&&this.blur()},onBlur:function(t){this.focused=!1,this.$emit("blur",t)},onClickIcon:function(){this.$emit("click-icon"),this.onIconClick&&this.onIconClick()},onClear:function(){this.$emit("input",""),this.$emit("clear")},onKeypress:function(t){if("number"===this.type){var e=t.keyCode,n=-1===String(this.value).indexOf("."),i=e>=48&&e<=57||46===e&&n||45===e;i||t.preventDefault()}"search"===this.type&&13===t.keyCode&&this.blur(),this.$emit("keypress",t)},adjustSize:function(){var t=this.$refs.input;if("textarea"===this.type&&this.autosize&&t){t.style.height="auto";var e=t.scrollHeight;if(Object(a["d"])(this.autosize)){var n=this.autosize,i=n.maxHeight,s=n.minHeight;i&&(e=Math.min(e,i)),s&&(e=Math.max(e,s))}e&&(t.style.height=e+"px")}}}})},"66b9":function(t,e,n){"use strict";n("68ef")},"6ed9":function(t,e,n){"use strict";var i=n("4bb8"),s=n.n(i);s.a},9718:function(t,e,n){},be7f:function(t,e,n){"use strict";n("68ef"),n("1146")},c1ee:function(t,e,n){"use strict";var i=n("9718"),s=n.n(i);s.a},c3a6:function(t,e,n){"use strict";n("68ef")},d567:function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"sus-nav"},[n("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[n("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[n("ul",[n("li",{on:{click:function(e){t.routerLink("home")}}},[n("i",{staticClass:"iconfont icon-zhuye"}),n("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?n("li",{on:{click:function(e){t.routerLink("search")}}},[n("i",{staticClass:"iconfont icon-search"}),n("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),n("li",{on:{click:function(e){t.routerLink("catalog")}}},[n("i",{staticClass:"iconfont icon-menu"}),n("p",[t._v(t._s(t.$t("lang.category")))])]),n("li",{on:{click:function(e){t.routerLink("cart")}}},[n("i",{staticClass:"iconfont icon-cart"}),n("p",[t._v(t._s(t.$t("lang.cart")))])]),n("li",{on:{click:function(e){t.routerLink("user")}}},[n("i",{staticClass:"iconfont icon-gerenzhongxin"}),n("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?n("li",{on:{click:function(e){t.routerLink("team")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?n("li",{on:{click:function(e){t.routerLink("supplier")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),n("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),n("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},s=[],a=(n("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,n,i;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,n=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(i=e-n-this.yPum>0?e-n-this.yPum:0):(n+=rightDiv.clientHeight,this.yPum-n>0&&(i=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=i+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(n){n.plus||n.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=a,r=(n("c1ee"),n("2877")),c=Object(r["a"])(o,i,s,!1,null,null,null);c.options.__file="CommonNav.vue";e["a"]=c.exports}}]);