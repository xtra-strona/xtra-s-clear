$(document).ready(function() {
/*Colors you need to add for your anchor tags*/
var colors = ['rgb(234, 99, 0)', 'green', 'blue', 'orange', 'gray'];

/*Minimum & Maximum font Size*/
var minFontSize = 10;
var maxFontSize = 30;

/*Finding all the links inside a Div*/
$('.tag-cloud, .tagcloud').find('a').each(function(e) {
/*Applying font size*/
$(this).css("fontSize", randomNumberGenerator(minFontSize, maxFontSize));
/*Applying font color*/
$(this).css("color", colors[Math.floor(Math.random() * colors.length)]);
});

/*Random Number Generator function*/
function randomNumberGenerator(min,max)
{
return Math.floor(Math.random()*(max-min+1)+min);
}
});
