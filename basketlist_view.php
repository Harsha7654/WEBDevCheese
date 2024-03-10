<!DOCTYPE html>
<html>
    <head>
        <title>Basket List</title>
    </head>
    <body>
        <h1>Basket List</h1>
        <h2>Cheese in the Basket</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Hard/Soft</th>
                    <th>Origin</th>
                    <th>Strength</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($basket as $cheese): ?>
                <tr>
                    <td><?= $cheese->name ?></td>
                    <td><?= $cheese->hardorsoft ?></td>
                    <td><?= $cheese->origin ?></td>
                    <td><?= $cheese->strength ?></td>
                    <td><?= $cheese->price ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="../contoller/project.php">Return to Cheese Page</a>
    </body>
</html>
