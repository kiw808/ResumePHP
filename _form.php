<h2>Send me a message !</h2>
<form action="contact.php" method="post" name="formSaise" class="form">
    <!-- First name -->
    <div class="form-group">
        <label for="firstname">First name</label>
        <input type="text" name="firstname" required="" class="form-control" id="firstname" placeholder="John" pattern="[A-Z][A-Za-z' -]+">
    </div>
    <!-- Last name -->
    <div class="form-group">
        <label for="lastname">Name</label>
        <input type="text" name="lastname" required="" class="form-control" id="lastname" placeholder="Doe" pattern="[A-Z][A-Za-z' -]+">
    </div>
    <!-- E-mail -->
    <div class="form-group">
        <label for="mail">Email address</label>
        <input type="email" name="mail" required="" class="form-control" id="mail" placeholder="name@example.com">
    </div>
    <!-- Tel -->
    <div class="form-group">
        <label for="tel">Phone number </label>
        <input type="tel" name="tel" required class="form-control" id="tel" placeholder="0123456789" minlength="10" maxlength="10" pattern="[0-9]{10}">
    </div>
    <!-- Subject -->
    <div class="form-group">
        <label for="subject">Subject</label>
        <select name="subject" id="subject" required="" class="form-control">
            <option class="form-option" value="nothing interesting" selected> - Select a subject - </option>
            <option class="form-option" value="hireing me">I want to hire you</option>
            <option class="form-option" value="a possible meeting">I want to meet you</option>
            <option class="form-option" value="riding my car">I want to ride your car</option>
        </select>
    </div>
    <!-- Message -->
    <div class="form-group">
        <label for="msg">Message</label>
        <textarea required="" name="msg" class="form-control" id="msg" rows="8"></textarea>
    </div>
    <!-- Button -->
    <div class="button">
        <button type="submit" name="send-message" value="OK">Send</button>
    </div>
</form>