<?php
# -- BEGIN LICENSE BLOCK ---------------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2011 Olivier Meunier & Association Dotclear
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK -----------------------------------------
if (!defined('DC_RC_PATH')) { return; }

$GLOBALS['core']->url->register('tag','tag','^tag/(.+)$',array('urlTags','tag'));
$GLOBALS['core']->url->register('tags','tags','^tags$',array('urlTags','tags'));
$GLOBALS['core']->url->register('tag_feed','feed/tag','^feed/tag/(.+)$',array('urlTags','tagFeed'));
?>