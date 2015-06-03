<?php
session_start();
include 'libs/function.php';
include 'libs/meta.php';
$s_title	= "Masuk ke Dasbor Admin - " . $s_name;
$s_desc		= "";
$s_index	= 0;
include 'head.php';
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
                                    <input class="form-control" placeholder="Username/Mail" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
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
    <!-- Javascript Core -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
	
