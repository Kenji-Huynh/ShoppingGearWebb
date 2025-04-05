<?php
// filepath: d:\Đồ Án Web - Update version\web_gamechair\save_order.php
// Kết nối đến cơ sở dữ liệu MySQL
$host = 'localhost';
$username = 'root'; // Thay đổi theo thông tin cấu hình của bạn
$password = ''; // Thay đổi theo thông tin cấu hình của bạn
$database = 'gamechair_db'; // Tên database của bạn

// Nhận dữ liệu từ request
$data = json_decode(file_get_contents('php://input'), true);

// Kiểm tra dữ liệu đầu vào
if (empty($data['fullname']) || empty($data['phone']) || empty($data['address']) || empty($data['items'])) {
    echo json_encode(['success' => false, 'message' => 'Thiếu thông tin đơn hàng!']);
    exit;
}

try {
    // Kết nối database
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Bắt đầu transaction
    $conn->beginTransaction();
    
    // Thêm thông tin đơn hàng vào bảng orders
    $stmt = $conn->prepare("INSERT INTO orders (fullname, phone, address, payment_method, total_price, order_date) 
                          VALUES (:fullname, :phone, :address, :payment_method, :total_price, :order_date)");
    
    $stmt->bindParam(':fullname', $data['fullname']);
    $stmt->bindParam(':phone', $data['phone']);
    $stmt->bindParam(':address', $data['address']);
    $stmt->bindParam(':payment_method', $data['paymentMethod']);
    $stmt->bindParam(':total_price', $data['totalPrice']);
    $stmt->bindParam(':order_date', $data['orderDate']);
    
    $stmt->execute();
    
    // Lấy ID của đơn hàng vừa tạo
    $orderId = $conn->lastInsertId();
    
    // Thêm chi tiết từng sản phẩm vào bảng order_items
    $stmtItems = $conn->prepare("INSERT INTO order_items (order_id, product_id, product_name, product_category, quantity, price) 
                               VALUES (:order_id, :product_id, :product_name, :product_category, :quantity, :price)");
    
    foreach ($data['items'] as $item) {
        $stmtItems->bindParam(':order_id', $orderId);
        $stmtItems->bindParam(':product_id', $item['id']);
        $stmtItems->bindParam(':product_name', $item['name']);
        $stmtItems->bindParam(':product_category', $item['category']);
        $stmtItems->bindParam(':quantity', $item['quantity']);
        $stmtItems->bindParam(':price', $item['price']);
        
        $stmtItems->execute();
    }
    
    // Hoàn tất transaction
    $conn->commit();
    
    echo json_encode(['success' => true, 'order_id' => $orderId, 'message' => 'Đặt hàng thành công!']);
    
} catch(PDOException $e) {
    // Rollback transaction nếu có lỗi
    if ($conn) {
        $conn->rollBack();
    }
    
    echo json_encode(['success' => false, 'message' => 'Lỗi: ' . $e->getMessage()]);
}
?>