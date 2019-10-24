<?php
$CONFIG = array (
  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.locking' => '\OC\Memcache\Redis',
  'memcache.distributed' => '\OC\Memcache\Redis',
  'redis' => [
     'host' => '/var/run/redis/redis.sock',
     'port' => 0,
     'timeout' => 0.0,
    ],
  'logtimezone' => '{{ date_time_zone }}',
  'blacklisted_files' => 
  array (
  0 => '.htaccess',
  1 => 'Thumbs.db',
  2 => 'thumbs.db',
  3 => 'desktop.ini',
    ),
  'activity_expire_days' => 20,
  'enable_previews' => true,
  'preview_max_filesize_image' => 2,
  'enabledPreviewProviders' => array(
        'OC\Preview\PNG',
        'OC\Preview\JPEG',
        'OC\Preview\GIF',
        'OC\Preview\HEIC',
        'OC\Preview\BMP',
        'OC\Preview\XBitmap',
        'OC\Preview\MP3',
        'OC\Preview\TIFF',
        'OC\Preview\PDF',
    ),
  'preview_max_x' => 480,
  'preview_max_y' => 270,
  'filesystem_check_changes' => 0,
  'log_rotate_size' => 104857600,
  'quota_include_external_storage' => false,
  'skeletondirectory' => '',
);
