
# TP - Création d’un Gestionnaire de Contacts Simple

## Objectif
Développer une petite application en PHP permettant d’ajouter et de lister des contacts. Ce TP vous permettra de pratiquer l'inclusion de fichiers, la gestion de formulaires et l’utilisation de tableaux.

## Structure du Projet

1. Créez un dossier nommé `gestion_contacts`.
2. Dans ce dossier, créez les fichiers suivants :
   - `index.php` : page principale qui affiche la liste des contacts et le formulaire d’ajout.
   - `header.php` : fichier d’en-tête inclus dans toutes les pages.
   - `footer.php` : fichier de pied de page inclus dans toutes les pages.
   - `data.php` : fichier contenant un tableau pour stocker les informations de contacts.

## Étapes à Suivre

### 1. Inclusion de Fichiers
Dans `index.php`, incluez les fichiers `header.php` et `footer.php` en utilisant `include` ou `require`.

### 2. Formulaire d’Ajout de Contact
Dans `index.php`, ajoutez un formulaire pour saisir les informations d’un contact :
- Champs du formulaire : `nom`, `email`, `telephone`
- Bouton de soumission

### 3. Traitement du Formulaire
- Lorsqu’un utilisateur soumet le formulaire, récupérez les valeurs de `nom`, `email`, et `telephone`.
- Ajoutez le contact sous forme de tableau dans le fichier `data.php` pour simuler une base de données.

### 4. Afficher les Contacts
- En haut de `index.php`, incluez `data.php`.
- Utilisez une boucle pour afficher chaque contact sous forme de tableau HTML.

### 5. Organisation du Code avec des Fonctions (Optionnel)
Pour aller plus loin, les étudiants peuvent créer une fonction `afficherContacts()` pour afficher la liste des contacts, et `ajouterContact()` pour ajouter un nouveau contact dans `data.php`.

## Contenu des Fichiers

- **header.php**  
  Ce fichier contient le code HTML de l’en-tête, comme le titre du projet et un lien vers le fichier CSS.
  ```php
  <!DOCTYPE html>
  <html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>Gestionnaire de Contacts</title>
  </head>
  <body>
      <h1>Gestionnaire de Contacts</h1>
  ```

- **footer.php**  
  Ce fichier contient le code HTML de pied de page.
  ```php
      <footer>
          <p>&copy; 2024 - Gestion de Contacts</p>
      </footer>
  </body>
  </html>
  ```

- **data.php**  
  Ce fichier contient un tableau `$contacts` avec des données fictives pour démarrer.
  ```php
  <?php
  $contacts = [
      ["nom" => "Jean Dupont", "email" => "jean.dupont@example.com", "telephone" => "0102030405"],
      ["nom" => "Marie Curie", "email" => "marie.curie@example.com", "telephone" => "0607080910"],
  ];
  ```

- **index.php**  
  Ce fichier inclut `header.php`, `data.php`, et `footer.php`, traite le formulaire et affiche les contacts.
  ```php
  <?php
  include 'header.php';
  include 'data.php';

  // Traitement du formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nom = $_POST['nom'];
      $email = $_POST['email'];
      $telephone = $_POST['telephone'];

      // Ajouter le contact au tableau (en vrai projet, on stockerait dans une base de données)
      $contacts[] = ["nom" => $nom, "email" => $email, "telephone" => $telephone];
  }
  ?>

  <!-- Formulaire pour ajouter un contact -->
  <form action="" method="POST">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required>
      <label for="email">Email :</label>
      <input type="email" name="email" id="email" required>
      <label for="telephone">Téléphone :</label>
      <input type="text" name="telephone" id="telephone" required>
      <button type="submit">Ajouter</button>
  </form>

  <!-- Affichage des contacts -->
  <h2>Liste des contacts</h2>
  <table border="1">
      <tr>
          <th>Nom</th>
          <th>Email</th>
          <th>Téléphone</th>
      </tr>
      <?php foreach ($contacts as $contact) : ?>
          <tr>
              <td><?php echo htmlspecialchars($contact['nom']); ?></td>
              <td><?php echo htmlspecialchars($contact['email']); ?></td>
              <td><?php echo htmlspecialchars($contact['telephone']); ?></td>
          </tr>
      <?php endforeach; ?>
  </table>

  <?php include 'footer.php'; ?>
  ```

## Résultats Attendus

A la fin de ce TP, vous serez capable être capables de :

- Créer un formulaire en PHP pour ajouter des données.
- Utiliser l’inclusion de fichiers pour structurer leur code.
- Afficher des données sous forme de tableau HTML à partir d’un tableau PHP.
