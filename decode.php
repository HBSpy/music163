<?php

if(empty($argv[1])){
    exit("php decode.php [*.flac]\n");
}

$ret = shell_exec(sprintf("ffprobe -v quiet -print_format json -show_format %s", escapeshellarg($argv[1])));
$ret = json_decode($ret);
$data = $ret->format->tags->comment;
$data = substr($data, 22);
$data = openssl_decrypt($data, 'AES-128-ECB', "#14ljk_!\]&0U<'(");
$data = substr($data, 6);
$data = json_decode($data);

file_put_contents($albumPic = $data->album . "." . substr(strrchr($data->albumPic, '.'), 1), file_get_contents($data->albumPic));

if($data->format != 'flac'){
    exit($data->format);
}

$ret = shell_exec(sprintf("ffmpeg -i %s -acodec alac -vn output.m4a",
    escapeshellarg($argv[1])
));
$ret = shell_exec(sprintf("AtomicParsley output.m4a --artwork %s --comment 'Generated By HBSpy'",
    escapeshellarg($albumPic)
));

$handle = opendir(__DIR__);
while(($file = readdir($handle)) !== false){
    if($file == '.' || $file == '..'){
        continue;
    }

    if(substr($file, 0, 12) == 'output-temp-'){
        rename($file, $data->musicName . ".m4a");
        break;
    }
}

unlink($albumPic);
unlink('output.m4a');

