<?php
// 디렉토리와 그 안의 모든 파일 및 하위 디렉토리를 삭제하는 함수
function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        return false; // 디렉토리가 존재하지 않으면 false 반환
    }
    
    $items = scandir($dir); // 디렉토리 내 파일과 디렉토리 목록 불러오기
    foreach ($items as $item) {
        if ($item == '.' || $item == '..') {
            continue; // 현재 디렉토리와 상위 디렉토리는 건너뜀
        }
        
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        
        // 만약 파일이면 삭제, 디렉토리면 재귀적으로 삭제
        if (is_dir($path)) {
            deleteDirectory($path); // 재귀 호출
        } else {
            unlink($path); // 파일 삭제
        }
    }
    
    return rmdir($dir); // 최종적으로 빈 디렉토리 삭제
}

$dir = '81~90_back';

if (deleteDirectory($dir)) {
    echo "$dir は削除されました。";
} else {
    echo "$dir は存在しないか、削除に失敗しました。";
}
?>