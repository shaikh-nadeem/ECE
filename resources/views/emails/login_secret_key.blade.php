<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body style="margin: 0;font-family:sans-serif;">       
        <div style="width: 500px; margin: 0; text-align: center; background: #1b75bc; padding: 10px; display: block;font-family:sans-serif;" cellspadding="0" cellspacing="0">
            <div style="width: 100%;display: inline-table;background: #f2f9ff;border-radius: 20px;">
                <div>
                    <div style="padding: 15px 0 15px;">
                        <img src="{{asset('assets/img/logo.png')}}" style="height: 125px" />
                    </div>
                </div>
                <div>
                    <div style="font-size: 14px; text-align: left; line-height: 24px;padding: 30px;">                                        
                        <p style="font-weight: 600;font-size: 15px">Dear Admin,</p>
                        <p style="margin-bottom: 5px;margin-top: 0">Good Day.</p>
                        <p style="margin-bottom: 5px;margin-top: 0">Your login secret key is {{$secret_key}}</p>
                        <p style="margin-bottom: 15px;margin-top: 0">Email sent from <a href="http://eceteacher.betadelivery.com/contact">http://eceteacher.betadelivery.com/contact</a></p>                             
                            <p style="margin-bottom: 0;margin-top: 35px;font-weight: 600">Thank you.</p> 
                    </div>
                </div>                           
            </div>
        </div>
    </body>
</html>