var now = new Date();
var start = new Date(now.getFullYear(), 0, 0);
var diff = (now - start) + ((start.getTimezoneOffset() - now.getTimezoneOffset()) * 60 * 1000);
var oneDay = 1000 * 60 * 60 * 24;
var year = now.getFullYear()
var day = Math.floor(diff / oneDay);


 var x = document.getElementsByClassName("awb-verse");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].src = "https://verse.awesomebible.de/img/"+year+"/"+day+".jpg";
  }
