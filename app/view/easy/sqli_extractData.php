<?php require view('static/header') ?>

<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-4">
            <form action="" method="get">
                <h3 class="mb-3">Bilgilerinizi görmek için kullanıcı adınızı giriniz.</h3>
                <?php if ($err = error()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $err ?>
                    </div>
                <?php endif; ?>
                <?php if ($success = success()): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Kullanıcı Adınız</label>
                    <input type="text" value="<?= $_GET['username'] ?>" class="form-control" name="username"
                           id="username" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Bilgileri Getir</button>
                <?php if ($query):
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                    <div class="alert alert-success my-3" role="alert">
                        <p>username: <?=$row['user_name'];?></p>
                        <p>userurl: <?=$row['user_url'];?></p>
                        <p>userrole: <?=user_ranks($row['user_rank']); ?></p>
                    </div>
                <?php }endif; ?>

            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>





