<?php

!defined('API_END_POINT') && define('API_END_POINT', 'https://api.copicake.com');
!defined('UPLOAD_TEMP_IMAGE_API_END_POINT') && define('UPLOAD_TEMP_IMAGE_API_END_POINT', API_END_POINT . '/v1/utils/upload-temp-image');
!defined('IMAGE_API_END_POINT') && define('IMAGE_API_END_POINT', API_END_POINT . '/v1/image');
!defined('RETRY_TIMEOUT') && define('RETRY_TIMEOUT', 1000);
!defined('MAX_RETRY_TIMES') && define('MAX_RETRY_TIMES', 10);