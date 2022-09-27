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
      @page { sheet-size: 100mm 150mm; }
      * {
        margin: 0;
        padding: 0;
        text-indent: 0;
      }
      body { font-family: DejaVu Sans, sans-serif; }
      .s1 {
        color: black;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10px;
      }

      .s2 {
        color: black;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 11px;
        margin-top: 10px;
      }

      .s3 {
        color: black;
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
      table tr > td {
        padding: 2px 1px;
      }
      .reference {
        position: relative;
      }
      .reference p {
        transform: rotate(270deg);
      }
      .barcode.ref {
        width: 100px;
        transform: rotate(270deg);
      }
      .barcode_number {
        font-size: 10px;
        margin-top: 0;
      }
      .source_td {
        height: 30px;
        margin-bottom: 10px;
      }
      .source_td p {
        padding-top: 0;
        text-indent: 0pt;
        text-align: left;
        margin-top: 0 !important;
        padding-bottom: 10px;
      }
    </style>
  </head>
  <body style="margin: 0; padding: 0;">

    <table style="border-collapse:collapse;" cellspacing="0" id="formHtml">
      <tr style="height:45pt">
        <td style="width:40%;border:1px solid;text-align: center;vertical-align: middle;" colspan="2">
            <img style="width: 125px;" src="'.__DIR__.'/Tamex-Logo-English.png" />
        </td>
        <td style="width:60%;border:1px solid;text-align: center;vertical-align: middle;padding-top: 5px;" colspan="3">
          <barcode code="'.@$formData['barcode'].'" type="C128C" text="0"/>
          <div class="barcode_number">'.@$formData['barcode'].'</div>
        </td>
      </tr>
      <tr style="height:41pt" class="source">
        <td style="width:59pt;border:1px solid;">
          <table>
            <tr>
              <td>
                <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Source</p>
              </td>
            </tr>
            <tr>
              <td class="source_td">
                <p class="s2" style="">'. $formData['Source'] .'</p>
              </td>
            </tr>
          </table>
        </td>
        <td style="width:61pt;border:1px solid;">
          <table>
            <tr>
              <td>
                <p class="s1" style="padding-left: 2pt;padding-right: 19pt;text-indent: 0pt;line-height: 10pt;text-align: center;">Destination</p>
              </td>
            </tr>
            <tr>
              <td class="source_td">
                <p class="s2" style="padding-top: 3pt;padding-left: 2pt;padding-right: 17pt;text-indent: 0pt;text-align: center;">'.$formData['Destination'] .'</p>
              </td>
            </tr>
          </table>
          
          
        </td>
        <td style="border:1px solid; padding: 0;" colspan="3">
          <table style="padding: 0; border-collapse: collapse">
            <tr>
              <td style="border-right: 1px solid; padding: 0; height: 59px;">
                <table >
                  <tr>
                    <td>
                      
                      <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Service</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="source_td">
                      <p class="s2" style="padding-top: 3pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">'.$formData['Service'].'</p>
                    </td>
                  </tr>
                </table>
              </td>
              <td style="border-left: 1px solid; padding: 0;">
                <table >
                  <tr>
                    <td>
                      <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">COD</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="source_td">
                      <p class="s2" style="padding-top: 5pt;padding-left: 17pt;text-indent: 0pt;text-align: left;">'.$formData['COD'].'</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          
          
        </td>
      </tr>
      <tr style="height:13pt">
        <td style="width:66pt;border: 1px solid;" colspan="5">
          <table>
            <tr>
              <td style="width: 100px;">
                <span class="s1" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Date: '.$formData['Date'].'</span>
              </td>
              <td>
                <span class="s1" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Wight: '.$formData['Wight'].'</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr style="height:104pt">
        <td style="width:272pt;height: 120px;border: 1px solid;" colspan="5">
          <table>
            <tr>
              <td>
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
          </table>
        </td>
      </tr>
      <tr style="height:114pt">
        <td style="width:218pt;height: 168px; border: 1px solid;" colspan="4">
          <table>
              <tr>
                <td>
                  <p class="s1" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">FROM</p>
                  <p class="s1" style="padding-top: 3pt;padding-left: 8pt;padding-right: 127pt;text-indent: 0pt;line-height: 136%;text-align: left;">NAME : '.$formData['From']['Name'].' Phone : '.$formData['From']['Phone'].'</p>
                  <p class="s1" style="padding-top: 3pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">Address : '. $formData['From']['Address'] .'</p>
                  </td>
            </tr>
          </table>
        </td>
        <td style="width:54pt;border: 1px solid;text-align: center;vertical-align: middle;" colspan="1">
            <span class="reference" style="position: relative;">
              <div style="position: absolute; bottom: 140px; right: 8px; rotate: -90; text-align: center;">
                <barcode code="'.@$formData['barcode'].'" type="C128A" text="0" size="0.6" height="2.2" />
                <p class="barcode_number">'.@$formData['barcode'].'</p>
              </div>
              
            </span>        
        </td>
      </tr>
      <tr style="height:96pt">
        <td style="width:272pt;height: 130px;border: 1px solid;" colspan="5">
          <table>
            <tr>
              <td>
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
        </td>
      </tr>
    </table>
  </body>
  
</html>';

// echo $html;
// die;

// mdpf
$mpdf = new \Mpdf\Mpdf([
  'mode' => 'utf-8',
  'format' => 'A4-P',
  'orientation' => 'P',
  'margin_left' => 1,
  'margin_right' => 1,
  'margin_top' => 1,
  'margin_bottom' => 1,
  'forcePortraitMargins' => true
  // 'margin_header' => 0,
  // 'margin_footer' => 0
]);
$mpdf->WriteHTML($html);
$mpdf->Output();