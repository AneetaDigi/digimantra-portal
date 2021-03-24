<?php
/**
 * Temporary Login settings template
 *
 * @package Temporary Login Without Password
 */

?>
<h2 class="font-semibold text-gray-700"> <?php echo esc_html__( 'Temporary Login Settings', 'temporary-login-without-password' ); ?></h2>
<form method="post" action="#">
	<table class="wtlwp-form bg-white rounded-lg shadow-md text-left py-2 mt-5">
		<tr class="form-field">
			<th scope="row" class="wtlwp-form-row w-1/4 text-left">
				<label for="visible_roles"><span class="text-sm font-medium text-gray-600 pb-2"><?php echo esc_html__( 'Visible Roles', 'temporary-login-without-password' ); ?></span></label>
				<p class="italic text-xs text-gray-400 mt-2 font-normal leading-snug"><?php echo esc_html__( 'Select roles from which you want to create a temporary login', 'temporary-login-without-password' ); ?></p>

			</th>
			<td class="py-4">
				<select multiple name="tlwp_settings_data[visible_roles][]" id="visible-roles" class="visible-roles-dropdown form-multiselect font-normal text-gray-600 h-8 shadow-sm">
					<?php Wp_Temporary_Login_Without_Password_Common::tlwp_multi_select_dropdown_roles( $visible_roles ); ?>
				</select>
			</td>
		</tr>
		<tr class="form-field">
			<th scope="row" class="wtlwp-form-row">
				<label for="adduser-role" class="text-sm font-medium text-gray-600 pb-2"><?php echo esc_html__( 'Default Role', 'temporary-login-without-password' ); ?></label>
			</th>
			<td class="py-3">
				<select name="tlwp_settings_data[default_role]" id="default-role" class="default-role-dropdown form-select font-normal text-gray-600 h-8 shadow-sm">
					<?php wp_dropdown_roles( $default_role ); ?>
				</select>
			</td>
		</tr>

        <tr class="form-field">
            <th scope="row" class="wtlwp-form-row">
                <label for="redirect-to"><span class="text-sm font-medium text-gray-600 pb-2"><?php echo esc_html__( 'Default Redirect After Login', 'temporary-login-without-password' ); ?></span></label>
            </th>
            <td>
                <select name="tlwp_settings_data[default_redirect_to]" id="redirect-to" class="form-select font-normal text-gray-600 h-8 shadow-sm">
					<?php Wp_Temporary_Login_Without_Password_Common::tlwp_dropdown_redirect_to( $default_redirect_to ); ?>
                </select>
            </td>
        </tr>

        <tr class="form-field">
			<th scope="row" class="wtlwp-form-row">
				<label for="adduser-role" class="text-sm font-medium text-gray-600 pb-2"><?php echo esc_html__( 'Default Expiry Time', 'temporary-login-without-password' ); ?></label>
			</th>
			<td class="pt-3">
                <select name="tlwp_settings_data[default_expiry_time]" id="default-expiry-time" class="form-select font-normal text-gray-600 h-8 shadow-sm">
					<?php Wp_Temporary_Login_Without_Password_Common::get_expiry_duration_html( $default_expiry_time, array('custom_date') ); ?>
                </select>
			</td>
		</tr>

		<tr class="form-field">
			<th scope="row" class="wtlwp-form-row"><label for="temporary-login-settings"></label></th>
			<td>
				<p class="submit">
					<input type="submit" class="button button-primary wtlwp-form-submit-button" value="<?php esc_html_e( 'Submit', 'temporary-login-without-password' ); ?>" class="button button-primary" id="generatetemporarylogin" name="generate_temporary_login">
				</p>
			</td>
		</tr>

		<?php wp_nonce_field( 'wtlwp_generate_login_url', 'wtlwp-nonce', true, true ); ?>
	</table>
</form>
