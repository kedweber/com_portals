<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />

<div class="row-fluid">
    <form action="" method="get" class="-koowa-grid" data-toolbar=".toolbar-list">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="text-align: center;" width="1">
                    <?= @helper('grid.checkall')?>
                </th>
                <th>
                    <?= @helper('grid.sort', array('column' => 'title', 'title' => @text('TITLE'))); ?>
                </th>
                <th>
                    <?= @helper('grid.sort', array('column' => 'enabled', 'title' => @text('PUBLISHED'))); ?>
                </th>
                <th>
                    <?= @text('Owner'); ?>
                </th>
                <th>
                    <?= @helper('grid.sort', array('column' => 'created_on', 'title' => @text('Date'))); ?>
                </th>
                <th>
                    <?= @helper('grid.sort', array('column' => 'order', 'title' => @text('ORDER'))); ?>
                </th>
                <th>
                    <?= @helper('grid.sort', array('column' => 'id', 'title' => @text('ID'))); ?>
                </th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="8">
                    <?= @helper('paginator.pagination', array('total' => $total)) ?>
                </td>
            </tr>
            </tfoot>

            <tbody>
            <? foreach ($categories as $category) : ?>
                <tr>
                    <td style="text-align: center;">
                        <?= @helper('grid.checkbox', array('row' => $category))?>
                    </td>
                    <td>
                        <a href="<?= @route('view=category&id='.$category->id); ?>">
                            <?= $category->title; ?>
                        </a>
                    </td>
                    <td>
                        <?= @helper('grid.enable', array('row' => $category)); ?>
                    </td>
                    <td>
                        <?= $category->created_by_name; ?>
                    </td>
                    <td>
                        <?= @helper('date.humanize', array('date' => $category->created_on)) ?>
                    </td>
                    <td>
                        <?= @helper('grid.order', array('row' => $category, 'total' => $total)); ?>
                    </td>
                    <td>
                        <?= $category->id; ?>
                    </td>
                </tr>
            <? endforeach; ?>

            <? if (!count($categories)) : ?>
                <tr>
                    <td colspan="8" align="center">
                        <?= @text('NO_ITEMS') ?>
                    </td>
                </tr>
            <? endif; ?>
            </tbody>
        </table>
    </form>
</div>