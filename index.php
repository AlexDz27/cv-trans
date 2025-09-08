<?php

enum Languages: string {
  case RU = 'ru';
  case ENG = 'eng';
}

function resolveLangFromUri() {
  if (@$_GET['lang'] === Languages::ENG->value) return Languages::ENG->value;

  return Languages::RU->value;
}

$lang = resolveLangFromUri();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/main.css">
  <script src="/assets/js/main.js" defer></script>
  <title>Document</title>
</head>
<body>

<main class="main cont">
  <p>Какой-то контент, <?= $lang ?></p>
</main>
  
</body>
</html>