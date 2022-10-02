//PHP записать данные в файл
$filename = 'somefile.txt';
$this = 'token';
//записываем текст в файл
file_put_contents($filename, $this);
