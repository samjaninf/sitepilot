<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="<?= $module->sp_class('section') ?>">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 py-4 px-4 z-10">
                <div class="max-w-md md:max-w-none mx-auto text-center mb-6 md:mb-0">
                    <?php if (!empty($settings->title_1)) : ?>
                        <h5 class="title_1 <?= $module->sp_class('title_1') ?>"><?= $settings->title_1 ?></h5>
                    <?php endif;
                    if (!empty($settings->title_2)) : ?>
                        <h1 class="title_2 <?= $module->sp_class('title_2') ?>"><?= $settings->title_2 ?></h1>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 z-10">
                <div class="card max-w-md mx-auto <?= $module->sp_class('card') ?>">
                    <?php if (!empty($settings->card_title)) : ?>
                        <h3 class="card_title <?= $module->sp_class('card_title') ?>">
                            <?= $settings->card_title ?>
                        </h3>
                    <?php endif; ?>
                    <?php if (!empty($settings->card_content)) : ?>
                    <div class="card_content <?= $module->sp_class('card_content') ?>">
                        <?= $settings->card_content ?>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>  