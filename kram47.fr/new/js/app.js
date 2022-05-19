/* 
* @Author: Marc
* @Date:   2014-06-03 12:09:16
* @Last Modified by:   Marc
* @Last Modified time: 2014-06-03 12:40:12
*/

$(document).ready(function(){
    $("#retourHautPage").click(function(e) 
    {
    	e.preventDefault();
    	$('html, body').animate({ 
    		scrollTop: $("body").offset().top
    	});
    });
});