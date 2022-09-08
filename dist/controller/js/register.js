
$("#form-reg").submit(function(e){
    e.preventDefault();
})




var element =  $("#error");
 element.css("display", "none")





$(document).ready(()=>{
    
    
    $("#submi-form").click(function(){
        var errors = "";
         element.css("background", "#ffd6d6")
        
       
    
        var Firstname = $("#Firstname").val();
        var Lastname = $("#Lastname").val();
        var Email = $("#Email").val();
        var Phone = $("#Phone").val();
        var City = $("#City").val();
        var  Postalcode= $("#Postalcode").val();
        var Country = $("#Country").val();
        var State = $("#State").val();
        var Address = $("#Address").val();
        var Password = $("#Password").val();
        var Confpass = $("#Confpass").val();
    
    
    
        if(Firstname != "" &&  Lastname != ""){
            if(Email != "" ){
                if(Phone != "" ){                   
                        if(Postalcode != "" ){
    
                            if(Country ){
    
                                if(State ){
    
                                    if(State){
    
                                        if(Address ){
        
                                            if(Password.length > 5  ){
        
                                                if(Confpass === Password){
        
        
                                                     $.ajax({
                                                        url:"controller/register.php",
                                                        type:'post',
                                                        data:{
                                                            Firstname:Firstname,
                                                            Lastname:Lastname,
                                                            Email:Email,
                                                            Phone:Phone,
                                                            City:City,
                                                            Postalcode:Postalcode,
                                                            Country:Country,
                                                            State:State,
                                                            Address:Address,
                                                            password:Password,
                                                            Confpass:Confpass
        
                                                        },
                                                        success:function(data, status){
                                                           
                                                            
                                                                if(data === 'success'){

                                                                    
                                                                    errors = 'Account has been created succesfully'
                                                                    $("#error").html(errors)
                                                                    if(errors.length != ""){
                                                                    element.css("display", "block")
                                                                    element.css("background", "#9fff9f")
                                                                    }else{

                                                                        element.css("display", "none")
                                                                    }


                                                                  setTimeout(function(){ window.location = 'login.php'; }, 1000)




                                                                }else{
                                                                    errors = data
                                                                   $("#error").html(errors)
                                                                   if(errors.length != ""){
                                                                   element.css("display", "block")
                                                                   }else{
   
                                                                       element.css("display", "none")
                                                                   }

                                                                }



                                                                    

                                                                    

                                                                        

                                                               


                                                                
                                                            
                                                        }
                                                    })
        
        
                                                }else{
                                                     var errors=('Password do not match !');
                                                }
                    
                                            }else{
                                                 var errors=('Password too short !');
                                            }
                                        }else{
                                             var errors=('Enter your Address');
                                        }
                                    }else{
                                        var errors=('Select your  City !');
                                    }
    
                
                                }else{
                                     var errors=('Select your  State !');
                                }
                
                            }else{
                                 var errors=('Select your Country!');
                            }
                
                        }else{
                             var errors=('Enter Postalcode !');
                        }
                }else{
                     var errors=('Enter your Phone Number  !');
                }
            }
    
        }else{
               var errors = 'Enter your full name';
        }
    
    
    
        
        $("#error").html(errors)
        if(errors.length > 2){
        element.css("display", "block")
        }else{
            element.css("display", "none")
        }
        
    
    })

    



    
    // $("#form-reg").submit((e)=>{
    //     e.preventDefault()
    //     // alert('hi') new
        
    //     var form_data = $("#form-reg");
    
        
    //     $.ajax({
    //         url:"controller/register.php",
    //         type:'post',
    //         data: {
    //             hello:"hello"
                
    //         },
    //         processData:false,
    //         dataType: "json",
    //         success:function(data, status){
                
    //             console.log(data)
    //         }
    //     })


        
    // })


})    






