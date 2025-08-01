<html>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
    }
</style>

<body>
    <p>Vasa korpa sadrzi: 10 poizvoda</p>
    <a href="?vidi_korpu">Vidi korpu</a>
    <table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proizvodi as $pr): ?>
                <tr>
                    <td><?php echo $pr["naziv"] ?></td>
                    <td> <?php echo $pr["cena"] ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $pr["id"] ?>">
                            <input type="submit" name="submit" value="Kupi">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</body>

</html>