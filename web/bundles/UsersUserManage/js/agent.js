 $().ready(function() {
   
   $.validator.addMethod("emailcheck", function(value, element) {
          return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/i.test(value);
                    },"should match the pattern(eg: test@abc.com)");
                    
   $.validator.addMethod("phonecheck", function(value, element) {
          return this.optional(element) || /[0-9 -()+]+$/i.test(value);
                    },"Phone number must be numeric"); 
                    
   $("#add_agent_form").validate({
     rules: {
				first_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                  },
                  
				last_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                  },
                  
        email: {
                    required: true,
                    emailcheck:true,
                  },
                  
        email2: {
                    emailcheck:true,
               },
          
        primary_phone: {
                        required: true,                
                        phonecheck: true,
                        minlength: 10, 
                      },
                      
        phone2: {
                           phonecheck: true,
                            minlength: 10, 
                        },                          
               
        username: {
                    required: true,
                    
                  },
        password: {
                 required: true,   
               },
            
                      
       },
       
     messages: {
				first_name: {
                      required: "Please enter a valid  First name",
                      minlength: "First name should be between 3 to 30 characters",
                      maxlength: "First name should be between 3 to 30 characters",
              },
				last_name: {
                      required: "Please enter a valid  Last name",
                      minlength: "Last name should be between 3 to 30 characters",
                      maxlength: "Last name should be between 3 to 30 characters",
                    
                  },
        email: {
                    required: "Please enter a valid email",
                   
                  },
       
       
        primary_phone: {
                    required: "Please enter a valid number",
                    minlength: "Phone number should be mininum 10 digits",   
                   
               },
              
         phone2: {
                 minlength: "Phone number should be mininum 10 digits",
              }, 
              
       username: {
                 required: "Please enter a valid username",
              },  

       password: {
                 required: "Please enter a valid password",
              },                
     }
    
    });
   }); 
    