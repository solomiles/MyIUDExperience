
$(document).ready(function(){
    // for add new type button
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button_type'); //Add button selector
    
    var wrapper = $('.field_wrapper'); //Input field wrapper
    // var fieldHTML = '<div class="form-check"><input class="form-check-input remove_button" type="radio" id="#" name="type" value="'+new_type+'" ><label class="form-check-label" for="example-radios-default1">'+new_type+'</label></div>';
    // '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields

        var new_type = $('.new_type').val();
        var fieldHTML = '<div class="form-check"><input class="form-check-input " type="radio" id="#" name="type" value="'+new_type+'" ><label class="form-check-label" for="example-radios-default1">'+new_type+'</label> <span> </span> <button type="button" class="btn btn-sm btn-primary remove_button "><span class="fa fa-trash"></span></button></div>';

        if(x < maxField && new_type != ""){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--;
        //Decrement field counter
    });
    // end add new type button

// start add new appearance change
    var addAppearance = $('.add_button_appearance'); //Add button selector
    
    var wrapperApp = $('.field_wrapper_appearance'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addAppearance).click(function(){
        //Check maximum number of input fields

        var new_appearance = $('.new_appearance').val();
        var fieldHTML = '<div class="form-check"><input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="'+new_appearance+'" ><label class="form-check-label" for="example-radios-default1">'+new_appearance+'</label> <span> </span> <button type="button" class="btn btn-sm btn-primary remove_button "><span class="fa fa-trash"></span></button></div>';

        if(x < maxField && new_appearance != ""){ 
            x++; //Increment field counter
            $(wrapperApp).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapperApp).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--;
        //Decrement field counter
    });
// end of add new appearance change

// start of new physical change button

    var addPhysical = $('.add_button_physical'); //Add button selector
    
    var wrapperPhy = $('.field_wrapper_phy'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addPhysical).click(function(){
        //Check maximum number of input fields

        var new_physical = $('.new_physical').val();
        var fieldHTML = '<div class="form-check"><input class="form-check-input" type="checkbox" id="#" name="physical[]" value="'+new_physical+'" ><label class="form-check-label" for="example-radios-default1">'+new_physical+'</label> <span> </span> <button type="button" class="btn btn-sm btn-primary remove_button "><span class="fa fa-trash"></span></button></div>';

        if(x < maxField && new_physical != ""){ 
            x++; //Increment field counter
            $(wrapperPhy).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapperPhy).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--;
        //Decrement field counter
    });

// end physical change

// start of new gynecological issue


    var addGynecological = $('.add_button_gyne'); //Add button selector
        
    var wrapperGyne = $('.field_wrapper_gyne'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addGynecological).click(function(){
        //Check maximum number of input fields

        var new_gyne = $('.new_gyne').val();
        var fieldHTML = '<div class="form-check"><input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="'+new_gyne+'" ><label class="form-check-label" for="example-radios-default1">'+new_gyne+'</label> <span> </span> <button type="button" class="btn btn-sm btn-primary remove_button "><span class="fa fa-trash"></span></button></div>';

        if(x < maxField && new_gyne != ""){ 
            x++; //Increment field counter
            $(wrapperGyne).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapperGyne).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--;
        //Decrement field counter
    });

// end of gynecological issue

// start of new Mental Health issue


var addMental = $('.add_button_mental'); //Add button selector
        
var wrapperMental = $('.field_wrapper_mental'); //Input field wrapper
var x = 1; //Initial field counter is 1

//Once add button is clicked
$(addMental).click(function(){
    //Check maximum number of input fields

    var new_mental = $('.new_mental').val();
    var fieldHTML = '<div class="form-check"><input class="form-check-input" type="checkbox" id="#" name="mental[]" value="'+new_mental+'" ><label class="form-check-label" for="example-radios-default1">'+new_mental+'</label> <span> </span> <button type="button" class="btn btn-sm btn-primary remove_button "><span class="fa fa-trash"></span></button></div>';

    if(x < maxField && new_mental != ''){ 
        x++; //Increment field counter
        $(wrapperMental).append(fieldHTML); //Add field html
    }
});

//Once remove button is clicked
$(wrapperMental).on('click', '.remove_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--;
    //Decrement field counter
});

// end of Mental Health issue

// start of new others

    var addOther = $('.add_button_other'); //Add button selector
            
    var wrapperOther = $('.field_wrapper_other'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addOther).click(function(){
        //Check maximum number of input fields

        var new_other = $('.new_other').val();
        var fieldHTML = '<div class="form-check"><input class="form-check-input" type="checkbox" id="#" name="other[]" value="'+new_other+'" ><label class="form-check-label" for="example-radios-default1">'+new_other+'</label> <span> </span> <button type="button" class="btn btn-sm btn-primary remove_button "><span class="fa fa-trash"></span></button></div>';

        if(x < maxField && new_other != ''){ 
            x++; //Increment field counter
            $(wrapperOther).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapperOther).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--;
        //Decrement field counter
    });


// end of new others
});

