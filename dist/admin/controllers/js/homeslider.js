
$(document).ready(()=>{

   

    
    $("#slider-form").submit((e)=>{
         e.preventDefault();
        
        
        const addForm= document.getElementById("slider-form")
    
      $.ajax({
                url:"controllers/homeslider.php",
                type:'post',
                data: new FormData(addForm),
                contentType:false,
                processData:false,
                
                success:function(data, status){
                    
                    console.log(data)
                }
            })
               
    
    })


    // load sliders 

    

})





