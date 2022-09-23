$(document).ready(()=>{
var element =  $("#error");
element.css("display", "none")
   

    
    $("#category_form").submit((e)=>{
         e.preventDefault();
        
        element.css("background", "#ffd6d6")
        var errors ='';
        element.css("display", "none")
        const addForm= document.getElementById("category_form")
    
      $.ajax({
                url:"../controller/add_category.php",
                type:'post',
                data: new FormData(addForm),
                contentType:false,
                processData:false,
                
                success:function(data, status){

                     setTimeout(()=>{
                        loadcatgories();
                        element.css("display", "none")
                    },2000, )
                    
                     if(data === 'success'){


                        
                            
                            errors = 'New Category added'
                            
                            $("#error").html(errors)
                            if(errors.length != ""){
                            element.css("display", "block")
                            element.css("background", "#9fff9f")

                           

                            
                            }else{

                                element.css("display", "none")
                            }
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


         $("#error").html(errors)
        if(errors.length != ""){
        element.css("display", "block")
        }else{

            element.css("display", "none")
        }
               
    
    })



    

})





