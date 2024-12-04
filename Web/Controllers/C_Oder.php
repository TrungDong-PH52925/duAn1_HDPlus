<?php
class OrderController {
    private $orderModel;

    public function __construct($orderModel) {
        $this->orderModel = $orderModel;
    }

    public function checkout() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }

        $userId = $_SESSION['user_id'];
        $products = $_SESSION['cart'] ?? [];
        $address = $_POST['address'] ?? '';
        $totalAmount = array_reduce($products, function ($sum, $product) {
            return $sum + ($product['quantity'] * $product['price']);
        }, 0);

        if (empty($address)) {
            echo "Vui lòng nhập địa chỉ giao hàng!";
            return;
        }

        $orderId = $this->orderModel->createOrder($userId, $products, $totalAmount, $address);
        if ($orderId) {
            unset($_SESSION['cart']);
            echo "Đặt hàng thành công! Mã đơn hàng: $orderId";
        } else {
            echo "Có lỗi xảy ra, vui lòng thử lại!";
        }
    }
}
?>
