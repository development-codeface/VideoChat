/*
* Connecting my session
*/

var session;
var noramlSession;
var apiKey;
var sessionId;
var connectionCount = 0;

function openOpentokConnection(sessionId) {
  // Replace apiKey and sessionId with your own values:
  session = OT.initSession(APIKEY, sessionId);
  session.on({
    connectionCreated: function (event) {
      connectionCount++;
      openTokErrormessage("Connection created !!!");
    },
    sessionReconnected : function (){
      openTokErrormessage("Connection Reconnected !!!");
    },
    sessionReconnecting : function (){
      openTokErrormessage("Connection Reconnecting !!!");
    },
    connectionDestroyed: function (event) {
      connectionCount--;
	 
      openTokErrormessage("Connection session connectionDestroyed !!!");
    },
    sessionDisconnected: function sessionDisconnectHandler(event) {
      // The event is defined by the SessionDisconnectEvent class
      openTokErrormessage('Disconnected from the session.');
      if (event.reason == 'networkDisconnected') {
        openTokErrormessage('Your network connection terminated.')
      }
    },
    signal: function(event) {
      sessageCallback(event)
    },
    streamCreated : function(event){
      var subscriber = session.subscribe(event.stream, 'subscriber', {
        //insertMode: 'append',
        width: '100%',
        height: '100%'
      }, handleErrorOpen);

      subscriber.on({
        disconnected: function(event) {
          openTokErrormessage("subscriber disconnected");
        },
        connected: function(event) {
          openTokErrormessage("Subscriber connected");
          if($("#loadingmessage") != null){
            $("#loadingmessage").hide();
            if(typeof(strangerWaitingtimer) != "undefined")
               clearTimeout(strangerWaitingtimer);
          }
          $("#subscriber").show();
        }
      });
    }
  });
  // Create a publisher
  var publisher = OT.initPublisher('publisher', {
    //insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleErrorOpen);
  // Connect to the session
  session.connect(TOKEN, function(error) {
    // If the connection is successful, publish to the session
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleErrorOpen);
      startVideoCall();
    }
  });

  var  openTokErrormessage = function (msg){
    console.log(msg);
  }
  var checkUserMediaSupport = function (){
    return !!(navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia);
  }
  var handleErrorOpen = function (error){
    if (error) {
      alert(error.message);
    }
  }
}

function disconnect() {
  if(typeof(session) != "undefined")
    session.disconnect();
}
function sendMessage(type,message,clearfunction){
  if(typeof(session) == 'undefined'){
    noramlSession.signal({
      type: type,
      data: message
    }, function(error) {
    if (error) {
      console.log('Error sending signal:', error.name, error.message);
    } else {
      clearfunction();
    }
  });
  }else {
    session.signal({
        type: type,
        data: message
      }, function(error) {
      if (error) {
        console.log('Error sending signal:', error.name, error.message);
      } else {
        clearfunction();
      }
    });
  }

  
}
function sessageCallback(event){
   switch (event.type){
      case "signal:SENDMESSAGE" : console.log("SENDMESSAGE"); recicveChat(event);break;
      case 'signal:INITIATECALL' : console.log("INITIATECALL"); reciveVideoCallInChat(event);break;
      case 'signal:ACCEPTCALL'   : console.log("ACCEPTCALL"); callAccepted(event);break;
      case 'signal:CALLSTOPPED'  : console.log("CALLSTOPPED"); callStopped(event);break;
      case 'signal:CUTCALL'      : console.log("CUTCALL"); callrejectedCall(event);break;
      case 'signal:CUTCALLTERMINATED' : console.log("CALL TERMINATED"); callterminated(event);break;
      case 'signal:STRANGEREND' :  console.log("STRANGE END"); strangerEndCall(event);break;
   }
}

function strangerEndCall(event){
  disconnect();
  if(!isSameSesssion(event)){
    getrefreshWithStranger();
  }
}
function recicveChat(event){
  var msgHistory = $('#chatHistory');
  var msg = document.createElement('p');
  msg.innerText = event.data;
  msg.className = event.from.connectionId === session.connection.connectionId ? 'mine' : 'theirs';
  msgHistory.append(msg);
  msg.scrollIntoView();
}
function callrejectedCall(event){
  if(!isSameSesssion(event)){
    callterminated(event);
  }
  
}

$( "#btnSendchat").click(function() {
  sendChatMessage();
});

$("#cutCall").click(function(){
  sendMessage("CUTCALLTERMINATED","",function (){});
  history.back();
})

$("#txtMsg").keyup(function(event) {
  if (event.keyCode === 13)  
      sendChatMessage();
});

function sendChatMessage(){
  var message = $( "#txtMsg").val();
  sendMessage("SENDMESSAGE",message,function (){$( "#txtMsg").val("")});
}

