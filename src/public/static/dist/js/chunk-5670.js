(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-5670"],{"0653":function(t,n,u){"use strict";u("68ef")},"232a":function(t,n,u){"use strict";u.r(n);var i,e=function(){var t=this,n=t.$createElement,u=t._self._c||n;return u("div",{staticClass:"con"},[u("div",{staticClass:"con_main"},[u("div",{staticClass:"auction-price"},[u("van-cell-group",{staticClass:"common-cell"},[u("van-cell",{staticClass:"f-04",attrs:{title:t.$t("lang.bid_record"),value:t.auctionLogData.auction_count+t.$t("lang.ren")}})],1),t._l(t.auctionLogData.auction_log,function(n,i){return u("div",{key:i,staticClass:"list bg-color-write"},[u("div",{staticClass:"dis-box "},[u("div",{staticClass:"box-flex f-03 color-3"},[0==i?u("van-tag",{staticClass:"m-r05  br-100 btn-submit",attrs:{type:"danger"}},[t._v(t._s(t.$t("lang.au_bid_ok")))]):u("van-tag",{staticClass:"m-r05  br-100 btn-default",attrs:{type:"danger"}},[t._v(t._s(t.$t("lang.out")))]),u("span",{staticClass:"f-04 color-3"},[t._v(t._s(n.user_name))])],1),u("div",{staticClass:"f-02 color-9"},[t._v(t._s(n.bid_time))])]),u("div",{staticClass:"f-04 color-red",domProps:{innerHTML:t._s(n.bid_price)}})])})],2)]),u("CommonNav")],1)},a=[],s=u("9395"),o=u("88d8"),c=(u("5f1a"),u("a3e2")),r=(u("0653"),u("34e9")),l=(u("7f7f"),u("c194"),u("7744")),v=u("2f62"),f=u("d567"),p=u("6f38"),d={name:"auction-log",components:(i={CommonNav:f["a"],NotCont:p["a"]},Object(o["a"])(i,l["a"].name,l["a"]),Object(o["a"])(i,r["a"].name,r["a"]),Object(o["a"])(i,c["a"].name,c["a"]),i),created:function(){this.$store.dispatch({type:"setAuctionLog",id:this.$route.params.act_id})},computed:Object(s["a"])({},Object(v["c"])({auctionLogData:function(t){return t.auction.auctionLogData}}))},m=d,h=u("2877"),g=Object(h["a"])(m,e,a,!1,null,null,null);g.options.__file="Log.vue";n["default"]=g.exports},3846:function(t,n,u){u("9e1e")&&"g"!=/./g.flags&&u("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:u("0bfb")})},"5f1a":function(t,n,u){"use strict";u("68ef"),u("9b7e")},"6aa9":function(t,n,u){"use strict";u.d(n,"c",function(){return i}),u.d(n,"a",function(){return e}),u.d(n,"b",function(){return a});var i="#f44",e="#1989fa",a="#4b0"},"6f38":function(t,n,u){"use strict";var i=function(){var t=this,n=t.$createElement,u=t._self._c||n;return u("div",{staticClass:"ectouch-notcont"},[t._m(0),t.isSpan?[u("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.not_cont_prompt")))])]:[t._t("spanCon")]],2)},e=[function(){var t=this,n=t.$createElement,i=t._self._c||n;return i("div",{staticClass:"img"},[i("img",{staticClass:"img",attrs:{src:u("b8c9")}})])}],a={props:{isSpan:{type:Boolean,default:!0}},name:"NotCont",data:function(){return{}}},s=a,o=u("2877"),c=Object(o["a"])(s,i,e,!1,null,null,null);c.options.__file="NotCont.vue";n["a"]=c.exports},9718:function(t,n,u){},"9b7e":function(t,n,u){},a3e2:function(t,n,u){"use strict";var i=u("fe7e"),e=u("6aa9"),a="#999",s={danger:e["c"],primary:e["a"],success:e["b"]};n["a"]=Object(i["a"])({render:function(){var t,n=this,u=n.$createElement,i=n._self._c||u;return i("span",{class:[n.b((t={mark:n.mark,plain:n.plain,round:n.round},t[n.size]=n.size,t)),{"van-hairline--surround":n.plain}],style:n.style},[n._t("default")],2)},name:"tag",props:{size:String,type:String,mark:Boolean,color:String,plain:Boolean,round:Boolean},computed:{style:function(){var t,n=this.color||s[this.type]||a,u=this.plain?"color":"backgroundColor";return t={},t[u]=n,t}}})},b8c9:function(t,n){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAACkCAMAAAAe52RSAAABfVBMVEUAAADi4eHu7u7u7u7q6uru7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7r6+vu7u7u7u7u7u7u7u7p6eju7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u6xr63u7u7u7u7u7u7u7u7u7u7u7u6wrqyxr62xr62wrqyxr63u7u6wrqyxr63u7u6wrqyxr62wrqyzsa+wrqyzsa+0srGwrqzu7u7y8vLm5ub29vbx8fHn5+fs7Ozq6urp6enl5eXLy8v09PTh4eHFxcjd3NzU1NfQ0NDw8O/Y2NjDw8PU1NTd3d7FxcXj4+Pa2trOzs7JycnHyMrHx8ewrqzf39/X19bY2t/Iys7k5efb3eLN0NTPz9DT1tvh4+bR09fAwMHS0tLLzNHe4OVSBNVGAAAAUnRSTlMAAu74CAT1/LbqXy8fFA3msVAyEaDCjm/78d7a07+Y1qyUcmpkQhqdVzn68/DGJSLKuop3RRamhUkp03zy4+HONvScivi6PjepgSN3Mm5sYFdKhfmmdgAACwVJREFUeNrt3Odb21YUBvAjeS+82HuPsDeEMNp07x4PDQ+opzyB0EIaSP/2ypA0FCz5ajq0+X3JB+XheX05uq+vMMAnn3yigNtpd7rhqXJbENHyZPM7scEJT5QdG+zwRD3x1X/is//Ed55P/ss+/wmeMOtnX0K72LxT7r3h0a7BfdqC2DvvH1hxdq71BENhCgh9/cVzG7TB5kbP8NCBi563W3od+I7DYbHY+2jX4Oi2O0QS67svTz/7sQPMFd5YHx1w9VkcKOWZnfYvjk16Wiz98y9ORZ89B/NMz3Yf+vt6sTU7vR9Y/0pu7T//spH+y5dgknCwe8RlR2KOPr9zPASSqJenz78Gk3jGh/x2VIrunwlKjvcPp9+AKWxT2yM0qmLxOye9EvPzhZb4HSMrhOF3xgbmUT3XUM8y6G4OcRNaozaGDyyoDd3VMw06m0CcJXiRa/0W1M7ldOu8xTsRx6AF78SgHfWxv/UVBfqxWhAHW8xNMOBC/QzueXULv92HosNxmZtqaa8fdUUHdmy6NJAdG+RP4juBBdTb4Pom6OAF/sMCTfkmRtAA9FYI9DBLo2jg27BEyXbTaIyuWasuA/QCcRQkTAXsaJSRcR/oYAgxLLXjrKCB/N1e0K4TUWJXmhxAQ1m2dkGzdYn4HT1+NJpzFwzSse5C4zk9YAQxPY1mWG1soE82PeKQAetv7XGhWZxLuqefdKF5Rr2gK1vwAM00o+sZhppaQVM9WwuDfjwBNJlrwgp6CY9Z0GyDGyCrcwIIWSdoNN/Qsuw2Ph8gHfydfmyHGR9Im+tdsQGRpQC2xcKk9PjvBvDFZJhodPb6sD1WPBQ0dTRiR5FrkWB0gvvYLp2bzfMvDw8hYp+zG1rymjg65ONjW8OROZK6naCxfbq8FDQXwmEgcDSC7bTWAc0tW2ZIFn9tHttp4IgCDTb6sb3GfKCebdiC7XUwpWH5dw6w3WY21S/+mAXbbX8K1JoawPZTP/3bdmy/gRC8M9e50DkHxDwjKIvloxy2whWT+SaqZR7JOLY7Pjz8w04g1kO3SJZLlrAFNidUM4VHkkK+wCGZRS/cWUDEBSDlG3LIJ2MyQpFlUQ57IuSyscdSTCZfZpGIxW0jWf3wN1/DfUF/i6nIVIVKLoFy+GQhEos8lophpc4hmc5pktn/4fRnuK/bjnKiFUHIC9UiyiklS7FIPPJIPB4r5qNIpt8DBF6efg73TLe6caPFKyEXZVHEcs2x6WQ0FmkmHksIJSTjGLdCK98//0L8CM29FxCksZXzaundC8k1V84ICcn4+SJL/NCNIP7p6akYn3R2RGypyDf+KVaSGQmVDJ+SiB8V6iecjtPz8vQldW/fOUQy7Ek9x2UlxSNNxVPZsyvSzccxYYOWfj39BT6YciGZUjWXikmLSIhHYtmKwCDpM5PWKLhnfQGJsOUkK24ukiLSYqXrHGFz7YJCo71IhDvPZGMRVVKsUEAi81OgzOYAEspl4jGVUPjtfolHWZQyblN4SiQcfb50U01wvCpcOp+J8h/eQd3wKGXYB4r09CEB9q/Li7qQVKsq1K8u/+Dexc9UGZSyqnD4iQ657B+1ZO4sXTxRqZhOn51XX7N38W+S0vH750AJ25ADW/vzIsOlUjFNIifHf2ADW6hwKMUSBCW8B9ga+6qaiKUi2sSymUuWLxYb34l0sXhWYrCZHmWnXBpb495UGlu+NpHIeYVL1/P5DMve5IV6oYzNdIMS7gWS+K+TfCyiVVYcGqacyxXTxTPxTd5ZCZvZAiX2XpAOj9j+2rBXbzkUcYUKj5JWlW08dqL4tXQspTF+iq1csncbZ5JBSYegxCjhvnmiLH6z/8slX2Pr+P2gRFcvEvirVk49ih+LySx1k2vR5Ku7+OVzDiXRoMSgAwn8fnEeiT2IL94MKcn04rVHF0u1It7iOJTWC0rsI1H8t4WH8VPMVfIsIiF6lUxHHkrX/kACoARNGP/hm+UYn6zX6+lU07Xnk0K9Wnp47aT2p+7xLUiCuRR7618nwFhZYLLVTCTVLH5ZSLDVTPbf1+Lli991j49EuDdJ7sHqF4ViSbhpPvm31woPbo3s+QXfpvhsrsr8u7dSWMhfV/jmw4OF6+sr7sE1vDEgfi/hObf28CFaKpsusg8Sfrh29vgae3XJ6h5/niz+q+P0g/jxSCqVkiqtlOhhdXGV16h7fD8iWW+dPOwtpe+BmOQr/eMPIJE/L8opcePXolQzIP6KgzD+uVizmpSOiVrLDko4nyHZu4abuMb4Z8d/IQE/KNFpIa1d1BY/Xq4RtdYIKLFmRxL87XFRi+x5jUECXYof85hyXMwWajwSCIASQRpJsK/rUW3xMfOWRQLDoETIRdhb9ZK24yJbeYMkvgUlwoOIZMfFM23x+SRZ6bpBCWr0mZLalSN/lakRxac3DPk4w5+1XCO+eoljotI9DIEibpqwdgvyvZWKyT9GTIutZcAH+kMuwt66ke2tWLyUiMjlPzsmOip2d4AitkUkwV9mZHrr9vSSL8vkj5fJ4s9SoMyYnfy4KCmVE8oFoXE611a6/Ueg0KSLLH6VEeNLHk8q9SyfL0vHx8JbDltzLoNCHj9h7ZbkVr9Yv0rWozLxM5cGjL7IFuglOy7K9VYqUqzXz+RKN0lSuvM7FCi1/oKodo/lekscHxZTcqVL1FqLu6DYnIssvnxvifu+bOkStdawDxSzrjqI4p+LI9KalqOiPUiBcuMLJL1VK7T8TIDW1upaAhVC/dga97aC6uOLrcVjS9sdoIJ1xoItsCx3VWM1xD8X47Moz6/yb2gEXfLZOZ7hf784FmtX9Q9FCwLDMRzLooxRH6gSdjrkwjNMNMr8fpkvqf3RdCoWrx5zfCLK8ByLUubdNlBnkpZOz0RvMbnrJBtTKXt+/Ya7+zIMS/rbc+S8Q/LpRUzi8rqaS6tyUrm+KImLf0sqv0XD7172SDUvE32PKb05vhaO1cgLl2k+KpLLv7gEqnm7WsYX17/4W+E3VV4lmOitREIqvqXHCur1LLQYntu5jSbUYd7fQJx4B3DElUVuWmrz4RqZP7wCdaLv1z6dlth6XrhtoMWsS3rXjyaiOkgwLJPJMNhUYBM08W31yu38jDgC2sInGpOTTLLYjCtoA23mBuXeMzS+B1o0GpcpXNWFTJnDRxzdVtDIumdHkexL4Jh32weZu+/YbdeyLOJ5XiRUo/jISogCrbwBB7bCijiO4xmSURdjcxwr+mcXKFarZ03uXdpNgXY7g0iKvcXd4nnmHzzP3WJv4UPRSoVpMjpjHaAD63ofGosrFll8ZNFDgR6mt56h+VyzoBNPlwPNNr8HupkdQZM9m5mmQC/WcT+ayrHqAR35ui1oovt/oeQJ3r7+WdDZkrMXzUJPgu52TctPT4ABPKsONAM9DoYIDZmRnx63gTE8Tc9eT2Fy7iwFjM7vnwQDeWcM3T8dg7NgJGp6zYWG6V3doMBY4YlBNIh9xkOB0aw7Q2gIem+aAuPZlof7UH+Ls1YKzED5JldQZ/Yxjw3MYvV09qGeVtwdFJiH2pzsQt30dYesYC6rd21Ap4NVIBimwHTho7ED1G7IvWmDtvBNzeyjNl09S1ZoF2pzamxAw9isNsK3lS+03YWquLbcy1Zou45ld+eA4oXv2v5q2gYfBdt0aHx0AIlZFseCS2H4iFi9RxMziyRd1u/s3vH44OPj250aH17td6AU+nB0bfZouQM+VpRvdy443r21ethP9+J78/6RrsDwt+6NkPfjjf7J/8/fj3J07I6O478AAAAASUVORK5CYII="},c194:function(t,n,u){"use strict";u("68ef")},c1ee:function(t,n,u){"use strict";var i=u("9718"),e=u.n(i);e.a},d567:function(t,n,u){"use strict";var i=function(){var t=this,n=t.$createElement,u=t._self._c||n;return u("div",{staticClass:"sus-nav"},[u("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[u("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[u("ul",[u("li",{on:{click:function(n){t.routerLink("home")}}},[u("i",{staticClass:"iconfont icon-zhuye"}),u("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?u("li",{on:{click:function(n){t.routerLink("search")}}},[u("i",{staticClass:"iconfont icon-search"}),u("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),u("li",{on:{click:function(n){t.routerLink("catalog")}}},[u("i",{staticClass:"iconfont icon-menu"}),u("p",[t._v(t._s(t.$t("lang.category")))])]),u("li",{on:{click:function(n){t.routerLink("cart")}}},[u("i",{staticClass:"iconfont icon-cart"}),u("p",[t._v(t._s(t.$t("lang.cart")))])]),u("li",{on:{click:function(n){t.routerLink("user")}}},[u("i",{staticClass:"iconfont icon-gerenzhongxin"}),u("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?u("li",{on:{click:function(n){t.routerLink("team")}}},[u("i",{staticClass:"iconfont icon-wodetuandui"}),u("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?u("li",{on:{click:function(n){t.routerLink("supplier")}}},[u("i",{staticClass:"iconfont icon-wodetuandui"}),u("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),u("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),u("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(n){return n.stopPropagation(),t.handelShow(n)}}})])},e=[],a=(u("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,n,u,i;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,n=document.documentElement.clientHeight,u=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(i=n-u-this.yPum>0?n-u-this.yPum:0):(u+=rightDiv.clientHeight,this.yPum-u>0&&(i=n-this.yPum>0?n-this.yPum:0)),moveDiv.style.bottom=i+"px")},end:function(){this.flags=!1},routerLink:function(t){var n=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(u){u.plus||u.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?n.$router.push({name:"search"}):n.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):n.$router.push({name:t})}}}),s=a,o=(u("c1ee"),u("2877")),c=Object(o["a"])(s,i,e,!1,null,null,null);c.options.__file="CommonNav.vue";n["a"]=c.exports}}]);