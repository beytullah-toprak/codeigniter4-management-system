<?php if (session()->has('success')) : ?>
    <?php foreach ((array) session('success') as $value) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>x</span>
                </button>
                <?= esc($value) ?>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>

<?php if (session()->has('error')) : ?>
    <?php foreach ((array) session('error') as $value) : ?>
        <div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>x</span>
                </button>
                <?= esc($value) ?>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
    <?php foreach ((array) session('errors') as $value) : ?>
        <div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>x</span>
                </button>
                <?= esc($value) ?>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>