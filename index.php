<?php 

$CgroupBytes = exec('cat /sys/fs/cgroup/memory/memory.limit_in_bytes');

echo formatBytes($CgroupBytes);

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    
    $pow = min($pow, count($units) - 1); 

     $bytes /= pow(1024, $pow);
 
    return round($bytes, $precision) . ' ' . $units[$pow]; 
}