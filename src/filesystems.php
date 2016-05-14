<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace", "null", "azure", "copy",
    |            "dropbox", "gridfs", "memory", "phpcr", "replicate", "sftp",
    |            "vfs", "webdav", "zip"
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'disks' => [

        'local' => [
            'driver'      => 'local',
            'root'        => storage_path('app'),

            // Optional Local Settings...
            // 'permissions' => [],
        ],

        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'ftp.example.com',
            'username' => 'your-username',
            'password' => 'your-password',

            // Optional FTP Settings...
            // 'port'     => 21,
            // 'root'     => '',
            // 'passive'  => true,
            // 'ssl'      => true,
            // 'timeout'  => 30,
        ],

        's3' => [
            'driver' => 's3',
            'key'    => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',

            // Optional S3 Settings...
            // 'root'   => '',
        ],

        'rackspace' => [
            'driver'    => 'rackspace',
            'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
            'username'  => 'your-username',
            'key'       => 'your-key',
            'region'    => 'IAD',
            'url_type'  => 'publicURL',
            'container' => 'your-container',
        ],

        'null' => [
            'driver' => 'null',
        ],

        'azure' => [
            'driver'      => 'azure',
            'accountName' => 'your-account-name',
            'apiKey'      => 'your-api-key',
            'container'   => 'your-container',
        ],

        'copy' => [
            'driver'         => 'copy',
            'consumerKey'    => 'your-consumer-key',
            'consumerSecret' => 'your-consumer-secret',
            'accessToken'    => 'your-access-token',
            'tokenSecret'    => 'your-token-secret',
        ],

        'dropbox' => [
            'driver'           => 'dropbox',
            'accessToken'      => 'your-access-token',
            'clientIdentifier' => 'your-client-identifier',
        ],

        'gridfs' => [
            'driver'  => 'gridfs',
            'server'  => 'your-server',
            'context' => 'your-context',
            'dbName'  => 'your-db-name',

            // You can also provide other MongoDB connection options here
        ],

        'memory' => [
            'driver' => 'memory',
        ],

        'phpcr-jackrabbit' => [
            'driver'         => 'phpcr',
            'jackrabbit_url' => 'your-jackrabbit-url',
            'workspace'      => 'your-workspace',
            'root'           => 'your-root',

            // Optional PHPCR Settings
            // 'userId'         => 'your-user-id',
            // 'password'       => 'your-password',
        ],

        'phpcr-dbal' => [
            'driver'    => 'phpcr',
            'database'  => 'mysql',
            'workspace' => 'your-workspace',
            'root'      => 'your-root',

            // Optional PHPCR Settings
            // 'userId'    => 'your-user-id',
            // 'password'  => 'your-password',
        ],

        'phpcr-prismic' => [
            'driver'      => 'phpcr',
            'prismic_uri' => 'your-prismic-uri',
            'workspace'   => 'your-workspace',
            'root'        => 'your-root',

            // Optional PHPCR Settings
            // 'userId'      => 'your-user-id',
            // 'password'    => 'your-password',
        ],

        'replicate' => [
            'driver'  => 'replicate',
            'master'  => 'local',
            'replica' => 's3',
        ],

        'sftp' => [
            'driver'        => 'sftp',
            'host'          => 'sftp.example.com',
            'username'      => 'username',
            'password'      => 'password',

            // Optional SFTP Settings
            // 'privateKey'    => 'path/to/or/contents/of/privatekey',
            // 'port'          => 22,
            // 'root'          => '/path/to/root',
            // 'timeout'       => 30,
            // 'directoryPerm' => 0755,
            // 'permPublic'    => 0644,
            // 'permPrivate'   => 0600,
        ],

        'vfs' => [
            'driver' => 'vfs',
        ],

        'webdav' => [
            'driver'   => 'webdav',
            'baseUri'  => 'http://example.org/dav/',

            // Optional WebDAV Settings
            // 'userName' => 'user',
            // 'password' => 'password',
            // 'proxy'    => 'locahost:8888',
            // 'authType' => 'digest',  // alternately 'ntlm' or 'basic'
            // 'encoding' => 'all',     // same as ['deflate', 'gzip', 'identity']
        ],

        'zip' => [
            'driver' => 'zip',
            'path'   => 'path/to/file.zip',
        ],

    ],

];
