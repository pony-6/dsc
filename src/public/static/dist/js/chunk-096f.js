(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-096f"],{"188d":function(t,e,i){"use strict";i.r(e);var s=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"catalog"},[s("Search"),s("div",{directives:[{name:"show",rawName:"v-show",value:t.cateListAll.length,expression:"cateListAll.length"}],staticClass:"category"},[s("swiper",{ref:"firstCateSwiper",staticClass:"cgl",attrs:{options:t.swiperOption}},[s("swiper-slide",{staticStyle:{height:"auto"}},[s("ul",t._l(t.cateListAll,function(e,i){return s("li",{key:e.cat_id,staticClass:"flex flex-vc",class:{active:t.currentFirstIndex==i},on:{click:function(s){t.bindChangeFirstCate(i,e.cat_id)}}},[s("p",[t._v(t._s(e.cat_name))])])}))])],1),s("div",{staticClass:"cate-swiper-container"},[t.cateListSecond&&t.cateListSecond.length>0&&!t.loading?s("swiper",{ref:"wrapSwiper",staticClass:"cate-swiper-cgr cgr",attrs:{options:t.swiperOption3},on:{setTranslate:t.swiperTouch}},[[s("swiper-slide",{ref:"swiperSlideDome",staticClass:"items",style:{height:"auto","padding-bottom":t.touch_catads?"10.5rem":""}},[t.touch_catads?s("div",{staticClass:"adv"},[t.touch_catads_url?s("a",{attrs:{href:t.touch_catads_url}},[s("img",{staticClass:"img",attrs:{src:t.touch_catads}})]):s("img",{staticClass:"img",attrs:{src:t.touch_catads}})]):t._e(),t._l(t.cateListSecond,function(e,a){return s("div",{key:e.cat_id,staticClass:"item"},[s("div",{staticClass:"tit flex flex-vc flex-hc"},[s("i",{staticClass:"row"}),s("router-link",{attrs:{to:{name:"list",params:{id:e.cat_id},query:{title:e.cat_name}}}},[t._v(t._s(e.cat_name))])],1),s("ul",{staticClass:"flex flex-vc flex-hw"},t._l(e.child,function(e){return s("li",{key:e.cat_id,staticClass:"flex flex-v flex-vc flex-hc"},[s("router-link",{attrs:{to:{name:"list",params:{id:e.cat_id},query:{title:e.cat_name}}}},[e.touch_icon?s("img",{attrs:{src:e.touch_icon}}):s("img",{attrs:{src:i("d9e6")}}),s("span",[t._v(t._s(e.cat_name))])])],1)}))])})],2)]],2):t._e(),s("van-loading",{directives:[{name:"show",rawName:"v-show",value:t.loading,expression:"loading"}],attrs:{color:"black",size:"3rem"}})],1)],1),s("ec-tab-down")],1)},a=[],r=(i("ac6a"),i("9395")),c=i("88d8"),n=(i("7f7f"),i("ac1e"),i("543e")),o=i("2f62"),l=i("6b6e"),u=i("c106"),d=i("7212"),h={name:"catalog",components:Object(c["a"])({EcTabDown:l["a"],Search:u["a"],swiper:d["swiper"],swiperSlide:d["swiperSlide"]},n["a"].name,n["a"]),data:function(){return{currentFirstIndex:0,swiperOption:{direction:"vertical",slidesPerView:"auto",freeMode:!0},swiperOption2:{direction:"vertical"},swiperOption3:{direction:"vertical",slidesPerView:"auto",freeMode:!0,freeModeMomentumBounce:!1,freeModeMomentumVelocityRatio:.5},timer:null,isReady:!0,leg:0,touch_catads:"",touch_catads_url:"",cat_id:0,loading:!0,tabIndex:0}},created:function(){var t=JSON.parse(sessionStorage.getItem("categoryOption"));t&&(this.tabIndex=this.currentFirstIndex=t.index,this.cat_id=t.index),this.$store.dispatch("setCategoryList",{index:this.currentFirstIndex})},mounted:function(){},computed:Object(r["a"])({},Object(o["c"])({cateListAll:function(t){return t.category.cateListAll}}),{cateListSecond:{get:function(){return this.$store.state.category.cateListSecond},set:function(t){this.$store.state.category.cateListSecond=t}},firstCateSwiper:function(){return this.$refs.firstCateSwiper.swiper},wrapSwiper:function(){return this.$refs.wrapSwiper.swiper}}),methods:{swiperTouch:function(t){var e=this.$refs.swiperSlideDome;if(e){var i=parseInt(this.$refs.swiperSlideDome.$el.scrollHeight),s=parseInt(document.documentElement.scrollHeight||document.body.scrollHeight),a=null;a=i>s?i-(s-s/7):s/7,Math.abs(t)>a?this.manualTriggerCate(this.tabIndex+1):t>s/8&&this.manualTriggerCate(this.tabIndex-1)}},manualTriggerCate:function(t){if(!(t<0||t>this.cateListAll.length))for(var e=0;e<this.cateListAll.length;e++)if(e===t){this.bindChangeFirstCate(t,this.cateListAll[e].cat_id);break}},bindChangeFirstCate:function(t,e){this.tabIndex=t,this.loading=!0,this.cat_id=e,this.currentFirstIndex=t;var i={index:t,id:e};sessionStorage.setItem("categoryOption",JSON.stringify(i)),this.$store.dispatch("setCategoryList",{index:t,id:e})},transitionStart:function(){var t=this;this.timer||(this.timer=setTimeout(function(){t.timer=null,t.isReady&&t.wrapSwiper.isBeginning&&"prev"==t.wrapSwiper.swipeDirection&&(t.currentFirstIndex>0?t.currentFirstIndex-=1:t.currentFirstIndex=0,t.cateListAll.forEach(function(e,i){t.currentFirstIndex==i&&(t.bindChangeFirstCate(t.currentFirstIndex,e.cat_id),t.wrapSwiper.slideTo(0))})),t.isReady&&t.wrapSwiper.isEnd&&"next"==t.wrapSwiper.swipeDirection&&(t.currentFirstIndex+=1,t.cateListAll.forEach(function(e,i){t.currentFirstIndex==i&&(t.bindChangeFirstCate(t.currentFirstIndex,e.cat_id),t.wrapSwiper.slideTo(0))}))}))},handelTouchCatads:function(){var t=this;this.cateListAll.forEach(function(e){e.cat_id==t.cat_id&&(t.touch_catads=e.touch_catads,t.touch_catads_url=e.touch_catads_url)})}},watch:{cateListAll:function(){this.cat_id=this.cateListAll[this.currentFirstIndex].cat_id,this.$store.dispatch("setCategoryList",{id:this.cat_id}),this.handelTouchCatads()},cat_id:function(){this.handelTouchCatads()},cateListSecond:function(){this.loading=!1}}},p=h,f=(i("398c"),i("2877")),m=Object(f["a"])(p,s,a,!1,null,null,null);m.options.__file="Catalog.vue";e["default"]=m.exports},"398c":function(t,e,i){"use strict";var s=i("b20a"),a=i.n(s);a.a},ac1e:function(t,e,i){"use strict";i("68ef")},b20a:function(t,e,i){},c106:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("section",{staticClass:"secrch"},[i("form",{on:{submit:function(t){t.preventDefault()}}},[i("div",{staticClass:"secrch-warp"},[t.app||"integration"==t.routeName?t._e():i("div",{staticClass:"back",on:{click:t.onClickLeft}},[i("i",{staticClass:"iconfont icon-back"})]),i("div",{staticClass:"input-text"},[t.isSearch?[i("input",{directives:[{name:"model",rawName:"v-model",value:t.keyword,expression:"keyword"},{name:"focus",rawName:"v-focus"}],staticClass:"j-input-text",attrs:{type:"search",name:"keyword",autocomplete:"off",placeholder:t.placeholder},domProps:{value:t.keyword},on:{keypress:t.search,input:function(e){e.target.composing||(t.keyword=e.target.value)}}})]:[i("input",{staticClass:"j-input-text",attrs:{type:"search",name:"keyword",autocomplete:"off",placeholder:t.placeholder,readonly:"!isSearch"},on:{keypress:t.search,click:t.routeSearch}})],t._m(0)],2),t.isFilter?[i("div",{staticClass:"mode-switch",on:{click:t.viewSwitch}},["small"===t.myMode?[i("i",{staticClass:"iconfont icon-viewlist"})]:[i("i",{staticClass:"iconfont icon-pailie"})]],2)]:[t.isSearch?i("a",{staticClass:"btn-submit search-btn",attrs:{href:"javascript:void(0);"},on:{click:t.secrchBtn}},[t._v(t._s(t.$t("lang.search")))]):t._e()]],2)])])},a=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("label",{staticClass:"search-check"},[i("i",{staticClass:"iconfont icon-search"})])}],r=(i("ac6a"),i("7f7f"),{props:["mode","isFilter","placeholder","placeholderState","app","shopId"],data:function(){return{myMode:this.mode,keyword:"",arr:[]}},created:function(){},directives:{focus:{inserted:function(t){t.focus()}}},computed:{routeName:function(){return this.$route.name},isSearch:function(){return"search"==this.routeName||"integration"==this.routeName}},methods:{getGoodGroup:function(t){var e={},i=0,s=[];return t.forEach(function(t){var a=t.goods_id;e[a]?s[e[a]-1].price.push(t.price):(e[a]=++i,s.push({goods_id:a,price:[t.price]}))}),s},viewSwitch:function(){this.myMode="small"===this.myMode?"medium":"small",this.$emit("getViewSwitch",this.myMode)},search:function(t){13==t.keyCode&&(t.preventDefault(),this.keyword=t.target.value,this.secrchBtn())},secrchBtn:function(){if(this.keyword||1!=this.placeholderState){this.keyword&&this.arr.push(this.keyword);var t=JSON.parse(localStorage.getItem("LatelyKeyword"));t&&(this.arr=this.unique(this.arr.concat(t))),this.arr.length>0&&(localStorage.setItem("LatelyKeyword",JSON.stringify(this.arr)),this.shopId>0?this.$router.push({name:"shopGoodsList",query:{keywords:this.keyword,ru_id:this.shopId}}):this.$router.push({name:"searchList",query:{keywords:this.keyword}}))}else this.shopId>0?this.$router.push({name:"shopGoodsList",query:{keywords:this.placeholder,ru_id:this.shopId}}):this.$router.push({name:"searchList",query:{keywords:this.placeholder}})},onClickLeft:function(){this.$router.go(-1)},routeSearch:function(){this.$router.push({name:"search"})},unique:function(t){for(var e=[],i={},s=0;s<t.length;s++)i[t[s]]||(i[t[s]]=!0,e.push(t[s]));return e},quickSort:function(t){if(t.length<=1)return t;for(var e=Math.floor(t.length/2),i=t.splice(e,1),s=[],a=[],r=0;r<t.length;r++)t[r]<i?s.push(t[r]):a.push(t[r]);return this.quickSort(s).concat(i,this.quickSort(a))}}}),c=r,n=i("2877"),o=Object(n["a"])(c,s,a,!1,null,null,null);o.options.__file="Search.vue";e["a"]=o.exports},d9e6:function(t,e,i){t.exports=i.p+"img/no_image.jpg"}}]);