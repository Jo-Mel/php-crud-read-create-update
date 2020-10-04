<?php
include __DIR__ .'/partials/templates/header.php';
?>

<div class="container p-3">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="number" class="form-control" name="roomNumber" placeholder="Inserisci numero stanza" value="">
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="number" class="form-control" name="floor" placeholder="Inserisci piano" value="">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="number" class="form-control" name="beds" placeholder="Inserisci numero letti" value="">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning" value="Inserisci">
        </div>
    </form>
</div>

<?php
include __DIR__ .'/partials/templates/footer.php';
?>