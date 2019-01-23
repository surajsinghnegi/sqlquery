<!-- get data weekwise -->
select `main_timestamp`  ,week(`main_timestamp`) Week, month(`main_timestamp`) month, count(`main_min`), year(`main_timestamp`) Year, sum(main_amount) from table name group by week(`main_timestamp`), year(`main_timestamp`) order by main_timestamp desc

<!--- get multiple data in a row in comma separated way 
SELECT todolists.name, GROUP_CONCAT(todo_sub_table_name.name) FROM todolists INNER JOIN todo_sub_table ON todolists.id = todo_sub_table.todoid inner join todo_sub_table_name on todo_sub_table.todo_sub_table_id=todo_sub_table_name.id GROUP BY todo_sub_table.todoid
