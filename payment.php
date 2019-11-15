<?php include 'head.php' ?>
<body>
<?php include 'logic/brain.php' ?>
    <div class="container">
        <div class="cardPayment">
        <form method="POST" action="payment.php">
            <div class="titlePayment">
                Tukupedia
            </div>

            <div class="dataBuy">
                Detail Pembelian
            </div>
            <div class="dataDetailProduct">
                <?php

                    echo "<b>Nama barang =</b> $productName <br><br>";
                    echo "<b>Harga Barang = </b> Rp " . number_format("$productPrice", 0, ",", ".") . "<br><br>";
                    echo "<b>Jumlah beli =</b> $countProduct";
                    
                ?>
            </div>

            <div class="dataDetailDiscount">
                <?php
                    if ($sumPrice >= $disc){
                        echo "<div class='acceptDiscount'> Horeyy dapet diskon 10% </div>";
                        echo "Kamu hemat = Rp " . number_format("$countDiscount", 0, ",", ".") . " <br> <br> ";
                        echo "<b> Total yang harus di bayar = <span class='totalPriceData'> Rp " . number_format("$cheap", 0, ",", ".") . " </span> </b>";
                    } else {
                        echo "<div class='acceptDiscount'> Yahhh, engga dapet diskon </div> <br> ";
                        echo "<b> Total yang harus di bayar = <span class='totalPriceData'> Rp " . number_format("$sumPrice", 0, ",", ".") . " </span> </b>";
                    }
                ?>
            </div>

            <div onclick="succes()" class="btnPrimary">
                Bayar Dong
            </div>

        </form>
        </div>


    </div>
</body>
</html>


<script>
function succes(){
    alert("Selamat barang yang Anda beli berhasil terbayarkan.");
}
</script>