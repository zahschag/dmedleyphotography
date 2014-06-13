$(function(){
//DROPDOWN MENU----
	//target DIRECT children of the nav id
    var dropmenu = $('#nav > li');
    //Image is selected
    var image = $('#main-bg img');
    //a mouse enter event is added to the ul
    dropmenu.bind('mouseenter', function () {
    	//I couldn't figure out why I coulnd't make the $(this) factory call a global variable making it be available to each function but with a different
        var that = $(this);
        
        console.log(this); //console.log to confirm that this will trigger the event
        that.children('ul') //find the children of ul closest to the anchor that was hovered on 
       		.show(this); // will trigger the event
            if(that.has('ul')){
                    image.css('margin-top', '0');
            }else{
                image.css('margin-top', '+75px');
            }
        return false; //return false to escape the event and be able to repeat it

    });
//mouseleave event is added to the 
	//The mouseleave is binded to the drop menu selection
    dropmenu.bind('mouseleave', function () {
    //Again a factory call of $(this) because I just couldn't figure out why I couldn't have it as a global var
        var that = $(this);
        that.children('ul')//Traversing the ul closest to the anchor
        	.hide(this);//hide the subnavigation
        image.css('margin-top', '0px');
        return false;//return false to escape the event and be able to repeat it
    });
//-- ACTIVE CLASS SELECTOR


});