<form method="GET">
    <divclass="col class="row">
        <div class = "col s12">
            <div class= "row">

                <div class="input-field col s6">
                <label for "Marke">Die Marke des Fahrzeugs</label>
                <input value="<?php echo @$edit['marke'] ?>" type="text" name="Marke" placeholder="Marke eingeben">
                </div>

           

                <div class="input-field col s6">
                    <label for="Modell">Modell des Fahrzeugs</label>
                    <input value="<?php echo @$edit['modell'] ?>" type="text" name="Modell" placeholder="Modell eingeben">
                </div>

            </div>

        <div class= "row">

            <div class="input-field col s6">
                <label for="Aufbau">Der Aufbau des Fahrzeugs</label>
            <input value="<?php echo @$edit['aufbau'] ?>" type="text" name="Aufbau" placeholder="Aufbau eingeben">
            </div>

            <div class="input-field col s6">
                <label for="Kraftstoff">Kraftstoff des Fahrzeugs</label>
                <input value="<?php echo @$edit['kraftstoff'] ?>" type="text" name="Kraftstoff" placeholder="Kraftstoff eingeben">
            </div>

        </div>

        <div class= "row">
            <div class="input-field col s6">
                <label for="Farbe">Fahrzeugfarbe</label>
                <input value="<?php echo @$edit['farbe'] ?>" type="text" name="Farbe" placeholder="Farbe eingeben">
            </div>

            <div class="input-field col s6">
                <label for="Hubraum">Hubraum des Fahrzeugs</label>
                <input value="<?php echo @$edit['hubraum'] ?>" type="number" name="Hubraum" placeholder="Hubraum eingeben">
            </div>
        </div>
        <div class= "row">

            <div class="input-field col s6">
            <button type="submit" name="action" value="create" class="waves-effect waves-light btn">Erstellen</button>
            </div>



        </div>
        </div>
    </div>
</form>

