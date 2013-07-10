<?php
header("Content-Type: application/json");

$ret = '{
  "Header": null,
  "Body": {
    "encodingStyle": "http://schemas.xmlsoap.org/soap/encoding/",
    "getMessageHeadersResponse": {
      "folderOfInterest": "VMS:Inbox",
      "messageHeadersVector": [
        {
          "messageHeader": {
            "messageUID": "90",
            "headersVector": [
              {
                "name": "Received",
                "value": "from ts03 (ts03 [192.168.228.52]) by ms02; Mon, 10 Jun 2013 11:44:04 -0400"
              },
              {
                "name": "Mail-From",
                "value": "non-mail-user@imstrial.bellsouth.net"
              },
              {
                "name": "From",
                "value": "\"6308688401\" <non-mail-user@imstrial.bellsouth.net>"
              },
              {
                "name": "x-cli_number",
                "value": "6308688401"
              },
              {
                "name": "To",
                "value": "\"4045550000\" <4045550000@imstrial.bellsouth.net>"
              },
              {
                "name": "Message-ID",
                "value": "ts03_1370879044_100_AnyPath"
              },
              {
                "name": "X-Priority",
                "value": "3"
              },
              {
                "name": "x-restrictions",
                "value": "6"
              },
              {
                "name": "x-cdr-session-id",
                "value": "192.168.229.2.00003002101370878985"
              },
              {
                "name": "X-MODE-ORIG",
                "value": "TUI"
              },
              {
                "name": "X-DELIVERY-TYPE",
                "value": "CA"
              },
              {
                "name": "X-INCOMING-PORT",
                "value": "trusted"
              },
              {
                "name": "X-API_TM",
                "value": "4 44 11 10 5 113 1 160 1"
              },
              {
                "name": "Date",
                "value": "Mon, 10 Jun 2013 11:44:04 -0400"
              },
              {
                "name": "x-mc_orig_machine_route",
                "value": "COMPLEX"
              },
              {
                "name": "x-access_time",
                "value": "0000000000"
              },
              {
                "name": "x-anypath-expires",
                "value": "Wed, 10 Jul 2013 11:44:04 -0400"
              },
              {
                "name": "x-callback_number",
                "value": null
              },
              {
                "name": "x-mc_message_type",
                "value": "30"
              },
              {
                "name": "Subject",
                "value": "=?iso-8859-1?Q?call_from_6308688401?="
              },
              {
                "name": "x-generated_subject",
                "value": null
              },
              {
                "name": "Mime-Version",
                "value": "1.0 (Voice 2.0)"
              },
              {
                "name": "Content-Type",
                "value": "multipart/mixed; Boundary=\"============>>AnyPath 1370879044<<============\""
              }
            ]
          },
          "componentHeaderVector": [
            {
              "headersVector": [
                {
                  "name": "Content-Type",
                  "value": "TEXT/PLAIN; CHARSET=\"ascii\"; X-SKIP_COMP=\"yes\""
                },
                {
                  "name": "Content-ID",
                  "value": null
                },
                {
                  "name": "Content-Description",
                  "value": null
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "7BIT"
                },
                {
                  "name": "Content-Length",
                  "value": "92"
                },
                {
                  "name": "Content-Lines",
                  "value": "0"
                },
                {
                  "name": "Content-MD5",
                  "value": null
                },
                {
                  "name": "Content-Disposition",
                  "value": "INLINE"
                },
                {
                  "name": "Content-Language",
                  "value": "NIL"
                }
              ]
            },
            {
              "headersVector": [
                {
                  "name": "Content-Type",
                  "value": "audio/qcelp; X-CODEC=\"qcp\"; X-DURATION=\"3\""
                },
                {
                  "name": "Content-ID",
                  "value": null
                },
                {
                  "name": "Content-Description",
                  "value": "Voice File"
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "BASE64"
                },
                {
                  "name": "Content-Length",
                  "value": "10536"
                },
                {
                  "name": "Content-MD5",
                  "value": null
                },
                {
                  "name": "Content-Disposition",
                  "value": "inline; filename=\"voice.qcp\""
                },
                {
                  "name": "Content-Language",
                  "value": "NIL"
                }
              ]
            },
            {
              "headersVector": [
                {
                  "name": "Content-ID",
                  "value": "<TEXT>"
                },
                {
                  "name": "Content-Type",
                  "value": "text/plain; charset=\"ascii\""
                },
                {
                  "name": "Content-Description",
                  "value": "Text File"
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "7bit"
                },
                {
                  "name": "Content-Disposition",
                  "value": "inline; filename=\"example.txt\""
                },
                {
                  "name": "Content-Length",
                  "value": "38"
                }
              ]
            },
            {
              "headersVector": [
                {
                  "name": "Content-ID",
                  "value": "<IMAGE>"
                },
                {
                  "name": "Content-Type",
                  "value": "image/bmp"
                },
                {
                  "name": "Content-Description",
                  "value": "Image File"
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "BASE64"
                },
                {
                  "name": "Content-Disposition",
                  "value": "inline; filename=\"lucent.bmp\""
                },
                {
                  "name": "Content-Length",
                  "value": "13170"
                }
              ]
            }
          ],
          "flagList": [
            "Recent",
            "New",
            "QMboxSize",
            "QMsgCount",
            "SenderOnComplex",
            "Voice",
            "Seen"
          ]
        },
        {
          "messageHeader": {
            "messageUID": "91",
            "headersVector": [
              {
                "name": "Received",
                "value": "from ts02 (ts02 [192.168.228.54]) by ms02; Mon, 10 Jun 2013 16:24:59 -0400"
              },
              {
                "name": "Mail-From",
                "value": "non-mail-user@imstrial.bellsouth.net"
              },
              {
                "name": "From",
                "value": "\"6308688401\" <non-mail-user@imstrial.bellsouth.net>"
              },
              {
                "name": "x-cli_number",
                "value": "6308688401"
              },
              {
                "name": "To",
                "value": "\"4045550000\" <4045550000@imstrial.bellsouth.net>"
              },
              {
                "name": "Message-ID",
                "value": "ts02_1370895899_101_AnyPath"
              },
              {
                "name": "X-Priority",
                "value": "3"
              },
              {
                "name": "x-restrictions",
                "value": "6"
              },
              {
                "name": "x-cdr-session-id",
                "value": "192.168.229.2.00002003531370895823"
              },
              {
                "name": "X-MODE-ORIG",
                "value": "TUI"
              },
              {
                "name": "X-DELIVERY-TYPE",
                "value": "CA"
              },
              {
                "name": "X-INCOMING-PORT",
                "value": "trusted"
              },
              {
                "name": "X-API_TM",
                "value": "59 24 16 10 5 113 1 160 1"
              },
              {
                "name": "Date",
                "value": "Mon, 10 Jun 2013 16:24:59 -0400"
              },
              {
                "name": "x-mc_orig_machine_route",
                "value": "COMPLEX"
              },
              {
                "name": "x-access_time",
                "value": "0000000000"
              },
              {
                "name": "x-anypath-expires",
                "value": "Fri, 05 Jul 2013 16:24:59 -0400"
              },
              {
                "name": "x-callback_number",
                "value": null
              },
              {
                "name": "x-mc_message_type",
                "value": "30"
              },
              {
                "name": "Subject",
                "value": "=?iso-8859-1?Q?call_from_6308688401?="
              },
              {
                "name": "x-generated_subject",
                "value": null
              },
              {
                "name": "Mime-Version",
                "value": "1.0 (Voice 2.0)"
              },
              {
                "name": "Content-Type",
                "value": "multipart/mixed; Boundary=\"============>>AnyPath 1370895899<<============\""
              }
            ]
          },
          "componentHeaderVector": [
            {
              "headersVector": [
                {
                  "name": "Content-Type",
                  "value": "TEXT/PLAIN; CHARSET=\"ascii\"; X-SKIP_COMP=\"yes\""
                },
                {
                  "name": "Content-ID",
                  "value": null
                },
                {
                  "name": "Content-Description",
                  "value": null
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "7BIT"
                },
                {
                  "name": "Content-Length",
                  "value": "92"
                },
                {
                  "name": "Content-Lines",
                  "value": "0"
                },
                {
                  "name": "Content-MD5",
                  "value": null
                },
                {
                  "name": "Content-Disposition",
                  "value": "INLINE"
                },
                {
                  "name": "Content-Language",
                  "value": "NIL"
                }
              ]
            },
            {
              "headersVector": [
                {
                  "name": "Content-Type",
                  "value": "audio/qcelp; X-CODEC=\"qcp\"; X-DURATION=\"3\""
                },
                {
                  "name": "Content-ID",
                  "value": null
                },
                {
                  "name": "Content-Description",
                  "value": "Voice File"
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "BASE64"
                },
                {
                  "name": "Content-Length",
                  "value": "9186"
                },
                {
                  "name": "Content-MD5",
                  "value": null
                },
                {
                  "name": "Content-Disposition",
                  "value": "inline; filename=\"voice.qcp\""
                },
                {
                  "name": "Content-Language",
                  "value": "NIL"
                }
              ]
            },
            {
              "headersVector": [
                {
                  "name": "Content-ID",
                  "value": "<TEXT>"
                },
                {
                  "name": "Content-Type",
                  "value": "text/plain; charset=\"ascii\""
                },
                {
                  "name": "Content-Description",
                  "value": "Text File"
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "7bit"
                },
                {
                  "name": "Content-Disposition",
                  "value": "inline; filename=\"example.txt\""
                },
                {
                  "name": "Content-Length",
                  "value": "38"
                }
              ]
            },
            {
              "headersVector": [
                {
                  "name": "Content-ID",
                  "value": "<IMAGE>"
                },
                {
                  "name": "Content-Type",
                  "value": "image/bmp"
                },
                {
                  "name": "Content-Description",
                  "value": "Image File"
                },
                {
                  "name": "Content-Transfer-Encoding",
                  "value": "BASE64"
                },
                {
                  "name": "Content-Disposition",
                  "value": "inline; filename=\"lucent.bmp\""
                },
                {
                  "name": "Content-Length",
                  "value": "13170"
                }
              ]
            }
          ],
          "flagList": [
            "Recent",
            "New",
            "QMboxSize",
            "QMsgCount",
            "SenderOnComplex",
            "Voice"
          ]
        }
      ],
      "securityResponseSegment": {
        "securityStatusCode": "as-Authenticated",
        "token": "4:4045550000:A:ASGCMS1:ms02:WSSOAP:33367"
      },
      "statusResponseSegment": {
        "statusCode": "os-Success"
      }
    }
  }
}';
echo $ret;
?>
