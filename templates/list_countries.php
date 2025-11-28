<?php
// templates/list_countries.php
?>

<h1>list of countries (Afrique)</h1>
<p><a href="index.php?action=add">add new country</a></p>

<?php if (empty($countries)): ?>
    <p>No countries found.</p>
<?php else: ?>
    <table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Population</th>
            <th>Languages</th>
            <th>Actions</th>
        </tr>
    </thead>
     <tbody>
            <?php foreach ($countries as $c): ?>
                <tr>
                    <td><?=htmlspecialchars($c['name'])?></td>
                    <td><?=number_format($c['population'])?></td>
                    <td><?=htmlspecialchars($c['languages'])?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$c['id']?>">تعديل</a> |
                        <a href="index.php?action=delete&id=<?=$c['id']?>" onclick="return confirm('هل أنت متأكد؟')">حذف</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
