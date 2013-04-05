/* 
See url for more info:
http://www.cyberciti.biz/tips/linux-unix-connect-mysql-c-api-program.html

*/

#include <mysql.h>
#include <stdio.h>
#include <string.h>

MYSQL *conn;
MYSQL_RES *res;
FILE * output_file;
MYSQL_ROW row;

char *server = "localhost";
char *user = "root";
char *password = "kinetic";
char *database = "kinetic";

char *total_item_list[80];
int item_list_index = 0;

void connect_to_database()
{
    // Connect to database
    if (!mysql_real_connect(conn, server,
                            user, password, database, 0, NULL, 0)) {
        fprintf(stderr, "%s\n", mysql_error(conn));
        //exit(1);
    }
    // send SQL query
    if (mysql_query(conn, "use kinetic")) {
        fprintf(stderr, "%s\n", mysql_error(conn));
        //exit(1);
    }
}

void make_query(char * query)
{
    // send SQL query
    if (mysql_query(conn, query)) {
        fprintf(stderr, "%s\n", mysql_error(conn));
        //exit(1);
    }
    res = mysql_use_result(conn);
    output_file = fopen("mysql_resutls.txt", "w");
    
    // output table name and print to a text file
    printf("%s:\n", query);
    while ((row = mysql_fetch_row(res)) != NULL)
    {
        printf("%s \n", row[0]);
        fprintf(output_file, "%s\n", row[0]);
    }
    fclose(output_file);
    
    // update is_processed field
    if (mysql_query(conn, "UPDATE customer_orders SET is_processed=1 WHERE is_processed=0")) {
        fprintf(stderr, "%s\n", mysql_error(conn));
        //exit(1);
    }
}

void eliminate_array_duplicates()
{
    int j = 0;
    for(j = 0; j < 10; j++)
    {
        printf("%d is %s\n", j, total_item_list[j]);
        
    }
    
}

void optimize_item_list()
{
    char *item_number;
    output_file = fopen("mysql_resutls.txt", "rt");
    int num_lines = 0;
    char line[80];
    
    while(fgets(line, 80, output_file) != NULL)
    {
        //      print mysql_results.txt
        num_lines++;
        int more_items = 1;
        printf("num_lines: %d\n", num_lines);
        printf("line is: %s\n", line);
        
        
        //      separate lines into their respective number
        item_number = strtok(line, " ");
        if(item_number)
        {
            printf("%s\n", item_number);
            total_item_list[item_list_index] = item_number;
            eliminate_array_duplicates();
            item_list_index++;
        }
        else more_items = 0;
        
        while (more_items)
        {
            item_number = strtok(NULL, " ");
            if(item_number)
            {
                printf("%s\n", item_number);
                total_item_list[item_list_index] = item_number;
                eliminate_array_duplicates();
                item_list_index++;
            }
            else more_items = 0;
        }
    }
    eliminate_array_duplicates();
    fclose(output_file);
}

int main(void) {
   
    //  access and pull from mysql
    conn = mysql_init(NULL);
    connect_to_database();
    make_query("SELECT id_list FROM customer_orders WHERE is_processed = 0");
    mysql_free_result(res);
    mysql_close(conn);
    
    
    optimize_item_list();
    
  return 0;
}
