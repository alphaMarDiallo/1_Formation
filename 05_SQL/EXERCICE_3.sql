-- Lister tous les salariés né avant 2000 :
SELECT first_name, last_name FROM employees WHERE birth_date <= ' 2000-01-01' ;
-- Lister tous les departements :
 SELECT dept_name FROM departments;
-- Lister tous les salariés avec un salaire entre 40000-55000 :

-- Lister tous les salariée  avec un nom commençanty par la lettre "a" :

-- lister tous les salariés :
SELECT * FROM employees;
-- Lister tous les salariés antrer dans l'entreprise avant le 01 janvier 1980 :
-- Supprimer tous les salariés en CDI :
-- Afficher salariés pour chaque département(pas de doublon)
-- Afficher manager pour chaque département (pas de doublon)
-- Afficher les titres()

 SELECT last_name FROM employees LEFT JOIN salaries ON salary BETWEEN 40000 AND 55000;