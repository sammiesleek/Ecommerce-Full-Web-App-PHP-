
    $('#holder').css("display","none")
// $(document).ready(()=>{

    


 const loadslide =()=>{

            $.ajax({
                url:"controllers/loadslider.php",
                type:"post",
                success:function(data,success){

                    $("#slider-body").html(data)
                }

            })
    }

    loadslide();



    


    


// })