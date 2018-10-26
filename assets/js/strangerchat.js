RECIVEUSER = false;
USERNAME   = "";
$( "#finduser").click(function() {
    if(isFristLoad()){
        getStranger();
    }else {
        nextstranger();
    }
    
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
                disconnect();
                TOKEN   =  resultObj.token;
                $("#nickname").html(resultObj.nick_name);
                openOpentokConnection(resultObj.session_id);
                if(typeof(resultObj["errorcode"]) == "undefined"){
                    $("#loadingmessage").hide();
                    RECIVEUSER = true;
                }else{
                    RECIVEUSER = false;
                    USERNAME   = result.myNickName;
                    strangerWaitingtimer = setTimeout(function(){
                        strangerwaitexpir();
                      }, 30000);
                }
            }               
    });
  }

  function nextstranger(){
    //getStranger();
    sendMessage("STRANGEREND","",function (){});
    getrefreshWithStranger();
    
  }
  function loadNextStranger(){
      if(!isFristLoad()){
        getStranger();
      }else {
        document.getElementById("findstranger").style.display = 'block';
      }
  }
  function getrefreshWithStranger(){
    var url = window.location.href;   
    if (isFristLoad()){
       url += '?Next=true'
    }
    window.location.href = url;
  }

  function isFristLoad(){
    var url = window.location.href; 
    var url = new URL(url);
    var c = url.searchParams.get("Next"); 
    return c == null;
  }
  function getStrangeUser(event){
    if(!isSameSesssion(event)){
      $("#nickname").html(event.data.userName);
    }
  }

  function strangerwaitexpir(){
    $("#loadingmessage").hide();
    $("#findstranger").show();
    clearTimeout(strangerWaitingtimer);
  }