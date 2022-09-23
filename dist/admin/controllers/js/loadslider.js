
    $('#holder').css("display","none")

    


 const loadslide =()=>{

            $.ajax({
                url:"controllers/loadslider.php",
                type:"post",
                success:function(data,status){

                    $("#slider-body").html(data)
                }

            })
    }
    loadslide();