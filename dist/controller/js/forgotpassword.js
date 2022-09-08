var element =  $("#error");
element.css("display", "none")

// var errors = "";
const loginForm = document.getElementById("login_form")
$("#respass_form").submit((e)=>{
    e.preventDefault();
})

$(document).ready(()=>{
    
    $("#resbtn").click(()=>{
        element.css("background", "#ffd6d6")
        var errors ='';
        element.css("display", "none")
        var email = $("#email").val()

        if(email === '' ){
        
            
            var errors ="Enter your Email."
            
        }else{
            $.ajax({
                type:'post',
                url:"controller/forgotpassword.php",
                data: {
                    email:email,
                },
                success:function(data,status){
                    
                    
                        if(data === 'success'){

                            
                            errors = 'password reset link has been sent to your email'
                            $("#error").html(errors)
                            if(errors.length != ""){
                            element.css("display", "block")
                            element.css("background", "#9fff9f")
                            }else{

                                element.css("display", "none")
                            }


                            setTimeout(function(){ window.location = 'index.php'; }, 3000)




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

        }


         $("#error").html(errors)
        if(errors.length != ""){
        element.css("display", "block")
        }else{

            element.css("display", "none")
        }
        
        

    })

   



})