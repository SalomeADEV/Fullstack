 use exemple;
-- SELECT nom AS Employe FROM emp;


-- SELECT e.nom, e.noemp, e.nodep FROM employe e WHERE titre = 'secrétaire'; 

-- SELECT nom, nodep FROM employe WHERE nodep > 40;
-- SELECT nom, prenom FROM employe WHERE nom > prenom;
-- SELECT nom,salaire, nodep FROM employe WHERE titre = 'représentant, nodep = 35
-- AND salaire > 20000';
-- SELECT nom, titre AND salaire FROM employe WHERE titre = 'représentant OR titre = Président';
-- SELECT e.nom, e.titre, e.nodep, e.salaire FROM employe e WHERE e.nodep = 34 AND e.titre IN ('Représentant','Secrétaire');
-- SELECT nom,titre,nodep,salaire FROM employe e WHERE titre = 'Représentant'OR'Secrétaire';
-- SELECT nom, salaire FROM employe e WHERE salaire = 20000 AND 30000;
-- SELECT nom FROM employe e WHERE nom LIKE "H%";
-- SELECT nom FROM employe WHERE nom LIKE "%n";
-- SELECT nom FROM employe e WHERE 'u'= '3ème position';
-- SELECT salaire, nom FROM employe e WHERE nodep = '41'ORDER BY 'ASC';
--  SELECT salaire, nom FROM employe WHERE nodep = '41'ORDER BY 'DESC';
-- SELECT titre, salaire AND nom FROM employe WHERE titre = 'ASC' AND salaire = 'DESC';






