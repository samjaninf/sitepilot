<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="<?= $module->sp_class('section') ?>">
        <ul class="<?= $module->sp_class('grid') ?>">
            <?php foreach ($settings->features as $feature) : ?>
                <li>
                    <div class="group flex">
                        <div class="flex flex-shrink-0 items-center">
                            <i class="icon <?= $feature->icon ?> transition duration-300 ease-in-out <?= $module->sp_class('icon') ?>"></i>
                        </div>
                        <div class="flex items-center">
                            <h3 class="title <?= $module->sp_class('title') ?>"><?= $feature->title ?></h3>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>