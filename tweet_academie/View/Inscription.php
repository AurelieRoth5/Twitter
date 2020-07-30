<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <title>Tiger</title>
</head>
<body>
<header>
        <img src="#" alt="logo">
    </header>
        <div class="container">
            <div class="container-inscription">
                <form action="#" method="POST">
                    <label for="user">Utilisateur</label>
                    <input type="text" name="input-user" id="user" required>

                    <label for="mail">Mail</label>
                    <input type="text" name="input-mail" id="mail" required>

                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="input-pseudo" id="pseudo" required>

                    <label for="mail">Mail</label>
                    <input type="email" name="input-mail" id="mail" required>

                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="input-mdp" id="mdp" required>
                    
                    <label for="mdp-confirmation">Confirmation du mot de passe</label>
                    <input type="password" name="input-mdpconf" id="mdp-confirmation" required>

                    <label for="naissance">Date de naissance</label>
                    <input type="date" name="input-naissance" id="naissance" required>

                    <label for="pays">Pays</label>
                    <input type="text" name="input-pays" id="pays" required>
                    
                    <label for="ville">Ville</label>
                    <input type="text" name="input-ville" id="ville" required>

                    <select name="input-genre" id="genre" required>Genre
                        <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                        <option value="autre">Autre</option>
                    </select>

                    <label for="telephone">Téléphone</label>
                    <input type="tel" name="input-tel" id="telephone" pattern="(0|\\+33|0033)[1-9][0-9]{8}" required>

                    <input type="submit" name="valide" id="btn-inscription">
                </form>
            </div>
        </div>
</body>
</html>