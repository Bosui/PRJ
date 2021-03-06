<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registracija</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <!-- ----------------HEARED MENU------------------------- -->
    <!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 left-menu"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="img-styles col-xs-1 col-sm-1 col-md-1 col-lg-1  left-menu size">
                <a href="http://auksciausiapavara.lt/">
                    <img src="../images/Menu Baneris 242x98px.jpg" class="img-fluid img-styles" style="width:100%">
                </a>
                <!-- ------------------Menu-------------------------------------- -->
                <nav class="well navbar navbar-default">
                    <button type="button" class="navbar-toggle collapsed btn-format" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                    <span class="navbar-brand"></span>
                    <!-- </div> -->
                    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="registracija.html" class="vmenu-setings icon-home"><span class="glyphicon glyphicon-registration-mark"></span>  Registruoti</a></li>
                            <li><a href="uzsakymusarasas.html" class="vmenu-setings icon-home"><span class="glyphicon glyphicon-th-list"></span>  Užsakymų sąrašas</a></li>
                            <li><a href="darbuaktas.html" class="vmenu-setings icon-home"><span class="glyphicon glyphicon-inbox"></span>  Darbų aktas</a></li>
                            <li><a href="index" class="vmenu-setings icon-home"><span class="glyphicon glyphicon-pencil"></span>  Rašyti sąskaitą</a></li>
                            <li><a href="prekes.html" class="vmenu-setings icon-home"><span class="glyphicon glyphicon-pencil"></span>  Prekės</a></li>
                            <!-- <li><a href="#">Reviews <span class="badge">1,118</span></a></li> -->
                        </ul>
                        <!--/.nav-collapse -->
                        <ul class="nav navbar-nav">
                            <li class="h-divider"></li>
                        </ul>
                        <!-- --------------------Admin Menu ------------------ -->
                        <!-- <div class="sidebar-nav"> -->
                        <!-- <div class="well left-menu"> -->
                        <!-- <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1"> -->
                        <ul class="nav navbar-nav">
                            <li class="nav-header">ADMIN MENU</li><br>
                            <li><a href="index" class="vmenu-setings icon-home"><span class="glyphicon glyphicon glyphicon-home"></span> Dashboard</a></li>
                            <li>
                                <a href="#" class="vmenu-setings icon-envelope"> <span class="glyphicon glyphicon glyphicon-envelope"></span> Messages <span class="badge badge-info">4</span></a>
                            </li>
                            <li>
                                <a href="#" class="vmenu-setings icon-comment"> <span class="glyphicon glyphicon glyphicon-comment"></span> Comments <span class="badge badge-info">10</span></a>
                            </li>
                            <li><a href="#" class="vmenu-setings icon-user"><span class="glyphicon glyphicon glyphicon-user"></span> Members</a></li>
                            <li class="h-divider"></li>
                            <li><a href="#" class="vmenu-setings icon-comment"><span class="glyphicon glyphicon glyphicon-cog"></span> Settings</a></li>
                            <li><a href="#" class="vmenu-setings icon-share"><span class="glyphicon glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <!-- turinys -->
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                            <table class="editabletable table table-condensed">
                                <tr>
                                    <th class="td-center">Eil. Nr.</th>
                                    <th class="td-center">Tiekejas</th>
                                    <th class="td-center">Kodas</th>
                                    <th class="td-center">Detalės pavadinimas</th>
                                    <th class="td-center">Kiekis</th>
                                    <th class="td-center">Kaina</th>
                                    <th class="td-center">Suma</th>
                                    <th class="td-center">Paslaugos pavadinimas</th>
                                    <th class="td-center">Kiekis</th>
                                    <th class="td-center">Kaina</th>
                                    <th class="td-center">Suma</th>
                                </tr>
                                <tr>
                                    <td class="active td-center">1</td>
                                    <td class="active td-center">Eoltas</td>
                                    <td class="active td-center"> 321748IEGT</td>
                                    <td class="active td-width">Trinkelės stabdžių diskinės PREMIUM</td>
                                    <td class="active td-center">1</td>
                                    <td class="active td-center">23</td>
                                    <td class="active td-center">23</td>
                                    <td class="active">Trinkelės stabdžių diskinės PREMIUM keitimas</td>
                                    <td class="active td-center">2</td>
                                    <td class="active td-center">8</td>
                                    <td class="active td-center">19.36</td>
                                    <td class="active">...</td>
                                </tr>
                                <tr>
                                    <td class="success td-center"><div contenteditable>1</div></td>
                                    <td class="success"><div contenteditable>Eoltas</div></td>
                                    <td class="success"><div contenteditable> 321748IEGT</div></td>
                                    <td class="success"><div contenteditable>Trinkelės stabdžių diskinės PREMIUM</div></td>
                                    <td class="success"><div contenteditable>1</div></td>
                                    <td class="success"><div contenteditable>23</div></td>
                                    <td class="success"><div contenteditable>23</div></td>
                                    <td class="success"><div contenteditable>Trinkelės stabdžių diskinės PREMIUM keitimas</div></td>
                                    <td class="success"><div contenteditable>2</div></td>
                                    <td class="success"><div contenteditable>8</div></td>
                                    <td class="success"><div contenteditable>19.36</div></td>
                                    <td class="success"><div contenteditable>...</div></td>
                                </tr>
                                <tr>
                                    <td class="warning td-center"><div contenteditable>1</div></td>
                                    <td class="warning"><div contenteditable>Eoltas</div></td>
                                    <td class="warning"><div contenteditable> 321748IEGT</div></td>
                                    <td class="warning"><div contenteditable>Trinkelės stabdžių diskinės PREMIUM</div></td>
                                    <td class="warning"><div contenteditable>1</div></td>
                                    <td class="warning"><div contenteditable>23</div></td>
                                    <td class="warning"><div contenteditable>23</div></td>
                                    <td class="warning"><div contenteditable>Trinkelės stabdžių diskinės PREMIUM keitimas</div></td>
                                    <td class="warning"><div contenteditable>2</div></td>
                                    <td class="warning"><div contenteditable>8</div></td>
                                    <td class="warning"><div contenteditable>19.36</div></td>
                                    <td class="warning"><div contenteditable>...</div></td>
                                </tr>
                                <tr>
                                    <td class="danger td-center"><div contenteditable>1</div></td>
                                    <td class="danger"><div contenteditable>Eoltas</div></td>
                                    <td class="danger"><div contenteditable> 321748IEGT</div></td>
                                    <td class="danger"><div contenteditable>Trinkelės stabdžių diskinės PREMIUM</div></td>
                                    <td class="danger"><div contenteditable>1</div></td>
                                    <td class="danger"><div contenteditable>23</div></td>
                                    <td class="danger"><div contenteditable>23</div></td>
                                    <td class="danger"><div contenteditable>Trinkelės stabdžių diskinės PREMIUM keitimas</div></td>
                                    <td class="danger"><div contenteditable>2</div></td>
                                    <td class="danger"><div contenteditable>8</div></td>
                                    <td class="danger"><div contenteditable>19.36</div></td>
                                    <td class="danger"><div contenteditable>...</div></td>
                                </tr>

                                <tr>
                                    <td class="info">...</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="scripts/main1.js" charset="utf-8"></script>
</body>

</html>
