var link = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/journal/welcome.php";
var clink = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/journal/create.php?";
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
