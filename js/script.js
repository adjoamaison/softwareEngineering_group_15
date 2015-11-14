function sendRequest(u){
    var obj=$.ajax({url:u,async:false});
    var result=$.parseJSON(obj.responseText);

    return result;  //return object
}

function addCourse(){
	var c=$("#cid").val();
	var n=$("#cname").val();
	var d=$("#cdesc").val();
				
	var strUrl = "response.php?cmd=1&cid="+c+"&cname="+n+"&cdesc="+d;
	var objResult=sendRequest(strUrl);
	if(objResult.result==1){
		var msg = "";
    	msg += "<div class='alert alert-warning alert-dismissible' role='alert'>";
    	msg += "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
    	msg += "<span aria-hidden='true'>&times;</span></button>";
        msg += "Course Added Successfully.</div>";
	}else{
		var msg = "";
    	msg += "<div class='alert alert-warning alert-dismissible' role='alert'>";
    	msg += "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
    	msg += "<span aria-hidden='true'>&times;</span></button>";
        msg += "Addition of course was unsuccessful.</div>";
	}
	$("#alert").html(msg);
	$("#cid").val("");
	$("#cname").val("");
	$("#cdesc").val("");
}
 
  