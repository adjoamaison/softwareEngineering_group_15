var link = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/journal/welcome.php";
var clink = "http://cs.ashesi.edu.gh/class2016/anthony-kwawu/journal/create.php?";
var ulink = "https://api.smsgh.com/v3/messages/send?From=Tony";
var glink = "http://10.10.57.103/Salepoint/login.php?";
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


function add(){
  var strUrl = slink+"id="+$("#id").val();
  var objResult = sendRequest(strUrl);
  if(objResult.result == 1){
    if(objResult.quantity > 0){
    cart.push({
    id: parseInt($("#id").val()),
    quantity: parseInt($("#quantity").val())
    });
      console.log(cart.id);
      console.log(cart[0]);
      totalPrice += parseInt(objResult.price);
      document.getElementById('total').innerHTML = parseInt(totalPrice);
      $("#cart").append(
        '<li>'+
        '<div class="collapsible-header"><i class="material-icons">shopping_cart</i>'+objResult.name+'</div>'+
        '<div class="collapsible-body"><p>ID - '+$("#id").val()+'<br>Price - '+objResult.price+'</p></div>'+
        '</li>'
      );
      $('.collapsible').collapsible();
  }
}
}

function barcode(){
   cordova.plugins.barcodeScanner.scan(
      function (result) {
        var strUrl = slink+"id="+result.text;
        var objResult = sendRequest(strUrl);
        if(objResult.result == 1){
          cart.push({
          id: parseInt(result.text),
          quantity: parseInt($("#quantity").val())
          });
            console.log(cart.id);
            console.log(cart[0]);
            totalPrice += parseInt(objResult.price);
            document.getElementById('total').innerHTML = parseInt(totalPrice);
            $("#cart").append(
              '<li>'+
              '<div class="collapsible-header"><i class="material-icons">shopping_cart</i>'+objResult.name+'</div>'+
              '<div class="collapsible-body"><p>ID - '+$("#id").val()+'<br>Price - '+objResult.price+'</p></div>'+
              '</li>'
            );
            $('.collapsible').collapsible();
        }
      },
      function (error) {
          alert("Scanning failed: " + error);
      }
   );
   }

function transact(){
  var stringData = JSON.stringify(cart);
  var t = parseInt(totalPrice);
  var p = $("#phone").val();
  $.ajax({
    type: "GET",
    url: "http://10.10.57.103/Salepoint/add.php/?everything="+t+"&phone="+p,
    data: { data: stringData }
  });
  window.location.href = "add.html";
}

// function sendMessage(){
//   var person = "Tony";
//   var message = $("#thought").val();
//   var receiver =
//   var id =
//   var code
// }

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

function update(){
   var  id = $("#id").val();
   var price = $("#price").val();


    var strUrl = ulink+"id="+id+"&price="+price;
    var objResult = sendRequest(strUrl);
    if(objResult.result == 1){
        //better alert
        alert("added");
        return;
    }
    //better alert
    window.location.href = "base.html";
}

function login(){
  window.location.href = "base.html";
  //  var  id = $("#user").val();
  //  var price = $("#pass").val();
   //
   //
  //   var strUrl = glink+"user="+id+"&pass="+price;
  //   var objResult = sendRequest(strUrl);
  //   if(objResult.result == 1){
  //       window.location.href = "base.html";
  //     }
  //   else if(objResult.result == 2){
  //       window.location.href = "add.html";
  //   }
}
