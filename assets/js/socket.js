const wsChat = new WebSocket("ws://localhost:8086/comm");
wsChat.onopen = function(){
	console.log("Connection established!");
};
wsChat.onerror = function(){
    showSnackBar("Unable to connect to the chat server! Kindly refresh", 20000);
};

wsChat.onmessage = function(e){
    var data = JSON.parse(e.data);
    switch(data.action){
    		case 'subscribe':getUserList(data); break;
    		case 'newSub' : newUserSubcribe(data);break;
    		case 'incomeVideoCall':showAcceptMessage(data);break;
    		case 'endcall' : endCallfromUser(data);break;
    		case 'callRejected' :callRejectedval(data); break;
    		case 'startCall': calltaken(data);break;
    }
}
function subscribe (){
    wsChat.send(JSON.stringify({
        action: 'subscribe',
        userid: res.username
    }));
}

function showSnackBar(msg, displayTime){
    console.log(msg);
}