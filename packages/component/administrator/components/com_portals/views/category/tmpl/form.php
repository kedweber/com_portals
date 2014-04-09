<? defined('KOOWA') or die('Restricted Access'); ?>

<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="" class="form-horizontal -koowa-form" method="post">
    <div class="row-fluid">
        <div class="span8">
            <fieldset>
                <legend><?= @text('CONTENT'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('TITLE'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="title" value="<?= $category->title; ?>" placeholder="<?= @text('TITLE'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('SLUG'); ?></label>
                    <div class="controls">
                        <input type="text" name="slug" value="<?= $category->slug; ?>" placeholder="<?= @text('SLUG'); ?>" />
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>