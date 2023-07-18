<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') or exit('No direct script access allowed');

class ApiClient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("ACAModel", "capi");
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        //  header('Access-Control-Allow-Origin: *', 'Content-Type: application/json; charset=utf-8');
    }

    public function index()
    {
        echo 'sprs';
    }

    public function cleintaccess()
    {
        $res = array();
        $client_id = $this->input->post('client_id');
        if (empty($client_id)) {
            $res = array(
                "status" => 3,
                "msg" => 'Client id missing!',
            );
            echo json_encode($res, JSON_PRETTY_PRINT);
            exit();
        }
        $ga_data = $this->capi->find(array('client_id' => $client_id));
        if ($ga_data) {
            foreach ($ga_data->result() as $row) {
                $res = array(
                    "status" => 1,
                    "msg" => 'Fetched Successfully!',
                    "client_id" => $row->client_id,
                    "api_key" => $row->api_secret,
                    "api_status" => $row->api_status,
                    "api_secret" => $row->api_key_secret,
                    "client_cb_url" => $row->client_cb_url
                );
            }
            echo json_encode($res, JSON_PRETTY_PRINT);
        } else {
            $res = array(
                "status" => 3,
                "msg" => 'No data fetched from Auth Server!',
            );
            echo json_encode($res, JSON_PRETTY_PRINT);
        }
    }

    function hash_decrypt($hash, $secretkey)
    {
        return openssl_decrypt($hash, "AES-128-ECB", $secretkey);
    }

    public function callback()
    {
        $client_id = 'BMTECH243';
        $apisecret = $this->capi->getApiSecret(array('client_id' => $client_id));
        $data = $this->input->post();
        //$data = array('status' => '', 'message' => 'Transactions Failed', 'hash' => '0xoBgmfDI\/58UsukTUJKRxgjutU\/GWAZIlv2CWio\/2uubfJV7txUB\/PklIiNKXaVSzkAkKK6opIpRW1\/ZqOGBtmB0lKbh4QedUUsFwChrQxvCT8fHpDk+D8GLqgsArpBbpNXXxc6DIj0cY37Czv9g+V468C5LHXZp0oaqk2+LCcYIkPdQqi+2RByOprnYcBGlzGwKf35z1V9u\/Ju+FT6IDfnM1lkMtUG\/+YCviOpOPY\/7B9kUwtpZ02StSoZh0fIqcQlNNAYRMCRD5LGT8FVHKGzuRh\/JXW0z9ghzVzIh6pOyP1QG0mN5gH\/YzNMzqqKHrgiKSZMdbKpotIHiQ6Q4nQQgphBY+C2GaN574Ck0mWekrOhEP7o1IdA6ZuQNom6uTXDAHyBB0qO7q40Hmt6wGK2Ykc1ag04Ljc871nZX+j2lVhUe\/zuQEiskVfMUYXWp\/dTJ0x\/3wInM3VIMInQXn1uscDgQeIEuNyOSBGNfyOX61j\/gAGzoQXah5SFEKSX3LpduVS90HoOdM5drYK68pTpYzASYkUtMzCtDDgo4BM=');

        $mydata = $this->hash_decrypt($data['hash'], $apisecret);
        $getPGStatus = json_decode($mydata);

        $store_data = array(
            'client_id' => $client_id,
            'pg_gateway' => 'upiapi',
            'txnStatus' => $getPGStatus->txnStatus,
            'txnDate' => $getPGStatus->txnDate,
            'resultInfo' => $getPGStatus->resultInfo,
            'txnAmount' => $getPGStatus->txnAmount,
            'paymentMode' => $getPGStatus->paymentMode,
            'utr_no' => $getPGStatus->utr,
            'payerName' => $getPGStatus->customerName,
            'payerMobile' => $getPGStatus->customerMobile,
            'payerupi' => $getPGStatus->customerUpi,
            'rcvr_vpa' => $getPGStatus->payee_vpa,
        );
        $gogo = $this->capi->insertMe($store_data, 'client_api_transaction_rprt');
        $data = urlencode(json_encode($data));
        redirect('https://control.fatafatguru.in/api/callback/?results=' . $data);
    }
}