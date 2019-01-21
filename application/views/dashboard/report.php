<div class="container" id="emergency-response">

</div>

<script>
    $(document).ready(function () {
        var url = "<?php echo site_url('report') ?>";
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
        var url = "<?php echo site_url('report') ?>";
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
    }, 30000);
</script>