const productsid = JSON.parse(localStorage.getItem("productsid"));

const loadcat = () => {
  productsid
    .filter((id) => id !== "remove")
    .forEach((element) => {
      // if (element.len > 5) {
      $.ajax({
        url: "controller/loadcart.php",
        type: "post",
        data: {
          productid: element,
          type: "cartpop",
        },
        success: function (data, success) {
          $("#cart_enc").append(data);
        },
      });
      // }
    });
};

loadcat();
