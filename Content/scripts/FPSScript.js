////function MD5CopyPassword() {
////    const elem = document.createElement('textarea');
////    var text = document.getElementById("GeneratedHashString").innerText;
////    const myArray = text.split(":");

////    elem.value = myArray[1];
////    document.body.appendChild(elem);
////    elem.select();
////    document.execCommand('copy');
////    document.body.removeChild(elem);

////}

////function CopyPassword() {

    
////    var copyText = document.getElementById("NewPasswordTextArea");

   
////    copyText.select();

////    copyText.setSelectionRange(0, 99999); /* For mobile devices */

   

////    document.execCommand("copy");

////}

$(document).ready(function() {
    
    var e = document.getElementById("PasswordTypeDropDown").value;
    if(e == "Weak"){
        for(var i = 6; i <= 15; i++) {
            var ddl = document.getElementById("PasswordLengthDropDown");
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddl.options.add(option);
        }
    }

});

$("#PasswordTypeDropDown").change(function(){var e=document.getElementById("PasswordTypeDropDown").value;if(document.getElementById("PasswordLengthDropDown").innerHTML=null,"Weak"==e)for(var n=6;n<=15;n++){var o=document.getElementById("PasswordLengthDropDown");(t=document.createElement("OPTION")).innerHTML=n,t.value=n,o.options.add(t)}else if("Strong"==e){document.getElementById("PasswordLengthDropDown").innerHTML=null;for(n=16;n<=112;n++){o=document.getElementById("PasswordLengthDropDown");(t=document.createElement("OPTION")).innerHTML=n,t.value=n,o.options.add(t)}}else if("Extreme Strong"==e){document.getElementById("PasswordLengthDropDown").innerHTML=null;for(n=256;n<=2048;n*=2){var t;o=document.getElementById("PasswordLengthDropDown");(t=document.createElement("OPTION")).innerHTML=n,t.value=n,o.options.add(t)}}});
$("#ETSCB").change(function(){var e=document.getElementById("IncludeSymbolsCB").checked,d=document.getElementById("IncludeNumbersCB").checked;document.getElementById("ETSCB").checked?1==document.getElementById("IncludeSymbolsCB").checked?(document.getElementById("IncludeSymbolsCB").checked=!1,document.getElementById("IncludeSymbolsCB").disabled=!0,document.getElementById("IncludeNumbersCB").checked=!1,document.getElementById("IncludeNumbersCB").disabled=!0):e&&d&&(document.getElementById("IncludeSymbolsCB").checked=!0,document.getElementById("IncludeSymbolsCB").disabled=!1,document.getElementById("IncludeNumbersCB").checked=!0,document.getElementById("IncludeNumbersCB").disabled=!1):(document.getElementById("IncludeSymbolsCB").checked=!0,document.getElementById("IncludeSymbolsCB").disabled=!1,document.getElementById("IncludeNumbersCB").checked=!0,document.getElementById("IncludeNumbersCB").disabled=!1)});
//FAST-PASSWORD-GEN
$("#GeneratePassword").click(function(){var e="";try{var t="",n=document.getElementById("PasswordLengthDropDown").value,d=document.getElementById("PasswordQuantityDropDown").value,c=document.getElementById("IncludeSymbolsCB").checked,m=document.getElementById("IncludeNumbersCB").checked,a=document.getElementById("ILCCB").checked,r=document.getElementById("IUCCB").checked,u=document.getElementById("ETSCB").checked,o=document.getElementById("ETRCB").checked;t=1==c&&0==u&&0==m&&0==a&&0==r&&0==o?"~!#$%^&*()_+{}|[]:?":0==c&&0==u&&1==m&&0==a&&0==r&&0==o?"0123456789":0==c&&0==u&&0==m&&1==a&&0==r&&0==o?"abcdefghijklmnopqrstuvwxyz":0==c&&0==u&&0==m&&0==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZ":0==c&&1==u&&0==m&&0==a&&0==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz":0==c&&0==u&&0==m&&0==a&&0==r&&1==o?"~!#$%^&*()_+{}|[]:?34689abcdefghijkmnpqrtuvwxyABCDEFGHJKLMNPQRTUVWXY":1==c&&0==u&&1==m&&0==a&&0==r&&0==o?"~!#$%^&*()_+{}|[]:?0123456789":1==c&&0==u&&1==m&&1==a&&0==r&&0==o?"abcdefghijklmnopqrstuvwxyz~!#$%^&*()_+{}|[]:?0123456789":1==c&&0==u&&1==m&&1==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz~!#$%^&*()_+{}|[]:?0123456789":0==c&&0==u&&1==m&&1==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789":0==c&&0==u&&0==m&&1==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz":0==c&&1==u&&0==m&&1==a&&1==r&&1==o?"abcdefghijkmnpqrtuvwxyABCDEFGHJKLMNPQRTUVWXY":1==c&&0==u&&1==m&&1==a&&1==r&&1==o?"~!#$%^&*()_+{}|[]:?34689abcdefghijkmnpqrtuvwxyABCDEFGHJKLMNPQRTUVWXY":1==c&&0==u&&0==m&&1==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz~!#$%^&*()_+{}|[]:?":1==c&&0==u&&1==m&&0==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZ~!#$%^&*()_+{}|[]:?0123456789":1==c&&0==u&&0==m&&0==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZ~!#$%^&*()_+{}|[]:?":1==c&&0==u&&0==m&&1==a&&0==r&&0==o?"abcdefghijkmnpqrtuvwxy~!#$%^&*()_+{}|[]:?":0==c&&0==u&&1==m&&0==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789":0==c&&0==u&&1==m&&1==a&&0==r&&0==o?"abcdefghijkmnpqrtuvwxy0123456789":0==c&&1==u&&0==m&&1==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXYabcdefghijkmnpqrtuvwxy":0==c&&1==u&&0==m&&0==a&&1==r&&0==o?"ABCDEFGHIJKLMNOPQRSTUVWXY":0==c&&1==u&&0==m&&1==a&&0==r&&0==o?"abcdefghijkmnpqrtuvwxy":0==c&&1==u&&0==m&&0==a&&0==r&&1==o?"abcdefghijkmnpqrtuvwxyABCDEFGHJKLMNPQRTUVWXY":1==u?"abcdefghijkmnpqrtuvwxyABCDEFGHJKLMNPQRTUVWXY":"~!#$%^&*()_+{}|[]:?34689abcdefghijkmnpqrtuvwxyABCDEFGHJKLMNPQRTUVWXY";for(var y=0;y<d;y++){var B=RandomStringGen(n,t);e=e.concat(B,"\n")}var g=document.getElementById("Copy");g.value="Copy",g.innerHTML="Copy",g.style.background="rgb(3, 133, 183)",document.getElementById("NewPasswordTextArea").value=e}catch(e){document.getElementById("NewPasswordTextArea").value=e.message}});
//RANDOM STRING GENERATOR
function RandomStringGen(n,r){for(var t="",a=r.length,o=0;o<n;o++)t+=r.charAt(Math.floor(Math.random()*a));return t}
//ONCLICK MD5 GENERATOR
function MDHash5(){var e=MD5(document.getElementById("NewPasswordTextArea").value);e="MD5 :".concat(e);var t=document.getElementById("Copy");t.value="Copy",t.innerHTML="Copy",t.style.background="rgb(3, 133, 183)",document.getElementById("GeneratedHash").innerText=e.toUpperCase()}
//MD5 HASHING FUNCTION
MD5=function(r){function n(r,n){var t,o,e,u,f;return e=2147483648&r,u=2147483648&n,f=(1073741823&r)+(1073741823&n),(t=1073741824&r)&(o=1073741824&n)?2147483648^f^e^u:t|o?1073741824&f?3221225472^f^e^u:1073741824^f^e^u:f^e^u}function t(r,t,o,e,u,f,a){return r=n(r,n(n(t&o|~t&e,u),a)),n(r<<f|r>>>32-f,t)}function o(r,t,o,e,u,f,a){return r=n(r,n(n(t&e|o&~e,u),a)),n(r<<f|r>>>32-f,t)}function e(r,t,o,e,u,f,a){return r=n(r,n(n(t^o^e,u),a)),n(r<<f|r>>>32-f,t)}function u(r,t,o,e,u,f,a){return r=n(r,n(n(o^(t|~e),u),a)),n(r<<f|r>>>32-f,t)}function f(r){var n,t="",o="";for(n=0;3>=n;n++)t+=(o="0"+(o=r>>>8*n&255).toString(16)).substr(o.length-2,2);return t}var a,i,C,c,g,h,d,v,S;for(a=function(r){for(var n,t=r.length,o=16*(((n=t+8)-n%64)/64+1),e=Array(o-1),u=0,f=0;f<t;)u=f%4*8,e[n=(f-f%4)/4]|=r.charCodeAt(f)<<u,f++;return e[n=(f-f%4)/4]|=128<<f%4*8,e[o-2]=t<<3,e[o-1]=t>>>29,e}(r=function(r){r=r.replace(/\r\n/g,"\n");for(var n="",t=0;t<r.length;t++){var o=r.charCodeAt(t);128>o?n+=String.fromCharCode(o):(127<o&&2048>o?n+=String.fromCharCode(o>>6|192):(n+=String.fromCharCode(o>>12|224),n+=String.fromCharCode(o>>6&63|128)),n+=String.fromCharCode(63&o|128))}return n}(r)),h=1732584193,d=4023233417,v=2562383102,S=271733878,r=0;r<a.length;r+=16)i=h,C=d,c=v,g=S,h=t(h,d,v,S,a[r+0],7,3614090360),S=t(S,h,d,v,a[r+1],12,3905402710),v=t(v,S,h,d,a[r+2],17,606105819),d=t(d,v,S,h,a[r+3],22,3250441966),h=t(h,d,v,S,a[r+4],7,4118548399),S=t(S,h,d,v,a[r+5],12,1200080426),v=t(v,S,h,d,a[r+6],17,2821735955),d=t(d,v,S,h,a[r+7],22,4249261313),h=t(h,d,v,S,a[r+8],7,1770035416),S=t(S,h,d,v,a[r+9],12,2336552879),v=t(v,S,h,d,a[r+10],17,4294925233),d=t(d,v,S,h,a[r+11],22,2304563134),h=t(h,d,v,S,a[r+12],7,1804603682),S=t(S,h,d,v,a[r+13],12,4254626195),v=t(v,S,h,d,a[r+14],17,2792965006),h=o(h,d=t(d,v,S,h,a[r+15],22,1236535329),v,S,a[r+1],5,4129170786),S=o(S,h,d,v,a[r+6],9,3225465664),v=o(v,S,h,d,a[r+11],14,643717713),d=o(d,v,S,h,a[r+0],20,3921069994),h=o(h,d,v,S,a[r+5],5,3593408605),S=o(S,h,d,v,a[r+10],9,38016083),v=o(v,S,h,d,a[r+15],14,3634488961),d=o(d,v,S,h,a[r+4],20,3889429448),h=o(h,d,v,S,a[r+9],5,568446438),S=o(S,h,d,v,a[r+14],9,3275163606),v=o(v,S,h,d,a[r+3],14,4107603335),d=o(d,v,S,h,a[r+8],20,1163531501),h=o(h,d,v,S,a[r+13],5,2850285829),S=o(S,h,d,v,a[r+2],9,4243563512),v=o(v,S,h,d,a[r+7],14,1735328473),h=e(h,d=o(d,v,S,h,a[r+12],20,2368359562),v,S,a[r+5],4,4294588738),S=e(S,h,d,v,a[r+8],11,2272392833),v=e(v,S,h,d,a[r+11],16,1839030562),d=e(d,v,S,h,a[r+14],23,4259657740),h=e(h,d,v,S,a[r+1],4,2763975236),S=e(S,h,d,v,a[r+4],11,1272893353),v=e(v,S,h,d,a[r+7],16,4139469664),d=e(d,v,S,h,a[r+10],23,3200236656),h=e(h,d,v,S,a[r+13],4,681279174),S=e(S,h,d,v,a[r+0],11,3936430074),v=e(v,S,h,d,a[r+3],16,3572445317),d=e(d,v,S,h,a[r+6],23,76029189),h=e(h,d,v,S,a[r+9],4,3654602809),S=e(S,h,d,v,a[r+12],11,3873151461),v=e(v,S,h,d,a[r+15],16,530742520),h=u(h,d=e(d,v,S,h,a[r+2],23,3299628645),v,S,a[r+0],6,4096336452),S=u(S,h,d,v,a[r+7],10,1126891415),v=u(v,S,h,d,a[r+14],15,2878612391),d=u(d,v,S,h,a[r+5],21,4237533241),h=u(h,d,v,S,a[r+12],6,1700485571),S=u(S,h,d,v,a[r+3],10,2399980690),v=u(v,S,h,d,a[r+10],15,4293915773),d=u(d,v,S,h,a[r+1],21,2240044497),h=u(h,d,v,S,a[r+8],6,1873313359),S=u(S,h,d,v,a[r+15],10,4264355552),v=u(v,S,h,d,a[r+6],15,2734768916),d=u(d,v,S,h,a[r+13],21,1309151649),h=u(h,d,v,S,a[r+4],6,4149444226),S=u(S,h,d,v,a[r+11],10,3174756917),v=u(v,S,h,d,a[r+2],15,718787259),d=u(d,v,S,h,a[r+9],21,3951481745),h=n(h,i),d=n(d,C),v=n(v,c),S=n(S,g);return(f(h)+f(d)+f(v)+f(S)).toLowerCase()};
//CLIPBOARD COPY
function MD5CopyPassword() { var btn = document.getElementById("Copy"); btn.value="Copied!"; btn.innerHTML="Copied!"; btn.style.background="Gray"; const e = document.createElement("textarea"); const t = document.getElementById("GeneratedHash").innerText.split(":"); e.value = t[1], document.body.appendChild(e), e.select(), document.execCommand("copy"), document.body.removeChild(e) } 
function CopyPassword() { var btn = document.getElementById("Copy"); btn.value="Copied!"; btn.innerHTML="Copied!"; btn.style.background="Gray"; var e = document.getElementById("NewPasswordTextArea"); e.select(), e.setSelectionRange(0, 99999), document.execCommand("copy") }
function SHA1CopyPassword() { const e = document.createElement("textarea"); const t = document.getElementById("GeneratedHashString").innerText.split(":"); e.value = t[1], document.body.appendChild(e), e.select(), document.execCommand("copy"), document.body.removeChild(e) }