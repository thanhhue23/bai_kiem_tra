<?php
// Bài 1:
function isPrime($n) {
    if ($n < 2) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; 
        }
    }
    return true; 
}
echo "Bài 1. Danh sách các số nguyên tố từ 1 đến 100: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";
?>


<?php
// Bài 2:
$products = array(
    "sản phẩm 1" => array("name" => "Váy", "price" => 200000, "quantity" => 20),
    "sản phẩm 2" => array("name" => "Áo Khoác", "price" => 300000, "quantity" => 30),
);
echo "Bài 2. Thông tin của tất cả sản phẩm: <br>";
foreach ($products as $key => $product) {
    echo "Product ID: " . $key . "<br>";
    echo "Name: " . $product['name'] . "<br>";
    echo "Price: " . $product['price'] . "<br>";
    echo "Quantity: " . $product['quantity'] . "<br>";
    echo "<br>";
}

function tongGiatri($products) {
    $sum = 0;
    foreach ($products as $product) {
        $sum += $product['price'] * $product['quantity'];
    }
    return $sum;
}
$sum = tongGiatri($products);
echo "Tổng giá trị của tất cả sản phẩm: " . $sum";
?>