/****  Normal   Connectin No Video **/
function normalConnection(){
  noramlSession = OT.initSession(APIKEY, SESSIONID);
  noramlSession.on({
    connectionCreated: function (event) {
      connectionCount++;
      openTokErrormessage("Connection created !!!");
    },
    sessionReconnected : function (){
      openTokErrormessage("Connection Reconnected !!!");
    },
    sessionReconnecting : function (){
      openTokErrormessage("Connection Reconnecting !!!");
    },
    connectionDestroyed: function (event) {
      connectionCount--;
      openTokErrormessage("Connection normal connectionDestroyed !!!");
    },
    sessionDisconnected: function sessionDisconnectHandler(event) {
      // The event is defined by the SessionDisconnectEvent class
      openTokErrormessage('Disconnected from the session.');
      if (event.reason == 'networkDisconnected') {
        openTokErrormessage('Your network connection terminated.')
      }
    },
    signal: function(event) {
      normalMessageCallback(event)
    }
  });
  // Connect to the session
  noramlSession.connect(TOKEN, function(error) {
    // If the connection is successful, publish to the session
    if (error) {
      handleError(error);
    } else {

    }
  });  
}
function normalMessageCallback(event){
  switch (event.type){
     case 'signal:SENDMESSAGE'  : console.log("Normal :: SENDMESSAGE"); normalRecicveChat(event);break;
     case 'signal:INITIATECALL' : console.log("Normal :: INITIATECALL");reciveVideoCall(event);break;
     case 'signal:ACCEPTCALL'   : console.log("Normal :: ACCEPTCALL");callAccepted(event);break;
     case 'signal:CALLSTOPPED'  : console.log("Normal :: CALLSTOPPED");callStopped(event);break;
     case 'signal:CUTCALL'      : console.log("Normal :: CUTCALL"); callRejected(event);break;
  }
}

function openTokErrormessage(msg){
  console.log(msg);
}
//Caller End 
function startVideoCall(){
  if(IsCaller == 'Y'){
    document.getElementById("callModal").style.display = 'block';
    document.getElementById('dialTone').play();
    sendMessage("INITIATECALL",{userName : USERNAME},function (){});
    awaitingResponse = setTimeout(function(){
      stopCall();
    }, 30000);
  }
}

function stopCall(){
  document.getElementById('callerTone').pause();
  document.getElementById("callModal").style.display = 'none';
  document.getElementById('dialTone').pause();
  if(typeof(awaitingResponse) != "undefined")
         clearTimeout(awaitingResponse);
  sendMessage("CALLSTOPPED","try it",function (){}); 
}

function callAccepted(event){
  if(!isSameSesssion(event)){
    document.getElementById('callerTone').pause();
    document.getElementById('dialTone').pause();
    document.getElementById("callModal").style.display = 'none';
    if(typeof(awaitingResponse) != "undefined")
         clearTimeout(awaitingResponse);
  }
}

function callRejected(event){
  if(!isSameSesssion(event)){
    document.getElementById('callerTone').pause();
    document.getElementById('dialTone').pause();
    document.getElementById("callModal").style.display = 'none';
    if(typeof(awaitingResponse) != "undefined")
         clearTimeout(awaitingResponse);
  }
}


//Reciver End
function reciveVideoCall(event){
  if(!isSameSesssion(event)){
    document.getElementById('callerTone').play();
    document.getElementById("rcivModal").style.display = 'block';

    var callerName = (event.data.userName != undefined) ? event.data.userName+ " Calling ..." : "";
    $('#calleeInfo').html(callerName);
    if(typeof(awaitingResponse) != 'undefined')
      clearTimeout(awaitingResponse);
  } 
}

function reciveVideoCallInChat(event){
  if(!isSameSesssion(event)){
    document.getElementById('callerTone').play();
    document.getElementById("callModal").style.display = 'none';
    $('#callerInfo').html(event.userName + " Calling ...");
    if(typeof(awaitingResponse) != 'undefined')
      clearTimeout(awaitingResponse);
  } 
}

function acceptCall(){
  document.getElementById('callerTone').pause();
  sendMessage("ACCEPTCALL","try it",function (){});
  document.location.href = '../Profile/messages';
}
function callStopped(event){
  if(!isSameSesssion(event)){
    document.getElementById('callerTone').pause();
    document.getElementById("rcivModal").style.display = 'none';
  }else{
    session.destroy();
    history.back();
  }
}

function cutVideoCall(){
  document.getElementById('callerTone').pause();
  document.getElementById("rcivModal").style.display = 'none';
  sendMessage("CUTCALL","try it",function (){});
}

function callterminated(event){
  if(!isSameSesssion(event)){
    session.destroy();
    history.back();
  }
  
}



function getSesssion (){
  return (typeof(session) == 'undefined') ? noramlSession : session;
}

function isSameSesssion(event){
  var isSame =false;
  if(event.from.connectionId === getSesssion().connection.connectionId)
    isSame = true;
  return isSame 
}




$("#startVideo").click(function() {
  acceptCall();
});

$("#endCall").click(function(){
  stopCall();
});

$("#rejectCall").click(function(){
  cutVideoCall();
});