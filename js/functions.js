var flink = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/Requirement3/edit.php?";
var cart = [];
var totalPrice = 0;


function sendRequest(u) {
    var obj = $.ajax({url: u, async: false});
    var result = $.parseJSON(obj.responseText);
    return result;
}


$(function () {
  $('#attendance').submit(function(e) {
    e.preventDefault();
    login();
  });
});

(function () {
  $('#edit').submit(function(e) {
    e.preventDefault();
    edit();
  });
});

function login(){
   var  user = $("#user").val();
   var pass = $("#pass").val();

    var strUrl = clink+"user="+user+"&pass="+pass;
    var objResult = sendRequest(strUrl);
    if(objResult.result == 0){
        alert("Don't leave it blank");
    }else if (objResult.result == 1){
      alert("Wrong credentials")
    }else{
      window.location.href = "test.html";
    }
}

function edit(){
   var  id = $("#id").val();
   var  title = $("#title").val();
   var fac = $("#fac").val();
   var  prof = $("#prof").val();
   var obj = $("#obj").val();
   var  topic = $("#top").val();
   var ref = $("#ref").val();
   var  time = $("#time").val();
   var pre = $("#pre").val();
   var  assess = $("#asses").val();

    var strUrl = flink+"id="+id+"&title="+title+"&fac"+fac+"&prof="+prof+"&obj="+obj+"&topic="+topic+"&ref="+ref+"&time="+time+"&pref="+title+"&assess="+assess;
    var objResult = sendRequest(strUrl);
    if(objResult.result == 0){
        alert("Update Failed");
    }else{
      alert("Course Updated Successfully")
    }
}
