Crée exactement ce MCD avec 4 entités et 3 associations nommées :

CLIENT
- id_client : int, PK
- nom : string
- email : string

COMMANDE
- id_commande : int, PK
- date_commande : date

PRODUIT
- id_produit : int, PK
- nom : string
- prix : decimal

LIGNE_COMMANDE
- id_commande : int, FK
- id_produit : int, FK
- quantite_commandee : int

ASSOCIATIONS :
1. CLIENT — "PASSER" — COMMANDE
   CLIENT (0,N)
   COMMANDE (1,1)

2. COMMANDE — "CONTENIR" — LIGNE_COMMANDE
   COMMANDE (1,N)
   LIGNE_COMMANDE (1,1)

3. PRODUIT — "CONCERNER" — LIGNE_COMMANDE
   PRODUIT (0,N)
   LIGNE_COMMANDE (1,1)

IMPORTANT :
- Afficher les noms des associations : PASSER, CONTENIR, CONCERNER.
- Afficher obligatoirement les cardinalités sous la forme (0,N), (1,1), (1,N).
- Relier les entités avec les associations.
- Afficher PK et FK.
- Ne pas supprimer les associations.
- Schéma simple, propre et lisible, similaire à un MCD Merise.