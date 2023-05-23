		idleTimer = null;
		idleState = false;
		idleWait = 60000;
         //alert("whao");

    $(document).ready(function () {

    
        $('*').bind('mousemove keydown scroll', function () {
        
            clearTimeout(idleTimer);
                    
            if (idleState == true) { 
                
                // Reactivated event
                 //$("body").append("<p>Welcome Back.</p>");            
            }
            
            idleState = false;
            
            idleTimer = setTimeout(function () { 
                
                // Idle Event
                location.href='logout.php'
                $("body").append("<p>You've been idle for " + idleWait/1000 + " seconds.</p>");

                idleState = true; }, idleWait);
            	;
        });
        
        $("body").trigger("mousemove");
    
    });
