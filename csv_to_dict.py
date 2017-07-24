<!-- Convert csv to dictionary -->
<?php 
$filename = "test.csv";
$journal_csv_file = "$file_name";
$rows = array_map('str_getcsv', file($journal_csv_file));
$header = array_shift($rows);
$journal_csv_data = array();
foreach ($rows as $row) {
    if(trim($row[9]))
        $journal_csv_data[$row[9]] = array_combine($header, $row);
 
}

?>
