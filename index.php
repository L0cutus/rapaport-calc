<?php include "includes/header.php"; ?>
<?php include "includes/main.php"; ?>

    <!-- Start your project here-->
    <div class="container">
        <div class="row">
            <h1 class="col-xs-12 hoverable col-sm-6">Rapaport Calc</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-push-6 col-sm-6">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Modalita' d'uso:</strong> Selezionare caratura, purezza e colore della pietra negli appositi campi quindi premere il rispettivo pulsante 'Calcola'.<br />(Per ora attive solo le carature da 0 a 0.49ct.)
                </div>
            </div> <!-- end of column -->
            <div class="col-xs-12 col-sm-pull-6 col-sm-6">

                <!-- Modal -->
                <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                  <div class='modal-dialog' role='document'>
                    <div class='modal-content modal-sm'>
                      <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                        <h4 class='modal-title' id='myModalLabel'><strong>Costo Stimato</strong></h4>
                      </div>
                      <div class='modal-body'>
                          <h5><span class="label label-primary">Carati: </span>  <span id="plchCarati">carati</span></h5>
                          <h5><span class="label label-primary">Purezza: </span>  <span id="plchPurezza">purezza</span></h5>
                          <h5><span class="label label-primary">Colore: </span>  <span id="plchColore">colore</span></h5>
                          <h3><span class="label label-danger">Valore: </span>  <span id="plchResult" class="label label-success"></span></h3>
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Modal -->

                <!-- echo "<script>$(document).ready(function(){$('#myModal').modal('show')});</script>"; -->

                <h2 class="h2-responsive"><span class="label green hoverable">Immettere dati pietra</span></h2>
                <div>
                    <label for="carati"><strong>Caratura</strong></label>
                    <input type="number" class="form-control" name="carati" id="carati">
                </div>
                <div>
                    <label for="colore"><strong>Colore</strong></label>
                    <select class="form-control browser-default" name="colore" id="colore">
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                    </select>
                </div>
                <div>
                    <label for="purezza"><strong>Purezza</strong></label>
                    <select class="form-control" name="purezza" id="purezza">
                        <option value="IF">IF</option>
                        <option value="VVS1">VVS1</option>
                        <option value="VVS2">VVS2</option>
                        <option value="VS1">VS1</option>
                        <option value="VS2">VS2</option>
                        <option value="SI1">SI1</option>
                        <option value="SI2">SI2</option>
                        <option value="SI3">SI3</option>
                        <option value="I1">I1</option>
                        <option value="I2">I2</option>
                        <option value="I3">I3</option>
                    </select>
                </div>
                <label for="dollaro" class="disabled"><strong>Cambio Dollaro - Euro</strong></label>
                <div class="input-group">
                    <input type="number" class="form-control" disabled id="dollaro">
                    <span class="input-group-addon">&euro;</span>
                </div>
                <br />
                <button type="button" class="btn btn-block btn-lg btn-success-outline waves-effect" onclick="myFunction()" name="calcola">
                Calcola
                </button>
                <br />
            </div> <!-- end first column -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->

<?php include "includes/footer.php"; ?>
