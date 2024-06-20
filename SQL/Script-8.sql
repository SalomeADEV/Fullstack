 use exemple;
-- SELECT nom AS Employe FROM emp;


-- 07 SELECT e.nom, e.noemp, e.nodep FROM employe e WHERE titre = 'secrétaire'; 

-  -08 SELECT nom, nodep FROM employe WHERE nodep > 40;

--09 SELECT nom, prenom FROM employe WHERE nom > prenom;

--10 SELECT nom,salaire, nodep FROM employe WHERE titre = 'représentant, nodep = 35

--11 AND salaire > 20000';

--12 SELECT nom, titre AND salaire FROM employe WHERE titre = 'représentant OR titre = Président';

--13 SELECT e.nom, e.titre, e.nodep, e.salaire FROM employe e WHERE e.nodep = 34 AND e.titre IN ('Représentant','Secrétaire');

--14SELECT nom,titre,nodep,salaire FROM employe e WHERE titre = 'Représentant'OR'Secrétaire';

--15 SELECT nom, salaire FROM employe e WHERE salaire = 20000 AND 30000;

--16 SELECT nom FROM employe e WHERE nom LIKE "H%";

--17 SELECT nom FROM employe WHERE nom LIKE "%n";

--18 SELECT nom FROM employe e WHERE 'u'= '3ème position';

---19 SELECT salaire, nom FROM employe e WHERE nodep = '41'ORDER BY 'ASC';

-- 20  SELECT salaire, nom FROM employe WHERE nodep = '41'ORDER BY 'DESC';

-- 21 SELECT titre, salaire AND nom FROM employe WHERE titre = 'ASC' AND salaire = 'DESC';

-- 22 SELECT nom,salaire,'taux de commission' AND titre FROM employe WHERE 'taux de commission "IS NOT NULL"';

-- 23 SELECT nom,salaire,'taux de commission' AND titre FROM employe WHERE 'taux de commission'"IS NULL";

-- 24 SELECT nom, salaire, 'taux de commission', titre FROM  employe e WHERE 'taux de commission'> 15;

-- 25 SELECT nom, salaire,'taux de commission',titre FROM employe e WHERE 'taux de commission'< 15;

-- 26 SELECT nom, salaire, 'taux de commission' AND 'commission'FROM employe e WHERE 'TAUX DE COMMISSION'"IS NOT NULL";
--  ()
-- 27 
SELECT nom,salaire,tauxcom FROM employe WHERE tauxcom IS NOT NULL ORDER BY tauxcom ASC;   

-- 28
SELECT CONCAT(nom,'_',prenom) FROM employe;

-- 29 
SELECT SUBSTRING(nom,1,5) as nom from employe;

-- 30 
SELECT nom,LOCATE('r',nom) FROM employe WHERE LOCATE('r',nom) != 0 order by LOCATE('r',nom);

-- 31
SELECT nom,UPPER(nom) as maj,LOWER(nom) as miniscule FROM employe WHERE nom = 'vrante';

-- 32 
SELECT nom,LENGTH(nom) FROM employe order by LENGTH(nom);


EXERCICE2

1 
