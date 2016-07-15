PiwikMobileDetector
============

A simple piwik device detector bridge for  `suncat/mobile-detect-bundle`

Installation
------------


```bash
 
 composer require "videni/piwik-device-detector-bridge"
 
```


Usage
-----



``` yml

mobile_detect:
    mobile_detect.mobile_detector.class: PiwikDeviceDetector\PiwikDeviceDetector

```




Warning
------


The `isDevice*` magic method of this class doesn't behave like `mobiledetect/mobiledetectlib`, that library uses these keys
 
```
 iPhone|BlackBerry|HTC|Nexus|Dell|Motorola|Samsung|Sony|Asus|Palm|Vertu...
```
but this one uses following keys
```

'desktop'               
'smartphone'            
'tablet'                
'feature phone'         
'console'               
'tv'                    
'car browser'           
'smart display'         
'camera'                
'portable media player' 
'phablet'               
   
```
    
We will fill this gap in the future

Unit Tests
----------

``` 

Todo

```           
License
-------

PiwikMobileDetector is released under the MIT License. See the bundled LICENSE file for details.
