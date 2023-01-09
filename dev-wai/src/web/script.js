function responsiveNav() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
        function sesja() {
            if (sessionStorage.session_i >= 0)
            {
                 Rodzaje(sessionStorage.session_i);
            }
            
        }
          function fadeIn() {
            $(document).ready(function(){
              $("#wrapper2").fadeIn(300);
            });
          }
          
          function calendar() { 
          
            $(function() { 
                $( "#datepicker" ).datepicker(); 
            }); 
        }        
        function radio() {
          $( "input[type='radio']" ).checkboxradio();
        }
        
        function passwordsIdentity()
        {
          var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                    }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        }

function search_by_title()
{
    const searchInput = document.querySelector("input");
    const title = [...document.getElementsByClassName("opis")];
    const thumbnail = [...document.getElementsByClassName("gallery")];
     
    const searchTitle = text => {
        const currentWord = text.target.value;
        let result = title;
        result = result.filter(title => title.textContent.includes(currentWord));
        for(var i = 0; i < thumbnail.length; i++)
        {
            thumbnail[i].style.display = "none";
        }    
    console.log(result[0]);
    
    for(var i = 0; i < thumbnail.length; i++)
        {
            for(var j = 0; j < thumbnail.length; j++)
            {
                if(result[i] === title[j])
                {
                    thumbnail[j].style.display = "block";
                }
            }  
        }  
    
    }
    
    searchInput.addEventListener('input', searchTitle);
}

         

        
        
        