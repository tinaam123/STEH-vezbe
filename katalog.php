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
            <tr>
                <td>Laptop</td>
                <td>500</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="id-1">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>

            <tr>
                <td>Kisobran</td>
                <td>200</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="id-2">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>
            <tr>
                <td>Lopta</td>
                <td>100</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="id-3">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</body>

</html>