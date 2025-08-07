<?php
enum OrderStatus
{
    case Pending;
    case Paid;
    case Canceled;
}

function printStatus(OrderStatus $status)
{
    switch ($status) {
        case OrderStatus::Pending:
            echo "Đơn hàng đang chờ duyệt.\n";
            break;
        case OrderStatus::Paid:
            echo "Đơn hàng đã thanh toán.\n";
            break;
        case OrderStatus::Canceled:
            echo "Đơn hàng đã hủy thành công.\n";
            break;
    }
}

// TEST_CASE:
$status = OrderStatus::Paid;
printStatus($status);
