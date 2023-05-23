<script type="text/javascript">
    idleTimer = null;
    idleState = false;
    idleWait = 3000;
         //alert("whao");
         var tim = sessionStorage.timelev;
                alert(tim);
    $(document).ready(function () {
      $("#user").html(auser);
    
        $('*').bind('mousemove keydown scroll', function () {
        
            clearTimeout(idleTimer);
                    
            if (idleState == true) { 
                
                // Reactivated event
                 //$("body").append("<p>Welcome Back.</p>");            
            }
            
            idleState = false;
            
            idleTimer = setTimeout(function () { 
                
                // Idle Event
                //signout user
                
            sessionStorage.logoff = "timeout";
            if (sessionStorage.timelev == 1){
              location.href='../../../com/bin/acc/logoff.php';
            }else if(sessionStorage.timelev == 2){
              location.href='../../../../com/bin/acc/logoff.php';
            }


                idleState = true; }, idleWait);
              
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