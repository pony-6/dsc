(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2bf5"],{"0653":function(t,e,i){"use strict";i("68ef")},1146:function(t,e,i){},"19de":function(t,e,i){"use strict";i("68ef"),i("5fbe")},"1a23":function(t,e,i){"use strict";var a=i("fe7e");e["a"]=Object(a["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b({on:t.value,disabled:t.disabled}),style:t.style,on:{click:t.onClick}},[i("div",{class:t.b("node")},[t.loading?i("loading",{class:t.b("loading")}):t._e()],1)])},name:"switch",props:{value:Boolean,loading:Boolean,disabled:Boolean,activeColor:String,inactiveColor:String,size:{type:String,default:"30px"}},computed:{style:function(){return{fontSize:this.size,backgroundColor:this.value?this.activeColor:this.inactiveColor}}},methods:{onClick:function(){this.disabled||this.loading||(this.$emit("input",!this.value),this.$emit("change",!this.value))}}})},"1f5b":function(t,e,i){},"234f":function(t,e,i){"use strict";var a=i("fe7e"),n=i("b650"),s=i("9584");e["a"]=Object(a["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("van-button",{class:t.b(),attrs:{square:"",size:"large",loading:t.loading,disabled:t.disabled,type:t.primary?"danger":"warning"},on:{click:t.onClick}},[t._t("default",[t._v(t._s(t.text))])],2)},name:"goods-action-big-btn",mixins:[s["a"]],components:{VanButton:n["a"]},props:{text:String,primary:Boolean,loading:Boolean,disabled:Boolean},methods:{onClick:function(t){this.$emit("click",t),this.routerLink()}}})},"24db":function(t,e){t.exports="data:image/png;base64,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"},3846:function(t,e,i){i("9e1e")&&"g"!=/./g.flags&&i("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:i("0bfb")})},"3b42":function(t,e,i){},"4cf9":function(t,e,i){},"4ddd":function(t,e,i){"use strict";i("68ef"),i("dde9")},"565f":function(t,e,i){"use strict";var a=i("c31d"),n=i("fe7e"),s=i("a142");e["a"]=Object(n["a"])({render:function(){var t,e=this,i=e.$createElement,a=e._self._c||i;return a("cell",{class:e.b((t={error:e.error,disabled:e.$attrs.disabled,"min-height":"textarea"===e.type&&!e.autosize},t["label-"+e.labelAlign]=e.labelAlign,t)),attrs:{icon:e.leftIcon,title:e.label,center:e.center,border:e.border,"is-link":e.isLink,required:e.required}},[e._t("left-icon",null,{slot:"icon"}),e._t("label",null,{slot:"title"}),a("div",{class:e.b("body")},["textarea"===e.type?a("textarea",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{readonly:e.readonly},domProps:{value:e.value}},"textarea",e.$attrs,!1),e.listeners)):a("input",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{type:e.type,readonly:e.readonly},domProps:{value:e.value}},"input",e.$attrs,!1),e.listeners)),e.showClear?a("icon",{class:e.b("clear"),attrs:{name:"clear"},on:{touchstart:function(t){return t.preventDefault(),e.onClear(t)}}}):e._e(),e.$slots.icon||e.icon?a("div",{class:e.b("icon"),on:{click:e.onClickIcon}},[e._t("icon",[a("icon",{attrs:{name:e.icon}})])],2):e._e(),e.$slots.button?a("div",{class:e.b("button")},[e._t("button")],2):e._e()],1),e.errorMessage?a("div",{class:e.b("error-message"),domProps:{textContent:e._s(e.errorMessage)}}):e._e()],2)},name:"field",inheritAttrs:!1,props:{value:[String,Number],icon:String,label:String,error:Boolean,center:Boolean,isLink:Boolean,leftIcon:String,readonly:Boolean,required:Boolean,clearable:Boolean,labelAlign:String,inputAlign:String,onIconClick:Function,autosize:[Boolean,Object],errorMessage:String,type:{type:String,default:"text"},border:{type:Boolean,default:!0}},data:function(){return{focused:!1}},watch:{value:function(){this.$nextTick(this.adjustSize)}},mounted:function(){this.format(),this.$nextTick(this.adjustSize)},computed:{showClear:function(){return this.clearable&&this.focused&&""!==this.value&&this.isDef(this.value)&&!this.readonly},listeners:function(){return Object(a["a"])({},this.$listeners,{input:this.onInput,keypress:this.onKeypress,focus:this.onFocus,blur:this.onBlur})}},methods:{focus:function(){this.$refs.input&&this.$refs.input.focus()},blur:function(){this.$refs.input&&this.$refs.input.blur()},format:function(t){void 0===t&&(t=this.$refs.input);var e=t,i=e.value,a=this.$attrs.maxlength;return this.isDef(a)&&i.length>a&&(i=i.slice(0,a),t.value=i),i},onInput:function(t){this.$emit("input",this.format(t.target))},onFocus:function(t){this.focused=!0,this.$emit("focus",t),this.readonly&&this.blur()},onBlur:function(t){this.focused=!1,this.$emit("blur",t)},onClickIcon:function(){this.$emit("click-icon"),this.onIconClick&&this.onIconClick()},onClear:function(){this.$emit("input",""),this.$emit("clear")},onKeypress:function(t){if("number"===this.type){var e=t.keyCode,i=-1===String(this.value).indexOf("."),a=e>=48&&e<=57||46===e&&i||45===e;a||t.preventDefault()}"search"===this.type&&13===t.keyCode&&this.blur(),this.$emit("keypress",t)},adjustSize:function(){var t=this.$refs.input;if("textarea"===this.type&&this.autosize&&t){t.style.height="auto";var e=t.scrollHeight;if(Object(s["d"])(this.autosize)){var i=this.autosize,a=i.maxHeight,n=i.minHeight;a&&(e=Math.min(e,a)),n&&(e=Math.max(e,n))}e&&(t.style.height=e+"px")}}}})},"5fbe":function(t,e,i){},"8a58":function(t,e,i){"use strict";i("68ef"),i("4d75")},"93ac":function(t,e,i){"use strict";i("68ef"),i("4cf9")},9718:function(t,e,i){},"9f14":function(t,e,i){"use strict";var a=i("fe7e"),n=i("f331");e["a"]=Object(a["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b({disabled:t.isDisabled}),on:{click:function(e){t.$emit("click")}}},[i("span",{class:t.b("input")},[i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],class:t.b("control"),attrs:{type:"radio",disabled:t.isDisabled},domProps:{value:t.name,checked:t._q(t.currentValue,t.name)},on:{change:function(e){t.currentValue=t.name}}}),i("icon",{attrs:{name:t.currentValue===t.name?"checked":"check"}})],1),t.$slots.default?i("span",{class:t.b("label",t.labelPosition),on:{click:t.onClickLabel}},[t._t("default")],2):t._e()])},name:"radio",mixins:[n["a"]],props:{name:null,value:null,disabled:Boolean,labelDisabled:Boolean,labelPosition:Boolean},computed:{currentValue:{get:function(){return this.parent?this.parent.value:this.value},set:function(t){(this.parent||this).$emit("input",t)}},isDisabled:function(){return this.parent&&this.parent.disabled||this.disabled}},created:function(){this.findParent("van-radio-group")},methods:{onClickLabel:function(){this.isDisabled||this.labelDisabled||(this.currentValue=this.name)}}})},a44c:function(t,e,i){"use strict";i("68ef")},b000:function(t,e,i){"use strict";i("68ef"),i("d9d2")},b528:function(t,e,i){"use strict";var a=i("fe7e"),n=i("9584");e["a"]=Object(a["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"van-hairline",class:t.b(),on:{click:t.onClick}},[i("icon",{class:[t.b("icon"),t.iconClass],attrs:{info:t.info,name:t.icon}}),t._t("default",[t._v(t._s(t.text))])],2)},name:"goods-action-mini-btn",mixins:[n["a"]],props:{text:String,info:[String,Number],icon:String,iconClass:String},methods:{onClick:function(t){this.$emit("click",t),this.routerLink()}}})},bb33:function(t,e,i){"use strict";var a=i("fe7e");e["a"]=Object(a["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[t._t("default")],2)},name:"goods-action"})},be39:function(t,e,i){"use strict";i("68ef"),i("3b42")},be7f:function(t,e,i){"use strict";i("68ef"),i("1146")},c194:function(t,e,i){"use strict";i("68ef")},c1ee:function(t,e,i){"use strict";var a=i("9718"),n=i.n(a);n.a},d567:function(t,e,i){"use strict";var a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(e){t.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?i("li",{on:{click:function(e){t.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),i("li",{on:{click:function(e){t.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[t._v(t._s(t.$t("lang.category")))])]),i("li",{on:{click:function(e){t.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[t._v(t._s(t.$t("lang.cart")))])]),i("li",{on:{click:function(e){t.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?i("li",{on:{click:function(e){t.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?i("li",{on:{click:function(e){t.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},n=[],s=(i("3846"),i("cadf"),i("551c"),i("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,i,a;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(a=e-i-this.yPum>0?e-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(a=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=a+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=s,r=(i("c1ee"),i("2877")),c=Object(r["a"])(o,a,n,!1,null,null,null);c.options.__file="CommonNav.vue";e["a"]=c.exports},d9d2:function(t,e,i){},dde9:function(t,e,i){},e27c:function(t,e,i){"use strict";var a=i("fe7e");e["a"]=Object(a["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[t._t("default")],2)},name:"radio-group",props:{value:null,disabled:Boolean},watch:{value:function(t){this.$emit("change",t)}}})},e41f:function(t,e,i){"use strict";var a=i("fe7e"),n=i("6605");e["a"]=Object(a["a"])({render:function(){var t,e=this,i=e.$createElement,a=e._self._c||i;return a("transition",{attrs:{name:e.currentTransition}},[e.shouldRender?a("div",{directives:[{name:"show",rawName:"v-show",value:e.value,expression:"value"}],class:e.b((t={},t[e.position]=e.position,t))},[e._t("default")],2):e._e()])},name:"popup",mixins:[n["a"]],props:{transition:String,overlay:{type:Boolean,default:!0},closeOnClickOverlay:{type:Boolean,default:!0},position:{type:String,default:""}},computed:{currentTransition:function(){return this.transition||(""===this.position?"van-fade":"popup-slide-"+this.position)}}})},efa0:function(t,e,i){"use strict";var a=i("b650"),n=i("fe7e");e["a"]=Object(n["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[t._t("top"),t.tip||t.$slots.tip?i("div",{class:t.b("tip")},[t._v("\n    "+t._s(t.tip)),t._t("tip")],2):t._e(),i("div",{class:t.b("bar")},[t._t("default"),i("div",{class:t.b("text")},[t.hasPrice?[i("span",[t._v(t._s(t.label||t.$t("label")))]),i("span",{class:t.b("price")},[t._v(t._s(t.currency)+" "+t._s(t._f("format")(t.price)))])]:t._e()],2),i("van-button",{attrs:{square:"",size:"large",type:t.buttonType,disabled:t.disabled,loading:t.loading},on:{click:function(e){t.$emit("submit")}}},[t._v("\n      "+t._s(t.loading?"":t.buttonText)+"\n    ")])],2)],2)},name:"submit-bar",components:{VanButton:a["a"]},props:{tip:String,type:Number,price:Number,label:String,loading:Boolean,disabled:Boolean,buttonText:String,currency:{type:String,default:"¥"},buttonType:{type:String,default:"danger"}},computed:{hasPrice:function(){return"number"===typeof this.price}},filters:{format:function(t){return(t/100).toFixed(2)}}})},f331:function(t,e,i){"use strict";e["a"]={data:function(){return{parent:null}},methods:{findParent:function(t){var e=this.$parent;while(e){if(e.$options.name===t){this.parent=e;break}e=e.$parent}}}}},f908:function(t,e,i){"use strict";i("68ef"),i("1f5b")},f983:function(t,e,i){"use strict";i.r(e);var a,n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"con"},[t.crowdCheckoutData?a("div",{staticClass:"flow-checkout"},[a("section",{staticClass:"show flow-checkout-item flow-checkout-adr",on:{click:t.checkoutAddress}},[""!=t.crowdCheckoutData.default_address?a("div",[a("van-cell-group",[a("van-cell",{attrs:{title:t.consignee_title,label:t.consignee_address,icon:"location","is-link":""}})],1)],1):a("div",[a("div",{staticClass:"not-address text-center color-9"},[t._v(t._s(t.$t("lang.not_address")))])])]),t.cart_goods?a("div",{staticClass:"goods-li bg-color-write"},[a("router-link",{staticClass:"show bg-color-write li",attrs:{to:{name:"crowdfunding-detail",params:{id:t.cart_goods.id}}}},[a("div",{staticClass:"left p-r"},[t.cart_goods.title_img?a("img",{staticClass:"img",attrs:{src:t.cart_goods.title_img}}):a("img",{staticClass:"img",attrs:{src:i("24db")}})]),a("div",{staticClass:"right"},[a("h4",{staticClass:"f-05 color-3"},[t._v(t._s(t.cart_goods.title))]),a("div",{staticClass:"goods-num dis-box"},[a("div",{staticClass:"box-flex f-03 color-7"},[t._v(t._s(t.$t("lang.label_crowdfunding_fund"))),a("em",{staticClass:"color-red",domProps:{innerHTML:t._s(t.crowdCheckoutData.cart_goods.formated_price)}}),t._v(t._s(t.$t("lang.yuan")))]),a("div",{staticClass:"list f-02 color-9"},[t._v(t._s(t.$t("lang.support_number"))+"\r\n                            "),a("span",{staticClass:"color-red"},[t._v(t._s(t.cart_goods.join_num))]),t._v(t._s(t.$t("lang.ren"))+"\r\n                        ")])]),a("div",{staticClass:"ect-progress dis-box"},[a("p",{staticClass:"wrap box-flex"},[a("span",{staticClass:"bar",style:{width:t.cart_goods.baifen_bi+"%"}},[a("i",{staticClass:"color"})])]),a("p",{staticClass:"txt f-02"},[t._v(t._s(t.cart_goods.baifen_bi)+"%")])]),a("div",{staticClass:"goods-cont f-03 color-7"},[t._v("\r\n                        "+t._s(t.cart_goods.content)+"\r\n                    ")])])])],1):t._e(),a("van-cell-group",{staticClass:"van-cell-noright m-top08"},[a("van-cell",{attrs:{title:t.$t("lang.delivery_cost")}},[a("div",{attrs:{solt:"value"}},[a("em",{staticClass:"color-red"},[t._v(t._s(t.shipping_fee))])])]),a("van-cell",{staticClass:"b-min b-min-t",attrs:{title:t.$t("lang.buyer_message")}},[a("div",{attrs:{solt:"value"}},[a("van-field",{staticClass:"van-cell-ptb0",attrs:{placeholder:t.$t("lang.buyer_message_placeholder")},model:{value:t.value,callback:function(e){t.value=e},expression:"value"}})],1)]),a("van-cell",{staticClass:"b-min b-min-t"},[a("div",{attrs:{solt:"value"}},[a("span",[t._v(t._s(t.$t("lang.gong"))+t._s(t.crowdCheckoutData.number)+t._s(t.$t("lang.total_amount_propmt_alt"))+"：")]),a("em",{staticClass:"color-red",domProps:{innerHTML:t._s(t.crowdCheckoutData.total.amount_formated)}})])])],1),a("section",{staticClass:"checkout-goods-other",on:{click:t.crowsdPay}},[a("van-cell-group",{staticClass:"van-cell-noright m-top08"},[a("van-cell",{attrs:{title:t.$t("lang.payment_mode"),"is-link":""},model:{value:t.pay_name,callback:function(e){t.pay_name=e},expression:"pay_name"}})],1)],1),a("section",[t.crowdCheckoutData.use_surplus>0?a("van-cell-group",{staticClass:"van-cell-noright m-top08"},[a("van-cell",{staticClass:"van-cell-title b-min b-min-b"},[a("div",{attrs:{slot:"title"},slot:"title"},[t._v(t._s(t.$t("lang.is_use_balance")))]),a("van-switch",{staticClass:"fr",attrs:{size:"20px"},model:{value:t.surplusSelf,callback:function(e){t.surplusSelf=e},expression:"surplusSelf"}})],1)],1):t._e()],1),a("section",{staticClass:"order-detail-submit order-checkout-submit"},[a("van-submit-bar",{attrs:{price:t.amountTotal,label:t.$t("lang.label_total_amount_payable"),"button-text":t.$t("lang.immediate_payment")},on:{submit:t.onSubmit}})],1)],1):t._e(),a("van-popup",{staticClass:"attr-goods-box crowd-pay",attrs:{position:"bottom"},model:{value:t.showBase,callback:function(e){t.showBase=e},expression:"showBase"}},[a("div",{staticClass:"attr-goods-header wallet-bt"},[a("div",{staticClass:"dis-box"},[a("div",{staticClass:"box-flex f-05 color-3"},[t._v(t._s(t.$t("lang.payment_mode")))]),a("div",{on:{click:t.closeSku}},[a("i",{staticClass:"iconfont icon-guanbi f-05 color-9"})])])]),a("van-radio-group",{staticClass:"bg-color-write",model:{value:t.radio,callback:function(e){t.radio=e},expression:"radio"}},t._l(t.payment_method,function(e,i){return a("van-radio",{key:i,class:{active:t.pay_id==e.pay_id},attrs:{name:e.pay_id},on:{click:function(i){t.payment_method_select(e.pay_id,e.pay_name)}}},[a("div",{staticClass:"dis-box detail-scheme bg-color-write li"},[a("div",{staticClass:"box-flex"},[t._v(t._s(e.pay_name))]),a("div",{staticClass:"left-icon"},[a("label",[a("i",{staticClass:"iconfont icon-gou"})])])])])}))],1),a("CommonNav",{attrs:{routerName:t.routerName}},[a("li",{attrs:{slot:"aloneNav"},slot:"aloneNav"},[a("router-link",{attrs:{to:{name:"crowdfunding"}}},[a("i",{staticClass:"iconfont icon-shequ2"}),a("p",[t._v(t._s(t.$t("lang.square")))])])],1),a("li",{attrs:{slot:"aloneNav"},slot:"aloneNav"},[a("router-link",{attrs:{to:{name:"crowdfunding-user"}}},[a("i",{staticClass:"iconfont icon-gerenzhongxin"}),a("p",[t._v(t._s(t.$t("lang.centre")))])])],1)])],1)},s=[],o=(i("ac6a"),i("9395")),r=i("88d8"),c=(i("e7e5"),i("d399")),l=(i("b000"),i("1a23")),u=(i("4ddd"),i("9f14")),d=(i("a44c"),i("e27c")),h=(i("8a58"),i("e41f")),f=(i("be7f"),i("565f")),A=(i("f908"),i("b528")),g=(i("19de"),i("234f")),p=(i("93ac"),i("bb33")),m=(i("be39"),i("efa0")),v=(i("0653"),i("34e9")),b=(i("7f7f"),i("c194"),i("7744")),_=i("2f62"),y=i("d567"),C={data:function(){return{routerName:"crowd_funding",pay_name:"",cur_id:1,value:"",radio:1,apart:"apart",showBase:!1,use_surplus_val:0,pay_id:null}},components:(a={CommonNav:y["a"]},Object(r["a"])(a,b["a"].name,b["a"]),Object(r["a"])(a,v["a"].name,v["a"]),Object(r["a"])(a,m["a"].name,m["a"]),Object(r["a"])(a,p["a"].name,p["a"]),Object(r["a"])(a,g["a"].name,g["a"]),Object(r["a"])(a,A["a"].name,A["a"]),Object(r["a"])(a,f["a"].name,f["a"]),Object(r["a"])(a,h["a"].name,h["a"]),Object(r["a"])(a,d["a"].name,d["a"]),Object(r["a"])(a,u["a"].name,u["a"]),Object(r["a"])(a,l["a"].name,l["a"]),Object(r["a"])(a,c["a"].name,c["a"]),a),created:function(){this.checkoutDefault()},computed:Object(o["a"])({},Object(_["c"])({crowdCheckoutData:function(t){return t.crowdfunding.crowdCheckoutData}}),{consignee_title:function(){return this.crowdCheckoutData.default_address?this.crowdCheckoutData.default_address.consignee+" "+this.crowdCheckoutData.default_address.mobile:""},consignee_address:function(){return this.crowdCheckoutData.default_address?this.crowdCheckoutData.default_address.province+this.crowdCheckoutData.default_address.city+this.crowdCheckoutData.default_address.district+this.crowdCheckoutData.default_address.address:""},surplusSelf:{get:function(){return 0!=this.use_surplus_val},set:function(t){this.use_surplus_val=1==t?1:0}},cart_goods:function(){return this.crowdCheckoutData.cart_goods},order:function(){return this.crowdCheckoutData.order},total:function(){return this.crowdCheckoutData.total},amountTotal:function(){return 100*this.crowdCheckoutData.total.amount},payment_method:function(){return this.crowdCheckoutData.payment_list?this.crowdCheckoutData.payment_list:[]},shipping_fee:function(){return 0!=this.total.shipping_fee?this.total.shipping_fee:this.$t("lang.free_shipping")}}),methods:{checkoutDefault:function(){this.$store.dispatch("setCrowdfundingCheckout",{pid:this.$route.query.pid,id:this.$route.query.id,number:this.$route.query.number})},crowsdPay:function(){this.showBase=!0},closeSku:function(){this.showBase=!1},payment_method_select:function(t,e){this.pay_id=t,this.pay_name=e},checkoutAddress:function(){var t={routerLink:"crowdfunding-checkout"};this.$route.query&&(t={routerLink:"crowdfunding-checkout",pid:this.$route.query.pid,id:this.$route.query.id,number:this.$route.query.number}),this.$router.push({name:"address",query:t})},onSubmit:function(){var t=this;this.$store.dispatch("setCrowdfundingDone",{pid:this.$route.query.pid,id:this.$route.query.id,number:this.$route.query.number,pay_id:this.pay_id,is_surplus:this.use_surplus_val}).then(function(e){1==e.data.error?Object(c["a"])(e.data.msg):t.$router.push({name:"done",query:{order_sn:e.data}})})}},watch:{crowdCheckoutData:function(){var t=this;""==this.pay_name&&"address"!=this.crowdCheckoutData.error&&this.payment_method.forEach(function(e){"onlinepay"==e.pay_code&&(t.pay_name=e.pay_name,t.pay_id=e.pay_id)}),"address"==this.crowdCheckoutData.error&&this.$router.push({name:"addAddressForm",query:{routerLink:"crowdfunding-checkout",entrance:"first",pid:this.$route.query.pid,id:this.$route.query.id,number:this.$route.query.number}})},payment_method:function(){if(""==this.payment_method)return Object(c["a"])(this.$t("lang.payment_method_not_installed")),!1}}},k=C,B=i("2877"),w=Object(B["a"])(k,n,s,!1,null,null,null);w.options.__file="Checkout.vue";e["default"]=w.exports}}]);