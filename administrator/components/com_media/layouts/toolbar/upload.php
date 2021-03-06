<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

HTMLHelper::_('webcomponent', 'system/joomla-toolbar-button.min.js', ['version' => 'auto', 'relative' => true]);

$title = Text::_('JTOOLBAR_UPLOAD');
?>
<joomla-toolbar-button class="btn btn-success mb-3" onclick="MediaManager.Event.fire('onClickUpload');">
	<span class="icon-upload"></span> <?php echo $title; ?>
</joomla-toolbar-button>
