<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="<?= $module->sp_class('section') ?>">
        <div class="max-w-2xl mx-auto text-center">
            <?php if (!empty($settings->title_1)) : ?>
                <h1 class="title_1 <?= $module->sp_class('title_1') ?>">
                    <?= $settings->title_1 ?>
                </h1>
            <?php endif ?>
            <?php if (!empty($settings->title_2)) : ?>
                <h3 class="title_2 <?= $module->sp_class('title_2') ?>">
                    <?= $settings->title_2 ?>
                </h3>
            <?php endif ?>
            <?php if (!empty($settings->btn_1)) : ?>
                <a href="<?= $settings->btn_1_link ?? '#' ?>" class="btn_1 <?= $module->sp_class('btn_1') ?>">
                    <?= $settings->btn_1 ?>
                    <?php if (!empty($settings->btn_1_icon)) : ?>
                        <i class="<?= $settings->btn_1_icon ?> align-middle <?= $module->sp_class('btn_1_icon') ?>"></i>
                    <?php endif ?>
                </a>
            <?php endif ?>
        </div>
    </div>
</div>