$("#product_form").submit(function (e) {
  e.preventDefault();
});

$(document).ready(() => {
  $("#submitpro_form").click(() => {
    var proname = $("#productname").val();
    var procategory = $("#Categories").val();
    var prosubcategory = $("#subCategories").val();
    var proslug = $("#productslug").val();
    var prodescription = $("#productdescription").val();
    var proprice = $("#productprice").val();
    var prodetails = $("#productdetails").val();
    var proquantity = $("#productquantity").val();
    var prosize = $("#prosize").val();

    var productdata = new FormData();

    var mainimg = document.getElementById("mainimg").files[0];
    var mainalt = document.getElementById("mainalt").files[0];
    if (mainimg && mainalt) {
      productdata.append("mainimg", mainimg, "mainpic");
      productdata.append("mainalt", mainalt, "altpic");
      document.querySelectorAll(".thumbnails").forEach((thumb, i) => {
        if (thumb.files[0]) {
          productdata.append("thumb" + i, thumb.files[0]);
        }
      });

      if (proname != "") {
        productdata.append("proname", proname);

        if (procategory != "") {
          productdata.append("procategory", procategory);
          if (prosubcategory != "") {
            productdata.append("prosubcategory", prosubcategory);

            if (proslug != "") {
              productdata.append("proslug", proslug);
              if (prodescription != "") {
                productdata.append("prodescription", prodescription);
                if (proprice != "") {
                  productdata.append("proprice", proprice);

                  document
                    .querySelectorAll(".pro_color")
                    .forEach((color, i) => {
                      if (color.value != "") {
                        productdata.append(
                          "color" + i,
                          color.value + ".procolor"
                        );
                      }
                    });

                  document.querySelectorAll(".prosize").forEach((size, i) => {
                    if (size.checked) {
                      productdata.append(
                        i + ".prosize",
                        size.value + ".prosize"
                      );
                    }
                  });

                  if (prodetails != "") {
                    productdata.append("prodetails", prodetails);

                    if (proquantity != "") {
                      productdata.append("proquantity", proquantity);
                      //   console.log(productdata);

                      $.ajax({
                        type: "post",
                        url: "controllers/add_product.php",
                        data: productdata,
                        processData: false,
                        contentType: false,
                        success: function (data, status) {
                          console.log(data);
                        },
                      });
                    } else {
                    }
                  } else {
                  }
                } else {
                }
              } else {
              }
            } else {
            }
          } else {
            alert("Select Subcategory");
          }
        } else {
        }
      } else {
      }
    } else {
      alert("add main image");
    }
  });
});
