<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

$message = '
<div marginwidth="0" marginheight="0">
  <div style="background-color:#f7f7f7;margin:0;padding:70px 0 70px 0;width:100%">
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
      <tbody>
        <tr>
          <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px!important">
              <tbody>
                <tr>
                  <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#aaa;border-radius:3px 3px 0 0!important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif">
                      <tbody>
                        <tr>
                          <td style="padding:36px 48px;display:block">
                            <h1 style="color:#ffffff;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left">Password reset instructions</h1>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="600">
                      <tbody>
                        <tr>
                          <td valign="top" style="background-color:#ffffff">

                            <table border="0" cellpadding="20" cellspacing="0" width="100%">
                              <tbody>
                                <tr>
                                  <td valign="top" style="padding:48px 48px 0">
                                    <div style="color:#636363;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">
                                      <p style="margin:0 0 16px">Someone requested that the password be reset for the following
                                      account:</p>
                                      <p style="margin:0 0 16px">Username: '. $user_login .'</p>
                                      <p style="margin:0 0 16px">If this was a mistake, just ignore this email and nothing will
                                      happen.</p>
                                      <p style="margin:0 0 16px">To reset your password, visit the following address:</p>
                                      <p style="margin:0 0 16px">
                                        <a href="'. network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') .'" style="color:#ff0000;font-weight:normal;text-decoration:underline" target="_blank">Click here to reset your password</a>
                                      </p>
                                      <p style="margin:0 0 16px"></p>
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
                <tr>
                  <td align="center" valign="top">
                    <table border="0" cellpadding="10" cellspacing="0" width="600">
                      <tbody>
                        <tr>
                          <td valign="top" style="padding:0">
                            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                              <tbody>
                                <tr>
                                  <td colspan="2" valign="middle" style="padding:0 48px 48px 48px;border:0;color:#ff6666;font-family:Arial;font-size:12px;line-height:125%;text-align:center">
                                    <p>SDI | Security Devices International</p>
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
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>    
</div>';

return $message;