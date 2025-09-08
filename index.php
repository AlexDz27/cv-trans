<?php

// TODO: в пизду, просто сделать ссылки с подчёркиваниями (типа кнопки)

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
	<div class="switch">
    <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
    <label for="language-toggle"></label>
    <span class="js-btn-lang on">RU</span>
    <span class="js-btn-lang off">ENG</span>
  </div>

  <p>Какой-то контент, <?= $lang ?></p>
</main>

<script>
  const langBtns = document.querySelectorAll('.js-btn-lang')
  for (const langBtn of langBtns) {
    langBtn.onclick = () => {
      window.location.href = window.location.href + '?lang=' + langBtn.textContent
    }
  }
</script>
  
</body>
</html>