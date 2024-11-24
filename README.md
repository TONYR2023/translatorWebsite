# translatorWebsite
site de traduction
# 1. transferer le projet
  Dans le terminal :
  git clone copie du repository

# 2. mettre a jour les dependances
  composer install
  npm install

# 3. verifier les installation

# 4. Commencez à travailler sur votre CSS
Une fois sur la branche css, vous pouvez commencer à travailler sur vos fichiers CSS. Toutes vos modifications seront enregistrées dans cette branche spécifique sans affecter la branche dev.
4. Valider vos changements sur la branche css

Lorsque vous avez terminé vos modifications CSS, vous pouvez ajouter et valider les fichiers modifiés avec les commandes suivantes :

git add .
git commit -m "Ajout des modifications CSS"

5. Pousser la branche css vers le dépôt distant (si nécessaire)

Si vous souhaitez pousser la branche css vers le dépôt distant pour la partager avec d'autres ou pour sauvegarder vos changements, vous pouvez exécuter la commande suivante :

git push origin css

6. Fusionner la branche css dans dev (lorsque vous avez terminé)

Une fois vos modifications terminées sur la branche css, vous pouvez fusionner cette branche dans dev pour intégrer vos changements. Pour cela, vous devez d'abord vous remettre sur la branche dev :

git checkout dev

Puis, fusionnez la branche css dans dev :

git merge css

Enfin, vous pouvez pousser les changements fusionnés vers le dépôt distant avec :

git push origin dev
