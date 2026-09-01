<?php
require_once __DIR__ . '/db.php';

function getPosts($limit = null, $status = 'published') {
    $db = Database::getInstance()->getConnection();
    $sql = "SELECT * FROM posts WHERE status = :status ORDER BY published_at DESC";
    if ($limit) {
        $sql .= " LIMIT :limit";
    }
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':status', $status);
    if ($limit) {
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getEvents($status = 'upcoming', $limit = null) {
    $db = Database::getInstance()->getConnection();
    $sql = "SELECT * FROM events WHERE status = :status ORDER BY event_date ASC";
    if ($limit) {
        $sql .= " LIMIT :limit";
    }
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':status', $status);
    if ($limit) {
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getGalleryImages($album = null) {
    $db = Database::getInstance()->getConnection();
    $sql = "SELECT * FROM gallery_images";
    if ($album) {
        $sql .= " WHERE album = :album";
    }
    $sql .= " ORDER BY sort_order ASC";
    $stmt = $db->prepare($sql);
    if ($album) {
        $stmt->bindParam(':album', $album);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveFormSubmission($form_type, $data) {
    $db = Database::getInstance()->getConnection();
    $stmt = $db->prepare("INSERT INTO form_submissions (form_type, name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([
        $form_type,
        $data['name'] ?? '',
        $data['email'] ?? '',
        $data['phone'] ?? '',
        $data['message'] ?? ''
    ]);
}

// sendEmail() has been removed – we use EmailJS client-side
?>