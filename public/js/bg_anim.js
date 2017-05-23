$(document).ready(function(){
	
    $('.pic').animate(
                {
                    top: '-50px'
                },
                5000,
                function() {
                   $('#member-footer').fadeIn();
                }
            );
    
});