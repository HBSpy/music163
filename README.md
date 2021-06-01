# README

FLAC转ALAC(m4a)，并且尝试从163获取专辑封面

## Deps

* ffmpeg

## Usage

php decode.php *.flac

```cli
php decode.php 暗杠\,寅子\ -\ 千里行走.flac
ffmpeg version 4.1 Copyright (c) 2000-2018 the FFmpeg developers
  built with gcc 4.8.5 (GCC) 20150623 (Red Hat 4.8.5-36)
  configuration:
  libavutil      56. 22.100 / 56. 22.100
  libavcodec     58. 35.100 / 58. 35.100
  libavformat    58. 20.100 / 58. 20.100
  libavdevice    58.  5.100 / 58.  5.100
  libavfilter     7. 40.101 /  7. 40.101
  libswscale      5.  3.100 /  5.  3.100
  libswresample   3.  3.100 /  3.  3.100
Input #0, flac, from '暗杠,寅子 - 千里行走.flac':
  Metadata:
    ALBUM           : 千里行走
    ARTIST          : 暗杠/寅子
    comment         : 163 key(Don't modify):L64FU3W4YxX3ZFTmbZ+8/SY843LyOHXeogOzNkDXIZQMr/ZpI1x44OcufErL5jLE4/+aACm+CSJEMWP/2gMfImy3KnkHt35IT6QESl2gTYo5jjLD9K3wnhd1coe/vRmYEelZtexZb9vikSc2lCOoi4dn2/r3kIlXUHcxcIj2wNdJUyeoHsqOAxJ16xtriy3CSDf+KzSm9eYdBtXA4JvhTrjkZFZZN8jc2xjh5catV
    ENCODER         : Lavf57.83.100
    TITLE           : 千里行走
    track           : 1
  Duration: 00:03:35.79, start: 0.000000, bitrate: 884 kb/s
    Stream #0:0: Audio: flac, 44100 Hz, stereo, s16
    Stream #0:1: Video: mjpeg, yuvj420p(pc, bt470bg/unknown/unknown), 640x640 [SAR 72:72 DAR 1:1], 90k tbr, 90k tbn, 90k tbc
    Metadata:
      comment         : Cover (front)
Stream mapping:
  Stream #0:0 -> #0:0 (flac (native) -> alac (native))
Press [q] to stop, [?] for help
Output #0, ipod, to 'output.m4a':
  Metadata:
    ALBUM           : 千里行走
    ARTIST          : 暗杠/寅子
    comment         : 163 key(Don't modify):L64FU3W4YxX3ZFTmbZ+8/SY843LyOHXeogOzNkDXIZQMr/ZpI1x44OcufErL5jLE4/+aACm+CSJEMWP/2gMfImy3KnkHt35IT6QESl2gTYo5jjLD9K3wnhd1coe/vRmYEelZtexZb9vikSc2lCOoi4dn2/r3kIlXUHcxcIj2wNdJUyeoHsqOAxJ16xtriy3CSDf+KzSm9eYdBtXA4JvhTrjkZFZZN8jc2xjh5catV
    track           : 1
    TITLE           : 千里行走
    encoder         : Lavf58.20.100
    Stream #0:0: Audio: alac (alac / 0x63616C61), 44100 Hz, stereo, s16p, 128 kb/s
    Metadata:
      encoder         : Lavc58.35.100 alac
size=   23549kB time=00:03:35.85 bitrate= 893.7kbits/s speed= 107x
video:0kB audio:23538kB subtitle:0kB other streams:0kB global headers:0kB muxing overhead: 0.046110%
```

