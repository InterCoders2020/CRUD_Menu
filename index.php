<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu CRUD</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="titulo">
        <h1>Menu</h1>
        <img>
    </div>

    <section>
        <form action="src/Plate.php" method="post">
            <input class="text-box add-name" type="text" id=name required name="name" placeholder="Name">
            <input class="text-box add-name" type="text" id=price required name="price" placeholder="Price">
            <input class="button add" type="submit" name="name" value="ADD PLATE">
        </form>
    </section>

    <section>
        <form action="src/Plate.php" method="post">
            <input class="text-box add-name" type="text" id=name required name="name" placeholder="Name">
            <input class="button add" type="submit" name="name" value="DELETE PLATE">
        </form>
    </section>
</body>

</html>