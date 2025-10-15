<?php
header('Content-Type: application/json');

try {
    include('../db.php');

    $id     = intval($_POST['id'] ?? 0);
    $status = trim($_POST['status'] ?? '');
    $served_by = trim($_POST['served_by'] ?? ''); // optional

    if (!$id || !$status) {
        echo json_encode(['status' => 'error', 'message' => 'Missing parameters.']);
        exit;
    }

    $stmt = $pdo->prepare("
        UPDATE requests 
        SET status = :status, 
            serving_position = CASE WHEN :status = 'Serving' THEN 1 ELSE NULL END,
            served_by = :served_by,
            updated_at = NOW() 
        WHERE id = :id
    ");

    $stmt->execute([
        'status'    => $status,
        'served_by' => $served_by,
        'id'        => $id
    ]);

    echo json_encode(['status' => 'success', 'message' => 'Queue updated successfully.']);

} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
