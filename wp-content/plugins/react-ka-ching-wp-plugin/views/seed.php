<?php
/*
    This is the interface to seed data
*/
$react_ka_ching_add_meta_nonce_sd = wp_create_nonce('react_ka_ching_seed_form_nonce');
?>

<div>
    <br />
    <hr />
    <h2>
        Seed Data
    </h2>
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" id="react_ka_ching_seed_form">
        <input type="hidden" name="action" value="react_ka_ching_seed_form_response">
        <input type="hidden" name="react_ka_ching_seed_form_nonce" value="<?php echo $react_ka_ching_add_meta_nonce_sd ?>" />

        <fieldset>
            <label>Amazon Search Index</label>
            <input type="text" name="amazonSearchIndex" required></input>
        </fieldset>
        <fieldset>
            <label>Amazon Keywords</label>
            <input type="text" name="amazonKeywords" required></input>
        </fieldset>
        <br />
        <input type="submit" value="Run"></input>
    </form>
</div>