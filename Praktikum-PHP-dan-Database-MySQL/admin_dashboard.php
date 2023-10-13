<tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Fakultas</th>
        <th>Tahun Masuk</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['nama']; ?></td>
            <td><?php echo $user['alamat']; ?></td>
            <td><?php echo $user['fakultas']; ?></td>
            <td><?php echo $user['tahun_masuk']; ?></td>
            <td class="action-links">
                <a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a>
                <a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</div>    
</body>
</html>