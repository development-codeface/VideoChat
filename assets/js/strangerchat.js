RECIVEUSER = false;
USERNAME   = "";
USERPREFERENCE = "";
$( "#finduser").click(function() {
    if(isFristLoad()){  
      USERPREFERENCE = 1  
        getStranger();
    }else {
        nextstranger();
    } 
  });

  $( "#findmaleuser").click(function() {
    if(isFristLoad()){ 
      USERPREFERENCE =1    
        getStranger(USERPREFERENCE);
    }else {
        nextstranger();
    }   
  });

  $( "#findfemaleuser").click(function() {
    if(isFristLoad()){ 
      USERPREFERENCE =2   
        getStranger(USERPREFERENCE);
    }else {
        nextstranger();
    }
    
  });

  $( "#findotheruser").click(function() {
    if(isFristLoad()){    
      USERPREFERENCE =3
        getStranger(USERPREFERENCE);
    }else {
        nextstranger();
    }  
  });

  function getStranger(usertype){
    $("#loadingmessage").show();
    $.ajax({
        type: "POST",
            url: "getStranger",
            data:{
              usertype: usertype
            },
            dataType:"text", 
            success: function(result){
                var resultObj = JSON.parse(result);
                document.getElementById("findstranger").style.display = 'none';
                disconnect();
                TOKEN   =  resultObj.token;
                $("#nickname").html(resultObj.stranger_nikename);
                openOpentokConnection(resultObj.session_id);
                if(typeof(resultObj["errorcode"]) == "undefined"){
                    $("#loadingmessage").hide();
                    RECIVEUSER = true;
                    USERNAME   = resultObj.myNickName;
                }else{
                    $("#loadingmessage").show();
                    RECIVEUSER = false;   
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
        var strUrl = window.location.href; 
        var url = new URL(strUrl);
        var type = url.searchParams.get("usertype");
        getStranger(type);
      }else {
        document.getElementById("findstranger").style.display = 'block';
      }
  }
  function getrefreshWithStranger(){
    var url = window.location.href;   
    if (isFristLoad()){
       url += '?Next=true&usertype='+USERPREFERENCE
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
    document.getElementById("findstranger").style.display = 'block';
    clearTimeout(strangerWaitingtimer);
  }
  function wait(ms){
    var start = new Date().getTime();
    var end = start;
    while(end < start + ms) {
      end = new Date().getTime();
   }
 }
 