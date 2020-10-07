<div class="sp-mod-v1">
    <div id="sp-mod-<?= $id ?>" class="md:text-center <?= $module->sp_class('section') ?>">
        <?php if (!empty($settings->title)) : ?>
            <h2 class="title font-extrabold tracking-tight <?= $module->sp_class('title') ?>">
                <?= $settings->title ?>
            </h2>
        <?php endif ?>
        <?php if (!empty($settings->description)) : ?>
            <p class="description max-w-2xl md:mx-auto text-xl leading-7 <?= $module->sp_class('description') ?>">
                <?= $settings->description ?>
            </p>
        <?php endif ?>
        <ul class="<?= $module->sp_class('grid') ?>">
            <?php foreach ($settings->cards as $card) : ?>
                <li class="card group transform <?= $module->sp_class('card') ?>">
                    <?php if (!empty($card->link)) : ?>
                        <a href="<?= $card->link ?>">
                        <?php endif ?>
                        <div class="card_image overflow-hidden bg-cover <?= $module->sp_class('card_image') ?>" style="
                        <?= !empty($card->image_src) ? 'background-image: url(' . $card->image_src . ');' : '' ?>"></div>
                        <div class="card_content <?= $module->sp_class('card_content') ?>">
                            <?php if (!empty($settings->title)) : ?>
                                <h4 class="card_title tracking-tight font-semibold <?= $module->sp_class('card_title') ?>">
                                    <?= $card->title ?>
                                </h4>
                            <?php endif ?>
                            <?php if (!empty($card->description)) : ?>
                                <p class="card_description leading-7 <?= $module->sp_class('card_description') ?>">
                                    <?= $card->description ?>
                                </p>
                            <?php endif ?>
                        </div>
                        <?php if (!empty($card->link)) : ?>
                        </a>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>