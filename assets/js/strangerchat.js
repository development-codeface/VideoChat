$( "#finduser").click(function() {
    
    $.ajax({
        type: "POST",
            url: "getStranger",
            data:{},
            dataType:"text", 
            success: function(result){
                var resultObj = JSON.parse(result);
                if(typeof(resultObj["errorcode"]) == "undefined"){
                    $("#findstranger").hide();
                    openOpentokConnection(resultObj.session_id);
                }
            }               
    }); 
  });