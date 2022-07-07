<?php
/*
    SEED TABLE
*/
$nonce = wp_create_nonce('react_ka_ching_seed_get_request');
$adminUrl = admin_url('admin-ajax.php');
?>

<div>
    <br />
    <hr />
    <h2>Product Installations</h2>
    <table>
        <thead>
            <tr>
                <th>Seed ID</th>
                <th>Seed Name</th>
                <th>Seed Index</th>
                <th>Seed Terms</th>
                <th>Seed Count</th>
                <th>Seed Total</th>
                <th>Seed Remaining</th>
                <th>Seed Errors</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Progress</th>
            </tr>
        </thead>
        <tbody id="seed-table-body">
        </tbody>
    </table>
</div>

<script>
    (function(jQuery) {
        var seedTableBody = document.getElementById("seed-table-body")
        var createRow = function(record) {
            seedTableBody.innerHTML += `
                <tr>
                    <td>SID: ${record.id}</td>
                    <td>${record.seed_name}</td>
                    <td>${record.seed_search_index}</td>
                    <td>${record.seed_search_keywords}</td>
                    <td>${record.seed_total}</td>
                    <td>${record.seed_count}</td>
                    <td>${record.seed_remaining}</td>
                    <td>${record.seed_errors}</td>
                    <td>${record.date_created}</td>
                    <td>${record.date_updated}</td>
                    <td>TODO PROGRESS BAR</td>
                </tr>
            `
        }
        setInterval(function() {
            jQuery.ajax({
                url: "<?php echo $adminUrl; ?>",
                data: {
                    action: "react_ka_ching_seed_get_request",
                    nonce: "<?php echo $nonce; ?>"
                },
                success: function(records) {
                    seedTableBody.innerHTML = ''
                    records.forEach(createRow)
                },
                error: function(e) {
                    console.error(e)
                    setTableBody.innerHTML = '<tr><td colspan="9">Error: ' + (e.message || e) + '</td>'
                }
            })
        }, 5000)
    })(jQuery)
</script>