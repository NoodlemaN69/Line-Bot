<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('A1QLjBBZRvN+FkRQA6yUoRSltT1tei+GjhPHh7GOqxomE3PdbwQDAvZeFENg/q858QCStUDlqvWhfqKzKfdAPd/1CoWgVQJ03xCvRUuFU2z4sExz43grRW4JhEuCZk1mq32nHXA8/l+Hy8wvL+67UQdB04t89/1O/w1cDnyilFU=') ?: '<your channel token>',
                    'channelSecret' => getenv('c8c7b0df03b72f511abbb212e1dc2a00') ?: '<your channel secret>',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
