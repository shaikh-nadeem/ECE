<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Dipti">
        <title>{{env('APP_NAME')}}</title>    
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">    
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">   
    </head>
    <body style="margin: 0;font-family:sans-serif;">
        <table style="margin: 0;width: 100%;margin-top: 10px" cellspadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td>
                        <table style="width: 500px; margin: 0 auto; text-align: center; background: #1b75bc; padding: 10px; display: block;font-family:sans-serif;" cellspadding="0" cellspacing="0">
                            <tbody style="width: 100%;display: inline-table;background: #f2f9ff;border-radius: 20px;">
                                <tr>
                                    <td style="padding: 0">
                                        <div style="padding: 15px 0 15px;">
                                            <img src="{{asset('assets/img/logo.png')}}" style="height: 125px;" download="off" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 14px; text-align: left; line-height: 24px;">
                                        <div style="padding: 30px;">
                                            <p style="font-weight: 600;font-size: 15px">Dear {{$name}},</p>
                                            <p style="margin-bottom: 5px;margin-top: 0">Thank you for contacting ECE Teachers.</p>
                                            <p style="margin-bottom: 5px;margin-top: 0">We have received your inquiry, One of our expert will contact you within 24 Hours.</p>
                                            <p style="margin-bottom: 15px;margin-top: 0">Have a good day ahead</p>
                <p style="margin-bottom: 15px;margin-top: 0">Please reach us out on <a href="mailto:admin@eceteacher.co.nz">admin@eceteacher.co.nz</a> if you have something very important.</p>                             
                                            <p style="margin-bottom: 0;margin-top: 35px;font-weight: 600">Thank you.</p>                                                
                                        </div>
                                    </td>
                                </tr>                           
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

