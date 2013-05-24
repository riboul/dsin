jQuery(function (){
	$('input[placeholder]').each(function(){  
        var input = $(this);        
        
        $(input).val(input.attr('placeholder'));
                
        $(input).focus(function(){
             if (input.val() == input.attr('placeholder')) {
                 input.val('');
             }
        });
        
        $(input).blur(function(){
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.val(input.attr('placeholder'));
            }
        });
		
    });
	
	$('textarea[placeholder]').each(function(){  
        var textarea = $(this);        
        
        $(textarea).val(textarea.attr('placeholder'));
                
        $(textarea).focus(function(){
             if (textarea.val() == textarea.attr('placeholder')) {
                 textarea.val('');
             }
        });
        
        $(textarea).blur(function(){
            if (textarea.val() == '' || textarea.val() == textarea.attr('placeholder')) {
                textarea.val(textarea.attr('placeholder'));
            }
        });
		
    });
});