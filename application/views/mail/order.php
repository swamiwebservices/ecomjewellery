<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $DOMAINNAME?></title>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,300italic);

    body,
    #bodyTable,
    #bodyCell {
      height: 100% !important;
      margin: 0;
      padding: 0;
      width: 100% !important;
    }

    table {
      border-collapse: collapse;
    }

    img,
    a img {
      border: 0;
      outline: none;
      text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    p {
      margin: 1em 0;
      padding: 0;
    }

    a {
      word-wrap: break-word;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    #outlook a {
      padding: 0;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    body,
    table,
    td,
    p,
    a,
    li,
    blockquote {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    #bodyCell {
      padding: 20px;
    }

    .themezyImage {
      vertical-align: bottom;
    }

    .themezyTextContent img {
      height: auto !important;
    }

    body,
    #bodyTable {
      background-color: #05535A;
    }

    #bodyCell {
      border-top: 0;
    }

    #templateContainer {
      border: 0;
    }

    h1 {
      color: #ffffff !important;
      display: block;
      font-family: Arial, Helvetica;
      font-size: 40px;
      font-style: normal;
      font-weight: normal;
      line-height: 100%;
      letter-spacing: normal;
      margin: 0;
      text-align: center;
    }

    h2 {
      color: #78777d !important;
      display: block;
      font-family: Arial, Helvetica;
      font-size: 30px;
      font-style: normal;
      font-weight: normal;
      line-height: 100%;
      letter-spacing: normal;
      margin: 0;
      text-align: center;
    }

    h3 {
      color: #78777d !important;
      display: block;
      font-family: Arial, Helvetica;
      font-size: 18px;
      font-style: normal;
      font-weight: normal;
      line-height: 125%;
      letter-spacing: normal;
      margin: 0;
      text-align: center;
    }

    h4 {
      color: #78777d !important;
      display: block;
      font-family: Arial, Helvetica;
      font-size: 16px;
      font-style: normal;
      font-weight: bold;
      line-height: 125%;
      letter-spacing: normal;
      margin: 0;
      text-align: left;
    }

    h1,
    h2 {
      font-family: 'Roboto', Arial, Helvetica;
      font-weight: 300;
    }

    #templatePreheader {
      background-color: #fdc101;
      border-top: 0;
      border-bottom: 0;
    }

    .preheaderContainer .themezyTextContent,
    .preheaderContainer .themezyTextContent p {
      color: #606060;
      font-family: Arial, Helvetica;
      font-size: 11px;
      line-height: 125%;
      text-align: left;
    }

    .preheaderContainer .themezyTextContent a {
      color: #606060;
      font-weight: normal;
      text-decoration: underline;
    }

    #templateHeader {
      background-color: #05535A;
      border-top: 0;
      border-bottom: 0;
    }

    .headerContainer .themezyTextContent,
    .headerContainer .themezyTextContent p {
      color: #606060;
      font-family: Arial, Helvetica;
      font-size: 15px;
      line-height: 150%;
      text-align: left;
    }

    .headerContainer .themezyTextContent a {
      color: #6DC6DD;
      font-weight: normal;
      text-decoration: underline;
    }

    #templateBody {
      background-color: #ffffff;
      border-top: 0;
      border-bottom: 0;
    }

    .bodyContainer .themezyTextContent,
    .bodyContainer .themezyTextContent p {
      color: #606060;
      font-family: Arial, Helvetica;
      font-size: 15px;
      line-height: 150%;
      text-align: left;
    }

    .bodyContainer .themezyTextContent a {
      color: #60c1ae;
      font-weight: normal;
      text-decoration: none;
    }

    #templateFooter {
      background-color: #fdc101;
      border-top: 0;
      border-bottom: 0;
    }

    .footerContainer .themezyTextContent,
    .footerContainer .themezyTextContent p {
      color: #ffffff;
      font-family: Arial, Helvetica;
      font-size: 11px;
      line-height: 150%;
      text-align: center;
    }

    .footerContainer .themezyTextContent a {
      color: #ffffff;
      font-weight: normal;
      text-decoration: underline;
    }

    @media only screen and (max-width: 480px) {

      body,
      table,
      td,
      p,
      a,
      li,
      blockquote {
        -webkit-text-size-adjust: none !important;
      }

      body {
        width: 100% !important;
        min-width: 100% !important;
      }

      td[id=bodyCell] {
        padding: 10px !important;
      }

      table[class=themezyTextContentContainer] {
        width: 100% !important;
      }

      table[class=themezyBoxedTextContentContainer] {
        width: 100% !important;
      }

      table[class=mcpreview-image-uploader] {
        width: 100% !important;
        display: none !important;
      }

      img[class=themezyImage] {
        width: 100% !important;
      }

      table[class=themezyImageGroupContentContainer] {
        width: 100% !important;
      }

      td[class=themezyImageGroupContent] {
        padding: 9px !important;
      }

      td[class=themezyImageGroupBlockInner] {
        padding-bottom: 0 !important;
        padding-top: 0 !important;
      }

      tbody[class=themezyImageGroupBlockOuter] {
        padding-bottom: 9px !important;
        padding-top: 9px !important;
      }

      table[class=themezyCaptionTopContent],
      table[class=themezyCaptionBottomContent] {
        width: 100% !important;
      }

      table[class=themezyCaptionLeftTextContentContainer],
      table[class=themezyCaptionRightTextContentContainer],
      table[class=themezyCaptionLeftImageContentContainer],
      table[class=themezyCaptionRightImageContentContainer],
      table[class=themezyImageCardLeftTextContentContainer],
      table[class=themezyImageCardRightTextContentContainer] {
        width: 100% !important;
      }

      td[class=themezyImageCardLeftImageContent],
      td[class=themezyImageCardRightImageContent] {
        padding-right: 18px !important;
        padding-left: 18px !important;
        padding-bottom: 0 !important;
      }

      td[class=themezyImageCardBottomImageContent] {
        padding-bottom: 9px !important;
      }

      td[class=themezyImageCardTopImageContent] {
        padding-top: 18px !important;
      }

      td[class=themezyImageCardLeftImageContent],
      td[class=themezyImageCardRightImageContent] {
        padding-right: 18px !important;
        padding-left: 18px !important;
        padding-bottom: 0 !important;
      }

      td[class=themezyImageCardBottomImageContent] {
        padding-bottom: 9px !important;
      }

      td[class=themezyImageCardTopImageContent] {
        padding-top: 18px !important;
      }

      table[class=themezyCaptionLeftContentOuter] td[class=themezyTextContent],
      table[class=themezyCaptionRightContentOuter] td[class=themezyTextContent] {
        padding-top: 9px !important;
      }

      td[class=themezyCaptionBlockInner] table[class=themezyCaptionTopContent]:last-child td[class=themezyTextContent] {
        padding-top: 18px !important;
      }

      td[class=themezyBoxedTextContentColumn] {
        padding-left: 18px !important;
        padding-right: 18px !important;
      }

      td[class=themezyTextContent] {
        padding-right: 18px !important;
        padding-left: 18px !important;
      }

      table[id=templateContainer],
      table[id=templatePreheader],
      table[id=templateHeader],
      table[id=templateBody],
      table[id=templateFooter] {
        max-width: 600px !important;
        width: 100% !important;
      }

      h1 {
        font-size: 24px !important;
        line-height: 125% !important;
      }

      h2 {
        font-size: 20px !important;
        line-height: 125% !important;
      }

      h3 {
        font-size: 18px !important;
        line-height: 125% !important;
      }

      h4 {
        font-size: 16px !important;
        line-height: 125% !important;
      }

      table[class=themezyBoxedTextContentContainer] td[class=themezyTextContent],
      td[class=themezyBoxedTextContentContainer] td[class=themezyTextContent] p {
        font-size: 18px !important;
        line-height: 125% !important;
      }

      table[id=templatePreheader] {
        display: block !important;
      }

      td[class=preheaderContainer] td[class=themezyTextContent],
      td[class=preheaderContainer] td[class=themezyTextContent] p {
        font-size: 14px !important;
        line-height: 115% !important;
        text-align: center !important;
      }

      td[class=headerContainer] td[class=themezyTextContent],
      td[class=headerContainer] td[class=themezyTextContent] p {
        font-size: 18px !important;
        line-height: 125% !important;
      }

      td[class=bodyContainer] td[class=themezyTextContent],
      td[class=bodyContainer] td[class=themezyTextContent] p {
        font-size: 18px !important;
        line-height: 125% !important;
      }

      td[class=footerContainer] td[class=themezyTextContent],
      td[class=footerContainer] td[class=themezyTextContent] p {
        font-size: 14px !important;
        line-height: 115% !important;
      }

      td[class=footerContainer] a[class=utilityLink] {
        display: block !important;
      }
    }
  </style>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
  <center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
      <tr>
        <td align="center" valign="top" id="bodyCell">
          <!-- BEGIN TEMPLATE // -->

          <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
            <tr>
              <td align="center" valign="top">
                <!-- BEGIN HEADER // -->

                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                  <tr>
                    <td valign="top" class="headerContainer">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="themezyImageBlock">
                        <tbody class="themezyImageBlockOuter">
                          <tr>
                            <td valign="top" style="padding:9px" class="themezyImageBlockInner">
                              <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0"
                                class="themezyImageContentContainer">
                                <tbody>
                                  <tr>
                                    <td class="themezyImageContent" valign="top"
                                      style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                      <a href="<?php echo $HTTP_DOMAIN_URL?>"><img align="center" alt=""
                                        src="<?php echo $LOGO_URL?>" width="80" height="80"
                                        style="max-width:80px; padding-bottom: 0; display: inline !important; vertical-align: bottom;"
                                        class="themezyImage"></a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>




                    </td>
                  </tr>
                </table>

                <!-- // END HEADER -->
              </td>
            </tr>
            <tr>
              <td align="center" valign="top">
                <!-- BEGIN BODY // -->

                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody"
                  style="border-radius: 5px 5px 0 0">
                  <tr>
                    <td valign="top" class="bodyContainer">

                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="themezyDividerBlock">
                        <tbody class="themezyDividerBlockOuter">
                          <tr>
                            <td class="themezyDividerBlockInner" style="padding: 30px 18px 0px;">
                              <table class="themezyDividerContent" border="0" cellpadding="0" cellspacing="0"
                                width="100%">
                                <tbody>
                                  <tr>
                                    <td><span></span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="themezyTextBlock">
                        <tbody class="themezyTextBlockOuter">
                          <tr>
                            <td valign="top" class="themezyTextBlockInner">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" width="600"
                                class="themezyTextContentContainer">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="themezyTextContent"
                                      style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                                      <h2><?php echo $TOP_SUBJECT; ?></h2>
                                      <p style="margin-top: 0px; margin-bottom: 20px;"><?php echo $text_greeting; ?></p>
  <?php if ($customer_id) { ?>
  <p style="margin-top: 0px; margin-bottom: 20px;"><?php echo $text_link; ?></p>
  <p style="margin-top: 0px; margin-bottom: 20px;"><a href="<?php echo $link; ?>"><?php echo $link; ?></a></p>
  <?php } ?>
  <?php if ($download) { ?>
  <p style="margin-top: 0px; margin-bottom: 20px;"><?php echo $text_download; ?></p>
  <p style="margin-top: 0px; margin-bottom: 20px;"><a href="<?php echo $download; ?>"><?php echo $download; ?></a></p>
  <?php } ?>
  <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2"><?php echo $text_order_detail; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b><?php echo $text_order_id; ?></b> #<?php echo $invoice_no; ?><br />
          <b><?php echo $text_date_added; ?></b> <?php echo $date_added; ?><br />
          <b><?php echo $text_payment_method; ?></b> <?php echo $payment_method; ?><br />
          <?php if ($shipping_method) { ?>
          <b><?php echo $text_shipping_method; ?></b> <?php echo $shipping_method; ?>
          <?php } ?></td>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b><?php echo $text_email; ?></b> <?php echo $email; ?><br />
          <b><?php echo $text_telephone; ?></b> <?php echo $telephone; ?><br />
          <b><?php echo $text_ip; ?></b> <?php echo $ip; ?><br />
          <b><?php echo $text_order_status; ?></b> <?php echo $order_status; ?><br /></td>
      </tr>
    </tbody>
  </table>
  <?php if ($comment) { ?>
  <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_instruction; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $comment; ?></td>
      </tr>
    </tbody>
  </table>
  <?php } ?>
  <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_payment_address; ?></td>
        <?php if ($shipping_address) { ?>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_shipping_address; ?></td>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $payment_address; ?></td>
        <?php if ($shipping_address) { ?>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $shipping_address; ?></td>
        <?php } ?>
      </tr>
    </tbody>
  </table>
  <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_product; ?></td>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_model; ?></td>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;"><?php echo $text_quantity; ?></td>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;"><?php echo $text_price; ?></td>
        <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;"><?php echo $text_total; ?></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) { ?>
      <tr>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $product['name']; ?>
          </td>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $product['model']; ?></td>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><?php echo $product['quantity']; ?></td>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><?php echo $product['price']; ?></td>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><?php echo $product['total']; ?></td>
      </tr>
      <?php } ?>
      
    </tbody>
    <tfoot>
      <?php foreach ($totals as $total) { ?>
      <tr>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;" colspan="4"><b><?php echo $total['title']; ?>:</b></td>
        <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><?php echo $total['text']; ?></td>
      </tr>
      <?php } ?>
    </tfoot>
  </table>
  <p style="margin-top: 0px; margin-bottom: 20px;"><?php echo $text_footer; ?></p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>




                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="themezyTextBlock">
                        <tbody class="themezyTextBlockOuter">
                          <tr>
                            <td valign="top" class="themezyTextBlockInner">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" width="600"
                                class="themezyTextContentContainer">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="themezyTextContent"
                                      style="padding-top:1px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                                      <div style="font-size:12px"><b>This is a one-time, automated
                                        message. If you want to respond, you can do so via our <a
                                          href="<?php echo $CONTACTUS_URL?>" target="_blank">contact
                                          page</a>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </td>
                  </tr>
                </table>

                <!-- // END BODY -->
              </td>
            </tr>
            
            <tr>
              <td align="center" valign="top">
                <!-- BEGIN FOOTER // -->

                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateFooter">
                  <tr>
                    <td valign="top" class="footerContainer" style="padding-bottom:9px;">

                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="themezyTextBlock">
                        <tbody class="themezyTextBlockOuter">
                          <tr>
                            <td valign="top" class="themezyTextBlockInner">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" width="600"
                                class="themezyTextContentContainer">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="themezyTextContent"
                                      style="font-size: 14px; padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                                      <?php echo $DOMAIN_ADDRESS_FOOTER?>
                                      
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>

                <!-- // END FOOTER -->
              </td>
            </tr>
          </table>

          <!-- // END TEMPLATE -->
        </td>
      </tr>
    </table>
  </center>
</body>

</html>