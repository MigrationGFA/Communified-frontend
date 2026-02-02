<?php

namespace App\Libraries;

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf
{
    public function generate($html, $filename = '', $stream = true, $paper = 'A4', $orientation = 'landscape')
    {
        // Initialize Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper($paper, $orientation);

        // Render the PDF
        $dompdf->render();

        // Stream or save the PDF
        if ($stream) {
            // Clear any existing output
            if (ob_get_length()) ob_end_clean();

            // Set the headers for PDF output
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $filename . '"');
            header('Cache-Control: private, max-age=0, must-revalidate');
            header('Pragma: public');

            // Output the PDF content
            echo $dompdf->output();
            exit();
        } else {
            return $dompdf->output();
        }
    }
}
