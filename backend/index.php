<?php require 'array_list.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>List of Friends</title>
</head>
<body>
<h2>My Friends</h2>
</div>
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Phone</th>
</tr>
</thead>
<tbody>
<?php foreach ($friends as $friend): ?>
<tr>
<td><?=$friend['name'] ?></td>
<td><?=$friend['age'] ?></td>
<td><?=$friend['phone'] ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</body>
</html>