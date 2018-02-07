<?php require_once 'views/partials/header.view.php' ?>
<!-- Page Content -->
	 <section>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="name">Ady, familiýasy</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>Jemi</th>
                        <th class="status">Status</th>
                    </tr>
                </thead>
                <tbody>

                <?php if (isset($posts)): ?>
                    <?php foreach ($posts as $post): ?>        
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td class="name"><?= $post['name'] ?> <?= $post['surname'] ?></td>
                            <td><?= $post['dayOne'] ?></td>
                            <td><?= $post['dayTwo'] ?></td>
                            <td><?= $post['dayThree'] ?></td>
                            <td><?= $post['dayFour'] ?></td>
                            <td><?= $post['dayFive'] ?></td>
                            <td><?= $post['daySixx'] ?></td>
                            <td><?= $post['daySeven'] ?></td>
                            <td><?= $someOf_Days ?></td>
                            <td><?= $status ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
                </tbody>
            </table>
        </div>
    </section>
    <div class="space-50" style="height: 50px;"></div>
<!-- Page Content/ -->
<?php require_once 'views/partials/footer.view.php' ?>