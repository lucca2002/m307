<br>
<form method="GET">
    <input type='hidden' name='id' value=<?php echo @$edit['id']; ?>>
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
                <select name="Aufbau">
                <option value="" disabled>Aufbau wählen</option>
                <option value="Bus" <?php if(@$edit['aufbau'] == 'Bus'){echo 'selected';} ?>>Bus</option>
                <option value="Kleinwagen" <?php if(@$edit['aufbau'] == 'Kleinwagen'){echo 'selected';} ?>>Kleinwagen</option>
                <option value="Minivan" <?php if(@$edit['aufbau'] == 'Minivan'){echo 'selected';} ?>>Minivan</option>
                <option value="Limousine" <?php if(@$edit['aufbau'] == 'Limousine'){echo 'selected';} ?>>Limousine</option>
                <option value="SUV" <?php if(@$edit['aufbau'] == 'SUV'){echo 'selected';} ?>>SUV</option>
                </select>
                <label>Aufbau des Fahrzeuges</label>
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
                <p>
                <label>
                    <input name="Getriebe" value="automat" type="radio" <?php if(@$edit['getriebe'] == 'automat'){echo 'checked';} ?> />
                    <span>Automat</span>
                </label>
                </p>
                <p>
                <label>
                    <input name="Getriebe" value="manuell" type="radio" <?php if(@$edit['getriebe'] == 'manuell'){echo 'checked';} ?> />
                    <span>Handgeschalten</span>
                </label>
                </p>
            </div>
            </div>
        <div class= "row">

        <div class="input-field col s6">
            <label for="kaufdatum">Kaufdatum des Fahrzeuges</label>
            <input placeholder="Kaufdatum wählen" name="Kaufdatum" type="text" class="datepicker" value="<?php echo @$edit['kaufdatum'] ?>">
        </div>
        <div class="input-field col s6">
            <p>
            <label>
                <input name="Neuwagen" type="checkbox" <?php if(@$edit['neuwagen'] == 'ja'){echo 'checked';} ?> />
                <span>Neuwagen</span>
            </label>
            </p>
        </div>

            <div class="input-field col s6">
            <button type="submit" name="action" value="create" class="waves-effect waves-light btn">Speichern</button>
            </div>



        </div>
        </div>
    </div>
</form>

