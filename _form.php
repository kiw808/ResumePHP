<form action="form.php" method="get" name="formSaise">
    <div class="form-group">
        <label for="name">Nom *</label>
        <input type="text" required="" class="form-control" id="name" placeholder="MrBean">
    </div>
    <div class="form-group">
        <label for="mail">Email address *</label>
        <input type="email" required="" class="form-control" id="mail" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="tel">Tel *</label>
        <input type="tel" required="" class="form-control" id="tel" placeholder="0123456789">
    </div>
    <div class="form-group">
        <label for="msg">Message *</label>
        <textarea required="" class="form-control" id="msg" rows="3"></textarea>
    </div>
    <div class="button">
        <button type="submit" value="OK" class="btn btn-outline-secondary">Send</button>
    </div>
</form>