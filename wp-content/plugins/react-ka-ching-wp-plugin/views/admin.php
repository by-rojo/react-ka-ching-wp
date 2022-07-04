<?php
/*
    Renders the admin panel
*/
?>

<div class="react-ka-ching-app">
    <div>
        <h1>React Ka-Ching WP Plugin</h1>
        <hr />
    </div>
    <div class="react-ka-ching-app-content">
        <h2>Settings</h2>
        <form id="react-ka-ching-form" autocomplete="off">
            <fieldset>
                <label>WordPress username</label>
                <input type="text" name="wp-user"></input>
            </fieldset>
            <fieldset>
                <label>WordPress user password</label>
                <input type="password" name="wp-pass"></input>
            </fieldset>
            <fieldset>
                <label>WordPress default post status</label>
                <select name="wp-status">
                    <option></option>
                    <option value="publish">Publish</option>
                    <option value="draft">Draft</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Amazon Access Key</label>
                <input type="password" name="amazon-access-key"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Secret Key</label>
                <input type="password" name="amazon-secret-key"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Partner Tag</label>
                <input type="text" name="amazon-partner-tag"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Host</label>
                <input type="text" name="amazon-host" value="webservices.amazon.com"></input>
            </fieldset>
            <fieldset>
                <label>Amazon Region</label>
                <input type="text" name="amazon-region" value="us-east"></input>
            </fieldset>
            <br />
            <input type="submit" value="Save"></input>
        </form>
        <hr />
    </div>
</div>

<script type="text/javascript">
    var form = document.getElementById("react-ka-ching-form")
    form.addEventListener("submit", function(e) {
        e.preventDefault()
        const fData = new FormData(e.target)
        const payload = {}
        //todo move wp and amazon code into here
    })
</script>