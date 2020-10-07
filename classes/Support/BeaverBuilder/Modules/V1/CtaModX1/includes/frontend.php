<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="<?= $module->sp_class('section') ?>">
        <div class="lg:flex lg:items-center lg:justify-between">
            <h2 class="title_1 font-extrabold tracking-tight sm:text-4xl <?= $module->sp_class('title_1') ?>">
                <?= $settings->title_1 ?>
                <?php if (!empty($settings->title_2)) : ?>
                    <br>
                    <span class="title_2 <?= $module->sp_class('title_2') ?>"><?= $settings->title_2 ?></span>
                <?php endif; ?>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <?php if (!empty($settings->btn_1)) : ?>
                    <div class="inline-flex">
                        <a href="<?= $settings->btn_1_link ?? '#' ?>" class="btn_1 inline-flex items-center justify-center <?= $module->sp_class('btn_1') ?>">
                            <?= $settings->btn_1 ?>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($settings->btn_2)) : ?>
                    <div class="ml-3 inline-flex">
                        <a href="<?= $settings->btn_2_link ?? '#' ?>" class="btn_2 inline-flex items-center justify-center <?= $module->sp_class('btn_2') ?>">
                            <?= $settings->btn_2 ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>