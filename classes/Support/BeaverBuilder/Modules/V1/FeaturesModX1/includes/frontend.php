<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="<?= $module->sp_class('section') ?>">
        <div class="md:text-center">
            <?php if (!empty($settings->title_1)) : ?>
                <h5 class="title_1 tracking-wide uppercase font-bold mb-2 <?= $module->sp_class('title_1') ?>"><?= $settings->title_1 ?></h5>
            <?php endif ?>
            <?php if (!empty($settings->title_2)) : ?>
                <h2 class="title_2 font-extrabold tracking-tight mb-4 <?= $module->sp_class('title_2') ?>">
                    <?= $settings->title_2 ?>
                </h2>
            <?php endif ?>
            <?php if (!empty($settings->description)) : ?>
                <p class="description md:max-w-2xl md:mx-auto text-xl leading-7 <?= $module->sp_class('description') ?>">
                    <?= $settings->description ?>
                </p>
            <?php endif; ?>
        </div>

        <ul class="<?php empty($settings->title_1) && empty($settings->title_2) && empty($settings->description) ? '' : 'mt-12' ?> <?= $module->sp_class('grid') ?>">
            <?php foreach ($settings->features as $feature) : ?>
                <li class="group">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="feature_icon flex items-center justify-center text-lg md:text-xl lg:text-2xl p-3 rounded-full <?= $module->sp_class('feature_icon') ?>">
                                <i class="<?= $feature->icon ?>"></i>
                            </div>
                        </div>
                        <div class="ml-4 <?php if (empty($feature->description)) : ?>flex items-center<?php endif ?>">
                            <?php if (!empty($feature->title)) : ?>
                                <h4 class="feature_title inline-block align-middle tracking-tight font-semibold mb-2 <?= $module->sp_class('feature_title') ?>"><?= $feature->title ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($feature->description)) : ?>
                                <p class="feature_description leading-7 <?= $module->sp_class('feature_description') ?>">
                                    <?= $feature->description ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>