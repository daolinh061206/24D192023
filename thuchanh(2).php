<?php
$products = [
    [
        "name" => "Tai nghe",
        "price" => 2000000,
        "quantity" => 5
    ],
    [
        "name" => "Sạc dự phòng",
        "price" => 500000,
        "quantity" => 20
    ],
    [
        "name" => "Bàn phím cơ",
        "price" => 500000,
        "quantity" => 20
    ],
    [
        "name" => "Chuột không dây",
        "price" => 300000,
        "quantity" => 15
    ],
    [   
        "name" => "Chuột có dây",
        "price" => 150000,
        "quantity" => 25
    ]
];

echo "<h2> DANH SÁCH SẢN PHẨM </h2> <br>";
foreach ($products as $product)  
{   
    $Thanhtien = $product["price"] * $product["quantity"];
    echo "Tên: " . $product["name"] . "<br>";
    echo "Giá: " . number_format($product["price"], 0, ",", ".") . " VNĐ<br>";
    echo "Số lượng: " . $product["quantity"] . "<br>";
    echo "Thành tiền: " . number_format($Thanhtien, 0, ",", ".") . " VNĐ<br><br>";
    echo "<hr>";
}

function totalValue($products) 
{
    $total = 0;
    foreach ($products as $product) 
    {
        $total += $product["price"] * $product["quantity"];
    }
    return $total;
}
$total = totalValue($products);
echo "Tổng giá trị tất cả sản phẩm: " . number_format($total, 0, ",", ".") . " VNĐ";
?>