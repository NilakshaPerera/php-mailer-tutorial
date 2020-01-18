<?php include_once './core/Init.php'; ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div>
        <div class="containerx">
            <div class="">
                <form id='frmdata' name='frmdata' method="post" action="">

                        <div class="col-md-8 col-lg-8 offset-md-2 offset-lg-2">
                            <div id="formSubmission" class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 nomfrm">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input required class="form-control" type="text" placeholder="" id="txtname" name='txtname' value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input required class="form-control" type="tel" placeholder="" id="txtmobile" name="txtmobile" value="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 nomfrm">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input required class="form-control" type="email" placeholder="" id="txtemail" name='txtemail' value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <input required class="form-control" type="text" placeholder="" id="txtmsg" name="txtmsg" value="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomfrm">
                                    <div class="form-group text-center">
                                        <button class="btn btn-lg" type="submit" id="btnsbmt" name="btnsbmt">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                </form>
                <div>
                    <br>
                    <div id="divSubmitSuccess" name="divEditProdAlert" class="alert alert-success hideDiv">
                    </div>
                    <div id="divSubmitAlert" name="divEditProdAlert" class="alert alert-danger hideDiv">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/main.js"></script>