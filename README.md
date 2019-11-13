# laravel-html-form
generate PDF from HTML in PHP Laravel using Dompdf library. How to Create dynamic PDF
in Laravel using laravel-dompdf package. How to generate dynamic pdf file in Laravel
using Dompdf plugin.laravel html form

For create PDF file in Laravel first we want to download laravel-dompdf package. 
For this first we want to write following command in command prompt terminal.

#composer require barryvdh/laravel-dompd

Download this packege we have to register this package into Laravel working environment, 
for this we have to open config/app.php file and add service provider and aliase details.

'providers' => [
        ..........
        Barryvdh\DomPDF\ServiceProvider::class,
    ],

    'aliases' => [
        ..........
        'PDF' => Barryvdh\DomPDF\Facade::class,
    ],
After this we have to create controller in our Laravel application by using composer command.
This controller will handle http requrest to convert html code to PDF file.
