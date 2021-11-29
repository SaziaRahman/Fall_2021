
function ValidationForm()
{
  
    var y=document.getElementById('lname').value;
    var b=document.getElementById('password').value;
    var c=document.getElementById('fname').value;
    var e=document.getElementById('email').value;
    if(y.length<5)
    {
        document.getElementById('demo2').innerHTML="Last Name Not accepted";
    }
    else
    {
        document.getElementById('demo2').innerHTML= "Okay";
    }

    if(b.length<8)
    {
        document.getElementById('demo3').innerHTML="Password Not accepted";
    }
    else 
    {
        document.getElementById('demo3').innerHTML= "Okay";
    }
    var j=0;
    
    while(j<c.length){
    if((c[j]=="a" || c[j]=="b" || c[j]=="c"|| c[j]=="d"  || c[j]=="e" || c[j]=="f" || c[j]=="g" || c[j]=="h" || c[j]=="i" || c[j]=="j"
    || c[j]=="k"|| c[j]=="l"|| c[j]=="m"|| c[j]=="n"|| c[j]=="o"|| c[j]=="p"|| c[j]=="q"|| c[j]=="r"|| c[j]=="s"|| c[j]=="t"|| c[j]=="u"|| c[j]=="v"
    || c[j]=="w"|| c[j]=="x"|| c[j]=="y"|| c[j]=="z") && c.length>=5)
    {
        
        document.getElementById('demo1').innerHTML= "Okay";
   
        

    }
else 
    {
        document.getElementById('demo1').innerHTML= "Not accepted";
        
    } 
   j++;
    }

    var i=1;
    
    while(i<e.length){
    if(e[i]=="@")
    {
        
        document.getElementById('demo4').innerHTML= "Okay";
   
        

    }
else 
    {
        document.getElementById('demo4').innerHTML= "Not accepted";
        
    } 
   i++;
    }

}
