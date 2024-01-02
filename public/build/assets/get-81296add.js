import{m as y,s as l,n as d,o as f,q as A,r as w,t as b,u as _,v as N,w as D,x as c,y as i,z as C,D as P,f as B,E as x,G as O,H as E,J as S,K as G,M as T,N as U,O as W,Q as I,R as $,U as q,V as L,W as Q,X as V,Y,Z as j,_ as z,$ as X,a0 as F,a1 as H,a2 as J,a3 as K,a4 as Z,a5 as tt,a6 as et,a7 as at,a8 as st,a9 as nt,aa as rt,ab as dt,ac as lt,ad as it,ae as ot,af as ut}from"./vendor-a1812e4c.js";const v="/",o=y.create({baseURL:v,withCredentials:!0});y.defaults.withCredentials=!0;y.defaults.baseURL=v;class R{getByName(t){return o.get("/api/v1/preferences/"+t)}getByNameNow(t){return o.get("/api/v1/preferences/"+t)}postByName(t,a){return o.post("/api/v1/preferences",{name:t,data:a})}}class k{post(t,a){let s="/api/v1/preferences";return o.post(s,{name:t,data:a})}}function gt(e,t=null){return new R().getByName(e).then(s=>Promise.resolve(m(e,s))).catch(()=>{new k().post(e,t).then(u=>Promise.resolve(m(e,u)))})}function m(e,t){return t.data.data.attributes.data}function h(e,t=null){const a=window.store.get("cacheValid");if(a&&window.hasOwnProperty(e))return Promise.resolve(window[e]);const s=window.store.get(e);return a&&typeof s<"u"?Promise.resolve(s):new R().getByName(e).then(g=>Promise.resolve(M(e,g))).catch(()=>{new k().post(e,t).then(n=>Promise.resolve(M(e,n)))})}function M(e,t){let a=t.data.data.attributes.data;return window.store.set(e,a),a}function ct(e,t){let a,s;switch(e){case"last365":a=l(c(t,365)),s=d(t);break;case"last90":a=l(c(t,90)),s=d(t);break;case"last30":a=l(c(t,30)),s=d(t);break;case"last7":a=l(c(t,7)),s=d(t);break;case"YTD":a=D(t),s=d(t);break;case"QTD":a=f(t),s=d(t);break;case"MTD":a=w(t),s=d(t);break;case"1D":a=l(t),s=d(t);break;case"1W":a=l(_(t,{weekStartsOn:1})),s=d(N(t,{weekStartsOn:1}));break;case"1M":a=l(w(t)),s=d(b(t));break;case"3M":a=l(f(t)),s=d(A(t));break;case"6M":t.getMonth()<=5&&(a=new Date(t),a.setMonth(0),a.setDate(1),a=l(a),s=new Date(t),s.setMonth(5),s.setDate(30),s=d(a)),t.getMonth()>5&&(a=new Date(t),a.setMonth(6),a.setDate(1),a=l(a),s=new Date(t),s.setMonth(11),s.setDate(31),s=d(a));break;case"1Y":a=new Date(t),a.setMonth(0),a.setDate(1),a=l(a),s=new Date(t),s.setMonth(11),s.setDate(31),s=d(s);break}return{start:a,end:s}}i.addPlugin(C);window.bootstrapped=!1;window.store=i;gt("lastActivity").then(e=>{const t=i.get("lastActivity");i.set("cacheValid",t===e),i.set("lastActivity",e),console.log("Server value: "+e),console.log("Local value:  "+t),console.log("Cache valid:  "+(t===e))}).then(()=>{Promise.all([h("viewRange"),h("darkMode"),h("locale"),h("language")]).then(e=>{if(!i.get("start")||!i.get("end")){const a=ct(e[0],new Date);i.set("start",a.start),i.set("end",a.end)}window.__localeId__=e[2],i.set("language",e[3]),i.set("locale",e[3]);const t=new Event("firefly-iii-bootstrapped");document.dispatchEvent(t),window.bootstrapped=!0})});window.axios=y;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";window.Alpine=P;const p={bg:x,cs:O,da:E,de:S,el:G,enGB:T,enUS:U,es:W,ca:I,fi:$,fr:q,hu:L,id:Q,it:V,ja:Y,ko:j,nb:z,nn:X,nl:F,pl:H,ptBR:J,pt:K,ro:Z,ru:tt,sk:et,sl:at,sv:st,tr:nt,uk:rt,vi:dt,zhTW:lt,zhCN:it};function r(e,t="PP"){let a=window.__localeId__.replace("_","");return B(e,t,{locale:p[a]??p[a.slice(0,2)]??p.enUS})}const ht=()=>({range:{start:null,end:null},defaultRange:{start:null,end:null},language:"en_US",init(){this.range={start:new Date(window.store.get("start")),end:new Date(window.store.get("end"))},this.defaultRange={start:new Date(window.store.get("start")),end:new Date(window.store.get("end"))},this.language=window.store.get("language"),this.locale=window.store.get("locale"),this.locale=this.locale==="equal"?this.language:this.locale,window.__localeId__=this.language,this.buildDateRange(),window.store.observe("start",e=>{this.range.start=new Date(e)}),window.store.observe("end",e=>{this.range.end=new Date(e),this.buildDateRange()})},buildDateRange(){let e=this.getNextRange(),t=this.getPrevRange(),a=this.lastDays(7),s=this.lastDays(30),u=this.mtd(),g=this.ytd(),n=document.getElementsByClassName("daterange-holder")[0];n.textContent=r(this.range.start)+" - "+r(this.range.end),n.setAttribute("data-start",r(this.range.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(this.range.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-current")[0],n.textContent=r(this.defaultRange.start)+" - "+r(this.defaultRange.end),n.setAttribute("data-start",r(this.defaultRange.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(this.defaultRange.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-next")[0],n.textContent=r(e.start)+" - "+r(e.end),n.setAttribute("data-start",r(e.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(e.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-prev")[0],n.textContent=r(t.start)+" - "+r(t.end),n.setAttribute("data-start",r(t.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(t.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-7d")[0],n.setAttribute("data-start",r(a.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(a.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-90d")[0],n.setAttribute("data-start",r(s.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(s.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-mtd")[0],n.setAttribute("data-start",r(u.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(u.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-ytd")[0],n.setAttribute("data-start",r(g.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(g.end,"yyyy-MM-dd"))},getNextRange(){let e=w(this.range.start),t=ot(e,1),a=b(t);return{start:t,end:a}},getPrevRange(){let e=w(this.range.start),t=ut(e,1),a=b(t);return{start:t,end:a}},ytd(){let e=new Date;return{start:D(this.range.start),end:e}},mtd(){let e=new Date;return{start:w(this.range.start),end:e}},lastDays(e){let t=new Date;return{start:c(t,e),end:t}},changeDateRange(e){e.preventDefault();let t=e.currentTarget,a=new Date(t.getAttribute("data-start")),s=new Date(t.getAttribute("data-end"));return window.store.set("start",a),window.store.set("end",s),!1}});function yt(e,t){let a=window.__localeId__.replace("_","-");return Intl.NumberFormat(a,{style:"currency",currency:t}).format(e)}async function pt(e,t){{t=t.replace("-","_");const s=await(await fetch(`./v2/i18n/${t}.json`)).json();e.store(s)}}let bt=class{list(t){return o.get("/api/v2/subscriptions",{params:t})}paid(t){return o.get("/api/v2/subscriptions/sum/paid",{params:t})}unpaid(t){return o.get("/api/v2/subscriptions/sum/unpaid",{params:t})}};class mt{list(t){return o.get("/api/v2/piggy-banks",{params:t})}}export{bt as G,k as P,o as a,mt as b,ht as d,yt as f,h as g,pt as l};