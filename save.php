<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = $_POST['data'];
  $data = str_replace('data:image/png;base64,', '', $data);
  $data = str_replace(' ', '+', $data);
  $data = base64_decode($data);
  $filename = 'take/' . date('YmdHis') . '.png';
  file_put_contents($filename, $data);
  echo 'File saved as ' . $filename;
}
?>
