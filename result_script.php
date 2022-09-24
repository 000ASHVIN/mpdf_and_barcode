<?php
  require_once('vendor/autoload.php');
  use Stichoza\GoogleTranslate\GoogleTranslate;
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
      'Name' => "d Ahmed",
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
    "barcode" => "1234567891234"
  );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>file_1664013202869</title>
    <meta name="author" content="HP-TMX" />
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
        text-indent: 0;
      }

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
    </style>
  </head>
  <body style="margin: 0; padding: 0;">

    <table style="border-collapse:collapse;" cellspacing="0" id="formHtml">
      <tr style="height:45pt">
        <td style="width:95pt;border:1px solid;text-align: center;vertical-align: middle;" colspan="2">
            <img style="width: 125px;" src="Tamex-Logo-English.png" />
        </td>
        <td style="width:177px;border:1px solid;text-align: center;vertical-align: middle;" colspan="3">
          <img width="128" height="49" id="barcode" />
        </td>
      </tr>
      <tr style="height:41pt">
        <td style="width:59pt;border:1px solid;">
          <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Source</p>
          <p class="s2" style="padding-top: 3pt;padding-left: 11pt;text-indent: 0pt;text-align: left;"><?php echo @$formData['Source']; ?></p>
        </td>
        <td style="width:61pt;border:1px solid;">
          <p class="s1" style="padding-left: 2pt;padding-right: 19pt;text-indent: 0pt;line-height: 10pt;text-align: center;">Destination</p>
          <p class="s2" style="padding-top: 3pt;padding-left: 2pt;padding-right: 17pt;text-indent: 0pt;text-align: center;"><?php echo @$formData['Destination']; ?></p>
        </td>
        <td style="width:64pt;border:1px solid;">
          <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Service</p>
          <p class="s2" style="padding-top: 3pt;padding-left: 6pt;text-indent: 0pt;text-align: left;"><?php echo @$formData['Service']; ?></p>
        </td>
        <td style="width:88pt;border:1px solid;" colspan="2">
          <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">COD</p>
          <p class="s2" style="padding-top: 5pt;padding-left: 17pt;text-indent: 0pt;text-align: left;"><?php echo @$formData['COD']; ?></p>
        </td>
      </tr>
      <tr style="height:13pt">
        <td style="width:66pt;border: 1px solid;border-right: 0px;">
          <p class="s1" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Date: <?php echo @$formData['Date']; ?></p>
        </td>
        <td style="width:54pt;border: 1px solid;border-left: 0px;" colspan="4">
          <p class="s1" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Wight: <?php echo @$formData['Wight']; ?></p>
        </td>
      </tr>
      <tr style="height:104pt">
        <td style="width:272pt;border: 1px solid;" colspan="5">
          <p class="s1" style="padding-top: 4pt;padding-left: 4pt;text-indent: 0pt;line-height: 9pt;text-align: left;">TO</p>
          <p class="s1" style="padding-left: 9pt;text-indent: 0pt;line-height: 10pt;text-align: left;">NAME : <?php echo @$formData['To']['Name']; ?> - <span class="s3"><?php echo $ar->translate(@$formData['To']['Name']); ?></span>
          </p>
          <p class="s1" style="padding-top: 4pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">Phone : <?php echo @$formData['To']['Phone']; ?></p>
          <p style="text-indent: 0pt;text-align: left;">
            <br />
          </p>
          <p class="s1" style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Address : <?php echo @$formData['To']['Address']; ?></p>
        </td>
      </tr>
      <tr style="height:114pt">
        <td style="width:218pt;border: 1px solid;" colspan="4">
          <p class="s1" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">FROM</p>
          <p class="s1" style="padding-top: 3pt;padding-left: 8pt;padding-right: 127pt;text-indent: 0pt;line-height: 136%;text-align: left;">NAME : <?php echo @$formData['From']['Name']; ?> Phone : <?php echo @$formData['From']['Phone']; ?></p>
          <p class="s1" style="padding-top: 3pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">Address : <?php echo @$formData['From']['Address']; ?></p>
        </td>
        <td style="width:54pt;border: 1px solid;text-align: center;vertical-align: middle;">
          <img id="barcode" style="transform: rotate(270deg);width: 100px;height: 75px;" />
        </td>
      </tr>
      <tr style="height:96pt">
        <td style="width:272pt;border: 1px solid;" colspan="5">
          <p class="s1" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Content</p>
          <p style="text-indent: 0pt;text-align: left;">
            <br />
          </p>
          <p class="s1" style="padding-left: 16pt;text-indent: 0pt;text-align: left;"><?php echo @$formData['Content']; ?></p>
          <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: left;"><?php echo $ar->translate(@$formData['Content']); ?></p>
          <p style="text-indent: 0pt;text-align: left;">
            <br />
          </p>
          <p class="s1" style="padding-left: 4pt;text-indent: 0pt;text-align: left;">REMARK</p>
          <p class="s1" style="padding-left: 16pt;text-indent: 0pt;text-align: left;"><?php echo @$formData['REMARK']; ?> <span class="s3"><?php echo $ar->translate(@$formData['REMARK']); ?></span>
          </p>
        </td>
      </tr>
    </table>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.5/JsBarcode.all.min.js" integrity="sha512-QEAheCz+x/VkKtxeGoDq6nsGyzTx/0LMINTgQjqZ0h3+NjP+bCsPYz3hn0HnBkGmkIFSr7QcEZT+KyEM7lbLPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-lang-js/3.0.0/jquery-lang.min.js" integrity="sha512-1VM6T0qZDOEDi/fO7E7/h7wzZl+vVnta+kzwzzupnEJf6pUmcmiCPXHV9SITE3PErOk3DX/Yl+7/fUqFWCSKHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        const element = document.getElementById('formHtml');
        JsBarcode("#barcode", <?php echo @$formData['barcode']; ?>);
        console.log(element);
        var opt = {
            margin:       0.2,
            filename:     'formHtml.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 3 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        html2pdf(element, opt);
    })
  </script>
</html>