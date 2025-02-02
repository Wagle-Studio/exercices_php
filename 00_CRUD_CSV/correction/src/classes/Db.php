<?php

class Db
{
    private $pathToCsv;

    function __construct($pathToCsv)
    {
        $this->pathToCsv = $pathToCsv;
    }

    public function getPathToCsv(): mixed
    {
        return $this->pathToCsv;
    }

    public function setPathToCsv($pathToCsv): void
    {
        $this->pathToCsv = $pathToCsv;
    }

    private function readCsv(): mixed
    {
        return fopen($this->pathToCsv, 'r');
    }

    public function openCsv(): mixed
    {
        return fopen($this->pathToCsv, 'ab');
    }

    public function writeIntoCsv($file, $arrayToWrite): void
    {
        fputcsv($file, $arrayToWrite);
    }

    public function closeCsv($file): void
    {
        fclose($file);
    }

    public function readFromCsv(): array
    {
        $data = [];
        $csv = $this->readCsv();

        if ($csv !== false) {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row;
            }

            $this->closeCsv($csv);
        }

        return $data;
    }

    public function updateRecordById(string $id, array $updatedData): bool
    {
        $records = $this->readFromCsv();
        $isUpdated = false;

        foreach ($records as $index => $row) {
            if ($row[0] === $id) {
                $records[$index] = $updatedData;
                $isUpdated = true;
                break;
            }
        }

        if ($isUpdated) {
            $csv = fopen($this->pathToCsv, 'w');
            if ($csv !== false) {
                foreach ($records as $row) {
                    fputcsv($csv, $row);
                }
                fclose($csv);
            } else {
                return false;
            }
        }

        return $isUpdated;
    }

    public function deleteRecordByUserId(string $id): bool
    {
        $records = $this->readFromCsv();
        $isDeleted = false;

        $filteredRecords = array_filter($records, function ($row) use ($id, &$isDeleted) {
            if ($row[0] === $id) {
                $isDeleted = true;
                return false;
            }
            return true;
        });

        if ($isDeleted) {
            $csv = fopen($this->pathToCsv, 'w');
            if ($csv !== false) {
                foreach ($filteredRecords as $row) {
                    fputcsv($csv, $row);
                }
                fclose($csv);
            } else {
                return false;
            }
        }

        return $isDeleted;
    }
}
