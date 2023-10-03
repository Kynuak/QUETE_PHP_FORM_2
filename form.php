<form  action="thanks.php"  method="post">
<div>
    <label  for="lastname">Nom :</label>
    <input  type="text"  id="lastname"  name="user_lastname" required="true">
</div>
<div>
    <label  for="firstname">Prénom :</label>
    <input  type="text"  id="firstname"  name="user_firstname" required="true">
</div>
<div>
    <label  for="courriel">Email :</label>
    <input  type="email"  id="courriel"  name="user_email" required="true">
</div>
<div>
    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="user_telephone" required="true">
</div>
<div>
    <label  for="theme_message">Sujet :</label>
    <select id="theme_message"  name="user_sujet" required="true">
        <option value="">Veuillez sélectionner un sujet :</option>
        <option value="Informations">Demande d'informations</option>
        <option value="Recrutement">Recrutement</option>
        <option value="Réclamations">Réclamations</option>
    </select>
</div>
<div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message" required="true"></textarea>
</div>
<div  class="button">
    <button  type="submit">Envoyer votre message</button>
</div>
</form>