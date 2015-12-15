var link = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/journal/welcome.php";
var clink = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/Requirement1/home.php?";
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
