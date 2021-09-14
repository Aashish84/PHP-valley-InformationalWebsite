function notification(){
    const a=document.getElementsByClassName("notify-list")[0].style.width;
    if(a=="0px"){
        document.getElementsByClassName("notify-list")[0].style.width="calc(200px + 10vw)";
        document.getElementsByClassName("badge")[0].style.backgroundColor="#000";
    }
    else
        document.getElementsByClassName("notify-list")[0].style.width="0px";

}


function icon_toggle(){
    const a=document.getElementsByClassName("navbar-links")[0].style.width;
    if(a=="auto" || a=="calc(200px + 10vw)")
        document.getElementsByClassName("navbar-links")[0].style.width="0px";
    else
        document.getElementsByClassName("navbar-links")[0].style.width="calc(200px + 10vw)";
}
document.getElementsByClassName("navbar-icon")[0].addEventListener("click",icon_toggle);

var  notify_no =0;
if(document.getElementById("h-n-list")){
    notify_no+=document.getElementById("h-n-list").getElementsByTagName("li").length
}
if(document.getElementById("pv-n-list")){
    notify_no+=document.getElementById("pv-n-list").getElementsByTagName("li").length
}

if(notify_no==0)
    document.getElementsByClassName("badge")[0].innerHTML="";
else
    document.getElementsByClassName("badge")[0].innerHTML="&nbsp;"+notify_no+"&nbsp;";

    document.getElementsByClassName("notify")[0].addEventListener("click",notification);
