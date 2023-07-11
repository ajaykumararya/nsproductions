<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;
require_once dirname(__FILE__).'/dompdf/autoload.inc.php';

class Pdf extends Dompdf
{
    public function __construct(){
		parent::__construct();
// 		$this->filename = "laporan.pdf";
	}
    function createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='portrait'){
        
        // require_once dirname(__FILE__).'/dompdf/autoload.inc.php';
      
        $this->set_option('isRemoteEnabled',TRUE);
        $this->load_html($html, 'UTF-8');
        $this->set_paper($paper, $orientation);
        // $customPaper = array(0,0,2300,1700);
        // $this->set_paper($customPaper);
       
        $this->render();
        $CI =& get_instance();
        $CI->dompdf = $this;
        
        // echo $html ;
        // exit;
        if($download)
            $this->stream($filename.'.pdf', array('Attachment' => 1));
        else
            $this->stream($filename.'.pdf', array('Attachment' => 0));
    }
}
 //  $options = new Options();
        //  $options->setChroot('');
        
        //  $dompdf = new Dompdf();
        //  $dompdf->setOptions($options);
        //  $dompdf->loadHtml($html, 'UTF-8');
?>