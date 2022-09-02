$(document).ready(()=>{

    


 const loaduser =()=>{

            $.ajax({
                url:"controllers/loadslider.php",
                type:"post",
                success:function(data,success){

                    $("#slider-body").html(data)
                }

            })
    }

    loaduser();
    


})