-- 1. Lister les commandes de la table n°10, les trier par date chronologique (SELECT WHERE ORDER BY)


SELECT * FROM `commandes` WHERE idTable = 10 ORDER BY DateCommande DESC,


-- 2. Liste les commandes de la table n°10 ou n°6 pour le service du midi (AND, OR IN)




-- 3. Afficher le nb de commandes passé à la table n°10 (COUNT et AS)


SELECT COUNT(*) FROM `commandes` WHERE idTable=10 ==========> 11


-- 4. Afficher le nb de commande passé à la table n°10, pour chacun des services midi et soir (GROUP BY)


SELECT COUNT(*) FROM commandes WHERE idTable=10 GROUP BY idService


-- 5. Reprendre la requête précédente et remplacer l'id du service par Midi ou Soir (CASE WHEN)





-- 6. Afficher les commandes à venir, les trier par date anti-chronologique (NOW) 


SELECT * FROM `commandes` WHERE DateCommande>now() ORDE BY DateCommande;


-- 7. Afficher les commandes du dernier trimestre 2019 (YEAR, MONTH)


SELECT * FROM `commandes` WHERE YEAR(DateCommande) = 2019 AND MONTH (DateCommande) >= 10

OR
SELECT * FROM `commandes` WHERE DateCommande BETWEEN '2019-10-01' AND '2019-12-31'



-- 8. Reprendre la requête précédente et remplacer la date de commande par le mois et l'année : octobre 2019 (DATE_FORMAT)


SELECT DATE_FORMAT(DateCommande, "%b %Y"), `idCommande` FROM commandes



-- 9. Afficher le nb de commandes total pour chaque mois de l'année 2019


SELECT COUNT(*) FROM `commandes` WHERE YEAR(DateCommande) = 2019 GROUP BY DateCommande 


-- 10. Reprendre la requête précédente en n'affichant que les mois pour lesquels il y a au moins 5 commandes (HAVING)

SELECT DATE_FORMAT(DateCommande, "%M %Y") as mois, count(*) as nbCom
FROM commandes 
where YEAR(DateCommande)=2019
group by mois having nbCom>=5
order by DateCommande
