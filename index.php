<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3ds.css">
    <title></title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row hlogo ds-flex">
            <img src="img/logo.png" alt="" class="logo">
            <h4 class="temp">IBM Technology Support Services</h5>
        </div>
        <div class="row htitulo ds-flex">
            <h5 class="tpag">Tiulo de pagina</h4>
        </div>
        <div class="row hcontenido ds-flex">
            <div class="box">
                <form id="form">
                <div class="boxg-info">
                    <div class="box-info1">
                        <div class="box-che">

                            <div class="text-center">
                                <h5><b>Market<i id="q-m" class="far fa-question-circle"></i></b></h5>
                            </div>
                            <div class="checked">

                                <div class="custom-control custom-switch">
                                    <input type="radio" class="custom-control-input" id="op1" name="pais" value="mexico">
                                    <label class="custom-control-label" for="op1">Mexico</label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="radio" class="custom-control-input" id="op2" name="pais" value="ssa" checked> 
                                    <label class="custom-control-label" for="op2">SSA</label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="radio" class="custom-control-input" id="op3" name="pais" value="brazil">
                                    <label class="custom-control-label" for="op3">Brazil</label>
                                </div>

                            </div>

                        </div>
                        <div class="box-che">

                            <div id="dina-spe">
                                <div class="text-center">
                                    <h6><b>Country</b></h6>
                                </div>
                                <div class="checked-di">

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="c1" name="paisEsp" class="custom-control-input" value="argentina" checked>
                                    <label class="custom-control-label" for="c1">Argentina</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="c2" name="paisEsp" class="custom-control-input" value="chile">
                                    <label class="custom-control-label" for="c2">Chile</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="c3" name="paisEsp" class="custom-control-input" value="colombia">
                                    <label class="custom-control-label" for="c3">Colombia</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="c4" name="paisEsp" class="custom-control-input" value="ecuador">
                                    <label class="custom-control-label" for="c4">Ecuador</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="c5" name="paisEsp" class="custom-control-input" value="peru">
                                    <label class="custom-control-label" for="c5">Peru</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="c6" name="paisEsp" class="custom-control-input" value="uruguay">
                                    <label class="custom-control-label" for="c6">Uruguay</label>
                                </div>

                                </div>
                            </div>
                            

                        </div>
                    </div>
                    <div class="box-info2">
                        <div class="box-che">

                            <div class="text-center">
                                <h5><b>Service<i id="q-m" class="far fa-question-circle"></i></b></h5>
                            </div>
                            <div class="checked">

                                <div class="custom-control custom-switch">
                                    <input type="radio" class="custom-control-input" id="op4" name="calc" value="install">
                                    <label class="custom-control-label" for="op4">Install</label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="radio" class="custom-control-input" id="op5" name="calc" value="preventive"> 
                                    <label class="custom-control-label" for="op5">Preventive</label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="radio" class="custom-control-input" id="op6" name="calc" value="gtms" checked>
                                    <label class="custom-control-label" for="op6">GTMS</label>
                                </div>

                            </div>

                        

                        </div>
                        <div class="box-che">

                            <div id="dina-gtms">
                                <div class="text-center">
                                    <h6><b>GTMS</b></h6>
                                </div>
                                <div class="checked-di">

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="c7" name="data" class="custom-control-input" value="dataRemote" checked>
                                        <label class="custom-control-label" for="c7">Data Analysis Remote</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="c8" name="data" class="custom-control-input" value="dataOnsite">
                                        <label class="custom-control-label" for="c8">Data Analysis On Site</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="c9" name="data" class="custom-control-input" value="DataMu">
                                        <label class="custom-control-label" for="c9">Data Analysis & Microcode upgrade</label>
                                    </div>
                                

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-bot">
                    <button type="submit" class="btn btn-danger bot">Enviar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="logof.js"></script>
  </body>
</html>