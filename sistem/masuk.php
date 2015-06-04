<?php
session_start();
include 'libs/meta.php';
$s_title	= "Masuk ke Dasbor Admin - " . $s_name;
$s_desc		= "";
$s_index	= 0;
include 'theme/head.php';
?>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Masuk Sebagai Admin</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="masuk_p.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="a_username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="a_password" type="password" required>
                                </div>               
								<div class="form-group">
									<input class="btn btn-lg btn-success btn-block" value="Masuk" type="submit" required>
								</div>								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <?php include 'theme/footer.php';?>
</body>
</html>