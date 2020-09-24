<?php 

$userListView="
            CREATE OR REPLACE VIEW user_list_view AS
            SELECT `admins`.`id` AS userId,`admins`.`name` AS name,`admins`.`email` AS email,`admins`.`username` AS userName,`admins`.`role` AS role,`admins`.`status` AS status,`user_roles`.name AS roleName,`user_roles`.parentRole AS parentRole
            FROM admins
            INNER JOIN user_roles ON admins.`role` = user_roles.`id`
            
        "
 ?>
