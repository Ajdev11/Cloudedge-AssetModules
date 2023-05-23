<script type="text/javascript">
    idleTimer1 = null;
    idleState1 = false;
    idleWait1 = 3000000;
         
    $(document).ready(function () {
      $("#user").html(auser);
    
        $('*').bind('mousemove keydown scroll', function () {
        
            clearTimeout(idleTimer1);
                    
            if (idleState1 == true) { 
                
                // Reactivated event
                 //$("body").append("<p>Welcome Back.</p>");            
            }
            
            idleState1 = false;
            
            idleTimer1 = setTimeout(function () { 
                
                // Idle Event
                //signout user
                //alert(sessionStorage.timelev);
            sessionStorage.logoff = "timeout";
            if (sessionStorage.timelev == 1){
              location.href='../../../com/bin/acc/logoff.php';
            }else if (sessionStorage.timelev == 2){
              location.href='../../../../com/bin/acc/logoff.php';
            }else if (sessionStorage.timelev == 3){
              location.href='../../../../../com/bin/acc/logoff.php';
            }



                idleState1 = false; }, idleWait1);
              
        });
        
        $("body").trigger("mousemove");
    
    });

    function cleanup(){
      
  sessionStorage.auser = "";
  sessionStorage.country = "" ;
  sessionStorage.state = "" ;
  sessionStorage.region = "";
  sessionStorage.ogroup = "" ;
  sessionStorage.group = "";
  sessionStorage.district = "";
  sessionStorage.fulname = "";
  sessionStorage.ulev = "";
  sessionStorage.auth = "";
  sessionStorage.year = "";
  sessionStorage.month = "";
  sessionStorage.sessID = 0;
  alert("Session timeout, you are signed out.");
  //location.href='login.php';
    }
</script>