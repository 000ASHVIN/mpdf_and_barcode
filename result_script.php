<?php
  require_once('vendor/autoload.php');
  use Stichoza\GoogleTranslate\GoogleTranslate;
  $generator = new Picqer\Barcode\BarcodeGeneratorPNG();

  $ar = new GoogleTranslate();
  $ar->setSource('en');
  $ar->setSource();
  $ar->setTarget('ar');
  $formData = array(
    'Source' => "RUH/01",
    'Destination' => "JED/02",
    'Service' => "SLA01/135",
    'COD' => "5680.00 SAR",
    'Date' => "2022-09-01",
    'Wight' => "3.5",
    "To" => array(
      'Name' => "Ahmed Mohamed",
      'Phone' => "966500500500",
      'Address' => "120500 , 2993848 City , Stree"
    ),
    "From" => array(
      'Name' => "Appel Co .",
      'Phone' => "966500500500",
      'Address' => "120500 , 2993848 City , Stree"
    ),
    "Content" => "Apple iphone 14 with Power supply",
    "REMARK" => "This should delivered before 4.0 PM",
    "barcode" => "123456789123"
  );


$html = '
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>pdf</title>
    <meta name="author" content="HP-TMX" />
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
        text-indent: 0;
      }
      body { font-family: DejaVu Sans, sans-serif; }
      .s1 {
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8pt;
      }

      .s2 {
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 10pt;
      }

      .s3 {
        color: black;
        font-family: Tahoma, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8pt;
      }

      table,
      tbody {
        vertical-align: top;
        overflow: visible;
      }
      table tr td {
        padding: 20px 5px;
      }
      .barcode {
        width: 140.16px;
        height: 97.92px;
      }
      .reference {
        position: relative;
      }
      .reference p {
        position: fixed;
        top: 0;
        transform: rotate(270deg);
        
      }
    </style>
  </head>
  <body style="margin: 0; padding: 0;">

    <table style="border-collapse:collapse;" cellspacing="0" id="formHtml">
      <tr style="height:45pt">
        <td style="width:30%;border:1px solid;text-align: center;vertical-align: middle;" colspan="2">
            <img style="width: 125px;" src="'.__DIR__.'/Tamex-Logo-English.png" />
        </td>
        <td style="width:70%;border:1px solid;text-align: center;vertical-align: middle;" colspan="3">
          <br>
          <img alt="barcode" class="barcode" src="data:image/png;base64,' . base64_encode($generator->getBarcode(@$formData['barcode'], $generator::TYPE_CODE_128_A,1,50)) . '"/>
          <div style="font-family: ocrb;">'.@$formData['barcode'].'</div>
        </td>
      </tr>
      <tr style="height:41pt">
        <td style="width:59pt;border:1px solid;">
          <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Source</p>
          <p class="s2" style="padding-top: 3pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">'. $formData['Source'] .'</p>
        </td>
        <td style="width:61pt;border:1px solid;">
          <p class="s1" style="padding-left: 2pt;padding-right: 19pt;text-indent: 0pt;line-height: 10pt;text-align: center;">Destination</p>
          <p class="s2" style="padding-top: 3pt;padding-left: 2pt;padding-right: 17pt;text-indent: 0pt;text-align: center;">'.$formData['Destination'] .'</p>
        </td>
        <td style="width:64pt;border:1px solid;">
          <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Service</p>
          <p class="s2" style="padding-top: 3pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">'.$formData['Service'].'</p>
        </td>
        <td style="width:88pt;border:1px solid;" colspan="2">
          <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">COD</p>
          <p class="s2" style="padding-top: 5pt;padding-left: 17pt;text-indent: 0pt;text-align: left;">'.$formData['COD'].'</p>
        </td>
      </tr>
      <tr style="height:13pt">
        <td style="width:66pt;border: 1px solid;border-right: 0px;">
          <p class="s1" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Date: '.$formData['Date'].'</p>
        </td>
        <td style="width:54pt;border: 1px solid;border-left: 0px;" colspan="4">
          <p class="s1" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Wight: '.$formData['Wight'].'</p>
        </td>
      </tr>
      <tr style="height:104pt">
        <td style="width:272pt;border: 1px solid;" colspan="5">
          <p class="s1" style="padding-top: 4pt;padding-left: 4pt;text-indent: 0pt;line-height: 9pt;text-align: left;">TO</p>
          <p class="s1" style="padding-left: 9pt;text-indent: 0pt;line-height: 10pt;text-align: left;">NAME : '. $formData['To']['Name'] .' - <span class="s3">'.$ar->translate(@$formData['To']['Name']).'</span>
          </p>
          <p class="s1" style="padding-top: 4pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">Phone : '. $formData['To']['Phone'] .'</p>
          <p style="text-indent: 0pt;text-align: left;">
            <br />
          </p>
          <p class="s1" style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Address : '.$formData['To']['Address'].'</p>
        </td>
      </tr>
      <tr style="height:114pt">
        <td style="width:218pt;border: 1px solid;" colspan="4">
          <p class="s1" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">FROM</p>
          <p class="s1" style="padding-top: 3pt;padding-left: 8pt;padding-right: 127pt;text-indent: 0pt;line-height: 136%;text-align: left;">NAME : '.$formData['From']['Name'].' Phone : '.$formData['From']['Phone'].'</p>
          <p class="s1" style="padding-top: 3pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">Address : '. $formData['From']['Address'] .'</p>
        </td>
        <td style="width:54pt;height: 250px;border: 1px solid;text-align: center;vertical-align: middle;" colspan="1">
            <span class="reference" style="position: relative;">
              <img alt="barcode" class="barcode" style="transform: rotate(270deg);" src="data:image/png;base64,' . base64_encode($generator->getBarcode(@$formData['barcode'], $generator::TYPE_CODE_128_C,2,80)) . '"/>
              <p style="font-family: ocrb; position: absolute; bottom: 450px; right: 70px; rotate: -90;">'.@$formData['barcode'].'</p>
            </span>        
        </td>
      </tr>
      <tr style="height:96pt">
        <td style="width:272pt;border: 1px solid;" colspan="5">
          <p class="s1" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Content</p>
          <p style="text-indent: 0pt;text-align: left;">
            <br />
          </p>
          <p class="s1" style="padding-left: 16pt;text-indent: 0pt;text-align: left;">'.$formData['Content'].'</p>
          <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: left;">'.$ar->translate(@$formData['Content']).'</p>
          <p style="text-indent: 0pt;text-align: left;">
            <br />
          </p>
          <p class="s1" style="padding-left: 4pt;text-indent: 0pt;text-align: left;">REMARK</p>
          <p class="s1" style="padding-left: 16pt;text-indent: 0pt;text-align: left;">'.$formData['REMARK'].' <span class="s3">'.$ar->translate(@$formData['REMARK']).'</span>
          </p>
        </td>
      </tr>
    </table>
  </body>
  
</html>';

// mdpf
$mpdf = new \Mpdf\Mpdf([
  'mode' => 'utf-8',
  'format' => 'A4-P',
  'orientation' => 'P'
]);
$mpdf->WriteHTML($html);
$mpdf->Output();