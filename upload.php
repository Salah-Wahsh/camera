<?php
$data = json_decode(file_get_contents('php://input'), true);
$imageData = $data['image'];

// Decode base64 image data
$decodedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));

// Save the image to a directory
$filename = 'captured_image.png';
file_put_contents($filename, $decodedImage);

// You can perform additional processing or return a response if needed
echo json_encode(['success' => true, 'message' => 'Image uploaded successfully']);
?>
