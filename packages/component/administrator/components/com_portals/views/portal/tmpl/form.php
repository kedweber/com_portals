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
                <legend><?= @text('CONTENT'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('TITLE'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="title" value="<?= $portal->title ?>" placeholder="<?= @text('TITLE'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('SLUG'); ?></label>
                    <div class="controls">
                        <input type="text" name="slug" value="<?= $portal->slug ?>" placeholder="<?= @text('SLUG'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('CATEGORY'); ?>*</label>
                    <div class="controls">
                        <?= @helper('com://admin/portals.template.helper.listbox.categories', array(
                            'selected' => $portal->portals_category_id,
                            'name' => 'portals_category_id'
                        )); ?>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend><?= @text('FIELDS'); ?></legend>
                <?= @service('com://admin/cck.controller.element')->cck_fieldset_id($portal->cck_fieldset_id)->row($portal->id)->table('portals_portals')->getView()->assign('row', $portal)->layout('list')->display(); ?>
            </fieldset>
        </div>
		<div class="span4">
			<fieldset>
				<legend><?= @text('DETAILS'); ?></legend>
				<div class="control-group">
					<label class="control-label"><?= @text('PUBLISHED'); ?></label>
					<div class="controls">
						<?= @helper('select.booleanlist', array('name' => 'enabled', 'selected' => $portal->enabled)); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?= @text('TRANSLATED'); ?></label>
					<div class="controls">
						<?= @helper('select.booleanlist', array('name' => 'translated', 'selected' => $portal->translated)); ?>
					</div>
				</div>
			</fieldset>
		</div>
    </div>
</form>