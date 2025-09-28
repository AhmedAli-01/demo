<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demo</title>

</head>

<body>
  <h1> Books </h1>
  <?php
  $books = [
    [
      'name' => 'Who killed Marley',
      'genra' => 'Fiction',
      'purchaseURL' => 'https://example.com'
    ],
    [
      'name' => 'Change your life forever',
      'genra' => 'self confidenc',
      'purchaseURL' => 'https://example.com'
    ],
    [
      'name' => 'How to make friends',
      'genra' => 'Social attractions',
      'purchaseURL' => 'https://example.com'
    ]
  ];

  ?>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= "Name of the book is: " . $book['name']; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>