<?php

class Exel_c extends CI_Controller{

	public function __construct(){
           
          parent::__construct();
          
          $this->load->model(array('casos_m', 'catalogos_m', 'actores_m'));
          
            $this->load->helper(array('html', 'url'));					
            
            $this->load->library('form_validation');
			//load our new PHPExcel library
			$this->load->library('exel');
          
    }
	
	function index() 
	{
		echo 'hola';
			
		$this->create_excel();
	}
	
	function create_excel()
	{
		//activate worksheet number 1
		$this->exel->setActiveSheetIndex(0);
		//name the worksheet
		$this->exel->getActiveSheet()->setTitle('test worksheet');
		//set cell A1 content with some text
		$this->exel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
		//change the font size
		$this->exel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
		//make the font become bold
		$this->exel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		//merge cell A1 until D1
		$this->exel->getActiveSheet()->mergeCells('A1:D1');
		//set aligment to center for that merged cell (A1 to D1)
		$this->exel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		 
		$filename='just_some_random_name.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
		             
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($this->exel, 'Excel5');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
	
}

?>