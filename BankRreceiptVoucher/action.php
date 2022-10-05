<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    // $voucher_no = $_POST['voucher_no'];
    // $voucher_no = str_split($voucher_no);
    $date = $_POST['date'];
    $date = str_replace('-', '/', $date);
    $date_year = date("Y", strtotime($date));
    $date_month = date("M", strtotime($date));
    $date_day = date("d", strtotime($date));
    // $cheque_no = $_POST['cheque_no'];
    // $account_no = $_POST['account_no'];
    $paid_to = $_POST['paid_to'];
    // $cheque_date = $_POST['cheque_date'];
    $prepared_by_date = $_POST['prepared_by_date'];
    $prepared_by_date_y = date("Y", strtotime($prepared_by_date));
    $prepared_by_date_m = date("M", strtotime($prepared_by_date));
    $prepared_by_date_d = date("d", strtotime($prepared_by_date));
    $deposited_in_ac = $_POST['deposited_in_ac'];
    $account_title = $_POST['account_title'];
    $bank_name_branch = $_POST['bank_name_branch'];
    $project = $_POST['project'];

    $account_code_1 = $_POST['account_code_1'];
    $account_code_1 = str_split($account_code_1);
    $head_of_account_1 = $_POST['head_of_account_1'];
    $folio_1 = $_POST['folio_1'];
    $debit_rs_1 = intval($_POST['debit_rs_1']);
    $debit_ps_1 = $_POST['debit_ps_1'];
    $credit_rs_1 = intval($_POST['credit_rs_1']);
    $credit_ps_1 = $_POST['credit_ps_1'];

    $account_code_2 = $_POST['account_code_2'];
    $account_code_2 = str_split($account_code_2);
    $head_of_account_2 = $_POST['head_of_account_2'];
    $folio_2 = $_POST['folio_2'];
    $debit_rs_2 = intval($_POST['debit_rs_2']);
    $debit_ps_2 = $_POST['debit_ps_2'];
    $credit_rs_2 = intval($_POST['credit_rs_2']);
    $credit_ps_2 = $_POST['credit_ps_2'];

    $account_code_3 = $_POST['account_code_3'];
    $account_code_3 = str_split($account_code_3);
    $head_of_account_3 = $_POST['head_of_account_3'];
    $folio_3 = $_POST['folio_3'];
    $debit_rs_3 = intval($_POST['debit_rs_3']);
    $debit_ps_3 = $_POST['debit_ps_3'];
    $credit_rs_3 = intval($_POST['credit_rs_3']);
    $credit_ps_3 = $_POST['credit_ps_3'];

    $account_code_4 = $_POST['account_code_4'];
    $account_code_4 = str_split($account_code_4);
    $head_of_account_4 = $_POST['head_of_account_4'];
    $folio_4 = $_POST['folio_4'];
    $debit_rs_4 = intval($_POST['debit_rs_4']);
    $debit_ps_4 = $_POST['debit_ps_4'];
    $credit_rs_4 = intval($_POST['credit_rs_4']);
    $credit_ps_4 = $_POST['credit_ps_4'];

    $account_code_5 = $_POST['account_code_5'];
    $account_code_5 = str_split($account_code_5);
    $head_of_account_5 = $_POST['head_of_account_5'];
    $folio_5 = $_POST['folio_5'];
    $debit_rs_5 = intval($_POST['debit_rs_5']);
    $debit_ps_5 = $_POST['debit_ps_5'];
    $credit_rs_5 = intval($_POST['credit_rs_5']);
    $credit_ps_5 = $_POST['credit_ps_5'];

    $account_code_6 = $_POST['account_code_6'];
    $account_code_6 = str_split($account_code_6);
    $head_of_account_6 = $_POST['head_of_account_6'];
    $folio_6 = $_POST['folio_6'];
    $debit_rs_6 = intval($_POST['debit_rs_6']);
    $debit_ps_6 = $_POST['debit_ps_6'];
    $credit_rs_6 = intval($_POST['credit_rs_6']);
    $credit_ps_6 = $_POST['credit_ps_6'];

    $account_code_7 = $_POST['account_code_7'];
    $account_code_7 = str_split($account_code_7);
    $head_of_account_7 = $_POST['head_of_account_7'];
    $folio_7 = $_POST['folio_7'];
    $debit_rs_7 = intval($_POST['debit_rs_7']);
    $debit_ps_7 = $_POST['debit_ps_7'];
    $credit_rs_7 = intval($_POST['credit_rs_7']);
    $credit_ps_7 = $_POST['credit_ps_7'];

    $account_code_8 = $_POST['account_code_8'];
    $account_code_8 = str_split($account_code_8);
    $head_of_account_8 = $_POST['head_of_account_8'];
    $folio_8 = $_POST['folio_8'];
    $debit_rs_8 = intval($_POST['debit_rs_8']);
    $debit_ps_8 = $_POST['debit_ps_8'];
    $credit_rs_8 = intval($_POST['credit_rs_8']);
    $credit_ps_8 = $_POST['credit_ps_8'];

    $account_code_9 = $_POST['account_code_9'];
    $account_code_9 = str_split($account_code_9);
    $head_of_account_9 = $_POST['head_of_account_9'];
    $folio_9 = $_POST['folio_9'];
    $debit_rs_9 = intval($_POST['debit_rs_9']);
    $debit_ps_9 = $_POST['debit_ps_9'];
    $credit_rs_9 = intval($_POST['credit_rs_9']);
    $credit_ps_9 = $_POST['credit_ps_9'];

    $account_code_10 = $_POST['account_code_10'];
    $account_code_10 = str_split($account_code_10);
    $head_of_account_10 = $_POST['head_of_account_10'];
    $folio_10 = $_POST['folio_10'];
    $debit_rs_10 = intval($_POST['debit_rs_10']);
    $debit_ps_10 = $_POST['debit_ps_10'];
    $credit_rs_10 = intval($_POST['credit_rs_10']);
    $credit_ps_10 = $_POST['credit_ps_10'];

    // $account_code_11 = $_POST['account_code_11'];
    // $head_of_account_11 = $_POST['head_of_account_11'];
    // $folio_11 = $_POST['folio_11'];
    // $debit_rs_11 = $_POST['debit_rs_11'];
    // $debit_ps_11 = $_POST['debit_ps_11'];
    // $credit_rs_11 = $_POST['credit_rs_11'];
    // $credit_ps_11 = $_POST['credit_ps_11'];

    $amount_in_words = $_POST['amount_in_words'];
    $description = $_POST['description'];

    // $total_debit_rs = (($debit_rs_1) ? isset($debit_rs_1) : 0) + (($debit_rs_2) ? isset($debit_rs_2) : 0) + (($debit_rs_3) ? isset($debit_rs_3) : 0) + (($debit_rs_4) ? isset($debit_rs_4) : 0) + (($debit_rs_5) ? isset($debit_rs_5) : 0) + (($debit_rs_6) ? isset($debit_rs_6) : 0) + (($debit_rs_7) ? isset($debit_rs_7) : 0) + (($debit_rs_8) ? isset($debit_rs_8) : 0) + (($debit_rs_9) ? isset($debit_rs_9) : 0) + (($debit_rs_10) ? isset($debit_rs_10) : 0);
    $total_debit_rs = $debit_rs_1 + $debit_rs_2 + $debit_rs_3 + $debit_rs_4 + $debit_rs_5 + $debit_rs_6 + $debit_rs_7 + $debit_rs_8 + $debit_rs_9 + $debit_rs_10;
    // $total_credit_rs = (($credit_rs_1) ? isset($credit_rs_1) : 0) + (($credit_rs_2) ? isset($credit_rs_2) : 0) + (($credit_rs_3) ? isset($credit_rs_3) : 0) + (($credit_rs_4) ? isset($credit_rs_4) : 0) + (($credit_rs_5) ? isset($credit_rs_5) : 0) + (($credit_rs_6) ? isset($credit_rs_6) : 0) + (($credit_rs_7) ? isset($credit_rs_7) : 0) + (($credit_rs_8) ? isset($credit_rs_8) : 0) + (($credit_rs_9) ? isset($credit_rs_9) : 0) + (($credit_rs_10) ? isset($credit_rs_10) : 0);
    $total_credit_rs = $credit_rs_1 + $credit_rs_2 + $credit_rs_3 + $credit_rs_4 + $credit_rs_5 + $credit_rs_6 + $credit_rs_7 + $credit_rs_8 + $credit_rs_9 + $credit_rs_10;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bank Receipt Voucher</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="SOSLogo.png">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container form_container">
        <div class="row header_1">
            <div class="col-md-1">
                <img src="SOSLogo.png" alt="SOS Logo" width="100px" height="100px">
            </div>
            <div class="col-md-8">
                <h2>BANK RECEIPT VOUCHER</h2>
                <h2>SOS CHILDREN'S VILLAGES OF PAKISTAN</h2>
            </div>
        </div>
        <div class="bank_project">
            <h2><?php echo $project; ?></h2>
        </div>
        <div class="row header_2">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1">
                        <p>Location</p>
                        <p>Unit</p>
                    </div>
                    <div class="col-md-10">
                        <input type="checkbox"> Abbottabad
                        <input type="checkbox"> Dhodial
                        <input type="checkbox"> Faisalabad
                        <input type="checkbox"> Hyderabad
                        <input type="checkbox"> Karachi
                        <input type="checkbox"> Kasur
                        <input type="checkbox"> Khairpur
                        <input type="checkbox"> Lahore
                        <input type="checkbox"> Mirpur
                        <input type="checkbox"> Multan
                        <input type="checkbox"> Muzzaffarabad
                        <input type="checkbox"> National Branch Office
                        <input type="checkbox"> National Office
                        <input type="checkbox"> Pattan
                        <input type="checkbox"> Peshawar
                        <input type="checkbox"> Quetta
                        <input type="checkbox"> Rawalpindi
                        <input type="checkbox"> Sargodha
                        <input type="checkbox"> Sialkol
                        <input type="checkbox"> Others
                        <hr>
                        <input type="checkbox"> ERP
                        <input type="checkbox"> Medical Center
                        <input type="checkbox"> Mother/Child Care
                        <input type="checkbox"> School
                        <input type="checkbox"> Social Center
                        <input type="checkbox"> Youth Home
                        <input type="checkbox"> Village
                        <input type="checkbox"> Vocational Training
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <p>Voucher No.</p>
                    </div>
                    <div class="col-md-8">
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Date:</p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <span class="date_field"><?php echo $date_day = isset($date_day) ? $date_day : ''; ?></span>
                            <span class="date_seprator">/</span>
                            <span class="date_field"><?php echo $date_month = isset($date_month) ? $date_month : ''; ?></span>
                            <span class="date_seprator">/</span>
                            <span class="date_field"><?php echo $date_year = isset($date_year) ? $date_year : ''; ?></span>
                        </p>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-4">
                        <p>Cheque No.</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $cheque_no = isset($cheque_no) ? $cheque_no : ''; ?></p>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-4">
                        <p>A/C No.</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $account_no = isset($account_no) ? $account_no : ''; ?></p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="row before_section">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1 pr-0">
                        <p>Received from: </p>
                    </div>
                    <div class="col-md-10 pl-0 ml-2">
                        <p><?php echo $paid_to = isset($paid_to) ? $paid_to : ''; ?></p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <p>Cheque Date</p>
                    </div>
                    <div class="col-md-9 pl-0">
                        <p><?php echo $cheque_date = isset($cheque_date) ? $cheque_date : ''; ?></p>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row section">
            <table>
                <thead>
                    <tr>
                        <th colspan="8">ACCOUNT CODE</th>
                        <th colspan="" rowspan="" headers="" scope="">HEAD OF ACCOUNT</th>
                        <th colspan="" rowspan="" headers="" scope="">FOLIO</th>
                        <th colspan="" rowspan="" headers="" scope="">DEBIT Rs.</th>
                        <th colspan="" rowspan="" headers="" scope="">Ps.</th>
                        <th colspan="" rowspan="" headers="" scope="">CREDIT Rs.</th>
                        <th colspan="" rowspan="" headers="" scope="">Ps.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $account_code_1[0] = isset($account_code_1[0]) ? $account_code_1[0] : null; ?></td>
                        <td><?php echo $account_code_1[1] = isset($account_code_1[1]) ? $account_code_1[1] : null; ?></td>
                        <td><?php echo $account_code_1[2] = isset($account_code_1[2]) ? $account_code_1[2] : null; ?></td>
                        <td><?php echo $account_code_1[3] = isset($account_code_1[3]) ? $account_code_1[3] : null; ?></td>
                        <td><?php echo $account_code_1[4] = isset($account_code_1[4]) ? $account_code_1[4] : null; ?></td>
                        <td><?php echo $account_code_1[5] = isset($account_code_1[5]) ? $account_code_1[5] : null; ?></td>
                        <td><?php echo $account_code_1[6] = isset($account_code_1[6]) ? $account_code_1[6] : null; ?></td>
                        <td><?php echo $account_code_1[7] = isset($account_code_1[7]) ? $account_code_1[7] : null; ?></td>
                        <td class="<?php echo $debit_class_1 = empty($debit_rs_1) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_1 = isset($head_of_account_1) ? $head_of_account_1 : ''; ?>
                        </td>
                        <td><?php echo $folio_1 = isset($folio_1) ? $folio_1 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_1) && $debit_rs_1 != 0) { ?>
                            <td><?php echo number_format($debit_rs_1); ?></td>
                        <?php } elseif (isset($debit_rs_1) && $debit_rs_1 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_1 = isset($debit_ps_1) ? $debit_ps_1 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_1) && $credit_rs_1 != 0) { ?>
                            <td><?php echo number_format($credit_rs_1); ?></td>
                        <?php } elseif (isset($credit_rs_1) && $credit_rs_1 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_1 = isset($credit_ps_1) ? $credit_ps_1 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_2[0] = isset($account_code_2[0]) ? $account_code_2[0] : ''; ?></td>
                        <td><?php echo $account_code_2[1] = isset($account_code_2[1]) ? $account_code_2[1] : ''; ?></td>
                        <td><?php echo $account_code_2[2] = isset($account_code_2[2]) ? $account_code_2[2] : ''; ?></td>
                        <td><?php echo $account_code_2[3] = isset($account_code_2[3]) ? $account_code_2[3] : ''; ?></td>
                        <td><?php echo $account_code_2[4] = isset($account_code_2[4]) ? $account_code_2[4] : ''; ?></td>
                        <td><?php echo $account_code_2[5] = isset($account_code_2[5]) ? $account_code_2[5] : ''; ?></td>
                        <td><?php echo $account_code_2[6] = isset($account_code_2[6]) ? $account_code_2[6] : null; ?></td>
                        <td><?php echo $account_code_2[7] = isset($account_code_2[7]) ? $account_code_2[7] : null; ?></td>
                        <td class="<?php echo $debit_class_2 = empty($debit_rs_2) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_2 = isset($head_of_account_2) ? $head_of_account_2 : ''; ?>
                        </td>
                        <td><?php echo $folio_2 = isset($folio_2) ? $folio_2 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_2) && $debit_rs_2 != 0) { ?>
                            <td><?php echo number_format($debit_rs_2); ?></td>
                        <?php } elseif (isset($debit_rs_2) && $debit_rs_2 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_2 = isset($debit_ps_2) ? $debit_ps_2 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_2) && $credit_rs_2 != 0) { ?>
                            <td><?php echo number_format($credit_rs_2); ?></td>
                        <?php } elseif (isset($credit_rs_2) && $credit_rs_2 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_2 = isset($credit_ps_2) ? $credit_ps_2 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_3[0] = isset($account_code_3[0]) ? $account_code_3[0] : ''; ?></td>
                        <td><?php echo $account_code_3[1] = isset($account_code_3[1]) ? $account_code_3[1] : ''; ?></td>
                        <td><?php echo $account_code_3[2] = isset($account_code_3[2]) ? $account_code_3[2] : ''; ?></td>
                        <td><?php echo $account_code_3[3] = isset($account_code_3[3]) ? $account_code_3[3] : ''; ?></td>
                        <td><?php echo $account_code_3[4] = isset($account_code_3[4]) ? $account_code_3[4] : ''; ?></td>
                        <td><?php echo $account_code_3[5] = isset($account_code_3[5]) ? $account_code_3[5] : ''; ?></td>
                        <td><?php echo $account_code_3[6] = isset($account_code_3[6]) ? $account_code_3[6] : null; ?></td>
                        <td><?php echo $account_code_3[7] = isset($account_code_3[7]) ? $account_code_3[7] : null; ?></td>
                        <td class="<?php echo $debit_class_3 = empty($debit_rs_3) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_3 = isset($head_of_account_3) ? $head_of_account_3 : ''; ?>
                        </td>
                        <td><?php echo $folio_3 = isset($folio_3) ? $folio_3 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_3) && $debit_rs_3 != 0) { ?>
                            <td><?php echo number_format($debit_rs_3); ?></td>
                        <?php } elseif (isset($debit_rs_3) && $debit_rs_3 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_3 = isset($debit_ps_3) ? $debit_ps_3 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_3) && $credit_rs_3 != 0) { ?>
                            <td><?php echo number_format($credit_rs_3); ?></td>
                        <?php } elseif (isset($credit_rs_3) && $credit_rs_3 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_3 = isset($credit_ps_3) ? $credit_ps_3 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_4[0] = isset($account_code_4[0]) ? $account_code_4[0] : ''; ?></td>
                        <td><?php echo $account_code_4[1] = isset($account_code_4[1]) ? $account_code_4[1] : ''; ?></td>
                        <td><?php echo $account_code_4[2] = isset($account_code_4[2]) ? $account_code_4[2] : ''; ?></td>
                        <td><?php echo $account_code_4[3] = isset($account_code_4[3]) ? $account_code_4[3] : ''; ?></td>
                        <td><?php echo $account_code_4[4] = isset($account_code_4[4]) ? $account_code_4[4] : ''; ?></td>
                        <td><?php echo $account_code_4[5] = isset($account_code_4[5]) ? $account_code_4[5] : ''; ?></td>
                        <td><?php echo $account_code_4[6] = isset($account_code_4[6]) ? $account_code_4[6] : null; ?></td>
                        <td><?php echo $account_code_4[7] = isset($account_code_4[7]) ? $account_code_4[7] : null; ?></td>
                        <td class="<?php echo $debit_class_4 = empty($debit_rs_4) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_4 = isset($head_of_account_4) ? $head_of_account_4 : ''; ?>
                        </td>
                        <td><?php echo $folio_4 = isset($folio_4) ? $folio_4 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_4) && $debit_rs_4 != 0) { ?>
                            <td><?php echo number_format($debit_rs_4); ?></td>
                        <?php } elseif (isset($debit_rs_4) && $debit_rs_4 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_4 = isset($debit_ps_4) ? $debit_ps_4 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_4) && $credit_rs_4 != 0) { ?>
                            <td><?php echo number_format($credit_rs_4); ?></td>
                        <?php } elseif (isset($credit_rs_4) && $credit_rs_4 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_4 = isset($credit_ps_4) ? $credit_ps_4 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_5[0] = isset($account_code_5[0]) ? $account_code_5[0] : ''; ?></td>
                        <td><?php echo $account_code_5[1] = isset($account_code_5[1]) ? $account_code_5[1] : ''; ?></td>
                        <td><?php echo $account_code_5[2] = isset($account_code_5[2]) ? $account_code_5[2] : ''; ?></td>
                        <td><?php echo $account_code_5[3] = isset($account_code_5[3]) ? $account_code_5[3] : ''; ?></td>
                        <td><?php echo $account_code_5[4] = isset($account_code_5[4]) ? $account_code_5[4] : ''; ?></td>
                        <td><?php echo $account_code_5[5] = isset($account_code_5[5]) ? $account_code_5[5] : ''; ?></td>
                        <td><?php echo $account_code_5[6] = isset($account_code_5[6]) ? $account_code_5[6] : null; ?></td>
                        <td><?php echo $account_code_5[7] = isset($account_code_5[7]) ? $account_code_5[7] : null; ?></td>
                        <td class="<?php echo $debit_class_5 = empty($debit_rs_5) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_5 = isset($head_of_account_5) ? $head_of_account_5 : ''; ?>
                        </td>
                        <td><?php echo $folio_5 = isset($folio_5) ? $folio_5 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_5) && $debit_rs_5 != 0) { ?>
                            <td><?php echo number_format($debit_rs_5); ?></td>
                        <?php } elseif (isset($debit_rs_5) && $debit_rs_5 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_5 = isset($debit_ps_5) ? $debit_ps_5 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_5) && $credit_rs_5 != 0) { ?>
                            <td><?php echo number_format($credit_rs_5); ?></td>
                        <?php } elseif (isset($credit_rs_5) && $credit_rs_5 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_5 = isset($credit_ps_5) ? $credit_ps_5 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_6[0] = isset($account_code_6[0]) ? $account_code_6[0] : ''; ?></td>
                        <td><?php echo $account_code_6[1] = isset($account_code_6[1]) ? $account_code_6[1] : ''; ?></td>
                        <td><?php echo $account_code_6[2] = isset($account_code_6[2]) ? $account_code_6[2] : ''; ?></td>
                        <td><?php echo $account_code_6[3] = isset($account_code_6[3]) ? $account_code_6[3] : ''; ?></td>
                        <td><?php echo $account_code_6[4] = isset($account_code_6[4]) ? $account_code_6[4] : ''; ?></td>
                        <td><?php echo $account_code_6[5] = isset($account_code_6[5]) ? $account_code_6[5] : ''; ?></td>
                        <td><?php echo $account_code_6[6] = isset($account_code_6[6]) ? $account_code_6[6] : null; ?></td>
                        <td><?php echo $account_code_6[7] = isset($account_code_6[7]) ? $account_code_6[7] : null; ?></td>
                        <td class="<?php echo $debit_class_6 = empty($debit_rs_6) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_6 = isset($head_of_account_6) ? $head_of_account_6 : ''; ?>
                        </td>
                        <td><?php echo $folio_6 = isset($folio_6) ? $folio_6 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_6) && $debit_rs_6 != 0) { ?>
                            <td><?php echo number_format($debit_rs_6); ?></td>
                        <?php } elseif (isset($debit_rs_6) && $debit_rs_6 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_6 = isset($debit_ps_6) ? $debit_ps_6 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_6) && $credit_rs_6 != 0) { ?>
                            <td><?php echo number_format($credit_rs_6); ?></td>
                        <?php } elseif (isset($credit_rs_6) && $credit_rs_6 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_6 = isset($credit_ps_6) ? $credit_ps_6 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_7[0] = isset($account_code_7[0]) ? $account_code_7[0] : ''; ?></td>
                        <td><?php echo $account_code_7[1] = isset($account_code_7[1]) ? $account_code_7[1] : ''; ?></td>
                        <td><?php echo $account_code_7[2] = isset($account_code_7[2]) ? $account_code_7[2] : ''; ?></td>
                        <td><?php echo $account_code_7[3] = isset($account_code_7[3]) ? $account_code_7[3] : ''; ?></td>
                        <td><?php echo $account_code_7[4] = isset($account_code_7[4]) ? $account_code_7[4] : ''; ?></td>
                        <td><?php echo $account_code_7[5] = isset($account_code_7[5]) ? $account_code_7[5] : ''; ?></td>
                        <td><?php echo $account_code_7[6] = isset($account_code_7[6]) ? $account_code_7[6] : null; ?></td>
                        <td><?php echo $account_code_7[7] = isset($account_code_7[7]) ? $account_code_7[7] : null; ?></td>
                        <td class="<?php echo $debit_class_7 = empty($debit_rs_7) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_7 = isset($head_of_account_7) ? $head_of_account_7 : ''; ?>
                        </td>
                        <td><?php echo $folio_7 = isset($folio_7) ? $folio_7 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_7) && $debit_rs_7 != 0) { ?>
                            <td><?php echo number_format($debit_rs_7); ?></td>
                        <?php } elseif (isset($debit_rs_7) && $debit_rs_7 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_7 = isset($debit_ps_7) ? $debit_ps_7 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_7) && $credit_rs_7 != 0) { ?>
                            <td><?php echo number_format($credit_rs_7); ?></td>
                        <?php } elseif (isset($credit_rs_7) && $credit_rs_7 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_7 = isset($credit_ps_7) ? $credit_ps_7 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_8[0] = isset($account_code_8[0]) ? $account_code_8[0] : ''; ?></td>
                        <td><?php echo $account_code_8[1] = isset($account_code_8[1]) ? $account_code_8[1] : ''; ?></td>
                        <td><?php echo $account_code_8[2] = isset($account_code_8[2]) ? $account_code_8[2] : ''; ?></td>
                        <td><?php echo $account_code_8[3] = isset($account_code_8[3]) ? $account_code_8[3] : ''; ?></td>
                        <td><?php echo $account_code_8[4] = isset($account_code_8[4]) ? $account_code_8[4] : ''; ?></td>
                        <td><?php echo $account_code_8[5] = isset($account_code_8[5]) ? $account_code_8[5] : ''; ?></td>
                        <td><?php echo $account_code_8[6] = isset($account_code_8[6]) ? $account_code_8[6] : null; ?></td>
                        <td><?php echo $account_code_8[7] = isset($account_code_8[7]) ? $account_code_8[7] : null; ?></td>
                        <td class="<?php echo $debit_class_8 = empty($debit_rs_8) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_8 = isset($head_of_account_8) ? $head_of_account_8 : ''; ?>
                        </td>
                        <td><?php echo $folio_8 = isset($folio_8) ? $folio_8 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_8) && $debit_rs_8 != 0) { ?>
                            <td><?php echo number_format($debit_rs_8); ?></td>
                        <?php } elseif (isset($debit_rs_8) && $debit_rs_8 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_8 = isset($debit_ps_8) ? $debit_ps_8 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_8) && $credit_rs_8 != 0) { ?>
                            <td><?php echo number_format($credit_rs_8); ?></td>
                        <?php } elseif (isset($credit_rs_8) && $credit_rs_8 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_8 = isset($credit_ps_8) ? $credit_ps_8 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_9[0] = isset($account_code_9[0]) ? $account_code_9[0] : ''; ?></td>
                        <td><?php echo $account_code_9[1] = isset($account_code_9[1]) ? $account_code_9[1] : ''; ?></td>
                        <td><?php echo $account_code_9[2] = isset($account_code_9[2]) ? $account_code_9[2] : ''; ?></td>
                        <td><?php echo $account_code_9[3] = isset($account_code_9[3]) ? $account_code_9[3] : ''; ?></td>
                        <td><?php echo $account_code_9[4] = isset($account_code_9[4]) ? $account_code_9[4] : ''; ?></td>
                        <td><?php echo $account_code_9[5] = isset($account_code_9[5]) ? $account_code_9[5] : ''; ?></td>
                        <td><?php echo $account_code_9[6] = isset($account_code_9[6]) ? $account_code_9[6] : null; ?></td>
                        <td><?php echo $account_code_9[7] = isset($account_code_9[7]) ? $account_code_9[7] : null; ?></td>
                        <td class="<?php echo $debit_class_9 = empty($debit_rs_9) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_9 = isset($head_of_account_9) ? $head_of_account_9 : ''; ?>
                        </td>
                        <td><?php echo $folio_9 = isset($folio_9) ? $folio_9 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_9) && $debit_rs_9 != 0) { ?>
                            <td><?php echo number_format($debit_rs_9); ?></td>
                        <?php } elseif (isset($debit_rs_9) && $debit_rs_9 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_9 = isset($debit_ps_9) ? $debit_ps_9 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_9) && $credit_rs_9 != 0) { ?>
                            <td><?php echo number_format($credit_rs_9); ?></td>
                        <?php } elseif (isset($credit_rs_9) && $credit_rs_9 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_9 = isset($credit_ps_9) ? $credit_ps_9 : ''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $account_code_10[0] = isset($account_code_10[0]) ? $account_code_10[0] : ''; ?></td>
                        <td><?php echo $account_code_10[1] = isset($account_code_10[1]) ? $account_code_10[1] : ''; ?></td>
                        <td><?php echo $account_code_10[2] = isset($account_code_10[2]) ? $account_code_10[2] : ''; ?></td>
                        <td><?php echo $account_code_10[3] = isset($account_code_10[3]) ? $account_code_10[3] : ''; ?></td>
                        <td><?php echo $account_code_10[4] = isset($account_code_10[4]) ? $account_code_10[4] : ''; ?></td>
                        <td><?php echo $account_code_10[5] = isset($account_code_10[5]) ? $account_code_10[5] : ''; ?></td>
                        <td><?php echo $account_code_10[6] = isset($account_code_10[6]) ? $account_code_10[6] : null; ?></td>
                        <td><?php echo $account_code_10[7] = isset($account_code_10[7]) ? $account_code_10[7] : null; ?></td>
                        <td class="<?php echo $debit_class_10 = empty($debit_rs_10) ? 'debit_not_active' : 'debit_active'; ?>">
                            <?php echo $head_of_account_10 = isset($head_of_account_10) ? $head_of_account_10 : ''; ?>
                        </td>
                        <td><?php echo $folio_10 = isset($folio_10) ? $folio_10 : ''; ?></td>

                        <?php
                        if (isset($debit_rs_10) && $debit_rs_10 != 0) { ?>
                            <td><?php echo number_format($debit_rs_10); ?></td>
                        <?php } elseif (isset($debit_rs_10) && $debit_rs_10 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $debit_ps_10 = isset($debit_ps_10) ? $debit_ps_10 : ''; ?></td>

                        <?php
                        if (isset($credit_rs_10) && $credit_rs_10 != 0) { ?>
                            <td><?php echo number_format($credit_rs_10); ?></td>
                        <?php } elseif (isset($credit_rs_10) && $credit_rs_10 == 0) { ?>
                            <td class="empty_val"></td>
                        <?php } ?>

                        <td><?php echo $credit_ps_10 = isset($credit_ps_10) ? $credit_ps_10 : ''; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;">RUPEES</td>
                        <td><?php echo $total_debit_rs = isset($total_debit_rs) ? number_format($total_debit_rs) : ''; ?></td>
                        <td></td>
                        <td><?php echo $total_credit_rs = isset($total_credit_rs) ? number_format($total_credit_rs) : ''; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="14">Amount in Words: <span class="amount_in_words"><?php echo $amount_in_words; ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row widget">
            <table>
                <!-- <thead>
                    <tr>
                        <th>Description</th>
                        <th>Received By</th>
                    </tr>
                </thead> -->
                <tbody>
                    <tr>
                        <td>DEPOSITED IN A/C #: <span class="widget_area"><?php echo $deposited_in_ac = isset($deposited_in_ac) ? $deposited_in_ac : ''; ?></span></td>
                        <td>ACCOUNT TITLE #: <span class="widget_area"><?php echo $account_title = isset($account_title) ? $account_title : ''; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">BANK NAME & BRANCH: <span class="widget_area"><?php echo $bank_name_branch = isset($bank_name_branch) ? $bank_name_branch : ''; ?></span></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td colspan="2">DESCRIPTION: <span class="widget_area"><?php echo $description = isset($description) ? $description : ''; ?></span></td>
                    </tr>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="row footer">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">PREPARED BY</th>
                        <th colspan="2">CHECKED BY</th>
                        <th colspan="2">APPROVED BY</th>
                        <th colspan="2">POSTED BY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Signature</td>
                        <td>Date</td>
                        <td>Signature</td>
                        <td>Date</td>
                        <td>Signature</td>
                        <td>Date</td>
                        <td>Signature</td>
                        <td>Date</td>
                    </tr>
                    <tr>
                        <td rowspan="2"></td>
                        <!--<td rowspan="2"><?php echo $prepared_by_date = isset($prepared_by_date) ? $prepared_by_date : ''; ?></td>-->
                        <td rowspan="2">
                            <span class="date_field"><?php echo $prepared_by_date_d = isset($prepared_by_date_d) ? $prepared_by_date_d : ''; ?></span>
                            <span class="date_seprator">-</span>
                            <span class="date_field"><?php echo $prepared_by_date_m = isset($prepared_by_date_m) ? $prepared_by_date_m : ''; ?></span>
                            <span class="date_seprator">-</span>
                            <span class="date_field"><?php echo $prepared_by_date_y = isset($prepared_by_date_y) ? $prepared_by_date_y : ''; ?></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="jQuery.js"></script>
    <!-- <script type="text/javascript" src="num-to-words.js"></script> -->
    <script src="bootstrap.min.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function(){
            let amount_val = $('.section>table>tbody>tr:nth-child(11)>td:nth-child(10)').text();
            let amount_value = parseInt(amount_val);
            let amount_value_in_words = toWords(amount_value);
            $('.section>table>tbody>tr:nth-child(12)>td>.amount_in_words').html(amount_value_in_words);
        })
    </script> -->
</body>

</html>