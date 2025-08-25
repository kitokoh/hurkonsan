# Guide de Gestion des Images

Ce fichier explique où trouver et comment modifier les images principales du site.

## 1. Le Logo du Site

Le logo est une image "statique", ce qui signifie qu'il est directement dans les fichiers du projet.

- **Emplacement physique :** `public/site/assets/images/logo/hidroyeni2.png`

- **Comment le modifier :**
  Pour changer le logo, vous devez remplacer ce fichier par votre nouvelle image.
  **Recommandation :** Pour éviter de devoir modifier le code, le plus simple est de nommer votre nouveau fichier logo `hidroyeni2.png` et de l'utiliser pour écraser l'ancien.

---

## 2. Images des Produits, Articles de Blog, etc.

Ces images sont "dynamiques". Elles sont gérées depuis le panneau d'administration du site.

- **Emplacement physique du stockage :** `storage/app/public/`

  Toutes les images que vous téléchargez via l'interface d'administration sont stockées dans ce dossier. Le site y accède via un lien symbolique (`public/storage`).

- **Comment les modifier :**
  **La seule méthode recommandée est d'utiliser le panneau d'administration de votre site web.**
  Vous y trouverez des sections "Produits", "Blog", "Références", etc., où vous pourrez ajouter, supprimer ou remplacer les images pour chaque élément.

- **!! AVERTISSEMENT IMPORTANT !!**
  **NE MODIFIEZ PAS et NE SUPPRIMEZ PAS les fichiers directement dans le dossier `storage/app/public/` manuellement.**
  Le site web se base sur une base de données pour savoir quel fichier image correspond à quel produit.
    - Si vous supprimez un fichier manuellement, le site affichera une image cassée car il ne trouvera plus le fichier référencé dans la base de données.
    - Si vous ajoutez un fichier manuellement, il n'apparaîtra jamais sur le site car il ne sera pas enregistré dans la base de données.

**En résumé :**
- **Pour le logo :** Remplacez le fichier dans `public/site/assets/images/logo/`.
- **Pour toutes les autres images :** Utilisez **toujours** le panneau d'administration.
