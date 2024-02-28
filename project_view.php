<!doctype html>
<?php require_once "../contoller/project.php" ?>
<html>
<head>
    <h1> No Cheese For the Wicked </h1>
    <h6> Created by Harshith Pachhipulusu </h6>
<form method="post" action="project.php">
Search for Cheese:
<input name="search"/>
<input type="submit" value="Search"/>
</form>
<title>No Cheese for the Wicked</title> 
</head>
<body>
<a href="basketlist_view.php">
    <img src="C:\Users\phani\Pictures\free-add-to-basket-icon-3042-thumb.png" > 
    Opens Basket</a>
<table>
<thead>
<tr>
<th>Name</th>
<th>Hard / Soft</th>
<th>Origin</th>
<th>Strength</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<?php foreach ($results as $cheese): ?>
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
<ul>
<?php foreach ($_SESSION["previousSearch"] as $search): ?>
<li><?=$search?></li>
<?php endforeach ?>
</ul>
</body>
</html>
