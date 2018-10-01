$( document ).ready(function() {
$('#companyId').on('change', function (e) {
    var optionSelected =this.value;
		

});

$('#designationId').on('change', function (e) {
    var optionSelected =this.value;
	var branchId    = $('#branchId').val();
	var DepartmentId = $('#departmentId').val();
	//$('#modaldemo1').modal('show');
	getBranchUser(branchId,DepartmentId,optionSelected);

});
$("#cuser").click(function(){
	if(this.checked){
	$('#gp').show();
	}
	else{
		$('#gp').hide();
		$('#userSection').hide();
	}
});




$("#submit").click(function(){
	if($("#cuser").prop("checked") == true){
	if($( "#DisplayName" ).val()==""){
		alert('Enter Display Name');
		return false;
		}
	if($( "#email" ).val()==""){
		alert('Enter email');
		return false;
		}
	}

	return true;
});




$('#groupId').on('change', function (e) {
	$('#userSection').show();

});

$( "#mobile" ).blur(function() {
  var mob=this.value;

  if(mob!="" && mob.length <10){
    $('#Em').show();
  }else{
  $('#Em').hide();
}
});
$( "#user_name" ).blur(function() {
	var uname=this.value;
  if(uname!=""){
 $.ajax({
		type: "POST",
		url:site_url+"Auth/checkUsername",
		data:'uname='+uname,
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
				 $( "#user_name" ).val("");
				$('#alerts').show();
              }else{
				$('#alerts').hide();
			  }

        },

		});
  }
});
$( "#email" ).blur(function() {
	var email=this.value;
  if(email!=""){
    $.ajax({
		type: "POST",
		url:site_url+"Auth/checkEmail",
		data:'email='+email,
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
				 $( "#email" ).val("");
				$('#alertE').show();
              }else{
				$('#alertE').hide();
			  }

        },

		});
  }
});

//basicinfo
$( "#basicinfo" ).on('click', function (e) {

  var full_name=$("#full_name" ).val();
  var nick_name=$("#nick_name" ).val();
  var dob=$("#dob" ).val();
  var gender=$('input:radio[name=gender]:checked').val();
 // var visibility=$("#visibility" ).val();
  var visibility = $('#visibility').is(':checked'); 

  if(full_name!=""){
    $.ajax({
		type: "POST",
		url:site_url+"User/UpdateBasic",
		data:'full_name='+full_name +"&nick_name="+nick_name+"&dob="+dob+"&gender="+gender+"&visibility="+visibility,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
				 $("#experience-box").removeClass("open");
				$(".wrapper").removeClass("overlay");
				$("#full_names" ).html(full_name);
				$("#nick_names" ).html(nick_name);
				$("#dobs" ).html(dob);
				var container = $('#visib');

				if(visibility==true){

				$("#visib" ).html('Public');
				
					
				}else{
				
					$("#visib" ).html('Private');
				}
				if(gender==1){
				$("#genders" ).html("Male");
				}else{
				$("#genders" ).html("Female");	
				}
				

              }else{
				$('#Eeror').hide();
      }

    },


  });
  return false;
}
});
//location save

$( "#locationSave" ).on('click', function (e) {

  var country_id=$("#country_id" ).val();
  var address=$("#address" ).val();
  if(country_id!=""){
    $.ajax({
		type: "POST",
		url:site_url+"User/UpdateLocation",
		data:'country_id='+country_id +"&address="+address,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			  // $("#country_id" ).innerHTML=
				 $("#location-box").removeClass("open");
				$(".wrapper").removeClass("overlay");
				$("#country_ids" ).html(country);
				 $("#country_ids" ).val(country);
				
              }else{
				$('#Eeror').hide();
      }

    },


  });
  return false;
}
});

//feed edit


 $( "#feedsave" ).on('click', function (e) {

  var feed=$("#feed-edit" ).val();
  var id=$("#feed-id" ).val();
  if(country_id!=""){
    $.ajax({
		type: "POST",
		url:site_url+"Profile/editFeed",
		data:'feed-edit='+feed +"&feed-id="+id,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			    $("#education-box").removeClass("open");
				$(".wrapper").removeClass("overlay");
				location.reload();
			 
              }else{
				$('#Eeror').hide();
      }

    },


  });
  return false;
}
});


// interest save
 $( "#InterestSave" ).on('click', function (e) {

  var interest=$("#Interest_id").val();
 
  if(interest!=""){
    $.ajax({
		type: "POST",
		url:site_url+"User/update_Interest",
		data:'interest='+interest,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			    $("#skills-box").removeClass("open");
				$(".wrapper").removeClass("overlay");
			 if(interest==1){
				$("#Interest_ar" ).html("Boy");
				}else if(interest==2){
				$("#Interest_ar" ).html("Girl");	
				}else{
				$("#Interest_ar" ).html("Others");	
				}
		   }
				
			else{
				$('#Eeror').hide();
      }

    },


  });
  return false;
}
});



//overview save

