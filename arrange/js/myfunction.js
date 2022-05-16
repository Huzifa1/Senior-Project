var is_phone_format_correct=0;
		function checkphone(){
                var p=document.getElementById("phone_number").value;
                var m=document.getElementById("error");
                if (p.match(/^\d{2}\d{6}$/)==null){
                    m.style.color="red";
                    m.innerHTML="Wrong phone format (dddddddd)";
                    is_phone_format_correct=0;
                   
                }else{
                    m.innerHTML="";
                    is_phone_format_correct=1;
					
                }
      }