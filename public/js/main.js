   
    //Model select country validation
          
          document.getElementById('ocountry').style.display="none";
          document.getElementById('india').style.display="block";
          document.getElementById('india').setAttribute("required", "");
          document.getElementById('india').setAttribute("name", "mobile");
        
         function selectedCountry(sv){
          
              if(sv == "India+91"){
             document.getElementById('ocountry').style.display="none";
             document.getElementById("ocountry").removeAttribute("required"); 
             document.getElementById('ocountry').removeAttribute("name", "mobile");
             document.getElementById("ocountry").value = '';
             document.getElementById('india').style.display="block";
             document.getElementById("india").setAttribute("required", "");
             document.getElementById('india').setAttribute("name", "mobile");
             
           }else{
             document.getElementById('india').style.display="none";
             document.getElementById("india").removeAttribute("required"); 
             document.getElementById('india').removeAttribute("name", "mobile");
             document.getElementById("india").value = '';
             document.getElementById('ocountry').style.display="block";
             document.getElementById("ocountry").setAttribute("required", "");
             document.getElementById('ocountry').setAttribute("name", "mobile");
           }
        }
