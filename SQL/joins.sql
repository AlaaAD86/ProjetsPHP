-- 1. Afficher la liste des plats avec comme colonnes : "Plat", "Type" et "Prix" (utilisez des alias)

SELECT libellePlat AS Plat, Designation AS Type, PrixVente AS Prix
FROM plats
INNER JOIN typeplats
ON plats.idType = typeplats.idType


-- 2. Afficher chaque menu avec la liste de chaque plat avec son type, ordonné par prix
SELECT m.Libelle, m.PrixVente, tp.Designation, p.LibellePlat
FROM menus AS m, typeplats AS tp, plats AS p
INNER JOIN menu_plats AS mp
ON p.idPlat = mp.idPlat
ORDER BY m.PrixVente

-- 3. Afficher pour chaque mois de 2019,
-- le nb de menus commandés et le CA que cela représente

















-- 6. Afficher pour chaque mois de 2019 le CA total 
-- hors boisson (menu + plat à la carte)
SELECT DATE_FORMAT(commandes.DateCommande, '%M %Y') AS mois, 
		COUNT(DISTINCT commandes.idCommande) AS nbCom, 
        COUNT(DISTINCT commande_menus.idMenu) AS nbm, 
        COUNT(DISTINCT commande_plats.idPlat) AS nbp, 
        SUM(menus.PrixVente, plats.PrixVente)
        
INNER JOIN menus ON commande_menus.idMenu = menus.idMenu
INNER JOIN commandes ON commandes.idCommande = commande_plats.idCommande
INNER JOIN plats ON commande_plats.idPlat = menu_plats.idPlat

WHERE YEAR(DateCommande) = 2019
GROUP BY mois
MONTH(commandes.DateCommande)
ORDER BY MONTH(commandes.DateCommande)