<style>
#noscript {
    display: table;
    float: left;
    height: 85%;
    width: 100%;
}
.noscript-table {
    font-size: 1.4em;
    font-weight: bold;
    font-family: Courier New,Courier,Lucida Sans Typewriter,Lucida Typewriter,monospace;
    display: table-cell; 
    vertical-align: middle; 
    text-align: center;
    border-collapse: collapse;
}
.noscript-table tr td {
    width:33%;
    text-align:left;
    padding:5px;
}
.noscript-td {
    background:#ffc;
    border-top: 2px double red;
    border-bottom: 2px double red;
}
#noscript-td1{
    width:45px;
    text-align: right;
    border-left: 2px double red;
    padding:7px 0px 0px 5px;
}
#noscript-td2{
    width:37%;
    border-right: 2px double red;
}
</style>

<script>
    /* Source: https://github.com/fmpalinkas/web-accessibility-tutorials/wiki/Replacing---%22noscript%22---with-accessible,-unobtrusive-DOM-JavaScript */

    function addLoadEvent(func) {
       var oldonload = window.onload;
       if (typeof window.onload !== "function") {
           window.onload = func;
       } else {
           window.onload = function () {
               if (oldonload) {
                   oldonload();
               }
               func();
           };
       }
    }
    var noscript = addLoadEvent(noscript);
    addLoadEvent(function () { 
    });

    function noscript()
     {
       if (document.removeChild)
         {
           var div = document.getElementById("noscript");
               div.parentNode.removeChild(div);
           document.getElementById("<?php echo MAINDIV; ?>").style.display = "initial";
         }
       else if (document.getElementById)
         {
           document.getElementById("noscript").style.display = "none";
           document.getElementById("<?php echo MAINDIV; ?>").style.display = "initial";
         }
     }
 </script>

<div id="noscript">
    <table class="noscript-table">
    <tr>
        <td></td>
        <td class="noscript-td" id="noscript-td1">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45">
            <g stroke="#ffa300" stroke-width="5.0175">
                <circle fill="#ffffff" cx="22.5" cy="22.5" r="19.2717"/>
                <path d="M22.5,9.423V28.47825M22.5,30.2355V35.57925"/>
            </g>
        </svg>
        </td>
        <td class="noscript-td" id="noscript-td2">Javascript must be enabled to use this site.<br />
        Please enable javascript and reload the page.</td>
        <td></td>
    </tr>
    </table>
</div>