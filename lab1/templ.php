<html>
<head>
</head> 

<body>
<?php
  $elements = [1, 2, 3];
?>
  ...
<?php if (count($elements) > 0): ?>
  <ul>
  <?php foreach($elements as $element): ?>
    <li><?= $element ?></li>
  <?php endforeach ?>
  </ul>
<?php else: ?>
  <div>No elements</div>
<?php endif ?>
</body>

</html>