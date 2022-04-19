<?php

function component($productname, $oldprice,$productprice, $productimg, $productid){
    $product_url = "video.php?product_id=".$productid;
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img class=\"item\" src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                New product in market
                            </p>
                             <button name=\"video\"><a href='$product_url'>view More</a></button>
                             
                            <h5>
                                <small><s class=\"text-secondary\"></br>rs $oldprice</s></small>
                                <span class=\"price\">$productprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid,){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img class=\"item\" src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$productprice</h5>
                               <br/><br/>
                                <button type=\"submit\" style=\"padding-inline-block:1rem; \" class=\"btn btn-danger mx-4\" name=\"remove\">Remove</button>
                            </div>
                         
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

function moreview($productname,$productoverview,$point1,$point2,$point3,$productvideo ){
    $element="
     <div class=\"main\">

    <div class=\"col\" style=\"margin:2rem;   font-family: 'Arial Narrow Bold',Verdana; border-right:5px solid orange; padding-right:2rem; margin-bottom:0\">

   <h1 style=\"color:red\">$productname<br/><br/></h1>
    <h4 > <b><u>Description</u></b></h4>
    <h6 >$productoverview</h6>
    <ul>
        <li>$point1</li>
        <li>$point2</li>
        <li>$point3</li>
    </ul>

<br/>
   
                        

</div>
    <div class=\"col\">
       <video width=\"720\" height=\"540\" controls>
  <source src=\"$productvideo\"></video> 
        
    </div>
    ";
    echo $element;
}

















