

//Handling all of our errors here by alerting them
function handleError(error) {
  if (error) {
    alert(error.message);
  }
}

function initializeSession(sessionid) {
  var session = OT.initSession(APIKEY, sessionid);
  // Subscribe to a newly created stream
  session.on('streamCreated', function(event) {
	  session.subscribe(event.stream, 'subscriber', {
	    insertMode: 'append',
	    width: '100%',
	    height: '100%'
	  }, handleError);
	});

  // Create a publisher
  var publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);

  // Connect to the session
  session.connect(TOKEN, function(error) {
    // If the connection is successful, publish to the session
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleError);
    }
  });
}

function checkUserMediaSupport(){
    return !!(navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia);
}
function calltaken(data){
	startCall(false);//to start call when callee gives the go ahead (i.e. answers call)
    document.getElementById("callModal").style.display = 'none';//hide call modal    
    clearTimeout(awaitingResponse);//clear timeout  
    //stop tone
    document.getElementById('callerTone').pause();
}
function startCall(){
	
}
function callRejectedval(data){
	document.getElementById("callerInfo").style.color = 'red';
    document.getElementById("callerInfo").innerHTML = data.msg;
    setTimeout(function(){
        document.getElementById("callModal").style.display = 'none';
    }, 3000);
    //stop tone
    document.getElementById('callerTone').pause();
    //enable call buttons
    enableCallBtns();
}
function getUserList(data){
	alert("get user list");
}
function newUserSubcribe(data){
	alert("new user");
}


function showAcceptMessage(data){
	alert("Accept message !!!");
}

function endCallfromUser(data){
	alert("End call from other user !!!");
}


/*
* Connecting my session
*/

var session;
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
