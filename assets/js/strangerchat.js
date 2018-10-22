$( "#finduser").click(function() {
    getStranger();
  });

  function getStranger(){
    $("#loadingmessage").show();
    $.ajax({
        type: "POST",
            url: "getStranger",
            data:{},
            dataType:"text", 
            success: function(result){
                var resultObj = JSON.parse(result);
                $("#findstranger").hide();
                if(typeof(resultObj["errorcode"]) == "undefined"){
                    $("#loadingmessage").hide();
                    TOKEN   =  resultObj.token;
                    openOpentokConnection(resultObj.session_id);
                }else{
                    strangerWaitingtimer = setTimeout(function(){
                        strangerwaitexpir();
                      }, 30000);
                }
            }               
    });
  }

  function nextstranger(){
    getStranger();
  }

  function strangerwaitexpir(){
    $("#loadingmessage").hide();
    $("#findstranger").show();
    clearTimeout(strangerWaitingtimer);
  }