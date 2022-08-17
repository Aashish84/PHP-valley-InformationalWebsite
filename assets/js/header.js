//responsive icon
function icon_toggle(){
    let a=document.getElementById("nav").style.display;
    if(a=="block"){
        document.getElementById("nav").style.display="none";
        document.getElementById("notice").style.display="none";
    }
    else
        document.getElementById("nav").style.display="block";

}
function notice_toggle(){
    let a=document.getElementById("notice").style.display;
    if(a=="block")
        document.getElementById("notice").style.display="none";
    else
        document.getElementById("notice").style.display="block";

}
document.getElementById("notify").addEventListener("click",notice_toggle);
// //heritage toggle
// function h_toggle(){
//         // document.getElementById("heritage").style.display="block";
//         // if (document.getElementById("placetovisit").style.display!="none")
//         //         document.getElementById("placetovisit").style.display="none";
// }

// //placetovisit toggle
// function p_toggle(){
//         // document.getElementById("placetovisit").style.display="block";
//         // if (document.getElementById("heritage").style.display!="none")
//         //         document.getElementById("heritage").style.display="none";
        
// }