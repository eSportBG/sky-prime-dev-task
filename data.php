<?php
    require_once('classes/DBOperations.php');

	## Database Connection ##
	$db_data['dbHost'] 	= 'localhost'; 	//Database Host
	$db_data['dbUser'] 	= '_DB USER_'; 	//Database User
	$db_data['dbPass'] 	= '_DB PASS_'; 	//Database Password
	$db_data['dbName'] 	= '_DB NAME_'; 	//Database Name
	$db_data['dbChar'] 	= 'utf8'; 		//Database Charset

    $filter_columns = [
        'ekkate',
        'kind',
        'settlement_name',
        'transliteration',
        'district_code',
        'area_name',
        'municipality_code',
        'municipality_name',
        'city_hall',
        'nuts1',
        'nuts2',
        'nuts3',
        'type_code',
        'category_code',
        'altitude',
        'document_code',
    ];


    $altitude = [
        1 => '1: до 49 вкл.',
        2 => '2: 50 - 99 вкл.',
        3 => '3: 100 - 199 вкл.',
        4 => '4: 200 - 299 вкл.',
        5 => '5: 300 - 499 вкл.',
        6 => '6: 500 - 699 вкл.',
        7 => '7: 700 - 999 вкл.',
        8 => '8: 1000 и повече'
    ];

    $DBOperations = new DBOperations($db_data);

    //filters
    $data = [];
    $filter_data = [];
    $where = '';
    $filtered_string = '';
    $total_records = 0;
    $results_per_page = 20;

    if(isset($_GET)){

        $search_query = [];
        foreach ($filter_columns as $column) {
            if(isset($_GET[$column]) && $_GET[$column] !== ''){
                $search_query[] = "$column = '".$_GET[$column]."'";
                $filter_data[$column] = $_GET[$column];
            } else {
                $filter_data[$column] = '';
            }
        }

        foreach ($filter_data as $key => $data_value) {
            if(!empty($data_value)){
                $filtered_string .= $key.'='.$data_value.'&';
            }
        }

        if(count($search_query) > 0){
            $where .= ' WHERE '.implode(' AND ', $search_query);
        }

        $sql = 'SELECT * FROM settlements';

        if (!isset($_GET['page']) ) {
            $page = 1;
            $total_records = $DBOperations->mys_n($DBOperations->mys_q($sql));
        } else {
            $page = $_GET['page'];
        }

        $page_first_result = ($page-1) * $results_per_page;
        $limit = " LIMIT " . $page_first_result . ',' . $results_per_page;
        $data = $DBOperations->fastQuery($sql.$limit);

        //get filtered data
        if($where != ''){
            $data = $DBOperations->fastQuery($sql.$where.$limit);
            $total_records = $DBOperations->mys_n($DBOperations->mys_q($sql.$where));
        }

        $number_of_pages = ceil($total_records / $results_per_page);

    }