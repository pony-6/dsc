(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-0de0"],{"0653":function(e,t,i){"use strict";i("68ef")},"09d6":function(e,t,i){"use strict";i("4917");var n=navigator.userAgent,a=n.indexOf("Android")>-1||n.indexOf("Adr")>-1,o=!!n.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);function s(){return!!/micromessenger/.test(n.toLowerCase())}t["a"]={isWeixinBrowser:s,isAndroid:a,isiOS:o}},"0d3e":function(e,t,i){"use strict";i.r(t);var n,a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"con con_main"},[i("div",{staticClass:"inv-form"},[i("van-cell-group",[i("van-panel",{staticClass:"my-bottom",attrs:{title:e.$t("lang.vat_invoice_info")}}),i("van-field",{attrs:{label:e.$t("lang.label_company_name"),placeholder:e.$t("lang.enter_company_name"),disabled:e.disabled},model:{value:e.company_name,callback:function(t){e.company_name=t},expression:"company_name"}}),i("van-field",{attrs:{label:e.$t("lang.taxpayer_id_number"),type:"text",placeholder:e.$t("lang.enter_taxpayer_id_number"),disabled:e.disabled},model:{value:e.tax_id,callback:function(t){e.tax_id=t},expression:"tax_id"}}),i("van-field",{attrs:{label:e.$t("lang.register_address"),placeholder:e.$t("lang.enter_register_address"),disabled:e.disabled},model:{value:e.company_address,callback:function(t){e.company_address=t},expression:"company_address"}}),i("van-field",{attrs:{label:e.$t("lang.register_tel"),type:"tel",placeholder:e.$t("lang.enter_register_tel"),disabled:e.disabled},model:{value:e.company_telephone,callback:function(t){e.company_telephone=t},expression:"company_telephone"}}),i("van-field",{attrs:{label:e.$t("lang.bank_of_deposit"),placeholder:e.$t("lang.enter_bank_of_deposit"),disabled:e.disabled},model:{value:e.bank_of_deposit,callback:function(t){e.bank_of_deposit=t},expression:"bank_of_deposit"}}),i("van-field",{attrs:{label:e.$t("lang.bank_account"),type:"tel",placeholder:e.$t("lang.enter_bank_account"),disabled:e.disabled},model:{value:e.bank_account,callback:function(t){e.bank_account=t},expression:"bank_account"}})],1),i("van-cell-group",{staticClass:"m-top10"},[i("van-panel",{staticClass:"my-bottom",attrs:{title:e.$t("lang.bill_consignee_info")}}),i("van-field",{attrs:{label:e.$t("lang.label_name"),placeholder:e.$t("lang.enter_name"),disabled:e.disabled},model:{value:e.consignee_name,callback:function(t){e.consignee_name=t},expression:"consignee_name"}}),i("van-field",{attrs:{label:e.$t("lang.label_mobile"),type:"tel",maxlength:"11",placeholder:e.$t("lang.enter_check_taker_mobile"),disabled:e.disabled},model:{value:e.consignee_mobile_phone,callback:function(t){e.consignee_mobile_phone=t},expression:"consignee_mobile_phone"}}),i("van-cell",{staticClass:"van-cell-field",attrs:{title:e.$t("lang.label_region"),"is-link":""},on:{click:e.handelRegionShow}},[e.regionOptionDate.regionSplic?[e._v("\n                    "+e._s(e.regionOptionDate.regionSplic)+"\n                ")]:[e._v("\n                    "+e._s(e.$t("lang.please_select_district"))+"\n                ")]],2),i("van-field",{attrs:{label:e.$t("lang.label_address"),placeholder:e.$t("lang.enter_address"),disabled:e.disabled},model:{value:e.consignee_address,callback:function(t){e.consignee_address=t},expression:"consignee_address"}}),e.id>0?i("van-cell",{staticClass:"van-cell-field",attrs:{title:e.$t("lang.label_audit_status")}},[0==e.audit_status?i("span",{staticClass:"color-red"},[e._v(e._s(e.$t("lang.audit_status_01")))]):1==e.audit_status?i("span",{staticClass:"color-red"},[e._v(e._s(e.$t("lang.audit_status_02")))]):2==e.audit_status?i("span",{staticClass:"color-red"},[e._v(e._s(e.$t("lang.audit_status_03")))]):e._e()]):e._e()],1),i("div",{staticClass:"filter-btn"},[e.id>0?[i("div",{staticClass:"dis-box"},[i("van-button",{staticClass:"box-flex",attrs:{type:"default","bottom-action":""},on:{click:e.deleteInv}},[e._v(e._s(e.$t("lang.delete")))]),1==e.disabled?i("van-button",{staticClass:"box-flex",attrs:{type:"primary","bottom-action":""},on:{click:e.editInv}},[e._v(e._s(e.$t("lang.mod")))]):i("van-button",{staticClass:"box-flex",attrs:{type:"primary","bottom-action":""},on:{click:e.submitInv}},[e._v(e._s(e.$t("lang.save")))])],1)]:[i("van-button",{attrs:{type:"primary","bottom-action":""},on:{click:e.addInv}},[e._v(e._s(e.$t("lang.add")))])]],2),i("Region",{attrs:{display:e.regionShow,regionOptionDate:e.regionOptionDate},on:{updateDisplay:e.getRegionShow,updateRegionDate:e.getRegionOptionDate}}),i("CommonNav")],1)])},o=[],s=i("88d8"),c=(i("e7e5"),i("d399")),r=(i("66b9"),i("b650")),l=(i("3647"),i("ea47")),d=(i("be7f"),i("565f")),u=(i("0653"),i("34e9")),p=(i("7f7f"),i("c194"),i("7744")),g=i("4328"),h=i.n(g),_=i("d567"),m=i("f27a"),f={mixins:[m["a"]],data:function(){return{disabled:!0,id:"",audit_status:"",company_name:"",tax_id:"",company_address:"",company_telephone:"",bank_of_deposit:"",bank_account:"",consignee_name:"",consignee_mobile_phone:"",consignee_address:""}},components:(n={},Object(s["a"])(n,p["a"].name,p["a"]),Object(s["a"])(n,u["a"].name,u["a"]),Object(s["a"])(n,d["a"].name,d["a"]),Object(s["a"])(n,l["a"].name,l["a"]),Object(s["a"])(n,r["a"].name,r["a"]),Object(s["a"])(n,c["a"].name,c["a"]),Object(s["a"])(n,"CommonNav",_["a"]),n),created:function(){var e=this;this.$http.get("".concat(window.ROOT_URL,"api/invoice")).then(function(t){var i=t.data.data.user_vat_invoice;""!=i?(e.id=i.id,e.audit_status=i.audit_status,e.company_name=i.company_name,e.tax_id=i.tax_id,e.company_address=i.company_address,e.company_telephone=i.company_telephone,e.bank_of_deposit=i.bank_of_deposit,e.bank_account=i.bank_account,e.consignee_name=i.consignee_name,e.consignee_mobile_phone=i.consignee_mobile_phone,e.consignee_address=i.consignee_address,e.regionOptionDate.province.id=i.province,e.regionOptionDate.city.id=i.city,e.regionOptionDate.district.id=i.district,e.regionOptionDate.street.id=i.street,e.regionOptionDate.regionSplic=i.region):e.disabled=!1})},methods:{handelRegionShow:function(){this.regionShow=!this.regionShow,this.$store.dispatch("setRegion",{region:1,level:1})},addInv:function(){var e=this,t=/^((13|14|15|16|17|18|19)[0-9]{1}\d{8})$/,i={id:this.id,company_name:this.company_name,tax_id:this.tax_id,company_address:this.company_address,company_telephone:this.company_telephone,bank_of_deposit:this.bank_of_deposit,bank_account:this.bank_account,consignee_name:this.consignee_name,consignee_mobile_phone:this.consignee_mobile_phone,consignee_address:this.consignee_address,country:1,province:this.regionOptionDate.province.id,city:this.regionOptionDate.city.id,district:this.regionOptionDate.district.id,street:this.regionOptionDate.street.id,invoice_type:1};return""==this.company_name?(Object(c["a"])(this.$t("lang.fill_in_company_name")),!1):""==this.tax_id?(Object(c["a"])(this.$t("lang.fill_in_taxpayer_id_number")),!1):""==this.company_address?(Object(c["a"])(this.$t("lang.fill_in_register_address")),!1):""==this.company_telephone?(Object(c["a"])(this.$t("lang.fill_in_register_tel")),!1):""==this.bank_of_deposit?(Object(c["a"])(this.$t("lang.fill_in_bank_of_deposit")),!1):""==this.consignee_name?(Object(c["a"])(this.$t("lang.fill_in_check_taker_name")),!1):t.test(this.consignee_mobile_phone)?""==this.consignee_address?(Object(c["a"])(this.$t("lang.fill_in_address")),!1):0==this.province?(Object(c["a"])(this.$t("lang.fill_in_province")),!1):0==this.city?(Object(c["a"])(this.$t("lang.fill_in_city")),!1):0==this.district?(Object(c["a"])(this.$t("lang.fill_in_county")),!1):void this.$http.post("".concat(window.ROOT_URL,"api/invoice/store"),h.a.stringify(i)).then(function(t){"success"==t.data.status?c["a"].loading({duration:1e3,message:e.$t("lang.add_vat_invoice_success")},e.$router.push({name:"account"})):Object(c["a"])(e.$t("lang.add_vat_invoice_fail"))}):(Object(c["a"])(this.$t("lang.fill_in_check_taker_mobile")),!1)},editInv:function(){this.disabled=!1},submitInv:function(){var e=this,t={id:this.id,company_name:this.company_name,tax_id:this.tax_id,company_address:this.company_address,company_telephone:this.company_telephone,bank_of_deposit:this.bank_of_deposit,bank_account:this.bank_account,consignee_name:this.consignee_name,consignee_mobile_phone:this.consignee_mobile_phone,consignee_address:this.consignee_address,province:this.regionOptionDate.province.id,city:this.regionOptionDate.city.id,district:this.regionOptionDate.district.id,street:this.regionOptionDate.street.id,invoice_type:1};this.$http.put("".concat(window.ROOT_URL,"api/invoice/update"),h.a.stringify(t)).then(function(t){"success"==t.data.status?c["a"].loading({duration:1e3,message:e.$t("lang.edit_submit_success")},e.$router.push({name:"account"})):Object(c["a"])(e.$t("lang.edit_fail_fill_again"))})},deleteInv:function(){var e=this,t={invoice_type:1,id:this.id};this.$http.delete("".concat(window.ROOT_URL,"api/invoice/destroy"),{params:t}).then(function(t){"success"==t.data.status?c["a"].loading({duration:1e3,message:e.$t("lang.delete_success")},e.$router.push({name:"account"})):Object(c["a"])(e.$t("lang.delete_fail"))})}}},v=f,b=i("2877"),y=Object(b["a"])(v,a,o,!1,null,null,null);y.options.__file="InvForm.vue";t["default"]=y.exports},"0fee":function(e,t,i){},1146:function(e,t,i){},3647:function(e,t,i){"use strict";i("68ef"),i("0fee")},3846:function(e,t,i){i("9e1e")&&"g"!=/./g.flags&&i("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:i("0bfb")})},4917:function(e,t,i){"use strict";var n=i("cb7c"),a=i("9def"),o=i("0390"),s=i("5f1b");i("214f")("match",1,function(e,t,i,c){return[function(i){var n=e(this),a=void 0==i?void 0:i[t];return void 0!==a?a.call(i,n):new RegExp(i)[t](String(n))},function(e){var t=c(i,e,this);if(t.done)return t.value;var r=n(e),l=String(this);if(!r.global)return s(r,l);var d=r.unicode;r.lastIndex=0;var u,p=[],g=0;while(null!==(u=s(r,l))){var h=String(u[0]);p[g]=h,""===h&&(r.lastIndex=o(l,a(r.lastIndex),d)),g++}return 0===g?null:p}]})},"565f":function(e,t,i){"use strict";var n=i("c31d"),a=i("fe7e"),o=i("a142");t["a"]=Object(a["a"])({render:function(){var e,t=this,i=t.$createElement,n=t._self._c||i;return n("cell",{class:t.b((e={error:t.error,disabled:t.$attrs.disabled,"min-height":"textarea"===t.type&&!t.autosize},e["label-"+t.labelAlign]=t.labelAlign,e)),attrs:{icon:t.leftIcon,title:t.label,center:t.center,border:t.border,"is-link":t.isLink,required:t.required}},[t._t("left-icon",null,{slot:"icon"}),t._t("label",null,{slot:"title"}),n("div",{class:t.b("body")},["textarea"===t.type?n("textarea",t._g(t._b({ref:"input",class:t.b("control",t.inputAlign),attrs:{readonly:t.readonly},domProps:{value:t.value}},"textarea",t.$attrs,!1),t.listeners)):n("input",t._g(t._b({ref:"input",class:t.b("control",t.inputAlign),attrs:{type:t.type,readonly:t.readonly},domProps:{value:t.value}},"input",t.$attrs,!1),t.listeners)),t.showClear?n("icon",{class:t.b("clear"),attrs:{name:"clear"},on:{touchstart:function(e){return e.preventDefault(),t.onClear(e)}}}):t._e(),t.$slots.icon||t.icon?n("div",{class:t.b("icon"),on:{click:t.onClickIcon}},[t._t("icon",[n("icon",{attrs:{name:t.icon}})])],2):t._e(),t.$slots.button?n("div",{class:t.b("button")},[t._t("button")],2):t._e()],1),t.errorMessage?n("div",{class:t.b("error-message"),domProps:{textContent:t._s(t.errorMessage)}}):t._e()],2)},name:"field",inheritAttrs:!1,props:{value:[String,Number],icon:String,label:String,error:Boolean,center:Boolean,isLink:Boolean,leftIcon:String,readonly:Boolean,required:Boolean,clearable:Boolean,labelAlign:String,inputAlign:String,onIconClick:Function,autosize:[Boolean,Object],errorMessage:String,type:{type:String,default:"text"},border:{type:Boolean,default:!0}},data:function(){return{focused:!1}},watch:{value:function(){this.$nextTick(this.adjustSize)}},mounted:function(){this.format(),this.$nextTick(this.adjustSize)},computed:{showClear:function(){return this.clearable&&this.focused&&""!==this.value&&this.isDef(this.value)&&!this.readonly},listeners:function(){return Object(n["a"])({},this.$listeners,{input:this.onInput,keypress:this.onKeypress,focus:this.onFocus,blur:this.onBlur})}},methods:{focus:function(){this.$refs.input&&this.$refs.input.focus()},blur:function(){this.$refs.input&&this.$refs.input.blur()},format:function(e){void 0===e&&(e=this.$refs.input);var t=e,i=t.value,n=this.$attrs.maxlength;return this.isDef(n)&&i.length>n&&(i=i.slice(0,n),e.value=i),i},onInput:function(e){this.$emit("input",this.format(e.target))},onFocus:function(e){this.focused=!0,this.$emit("focus",e),this.readonly&&this.blur()},onBlur:function(e){this.focused=!1,this.$emit("blur",e)},onClickIcon:function(){this.$emit("click-icon"),this.onIconClick&&this.onIconClick()},onClear:function(){this.$emit("input",""),this.$emit("clear")},onKeypress:function(e){if("number"===this.type){var t=e.keyCode,i=-1===String(this.value).indexOf("."),n=t>=48&&t<=57||46===t&&i||45===t;n||e.preventDefault()}"search"===this.type&&13===e.keyCode&&this.blur(),this.$emit("keypress",e)},adjustSize:function(){var e=this.$refs.input;if("textarea"===this.type&&this.autosize&&e){e.style.height="auto";var t=e.scrollHeight;if(Object(o["d"])(this.autosize)){var i=this.autosize,n=i.maxHeight,a=i.minHeight;n&&(t=Math.min(t,n)),a&&(t=Math.max(t,a))}t&&(e.style.height=t+"px")}}}})},"66b9":function(e,t,i){"use strict";i("68ef")},"8a58":function(e,t,i){"use strict";i("68ef"),i("4d75")},"8d5a":function(e,t,i){},9718:function(e,t,i){},be7f:function(e,t,i){"use strict";i("68ef"),i("1146")},c194:function(e,t,i){"use strict";i("68ef")},c1ee:function(e,t,i){"use strict";var n=i("9718"),a=i.n(n);a.a},d567:function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===e.navType},attrs:{id:"moveDiv"},on:{touchstart:e.down,touchmove:e.move,touchend:e.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(t){e.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[e._v(e._s(e.$t("lang.home")))])]),"drp"!=e.routerName&&"crowd_funding"!=e.routerName&&"team"!=e.routerName&&"supplier"!=e.routerName&&"presale"!=e.routerName?i("li",{on:{click:function(t){e.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[e._v(e._s(e.$t("lang.search")))])]):e._e(),i("li",{on:{click:function(t){e.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[e._v(e._s(e.$t("lang.category")))])]),i("li",{on:{click:function(t){e.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[e._v(e._s(e.$t("lang.cart")))])]),i("li",{on:{click:function(t){e.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[e._v(e._s(e.$t("lang.personal_center")))])]),"team"==e.routerName?i("li",{on:{click:function(t){e.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[e._v(e._s(e.$t("lang.my_team")))])]):e._e(),"supplier"==e.routerName?i("li",{on:{click:function(t){e.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[e._v(e._s(e.$t("lang.suppliers")))])]):e._e(),e._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:e.handelNav}},[e._v(e._s(e.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===e.navType},on:{click:function(t){return t.stopPropagation(),e.handelShow(t)}}})])},a=[],o=(i("3846"),i("cadf"),i("551c"),i("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var e;this.flags=!0,e=event.touches?event.touches[0]:event,this.position.x=e.clientX,this.position.y=e.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var e,t,i,n;(event.preventDefault(),this.flags)&&(e=event.touches?event.touches[0]:event,t=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=e.clientX-this.position.x,this.ny=e.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(n=t-i-this.yPum>0?t-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(n=t-this.yPum>0?t-this.yPum:0)),moveDiv.style.bottom=n+"px")},end:function(){this.flags=!1},routerLink:function(e){var t=this;"home"==e||"catalog"==e||"search"==e||"user"==e?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==e?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==e?uni.reLaunch({url:"../../pages/category/category"}):"search"==e?uni.reLaunch({url:"../../pages/search/search"}):"user"==e&&uni.reLaunch({url:"../../pages/user/user"}):"search"==e?t.$router.push({name:"search"}):t.$router.push({name:e})}),uni.postMessage({data:{action:"postMessage"}})},100):t.$router.push({name:e})}}}),s=o,c=(i("c1ee"),i("2877")),r=Object(c["a"])(s,n,a,!1,null,null,null);r.options.__file="CommonNav.vue";t["a"]=r.exports},e1c4:function(e,t,i){"use strict";var n=i("8d5a"),a=i.n(n);a.a},e41f:function(e,t,i){"use strict";var n=i("fe7e"),a=i("6605");t["a"]=Object(n["a"])({render:function(){var e,t=this,i=t.$createElement,n=t._self._c||i;return n("transition",{attrs:{name:t.currentTransition}},[t.shouldRender?n("div",{directives:[{name:"show",rawName:"v-show",value:t.value,expression:"value"}],class:t.b((e={},e[t.position]=t.position,e))},[t._t("default")],2):t._e()])},name:"popup",mixins:[a["a"]],props:{transition:String,overlay:{type:Boolean,default:!0},closeOnClickOverlay:{type:Boolean,default:!0},position:{type:String,default:""}},computed:{currentTransition:function(){return this.transition||(""===this.position?"van-fade":"popup-slide-"+this.position)}}})},ea47:function(e,t,i){"use strict";var n=i("fe7e");t["a"]=Object(n["a"])({render:function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("cell-group",{class:e.b()},[e._t("header",[i("cell",{class:e.b("header"),attrs:{icon:e.icon,label:e.desc,title:e.title,value:e.status}})]),i("div",{class:e.b("content")},[e._t("default")],2),e.$slots.footer?i("div",{staticClass:"van-hairline--top",class:e.b("footer")},[e._t("footer")],2):e._e()],2)},name:"panel",props:{icon:String,desc:String,title:String,status:String}})},f27a:function(e,t,i){"use strict";i("e7e5");var n=i("d399"),a=(i("4917"),i("3b2b"),i("a481"),i("cadf"),i("551c"),i("097d"),i("09d6")),o=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",["currency"==e.regionType?[i("van-popup",{attrs:{position:"bottom","close-on-click-overlay":!1},on:{"click-overlay":e.overlay},model:{value:e.display,callback:function(t){e.display=t},expression:"display"}},[i("div",{staticClass:"mod-address-main"},[i("div",{staticClass:"mod-address-head"},[i("div",{staticClass:"mod-address-head-tit box-flex"},[e._v(e._s(e.$t("lang.region_alt")))]),i("i",{staticClass:"iconfont icon-close",on:{click:e.onRegionClose}})]),i("div",{staticClass:"mod-address-body"},[i("ul",{staticClass:"ulAddrTab"},[i("li",{class:{cur:e.regionLevel-1==1},on:{click:function(t){e.tabClickRegion(1,1)}}},[i("span",[e._v(e._s(e.regionOption.province.name?e.regionOption.province.name:e.$t("lang.select")))])]),e.regionOption.province.name?i("li",{class:{cur:e.regionLevel-1==2},on:{click:function(t){e.tabClickRegion(e.regionOption.province.id,2)}}},[i("span",[e._v(e._s(e.regionOption.city.name?e.regionOption.city.name:e.$t("lang.select")))])]):e._e(),e.regionOption.city.name?i("li",{class:{cur:e.regionLevel-1==3},on:{click:function(t){e.tabClickRegion(e.regionOption.city.id,3)}}},[i("span",[e._v(e._s(e.regionOption.district.name?e.regionOption.district.name:e.$t("lang.select")))])]):e._e(),e.regionOption.district.name&&5==e.isLevel?i("li",{class:{cur:e.regionLevel-1==4},on:{click:function(t){e.tabClickRegion(e.regionOption.district.id,4)}}},[i("span",[e._v(e._s(e.regionOption.street.name?e.regionOption.street.name:e.$t("lang.select")))])]):e._e()]),2==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.provinceData,function(t,n){return i("li",{key:n,class:{active:e.regionOption.province.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e(),3==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.cityDate,function(t,n){return i("li",{key:n,class:{active:e.regionOption.city.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e(),4==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.districtDate,function(t,n){return i("li",{key:n,class:{active:e.regionOption.district.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e(),5==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.streetDate,function(t,n){return i("li",{key:n,class:{active:e.regionOption.street.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e()])])])]:e._e(),"goods"==e.regionType?[i("div",{staticClass:"mod-address-main mod-address-main-goods"},[i("div",{staticClass:"mod-address-body"},[i("ul",{staticClass:"ulAddrTab"},[i("li",{class:{cur:e.regionLevel-1==1},on:{click:function(t){e.tabClickRegion(1,1)}}},[i("span",[e._v(e._s(e.regionOption.province.name?e.regionOption.province.name:e.$t("lang.select")))])]),e.regionOption.province.name?i("li",{class:{cur:e.regionLevel-1==2},on:{click:function(t){e.tabClickRegion(e.regionOption.province.id,2)}}},[i("span",[e._v(e._s(e.regionOption.city.name?e.regionOption.city.name:e.$t("lang.select")))])]):e._e(),e.regionOption.city.name?i("li",{class:{cur:e.regionLevel-1==3},on:{click:function(t){e.tabClickRegion(e.regionOption.city.id,3)}}},[i("span",[e._v(e._s(e.regionOption.district.name?e.regionOption.district.name:e.$t("lang.select")))])]):e._e(),e.regionOption.district.name&&5==e.isLevel?i("li",{class:{cur:e.regionLevel-1==4},on:{click:function(t){e.tabClickRegion(e.regionOption.district.id,4)}}},[i("span",[e._v(e._s(e.regionOption.street.name?e.regionOption.street.name:e.$t("lang.select")))])]):e._e()]),2==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.provinceData,function(t,n){return i("li",{key:n,class:{active:e.regionOption.province.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e(),3==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.cityDate,function(t,n){return i("li",{key:n,class:{active:e.regionOption.city.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e(),4==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.districtDate,function(t,n){return i("li",{key:n,class:{active:e.regionOption.district.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e(),5==e.regionLevel?i("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.streetDate,function(t,n){return i("li",{key:n,class:{active:e.regionOption.street.id==t.id},on:{click:function(i){e.childRegion(t.id,t.name,t.level)}}},[e._v(e._s(t.name))])})):e._e()])])]:e._e()],2)},s=[],c=(i("96cf"),i("cb0c")),r=(i("ac6a"),i("88d8")),l=(i("7f7f"),i("8a58"),i("e41f")),d=(i("c5f6"),i("2f62"),{props:{display:{type:Boolean,default:!1},regionOptionDate:{type:Object,default:""},isPrice:{type:Number,default:0},isLevel:{type:Number,default:5},isStorage:{type:Boolean,default:!0},regionType:{type:String,default:"currency"}},data:function(){return{regionOption:this.regionOptionDate,arr:["province","city","district","street"],lat:"",lng:""}},components:Object(r["a"])({},l["a"].name,l["a"]),created:function(){var e={region:1,level:1};this.regionOption.district.id!=this.regionId&&(5==this.isLevel&&this.regionOption.district.id&&(e.region=this.regionOption.district.id,e.level=this.isLevel-1),this.$store.dispatch("setRegion",e))},computed:{regionId:function(){return this.$store.state.region.id},regionLevel:function(){return this.isLevel>this.$store.state.region.level?this.$store.state.region.level:this.isLevel},regionDate:function(){return this.$store.state.region.data},status:{get:function(){return this.$store.state.region.status},set:function(e){this.$store.state.region.status=e}},userRegion:function(){return this.$store.state.userRegion}},methods:{onRegionClose:function(){this.$emit("updateDisplay",!1)},childRegion:function(e,t,i){var n=this;switch(this.isLevel==i?this.status=!0:this.status=!1,i){case 2:this.regionOption.province.id=e,this.regionOption.province.name=t;break;case 3:this.regionOption.city.id=e,this.regionOption.city.name=t;break;case 4:this.regionOption.district.id=e,this.regionOption.district.name=t;break;case 5:this.regionOption.street.id=e,this.regionOption.street.name=t;break;default:break}this.arr.forEach(function(e,t){t+1>i&&(n.regionOption[e].id="",n.regionOption[e].name="")}),this.$store.dispatch("setRegion",{region:e,level:i})},tabClickRegion:function(e,t){var i=this;this.arr.forEach(function(e,n){n+1>t&&(i.regionOption[e].id="",i.regionOption[e].name="")}),this.$store.dispatch("setRegion",{region:e,level:t})},overlay:function(){this.$emit("updateDisplay",!1)},locationMap:function(){var e=Object(c["a"])(regeneratorRuntime.mark(function e(t){var i=this;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:this.$http.get("".concat(window.ROOT_URL,"/api/misc/address2location"),{params:{address:t.replace(/\s*/g,"")}}).then(function(e){var t=e.data;if("success"==t.status){var n=t.data,a={lat:n.lat,lng:n.lng};i.regionOption.postion=a,i.isStorage&&localStorage.setItem("regionOption",JSON.stringify(i.regionOption)),i.$emit("updateRegionDate",i.regionOption),i.$emit("updateDisplay",!1),i.$emit("update:isPrice",1)}else Toast(t.message)});case 1:case"end":return e.stop()}},e,this)}));return function(t){return e.apply(this,arguments)}}()},watch:{status:function(){1==this.status&&(this.regionOption.regionSplic=this.regionOption.province.name+" "+this.regionOption.city.name+" "+this.regionOption.district.name+" "+this.regionOption.street.name,this.locationMap(this.regionOption.regionSplic))}}}),u=d,p=(i("e1c4"),i("2877")),g=Object(p["a"])(u,o,s,!1,null,"2322bad6",null);g.options.__file="Region.vue";var h=g.exports;t["a"]={mixins:[a["a"]],components:{Region:h},data:function(){return{regionShow:!1,regionLoading:!1,regionOptionDate:{province:{id:"",name:""},city:{id:"",name:""},district:{id:"",name:""},street:{id:"",name:""},postion:{lat:"",lng:""},regionSplic:""},docmHeight:0,showHeight:0,isResize:!1,oauthHidden:!0,isGuide:!1,configData:JSON.parse(sessionStorage.getItem("configData")),swipe_height:document.documentElement.clientWidth?document.documentElement.clientWidth:375}},computed:{decimalLength:function(){var e=2;if(this.configData)switch(this.configData.price_format){case"0":e=2;break;case"1":e=2;break;case"2":e=1;break;case"3":e=0;break;case"4":e=1;break;case"5":e=0;break}return e},currencyFormat:function(){return this.configData.currency_format?this.configData.currency_format.replace("%s",""):"¥"},mobile_kefu:function(){return!!this.configData&&this.configData.mobile_kefu},getRegionData:function(){var e=JSON.parse(localStorage.getItem("regionOption")),t=JSON.parse(localStorage.getItem("userRegion"));return e||t},isWeiXin:function(){return a["a"].isWeixinBrowser()},userRegion:function(){return this.$store.state.userRegion},regionSplic:{get:function(){return this.regionOptionDate.regionSplic?this.regionOptionDate.regionSplic:this.$t("lang.select")},set:function(e){this.regionOptionDate=e}}},methods:{updateRadioSel:function(e,t){this.$store.dispatch("updateRadioSel",{modulesIndex:this.modulesIndex,sName:e,newValue:t})},updateText:function(e){isNaN(e.listIndex)||(e.modulesIndex=this.modulesIndex),this.$store.dispatch("updateText",e)},removeList:function(e){this.$store.dispatch("removeList",{modulesIndex:this.modulesIndex,listIndex:e})},addList:function(e){if("imgList"==e){localStorage.getItem("aPicture")&&localStorage.removeItem("aPicture");var t={bShowDialog:!0,currentPage:1,pageSize:12,oneOrMore:"more",bAlbum:!0,modulesIndex:this.modulesIndex,maxLength:this.maxLength,residueLength:this.maxLength-this.onlineData.list.length};this.$store.dispatch("setDialogPicture",t)}else{var i={modulesIndex:this.modulesIndex,url:"",urlCatetory:"",urlName:"",desc:""};this.$store.dispatch("addList",i)}},updateTitleText:function(e,t){var i={modulesIndex:this.modulesIndex,dataNext:"allValue",attrName:e,newValue:t};this.updateText(i)},onChat:function(e,t,i){var o=this;null!=localStorage.getItem("token")?this.$store.dispatch("setChat",{goods_id:e,shop_id:t||0,type:i}).then(function(e){if("success"==e.status){var t=e.data.url;if(t){var i=RegExp(/wpa.qq.com/),s=i.test(t),c=navigator.userAgent,r=!!c.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);if(s){var l=t.indexOf("&uin="),d=t.indexOf("&site="),u=t.substring(l+5,d);r?a["a"].isWeixinBrowser()?window.location.href=t:window.location.href="mqq://im/chat?chat_type=wpa&uin="+u+"&version=1&src_type=web":window.location.href=t}else window.location.href=t}else Object(n["a"])(o.$t("lang.kefu_set_notic"))}else Object(n["a"])(e.errors.message)}):Object(n["a"])(this.$t("lang.login_user_not"))},onresize:function(){var e=this;window.onresize=function(){return function(){e.docmHeight=document.documentElement.clientHeight,e.showHeight=document.body.clientHeight}()}},clickGuide:function(){this.isGuide=!1},handelRegionShow:function(){this.regionShow=!this.regionShow},getRegionShow:function(e){this.regionShow=e},getRegionOptionDate:function(e){this.regionOptionDate=e}}}}}]);