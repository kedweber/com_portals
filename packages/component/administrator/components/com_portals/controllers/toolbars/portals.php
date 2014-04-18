<?php

class ComPortalsControllerToolbarPortals extends ComDefaultControllerToolbarDefault
{
    public function getCommands()
    {
        $this->addIndex();

        return parent::getCommands();
    }

    public function _commandIndex(KControllerToolbarCommand $command)
    {
        $command->icon = 'refresh';
        $command->label = JText::_('Index');
        $command->append(array(
            'attribs' => array(
                'data-action' => 'index',
                'data-novalidate' => 'novalidate'
            )
        ));
    }
}