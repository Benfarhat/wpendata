# 17/06/2018


A la base de ce projet, nous avons besoin d'une alternative à CKAN (jugé trop compliqué pour les développeurs non python qui ont du mal a customiser l'outil en fonction de leur besoin)
Et de DKAN qui malheureusement, bien que plus "friendly" dans son utilisation, n'a pas été porté sur le version 8 de Drupal.

Wordpress étant connu, nous allons essayer avec ce plugin de mettre en place une portail de données très facilement

Avant tout nous allons commencé par la hierarchie opendata


Une plateforme Opendata contient un ensemble de catalog
Chaque catalog à un ensemble de jeux de données (datasets)
Chaque jeux de données a un ensemble de distribution qui pour chacune d'entre elle a une ressource qui est une URI vers un fichier interne (excel, json, xml) ou une ressource externe

Par exemple un catalog sur les affaires sécuritaires pourrais contenir plusieurs jeux de données dont par exemple des données relatives aux accidents de la route, une distribution pourrait offir une URI vers le fichier (ou la ressource) contenant des données sur les accidents de la route par lieu (au format CSV par exemple) et une autre distribution vers la ressource (ou le fichier) contenant des données brutes sur les accidents de la route par cause et ce dans un format de préférence le plus ouvert possible.

En nous basant sur l'echelle en étoiles de Tim Berners-Lee (l'inventeur du web) cela se résume à ceci:

1 étoile: pour les fichiers non structurés possédant une licence ouverte (image, pdf, etc...)
2 étoiles: si avec une licence ouverte, le fichier est structuré (Pour chaque donnée on sait à quoi cela correspond, via par exemple une entête) tel que XLS
3 étoiles: si avec une licence ouverte et un contenu structuré, le fichier peut être lu par tous les logiciels et pas seulement les logiciels propriétaires (tel que CSV pour les fichier) ou hiérarchique (JSON ou XML)

Pour les étoiles 4 et 5 il s'agit de notation attribué lorsqu'on inclu des fichiers RDF contenant les métadonnées (les données de description), et que le fichier contenant les données brutes est pointé via une URI (4 étoiles) et si ce même fichier RDF est lié à d'autres on parle de données liées, c'est la 5ème étoiles.

Nous allons commencer par créer 3 nouveaux types de données:

- catalogs
- datasets
- distributions
    
Wordpress possède déja les types: post, page, attachement, revision et menu

# 18/06/2018

La prochaine étape est la création des menus et sous menus regroupés pour voir les résultats. Ensuite on passe à la taxonomie (thème, organisation, licence)
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    