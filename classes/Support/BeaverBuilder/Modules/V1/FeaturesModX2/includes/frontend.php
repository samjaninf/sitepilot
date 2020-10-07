<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="<?= $module->sp_class('section') ?>">
        <ul class="<?= $module->sp_class('grid') ?>">
            <?php foreach ($settings->features as $feature) : ?>
                <li>
                    <div class="group flex">
                        <div class="flex flex-shrink-0 items-center">
                            <i class="icon <?= $feature->icon ?> transition duration-300 ease-in-out text-4xl mb:text-5xl lg:text-6xl <?= $module->sp_class('icon') ?>"></i>
                        </div>
                        <div class="flex items-center">
                            <h3 class="title font-bold <?= $module->sp_class('title') ?>"><?= $feature->title ?></h3>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>