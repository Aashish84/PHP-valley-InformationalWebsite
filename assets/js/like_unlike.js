function like_unlike(control,id){
    str = control.innerHTML;
    if (str== "like"){
        xhr= new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200){
                control.nextSibling.innerHTML = " "+this.responseText + " likes";
                control.innerHTML="unlike";
            }
        };
        xhr.open('get',"../controller/heritages/like.php?id="+id,true);
        xhr.send();  
    }
    else{
        xhr= new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200){
                control.nextSibling.innerHTML = " "+this.responseText + " likes";
                control.innerHTML="like";
            }
        };
        xhr.open('get',"../controller/heritages/unlike.php?id="+id+";",true);
        xhr.send(); 
    }
}

function like_unlike_placetovisit(control,id){
    str = control.innerHTML;
    if (str== "like"){
        xhr= new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200){
                control.nextSibling.innerHTML = " "+this.responseText + " likes";
                control.innerHTML="unlike";
            }
        };
        xhr.open('get',"../controller/placetovisits/like.php?id="+id,true);
        xhr.send();  
    }
    else{
        xhr= new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200){
                control.nextSibling.innerHTML = " "+this.responseText + " likes";
                control.innerHTML="like";
            }
        };
        xhr.open('get',"../controller/placetovisits/unlike.php?id="+id+";",true);
        xhr.send(); 
    }
}