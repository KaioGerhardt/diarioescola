insert into aluno(id, nome) values(10, "Lucas");
insert into responsavel(id, nome) values(19, "Pablo");
insert into responsavel(id, nome) values(45, "Brenda");
insert into parentesco(idResponsavel, idAluno, Parentesco) values(19, 10, "Pai");
insert into parentesco(idResponsavel, idAluno, Parentesco) values(45, 10, "Mãe");

SELECT 
    a.nome AS Aluno,
    r1.nome AS Responsavel,
    p1.Parentesco AS Parentesco,
    r2.nome AS Responsavel,
    p2.Parentesco AS Parentesco
FROM
    aluno a
        INNER JOIN
    parentesco p1 ON p1.idAluno = a.id
        INNER JOIN
    parentesco p2 ON p2.idAluno = a.id and p2.idResponsavel <> p1.idResponsavel
        INNER JOIN
    responsavel r1 ON r1.id = p1.idResponsavel
        INNER JOIN
    responsavel r2 ON r2.id = p2.idResponsavel
GROUP BY a.id
order by p1.idResponsavel desc, p2.idResponsavel desc;

SELECT 
    a.nome, r.nome, p.Parentesco
FROM
    aluno a
        INNER JOIN
    parentesco p ON p.idAluno = a.id
        INNER JOIN
    responsavel r ON r.id = p.idResponsavel
ORDER BY a.nome ASC;