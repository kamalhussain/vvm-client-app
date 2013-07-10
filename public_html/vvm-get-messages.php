<?php
header("Content-Type: application/json");

$ret = '
    {
   "Header": null,
   "Body": {
      "encodingStyle": "http://schemas.xmlsoap.org/soap/encoding/",
      "getMessagesResponse": {
         "folderOfInterest": "VMS:Inbox",
         "messageVector": {
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
            "componentVector": [
               {
                  "componentHeader": {
                     "headersVector": [
                        {
                           "name": "Content-type",
                           "value": "text/plain; charset=\"ascii\"; x-skip_comp=\"yes\""
                        },
                        {
                           "name": "Content-Disposition",
                           "value": "inline"
                        },
                        {
                           "name": "Content-Transfer-Encoding",
                           "value": "7BIT"
                        }
                     ]
                  },
                  "content": "Additional information on .lvp audio files can be found at http://www.alcatel-lucent.com/mvp"
               },
               {
                  "componentHeader": {
                     "headersVector": [
                        {
                           "name": "Content-Type",
                           "value": "audio/amr; X-Codec=\"amr\"; X-Duration=\"3\""
                        },
                        {
                           "name": "Content-Disposition",
                           "value": "inline; filename=\"voice.amr\""
                        },
                        {
                           "name": "Content-Description",
                           "value": "Voice File"
                        },
                        {
                           "name": "Content-Transfer-Encoding",
                           "value": "base64"
                        },
                        {
                           "name": "Content-Length",
                           "value": "8300"
                        }
                     ]
                  },
                  "content": "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\r\n"
               }
            ],
            "flagList": [
               "\\Recent",
               "New",
               "QMboxSize",
               "QMsgCount",
               "SenderOnComplex",
               "Voice",
               "\\Seen"
            ]
         },
         "statusResponseSegment": {
            "statusCode": "os-Success"
         },
         "securityResponseSegment": {
            "securityStatusCode": "as-Authenticated",
            "token": "4:4045550000:A:ASGCMS1:ms02:WSSOAP:33367"
         }
      }
   }
}
';
echo $ret;
?>
