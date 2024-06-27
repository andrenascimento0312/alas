<?php

namespace Mvc\Controllers;

use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;


use PDO;

class GenerateAtaSacramentalController implements Controller
{
	public function request(PDO $pdo): void
	{
		$templatePath = __DIR__ . '/../Templates/ata-sacramental.docx';

		$templateProcessor = new TemplateProcessor($templatePath);

		$alaName = $_POST['ala-name'];
		$templateProcessor->setValue('alaName', $alaName);
		$pathToSave = __DIR__ . '/../Templates/storage/ata.docx';
		$pathToSavePDF = __DIR__ . '/../Templates/storage/ata.pdf';
		$templateProcessor->saveAs($pathToSave);

		$normalizedPath = realpath($pathToSave);
		$normalizedPathPDF = realpath($pathToSavePDF);
		$libDir = realpath(__DIR__ . '/../../vendor/dompdf/dompdf');

		Settings::setPdfRendererPath($libDir);
		Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);

		//Load temp file
		$phpWord = IOFactory::load($normalizedPath);

		//Save it
		$xmlWriter = IOFactory::createWriter($phpWord, 'PDF');
		
		$teste = $xmlWriter->save($normalizedPathPDF);
		var_dump($teste);
	}
		
}
