function StopMotors()
{
    let url1 = "http://172.16.0.5/analog/5/0";
    let url2 = "http://172.16.0.5/analog/4/0";
    const Http = new XMLHttpRequest();
    Http.open("GET", url1);
    Http.send();
    
    const Http2 = new XMLHttpRequest();
    Http2.open("GET", url2);
    Http2.send();
}

async function callFunction(url)
{
    try {
        await fetch(url);
        
        return await 0;
    } catch (error) {
        console.log(error);
    }
}

function StartMotors()
{
    let url1 = "http://172.16.0.5/analog/5/255";
    let url2 = "http://172.16.0.5/analog/4/255";
    callFunction(url1);

    callFunction(url2);
    
}

function FrontMotor(motor)
{
    /*
    #define MOT1CW 8
    #define MOT1CCW 9
    #define MOT2CW 6
    #define MOT2CCW 7
    */
   var url1, url2;;
    if(motor == 1)
    {
        url1="http://172.16.0.5/digital/8/1"
        url2="http://172.16.0.5/digital/9/0"
    }
    else if (motor==2)
    {
        url1="http://172.16.0.5/digital/6/1"
        url2="http://172.16.0.5/digital/7/0"
    }

    const Http = new XMLHttpRequest();
    Http.open("GET", url1);
    Http.send();

    const Http2 = new XMLHttpRequest();

    Http2.open("GET", url2);
    Http2.send();

}

function BackMotor(motor)
{

}

