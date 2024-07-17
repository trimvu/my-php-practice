<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <h1>Recommende Books</h1>

    <!-- going through a foreach loop of an associative array -->
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?> (<?= $book['published'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

    <h1>Recommended Movies</h1>

    <ul>
        <?php foreach ($filteredMovies as $movie) : ?>
            <li>
                <?= $movie['title']; ?> (<?= $movie['release'] ?>)
            </li>
        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach ($filteredWriter as $movie) : ?>
            <li>
                <?= $movie['title']; ?> (<?= $movie['release'] ?>) <br>Written By 
                <?php foreach ($movie['writer'] as $writer) : ?>
                    <ul>
                        <li>
                            <?= $writer; ?>
                        </li>
                    </ul>
                <?php endforeach ?>
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>