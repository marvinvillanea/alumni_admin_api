SELECT 
bullet_id,
descriptions,
survey_id,
( SELECT 
COUNT(*)
FROM alumni_evulation WHERE bullet_id = bs.bullet_id AND user_id IN (
SELECT user_id FROM personal_info WHERE course_id = (SELECT course_id FROM course WHERE `code` = 'BSIT' )
) ) AS BSIT,
( SELECT 
COUNT(*)
FROM alumni_evulation WHERE bullet_id = bs.bullet_id AND user_id IN (
SELECT user_id FROM personal_info WHERE course_id = (SELECT course_id FROM course WHERE `code` = 'BSCE' )
) ) AS BSCE,
( SELECT 
COUNT(*)
FROM alumni_evulation WHERE bullet_id = bs.bullet_id AND user_id IN (
SELECT user_id FROM personal_info WHERE course_id = (SELECT course_id FROM course WHERE `code` = 'BSCS' )
) ) AS BSCS
FROM bullet_survey bs  WHERE survey_id = (SELECT survey_id FROM survey WHERE survey_id = 1)