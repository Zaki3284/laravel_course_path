<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Code</title>
</head>
<body>

<?php 

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];

function FilterbyAuther($books, $auther) {
    $filter_by_auther = [];
    foreach ($books as $book) {
        if ($book['author'] == $auther) {
            $filter_by_auther[] = array_unique($book);
        }
    }
    return $filter_by_auther;
}

$filteredBooks = $books;

if (isset($_POST['auther'])) {
    $filteredBooks = FilterbyAuther($books, $_POST['auther']);
}
?>

<h1>Filter Test</h1>
<?=   $authors = array_unique(array_column($books, 'author'));  echo $authors;?>
<form method="POST">
    <select name="auther">
        <?php foreach ($authers as $book) : ?>
            <option value="<?= $book ?>">
                <?= $book['author'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Filter</button>
</form>

<p>before</p>
<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book['name'] . ' by -> ' . $book['author']; ?></li>
    <?php endforeach; ?>
</ul>

<p>after</p>
<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li><?= $book['name'] . ' by -> ' . $book['author']; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
