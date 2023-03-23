<form action="thanks.php" method="post">
    <div>
        <label  for="name">Nom :</label>
        <input  type="text"  id="name"  name="name" required>
    </div>
    <div>
        <label  for="firstname">Prénom :</label>
        <input  type="text"  id="firstname"  name="firstname" required>
    </div>
    <div>
        <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="email" required>
    </div>
    <div>
        <label  for="telephone">Telephone :</label>
        <input  type="text"  id="telephone"  name="telephone" required>
    </div>
    <div>
        <label  for="subject">Choisissez un sujet :</label>
        <select  id="subject"  name="subject" required>
            <option value="">--Choisissez une option--</option>
            <option value="le_boulot">boulot</option>
            <option value="le_sport">sport</option>
            <option value="le_cinema">cinema</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit" name="submit">Envoyer votre message</button>
    </div>


</form>

