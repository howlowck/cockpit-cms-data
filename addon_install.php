#!/usr/bin/env php
<?php

// Run this script from the root directory NOT from the storage directory

$addons = [
    [
        'zip' => 'https://github.com/pauloamgomes/Cockpit-MultipleCollectionLink/archive/1.1.zip',
        'name' => 'MultipleCollectionLink',
        'extractPath' => '/',
    ],
    [
        'zip' => 'https://github.com/pauloamgomes/ImageStyles/archive/1.7.zip',
        'name' => 'ImageStyles',
        'extractPath' => '/',
    ],
    [
        'zip' => 'https://github.com/agentejo/LayoutComponents/archive/master.zip',
        'name' => 'LayoutComponents',
        'extractPath' => '/',
    ],
    [
        'zip' => 'https://github.com/pauloamgomes/Cockpit-CustomComponents/archive/master.zip',
        'name' => 'CustomComponents',
        'extractPath' => '/',
    ],
    [
        'zip' => 'https://github.com/raffaelj/cockpit_UniqueSlugs/archive/master.zip',
        'name' => 'UniqueSlugs',
        'extractPath' => '/UniqueSlugs',
    ],
    [
        'zip' => 'https://github.com/agentejo/CloudStorage/archive/master.zip',
        'name' => 'CloudStorage',
        'extractPath' => '/',
    ]
];

function makeZipName($name) {
    return $name . '.zip';
}

function rrdir($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!rrdir($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}

if (is_dir('temp')) {
    rrdir('temp');
}
mkdir('temp');

foreach($addons as $addon) {
    $filename = makeZipName($addon['name']);
    $downloadPath = $addon['zip'];
    file_put_contents($filename, fopen($downloadPath, 'r'));
    $zip = new ZipArchive;
    if ($zip->open($filename) === TRUE) {
        $zip->extractTo('temp');
        $zip->close();
        unlink($filename);
        $directoryName = scandir('temp')[2];
        echo var_dump($directoryName);
        
        if (is_dir("addons/" . $addon['name'])) {
            rrdir("addons/" . $addon['name']);
            echo "deleted old " . $addon['name'] . "from /addons";
        }

        rename("temp/$directoryName" . $addon['extractPath'], "addons/" . $addon['name']);

        echo "$filename is processed successfully\n";
    } else {
        echo "$filename is process failed\n";
    }
}

rrdir('temp');