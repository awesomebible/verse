const AddToImage = "awb-verse" // Replace with the id of the img-tag

var now = new Date();
var start = new Date(now.getFullYear(), 0, 0);
var diff = (now - start) + ((start.getTimezoneOffset() - now.getTimezoneOffset()) * 60 * 1000);
var oneDay = 1000 * 60 * 60 * 24;
var day = Math.floor(diff / oneDay);

document.getElementById(AddToImage).src = "https://raw.githubusercontent.com/awesomebible/verse/master/img/"+day+".jpg; 
