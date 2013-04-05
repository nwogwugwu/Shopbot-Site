/*
        to compile:
        gcc -o make_shopbot_list $(mysql_config --cflags) make_shopbot_list.c $(mysql_config --libs)
 
        to execute:
        make_shopbot_list
*/

#include <mysql.h>
#include <stdio.h>
#include <string.h>

MYSQL *conn;
MYSQL_RES *res;
FILE * output_file;
FILE * input_file;
MYSQL_ROW row;


char *server = "localhost";
char *user = "root";
char *password = "kinetic";
char *database = "kinetic";

char *total_item_list[80];
int numerical_item_list[80];
int consolidated_item_list[80];
int item_list_index = 0;
int cons_list_index = 0;

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
    //printf("%s:\n", query);
    while ((row = mysql_fetch_row(res)) != NULL)
    {
        //printf("%s \n", row[0]);
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
    int k;
    int is_unique;
    
    for (j = 0; j < item_list_index; j++)    // for every number in the array
    {
        is_unique = 1;
        
        k = j+1;
        for (k = j+1; k < item_list_index; k++) //check remainder of the array for a duplicate
            if (numerical_item_list[j] == numerical_item_list[k]) is_unique = 0;
        
        if (is_unique == 1)     // if no duplicates, transfer int to new array
        {
            consolidated_item_list[cons_list_index] = numerical_item_list[j];
            cons_list_index++;
        }
    }
    
    //      enter results into text file
    input_file = fopen("shopbot_list.txt", "w");
    int n = 0;
    for (n = 0; n < cons_list_index; n++)
    {
        //printf("%d is %d\n", n, consolidated_item_list[n]);
        fprintf(input_file, "%d\n", consolidated_item_list[n]);
    }
    fclose(output_file);
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
        
        //      separate lines into their respective number
        item_number = strtok(line, " ");
        if(item_number)
        {
            //printf("%s\n", item_number);
            numerical_item_list[item_list_index] = atoi(item_number);
            item_list_index++;
        }
        else more_items = 0;
        
        while (more_items)
        {
            item_number = strtok(NULL, " ");
            if(item_number)
            {
                //printf("%s\n", item_number);
                numerical_item_list[item_list_index] = atoi(item_number);
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
    
    //  output condensed list to shopbot_list.txt
    optimize_item_list();
    
  return 0;
}
