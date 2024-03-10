<!doctype html>
<html>
<head>
    <h1> No Cheese For the Wicked </h1>
    <h6> Created by Harshith Pachhipulusu </h6>
<form method="post" action="project.php">
Search Cheese by Name:
<input name="searchn"/> <input type="submit" value="Search"/> <br/> <br/>
Search Cheese by Build:
<input name="searchhs"/> <input type="submit" value="Search"/> <br/> <br/>
Search Cheese by Origin:
<input name="searcho"/> <input type="submit" value="Search"/> <br/> <br/>
Search Cheese By Strength:
<input name="searchs"/> <input type="submit" value="Search"/> <br/> <br/>
Search Cheese By Price:
<input name="searchp"/> <input type="submit" value="Search"/> <br/> <br/>
</form>
<title>No Cheese for the Wicked</title> 
</head>
<body>
<a href="basketlist_view.php">
    <img src="C:\Users\phani\Pictures\free-add-to-basket-icon-3042-thumb.png" > 
    Opens Basket</a>
<hr/>
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
<td><a href="project.php?addtobasket=<?= $cheese->id ?>">Add to Basket</a></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
<hr/>
<a href = "project.php"> Clear search</a>
<hr/>
<?= count($basket) ?> item(s) added. <a href="../contoller/basket.php">Show Basket</a>
</body>
</html>
