<?php include 'includes/header.php'; ?>

<?php
$products = [
    [
        'name' => '키보드',
        'price' => 30000,
        'stock' => 10
    ],
    [
        'name' => '마우스',
        'price' => 15000,
        'stock' => 3
    ],
    [
        'name' => '모니터',
        'price' => 120000,
        'stock' => 0
    ]
];

function getStockMessage($stock)
{
    // 재고가 5개 이상이면 "재고 충분"
    if ($stock>=5) {
        $data = "재고 충분";
    }
    
    // 재고가 1개 이상 4개 이하이면 "재고 부족"
    else if (($stock<=4)&&($stock>=1)) {
        $data = "재고 부족";
    }
    
    // 재고가 0개이면 "품절"
    else {
        $data = "품절";
    }
    return $data;
}

function total_amount($price, $stock){
    $amount=$price * $stock;

    return $amount;
}
?>

<table>
    <tr>
        <th>상품명</th>
        <th>가격</th>
        <th>재고</th>
        <th>재고 상태</th>
    </tr>
    <!-- foreach로 상품 출력 -->
     <?php
     foreach ($products as $product) {
?>
    <tr>
        <th> <?php echo $product['name'] ?></th>
        <th> <?php echo $product['price'] ?></th>
        <th> <?php echo $product['stock'] ?></th>
        <th> <?=getStockMessage($product['stock']) ?></th>
</tr>
     <?php } ?>
</table>

<?php include 'includes/footer.php'; ?>
