// $(document).ready(()=>{
var element =  $("#error");
element.css("display", "none")
element.css("transition", "all ease .5s")
   

    
    $("#add_category_form").submit((e)=>{
         e.preventDefault();
        
        element.css("background", "#ffd6d6")
        var errors ='';
        element.css("display", "none")
        const addForm= document.getElementById("add_category_form")
    
      $.ajax({
                url:"../controller/add_sub_category.php",
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
                                setTimeout(()=>{
                                        element.css("display", "none")
                                }, 2000)

                            }else{

                                element.css("display", "none")
                            }
                        }else{
                            errors = data
                            $("#error").html(errors)
                            if(errors.length != ""){
                            element.css("display", "block")

                            
                                    setTimeout(()=>{
                                        element.css("display", "none")
                                }, 2000)
                            
                            }else{

                                element.css("display", "none")
                            }

                        }
                }
            })


         $("#error").html(errors)
        if(errors.length != ""){
        element.css("display", "block")

            setTimeout(()=>{
                element.css("display", "none")
            }, 2000)
        }else{

            element.css("display", "none")
        }
               
    
    })



    

// })





