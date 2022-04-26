<?php

namespace App\Http\Controllers;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class PdfController extends Controller
{
    //
    
    public function generate(){
        $data=Student::all();
        // echo $data;
        // die();
        // return view('pdf.pdfloader',compact('data'));
        $fileName='student_info.pdf';
        $mpdf=new \Mpdf\Mpdf([
              'margin_left'=>10,
              'margin_right'=>10,
              'margin_top'=>15,
              'margin_bottom'=>10,
              'margin_header'=>10,
              'margin_footer'=>10  
            ]);
            $html=\View::make('pdf.pdfloader')->with('data',$data);
            $html=$html->render();
            $mpdf->SetHeader('information 1|Student Info|{PAGENO}');
            $mpdf->SetFooter('Student Information');           
            $mpdf->WriteHTML($html);
            $mpdf->Output($fileName,'I');
    }
    public function generateexcel(){
        $data=Student::all();
        return (new FastExcel(Student::all()))->download('file.xlsx');
         
     }
}
