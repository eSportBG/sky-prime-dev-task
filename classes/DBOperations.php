
<?php

    class DBOperations
    {
        protected $db_connection;

        public function __construct($db_data) {
            $this->db_connection = mysqli_connect($db_data['dbHost'], $db_data['dbUser'], $db_data['dbPass'], $db_data['dbName']);
            $this->db_connection->set_charset('utf8');

            if (!$this->db_connection) {
                echo "Не бе осъществена връзка с базата данни" . PHP_EOL;
                echo "Грешка: " . mysqli_connect_errno() . PHP_EOL;
                echo "Грешка: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
        }

        public function mys_q($sql) {
            $res = mysqli_query($this->db_connection, $sql) or die(mysqli_error($this->db_connection));
            return $res;
        }

        public function mys_n($res) {
            $numr = mysqli_num_rows($res);
            return $numr;
        }

        public function mys_r($res) {
            $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
            return $row;
        }

        public function mys_a($res) {
            $row = mysqli_fetch_assoc($res);
            return $row;
        }

        public function fastQuery($sql) {
            $res = $this->mys_q($sql);

            if($this->mys_n($res) > 0) {
                $response = array();
                $i = 0;
                while($row = mysqli_fetch_assoc($res)) {
                    foreach($row as $key => $value) {
                        $response[$i][$key] = $value;
                    }

                    $i++;
                }
            } else {
                $response = '';
            }

            return $response;
        }

    }