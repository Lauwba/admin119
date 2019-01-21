<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>119 Administrator Pages</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>assets/js/sweetalert2.all.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container mt-4 p-4">
            <div class="row justify-content-center ">
                <div class="col-md-6 border p-4">
                    <h4 class="lead text-center font-weight-bold">Login Panel Administrator 119</h4>
                    <form class="form-send p-4">
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="btn btn-info"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="email" name="email" placeholder="example@example.com" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="btn btn-info"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group text-center mt-4">
                            <input type="submit" class="btn btn-primary" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            $(".form-send").submit(function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                var url = "<?php echo site_url('welcome/login_proses') ?>";
                console.log(data);
                $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    success: function (data, textStatus, jqXHR) {
                        if (data.status == "0") {
                            swal({
                                title: textStatus,
                                text: data.message,
                                type: 'success',
                                showConfirmButton: true
                            }).then((result) => {
                                if (result.value) {
                                    window.location.assign("<?php echo site_url('dash/#!dashboard') ?>");
                                }
                            });
                        }else{
                            swal('Peringatan', data.message, 'warning');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        swal('Error', textStatus, 'error');
                    }
                });
            });
        </script>
    </body>
</html>