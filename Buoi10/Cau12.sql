SELECT b.name as 'Quyen cua group admin' 
FROM phpoffline.group a, permission b 
WHERE find_in_set(b.id, a.permission_id) and a.name = 'Admin'