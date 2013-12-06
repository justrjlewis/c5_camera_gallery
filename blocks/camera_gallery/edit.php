<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<style type="text/css">
	div.ccm-pane-controls label {
		font-weight: normal !important;
		margin-bottom: 0;
	}
	.gallery-display-table {
		width:100%;
		padding-bottom: 10px;
	}
	.gallery-display-table td {
		padding: 10px 0;
		border-bottom: 1px dotted gray;
	}
	.gallery-display-table td.label {
		text-align: left;
		padding-right: 2px;
		padding-left: 2px;
	}
	.gallery-display-table td.label.long {
		min-width: 75px;
	}
	.gallery-display-table td.header input {
		text-align: center;
		width: 90%;
	}
	.gallery-display-table td.long-input {
		width: 75px;
	}
	.gallery-display-table input {
		text-align: center;
		width: 37px;
		display: inline-block;
	}
	.gallery-display-table td.short-select {
		width: 50%;
	}
	.gallery-display-table select {
		width: 50%;
	}
</style>

<table border="0" cellpadding="0" cellspacing="0" class="gallery-display-table">
	<tr>
		<td class="label">
			<?php echo $form->label('field_1_textbox_text', t('Event Name:')); ?>
		</td>
		<td class="header">
			<?php echo $form->text('field_1_textbox_text', $field_1_textbox_text); ?>
		</td>
	</tr>
	<tr>
		<td class="label">
			<?php echo $form->label('field_2_wysiwyg_content', t('Event Description:')); ?>
		</td>
		<td>
			<textarea id="field_2_wysiwyg_content" name="field_2_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_2_wysiwyg_content; ?></textarea>
		</td>
	</tr>
	<tr><td class="label long">
		<?php echo $form->label('fsID', t('File Set:')); ?>
	</td><td colspan="5">
		<select id="fsID" name="fsID">
			<option value="0"><?php echo t('Loading&hellip;'); ?></option>
		</select>
		&nbsp;&nbsp;&nbsp;
		[<a href="#" id="fileManagerLink"><?php echo t('Open File Manager&hellip;'); ?></a>]
	</td></tr>
	
	<tr><td class="label long">
		<?php echo $form->label('randomize', t('Display Order:')); ?>
	</td><td colspan="5">
		<?php echo $form->select('randomize', array('0' => t('Fileset Order'), '1' => t('Random Order')), $randomize); ?>
	</td></tr>

	<tr <?php echo $showLargeControls ? '' : 'style="display:none;"'; ?>>
		<td class="label long">
			<?php echo $form->label('cropLarge', t('Size Options:')); ?>
		</td><td class="short-select">
			<?php echo $form->select('cropLarge', array('-1' => t('Keep Original Size'), '0' => t('Shrink Proportionally'), '1' => t('Crop To Fit')), $cropLarge); ?>
		</td><td class="label">
			<?php echo $form->label('largeWidth', t('Width:')); ?>
		</td><td class="long-input">
			<?php echo $form->text('largeWidth', $largeWidth); ?> px
		</td><td class="label">
			<?php echo $form->label('largeHeight', t('Height:')); ?>
		</td><td class="long-input">
			<?php echo $form->text('largeHeight', $largeHeight); ?> px
		</td>
	</tr>
	
	<tr <?php echo $showThumbControls ? '' : 'style="display:none;"'; ?>>
		<td class="label long">
			<?php echo $form->label('cropThumb', t('Thumbnail Options:')); ?>
		</td><td class="short-select">
			<?php echo $form->select('cropThumb', array('0' => t('Shrink Proportionally'), '1' => t('Crop To Fit')), $cropThumb); ?>
		</td><td class="label">
			<?php echo $form->label('thumbWidth', t('Width:')); ?>
		</td><td class="long-input">
			<?php echo $form->text('thumbWidth', $thumbWidth); ?> px
		</td><td class="label">
			<?php echo $form->label('thumbHeight', t('Height:')); ?>
		</td><td class="long-input">
			<?php echo $form->text('thumbHeight', $thumbHeight); ?> px
		</td>
	</tr>
</table>

<script type="text/javascript">
var FILESETS_URL = '<?php echo $filesetsToolURL ?>';
refreshFilesetList(<?php echo $fsID ?>);
</script>
