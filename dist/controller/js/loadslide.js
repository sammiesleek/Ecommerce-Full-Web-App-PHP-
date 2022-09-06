 const loadslide =()=>{

            $.ajax({
                url:"controller/loadslide.php",
                type:"post",
                success:function(data,success){

                    $("#slidiner").html(data)
                    console.log(data)
                }

            })
    }

    loadslide();


  


    
