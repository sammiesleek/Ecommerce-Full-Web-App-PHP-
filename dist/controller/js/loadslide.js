// $(document).ready(()=>{


    const loadslide =()=>{
    
                $.ajax({
                    url:"controller/loadslide.php",
                    type:"post",
                    success:function(data,success){

                        // document.getElementById("#slidiner").append(data);
    
                        $("#slidiner").append(data)
                        
                    }
    
                })
        }
    
        loadslide();
// })



  


    
