(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-1bb2","chunk-9d0c"],{"09d6":function(e,i,t){"use strict";t("4917");var n=navigator.userAgent,o=n.indexOf("Android")>-1||n.indexOf("Adr")>-1,s=!!n.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);function a(){return!!/micromessenger/.test(n.toLowerCase())}i["a"]={isWeixinBrowser:a,isAndroid:o,isiOS:s}},"3e7c":function(e,i,t){"use strict";var n,o=function(){var e=this,i=e.$createElement,t=e._self._c||i;return t("header",{staticClass:"goods-shop-info padding-all"},[t("section",{staticClass:"dis-box"},[t("div",{staticClass:"g-s-i-img",on:{click:function(i){e.shopDetail(e.shopInfo[e.index].ru_id)}}},[t("img",{staticClass:"img",attrs:{src:e.shopInfo[e.index].logo}})]),t("div",{staticClass:"g-s-i-title box-flex",on:{click:function(i){e.shopDetail(e.shopInfo[e.index].ru_id)}}},[t("h3",[e._v(e._s(e.shopInfo[e.index].shopName)),t("van-icon",{attrs:{name:"shop"}})],1),t("p",[e._v(e._s(e.$t("lang.collection_one"))+" "),t("span",[e._v(e._s(e.shopInfo[e.index].count_gaze))]),e._v(" "+e._s(e.$t("lang.collection_two")))])]),t("div",{staticClass:"g-s-info-add"},[t("a",{class:{active:0==e.shopInfo[e.index].is_collect_shop},attrs:{href:"javascript:void(0);"},on:{click:function(i){e.collectHandle(e.shopInfo[e.index].ru_id)}}},[1==e.shopInfo[e.index].is_collect_shop?t("span",[e._v(e._s(e.$t("lang.followed")))]):t("span",[e._v(e._s(e.$t("lang.did_not_concern")))])])])]),e.shopScore?[t("div",{staticClass:"goods-shop-score dis-box"},[t("p",{staticClass:"box-flex"},[t("label",{staticClass:"fl"},[e._v(e._s(e.$t("lang.goods")))]),t("span",{staticClass:"color-red margin-lr fl"},[e._v(e._s(e.shopInfo[e.index].commentrank))]),t("em",{staticClass:"em-promotion fl"},[e._v(e._s(e.shopInfo[e.index].commentrank_font))])]),t("p",{staticClass:"box-flex"},[t("label",{staticClass:"fl"},[e._v(e._s(e.$t("lang.service")))]),t("span",{staticClass:"color-low margin-lr fl"},[e._v(e._s(e.shopInfo[e.index].commentserver))]),t("em",{staticClass:"em-promotion em-p-low fl"},[e._v(e._s(e.shopInfo[e.index].commentserver_font))])]),t("p",{staticClass:"box-flex"},[t("label",{staticClass:"fl"},[e._v(e._s(e.$t("lang.commentdelivery")))]),t("span",{staticClass:"color-center margin-lr fl"},[e._v(e._s(e.shopInfo[e.index].commentdelivery))]),t("em",{staticClass:"em-promotion em-p-center fl"},[e._v(e._s(e.shopInfo[e.index].commentdelivery_font))])])])]:e._e()],2)},s=[],a=(t("ac6a"),t("88d8")),r=(t("c3a6"),t("ad06")),c=(t("7f7f"),t("e17f"),t("2241")),l=(t("cadf"),t("551c"),t("097d"),{props:["shopInfo","index","shopScore"],data:function(){return{distance:!1}},components:(n={},Object(a["a"])(n,c["a"].name,c["a"]),Object(a["a"])(n,r["a"].name,r["a"]),n),created:function(){},computed:{isLogin:function(){return null!=localStorage.getItem("token")},shopCollectStatue:function(){return this.$store.state.user.shopCollectStatue},is_collect_shop:function(){return this.shopInfo[this.index].is_collect_shop},ru_id:function(){return this.shopInfo[this.index].ru_id}},methods:{shopDetail:function(e){this.$router.push({name:"shopHome",params:{id:e}})},collectHandle:function(e){if(this.isLogin)this.$store.dispatch("setCollectShop",{ru_id:e,status:this.is_collect_shop});else{var i=this.$t("lang.fill_in_user_collect_goods");this.notLogin(i)}},notLogin:function(e){var i=this;c["a"].confirm({message:e,className:"text-center"}).then(function(){i.$router.push({path:"/login",query:{redirect:{name:"shopDetail",params:{id:i.ru_id}}}})}).catch(function(){})}},watch:{shopCollectStatue:function(){var e=this;this.shopCollectStatue.forEach(function(i){i.id==e.ru_id&&e.$emit("update",{is_collect_shop:i.status})})}}}),d=l,u=t("2877"),g=Object(u["a"])(d,o,s,!1,null,null,null);g.options.__file="ShopHeader.vue";i["a"]=g.exports},4917:function(e,i,t){"use strict";var n=t("cb7c"),o=t("9def"),s=t("0390"),a=t("5f1b");t("214f")("match",1,function(e,i,t,r){return[function(t){var n=e(this),o=void 0==t?void 0:t[i];return void 0!==o?o.call(t,n):new RegExp(t)[i](String(n))},function(e){var i=r(t,e,this);if(i.done)return i.value;var c=n(e),l=String(this);if(!c.global)return a(c,l);var d=c.unicode;c.lastIndex=0;var u,g=[],p=0;while(null!==(u=a(c,l))){var h=String(u[0]);g[p]=h,""===h&&(c.lastIndex=s(l,o(c.lastIndex),d)),p++}return 0===p?null:g}]})},"8a58":function(e,i,t){"use strict";t("68ef"),t("4d75")},"8d5a":function(e,i,t){},c3a6:function(e,i,t){"use strict";t("68ef")},e1c4:function(e,i,t){"use strict";var n=t("8d5a"),o=t.n(n);o.a},e41f:function(e,i,t){"use strict";var n=t("fe7e"),o=t("6605");i["a"]=Object(n["a"])({render:function(){var e,i=this,t=i.$createElement,n=i._self._c||t;return n("transition",{attrs:{name:i.currentTransition}},[i.shouldRender?n("div",{directives:[{name:"show",rawName:"v-show",value:i.value,expression:"value"}],class:i.b((e={},e[i.position]=i.position,e))},[i._t("default")],2):i._e()])},name:"popup",mixins:[o["a"]],props:{transition:String,overlay:{type:Boolean,default:!0},closeOnClickOverlay:{type:Boolean,default:!0},position:{type:String,default:""}},computed:{currentTransition:function(){return this.transition||(""===this.position?"van-fade":"popup-slide-"+this.position)}}})},f27a:function(e,i,t){"use strict";t("e7e5");var n=t("d399"),o=(t("4917"),t("3b2b"),t("a481"),t("cadf"),t("551c"),t("097d"),t("09d6")),s=function(){var e=this,i=e.$createElement,t=e._self._c||i;return t("div",["currency"==e.regionType?[t("van-popup",{attrs:{position:"bottom","close-on-click-overlay":!1},on:{"click-overlay":e.overlay},model:{value:e.display,callback:function(i){e.display=i},expression:"display"}},[t("div",{staticClass:"mod-address-main"},[t("div",{staticClass:"mod-address-head"},[t("div",{staticClass:"mod-address-head-tit box-flex"},[e._v(e._s(e.$t("lang.region_alt")))]),t("i",{staticClass:"iconfont icon-close",on:{click:e.onRegionClose}})]),t("div",{staticClass:"mod-address-body"},[t("ul",{staticClass:"ulAddrTab"},[t("li",{class:{cur:e.regionLevel-1==1},on:{click:function(i){e.tabClickRegion(1,1)}}},[t("span",[e._v(e._s(e.regionOption.province.name?e.regionOption.province.name:e.$t("lang.select")))])]),e.regionOption.province.name?t("li",{class:{cur:e.regionLevel-1==2},on:{click:function(i){e.tabClickRegion(e.regionOption.province.id,2)}}},[t("span",[e._v(e._s(e.regionOption.city.name?e.regionOption.city.name:e.$t("lang.select")))])]):e._e(),e.regionOption.city.name?t("li",{class:{cur:e.regionLevel-1==3},on:{click:function(i){e.tabClickRegion(e.regionOption.city.id,3)}}},[t("span",[e._v(e._s(e.regionOption.district.name?e.regionOption.district.name:e.$t("lang.select")))])]):e._e(),e.regionOption.district.name&&5==e.isLevel?t("li",{class:{cur:e.regionLevel-1==4},on:{click:function(i){e.tabClickRegion(e.regionOption.district.id,4)}}},[t("span",[e._v(e._s(e.regionOption.street.name?e.regionOption.street.name:e.$t("lang.select")))])]):e._e()]),2==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.provinceData,function(i,n){return t("li",{key:n,class:{active:e.regionOption.province.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e(),3==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.cityDate,function(i,n){return t("li",{key:n,class:{active:e.regionOption.city.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e(),4==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.districtDate,function(i,n){return t("li",{key:n,class:{active:e.regionOption.district.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e(),5==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.streetDate,function(i,n){return t("li",{key:n,class:{active:e.regionOption.street.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e()])])])]:e._e(),"goods"==e.regionType?[t("div",{staticClass:"mod-address-main mod-address-main-goods"},[t("div",{staticClass:"mod-address-body"},[t("ul",{staticClass:"ulAddrTab"},[t("li",{class:{cur:e.regionLevel-1==1},on:{click:function(i){e.tabClickRegion(1,1)}}},[t("span",[e._v(e._s(e.regionOption.province.name?e.regionOption.province.name:e.$t("lang.select")))])]),e.regionOption.province.name?t("li",{class:{cur:e.regionLevel-1==2},on:{click:function(i){e.tabClickRegion(e.regionOption.province.id,2)}}},[t("span",[e._v(e._s(e.regionOption.city.name?e.regionOption.city.name:e.$t("lang.select")))])]):e._e(),e.regionOption.city.name?t("li",{class:{cur:e.regionLevel-1==3},on:{click:function(i){e.tabClickRegion(e.regionOption.city.id,3)}}},[t("span",[e._v(e._s(e.regionOption.district.name?e.regionOption.district.name:e.$t("lang.select")))])]):e._e(),e.regionOption.district.name&&5==e.isLevel?t("li",{class:{cur:e.regionLevel-1==4},on:{click:function(i){e.tabClickRegion(e.regionOption.district.id,4)}}},[t("span",[e._v(e._s(e.regionOption.street.name?e.regionOption.street.name:e.$t("lang.select")))])]):e._e()]),2==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.provinceData,function(i,n){return t("li",{key:n,class:{active:e.regionOption.province.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e(),3==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.cityDate,function(i,n){return t("li",{key:n,class:{active:e.regionOption.city.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e(),4==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.districtDate,function(i,n){return t("li",{key:n,class:{active:e.regionOption.district.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e(),5==e.regionLevel?t("ul",{staticClass:"ulAddrList"},e._l(e.regionDate.streetDate,function(i,n){return t("li",{key:n,class:{active:e.regionOption.street.id==i.id},on:{click:function(t){e.childRegion(i.id,i.name,i.level)}}},[e._v(e._s(i.name))])})):e._e()])])]:e._e()],2)},a=[],r=(t("96cf"),t("cb0c")),c=(t("ac6a"),t("88d8")),l=(t("7f7f"),t("8a58"),t("e41f")),d=(t("c5f6"),t("2f62"),{props:{display:{type:Boolean,default:!1},regionOptionDate:{type:Object,default:""},isPrice:{type:Number,default:0},isLevel:{type:Number,default:5},isStorage:{type:Boolean,default:!0},regionType:{type:String,default:"currency"}},data:function(){return{regionOption:this.regionOptionDate,arr:["province","city","district","street"],lat:"",lng:""}},components:Object(c["a"])({},l["a"].name,l["a"]),created:function(){var e={region:1,level:1};this.regionOption.district.id!=this.regionId&&(5==this.isLevel&&this.regionOption.district.id&&(e.region=this.regionOption.district.id,e.level=this.isLevel-1),this.$store.dispatch("setRegion",e))},computed:{regionId:function(){return this.$store.state.region.id},regionLevel:function(){return this.isLevel>this.$store.state.region.level?this.$store.state.region.level:this.isLevel},regionDate:function(){return this.$store.state.region.data},status:{get:function(){return this.$store.state.region.status},set:function(e){this.$store.state.region.status=e}},userRegion:function(){return this.$store.state.userRegion}},methods:{onRegionClose:function(){this.$emit("updateDisplay",!1)},childRegion:function(e,i,t){var n=this;switch(this.isLevel==t?this.status=!0:this.status=!1,t){case 2:this.regionOption.province.id=e,this.regionOption.province.name=i;break;case 3:this.regionOption.city.id=e,this.regionOption.city.name=i;break;case 4:this.regionOption.district.id=e,this.regionOption.district.name=i;break;case 5:this.regionOption.street.id=e,this.regionOption.street.name=i;break;default:break}this.arr.forEach(function(e,i){i+1>t&&(n.regionOption[e].id="",n.regionOption[e].name="")}),this.$store.dispatch("setRegion",{region:e,level:t})},tabClickRegion:function(e,i){var t=this;this.arr.forEach(function(e,n){n+1>i&&(t.regionOption[e].id="",t.regionOption[e].name="")}),this.$store.dispatch("setRegion",{region:e,level:i})},overlay:function(){this.$emit("updateDisplay",!1)},locationMap:function(){var e=Object(r["a"])(regeneratorRuntime.mark(function e(i){var t=this;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:this.$http.get("".concat(window.ROOT_URL,"/api/misc/address2location"),{params:{address:i.replace(/\s*/g,"")}}).then(function(e){var i=e.data;if("success"==i.status){var n=i.data,o={lat:n.lat,lng:n.lng};t.regionOption.postion=o,t.isStorage&&localStorage.setItem("regionOption",JSON.stringify(t.regionOption)),t.$emit("updateRegionDate",t.regionOption),t.$emit("updateDisplay",!1),t.$emit("update:isPrice",1)}else Toast(i.message)});case 1:case"end":return e.stop()}},e,this)}));return function(i){return e.apply(this,arguments)}}()},watch:{status:function(){1==this.status&&(this.regionOption.regionSplic=this.regionOption.province.name+" "+this.regionOption.city.name+" "+this.regionOption.district.name+" "+this.regionOption.street.name,this.locationMap(this.regionOption.regionSplic))}}}),u=d,g=(t("e1c4"),t("2877")),p=Object(g["a"])(u,s,a,!1,null,"2322bad6",null);p.options.__file="Region.vue";var h=p.exports;i["a"]={mixins:[o["a"]],components:{Region:h},data:function(){return{regionShow:!1,regionLoading:!1,regionOptionDate:{province:{id:"",name:""},city:{id:"",name:""},district:{id:"",name:""},street:{id:"",name:""},postion:{lat:"",lng:""},regionSplic:""},docmHeight:0,showHeight:0,isResize:!1,oauthHidden:!0,isGuide:!1,configData:JSON.parse(sessionStorage.getItem("configData")),swipe_height:document.documentElement.clientWidth?document.documentElement.clientWidth:375}},computed:{decimalLength:function(){var e=2;if(this.configData)switch(this.configData.price_format){case"0":e=2;break;case"1":e=2;break;case"2":e=1;break;case"3":e=0;break;case"4":e=1;break;case"5":e=0;break}return e},currencyFormat:function(){return this.configData.currency_format?this.configData.currency_format.replace("%s",""):"¥"},mobile_kefu:function(){return!!this.configData&&this.configData.mobile_kefu},getRegionData:function(){var e=JSON.parse(localStorage.getItem("regionOption")),i=JSON.parse(localStorage.getItem("userRegion"));return e||i},isWeiXin:function(){return o["a"].isWeixinBrowser()},userRegion:function(){return this.$store.state.userRegion},regionSplic:{get:function(){return this.regionOptionDate.regionSplic?this.regionOptionDate.regionSplic:this.$t("lang.select")},set:function(e){this.regionOptionDate=e}}},methods:{updateRadioSel:function(e,i){this.$store.dispatch("updateRadioSel",{modulesIndex:this.modulesIndex,sName:e,newValue:i})},updateText:function(e){isNaN(e.listIndex)||(e.modulesIndex=this.modulesIndex),this.$store.dispatch("updateText",e)},removeList:function(e){this.$store.dispatch("removeList",{modulesIndex:this.modulesIndex,listIndex:e})},addList:function(e){if("imgList"==e){localStorage.getItem("aPicture")&&localStorage.removeItem("aPicture");var i={bShowDialog:!0,currentPage:1,pageSize:12,oneOrMore:"more",bAlbum:!0,modulesIndex:this.modulesIndex,maxLength:this.maxLength,residueLength:this.maxLength-this.onlineData.list.length};this.$store.dispatch("setDialogPicture",i)}else{var t={modulesIndex:this.modulesIndex,url:"",urlCatetory:"",urlName:"",desc:""};this.$store.dispatch("addList",t)}},updateTitleText:function(e,i){var t={modulesIndex:this.modulesIndex,dataNext:"allValue",attrName:e,newValue:i};this.updateText(t)},onChat:function(e,i,t){var s=this;null!=localStorage.getItem("token")?this.$store.dispatch("setChat",{goods_id:e,shop_id:i||0,type:t}).then(function(e){if("success"==e.status){var i=e.data.url;if(i){var t=RegExp(/wpa.qq.com/),a=t.test(i),r=navigator.userAgent,c=!!r.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);if(a){var l=i.indexOf("&uin="),d=i.indexOf("&site="),u=i.substring(l+5,d);c?o["a"].isWeixinBrowser()?window.location.href=i:window.location.href="mqq://im/chat?chat_type=wpa&uin="+u+"&version=1&src_type=web":window.location.href=i}else window.location.href=i}else Object(n["a"])(s.$t("lang.kefu_set_notic"))}else Object(n["a"])(e.errors.message)}):Object(n["a"])(this.$t("lang.login_user_not"))},onresize:function(){var e=this;window.onresize=function(){return function(){e.docmHeight=document.documentElement.clientHeight,e.showHeight=document.body.clientHeight}()}},clickGuide:function(){this.isGuide=!1},handelRegionShow:function(){this.regionShow=!this.regionShow},getRegionShow:function(e){this.regionShow=e},getRegionOptionDate:function(e){this.regionOptionDate=e}}}}}]);