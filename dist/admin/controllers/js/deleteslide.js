// $(document).ready(()=>{
    
       

    
    const deleteslide =(slideid)=>{
        
         $.ajax({
        url:"controllers/deleteslide.php",
        type:"post",
        data:{
            idsent:slideid,
        },
        success:function(data, status){
           loadslide();
        }
    });
    }
   
// })

