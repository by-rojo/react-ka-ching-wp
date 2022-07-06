<?php
/*
    Renders the admin panel
*/
$react_ka_ching_add_meta_nonce = wp_create_nonce('react_ka_ching_settings_form_nonce');
$adminSettings = $this->get_config();
?>

<div class="react-ka-ching-app">
    <div>
        <h1>React Ka-Ching WP Plugin</h1>
        <hr />
    </div>
    <div class="react-ka-ching-app-content">
        <h2>Settings</h2>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" id="react_ka_ching_settings_form" autocomplete="off">
            <input type="hidden" name="action" value="react_ka_ching_form_response">
            <input type="hidden" name="react_ka_ching_settings_form_nonce" value="<?php echo $react_ka_ching_add_meta_nonce ?>" />
            <!--hack to remove auto user and password -->
            <input type="password" tabindex="-1" style="position: fixed; z-index: 0; opacity: 0; width: 0; height: 0; left: -10000px;" name="pass_hack"></input>
            <input type="username" tabindex="-1" style="position: fixed; z-index: 0; opacity: 0; width: 0; height: 0; left: -10000px;"></input>
            <!-- end hack -->
            <fieldset>
                <label>WordPress username</label>
                <input type="text" name="wpUser" value="<?php echo $adminSettings->wpUser; ?>"></input>
            </fieldset>
            <fieldset>
                <label>WordPress user password</label>
                <input type="password" name="wpPass" value="<?php echo $this->encode_decode($adminSettings->wpPass, false); ?>"></input>
            </fieldset>
            <fieldset>
                <label>WordPress internal url</label>
                <input type="url" name="wpUrl" value="<?php echo $adminSettings->wpUrl ? $adminSettings->wpUrl : site_url(); ?>"></input>
            </fieldset>
            <fieldset>
                <label>WordPress default post status</label>
                <select name="wpStatus">
                    <option></option>
                    <option value="publish" <?php echo $adminSettings->wpStatus === "publish" ? "selected" : ""; ?>>Publish</option>
                    <option value="draft" <?php echo $adminSettings->wpStatus === "draft" ? "selected" : ""; ?>>Draft</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Amazon Access Key</label>
                <input type="password" name="amazonAccessKey" value="<?php echo $this->encode_decode($adminSettings->amazonAccessKey, false); ?>"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Secret Key</label>
                <input type="password" name="amazonSecretKey" value="<?php echo $this->encode_decode($adminSettings->amazonSecretKey, false); ?>"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Partner Tag</label>
                <input type="text" name="amazonPartnerTag" value="<?php echo $adminSettings->amazonPartnerTag; ?>"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Host</label>
                <input type="text" name="amazonHost" value="<?php echo $adminSettings->amazonHost ?  $adminSettings->amazonHost : "webservices.amazon.com" ?>"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Region</label>
                <input type="text" name="amazonRegion" value="<?php echo $adminSettings->amazonRegion ?  $adminSettings->amazonRegion : "us-east-1" ?>"></input>
            </fieldset>
            <br />
            <input type="submit" value="Save"></input>
        </form>
    </div>
</div>