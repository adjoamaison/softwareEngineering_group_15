var link = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/journal/welcome.php";
var clink = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/requirement1/index.php?";
var cart = [];
var totalPrice = 0;


function sendRequest(u) {
    var obj = $.ajax({url: u, async: false});
    var result = $.parseJSON(obj.responseText);
    return result;
}

$(function () {
  $('#create').submit(function(e) {
    e.preventDefault();
    create();
  });
});

$(function () {
  $('#updateit').submit(function(e) {
    e.preventDefault();
    update();
  });
});

$(function () {
  $('#attendance').submit(function(e) {
    e.preventDefault();
    login();
  });
});


function create(){
   var  topic = $("#topic").val();
   var thought = $("#thought").val();

    var strUrl = clink+"topic="+topic+"&thought="+thought;
    var objResult = sendRequest(strUrl);
    if(objResult.result == 0){
        //better alert
        alert("not added");
        return;
    }
    //better alert
    window.location.href = "base.html";
}
function login(){
   var  user = $("#user").val();
   var pass = $("#pass").val();

    var strUrl = clink+"user="+user+"&pass="+pass;
    var objResult = sendRequest(strUrl);
    if(objResult.result == 0){
        alert("Don't leave it blank");
    }else if (objResult.result == 1){
      alert("Wrong credentials")
    }
    //better alert
    window.location.href = "base.html";
}
