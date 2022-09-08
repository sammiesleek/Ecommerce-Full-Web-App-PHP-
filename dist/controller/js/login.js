var element =  $("#error");
element.css("display", "none")

// var errors = "";
const loginForm = document.getElementById("login_form")
$("#login_form").submit((e)=>{
    e.preventDefault();
})

$(document).ready(()=>{
    
    $("#logbtn").click(()=>{
        element.css("background", "#ffd6d6")
        var errors ='';
        // element.css("display", "none")
        var password = $("#password").val()
        var email = $("#email").val()

        if(password === '' || email === '' ){
        
            
            var errors ="Enter your Email and password"
            
        }else{
            $.ajax({
                type:'post',
                url:"controller/login.php",
                data: {
                    email:email,
                    password:password
                },
                success:function(data,status){
                    
                    
                        if(data === 'success'){

                            
                            errors = data
                            $("#error").html(errors)
                            if(errors.length != ""){
                            element.css("display", "block")
                            element.css("background", "#9fff9f")
                            }else{

                                element.css("display", "none")
                            }


                            setTimeout(function(){ window.location = 'index.php'; }, 1000)




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