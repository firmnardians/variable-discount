<?php include 'head.php' ?>
<body>
    <div class="container">
        <div class="cardPayment">
            <form method="POST" action="payment.php">
                <div class="titlePayment">
                    Tukupedia
                </div>
            
                    <div class="cardDiscons">
                        Dapatkan diskon 10% setiap pembelian barang minimal 
                        Rp 10.000
                    </div>

                <div class="cardDetail">
                    <div class="cardDataDetail">
                        <div class="titleItems">
                            Nama Barang :
                        </div>
                        <div class="inputItems">
                            <input class="dataInput" name="productName" type="text">
                        </div>
                    </div>

                    <div class="cardDataDetail">
                        <div class="titleItems">
                            Harga Barang :
                        </div>
                        <div class="inputItems">
                            <input class="dataInput" name="productPrice" type="text">
                        </div>
                    </div>

                    
                    <div class="cardDataDetail">
                        <div class="titleItems">
                            Jumlah beli :
                        </div>
                        <div class="inputItems">
                            <input class="dataInput" name="countProduct" type="number" value="1">
                        </div>
                    </div>

                    <input type="submit" class="btnPrimary" value="Beli barang">
                </div>
            </form>
        </div>


    </div>
</body>
</html>
