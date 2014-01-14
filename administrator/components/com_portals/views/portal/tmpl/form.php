<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.modal'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="" class="form-horizontal -koowa-form" method="post">
    <div class="row-fluid">
        <div class="span8">
            <fieldset>
                <legend><?= @text('Content'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('Title'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="title" value="<?= $portal->title ?>" placeholder="<?= @text('Title'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('Slug'); ?></label>
                    <div class="controls">
                        <input type="text" name="slug" value="<?= $portal->slug ?>" placeholder="<?= @text('Slug'); ?>" />
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend><?= @text('Fieldset'); ?></legend>
                <?= @service('com://admin/cck.controller.element')->cck_fieldset_id($portal->cck_fieldset_id)->row($portal->id)->table('portals_portals')->getView()->assign('row', $portal)->layout('list')->display(); ?>
            </fieldset>
        </div>
    </div>
</form>