(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-294a"],{1146:function(t,e,n){},"1fd6":function(t,e,n){"use strict";n.r(e);var s,i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",{staticClass:"drp-register"},[n("div",{staticClass:"input-list"},[n("van-field",{staticClass:"f-04",attrs:{clearable:"",placeholder:t.$t("lang.bonus_command")},model:{value:t.bonus.bonus_sn,callback:function(e){t.$set(t.bonus,"bonus_sn",e)},expression:"bonus.bonus_sn"}}),n("van-field",{staticClass:"f-04",attrs:{type:"password",clearable:"",placeholder:t.$t("lang.bonus_pwd")},model:{value:t.bonus.bonus_password,callback:function(e){t.$set(t.bonus,"bonus_password",e)},expression:"bonus.bonus_password"}})],1),n("div",{staticClass:"padding-all"},[n("van-button",{staticClass:"br-5 f-06",attrs:{type:"primary","bottom-action":""},on:{click:t.bonusSubmit}},[t._v(t._s(t.$t("lang.subimt")))])],1),n("CommonNav")],1)},o=[],a=n("88d8"),r=(n("e7e5"),n("d399")),u=(n("66b9"),n("b650")),c=(n("7f7f"),n("be7f"),n("565f")),l=(n("2f62"),n("d567")),h={name:"addbonus",components:(s={},Object(a["a"])(s,c["a"].name,c["a"]),Object(a["a"])(s,u["a"].name,u["a"]),Object(a["a"])(s,r["a"].name,r["a"]),Object(a["a"])(s,"CommonNav",l["a"]),s),data:function(){return{bonus:{bonus_sn:"",bonus_password:""}}},methods:{bonusSubmit:function(){var t=this;""!=this.bonus.bonus_sn&&""!=this.bonus.bonus_password?this.$store.dispatch("setAddBonus",this.bonus).then(function(e){Object(r["a"])(e.data.mesg),0==e.data.code&&t.$router.push({name:"bonus"})}):Object(r["a"])(this.$t("lang.command_pwd_not_null"))}}},f=h,d=n("2877"),p=Object(d["a"])(f,i,o,!1,null,null,null);p.options.__file="AddBonus.vue";e["default"]=p.exports},3846:function(t,e,n){n("9e1e")&&"g"!=/./g.flags&&n("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:n("0bfb")})},"565f":function(t,e,n){"use strict";var s=n("c31d"),i=n("fe7e"),o=n("a142");e["a"]=Object(i["a"])({render:function(){var t,e=this,n=e.$createElement,s=e._self._c||n;return s("cell",{class:e.b((t={error:e.error,disabled:e.$attrs.disabled,"min-height":"textarea"===e.type&&!e.autosize},t["label-"+e.labelAlign]=e.labelAlign,t)),attrs:{icon:e.leftIcon,title:e.label,center:e.center,border:e.border,"is-link":e.isLink,required:e.required}},[e._t("left-icon",null,{slot:"icon"}),e._t("label",null,{slot:"title"}),s("div",{class:e.b("body")},["textarea"===e.type?s("textarea",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{readonly:e.readonly},domProps:{value:e.value}},"textarea",e.$attrs,!1),e.listeners)):s("input",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{type:e.type,readonly:e.readonly},domProps:{value:e.value}},"input",e.$attrs,!1),e.listeners)),e.showClear?s("icon",{class:e.b("clear"),attrs:{name:"clear"},on:{touchstart:function(t){return t.preventDefault(),e.onClear(t)}}}):e._e(),e.$slots.icon||e.icon?s("div",{class:e.b("icon"),on:{click:e.onClickIcon}},[e._t("icon",[s("icon",{attrs:{name:e.icon}})])],2):e._e(),e.$slots.button?s("div",{class:e.b("button")},[e._t("button")],2):e._e()],1),e.errorMessage?s("div",{class:e.b("error-message"),domProps:{textContent:e._s(e.errorMessage)}}):e._e()],2)},name:"field",inheritAttrs:!1,props:{value:[String,Number],icon:String,label:String,error:Boolean,center:Boolean,isLink:Boolean,leftIcon:String,readonly:Boolean,required:Boolean,clearable:Boolean,labelAlign:String,inputAlign:String,onIconClick:Function,autosize:[Boolean,Object],errorMessage:String,type:{type:String,default:"text"},border:{type:Boolean,default:!0}},data:function(){return{focused:!1}},watch:{value:function(){this.$nextTick(this.adjustSize)}},mounted:function(){this.format(),this.$nextTick(this.adjustSize)},computed:{showClear:function(){return this.clearable&&this.focused&&""!==this.value&&this.isDef(this.value)&&!this.readonly},listeners:function(){return Object(s["a"])({},this.$listeners,{input:this.onInput,keypress:this.onKeypress,focus:this.onFocus,blur:this.onBlur})}},methods:{focus:function(){this.$refs.input&&this.$refs.input.focus()},blur:function(){this.$refs.input&&this.$refs.input.blur()},format:function(t){void 0===t&&(t=this.$refs.input);var e=t,n=e.value,s=this.$attrs.maxlength;return this.isDef(s)&&n.length>s&&(n=n.slice(0,s),t.value=n),n},onInput:function(t){this.$emit("input",this.format(t.target))},onFocus:function(t){this.focused=!0,this.$emit("focus",t),this.readonly&&this.blur()},onBlur:function(t){this.focused=!1,this.$emit("blur",t)},onClickIcon:function(){this.$emit("click-icon"),this.onIconClick&&this.onIconClick()},onClear:function(){this.$emit("input",""),this.$emit("clear")},onKeypress:function(t){if("number"===this.type){var e=t.keyCode,n=-1===String(this.value).indexOf("."),s=e>=48&&e<=57||46===e&&n||45===e;s||t.preventDefault()}"search"===this.type&&13===t.keyCode&&this.blur(),this.$emit("keypress",t)},adjustSize:function(){var t=this.$refs.input;if("textarea"===this.type&&this.autosize&&t){t.style.height="auto";var e=t.scrollHeight;if(Object(o["d"])(this.autosize)){var n=this.autosize,s=n.maxHeight,i=n.minHeight;s&&(e=Math.min(e,s)),i&&(e=Math.max(e,i))}e&&(t.style.height=e+"px")}}}})},"66b9":function(t,e,n){"use strict";n("68ef")},9718:function(t,e,n){},be7f:function(t,e,n){"use strict";n("68ef"),n("1146")},c1ee:function(t,e,n){"use strict";var s=n("9718"),i=n.n(s);i.a},d567:function(t,e,n){"use strict";var s=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"sus-nav"},[n("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[n("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[n("ul",[n("li",{on:{click:function(e){t.routerLink("home")}}},[n("i",{staticClass:"iconfont icon-zhuye"}),n("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?n("li",{on:{click:function(e){t.routerLink("search")}}},[n("i",{staticClass:"iconfont icon-search"}),n("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),n("li",{on:{click:function(e){t.routerLink("catalog")}}},[n("i",{staticClass:"iconfont icon-menu"}),n("p",[t._v(t._s(t.$t("lang.category")))])]),n("li",{on:{click:function(e){t.routerLink("cart")}}},[n("i",{staticClass:"iconfont icon-cart"}),n("p",[t._v(t._s(t.$t("lang.cart")))])]),n("li",{on:{click:function(e){t.routerLink("user")}}},[n("i",{staticClass:"iconfont icon-gerenzhongxin"}),n("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?n("li",{on:{click:function(e){t.routerLink("team")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?n("li",{on:{click:function(e){t.routerLink("supplier")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),n("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),n("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},i=[],o=(n("3846"),n("cadf"),n("551c"),n("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,n,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,n=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=e-n-this.yPum>0?e-n-this.yPum:0):(n+=rightDiv.clientHeight,this.yPum-n>0&&(s=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(n){n.plus||n.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),a=o,r=(n("c1ee"),n("2877")),u=Object(r["a"])(a,s,i,!1,null,null,null);u.options.__file="CommonNav.vue";e["a"]=u.exports}}]);