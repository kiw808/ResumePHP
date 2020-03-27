<h2>Send me a message !</h2>
<form action="contact.php" method="post" name="formSaise" class="form">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" required="" class="form-control" id="name" placeholder="MrBean" pattern="[A-Z][A-Za-z' -]+">
    </div>
    <div class="form-group">
        <label for="mail">Email address</label>
        <input type="email" name="mail" required="" class="form-control" id="mail" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="tel">Phone number </label>
        <input type="tel" name="tel" required class="form-control" id="tel" placeholder="0123456789" minlength="10" maxlength="10" pattern="[0-9]{10}">
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <select name="subject" id="subject" required="" class="form-control">
            <option class="form-option" selected> - Select a subject - </option>
            <option class="form-option">I want to hire you</option>
            <option class="form-option">I want to meet you</option>
        </select>
    </div>
    <div class="form-group">
        <label for="msg">Message</label>
        <textarea required="" name="msg" class="form-control" id="msg" rows="8"></textarea>
    </div>
    <div class="button">
        <button type="submit" name="send-message" value="OK">Send</button>
    </div>
</form>