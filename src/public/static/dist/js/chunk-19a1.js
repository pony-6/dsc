(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-19a1"],{1437:function(t,e,i){"use strict";var n=i("8624"),s=i("fe7e"),a=i("f331");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:[t.b(),{"van-hairline--top":t.index}]},[i("cell",t._b({class:t.b("title",{disabled:t.disabled,expanded:t.expanded}),on:{click:t.onClick}},"cell",t.$props,!1),[t._t("title",null,{slot:"title"}),t._t("icon",null,{slot:"icon"}),t._t("value"),t._t("right-icon",null,{slot:"right-icon"})],2),t.inited?i("div",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],ref:"wrapper",class:t.b("wrapper"),on:{transitionend:t.onTransitionEnd}},[i("div",{ref:"content",class:t.b("content")},[t._t("default")],2)]):t._e()],1)},name:"collapse-item",mixins:[a["a"]],props:{name:[String,Number],icon:String,label:String,title:[String,Number],value:[String,Number],disabled:Boolean,border:{type:Boolean,default:!0},isLink:{type:Boolean,default:!0}},data:function(){return{show:null,inited:null}},computed:{items:function(){return this.parent.items},index:function(){return this.items.indexOf(this)},currentName:function(){return this.isDef(this.name)?this.name:this.index},expanded:function(){var t=this;if(!this.parent)return null;var e=this.parent.value;return this.parent.accordion?e===this.currentName:e.some(function(e){return e===t.currentName})}},created:function(){this.findParent("van-collapse"),this.items.push(this),this.show=this.expanded,this.inited=this.expanded},destroyed:function(){this.items.splice(this.index,1)},watch:{expanded:function(t,e){var i=this;null!==e&&(t&&(this.show=!0,this.inited=!0),this.$nextTick(function(){var e=i.$refs,s=e.content,a=e.wrapper;if(s&&a){var o=s.clientHeight+"px";a.style.height=t?0:o,Object(n["a"])(function(){a.style.height=t?o:0})}}))}},methods:{onClick:function(){if(!this.disabled){var t=this.parent,e=t.accordion&&this.currentName===t.value?"":this.currentName,i=!this.expanded;this.parent.switch(e,i)}},onTransitionEnd:function(){this.expanded?this.$refs.wrapper.style.height=null:this.show=!1}}})},2381:function(t,e,i){},"342a":function(t,e,i){"use strict";i("68ef"),i("bff0")},3441:function(t,e,i){"use strict";var n=i("6bab"),s=i.n(n);s.a},"3acc":function(t,e,i){"use strict";var n=i("fe7e");e["a"]=Object(n["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[t._t("default")],2)},name:"checkbox-group",props:{value:Array,disabled:Boolean,max:{type:Number,default:0}},watch:{value:function(t){this.$emit("change",t)}}})},"3c32":function(t,e,i){"use strict";i("68ef"),i("2381")},"417e":function(t,e,i){"use strict";var n=i("fe7e"),s=i("f331");e["a"]=Object(n["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[i("div",{class:[t.b("icon",[t.shape,{disabled:t.isDisabled,checked:t.checked}])],on:{click:t.toggle}},[t._t("icon",[i("icon",{style:t.iconStyle,attrs:{name:"success"}})],{checked:t.checked})],2),t.$slots.default?i("span",{class:t.b("label",t.labelPosition),on:{click:function(e){t.toggle("label")}}},[t._t("default")],2):t._e()])},name:"checkbox",mixins:[s["a"]],props:{name:null,value:null,disabled:Boolean,checkedColor:String,labelPosition:String,labelDisabled:Boolean,shape:{type:String,default:"round"}},computed:{checked:{get:function(){return this.parent?-1!==this.parent.value.indexOf(this.name):this.value},set:function(t){this.parent?this.setParentValue(t):this.$emit("input",t)}},isDisabled:function(){return this.parent&&this.parent.disabled||this.disabled},iconStyle:function(){var t=this.checkedColor;if(t&&this.checked&&!this.isDisabled)return{borderColor:t,backgroundColor:t}}},watch:{value:function(t){this.$emit("change",t)}},created:function(){this.findParent("van-checkbox-group")},methods:{toggle:function(t){this.isDisabled||"label"===t&&this.labelDisabled||(this.checked=!this.checked)},setParentValue:function(t){var e=this.parent,i=e.value.slice();if(t){if(e.max&&i.length>=e.max)return;-1===i.indexOf(this.name)&&(i.push(this.name),e.$emit("input",i))}else{var n=i.indexOf(this.name);-1!==n&&(i.splice(n,1),e.$emit("input",i))}}}})},5246:function(t,e,i){"use strict";i("68ef"),i("8a0b")},"5d17":function(t,e,i){"use strict";i("68ef")},"66b9":function(t,e,i){"use strict";i("68ef")},"6b41":function(t,e,i){"use strict";var n=i("fe7e");e["a"]=Object(n["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"van-hairline--bottom",class:t.b({fixed:t.fixed}),style:t.style},[i("div",{class:t.b("left"),on:{click:function(e){t.$emit("click-left")}}},[t._t("left",[t.leftArrow?i("icon",{class:t.b("arrow"),attrs:{name:"arrow"}}):t._e(),t.leftText?i("span",{class:t.b("text"),domProps:{textContent:t._s(t.leftText)}}):t._e()])],2),i("div",{staticClass:"van-ellipsis",class:t.b("title")},[t._t("title",[t._v(t._s(t.title))])],2),i("div",{class:t.b("right"),on:{click:function(e){t.$emit("click-right")}}},[t._t("right",[t.rightText?i("span",{class:t.b("text"),domProps:{textContent:t._s(t.rightText)}}):t._e()])],2)])},name:"nav-bar",props:{title:String,leftText:String,rightText:String,leftArrow:Boolean,fixed:Boolean,zIndex:{type:Number,default:1}},computed:{style:function(){return{zIndex:this.zIndex}}}})},"6bab":function(t,e,i){},8367:function(t,e,i){"use strict";i.r(e);var n=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"set_meal_content"},[n("header",{staticClass:"header-nav-content"},[n("van-nav-bar",{attrs:{title:t.$t("lang.discount_package"),"left-arrow":""},on:{"click-left":t.onClickLeft}})],1),n("section",{staticClass:"comment-content"},t._l(t.fittingInfo.comboTab,function(e,s){return n("section",{key:s,staticClass:"goods_module_wrap m-top10"},[n("van-collapse",{attrs:{accordion:""},on:{change:t.toggleTab},model:{value:t.currTab,callback:function(e){t.currTab=e},expression:"currTab"}},[n("van-collapse-item",{attrs:{name:e.group_id}},[n("div",{staticClass:"title_box",attrs:{slot:"title"},slot:"title"},[n("div",{staticClass:"title_text"},[n("span",[t._v(t._s(e.text))])])]),n("ul",{staticClass:"goods_list"},[n("li",{staticClass:"goods_item van-hairline--top"},[n("van-checkbox",{attrs:{disabled:t.checkDisabled},model:{value:t.checked,callback:function(e){t.checked=e},expression:"checked"}}),t.fittingInfo.goods.goods_thumb?n("img",{attrs:{src:t.fittingInfo.goods.goods_thumb}}):n("img",{attrs:{src:i("d9e6")}}),n("div",{staticClass:"name_price"},[n("p",[t._v(t._s(t.fittingInfo.goods.goods_name))]),n("currency-price",{attrs:{price:t.fittingInfo.goods.shop_price}})],1)],1),t._l(t.fittingInfo.fittings,function(s,a){return[e.group_id==s.group_id?n("li",{staticClass:"goods_item van-hairline--top",attrs:{index:a}},[n("van-checkbox-group",{model:{value:t.fittingsCheckModel,callback:function(e){t.fittingsCheckModel=e},expression:"fittingsCheckModel"}},[n("van-checkbox",{ref:"checkboxes",refInFor:!0,attrs:{name:s.goods_id}})],1),s.goods_thumb?n("img",{attrs:{src:s.goods_thumb},on:{click:function(e){t.checkboxHandle(s.goods_id,a)}}}):n("img",{attrs:{src:i("d9e6")}}),n("div",{staticClass:"name_price",on:{click:function(e){t.checkboxHandle(s.goods_id,a)}}},[n("p",[t._v(t._s(s.goods_name))]),n("currency-price",{attrs:{price:s.goods_price}})],1)],1):t._e()]})],2)])],1)],1)})),n("footer",{staticClass:"submit_bar van-hairline--top"},[n("div",{staticClass:"left_price"},[n("div",{staticClass:"setmeal_price"},[t._v("套餐价格："),n("span",{domProps:{innerHTML:t._s(t.fittings_minMax)}})]),n("div",{staticClass:"save_price"},[t._v("节省："),n("span",{domProps:{innerHTML:t._s(t.save_minMaxPrice)}})])]),n("van-button",{attrs:{round:""},on:{click:t.fittingsAddCart}},[t._v(t._s(t.$t("lang.add_cart")))])],1)])},s=[],a=(i("6762"),i("2fdb"),i("7514"),i("9395")),o=(i("5246"),i("6b41")),r=(i("3c32"),i("417e")),c=(i("a909"),i("3acc")),l=(i("66b9"),i("b650")),d=(i("e7e5"),i("d399")),u=(i("5d17"),i("f9bd")),f=(i("342a"),i("1437")),h=(i("cadf"),i("551c"),i("097d"),i("2b0e")),g=i("2f62");h["default"].use(o["a"]).use(r["a"]).use(c["a"]).use(l["a"]).use(d["a"]).use(u["a"]).use(f["a"]);var m={props:["id"],data:function(){return{checked:!0,checkDisabled:!0,fittingNames:"",fittingsCheckModel:[],fittings_minMax:0,save_minMaxPrice:0,currTab:""}},computed:Object(a["a"])({},Object(g["c"])({goodsInfo:function(t){return t.goods.goodsInfo},fittingInfo:function(t){return t.goods.fittingInfo},fittingPriceData:function(t){return t.goods.fittingPriceData},shipping_fee:function(t){return t.shopping.shipping_fee},goodsAttrInit:function(t){return t.goods.goodsAttrInit}})),watch:{fittingInfo:"toggleTab",fittingsCheckModel:"fittingsCheckChange"},created:function(){this.goodsInfo.goods_id||this.loadGoodsInfo(),this.getSetMealById(),this.delcartCombo(this.goodsInfo.goods_id)},methods:{onClickLeft:function(){this.$router.go(-1)},getSetMealById:function(){this.$store.dispatch("setFitting",{goods_id:this.id})},toggleTab:function(t){if(t.comboTab)this.fittingNames=this.fittingInfo.comboTab[0].group_id,this.currTab=this.fittingNames;else{if(this.currTab=this.currTab==t?"":t,t==this.fittingNames)return;this.fittingNames=t}},checkboxHandle:function(t,e){this.$refs.checkboxes[e].toggle()},loadGoodsInfo:function(){this.$store.dispatch("setGoodsInfo",{goods_id:this.id,warehouse_id:0,area_id:0,is_delete:0,is_on_sale:1,is_alone_sale:1,parent_id:""})},fittingsAddCart:function(){var t=this;d["a"].loading({duration:0,forbidClick:!0,loadingType:"spinner",message:"加载中..."});var e="m_goods_"+this.fittingNames;this.id;this.$store.dispatch("setAddToCartGroup",{group_name:e,goods_id:this.id,warehouse_id:0,area_id:0,area_city:0,number:1}).then(function(e){var i=e.data;d["a"].clear(),Object(d["a"])(i.msg),0==i.error&&setTimeout(function(){t.$router.push({name:"cart"})},2e3)})},fittingsCheckChange:function(t,e){var i=this;d["a"].loading({duration:0,forbidClick:!0,loadingType:"spinner",message:"加载中..."});var n="m_goods_"+this.fittingNames,s=n+"_"+this.id,a="";if(t.length>e.length){var o=t.find(function(t){return!e.includes(t)});this.fittingInfo.fittings.some(function(t){if(t.id==o)return a=t.goods_attr_id,!0}),this.$store.dispatch("setAddToCartCombo",{goods_id:o,number:1,spec:a,parent_attr:this.goodsAttrInit,warehouse_id:0,area_id:0,area_city:0,parent:this.id,group_id:s,add_group:""}).then(function(t){var e=t.data;d["a"].clear(),0==e.error?(i.save_minMaxPrice=e.save_minMaxPrice,i.fittings_minMax=e.fittings_minMax):Object(d["a"])(e.msg)})}else{var r=e.find(function(e){return!t.includes(e)});this.fittingInfo.fittings.some(function(t){if(t.id==r)return a=t.goods_attr_id,!0}),this.delcartCombo(r,s,a)}},delcartCombo:function(t,e,i){var n=this;this.$store.dispatch("setDelInCartCombo",{goods_id:t,parent:this.id,group_id:e,spec:i,goods_attr:this.goodsAttrInit,warehouse_id:0,area_id:0,area_city:0}).then(function(t){var e=t.data;d["a"].clear(),0==e.error?(n.save_minMaxPrice=e.save_minMaxPrice,n.fittings_minMax=e.fittings_minMax):Object(d["a"])(e.msg)})}}},p=m,b=(i("3441"),i("2877")),_=Object(b["a"])(p,n,s,!1,null,"71904fa3",null);_.options.__file="setMeal.vue";e["default"]=_.exports},8624:function(t,e,i){"use strict";(function(t){i.d(e,"a",function(){return c});var n=i("a142"),s=Date.now();function a(t){var e=Date.now(),i=Math.max(0,16-(e-s)),n=setTimeout(t,i);return s=e+i,n}var o=n["e"]?t:window,r=o.requestAnimationFrame||o.webkitRequestAnimationFrame||a;o.cancelAnimationFrame||o.webkitCancelAnimationFrame||o.clearTimeout;function c(t){return r.call(o,t)}}).call(this,i("c8ba"))},"8a0b":function(t,e,i){},a909:function(t,e,i){"use strict";i("68ef")},bff0:function(t,e,i){},d9e6:function(t,e,i){t.exports=i.p+"img/no_image.jpg"},f331:function(t,e,i){"use strict";e["a"]={data:function(){return{parent:null}},methods:{findParent:function(t){var e=this.$parent;while(e){if(e.$options.name===t){this.parent=e;break}e=e.$parent}}}}},f9bd:function(t,e,i){"use strict";var n=i("fe7e");e["a"]=Object(n["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"van-hairline--top-bottom",class:t.b()},[t._t("default")],2)},name:"collapse",props:{accordion:Boolean,value:[String,Number,Array]},data:function(){return{items:[]}},methods:{switch:function(t,e){this.accordion||(t=e?this.value.concat(t):this.value.filter(function(e){return e!==t})),this.$emit("change",t),this.$emit("input",t)}}})}}]);