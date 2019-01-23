<footer>
    <div class="container-fluid text-center">
        <p class="lead">&copy; <?php echo date('Y') ?></p>
        <a href=></a>
    </div>
</footer>
<script>
    $(document).ready(function () {
        $(".dataTable").DataTable({
            dom: 'Bfrtip',
        });
        var getCount = "<?php echo site_url('dashboard/get_count') ?>";
        $.ajax({
            url: getCount,
            type: 'GET',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                if (data.not_reponse !== "0") {
                    $("#jumlah-masuk").html(data.not_reponse);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }
        });
    });
    setInterval(function () {
        var getCount = "<?php echo site_url('dashboard/get_count') ?>";
        console.log(url);
        $.ajax({
            url: getCount,
            type: 'GET',
            dataType: 'json',
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
</body>
</html>
