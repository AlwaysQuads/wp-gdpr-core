<?php
/**
 * small form to use in table
 * allows to send email with unique urls to users
 */
?>
<form method="post" id="gdpr_admin_del_comments_form">
    <?php //$controller->print_inputs_with_emails(); ?>
    <input type="submit" class="button button-primary" name="gdpr_delete_comments" value="<?php _e('Delete comments', 'wp_gdpr'); ?>">
    <input type="submit" class="button button-primary" name="gdpr_anonymous_comments" value="<?php _e('Make comments anonymous', 'wp_gdpr'); ?>">
</form>
