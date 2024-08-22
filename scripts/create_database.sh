#!/bin/bash

# Variables
DB_DATABASE="primepix_db"
DB_USERNAME="root"
DB_PASSWORD=""
DB_HOST="127.0.0.1"
DB_PORT=3306
SQL_FILE="sql/backup.sql" # Correct path to your backup.sql file

# Get the current directory (useful for dynamic paths)
current_dir=$(pwd)
SQL_FILE="$current_dir/$SQL_FILE" # Ensure the full path is used

# Creating a PHP script to handle database creation and importing the SQL file using multi_query
cat <<EOF > create_database.php
<?php
\$servername = "$DB_HOST";
\$username = "$DB_USERNAME";
\$password = "$DB_PASSWORD";
\$database = "$DB_DATABASE";

// Create connection
\$conn = new mysqli(\$servername, \$username, \$password);

// Check connection
if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}

// SQL to create the database
\$sql = "CREATE DATABASE IF NOT EXISTS \`" . \$database . "\`";
if (\$conn->query(\$sql) === TRUE) {
    echo "Database '\$database' created successfully\n";
} else {
    die("Error creating database: " . \$conn->error . "\n");
}

// Select the database
\$conn->select_db(\$database);

// Check if SQL file exists and import it
\$sqlFile = '$SQL_FILE';
if (file_exists(\$sqlFile)) {
    echo "Importing database from \$sqlFile...\n";
    \$sqlContent = file_get_contents(\$sqlFile);

    if (\$conn->multi_query(\$sqlContent)) {
        do {
            // Flush multi_query results
            if (\$result = \$conn->store_result()) {
                \$result->free();
            }
        } while (\$conn->more_results() && \$conn->next_result());
        echo "Database imported successfully.\n";
    } else {
        die("Error importing database: " . \$conn->error . "\n");
    }
} else {
    echo "SQL file not found: \$sqlFile\n";
}

// Run a verification query to fetch data and display results
\$verificationQuery = "SELECT * FROM users LIMIT 5";
\$result = \$conn->query(\$verificationQuery);

if (\$result && \$result->num_rows > 0) {
    echo "Data verification query results:\n";
    while (\$row = \$result->fetch_assoc()) {
        print_r(\$row);
    }
} else {
    echo "No data found or query failed.\n";
}

\$conn->close();
?>
EOF

# Running the PHP script to create the database and import the SQL content
php create_database.php

# Clean up by removing the temporary PHP script
rm create_database.php