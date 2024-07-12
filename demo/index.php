<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <h1>Recommende Books</h1>

    <!-- arrays -->
    <?php 
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>

    <!-- associative arrays -->
    <?php 
        $booksAssociativeArray = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'published' => 1968,
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'published' => 2021,
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com'
            ]
        ]
    ?>

    <!-- going through a foreach loop of an array -->
    <ul>
        <?php 
            foreach ($books as $book) {
                echo "<li>{$book}™</li>";
            }
        ?>
    </ul>

    <!-- another (cleaner) way of going through a foreach loop of an array -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Giving the index 1 -->
    <p>
        <?= $books[1] ?>
    </p>

    <!-- going through a foreach loop of an associative array -->
    <ul>
        <?php foreach ($booksAssociativeArray as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name'] . ' - ' . $book['published']; ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>