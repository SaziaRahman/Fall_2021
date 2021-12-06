function MyAjaxFunc()
{
    var name=document.getElementById('f_name').value;
    var xhttp= new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
        document.getElementById('demo1').innerHTML= this.responseText;
    }
    else{
        document.getElementById('demo1').innerHTML= this.status;
    }
};
xhttp.open("GET","/Example/FTLabExam.php?f_name="+name,true)
xhttp.send();
}