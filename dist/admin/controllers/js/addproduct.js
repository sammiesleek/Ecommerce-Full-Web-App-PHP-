$("#product_form").submit(function(e){
    e.preventDefault()
})




$(document).ready(()=>{

    
    $("#submitpro_form").click(()=>{

            var proname = $("#productname").val();
            var procategory = $("#Categories").val();
            var proslug = $("#productslug").val();
            var prodescription = $("#productdescription").val();
            var proprice = $("#productprice").val();
            var prodetails = $("#productdetails").val();
            var proquantity = $("#productquantity").val();
            


            var productdata = new FormData();            
             var mainimg = document.getElementById("mainimg").files[0]  
             if(mainimg){

                 productdata.append('mainimg', mainimg);
                 document.querySelectorAll(".thumbnails").forEach((thumb,i) =>{
                     if(thumb.files[0]){
                         productdata.append('thumb'+i ,thumb.files[0])
                     }
     
                 });


                 if(proname != ''){
                    productdata.append('productname', proname);

                    if(procategory != ''){
                         productdata.append('productcategory', procategory);
                         if(proslug != ''){
                             productdata.append('productslug', proslug);
                             if(prodescription != ''){
                                 productdata.append('productdescription', prodescription);
                                 if(proprice != ''){
                                     productdata.append('productprice', proprice);
                                     

                                    document.querySelectorAll('.pro_color').forEach((color,i)=>{
                                       if(color.value != ''){
                                        productdata.append('color'+ i, color.value)
                                       }
                                    });

                                    document.querySelectorAll('.prosize').forEach((size,i)=>{
                                     

                                        if(size.checked){
                                            productdata.append('size'+i, size.value)
                                            
                                        }
                                    });

                                    if(prodetails != ''){
                                        productdata.append('productdetails', prodetails)
                                    }
                                    if(proquantity != ''){
                                        productdata.append('productquantity', proquantity)
                                    }


                                 }

                             }else{

                             }
                         }else{

                         }
                    }else{

                    }
                 }else{

                 }



             }      
             
            

           
            
        
       

        
        $.ajax({
            type:'post',
            url:'controllers/add_product.php',
            data:
              productdata,
            
             processData: false,
             contentType: false,
            success:function(data,status){
                console.log(data)
            }

        
        })
    })



})
