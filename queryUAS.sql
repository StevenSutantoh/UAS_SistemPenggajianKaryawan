CREATE VIEW datakaryawan AS
    SELECT emp.name,emp.identification_no,emp.address,emp.marriage_status,emp.gender,dpt.department,dpt.jabatan,dpt.level
       FROM employees emp 
    INNER JOIN departments dpt ON dpt.employee_id=emp.id