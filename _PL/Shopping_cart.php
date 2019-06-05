<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Shopping Cart</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col" class="text-center">Product</th>
                        <th scope="col" class="text-center">Available</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col" class="text-center">Price</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
<?php
require_once dirname(__FILE__) .'/../_BL/Venda.php';
require_once dirname(__FILE__) .'/../_BL/Encomenda.php';
require_once dirname(__FILE__) .'/../_BL/Jogo.php';


$idEnc=JogoController::GetIdEnc();
$BFetch =JogoController::GetVenda($idEnc);
$totalPrice=0;

while ($bb = $BFetch->fetch()){
    $row =JogoController::GetJogoByID($bb);
    $rowStock =JogoController::GetStockByID($bb);
if($rowStock['quantidade']>0){$qq="Yes";}
else{$qq="No";}
    echo'<tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td class="text-center">'.$row['nome'].'</td>
                        <td class="text-center">'.$qq.'</td>
                        <td class="text-center">'.$rowStock['quantidade'].'</td>
                        <td class="text-center">'.$row['preco'].'€</td>
                        <form method="post">
                        <td class="text-right"><button name="DeleteShopping" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </form> 
                    </tr>';
                    $aa=(int)$row['preco'];
                      (int)$totalPrice+=$aa;
                      '';}?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>IVA-Total</td>
                        <td class="text-right"><?php $iva=0.23*$totalPrice; echo (int)$iva;?> €</td>
                    </tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>Total sem-IVA</td>
    <td class="text-right"><?php echo (int)$totalPrice;?> €</td>
</tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong><?php echo (int)$totalPrice+$iva;?> €</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a  href="?page=Produtos" >
                        <button  class="btn btn-block btn-light">Continue Shopping</button>
                    </a>

                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <form method="post">
                        <input name="Valor" value="<?php echo (int)$totalPrice+$iva  ?>" hidden>
                        <button class="btn btn-lg btn-block btn-success text-uppercase"  value="$idEnc" name="ComprarCheckOut">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>