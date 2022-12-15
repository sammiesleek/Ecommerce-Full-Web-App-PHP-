

 // load categories
    const  loadcatgories = (()=>{
        var innerel = $("#tablebody")
        // const innerel = document.getElementById("tablebody");
        // console.log(innerel)
        $.ajax({
            type:'post',
            url:'controllers/load_categories.php',
            data:{
                type:'categories'
            },
            success:function(data,status){
                innerel.html(data)
             }
    
        })

    })

    loadcatgories();




    $("#sub_cat").click(()=>{
       setTimeout(  
            
            ()=>{

                 const target = document.querySelectorAll(".cat_body")
    
            // console.log(target)   
            target.forEach((element) => {
             var elementId = element.id
             var elementtarget = element.id
             var desti = $("." + elementtarget)
               
                $.ajax({
                    type:'post',
                    data:{
                        id:elementId,
                        type:'subcat'
                    },
                    url:'controllers/load_sub_category.php',
                    success:function(data,status){
                    desti.html(data)
                    }
         
                })
        
                
            });
    


            }  
        
        , 3000);

    


    })


    // load sub categories
    
    
    // $(document).ready(()=>{
       
        setTimeout(  
            
            ()=>{

                 const target = document.querySelectorAll(".cat_body")
    
            console.log(target)   
            target.forEach((element) => {
             var elementId = element.id
             var elementtarget = element.id
             var desti = $("." + elementtarget)
               
                $.ajax({
                    type:'post',
                    data:{
                        id:elementId,
                        type:'loadsubcat'
                    },
                    url:'controllers/load_sub_category.php',
                    success:function(data,status){
                    desti.html(data)
                    }
         
                })
        
                
            });
    


            }  
        
        , 1000);

    
    
    // })








        // delete categories

    const delete_cat = ((catid)=>{

         $.ajax({
            type:'post',
            url:'controllers/delete_cat.php',
            data:{
                itdata:catid
            },
                
            success:function(data,status){
                console.log(data);

                loadcatgories();
                        
            }

        })

     } ) 
    
     
    

   
        
    
    



