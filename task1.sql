SELECT name
FROM students
WHERE GPA > 3.5;
UPDATE students
SET GPA = 3.8
WHERE student_id = 101;
DELETE FROM students
WHERE GPA < 2.0;