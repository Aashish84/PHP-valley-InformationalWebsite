var total=-(document.getElementsByClassName("slider-wrapper").length * 100 - 100);//end of slider-wrapperr-wrapper
var counter=0;

//next 
function next(){
	if (counter == total){
		counter = 0;
		document.getElementsByClassName("slider-wrapper")[0].style.marginLeft=counter+"%";
	}
	else
	{
		counter-=100;
		document.getElementsByClassName("slider-wrapper")[0].style.marginLeft=counter+"%";
	}
}
//previous 
function prev(){
	if (counter == 0){
		counter = total;
		document.getElementsByClassName("slider-wrapper")[0].style.marginLeft=counter+"%";
	}
	else {
		counter += 100;
		document.getElementsByClassName("slider-wrapper")[0].style.marginLeft=counter+"%";
	}
}
time = 3000;
//automatic slider-wrapperr
var interval;
function startslider(){
	interval=setInterval(next,time);
}

function stopslider(){
	clearInterval(interval);
}

startslider();

document.getElementById("home-banner").addEventListener("mouseover",stopslider);
document.getElementById("home-banner").addEventListener("mouseout",startslider);





//next previous event
// for (i=0;i<document.getElementsByClassName("slider-wrapper").length;i++){
// }
document.getElementsByClassName("prevBtn")[0].addEventListener("click",prev);
document.getElementsByClassName("nextBtn")[0].addEventListener("click",next);

// document.getElementsByClassName("nextBtn")[0].addEventListener("click", function() {
//     alert("hello");
//   });