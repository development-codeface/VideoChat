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
      startVideoCall();
    },
    sessionReconnected : function (){
      openTokErrormessage("Connection Reconnected !!!");
    },
    sessionReconnecting : function (){
      openTokErrormessage("Connection Reconnecting !!!");
    },
    connectionDestroyed: function (event) {
      connectionCount--;
      openTokErrormessage("Connection connectionDestroyed !!!");
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
        insertMode: 'append',
        width: '100%',
        height: '100%'
      }, handleErrorOpen);

      subscriber.on({
        disconnected: function(event) {
          openTokErrormessage("subscriber disconnected");
        },
        connected: function(event) {
          openTokErrormessage("Subscriber connected");
          $("#subscriber").show();
        }
      });
    }
  });
  // Create a publisher
  var publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
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
  session.disconnect();
}
function sendMessage(type,message,clearfunction){
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
function sessageCallback(event){
   switch (event.type){
      case "signal:SENDMESSAGE" : recicveChat(event);break;
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

$( "#btnSendchat").click(function() {
  var message = $( "#txtMsg").val();
  sendMessage("SENDMESSAGE",message,function (){$( "#txtMsg").val("")});
});



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
      openTokErrormessage("Connection connectionDestroyed !!!");
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
     case 'signal:SENDMESSAGE'  : normalRecicveChat(event);break;
     case 'signal:INITIATECALL' : reciveVideoCall(event);break;
     case 'signal:ACCEPTCALL'   : callAccepted(event);break;
     case 'signal:CALLSTOPPED'  : callStopped(event);break;
     case 'signal:CUTCALL'      : callAccepted(event);break;
  }
}

function openTokErrormessage(msg){
  console.log(msg);
}

function reciveVideoCall(){
  document.getElementById('callerTone').play();
  document.getElementById("rcivModal").style.display = 'block';
}

function acceptCall(){
  document.getElementById('callerTone').pause();
  document.location.href = '../Profile/messages';
  sendMessage("ACCEPTCALL","try it",function (){});
}

function callStopped(){
  document.getElementById('callerTone').pause();
  document.getElementById("rcivModal").style.display = 'none';
}

function startVideoCall(){
  sendMessage("INITIATECALL","try it",function (){});
  document.getElementById("callModal").style.display = 'block';
  awaitingResponse = setTimeout(function(){
    stopCall();
  }, 30000);
}
function cutVideoCall(){
  document.getElementById('callerTone').pause();
  sendMessage("CUTCALL","try it",function (){});
}
function stopCall(){
  document.getElementById('callerTone').pause();
  sendMessage("CALLSTOPPED","try it",function (){}); 
}
function callAccepted(){
  document.getElementById('callerTone').pause();
  document.getElementById("callModal").style.display = 'none';
}

$("#startVideo").click(function() {
  acceptCall();
});

$("#endCall").click(function(){
  stopCall();
})

$("#rejectCall").click(function(){
  cutVideoCall();
})

