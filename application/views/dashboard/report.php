<div class="container" id="emergency-response">

</div>

<script>
    $(document).ready(function () {
        var url = "<?php echo site_url('dashboard/emergency_report') ?>";
        console.log(url);
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data, textStatus, jqXHR) {
                $("#emergency-response").html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }
        });
    });
    setInterval(function () {
        var url = "<?php echo site_url('dashboard/emergency_report') ?>";
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data, textStatus, jqXHR) {
                if (data.not_reponse !== "0") {
                    $("#jumlah-masuk").html(data.not_reponse);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }
        });
    }, 5000);
</script>