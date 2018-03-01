$(document).ready(function(){
  $(".flip").click(function(){
    $(".panel").slideDown("slow");
  });  
});
  
   var agree=0;
   var allc=0;
   var pasc=0;
   
 function check(a)
  {
    var count=0;      
    allc=0;
     
      if((document.getElementById('ln').value=="")&&(count<a))
       {
         document.getElementById('lnbold').innerHTML='*** Required to fill';
         count+=1;
         allc+=1;
       }    
       else if(count<a)
        {
        document.getElementById('lnbold').innerHTML='';
        count+=1;
        } 
		 if((document.getElementById('emn').value=="")&&(count<a))
     {
         document.getElementById('emnbold').innerHTML='*** Required to fill';
         count+=1;
         allc+=1;
     }    
     else if(count<a)
      {
        document.getElementById('emnbold').innerHTML='';
        count+=1;
      } 
           
  }  

 
 
  function emailchecker()
    {
      var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		   if(document.getElementById('emn').value.match(emailExp))
           {   
               document.getElementById('emnbold').innerHTML='';
		       return true;
            }  
		   else
		    {
			 if(document.getElementById('emn').value!="")
               {
               document.getElementById('emnbold').innerHTML='*** Invalid Email address'; 
               element.focus;
                }	 
			  return false; 
            }
    }

  
   
   
  
    function allcheck()
     {
        
        if(allc!=0)
         alert('First Fill all the field correctly'); 
		 
        else
          document.forms["send"].submit();
           
     } 



