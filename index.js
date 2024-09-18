(function(){"use strict";function n(i,e,t,o,p,c,g,u){var a=typeof i=="function"?i.options:i;return e&&(a.render=e,a.staticRenderFns=t,a._compiled=!0),{exports:i,options:a}}const s={props:{label:String,value:String,downloadSize:String},data:function(){return{items:[],selectedPhoto:{id:"",photo:"",photographer:"",photographerUrl:"",downloadUrl:""},keyword:"",pexelPage:1,perPage:1,remaining:0,totalResults:0,loading:!1,downloaded:!1}},computed:{pageId(){return this.$store.getters["content/id"]()},pages(){return Math.round(this.totalResults/this.perPage,10)}},methods:{onInput(i){this.keyword=i},onSubmit(i){this.timer!==null&&clearTimeout(this.timer),!(this.keyword.length<3)&&(this.timer=setTimeout(()=>{this.search(this.keyword)},250))},showNext(){this.pexelPage*this.perPage>this.remaining||(this.pexelPage++,this.search(this.keyword))},showPrev(){this.pexelPage!==1&&(this.pexelPage--,this.search(this.keyword))},search(i){this.loading=!0,this.$api.get(`pexels/search/${i}/${this.pexelPage}/${this.downloadSize}`).then(e=>{this.page=e.page,this.perPage=e.perPage,this.remaining=e.remaining,this.totalResults=e.totalResults,this.loading=!1,this.items=e.photos.map(t=>({id:t.id,downloadUrl:t.downloadUrl,link:t.downloadUrl,photographer:t.photographer,photographerUrl:t.photographerUrl,text:`${t.photographer} <br /> ${t.width} × ${t.height}`,options:[{icon:"open",text:"View",link:t.downloadUrl,target:"_blank"},{icon:"download",text:"Download",click:()=>{this.downloadImage(t.id)}}],image:{src:t.small,width:t.width}}))})},downloadImage(i){this.downloaded=!1;const e=this.items.find(o=>o.id===i),t=e.text;e.text="Downloading…",panel.api.post("pexels/download",{imageId:i,pageId:this.pageId.split("?")[0],downloadUrl:e.downloadUrl,photographer:e.photographer,photographerUrl:e.photographerUrl}).then(()=>{this.downloaded=!1,panel.view.reload(),window.panel.notification.success("Image downloaded"),e.text=t}).catch(()=>{this.downloaded=!1,window.panel.notification.error("Image download failed"),e.text=t})}}};var l=function(){var e=this,t=e._self._c;return t("div",{staticClass:"k-pexels-field"},[t("k-field",{attrs:{label:e.label}},[t("k-input",{attrs:{theme:"field",icon:"search",type:"text",name:"textfield",value:e.value},on:{input:e.onInput,keyup:e.onSubmit}})],1),t("div",[e.loading?t("div",{staticClass:"loader"},[t("div",[t("k-icon",{attrs:{type:"loader"}})],1)]):t("div",{staticClass:"imagegrid"},[t("k-collection",{attrs:{layout:"cards",items:e.items}}),e.pages>0?t("div",{staticClass:"prev-next"},[t("button",{staticClass:"k-link k-button",on:{click:e.showPrev}},[t("k-icon",{attrs:{type:"angle-left"}})],1),t("span",[e._v(e._s(e.pexelPage)+" of "+e._s(e.pages))]),t("button",{staticClass:"k-link k-button",on:{click:e.showNext}},[t("k-icon",{attrs:{type:"angle-right"}})],1)]):e._e()],1)])],1)},r=[],d=n(s,l,r);const h=d.exports;panel.plugin("mauricerenck/PexelsImageField",{fields:{pexels:h}})})();