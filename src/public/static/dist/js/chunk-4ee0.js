(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-4ee0"],{"0653":function(t,e,i){"use strict";i("68ef")},"09d6":function(t,e,i){"use strict";i("4917");var n=navigator.userAgent,o=n.indexOf("Android")>-1||n.indexOf("Adr")>-1,s=!!n.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);function a(){return!!/micromessenger/.test(n.toLowerCase())}e["a"]={isWeixinBrowser:a,isAndroid:o,isiOS:s}},"0fed":function(t,e,i){"use strict";var n=i("3e66"),o=i.n(n);o.a},1146:function(t,e,i){},"2f4d":function(t,e,i){"use strict";i.r(e);var n,o=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"store_cont-box",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},[i("div",{staticClass:"store_cont_top"},[i("div",{staticClass:"region_select"},[i("van-cell-group",{staticClass:"van-cell-noleft"},[i("van-cell",{attrs:{title:t.$t("lang.label_region_select"),"is-link":""},on:{click:t.handelRegionShow},model:{value:t.regionSplicFormat,callback:function(e){t.regionSplicFormat=e},expression:"regionSplicFormat"}})],1)],1)]),i("section",{staticClass:"store_cont_warp"},[i("div",{staticClass:"store_list"},[t.storeContent.length>0?i("ul",{staticClass:"new-store-radio"},t._l(t.storeContent,function(e,n){return i("li",{key:n,class:{active:t.store_id==e.id,disabled:0==e.is_stocks},on:{click:function(i){t.storeClick(e.id,e.is_stocks)}}},[i("div",{staticClass:"flow-have-adr padding-all"},[i("div",{staticClass:"f-h-adr-title"},[i("label",[t._v(t._s(e.stores_name)),i("em",[t._v("距您"+t._s(e.distance_format.value)+t._s(e.distance_format.unit))])]),i("span",[i("a",{attrs:{href:"javascript:;"},on:{click:function(i){t.locationMap(e)}}},[i("i",{staticClass:"iconfont icon-location"}),t._v(t._s(t.$t("lang.view_route")))])])]),i("p",{staticClass:"f-h-adr-con t-remark m-top06 store-address-cont"},[t._v("["+t._s(e.address)+" "+t._s(e.stores_address)+"]")])])])})):i("NotCont")],1)]),i("div",{staticClass:"filter-btn store-btn-box"},[i("div",{staticClass:"van-cell-noleft2"},[i("van-cell",{attrs:{title:t.$t("lang.arrival_time"),"is-link":""},on:{click:t.dataShow},model:{value:t.dataTime,callback:function(e){t.dataTime=e},expression:"dataTime"}})],1),i("van-field",{attrs:{label:t.$t("lang.phone_number"),type:"number",placeholder:t.$t("lang.fill_in_mobile")},model:{value:t.mobile,callback:function(e){t.mobile=e},expression:"mobile"}}),i("div",{staticClass:"van-sku-actions"},[i("van-button",{staticClass:"van-button--bottom-action",attrs:{type:"default"},on:{click:t.onClose}},[t._v(t._s(t.$t("lang.close")))]),i("van-button",{staticClass:"van-button--bottom-action",attrs:{type:"primary"},on:{click:t.onStorebtn}},[t._v(t._s(t.$t("lang.immediately_private")))])],1)],1),i("Region",{attrs:{display:t.regionShow,regionOptionDate:t.regionOptionDate,isLevel:4},on:{updateDisplay:t.getRegionShow,updateRegionDate:t.getRegionOptionDate}}),i("van-popup",{staticClass:"show-popup-bottom show-goods-coupon",attrs:{position:"bottom"},model:{value:t.show,callback:function(e){t.show=e},expression:"show"}},[i("van-datetime-picker",{attrs:{type:"datetime"},on:{confirm:t.dataConfirm,cancel:t.dataCancel},model:{value:t.currentDate,callback:function(e){t.currentDate=e},expression:"currentDate"}})],1)],1)},s=[],a=(i("a481"),i("ac6a"),i("88d8")),r=(i("e17f"),i("2241")),c=(i("e7e5"),i("d399")),l=(i("d1cf"),i("ee83")),d=(i("8a58"),i("e41f")),u=(i("66b9"),i("b650")),g=(i("be7f"),i("565f")),h=(i("0653"),i("34e9")),p=(i("7f7f"),i("c194"),i("7744")),f=(i("d49c"),i("5487")),m=(i("cadf"),i("551c"),i("097d"),i("4328")),_=i.n(m),v=i("6f38"),b=i("f990"),O=i("f27a"),y={mixins:[O["a"]],data:function(){return{show:!1,storeContent:[],mobile:"",dataTime:"",minHour:10,maxHour:20,minDate:new Date,maxDate:new Date(2019,10,1),currentDate:new Date,store_id:0,ru_id:this.$route.query.ru_id,rec_id:this.$route.query.rec_id?this.$route.query.rec_id:"",isSingle:this.$route.query.isSingle?this.$route.query.isSingle:"",disabled:!1,page:1,size:10,footerCont:!1,loading:!0}},directives:{WaterfallLower:Object(f["a"])("lower")},components:(n={},Object(a["a"])(n,p["a"].name,p["a"]),Object(a["a"])(n,h["a"].name,h["a"]),Object(a["a"])(n,g["a"].name,g["a"]),Object(a["a"])(n,u["a"].name,u["a"]),Object(a["a"])(n,d["a"].name,d["a"]),Object(a["a"])(n,l["a"].name,l["a"]),Object(a["a"])(n,c["a"].name,c["a"]),Object(a["a"])(n,r["a"].name,r["a"]),Object(a["a"])(n,"NotCont",v["a"]),n),created:function(){var t={};this.getRegionData&&(this.regionOptionDate=this.getRegionData,t=this.rec_id?{province_id:this.regionOptionDate.province.id,city_id:this.regionOptionDate.city.id,district_id:this.regionOptionDate.district.id,street_id:this.regionOptionDate.street.id,goods_id:0,rec_id:this.rec_id,page:this.page,size:this.size,lat:this.getRegionData.postion?this.getRegionData.postion.lat:"",lng:this.getRegionData.postion?this.getRegionData.postion.lng:""}:{province_id:this.regionOptionDate.province.id,city_id:this.regionOptionDate.city.id,district_id:this.regionOptionDate.district.id,street_id:this.regionOptionDate.street.id,goods_id:this.$route.query.id,spec_arr:this.$route.query.attr_id,num:this.$route.query.num,page:this.page,size:this.size,lat:this.getRegionData.postion?this.getRegionData.postion.lat:"",lng:this.getRegionData.postion?this.getRegionData.postion.lng:""},this.storeList(t))},mounted:function(){this.dataTime=b["a"].formatDate(this.minDate)},computed:{isLogin:function(){return null!=localStorage.getItem("token")},regionSplicFormat:function(){return this.regionOptionDate.province.name+" "+this.regionOptionDate.city.name+" "+this.regionOptionDate.district.name}},methods:{storeList:function(t){var e=this;this.$http.get("".concat(window.ROOT_URL,"api/offline-store/list"),{params:t}).then(function(t){var i=t.data;e.page>1?i.data.list.forEach(function(t){e.storeContent.push(t)}):e.storeContent=i.data.list,e.storeContent.forEach(function(t,i){0==i&&0!=t.is_stocks&&(e.store_id=t.id,e.ru_id=t.ru_id)}),e.mobile=i.data.phone?i.data.phone:""})},storeClick:function(t,e){0!=e?this.store_id=t:Object(c["a"])(this.$t("lang.understock"))},handelRegionShow:function(){this.store_id=0,this.regionShow=!this.regionShow},dataShow:function(){this.show=!0},onClose:function(){this.rec_id?this.$router.push({name:"cart"}):this.$router.push({name:"goods",params:{id:this.$route.query.id}})},onStorebtn:function(){var t=this;if(!this.checkMobile())return Object(c["a"])(this.$t("lang.mobile_not_null")),!1;if(""==this.dataTime)return Object(c["a"])(this.$t("lang.fill_in_arrival_time")),!1;if(0==this.store_id)return Object(c["a"])(this.$t("lang.fill_in_store")),!1;if(this.isLogin)this.rec_id?this.$http.post("".concat(window.ROOT_URL,"api/cart/offline/update"),_.a.stringify({rec_id:this.rec_id,store_id:this.store_id,store_mobile:this.mobile,take_time:this.dataTime,num:""})).then(function(e){var i=e.data;0==i.data.error?t.$router.push({name:"checkoutone",query:{stor:1,ru_id:t.ru_id,rec_type:12,store_id:t.store_id,isSingle:t.isSingle,rec_id:t.rec_id}}):Object(c["a"])(i.data.msg)}):this.$store.dispatch("setStoresCart",{goods_id:this.$route.query.id,store_id:this.store_id,num:this.$route.query.num,spec:this.$route.query.attr_id,store_mobile:this.mobile,take_time:this.dataTime,warehouse_id:"0",area_id:"0",parent_id:"0",quick:1,rec_type:12,parent:0}).then(function(e){1==e.data?t.$router.push({name:"checkoutone",query:{stor:1,ru_id:t.ru_id,rec_type:12,store_id:e.store_id,goods_id:t.$route.query.id,spec_arr:t.$route.query.attr_id,num:t.$route.query.num,isSingle:t.isSingle,rec_id:t.rec_id}}):1==e.data.error?Object(c["a"])(e.data.msg):Object(c["a"])(t.$t("lang.private_store_fail"))});else{var e=this.$t("lang.login_user_invalid");this.notLogin(e)}},dataConfirm:function(){this.dataTime=b["a"].formatDate(this.currentDate),this.show=!1},dataCancel:function(){this.show=!1},checkMobile:function(){var t=/^((13|14|15|16|17|18|19)[0-9]{1}\d{8})$/;return!!t.test(this.mobile)},mapRange:function(t,e){var i=this;this.$store.dispatch("setShopMap",{lat:t,lng:e}).then(function(t){"success"==t.status?window.location.href=t.data:Object(c["a"])(i.$t("lang.locate_failure"))})},notLogin:function(t){var e,i=this,n=window.location.href;e=this.rec_id?{rec_id:this.rec_id}:{id:this.$route.query.id,attr_id:this.$route.query.attr_id,num:this.$route.query.num},r["a"].confirm({message:t,className:"text-center"}).then(function(){i.$router.push({name:"login",query:{redirect:{name:"storeGoods",query:e,url:n}}})}).catch(function(){})},loadMore:function(){var t=this;setTimeout(function(){var e={};t.disabled=!0,t.page*t.size==t.storeContent.length&&(t.page++,e=t.rec_id?{province_id:t.regionOptionDate.province.id,city_id:t.regionOptionDate.city.id,district_id:t.regionOptionDate.district.id,street_id:t.regionOptionDate.street.id,goods_id:0,rec_id:t.rec_id,page:t.page,size:t.size,lat:t.getRegionData.postion?t.getRegionData.postion.lat:"",lng:t.getRegionData.postion?t.getRegionData.postion.lng:""}:{province_id:t.regionOptionDate.province.id,city_id:t.regionOptionDate.city.id,district_id:t.regionOptionDate.district.id,street_id:t.regionOptionDate.street.id,goods_id:t.$route.query.id,spec_arr:t.$route.query.attr_id,num:t.$route.query.num,page:t.page,size:t.size,lat:t.getRegionData.postion?t.getRegionData.postion.lat:"",lng:t.getRegionData.postion?t.getRegionData.postion.lng:""},t.storeList(e))},200)},locationMap:function(t){var e=t.address+t.stores_address;e=e.replace(/\s*/g,""),this.$http.get("/ws/geocoder/v1/",{params:{address:e,key:window.sTenKey}}).then(function(t){var i=t.data;if(0==i.status){var n=i.result.location,o=n.lat+","+n.lng,s="https://mapapi.qq.com/web/mapComponents/locationCluster/v/index.html?type=1&keyword="+e+"&center="+o+"&radius=1000&key="+window.sTenKey+"&referer=myapp";window.location.href=s}else Object(c["a"])(i.message)})}},watch:{regionShow:function(){var t={};this.regionShow||(t=this.rec_id?{province_id:this.regionOptionDate.province.id,city_id:this.regionOptionDate.city.id,district_id:this.regionOptionDate.district.id,street_id:this.regionOptionDate.street.id,goods_id:0,rec_id:this.rec_id,page:1,size:10,lat:this.getRegionData.postion?this.getRegionData.postion.lat:"",lng:this.getRegionData.postion?this.getRegionData.postion.lng:""}:{province_id:this.regionOptionDate.province.id,city_id:this.regionOptionDate.city.id,district_id:this.regionOptionDate.district.id,street_id:this.regionOptionDate.street.id,goods_id:this.$route.query.id,spec_arr:this.$route.query.attr_id,num:this.$route.query.num,page:1,size:10,lat:this.getRegionData.postion?this.getRegionData.postion.lat:"",lng:this.getRegionData.postion?this.getRegionData.postion.lng:""},this.storeList(t))},storeContent:function(){this.dscLoading=!1,this.page*this.size==this.storeContent.length?(this.disabled=!1,this.loading=!0):(this.loading=!1,this.footerCont=this.page>1)}}},D=y,$=(i("b183"),i("2877")),k=Object($["a"])(D,o,s,!1,null,null,null);k.options.__file="Goods.vue";e["default"]=k.exports},"3e66":function(t,e,i){},4917:function(t,e,i){"use strict";var n=i("cb7c"),o=i("9def"),s=i("0390"),a=i("5f1b");i("214f")("match",1,function(t,e,i,r){return[function(i){var n=t(this),o=void 0==i?void 0:i[e];return void 0!==o?o.call(i,n):new RegExp(i)[e](String(n))},function(t){var e=r(i,t,this);if(e.done)return e.value;var c=n(t),l=String(this);if(!c.global)return a(c,l);var d=c.unicode;c.lastIndex=0;var u,g=[],h=0;while(null!==(u=a(c,l))){var p=String(u[0]);g[h]=p,""===p&&(c.lastIndex=s(l,o(c.lastIndex),d)),h++}return 0===h?null:g}]})},"565f":function(t,e,i){"use strict";var n=i("c31d"),o=i("fe7e"),s=i("a142");e["a"]=Object(o["a"])({render:function(){var t,e=this,i=e.$createElement,n=e._self._c||i;return n("cell",{class:e.b((t={error:e.error,disabled:e.$attrs.disabled,"min-height":"textarea"===e.type&&!e.autosize},t["label-"+e.labelAlign]=e.labelAlign,t)),attrs:{icon:e.leftIcon,title:e.label,center:e.center,border:e.border,"is-link":e.isLink,required:e.required}},[e._t("left-icon",null,{slot:"icon"}),e._t("label",null,{slot:"title"}),n("div",{class:e.b("body")},["textarea"===e.type?n("textarea",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{readonly:e.readonly},domProps:{value:e.value}},"textarea",e.$attrs,!1),e.listeners)):n("input",e._g(e._b({ref:"input",class:e.b("control",e.inputAlign),attrs:{type:e.type,readonly:e.readonly},domProps:{value:e.value}},"input",e.$attrs,!1),e.listeners)),e.showClear?n("icon",{class:e.b("clear"),attrs:{name:"clear"},on:{touchstart:function(t){return t.preventDefault(),e.onClear(t)}}}):e._e(),e.$slots.icon||e.icon?n("div",{class:e.b("icon"),on:{click:e.onClickIcon}},[e._t("icon",[n("icon",{attrs:{name:e.icon}})])],2):e._e(),e.$slots.button?n("div",{class:e.b("button")},[e._t("button")],2):e._e()],1),e.errorMessage?n("div",{class:e.b("error-message"),domProps:{textContent:e._s(e.errorMessage)}}):e._e()],2)},name:"field",inheritAttrs:!1,props:{value:[String,Number],icon:String,label:String,error:Boolean,center:Boolean,isLink:Boolean,leftIcon:String,readonly:Boolean,required:Boolean,clearable:Boolean,labelAlign:String,inputAlign:String,onIconClick:Function,autosize:[Boolean,Object],errorMessage:String,type:{type:String,default:"text"},border:{type:Boolean,default:!0}},data:function(){return{focused:!1}},watch:{value:function(){this.$nextTick(this.adjustSize)}},mounted:function(){this.format(),this.$nextTick(this.adjustSize)},computed:{showClear:function(){return this.clearable&&this.focused&&""!==this.value&&this.isDef(this.value)&&!this.readonly},listeners:function(){return Object(n["a"])({},this.$listeners,{input:this.onInput,keypress:this.onKeypress,focus:this.onFocus,blur:this.onBlur})}},methods:{focus:function(){this.$refs.input&&this.$refs.input.focus()},blur:function(){this.$refs.input&&this.$refs.input.blur()},format:function(t){void 0===t&&(t=this.$refs.input);var e=t,i=e.value,n=this.$attrs.maxlength;return this.isDef(n)&&i.length>n&&(i=i.slice(0,n),t.value=i),i},onInput:function(t){this.$emit("input",this.format(t.target))},onFocus:function(t){this.focused=!0,this.$emit("focus",t),this.readonly&&this.blur()},onBlur:function(t){this.focused=!1,this.$emit("blur",t)},onClickIcon:function(){this.$emit("click-icon"),this.onIconClick&&this.onIconClick()},onClear:function(){this.$emit("input",""),this.$emit("clear")},onKeypress:function(t){if("number"===this.type){var e=t.keyCode,i=-1===String(this.value).indexOf("."),n=e>=48&&e<=57||46===e&&i||45===e;n||t.preventDefault()}"search"===this.type&&13===t.keyCode&&this.blur(),this.$emit("keypress",t)},adjustSize:function(){var t=this.$refs.input;if("textarea"===this.type&&this.autosize&&t){t.style.height="auto";var e=t.scrollHeight;if(Object(s["d"])(this.autosize)){var i=this.autosize,n=i.maxHeight,o=i.minHeight;n&&(e=Math.min(e,n)),o&&(e=Math.max(e,o))}e&&(t.style.height=e+"px")}}}})},"66b9":function(t,e,i){"use strict";i("68ef")},"7e93":function(t,e,i){},b183:function(t,e,i){"use strict";var n=i("7e93"),o=i.n(n);o.a},be7f:function(t,e,i){"use strict";i("68ef"),i("1146")},f27a:function(t,e,i){"use strict";i("e7e5");var n=i("d399"),o=(i("4917"),i("3b2b"),i("a481"),i("cadf"),i("551c"),i("097d"),i("09d6")),s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",["currency"==t.regionType?[i("van-popup",{attrs:{position:"bottom","close-on-click-overlay":!1},on:{"click-overlay":t.overlay},model:{value:t.display,callback:function(e){t.display=e},expression:"display"}},[i("div",{staticClass:"mod-address-main"},[i("div",{staticClass:"mod-address-head"},[i("div",{staticClass:"mod-address-head-tit box-flex"},[t._v(t._s(t.$t("lang.region_alt")))]),i("i",{staticClass:"iconfont icon-close",on:{click:t.onRegionClose}})]),i("div",{staticClass:"mod-address-body"},[i("ul",{staticClass:"ulAddrTab"},[i("li",{class:{cur:t.regionLevel-1==1},on:{click:function(e){t.tabClickRegion(1,1)}}},[i("span",[t._v(t._s(t.regionOption.province.name?t.regionOption.province.name:t.$t("lang.select")))])]),t.regionOption.province.name?i("li",{class:{cur:t.regionLevel-1==2},on:{click:function(e){t.tabClickRegion(t.regionOption.province.id,2)}}},[i("span",[t._v(t._s(t.regionOption.city.name?t.regionOption.city.name:t.$t("lang.select")))])]):t._e(),t.regionOption.city.name?i("li",{class:{cur:t.regionLevel-1==3},on:{click:function(e){t.tabClickRegion(t.regionOption.city.id,3)}}},[i("span",[t._v(t._s(t.regionOption.district.name?t.regionOption.district.name:t.$t("lang.select")))])]):t._e(),t.regionOption.district.name&&5==t.isLevel?i("li",{class:{cur:t.regionLevel-1==4},on:{click:function(e){t.tabClickRegion(t.regionOption.district.id,4)}}},[i("span",[t._v(t._s(t.regionOption.street.name?t.regionOption.street.name:t.$t("lang.select")))])]):t._e()]),2==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.provinceData,function(e,n){return i("li",{key:n,class:{active:t.regionOption.province.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e(),3==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.cityDate,function(e,n){return i("li",{key:n,class:{active:t.regionOption.city.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e(),4==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.districtDate,function(e,n){return i("li",{key:n,class:{active:t.regionOption.district.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e(),5==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.streetDate,function(e,n){return i("li",{key:n,class:{active:t.regionOption.street.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e()])])])]:t._e(),"goods"==t.regionType?[i("div",{staticClass:"mod-address-main mod-address-main-goods"},[i("div",{staticClass:"mod-address-body"},[i("ul",{staticClass:"ulAddrTab"},[i("li",{class:{cur:t.regionLevel-1==1},on:{click:function(e){t.tabClickRegion(1,1)}}},[i("span",[t._v(t._s(t.regionOption.province.name?t.regionOption.province.name:t.$t("lang.select")))])]),t.regionOption.province.name?i("li",{class:{cur:t.regionLevel-1==2},on:{click:function(e){t.tabClickRegion(t.regionOption.province.id,2)}}},[i("span",[t._v(t._s(t.regionOption.city.name?t.regionOption.city.name:t.$t("lang.select")))])]):t._e(),t.regionOption.city.name?i("li",{class:{cur:t.regionLevel-1==3},on:{click:function(e){t.tabClickRegion(t.regionOption.city.id,3)}}},[i("span",[t._v(t._s(t.regionOption.district.name?t.regionOption.district.name:t.$t("lang.select")))])]):t._e(),t.regionOption.district.name&&5==t.isLevel?i("li",{class:{cur:t.regionLevel-1==4},on:{click:function(e){t.tabClickRegion(t.regionOption.district.id,4)}}},[i("span",[t._v(t._s(t.regionOption.street.name?t.regionOption.street.name:t.$t("lang.select")))])]):t._e()]),2==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.provinceData,function(e,n){return i("li",{key:n,class:{active:t.regionOption.province.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e(),3==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.cityDate,function(e,n){return i("li",{key:n,class:{active:t.regionOption.city.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e(),4==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.districtDate,function(e,n){return i("li",{key:n,class:{active:t.regionOption.district.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e(),5==t.regionLevel?i("ul",{staticClass:"ulAddrList"},t._l(t.regionDate.streetDate,function(e,n){return i("li",{key:n,class:{active:t.regionOption.street.id==e.id},on:{click:function(i){t.childRegion(e.id,e.name,e.level)}}},[t._v(t._s(e.name))])})):t._e()])])]:t._e()],2)},a=[],r=(i("96cf"),i("cb0c")),c=(i("ac6a"),i("88d8")),l=(i("7f7f"),i("8a58"),i("e41f")),d=(i("c5f6"),i("2f62"),{props:{display:{type:Boolean,default:!1},regionOptionDate:{type:Object,default:""},isPrice:{type:Number,default:0},isLevel:{type:Number,default:5},isStorage:{type:Boolean,default:!0},regionType:{type:String,default:"currency"}},data:function(){return{regionOption:this.regionOptionDate,arr:["province","city","district","street"],lat:"",lng:""}},components:Object(c["a"])({},l["a"].name,l["a"]),created:function(){var t={region:1,level:1};this.regionOption.district.id!=this.regionId&&(5==this.isLevel&&this.regionOption.district.id&&(t.region=this.regionOption.district.id,t.level=this.isLevel-1),this.$store.dispatch("setRegion",t))},computed:{regionId:function(){return this.$store.state.region.id},regionLevel:function(){return this.isLevel>this.$store.state.region.level?this.$store.state.region.level:this.isLevel},regionDate:function(){return this.$store.state.region.data},status:{get:function(){return this.$store.state.region.status},set:function(t){this.$store.state.region.status=t}},userRegion:function(){return this.$store.state.userRegion}},methods:{onRegionClose:function(){this.$emit("updateDisplay",!1)},childRegion:function(t,e,i){var n=this;switch(this.isLevel==i?this.status=!0:this.status=!1,i){case 2:this.regionOption.province.id=t,this.regionOption.province.name=e;break;case 3:this.regionOption.city.id=t,this.regionOption.city.name=e;break;case 4:this.regionOption.district.id=t,this.regionOption.district.name=e;break;case 5:this.regionOption.street.id=t,this.regionOption.street.name=e;break;default:break}this.arr.forEach(function(t,e){e+1>i&&(n.regionOption[t].id="",n.regionOption[t].name="")}),this.$store.dispatch("setRegion",{region:t,level:i})},tabClickRegion:function(t,e){var i=this;this.arr.forEach(function(t,n){n+1>e&&(i.regionOption[t].id="",i.regionOption[t].name="")}),this.$store.dispatch("setRegion",{region:t,level:e})},overlay:function(){this.$emit("updateDisplay",!1)},locationMap:function(){var t=Object(r["a"])(regeneratorRuntime.mark(function t(e){var i=this;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:this.$http.get("/ws/geocoder/v1/",{params:{address:e.replace(/\s*/g,""),key:window.sTenKey}}).then(function(t){var e=t.data;if(0==e.status){var n=e.result.location,o={lat:n.lat,lng:n.lng};i.regionOption.postion=o,i.isStorage&&localStorage.setItem("regionOption",JSON.stringify(i.regionOption)),i.$emit("updateRegionDate",i.regionOption),i.$emit("updateDisplay",!1),i.$emit("update:isPrice",1)}else Toast(e.message)});case 1:case"end":return t.stop()}},t,this)}));return function(e){return t.apply(this,arguments)}}()},watch:{status:function(){1==this.status&&(this.regionOption.regionSplic=this.regionOption.province.name+" "+this.regionOption.city.name+" "+this.regionOption.district.name+" "+this.regionOption.street.name,this.locationMap(this.regionOption.regionSplic))}}}),u=d,g=(i("0fed"),i("2877")),h=Object(g["a"])(u,s,a,!1,null,"69109114",null);h.options.__file="Region.vue";var p=h.exports;e["a"]={mixins:[o["a"]],components:{Region:p},data:function(){return{regionShow:!1,regionLoading:!1,regionOptionDate:{province:{id:"",name:""},city:{id:"",name:""},district:{id:"",name:""},street:{id:"",name:""},postion:{lat:"",lng:""},regionSplic:""},docmHeight:0,showHeight:0,isResize:!1,oauthHidden:!0,isGuide:!1,configData:JSON.parse(sessionStorage.getItem("configData")),swipe_height:document.documentElement.clientWidth?document.documentElement.clientWidth:375}},computed:{decimalLength:function(){var t=2;if(this.configData)switch(this.configData.price_format){case"0":t=2;break;case"1":t=2;break;case"2":t=1;break;case"3":t=0;break;case"4":t=1;break;case"5":t=0;break}return t},currencyFormat:function(){return this.configData.currency_format?this.configData.currency_format.replace("%s",""):"¥"},mobile_kefu:function(){return!!this.configData&&this.configData.mobile_kefu},getRegionData:function(){var t=JSON.parse(localStorage.getItem("regionOption")),e=JSON.parse(localStorage.getItem("userRegion"));return t||e},isWeiXin:function(){return o["a"].isWeixinBrowser()},userRegion:function(){return this.$store.state.userRegion},regionSplic:{get:function(){return this.regionOptionDate.regionSplic?this.regionOptionDate.regionSplic:this.$t("lang.select")},set:function(t){this.regionOptionDate=t}}},methods:{updateRadioSel:function(t,e){this.$store.dispatch("updateRadioSel",{modulesIndex:this.modulesIndex,sName:t,newValue:e})},updateText:function(t){isNaN(t.listIndex)||(t.modulesIndex=this.modulesIndex),this.$store.dispatch("updateText",t)},removeList:function(t){this.$store.dispatch("removeList",{modulesIndex:this.modulesIndex,listIndex:t})},addList:function(t){if("imgList"==t){localStorage.getItem("aPicture")&&localStorage.removeItem("aPicture");var e={bShowDialog:!0,currentPage:1,pageSize:12,oneOrMore:"more",bAlbum:!0,modulesIndex:this.modulesIndex,maxLength:this.maxLength,residueLength:this.maxLength-this.onlineData.list.length};this.$store.dispatch("setDialogPicture",e)}else{var i={modulesIndex:this.modulesIndex,url:"",urlCatetory:"",urlName:"",desc:""};this.$store.dispatch("addList",i)}},updateTitleText:function(t,e){var i={modulesIndex:this.modulesIndex,dataNext:"allValue",attrName:t,newValue:e};this.updateText(i)},onChat:function(t,e,i){var s=this;null!=localStorage.getItem("token")?this.$store.dispatch("setChat",{goods_id:t,shop_id:e||0,type:i}).then(function(t){if("success"==t.status){var e=t.data.url;if(e){var i=RegExp(/wpa.qq.com/),a=i.test(e),r=navigator.userAgent,c=!!r.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);if(a){var l=e.indexOf("&uin="),d=e.indexOf("&site="),u=e.substring(l+5,d);c?o["a"].isWeixinBrowser()?window.location.href=e:window.location.href="mqq://im/chat?chat_type=wpa&uin="+u+"&version=1&src_type=web":window.location.href=e}else window.location.href=e}else Object(n["a"])(s.$t("lang.kefu_set_notic"))}else Object(n["a"])(t.errors.message)}):Object(n["a"])(this.$t("lang.login_user_not"))},onresize:function(){var t=this;window.onresize=function(){return function(){t.docmHeight=document.documentElement.clientHeight,t.showHeight=document.body.clientHeight}()}},clickGuide:function(){this.isGuide=!1},handelRegionShow:function(){this.regionShow=!this.regionShow},getRegionShow:function(t){this.regionShow=t},getRegionOptionDate:function(t){this.regionOptionDate=t}}}}}]);