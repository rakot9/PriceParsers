<?php

Yii::setAlias('@console_runtime_logs', realpath(dirname(__FILE__).'/../../'));

return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

    'Log' =>[
        'save_path' => Yii::getAlias('@console_runtime_logs') . '/console/runtime/logs',
    ]
];
