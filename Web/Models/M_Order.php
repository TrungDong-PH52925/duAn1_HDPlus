<?php
class OrderModel {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function createOrder($customerId, $products, $totalAmount, $address) {
        $stmt = $this->db->prepare("INSERT INTO orders (customer_id, total_amount, address, status) VALUES (?, ?, ?, 'Pending')");
        $stmt->execute([$customerId, $totalAmount, $address]);
        $orderId = $this->db->lastInsertId();

        foreach ($products as $product) {
            $stmt = $this->db->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
            $stmt->execute([$orderId, $product['id'], $product['quantity'], $product['price']]);
        }
        return $orderId;
    }
}
?>
