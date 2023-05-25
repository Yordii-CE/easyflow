<p class="display-5">Controller:<?= $CONTROLLER ?></p>
<p class="display-5">Action: <?= $ACTION ?></p>

<div class="alert alert-primary">
    Param: <?= isset($param) ? $param : '' ?>
    <br>
    <a href="<?= $BASE_URL ?>/articles/index/1" class="my-3 btn-sm btn btn-white border-primary">add param</a>
</div>
<div class="alert alert-primary">
    Model:
    <pre>
        <?php print_r($articles) ?>
    </pre>
</div>