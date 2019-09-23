<?php
namespace common\components;

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class FileReader
{

    public function doImport($arrInputs)
    {
        $arrResponse = [];
        $objReader = ReaderEntityFactory::createReaderFromFile($arrInputs['file_path']);
        $objReader->open($arrInputs['file_path']);

        $intRow = 0;
        foreach ($objReader->getSheetIterator() as $objSheet) {
            foreach ($objSheet->getRowIterator() as $objRow) {
                $arrObjCells = $objRow->getCells();

                $arrResponse[] = $this->makeFormt($arrObjCells);
            }
            $intRow ++;
        }
        $arrResponse = $this->makeArray($arrResponse);
        unset($arrInputs);
        $objReader->close();
        return $arrResponse;
    }

    private function makeFormt($arrObjCells)
    {
        $arrResponse = [];
        for ($i = 0; $i < count($arrObjCells); $i ++) {
            $arrResponse[] = $arrObjCells[$i]->getValue();
        }
        unset($arrObjCells);
        return $arrResponse;
    }

    private function makeArray($arrData)
    {
        $arrResponse = [];
        foreach ($arrData as $intKey => $arrElement) {
            $arrResponse[] = $arrElement;
        }
        unset($arrData);
        return $arrResponse;
    }
}