$( "#descriptionsave" ).on('click', function (e) {

  var description=$("#description" ).val();
  
  if(description!=""){
    $.ajax({
		type: "POST",
		url:site_url+"User/UpdateOverview",
		data:'description='+description,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			   $("#description" ).val(data.des);
				 $("#overview-box").removeClass("open");
				$(".wrapper").removeClass("overlay");
				$("#descriptions" ).html(data.des);
              }else{
				$('#Eeror').hide();
      }

    },


  });
  return false;
}
});




});
function reload(){
	setTimeout(
    function() {
      location.reload();
    }, 5000);
}
function friendAccept(userId){
	  var Uid = $("#abc").val();
	  alert(Uid);
	  var frinedId = userId;
	$.ajax({
		type: "POST",
		url:site_url+"User/AccetFriends",
		data:{Uid:Uid,frinedId:frinedId},
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
				$("#"+userId).remove();
				location.reload();

				}

        },

		});
}

function friendRequest(userId){
	 var Uid = $("#uid").val();
	  var frinedId = userId;
	 
	
	$.ajax({
		type: "POST",
		url:site_url+"User/friendRequest",
		
		data:{Uid:Uid,frinedId:frinedId},
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
				$("#"+userId).remove();
				location.reload();
				}

        },

		});
}


function getBranch(comapnyId,userId){
	$('#branchId').empty();
$.ajax({
		type: "POST",
		url:site_url+"Users/getBranch",
		data:'comapnyId='+comapnyId,
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
                $('#branchId').append($('<option>').text('Select a Branch').attr('value', ''));
                $.each(data.data, function(i, obj){
					if(userId!=""){
						$('#branchId').append($('<option>').text(obj.BranchName).attr('value', obj.BranchID).prop("selected", true));
					}
                    $('#branchId').append($('<option>').text(obj.BranchName).attr('value', obj.BranchID));
                });
            }

        },

		});
}

function getDepartment(comapnyId,userId){
	$('#departmentId').empty();
$.ajax({
		type: "POST",
		url:site_url+"Users/getDepartment",
		data:'comapnyId='+comapnyId,
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
                $('#departmentId').append($('<option>').text('Select a Branch').attr('value', ''));
                $.each(data.data, function(i, obj){
					if(userId!=""){
						$('#departmentId').append($('<option>').text(obj.Department).attr('value', obj.DepartmentID).prop("selected", true));
					}
                    $('#departmentId').append($('<option>').text(obj.Department).attr('value', obj.DepartmentID));
                });
            }

        },

		});
}
function getDesignation(comapnyId,userId){
	$('#designationId').empty();
$.ajax({
		type: "POST",
		url:site_url+"Users/getDesignation",
		data:'comapnyId='+comapnyId,
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
                $('#designationId').append($('<option>').text('Select a Designation').attr('value', ''));
                $.each(data.data, function(i, obj){
					if(userId!=""){
						$('#designationId').append($('<option>').text(obj.Designation).attr('value', obj.DesignationID).prop("selected", true));
					}
                    $('#designationId').append($('<option>').text(obj.Designation).attr('value', obj.DesignationID));
                });
            }

        },

		});
}

function getBranchUser(branchId,DepartmentId,DesId){
	$('#desUserId').empty();
$.ajax({
		type: "POST",
		url:site_url+"Users/getBranchUser",
		data:'branchId='+branchId+'&DepartmentId='+DepartmentId+'&DesId='+DesId,
		dataType: 'json',
        success: function(data) {


            if(data.status==1){
			//$('#modaldemo1').modal('hide');
                $('#desUserId').append($('<option>').text('Select a User').attr('value', ''));
                $.each(data.data, function(i, obj){
					$('#desUserId').append($('<option>').text(obj.DisplayName).attr('value', obj.UserID));
                });
            }

        },

		});
}
function setLike(feedId){
	 
  
   var Uid = $("#uid").val();
   var fid = $("#fid").val();
	  var feedId = feedId;	
    $.ajax({
		type: "POST",
		url:site_url+"Profile/UpdateLike",
			data:{feedId:feedId,Uid:Uid,fid:fid},
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			   $("#"+feedId).show();
			   $("#"+feedId).html(data.lik);
              }else{
		}

    },


  });


}


function setprofile(userId){
	 
    $.ajax({
		type: "POST",
		url:site_url+"Profile/getprofile",
		data:'user_id='+userId,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			   
			   console.log(data.pr);
			   	   
			 $("#full_namesf" ).html(data.pr.full_name);
			$("#nick_namesf" ).html(data.pr.nick_name);
			$("#dobsf" ).html(data.pr.dob);
              }else{
		}

    },


  });


}


//edit feeds


function getFeeds(feedId){
	 
    $.ajax({
		type: "POST",
		url:site_url+"Profile/getFeed",
		data:'Fid='+feedId,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			   console.log(data.f.feeds);
			  $("#feed-edit" ).html(data.f.feeds);
			   $("#feed-edit" ).text(data.f.feeds);
			    $("#feed-edit" ).val(data.f.feeds);
				$("#feed-id" ).val(data.f.id);
			   
			   
			
              }else{
		}

    },


  });


}

