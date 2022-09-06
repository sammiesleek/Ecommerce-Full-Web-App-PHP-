$('#holder').css("display","none")
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
                    loadslide();
                    
                }
            })
               
    
    })


    // load sliders 

    

})





