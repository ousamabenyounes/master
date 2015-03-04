 $().ready(function() {
   
   $.validator.addMethod("emailcheck", function(value, element) {
          return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/i.test(value);
                    },"should match the pattern(eg: test@abc.com)");
                    
   $.validator.addMethod("phonecheck", function(value, element) {
          return this.optional(element) || /[0-9 -()+]+$/i.test(value);
                    },"Phone number must be numeric"); 
                    
   $("#add_company_form").validate({
     rules: {
				name: {
                    required: true,
                    minlength: 3,
                    maxlength: 30
                  },
                  
				address: {
                    required: true,
                  },
                  
        State: {
                    required: true,
                  },
          
        city: {
                    required: true,
               }, 
               
        zip_code: {
                    required: true,
                    minlength: 6,
  
                  },
        email: {
                 required: true,
                 emailcheck: true,                 
               },
               
        primary_phone: {
                 required: true,
                 minlength: 10,                 
                 phonecheck: true,
               },
               
        secondary_phone: {
                 minlength: 10, 
                 phonecheck: true,
               },                  
       },
       
     messages: {
				name: {
                      required: "Please enter a valid  Company name",
                      minlength: "Company name should be between 3 to 30 characters",
                      maxlength: "Company name should be between 3 to 30 characters"
              },
				address: {
                    required: "Please enter a valid address",
                    
                  },
        State: {
                    required: "Please enter a valid state",
                   
                  },
                  
        city: {
                    required: "Please enter a valid city",
                   
               },
               
        zip_code: {
                    required: "Please enter a valid zip Code",
                    minlength: "Zip Code should be mininum 6 digits",
                    
                  },
        email: {
                  required: "Please enter a valid email",
               },
         
        primary_phone: {
                 required: "Please enter a valid phone number",
                 minlength: "Phone number should be mininum 10 digits",   
               },
       secondary_phone: {
                 minlength: "Phone number should be mininum 10 digits",
              },                
     }
    
    });
   }); 
    