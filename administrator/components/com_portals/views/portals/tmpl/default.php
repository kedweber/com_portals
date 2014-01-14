<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<!--
<script src="media://lib_koowa/js/koowa.js" />
-->

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
                <th width="5%">
                    <?= @helper('grid.sort', array('column' => 'order', 'title' => @text('ORDER'))); ?>
                </th>
                <th width="5%">
                    <?= @helper('grid.sort', array('column' => 'enabled', 'title' => @text('ENABLED'))); ?>
                </th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="6">
                    <?= @helper('paginator.pagination', array('total' => $total)) ?>
                </td>
            </tr>
            </tfoot>

            <tbody>
            <? foreach ($portals as $portal) : ?>
            <tr>
                <td style="text-align: center;">
                    <?= @helper('grid.checkbox', array('row' => $portal))?>
                </td>
                <td>
                    <a href="<?= @route('view=portal&id='.$portal->id); ?>">
                        <?= $portal->title; ?>
                    </a>
                </td>
                <td>
                    <?= @helper('grid.order', array('row' => $portal, 'total' => $total)); ?>
                </td>
                <td>
                    <?= @helper('grid.enable', array('row' => $portal)); ?>
                </td>
            </tr>
            <? endforeach; ?>
            <? if (!count($portals)) : ?>
            <tr>
                <td colspan="5" align="center" style="text-align: center;">
                    <?= @text('PORTALS_NO_ITEMS') ?>
                </td>
            </tr>
            <? endif; ?>
            </tbody>
        </table>
    </form>
</div>