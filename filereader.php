<?php
class FileReader
{
    public function open_file($filename)
    {
        return fopen($filename, 'r');
    }

    public function read($resource)
    {
        $char = fgetc($resource);
        if ($char === false) {
            return 'EOF';
        }
        return $char;
    }

    public function close($resource)
    {
        fclose($resource);
    }
}

function count_words($filename)
{
    $fileReader = new FileReader();
    $resource = $fileReader->open_file($filename);

    if (!$resource) {
        echo "File tidak dapat dibuka.";
        return 0;
    }

    $inWord = false;
    $wordCount = 0;

    while (true) {
        $char = $fileReader->read($resource);

        if ($char === 'EOF') {
            if ($inWord) {
                $wordCount++;
            }
            break;
        }

        if ($char === ' ' || $char === "\n" || $char === "\t") {
            if ($inWord) {
                $wordCount++;
                $inWord = false;
            }
        } else {
            $inWord = true;
        }
    }

    $fileReader->close($resource);
    return $wordCount;
}
$filename = "text.txt";
$jumlahKata = count_words($filename);

echo "Jumlah kata dalam file: $jumlahKata";
