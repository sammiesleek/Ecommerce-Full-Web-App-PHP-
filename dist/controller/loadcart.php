<?php

use function PHPSTORM_META\type;

     include("../config/session.php");
     $output ="";

     $productid=($_POST['productid']);
     $type=($_POST['type']);


     $query = "SELECT * FROM products WHERE product_id=?";
     $stmt= $conn->prepare($query);
     $stmt->bind_param('s', $productid);
    if($stmt->execute()){


        $result = $stmt->get_result();
        $product=$result->fetch_assoc();

        if($type == 'cartpop'){

            $output .= '
        <li>
            <a href="product.php?product_id='.$product['product_id'].'" class="sidekka_pro_img"><img src="admin/product_images/'.$product['main_img'].'"
                    alt="product"></a>
            <div class="ec-pro-content">
                <a href="product.php?product_id='.$product['product_id'].'" class="cart_pro_title">'.$product['product_name'].'</a>
                <span class="cart-price"><span>'.$product['current_price'].'</span> x 1</span>
                <div class="qty-plus-minus">
                    <input data-productquantity="'.$product['product_quantity'].'" class="qty-input" type="text" name="ec_qtybtn" value="1" />
                </div>
                <a href="javascript:void(0)" class="remove removefmcart">×</a>
            </div>
        </li>
            
            ';
        }

        if($type == 'cartpage'){
            $output.= '
            
                <tr>
                <td data-label="Product" class="ec-cart-pro-name"><a
                            href="product.php?product_id='.$product['product_id'].'"><img
                            class="ec-cart-pro-img mr-4"
                                src="admin/product_images/'.$product['main_img'].'" alt="" />'.$product['product_name'].'</a></td>
                <td data-label="Price" class="ec-cart-pro-price"><span
                        class="amount">'.$product['current_price'].'</span></td>
                <td data-label="Quantity" class="ec-cart-pro-qty"
                    style="text-align: center;">
                    <div class="cart-qty-plus-minus ">
                        <input data-productquantity="'.$product['product_quantity'].'" class="cart-plus-minus" type="text"
                            name="cartqtybutton" value="1" />
                    </div>
                </td>
                <td data-label="Total" class="ec-cart-pro-subtotal">'.$product['current_price'].'</td>
                <td data-label="Remove" class="ec-cart-pro-remove">
                    <a data-product_id="'.$product['product_id'].'"  class="removefmcart" href="javascript:void(0)"><i class="ecicon eci-trash-o"></i></a>
                </td>
            </tr>
            
            
            ';
        }

        
        
        
        
    }
    echo $output;




?>
