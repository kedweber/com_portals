<?php

echo KService::get('mod://site/portals.html')
    ->module($module)
    ->attribs($attribs)
    ->display();