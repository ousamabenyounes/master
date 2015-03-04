$().ready(function() {    
    $('#username').blur(check_username);  

    function check_username(){
    var username = $('#username').val();
        
    jQuery.ajax({
            type: 'POST',
            url: path,
            data: 'username='+ username,
            dataType: 'json',
            cache: false,
            success: function(data){
               if(!data.Success) {
                  // $('#username-error').show('display:inline');  
                    $('#no_li_css').html('Please enter other user name.');         
               }
               
                
            }
        });
}
    
    jQuery.validator.addMethod("pwcheck", function(value, element) {
          return this.optional(element) || /^[A-Za-z!@#$%^&*()_]{6,12}$/i.test(value);
                    },"should match the pattern");
    $("#resellerinfoForm").validate({
     rules: {
				first_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                  },
                  
				last_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                  },
                  
        username: {
                    required: true,
                    minlength: 5,
                    maxlength: 12
                  },
          
        password: {
                    required: true,
                    minlength: 6,
                    maxlength: 12,
                    pwcheck: true,
                    
                  },
       },
     messages: {
				first_name: {
                      required: "Please enter a valid first name",
                      minlength: "First name should be between 3 to 30 characters",
                      maxlength: "First name should be between 3 to 30 characters"
                  },
				last_name: {
                    required: "Please enter a valid last name",
                    minlength: "First name should be between 3 to 30 characters",
                    maxlength: "First name should be between 3 to 30 characters"
                  },
        username: {
                    required: "Please enter a valid username",
                    minlength: "Username should be between 5 to 12 characters",
                    maxlength: "Username should be between 5 to 12 characters"
                  },
        password: {
                    required: "Please enter a valid password",
                    minlength: "Password should be between 6 to 12 characters",
                    maxlength: "Password should be between 6 to 12 characters",
                    
                  },
     }
    
    });
      
  });
 
