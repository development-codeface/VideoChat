

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