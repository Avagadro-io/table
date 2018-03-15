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
<?php if (is_array($posts) || is_object($posts)): ?>
               <?php foreach ($myPosts as $postlar): ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td class="name"><?= $postlar['fullName'] ?></td>
                        <td><?= $postlar['dayOne'] ?></td>
                        <td><?= $postlar['dayTwo'] ?></td>
                        <td><?= $postlar['dayThree'] ?></td>
                        <td><?= $postlar['dayFour'] ?></td>
                        <td><?= $postlar['dayFive'] ?></td>
                        <td><?= $postlar['daySix'] ?></td>
                        <td><?= $postlar['daySeven'] ?></td>
                        <td><?= $postlar['sum'] ?></td>
                        <?php if ($postlar['current'] > $postlar['prev']) {
                                $whichOne = 'fa-arrow-up';
                                $postStatus = 'green';
                            } elseif ($postlar['current'] == $postlar['prev']) { 
                                $whichOne = 'fa-circle-o-notch';
                                $postStatus = 'blue';
                            } else{
                                $whichOne = 'fa-arrow-down';
                                $postStatus = 'red';
                            }   
                        ?>
                        <td><i class="fa <?= $whichOne ?> status-ic-<?= $postStatus ?>"></i></td>
                    </tr>
                <?php if ($postlar['prev'] !== $postlar['current']) :?>
                    <?php query("UPDATE users SET prev = :prev, current = :current WHERE id = :id", [
                        'prev'      => $postlar['prev'],
                        'current'   => $postlar['current'],
                        'id'        => $id
                        ], $conn) ?>
                <?php endif ?>
                <?php endforeach ?>
            <?php else :?>
                <h1 style="color: #fff; font-family: Ubuntu;">Dost Adam Yoga Okayan</h1>
            <?php endif ?>  
            </tbody>
            </table>
        </div>
    </section>


    <div class="space-50" style="height: 50px;"></div>
<!-- Page Content/ -->
<?php require_once 'views/partials/footer.view.php' ?>