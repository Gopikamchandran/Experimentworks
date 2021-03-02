
//jquery code for dynamic functioning in separate pages 
$(document).ready(function() {
  $("#reg").click(function() {
    $("#login-form").toggle();
  });
});
$(document).ready(function() {
  $("#log").click(function() {
    $("#login-form").toggle();
  });
});
//jquery code for password strngthening
function checkStrength()
{
    var pass1 = document.getElementById('rpassword');
    //var pass2 = document.getElementById('pass2');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 
    if(pass1.value.length < 6)//display message when password validation is not satisfied
    {
        /*pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;*/
         message.innerHTML = " you have to enter at least 6 characters!"
        return;
       
    }
    else
    {
    message.innerHTML = "strongpassword!"
        return;
        /*pass1.style.backgroundColor = badColor;
        message.style.color = badColor;*/
       
    }
  }
   